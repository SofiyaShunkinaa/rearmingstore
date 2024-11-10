<?php
header('Content-Type: application/json');
require_once('config.php');
require_once(DIR_SYSTEM . 'startup.php');

$registry = new Registry();
$loader = new Loader($registry);
$db = new DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


function getProductFromAPI($parserProductId) {
    $url = "http://193.227.240.252:3000/api/products/" . $parserProductId;
    $jsonData = file_get_contents($url);
    return json_decode($jsonData, true);
}

function updateProductOptionsPrices($productId, $schema, $productData) {
    global $db;
  
    foreach ($schema as $optionValueId => $apiPriceId) {
        foreach ($productData['price'] as $price) {
            if ($price['id'] === $apiPriceId) {
                $usdPrice = (float)$price['usd'];
                $sql = "
                    UPDATE " . DB_PREFIX . "product_option_value 
                    SET price = '" . $db->escape($usdPrice) . "' 
                    WHERE product_id = '" . (int)$productId . "' 
                    AND option_value_id = '" . (int)$optionValueId . "'
                ";

                $db->query($sql);
            }
        }
    }
}

$products = json_decode(file_get_contents('parser.schema.json'), true);

foreach ($products as $product) {
   $productId = $product['product_id'];
   $parserProductId = $product['parser_product_id'];

   $productData = getProductFromAPI($parserProductId);

   if ($productData && isset($product['schema'])) {
      updateProductOptionsPrices($productId, $product['schema'], $productData);
   }
}

echo 'success';

function getProductOptionsDetailsFORTEST($productId) {
    global $db;

    $sql = "
        SELECT 
            po.product_option_id,
            pov.product_option_value_id,
            od.name AS option_name,
            ovd.name AS option_value_name,
            pov.price AS option_price,
            pov.option_value_id
        FROM " . DB_PREFIX . "product_option po
        LEFT JOIN " . DB_PREFIX . "product_option_value pov ON po.product_option_id = pov.product_option_id
        LEFT JOIN " . DB_PREFIX . "option_description od ON po.option_id = od.option_id
        LEFT JOIN " . DB_PREFIX . "option_value_description ovd ON pov.option_value_id = ovd.option_value_id
        WHERE po.product_id = '" . (int)$productId . "'
    ";

    $result = $db->query($sql);

    $groupedOptions = [];
    foreach ($result->rows as $row) {
        $optionName = $row['option_name'];
        if (!isset($groupedOptions[$optionName])) {
            $groupedOptions[$optionName] = [
                'product_option_id' => $row['product_option_id'],
                'values' => []
            ];
        }

        $groupedOptions[$optionName]['values'][] = [
            'option_value_name' => $row['option_value_name'],
            'option_price' => $row['option_price'],
            'option_value_id' => $row['option_value_id']
        ];
    }

    return $groupedOptions;
}

// echo json_encode(getProductOptionsDetailsFORTEST('42'));
?>
