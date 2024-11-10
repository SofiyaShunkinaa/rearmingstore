<?php
switch ($_SERVER['QUERY_STRING']) {
	// Pages + Categories
	case 'route=common/home':
		header('Location: /');
		exit;
	case 'route=information/information&information_id=11':
		header('Location: contacts');
		exit;
	case 'route=product/category&path=65':
		header('Location: hot-offers');
		exit;
	case 'route=product/category&path=79_83':
		header('Location: hot-offers');
		exit;
	case 'route=product/category&path=83':
		header('Location: hot-offers');
		exit;
	case 'route=product/category&path=79':
		header('Location: shop');
		exit;
	case 'route=product/category&path=80':
		header('Location: wow-dragonflight');
		exit;
	case 'route=product/category&path=80_62':
		header('Location: mythic-dungeons');
		exit;
	case 'route=product/category&path=62':
		header('Location: mythic-dungeons');
		exit;
	case 'route=product/category&path=80_61':
		header('Location: raids');
		exit;
	case 'route=product/category&path=61':
		header('Location: raids');
		exit;
	case 'route=product/category&path=80_66':
		header('Location: powerleveling');
		exit;
	case 'route=product/category&path=66':
		header('Location: powerleveling');
		exit;
	case 'route=product/category&path=80_68':
		header('Location: pvp');
		exit;
	case 'route=product/category&path=68':
		header('Location: pvp');
		exit;
	case 'route=product/category&path=80_86':
		header('Location: reputations');
		exit;
	case 'route=product/category&path=86':
		header('Location: reputations');
		exit;
	case 'route=product/category&path=59':
		header('Location: packages');
		exit;
	case 'route=information/information&information_id=3':
		header('Location: privacy');
		exit;
	case 'route=information/information&information_id=6':
		header('Location: refund');
		exit;
	case 'route=information/information&information_id=5':
		header('Location: terms');
		exit;
	// Mythic+ Dungeons
	case 'route=product/product&product_id=27':
		header('Location: keystone-hero-boost-eu');
		exit;
	case 'route=product/product&product_id=28':
		header('Location: keystone-hero-boost-us');
		exit;
	case 'route=product/product&product_id=23':
		header('Location: keystone-master-boost-eu');
		exit;
	case 'route=product/product&product_id=24':
		header('Location: keystone-master-boost-us');
		exit;
	case 'route=product/product&product_id=18':
		header('Location: mythic-bis-Items-boost-eu');
		exit;
	case 'route=product/product&product_id=19':
		header('Location: mythic-bis-Items-boost-us');
		exit;
	case 'route=product/product&product_id=16':
		header('Location: mythic-bundle-eu');
		exit;
	case 'route=product/product&product_id=17':
		header('Location: mythic-bundle-us');
		exit;
	case 'route=product/product&product_id=25':
		header('Location: mythic-gear-boost-eu');
		exit;
	case 'route=product/product&product_id=26':
		header('Location: mythic-gear-boost-us');
		exit;
	case 'route=product/product&product_id=21':
		header('Location: mythic-keys-boost-eu');
		exit;
	case 'route=product/product&product_id=22':
		header('Location: mythic-keys-boost-us');
		exit;
	// Raids
	case 'route=product/product&product_id=61':
		header('Location: amirdrassil-heroic-boost-eu');
		exit;
	case 'route=product/product&product_id=62':
		header('Location: amirdrassil-heroic-boost-us');
		exit;
	case 'route=product/product&product_id=65':
		header('Location: amirdrassil-mythic-boost-eu');
		exit;
	case 'route=product/product&product_id=66':
		header('Location: amirdrassil-mythic-boost-us');
		exit;
	case 'route=product/product&product_id=71':
		header('Location: amirdrassil-normal-boost-eu');
		exit;
	case 'route=product/product&product_id=72':
		header('Location: amirdrassil-normal-boost-us');
		exit;
	case 'route=product/product&product_id=69':
		header('Location: awakening-the-dragonflight-raids-boost-eu');
		exit;
	case 'route=product/product&product_id=70':
		header('Location: awakening-the-dragonflight-raids-boost-us');
		exit;
	case 'route=product/product&product_id=63':
		header('Location: wow-full-raid-gear-boost-eu');
		exit;
	case 'route=product/product&product_id=64':
		header('Location: wow-full-raid-gear-boost-us');
		exit;
	case 'route=product/product&product_id=67':
		header('Location: wow-tier-sets-boost-eu');
		exit;
	case 'route=product/product&product_id=68':
		header('Location: wow-tier-sets-boost-us');
		exit;
	// Powerleveling
	case 'route=product/product&product_id=57':
		header('Location: dragonflight-selfplay-leveling-boost-eu');
		exit;
	case 'route=product/product&product_id=58':
		header('Location: dragonflight-selfplay-leveling-boost-us');
		exit;
	case 'route=product/product&product_id=59':
		header('Location: dragonflight-starter-package-eu');
		exit;
	case 'route=product/product&product_id=60':
		header('Location: dragonflight-starter-package-us');
		exit;
	case 'route=product/product&product_id=55':
		header('Location: wow-powerleveling-boost-eu');
		exit;
	case 'route=product/product&product_id=56':
		header('Location: wow-powerleveling-boost-us');
		exit;
	// PvP
	case 'route=product/product&product_id=37':
		header('Location: 2v2-arena-rating-boost-eu');
		exit;
	case 'route=product/product&product_id=38':
		header('Location: 2v2-arena-rating-boost-us');
		exit;
	case 'route=product/product&product_id=39':
		header('Location: 3v3-arena-rating-boost-eu');
		exit;
	case 'route=product/product&product_id=40':
		header('Location: 3v3-arena-rating-boost-us');
		exit;
	case 'route=product/product&product_id=29':
		header('Location: dragonflight-elite-pvp-gear-boost-eu');
		exit;
	case 'route=product/product&product_id=30':
		header('Location: dragonflight-elite-pvp-gear-boost-us');
		exit;
	case 'route=product/product&product_id=33':
		header('Location: dragonflight-full-conquest-gear-boost-draconic-gladiator-gear-eu');
		exit;
	case 'route=product/product&product_id=34':
		header('Location: dragonflight-full-conquest-gear-boost-draconic-gladiator-gear-us');
		exit;
	case 'route=product/product&product_id=35':
		header('Location: dragonflight-honor-gear-boost-eu');
		exit;
	case 'route=product/product&product_id=36':
		header('Location: dragonflight-honor-gear-boost-us');
		exit;
	case 'route=product/product&product_id=31':
		header('Location: full-pvp-gear-boost-eu');
		exit;
	case 'route=product/product&product_id=32':
		header('Location: full-pvp-gear-boost-us');
		exit;
	case 'route=product/product&product_id=53':
		header('Location: rbg-rating-boost-eu');
		exit;
	case 'route=product/product&product_id=54':
		header('Location: rbg-rating-boost-us');
		exit;
	case 'route=product/product&product_id=49':
		header('Location: wow-arena-coaching-eu');
		exit;
	case 'route=product/product&product_id=50':
		header('Location: wow-arena-coaching-us');
		exit;
	case 'route=product/product&product_id=43':
		header('Location: wow-gladiator-title-boost-eu');
		exit;
	case 'route=product/product&product_id=44':
		header('Location: wow-gladiator-title-boost-us');
		exit;
	case 'route=product/product&product_id=41':
		header('Location: wow-solo-shuffle-boost-eu');
		exit;
	case 'route=product/product&product_id=42':
		header('Location: wow-solo-shuffle-boost-us');
		exit;
	case 'route=product/product&product_id=51':
		header('Location: wow-solo-shuffle-wins-boost-eu');
		exit;
	case 'route=product/product&product_id=52':
		header('Location: wow-solo-shuffle-wins-boost-us');
		exit;
	// Reputations
	case 'route=product/product&product_id=73':
		header('Location: azerothian-archives-reputation-boost-eu');
		exit;
	case 'route=product/product&product_id=74':
		header('Location: azerothian-archives-reputation-boost-us');
		exit;
	case 'route=product/product&product_id=79':
		header('Location: dragonscale-expedition-reputation-boost-eu');
		exit;
	case 'route=product/product&product_id=80':
		header('Location: dragonscale-expedition-reputation-boost-us');
		exit;
	case 'route=product/product&product_id=75':
		header('Location: dream-wardens-renown-boost-eu');
		exit;
	case 'route=product/product&product_id=76':
		header('Location: dream-wardens-renown-boost-us');
		exit;
	case 'route=product/product&product_id=81':
		header('Location: iskaara-tuskarr-reputation-boost-eu');
		exit;
	case 'route=product/product&product_id=82':
		header('Location: iskaara-tuskarr-reputation-boost-us');
		exit;
	case 'route=product/product&product_id=87':
		header('Location: loamm-niffen-reputation-boost-eu');
		exit;
	case 'route=product/product&product_id=88':
		header('Location: loamm-niffen-reputation-boost-us');
		exit;
	case 'route=product/product&product_id=91':
		header('Location: sabellian-reputation-boost-eu');
		exit;
	case 'route=product/product&product_id=92':
		header('Location: sabellian-reputation-boost-us');
		exit;
	case 'route=product/product&product_id=77':
		header('Location: soridormi-reputation-boost-eu');
		exit;
	case 'route=product/product&product_id=78':
		header('Location: soridormi-reputation-boost-us');
		exit;
	case 'route=product/product&product_id=93':
		header('Location: the-cobalt-assembly-reputation-boost-eu');
		exit;
	case 'route=product/product&product_id=94':
		header('Location: the-cobalt-assembly-reputation-boost-us');
		exit;
	case 'route=product/product&product_id=83':
		header('Location: the-maruuk-centaur-reputation-boost-eu');
		exit;
	case 'route=product/product&product_id=84':
		header('Location: the-maruuk-centaur-reputation-boost-us');
		exit;
	case 'route=product/product&product_id=85':
		header('Location: valdrakken-accord-reputation-boost-eu');
		exit;
	case 'route=product/product&product_id=86':
		header('Location: valdrakken-accord-reputation-boost-us');
		exit;
	case 'route=product/product&product_id=95':
		header('Location: winterpelt-furbolg-reputation-boost-eu');
		exit;
	case 'route=product/product&product_id=96':
		header('Location: winterpelt-furbolg-reputation-boost-us');
		exit;
	case 'route=product/product&product_id=89':
		header('Location: wrathion-reputation-boost-eu');
		exit;
	case 'route=product/product&product_id=90':
		header('Location: wrathion-reputation-boost-us');
		exit;
	case 'route=product/product&product_id=':
		header('Location: ');
		exit;
	case 'route=product/product&product_id=':
		header('Location: ');
		exit;
	case 'route=product/product&product_id=':
		header('Location: ');
		exit;
	case 'route=product/product&product_id=':
		header('Location: ');
		exit;
	case 'route=product/product&product_id=':
		header('Location: ');
		exit;
	case 'route=product/product&product_id=':
		header('Location: ');
		exit;
	case 'route=product/product&product_id=':
		header('Location: ');
		exit;
	case 'route=product/product&product_id=':
		header('Location: ');
		exit;
	case 'route=product/product&product_id=':
		header('Location: ');
		exit;
	case 'route=product/product&product_id=':
		header('Location: ');
		exit;
	case 'route=product/product&product_id=':
		header('Location: ');
		exit;
	case 'route=product/product&product_id=':
		header('Location: ');
		exit;
	case 'route=product/product&product_id=':
		header('Location: ');
		exit;
	case 'route=product/product&product_id=':
		header('Location: ');
		exit;
	case 'route=product/product&product_id=':
		header('Location: ');
		exit;
	case 'route=product/product&product_id=':
		header('Location: ');
		exit;
}
