<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800fbe7aff11             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Query; class InStock extends Element { const gmywcoewyoegywoi = 'in_stock'; const oomyiiagykuccsue = self::gmywcoewyoegywoi . '_use_for'; public function __construct() { $this->name = self::gmywcoewyoegywoi; $this->type = Constants::semqugiuwygamias; $this->icon = IconInterface::oooqyoysacmqiqaa; $this->title = __('In Stock', PR__MDL__WOOCOMMERCE_FILTER); parent::__construct(); } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { $ooqiyeciecwckqqu = (bool) $this->kokwyquiqyoaaioc()->oiqmuywqkkmuswuc($this->aakmagwggmkoiiyu(), false); if ($ooqiyeciecwckqqu) { $oyiyuuoguwwaksaa[] = [Constants::ascagqcquwgmygkm => '_stock_status', Constants::ciyoccqkiamemcmm => 'outofstock', Constants::ykemsyouoqyoaysg => 'NOT IN']; } if (Constants::ygoseweigiigswiu === $this->weysguygiseoukqw(self::oomyiiagykuccsue, Constants::gcqqoqykqugiaiqm)) { $this->cecaguuoecmccuse('posts_where', [$this, 'gcyuqqgwseaumuyg'], 9999); } return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } public function gcyuqqgwseaumuyg($icsywsyukqcciiky = '') { global $wpdb; $icwicymcioeyeyek = $this->kokwyquiqyoaaioc()->ioegacqacywgucsc(); $ooqiyeciecwckqqu = $this->kokwyquiqyoaaioc()->oiqmuywqkkmuswuc($this->aakmagwggmkoiiyu(), false, $icwicymcioeyeyek); static $qiqkumwwkqogqkee = ""; if ($qiqkumwwkqogqkee) { return $icsywsyukqcciiky . $qiqkumwwkqogqkee; } if ($ooqiyeciecwckqqu) { $seyqqsmuaiegkeeq = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->mqmocoguqcyymgqu(); $cyqqmyowocwomcsk = []; foreach ($seyqqsmuaiegkeeq as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (strpos($uusmaiomayssaecw, 'pa_') === 0) { $cyqqmyowocwomcsk[] = $uusmaiomayssaecw; } } $oqwwysygyccucguc = []; if (!empty($cyqqmyowocwomcsk)) { foreach ($cyqqmyowocwomcsk as $eqgoocgaqwqcimie) { if (isset($icwicymcioeyeyek[$eqgoocgaqwqcimie])) { $oqwwysygyccucguc[] = $eqgoocgaqwqcimie; } } if (!empty($oqwwysygyccucguc)) { $oyiyuuoguwwaksaa = [Constants::ygyiacciqgemekwc => Constants::skewaiwksksokmqo]; $oyiyuuoguwwaksaa[] = [Constants::ascagqcquwgmygkm => '_stock_status', Constants::ciyoccqkiamemcmm => 'outofstock']; $qeskcougwkmugcua = [Constants::ygyiacciqgemekwc => Constants::iamiiekkgssgeaew]; $egmwgccukaigyaae = []; foreach ($oqwwysygyccucguc as $attr_slug) { $uyuaosigqymaqsaa = explode(',', $icwicymcioeyeyek[$attr_slug]); foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { if (!isset($egmwgccukaigyaae[$iwewcwusemqaiggk])) { $egmwgccukaigyaae[$iwewcwusemqaiggk] = $wpdb->get_var("SELECT name FROM {$wpdb->terms} WHERE slug = '{$iwewcwusemqaiggk}'"); } $qeskcougwkmugcua[] = [Constants::ascagqcquwgmygkm => 'attribute_' . $attr_slug, Constants::ciyoccqkiamemcmm => $iwewcwusemqaiggk]; } } $oyiyuuoguwwaksaa[] = [$qeskcougwkmugcua]; $ywmkwiwkosakssii = ['nopaging' => true, 'suppress_filters' => true, 'post_status' => 'publish', 'post_type' => ['product_variation'], 'meta_query' => $oyiyuuoguwwaksaa]; $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii); $oksqskmgoqiqciis = []; if ($gqgemcmoicmgaqie->have_posts()) { foreach ($gqgemcmoicmgaqie->posts as $uwgioieamckgqics) { $oksqskmgoqiqciis[$uwgioieamckgqics->post_parent] = $uwgioieamckgqics->post_parent; } } $oysoyeaucuawyaky = implode(',', $oksqskmgoqiqciis); if ($oysoyeaucuawyaky) { $icsywsyukqcciiky .= " AND {$wpdb->posts}.ID NOT IN({$oysoyeaucuawyaky})"; } } } } return $icsywsyukqcciiky; } public function ycwskoawcksousga() : array { return [$this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(self::oomyiiagykuccsue)->gswweykyogmsyawy(__('Search in variable products', PR__MDL__WOOCOMMERCE_FILTER))->kesomeowemmyygey(Constants::gcqqoqykqugiaiqm, __('Simple products only', PR__MDL__WOOCOMMERCE_FILTER))->kesomeowemmyygey(Constants::ygoseweigiigswiu, __('Search in products and their variations', PR__MDL__WOOCOMMERCE_FILTER))->eyygsasuqmommkua(Constants::gcqqoqykqugiaiqm)]; } }
