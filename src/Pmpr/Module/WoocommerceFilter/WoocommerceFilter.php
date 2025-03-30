<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e934c82c89a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter; use CMB2; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\WoocommerceFilter\Frontend\Ajax; use Pmpr\Module\WoocommerceFilter\Frontend\Frontend; use Pmpr\Module\WoocommerceFilter\Refinement\Element; use Pmpr\Module\WoocommerceFilter\Refinement\Refinement; use Pmpr\Module\WoocommerceFilter\Traits\CommonTrait; use WP_Query; use WP_Taxonomy; class WoocommerceFilter extends ComponentInitiator { use CommonTrait; const eigiqicogcmgmgwi = 'pr-woo-filter'; const cgckcqysmyiikaqw = 'woocommerce_filter'; const geiygweugseyomyy = self::cgckcqysmyiikaqw . Constants::wassgkgmoyygyaya; const ugygausceickekgo = 'excluded_' . self::cgckcqysmyiikaqw; const eyemkmiomkkwessc = self::cgckcqysmyiikaqw . '_really_current_term'; const kgowyeaekuwwskco = 'push_replacement_' . self::cgckcqysmyiikaqw; const oqmosiywgecmeqig = 'pull_replacement_' . self::cgckcqysmyiikaqw; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Woocommerce Filter', PR__MDL__WOOCOMMERCE_FILTER); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { Frontend::symcgieuakksimmu(); Refinement::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'init'])->qcsmikeggeemccuu('wp', [$this, 'enqueue'])->qcsmikeggeemccuu('woocommerce_product_query', [$this, 'uoskukyqugmqqiec'])->qcsmikeggeemccuu('cmb2_save_term_fields_' . Constants::cmckeoksigiaqykc, [$this, 'omiyieugyeysmqkk'], 99, 3); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('cron_schedules', [$this, 'oekkmogkuckueyey'])->cecaguuoecmccuse('woocommerce_taxonomy_args_pa_color', [$this, 'mcgeuayoamwuscay']); $this->aqaqisyssqeomwom(self::geiygweugseyomyy . 'modify_query_args', [$this, 'scguauuaeoeewwee'], 1)->aqaqisyssqeomwom(self::geiygweugseyomyy . 'sort_terms_before_out', [$this, 'wsmwwowmmqyeakqu'], 5); } public function init() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $seyqqsmuaiegkeeq = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->mqmocoguqcyymgqu(); foreach ($seyqqsmuaiegkeeq as $ymqmyyeuycgmigyo => $kesssewsiegssiya) { if ($kesssewsiegssiya instanceof WP_Taxonomy) { if ($mqeowykqcggsieya->cekoogweeooasayu($kesssewsiegssiya)) { unset($seyqqsmuaiegkeeq[$ymqmyyeuycgmigyo]); } else { $seyqqsmuaiegkeeq[$ymqmyyeuycgmigyo] = $mqeowykqcggsieya->qcgakseyaikigqco($kesssewsiegssiya); } } } $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $uuyucgkyusckoaeq->scyscgskcwukckyy('product_details')->gswweykyogmsyawy(__('Product Details', PR__MDL__WOOCOMMERCE_FILTER))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::oqmosiywgecmeqig)->gswweykyogmsyawy(__('Pull Replacement', PR__MDL__WOOCOMMERCE_FILTER))->gucwmccyimoagwcm(__('Replacement from parent', PR__MDL__WOOCOMMERCE_FILTER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::ugygausceickekgo)->gswweykyogmsyawy(__('Exclude Filters', PR__MDL__WOOCOMMERCE_FILTER))->acauweqyyugwisqc($seyqqsmuaiegkeeq)->oikgogcweiiaocka())->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::kgowyeaekuwwskco)->gswweykyogmsyawy(__('Push Replacement', PR__MDL__WOOCOMMERCE_FILTER))->gucwmccyimoagwcm(__('Replacement into children', PR__MDL__WOOCOMMERCE_FILTER)))->auoaeeuwaqswggqg(Constants::cmckeoksigiaqykc)->register(); } } public function enqueue() { if ($this->wwqoiqcoccacyyyc()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, self::cgckcqysmyiikaqw, 'frontend.js')->okawmmwsiuauwsiu())->qgkgieacuwasgiuy($this, [Setting::ykqqgqskiygugscu => $this->qeomwskywaguqyyu(), Setting::mmceieoaageqicsk => $this->weysguygiseoukqw(Setting::mmceieoaageqicsk, false), Constants::wyucqaeuuqkesque => ['get_products_list' => Ajax::iukyqsggqwawikke]]); } } public function scguauuaeoeewwee($query_args) { if (isset($_REQUEST[self::eigiqicogcmgmgwi], $_REQUEST[self::geiygweugseyomyy . 'wp_query_args'])) { $query_args[Constants::cuoyscoiacswuauq] = $_REQUEST[self::geiygweugseyomyy . 'wp_query_args'][Constants::cuoyscoiacswuauq]; $query_args[Constants::kymceekcoyyeuocm] = $_REQUEST[self::geiygweugseyomyy . 'wp_query_args'][Constants::kymceekcoyyeuocm]; $query_args[Constants::kkcqmwgccaygggcu] = $_REQUEST[self::geiygweugseyomyy . 'wp_query_args'][Constants::kkcqmwgccaygggcu]; } return $query_args; } public function oekkmogkuckueyey($immuisiomomksweo) { if (is_array($immuisiomomksweo)) { for ($ciyackuwsqkoqese = 2; $ciyackuwsqkoqese <= 7; $ciyackuwsqkoqese++) { $immuisiomomksweo['days' . $ciyackuwsqkoqese] = ['interval' => $ciyackuwsqkoqese * DAY_IN_SECONDS, 'display' => sprintf(__('each %s days', PR__MDL__WOOCOMMERCE_FILTER), $ciyackuwsqkoqese)]; } } return $immuisiomomksweo; } public function wsmwwowmmqyeakqu($uyuaosigqymaqsaa) : array { if (!is_array($uyuaosigqymaqsaa)) { $uyuaosigqymaqsaa = []; } $iwewcwusemqaiggk = reset($uyuaosigqymaqsaa); if (!$iwewcwusemqaiggk) { return $uyuaosigqymaqsaa; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $kesssewsiegssiya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwewcwusemqaiggk, Constants::gmmygyiecgmggaam); $sikaymiwcesagayc = $ykquycoiqesuckco->giiuwsmyumqwwiyq($kesssewsiegssiya . Element::lowmsmaykkuowskm, -1); $umwqusowiqmyseom = $ykquycoiqesuckco->giiuwsmyumqwwiyq($kesssewsiegssiya . Element::uucggqgemiykigga, Constants::eeccqomoaqsawouy); if ($sikaymiwcesagayc != -1) { switch ($sikaymiwcesagayc) { case Constants::gouqcwikiiygyasc: if ($umwqusowiqmyseom === Constants::eeccqomoaqsawouy) { uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { if ((int) $mmeioagwmyscwumo[Constants::ooqggksagkoaeeke] === (int) $csougakqegqiqsgi[Constants::ooqggksagkoaeeke]) { return 0; } return (int) $mmeioagwmyscwumo[Constants::ooqggksagkoaeeke] < (int) $csougakqegqiqsgi[Constants::ooqggksagkoaeeke] ? -1 : 1; }); } else { uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { if ((int) $mmeioagwmyscwumo[Constants::ooqggksagkoaeeke] === (int) $csougakqegqiqsgi[Constants::ooqggksagkoaeeke]) { return 0; } return (int) $mmeioagwmyscwumo[Constants::ooqggksagkoaeeke] > (int) $csougakqegqiqsgi[Constants::ooqggksagkoaeeke] ? -1 : 1; }); } break; case Constants::NAME: if ($umwqusowiqmyseom === Constants::eeccqomoaqsawouy) { uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { return strnatcasecmp($mmeioagwmyscwumo[Constants::NAME], $csougakqegqiqsgi[Constants::NAME]); }); } else { uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { return strnatcasecmp($csougakqegqiqsgi[Constants::NAME], $mmeioagwmyscwumo[Constants::NAME]); }); } break; case 'numeric': if ($umwqusowiqmyseom === Constants::eeccqomoaqsawouy) { uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { if ((int) $mmeioagwmyscwumo[Constants::ouywiegeiyuaaawo] === (int) $csougakqegqiqsgi[Constants::ouywiegeiyuaaawo]) { return 0; } return (int) $mmeioagwmyscwumo[Constants::ouywiegeiyuaaawo] < (int) $csougakqegqiqsgi[Constants::ouywiegeiyuaaawo] ? -1 : 1; }); } else { uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { if ((int) $mmeioagwmyscwumo[Constants::ouywiegeiyuaaawo] === (int) $csougakqegqiqsgi[Constants::ouywiegeiyuaaawo]) { return 0; } return (int) $mmeioagwmyscwumo[Constants::ouywiegeiyuaaawo] > (int) $csougakqegqiqsgi[Constants::ouywiegeiyuaaawo] ? -1 : 1; }); } break; } } return $uyuaosigqymaqsaa; } public function mcgeuayoamwuscay($iyaskikkeegoiucg) { if (is_array($iyaskikkeegoiucg)) { $iyaskikkeegoiucg['query_var'] = true; } return $iyaskikkeegoiucg; } public function uoskukyqugmqqiec($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query) { $ugugimquukqwogge = $this->ocksiywmkyaqseou(self::geiygweugseyomyy . 'get_meta_query', $gqgemcmoicmgaqie->get(Constants::cuoyscoiacswuauq)); $gqgemcmoicmgaqie->set(Constants::cuoyscoiacswuauq, $ugugimquukqwogge); } } public function omiyieugyeysmqkk($aokagokqyuysuksm, $ecukkacusqswqoem, $wggksywsgqeiaqcc) { if ($wggksywsgqeiaqcc instanceof CMB2 && $aokagokqyuysuksm) { $this->uoioccymskiiwgsg($aokagokqyuysuksm, $wggksywsgqeiaqcc->data_to_save); } } public function uoioccymskiiwgsg($aokagokqyuysuksm, $ugugimquukqwogge) { if (isset($ugugimquukqwogge[self::kgowyeaekuwwskco])) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if ($okcscwesammossuq = $aoskwucuugeuaeus->mmoaikqueyiwcesm($aokagokqyuysuksm)) { foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $wcgsoqmmciswkmiq = $aoskwucuugeuaeus->iooowgsqoyqseyuu($wcgsoqmmciswkmiq); $aowmesqseaiqimyu = $ugugimquukqwogge[self::ugygausceickekgo] ?? null; $oaskiuwaqyqssquy = $aoskwucuugeuaeus->igawqaomowicuayw($wcgsoqmmciswkmiq, self::oqmosiywgecmeqig, true); if ($oaskiuwaqyqssquy) { if ($aowmesqseaiqimyu) { $cyqqgsieawoiiskk = $aoskwucuugeuaeus->igawqaomowicuayw($wcgsoqmmciswkmiq, self::ugygausceickekgo); foreach ($cyqqgsieawoiiskk as $yemgmmgogcwccuky) { if (!in_array($yemgmmgogcwccuky, $aowmesqseaiqimyu, true)) { $aoskwucuugeuaeus->smqukgcyacswysqa($wcgsoqmmciswkmiq, self::ugygausceickekgo, $aowmesqseaiqimyu); } } $ewieakkmayyseocu = array_diff($aowmesqseaiqimyu, $cyqqgsieawoiiskk); foreach ($ewieakkmayyseocu as $uwomkgseoiegeume) { $aoskwucuugeuaeus->giwmekimakcaawsq($wcgsoqmmciswkmiq, self::ugygausceickekgo, $uwomkgseoiegeume); } } else { $aoskwucuugeuaeus->smqukgcyacswysqa($wcgsoqmmciswkmiq, self::ugygausceickekgo); } } $this->uoioccymskiiwgsg($wcgsoqmmciswkmiq, $aoskwucuugeuaeus->igawqaomowicuayw($wcgsoqmmciswkmiq)); } } } } }
