<?php

class TestController extends BaseController {


	public function testFunction()
	{
		/*
		 * isset() va array_key_exists()
		 * 
		 * http://www.zomeoff.com/php-fast-way-to-determine-a-key-elements-existance-in-an-array/
		 * 
		 * 
		 */
		
		$text = 'a:2:{s:6:"access";a:164:{i:0;s:14:"amazon/listing";i:1;s:14:"amazon/product";i:2;s:16:"amazonus/listing";i:3;s:16:"amazonus/product";i:4;s:17:"catalog/attribute";i:5;s:23:"catalog/attribute_group";i:6;s:16:"catalog/category";i:7;s:16:"catalog/download";i:8;s:14:"catalog/filter";i:9;s:19:"catalog/information";i:10;s:20:"catalog/manufacturer";i:11;s:14:"catalog/option";i:12;s:15:"catalog/product";i:13;s:15:"catalog/profile";i:14;s:14:"catalog/review";i:15;s:18:"common/filemanager";i:16;s:13:"design/banner";i:17;s:19:"design/custom_field";i:18;s:13:"design/layout";i:19;s:12:"ebay/profile";i:20;s:13:"ebay/template";i:21;s:14:"extension/feed";i:22;s:17:"extension/manager";i:23;s:16:"extension/module";i:24;s:17:"extension/openbay";i:25;s:17:"extension/payment";i:26;s:18:"extension/shipping";i:27;s:15:"extension/total";i:28;s:16:"feed/google_base";i:29;s:19:"feed/google_sitemap";i:30;s:20:"localisation/country";i:31;s:21:"localisation/currency";i:32;s:21:"localisation/geo_zone";i:33;s:21:"localisation/language";i:34;s:25:"localisation/length_class";i:35;s:25:"localisation/order_status";i:36;s:26:"localisation/return_action";i:37;s:26:"localisation/return_reason";i:38;s:26:"localisation/return_status";i:39;s:25:"localisation/stock_status";i:40;s:22:"localisation/tax_class";i:41;s:21:"localisation/tax_rate";i:42;s:26:"localisation/thai_province";i:43;s:25:"localisation/weight_class";i:44;s:17:"localisation/zone";i:45;s:14:"module/account";i:46;s:16:"module/affiliate";i:47;s:29:"module/amazon_checkout_layout";i:48;s:13:"module/banner";i:49;s:17:"module/bestseller";i:50;s:15:"module/carousel";i:51;s:15:"module/category";i:52;s:18:"module/ebaydisplay";i:53;s:15:"module/featured";i:54;s:13:"module/filter";i:55;s:18:"module/google_talk";i:56;s:18:"module/information";i:57;s:13:"module/latest";i:58;s:22:"module/latest_category";i:59;s:14:"module/pavblog";i:60;s:22:"module/pavblogcategory";i:61;s:21:"module/pavblogcomment";i:62;s:20:"module/pavbloglatest";i:63;s:23:"module/pavcontentslider";i:64;s:16:"module/pavcustom";i:65;s:16:"module/pavfooter";i:66;s:18:"module/pavmegamenu";i:67;s:25:"module/pavproductcarousel";i:68;s:16:"module/pp_layout";i:69;s:16:"module/slideshow";i:70;s:14:"module/special";i:71;s:12:"module/store";i:72;s:19:"module/themecontrol";i:73;s:14:"module/welcome";i:74;s:14:"openbay/amazon";i:75;s:16:"openbay/amazonus";i:76;s:15:"openbay/openbay";i:77;s:12:"openbay/play";i:78;s:23:"payment/amazon_checkout";i:79;s:24:"payment/authorizenet_aim";i:80;s:21:"payment/bank_transfer";i:81;s:14:"payment/cheque";i:82;s:11:"payment/cod";i:83;s:21:"payment/free_checkout";i:84;s:22:"payment/klarna_account";i:85;s:22:"payment/klarna_invoice";i:86;s:14:"payment/liqpay";i:87;s:20:"payment/moneybookers";i:88;s:14:"payment/nochex";i:89;s:15:"payment/paymate";i:90;s:16:"payment/paypoint";i:91;s:13:"payment/payza";i:92;s:26:"payment/perpetual_payments";i:93;s:18:"payment/pp_express";i:94;s:25:"payment/pp_payflow_iframe";i:95;s:14:"payment/pp_pro";i:96;s:21:"payment/pp_pro_iframe";i:97;s:17:"payment/pp_pro_pf";i:98;s:17:"payment/pp_pro_uk";i:99;s:19:"payment/pp_standard";i:100;s:15:"payment/sagepay";i:101;s:22:"payment/sagepay_direct";i:102;s:18:"payment/sagepay_us";i:103;s:19:"payment/twocheckout";i:104;s:28:"payment/web_payment_software";i:105;s:16:"payment/worldpay";i:106;s:10:"play/order";i:107;s:12:"play/product";i:108;s:27:"report/affiliate_commission";i:109;s:22:"report/customer_credit";i:110;s:22:"report/customer_online";i:111;s:21:"report/customer_order";i:112;s:22:"report/customer_reward";i:113;s:24:"report/product_purchased";i:114;s:21:"report/product_viewed";i:115;s:18:"report/sale_coupon";i:116;s:17:"report/sale_order";i:117;s:18:"report/sale_return";i:118;s:20:"report/sale_shipping";i:119;s:15:"report/sale_tax";i:120;s:14:"sale/affiliate";i:121;s:12:"sale/contact";i:122;s:11:"sale/coupon";i:123;s:13:"sale/customer";i:124;s:20:"sale/customer_ban_ip";i:125;s:19:"sale/customer_group";i:126;s:10:"sale/order";i:127;s:14:"sale/recurring";i:128;s:11:"sale/return";i:129;s:12:"sale/voucher";i:130;s:18:"sale/voucher_theme";i:131;s:15:"setting/setting";i:132;s:13:"setting/store";i:133;s:16:"shipping/auspost";i:134;s:17:"shipping/citylink";i:135;s:14:"shipping/fedex";i:136;s:13:"shipping/flat";i:137;s:13:"shipping/free";i:138;s:13:"shipping/item";i:139;s:23:"shipping/parcelforce_48";i:140;s:15:"shipping/pickup";i:141;s:19:"shipping/royal_mail";i:142;s:12:"shipping/ups";i:143;s:13:"shipping/usps";i:144;s:15:"shipping/weight";i:145;s:11:"tool/backup";i:146;s:14:"tool/error_log";i:147;s:12:"total/coupon";i:148;s:12:"total/credit";i:149;s:14:"total/handling";i:150;s:16:"total/klarna_fee";i:151;s:19:"total/low_order_fee";i:152;s:12:"total/reward";i:153;s:14:"total/shipping";i:154;s:15:"total/sub_total";i:155;s:9:"total/tax";i:156;s:11:"total/total";i:157;s:13:"total/voucher";i:158;s:9:"user/user";i:159;s:20:"user/user_permission";i:160;s:24:"module/category_favorite";i:161;s:15:"shipping/weight";i:162;s:13:"shipping/item";i:163;s:16:"module/follow_us";}s:6:"modify";a:164:{i:0;s:14:"amazon/listing";i:1;s:14:"amazon/product";i:2;s:16:"amazonus/listing";i:3;s:16:"amazonus/product";i:4;s:17:"catalog/attribute";i:5;s:23:"catalog/attribute_group";i:6;s:16:"catalog/category";i:7;s:16:"catalog/download";i:8;s:14:"catalog/filter";i:9;s:19:"catalog/information";i:10;s:20:"catalog/manufacturer";i:11;s:14:"catalog/option";i:12;s:15:"catalog/product";i:13;s:15:"catalog/profile";i:14;s:14:"catalog/review";i:15;s:18:"common/filemanager";i:16;s:13:"design/banner";i:17;s:19:"design/custom_field";i:18;s:13:"design/layout";i:19;s:12:"ebay/profile";i:20;s:13:"ebay/template";i:21;s:14:"extension/feed";i:22;s:17:"extension/manager";i:23;s:16:"extension/module";i:24;s:17:"extension/openbay";i:25;s:17:"extension/payment";i:26;s:18:"extension/shipping";i:27;s:15:"extension/total";i:28;s:16:"feed/google_base";i:29;s:19:"feed/google_sitemap";i:30;s:20:"localisation/country";i:31;s:21:"localisation/currency";i:32;s:21:"localisation/geo_zone";i:33;s:21:"localisation/language";i:34;s:25:"localisation/length_class";i:35;s:25:"localisation/order_status";i:36;s:26:"localisation/return_action";i:37;s:26:"localisation/return_reason";i:38;s:26:"localisation/return_status";i:39;s:25:"localisation/stock_status";i:40;s:22:"localisation/tax_class";i:41;s:21:"localisation/tax_rate";i:42;s:26:"localisation/thai_province";i:43;s:25:"localisation/weight_class";i:44;s:17:"localisation/zone";i:45;s:14:"module/account";i:46;s:16:"module/affiliate";i:47;s:29:"module/amazon_checkout_layout";i:48;s:13:"module/banner";i:49;s:17:"module/bestseller";i:50;s:15:"module/carousel";i:51;s:15:"module/category";i:52;s:18:"module/ebaydisplay";i:53;s:15:"module/featured";i:54;s:13:"module/filter";i:55;s:18:"module/google_talk";i:56;s:18:"module/information";i:57;s:13:"module/latest";i:58;s:22:"module/latest_category";i:59;s:14:"module/pavblog";i:60;s:22:"module/pavblogcategory";i:61;s:21:"module/pavblogcomment";i:62;s:20:"module/pavbloglatest";i:63;s:23:"module/pavcontentslider";i:64;s:16:"module/pavcustom";i:65;s:16:"module/pavfooter";i:66;s:18:"module/pavmegamenu";i:67;s:25:"module/pavproductcarousel";i:68;s:16:"module/pp_layout";i:69;s:16:"module/slideshow";i:70;s:14:"module/special";i:71;s:12:"module/store";i:72;s:19:"module/themecontrol";i:73;s:14:"module/welcome";i:74;s:14:"openbay/amazon";i:75;s:16:"openbay/amazonus";i:76;s:15:"openbay/openbay";i:77;s:12:"openbay/play";i:78;s:23:"payment/amazon_checkout";i:79;s:24:"payment/authorizenet_aim";i:80;s:21:"payment/bank_transfer";i:81;s:14:"payment/cheque";i:82;s:11:"payment/cod";i:83;s:21:"payment/free_checkout";i:84;s:22:"payment/klarna_account";i:85;s:22:"payment/klarna_invoice";i:86;s:14:"payment/liqpay";i:87;s:20:"payment/moneybookers";i:88;s:14:"payment/nochex";i:89;s:15:"payment/paymate";i:90;s:16:"payment/paypoint";i:91;s:13:"payment/payza";i:92;s:26:"payment/perpetual_payments";i:93;s:18:"payment/pp_express";i:94;s:25:"payment/pp_payflow_iframe";i:95;s:14:"payment/pp_pro";i:96;s:21:"payment/pp_pro_iframe";i:97;s:17:"payment/pp_pro_pf";i:98;s:17:"payment/pp_pro_uk";i:99;s:19:"payment/pp_standard";i:100;s:15:"payment/sagepay";i:101;s:22:"payment/sagepay_direct";i:102;s:18:"payment/sagepay_us";i:103;s:19:"payment/twocheckout";i:104;s:28:"payment/web_payment_software";i:105;s:16:"payment/worldpay";i:106;s:10:"play/order";i:107;s:12:"play/product";i:108;s:27:"report/affiliate_commission";i:109;s:22:"report/customer_credit";i:110;s:22:"report/customer_online";i:111;s:21:"report/customer_order";i:112;s:22:"report/customer_reward";i:113;s:24:"report/product_purchased";i:114;s:21:"report/product_viewed";i:115;s:18:"report/sale_coupon";i:116;s:17:"report/sale_order";i:117;s:18:"report/sale_return";i:118;s:20:"report/sale_shipping";i:119;s:15:"report/sale_tax";i:120;s:14:"sale/affiliate";i:121;s:12:"sale/contact";i:122;s:11:"sale/coupon";i:123;s:13:"sale/customer";i:124;s:20:"sale/customer_ban_ip";i:125;s:19:"sale/customer_group";i:126;s:10:"sale/order";i:127;s:14:"sale/recurring";i:128;s:11:"sale/return";i:129;s:12:"sale/voucher";i:130;s:18:"sale/voucher_theme";i:131;s:15:"setting/setting";i:132;s:13:"setting/store";i:133;s:16:"shipping/auspost";i:134;s:17:"shipping/citylink";i:135;s:14:"shipping/fedex";i:136;s:13:"shipping/flat";i:137;s:13:"shipping/free";i:138;s:13:"shipping/item";i:139;s:23:"shipping/parcelforce_48";i:140;s:15:"shipping/pickup";i:141;s:19:"shipping/royal_mail";i:142;s:12:"shipping/ups";i:143;s:13:"shipping/usps";i:144;s:15:"shipping/weight";i:145;s:11:"tool/backup";i:146;s:14:"tool/error_log";i:147;s:12:"total/coupon";i:148;s:12:"total/credit";i:149;s:14:"total/handling";i:150;s:16:"total/klarna_fee";i:151;s:19:"total/low_order_fee";i:152;s:12:"total/reward";i:153;s:14:"total/shipping";i:154;s:15:"total/sub_total";i:155;s:9:"total/tax";i:156;s:11:"total/total";i:157;s:13:"total/voucher";i:158;s:9:"user/user";i:159;s:20:"user/user_permission";i:160;s:24:"module/category_favorite";i:161;s:15:"shipping/weight";i:162;s:13:"shipping/item";i:163;s:16:"module/follow_us";}}';
		
		$arr = unserialize($text);
		
		if(isset($arr['access'][500])){
			echo 'is seted';
		}else{
			echo 'not set yet';
		}
		
		echo '<br />';
		
		if(array_key_exists(100, $arr['access'])){
			echo 'have key';	
		}else{
			echo 'not have key';
		}
		
		echo '<br />';
		
		 
		if (isset($arr['access'][500]) || array_key_exists(500, $arr['access'])) { 
		      echo 'have key';
		}else{
			echo 'not have key';
		}
		
		echo '<br />';
		
		echo '-----------------------------';
		
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}
	
	public function testDatabase(){
		$history = History::find(3);
		echo $history->info;
		echo '<pre>';
		print_r($history);
		echo '</pre>';
	}
	
	public function getRelation()
	{
		$histories = Member::find(25)->history;
		echo $histories->count();
		echo '<pre>';
		print_r($histories);
		echo '</pre>';
	}

}
