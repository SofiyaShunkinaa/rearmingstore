<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('admin/config.php');
require_once(DIR_SYSTEM . 'startup.php');
require_once('admin/model/catalog/product.php'); 
require_once('admin/model/catalog/option.php');

$registry = new Registry(); 
$config = new Config(); 
$loader = new Loader($registry);
$db = new DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

$registry->set('db', $db);
$registry->set('config', $config); 

$productModel = new ModelCatalogProduct($registry); 
$optionModel = new ModelCatalogOption($registry); 


function getSlider($prices) {
    foreach ($prices as $price) {
        if (isset($price['id']) && $price['id'] === 'slider') {
            return $price;
        }
    }
}

function downloadImage($url, $savePath) {
    $imageName = basename($url);
    $fullSavePath = $savePath . $imageName;

    $imageContent = file_get_contents($url);
    if ($imageContent !== false) {
        file_put_contents($fullSavePath, $imageContent);
        return 'catalog/' . $imageName;
    } else {
        throw new Exception('Не удалось скачать изображение: ' . $url);
    }
}

function getCategory($category_name, $db) {
    $query = $db->query("SELECT * FROM `" . DB_PREFIX . "category_description` WHERE `name` = '" . $db->escape($category_name) . "'");
    if ($query->num_rows) {
    $category_info = $query->row;
    $category_id = $category_info['category_id'];
    return $category_id;
    } else {
    echo "Категория с именем '$category_name' не найдена.";
    }
}

function findProductByNameAndTag($name, $tag, $db) {
    $query = $db->query("SELECT p.product_id 
                         FROM `" . DB_PREFIX . "product` p
                         LEFT JOIN `" . DB_PREFIX . "product_description` pd ON p.product_id = pd.product_id
                         WHERE pd.name = '" . $db->escape($name) . "' 
                         AND pd.tag = '" . $db->escape($tag) . "'");

    if ($query->num_rows) {
        return $query->row['product_id'];
    } else {
        return false;
    }
}

function fetchParserOptions() {
    $data = json_decode(file_get_contents("http://193.227.240.252:3000/api/products"), true);
    return $data;
}

function createDependsOptions($options, $currency, $optionModel, $db) {
    $sortOrder = 999;
    $name = '';

    $type = 'checkbox'; 

    foreach ($options as $option) {
        $name = $option['parentName'];
        break;
    }

    $optionData = [
        'type' => $type,
        'sort_order' => $sortOrder,
        'option_description' => [
            1 => ['name' => $name]
        ],
      
    ];

    $option_id = $optionModel->addOption($optionData);
    $db->query("UPDATE `" . DB_PREFIX . "option` SET `display` = 0 WHERE `option_id` = '" . (int)$option_id . "'");
    $product_option_value = [];
    $sortOptionsOrder = 0;

    foreach ($options as $optionValue) {
        if (!array_key_exists($currency, $optionValue)) {
            continue;
        }

        $price = $optionValue[$currency] !== null ? round(floatval($optionValue[$currency]), 2) : 0;

        $db->query("INSERT INTO `" . DB_PREFIX . "option_value` SET `option_id` = '" . (int)$option_id . "', `sort_order` = $sortOptionsOrder");
        $sortOptionsOrder++;
        $option_value_id = $db->getLastId();

        $nameEscaped = $db->escape($optionValue['name']);
        $prefixEscaped = $optionValue['prefix'];
        $db->query("INSERT INTO `" . DB_PREFIX . "option_value_description` SET `option_value_id` = '" . (int)$option_value_id . "', `language_id` = '1', `option_id` = '" . (int)$option_id . "', `name` = '" . $nameEscaped . "'");

        $product_option_value[] = [
            'option_value_id' => $option_value_id,
            'quantity' => 1,
            'subtract' => 0,
            'price' => $price,
            'price_prefix' => "$prefixEscaped",
            'points' => 0,
            'points_prefix' => '+',
            'weight' => 1.0,
            'weight_prefix' => '+'
        ];
    }

    $product_options = [
        'option_id' => $option_id,
        'type' => $type,
        'required' => 0,
        'product_option_value' => $product_option_value
    ];

    return $product_options;
}


function createOptions($priceOptions, $currency, $optionModel, $db) {
    $product_options = [];
    $sortOrder = count($priceOptions);
    foreach ($priceOptions as $option) {
          if (!isset($option['options'])) {
            if (isset($option['type'])) {
                if ($option['type'] === 'slider') {
                    continue;
                }
    
                if ($option['type'] === 'main' || $option['type'] === 'dropdown') {
                    $option['type'] = 'select';
                }
            }

            $main_name = '';
            if (isset($option['type']) && $option['type'] === "main") {
                $main_name = $option['name'];
            }

            $optionData = [
                'type' => isset($option['type']) ? $option['type'] : 'select',
                'sort_order' => $sortOrder,
                'option_description' => [
                    1 => ['name' => $main_name]
                ],
            ];

            $option_id = $optionModel->addOption($optionData);
            
            $price = isset($option[$currency]) ? round(floatval($option[$currency]), 2) : 0;

            $db->query("INSERT INTO `" . DB_PREFIX . "option_value` SET `option_id` = '" . (int)$option_id . "', `sort_order` = 100");
            $option_value_id = $db->getLastId();

            $nameEscaped = $db->escape($option['name']);
            $db->query("INSERT INTO `" . DB_PREFIX . "option_value_description` SET `option_value_id` = '" . (int)$option_value_id . "', `language_id` = '1', `option_on_display` = '" . $option_on_display . "', `option_id` = '" . (int)$option_id . "', `name` = '" . $nameEscaped . "'");
            $prefix = $option['prefix'];
            $product_option_value = [];
            $product_option_value[] = [
                'option_value_id' => $option_value_id,
                'quantity' => 1,
                'subtract' => 0,
                'price' => $price,
                'price_prefix' => "$prefix",
                'points' => 0,
                'points_prefix' => '+',
                'weight' => 1.0,
                'weight_prefix' => '+'
            ];

            $product_options[] = [
                'option_id' => $option_id,
                'type' => $option['type'],
                'required' => 0,
                'product_option_value' => $product_option_value
            ];
            
            $sortOrder--;
            continue;
        };
        
        $hasCurrency = false;
        foreach ($option['options'] as $optionValue) {
            if (array_key_exists($currency, $optionValue)) {
                $hasCurrency = true;
                break;
            }
        }

        if (!$hasCurrency) {
            continue;
        }
        
        if ($option['type'] === 'dropdown') {
            $option['type'] = 'select';
        };

        $optionData = [
            'type' => $option['type'],
            'sort_order' => $sortOrder,
            'option_description' => [
                1 => ['name' => $option['name']]
            ],
        ];

        $option_id = $optionModel->addOption($optionData);

        $product_option_value = [];
        $sortOptionsOrder = 0;
        foreach ($option['options'] as $optionValue) {
            if (!array_key_exists($currency, $optionValue)) {
                continue;
            };

            $price = $optionValue[$currency] !== null ? round(floatval($optionValue[$currency]), 2) : 0;

            $db->query("INSERT INTO `" . DB_PREFIX . "option_value` SET `option_id` = '" . (int)$option_id . "', `sort_order` = $sortOptionsOrder");
            $sortOptionsOrder++;
            $option_value_id = $db->getLastId();
            $option_on_display = null;
            if (isset($optionValue['depends']) && !empty($optionValue['depends'])) {
                $dependsOptions = createDependsOptions($optionValue['depends'], $currency, $optionModel, $db);
                $option_on_display = $dependsOptions['option_id'];
                $product_options = array_merge($product_options, [$dependsOptions]);
            }

            
            $nameEscaped = $db->escape($optionValue['name']);
            $prefixEscaped = $optionValue['prefix'];
            $db->query("INSERT INTO `" . DB_PREFIX . "option_value_description` SET `option_value_id` = '" . (int)$option_value_id . "', `language_id` = '1', `option_on_display` = '" . $option_on_display . "', `option_id` = '" . (int)$option_id . "', `name` = '" . $nameEscaped . "'");
            
            
            $product_option_value[] = [
                'option_value_id' => $option_value_id,
                'quantity' => 1,
                'subtract' => 0,
                'price' => $price,
                'price_prefix' => "$prefixEscaped",
                'points' => 0,
                'points_prefix' => '+',
                'weight' => 1.0,
                'weight_prefix' => '+'
            ];
            
            
        }

        $product_options[] = [
            'option_id' => $option_id,
            'type' => $option['type'],
            'required' => 0,
            'product_option_value' => $product_option_value
        ];
        $sortOrder--;
    }   

    return $product_options;
}

try {
    $products = fetchParserOptions();

    foreach ($products as $product) {
        $name = $product['name'];
        $time = $product['time'];
        $time_to_complete = $product['timeComplete'];
        $description = $product['description'];
        $priceOptions = $product['price'];
        $category_name = $product['category'];

        $already_exist = findProductByNameAndTag($name, 'US SERVERS', $db);
        if($already_exist){
            $new_options = [];
            $new_options['product_option'] = createOptions($priceOptions, 'usd', $optionModel, $db);
            $slider = getSlider($priceOptions);
            $db->query("UPDATE `" . DB_PREFIX . "product` SET `price` = '" . $product['fromPriceUsd'] . "' WHERE `product_id` = '" . (int)$already_exist . "'");

            $productModel->editProductOption($already_exist,  $new_options);
            $already_exist_eur = findProductByNameAndTag($name, 'EU SERVERS', $db);
            $new_options['product_option'] = createOptions($priceOptions, 'eur', $optionModel, $db);
            $db->query("UPDATE `" . DB_PREFIX . "product` SET `price` = '" . $product['fromPriceEur'] . "' WHERE `product_id` = '" . (int)$already_exist_eur . "'");
            $productModel->editProductOption($already_exist_eur, $new_options);
            
            if($slider) {
                    $sql = "
                        UPDATE oc_product  
                        SET 
                            name_option_slider = '" . $slider['name'] . "', 
                            max_value_option_slider = '" . $slider['max'] . "', 
                            min_value_option_slider = '" . $slider['min'] . "',
                            percent_value_slider = '" . $slider['multiNumber'] . "' 
                        WHERE product_id = '" . $already_exist . "'
                    ";

                    $db->query($sql);
                    $sql_eur = "
                        UPDATE oc_product
                        SET 
                            name_option_slider = '" . $slider['name'] . "', 
                            max_value_option_slider = '" . $slider['max'] . "', 
                            min_value_option_slider = '" . $slider['min'] . "',
                            percent_value_slider = '" . $slider['multiNumber'] . "' 
                        WHERE product_id = '" . $already_exist_eur . "'
                    ";

                   $db->query($sql_eur);
            }
            echo 'updated usd' . $already_exist . 'updated eur ' . $already_exist_eur;
            continue;
        }
        
        $imageUrl = $product['image'];
        $imageFolder = 'image/catalog/';
        $imagePath = downloadImage($imageUrl, $imageFolder);
        
        $data = [
            'model' => $name,
            'sku' => '',
            'upc' => '',
            'ean' => '',
            'jan' => '',
            'isbn' => '',
            'mpn' => '',
            'location' => '',
            'quantity' => 99,
            'minimum' => 1,
            'subtract' => 0,
            'stock_status_id' => 6,
            'date_available' => date('Y-m-d'),
            'manufacturer_id' => 0,
            'shipping' => 1,
            'price' => 0,
            'points' => 0,
            'weight' => 1.0,
            'weight_class_id' => 1,
            'length' => 10.0,
            'width' => 10.0,
            'height' => 10.0,
            'length_class_id' => 1,
            'status' => 1,
            'tax_class_id' => 9,
            'sort_order' => 1,
            'image' => $imagePath,
            'product_description' => [
                1 => [
                    'name' => $name,
                    'description' => $description,
                    'timestart' => $time,
                    'timecomplete' => $time_to_complete,
                    'why' => '',
                    'payments' => '',
                    'tag' => '',
                    'meta_title' => $name,
                    'meta_description' => $name,
                    'meta_keyword' => '',
                    'language_id' => 1
                ],
            ],
            'product_store' => [0],
        ];

        $usdData = $data;
        $category_id = getCategory($category_name, $db);
        $layout_id = 0;
        $store_id = 0;
        
        $data['product_option'] = createOptions($priceOptions, 'eur', $optionModel, $db);
        $data['product_option'] = array_reverse($data['product_option']);
        $data['product_category'] = [$category_id];
        $data['product_description'][1]['tag'] = 'EU SERVERS';
        $data['price'] = $product['fromPriceEur'];
        $product_eur_id = $productModel->addProduct($data);
        $db->query("INSERT INTO `" . DB_PREFIX . "product_to_layout` SET `product_id` = '" . (int)$product_eur_id . "', `store_id` = '" . (int)$store_id . "', `layout_id` = '" . (int)$layout_id . "'");


        $usdData['product_option'] = createOptions($priceOptions, 'usd', $optionModel, $db);
        $usdData['product_option'] = array_reverse($usdData['product_option']);
        $usdData['product_related'] = array($product_eur_id);
        $usdData['sort_order'] = 1;
        $usdData['product_category'] = [$category_id];
        $usdData['product_description'][1]['tag'] = 'US SERVERS';
        $usdData['price'] = $product['fromPriceUsd'];
        $product_usd_id = $productModel->addProduct($usdData);
        $db->query("INSERT INTO `" . DB_PREFIX . "product_to_layout` SET `product_id` = '" . (int)$product_usd_id . "', `store_id` = '" . (int)$store_id . "', `layout_id` = '" . (int)$layout_id . "'");
       
        echo "EUR Product ID: " . $product_eur_id . "\n";
        echo "USD Product ID: " . $product_usd_id . "\n";
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>
