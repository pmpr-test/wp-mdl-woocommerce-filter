<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e853bbb26d3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Segment; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\WoocommerceFilter\Setting; use Pmpr\Module\WoocommerceFilter\Traits\CommonTrait; use Pmpr\Module\WoocommerceFilter\WoocommerceFilter; use WP_Query; abstract class Element extends Segment { use CommonTrait; const lowmsmaykkuowskm = 'sort_terms'; const uucggqgemiykigga = '_sort_order'; const ucqemkuiauocomws = 'sort_order'; const smommoywqawkuceg = '_hide_empty'; const uimkoimiuiwagwak = 'field_type'; const omumymwakeoiwouc = 'tax_'; const qoiegmkyyyauooso = WoocommerceFilter::geiygweugseyomyy . 'refinement_fields'; const qaeeoomwegsygeuk = 'compression_logic'; const gwsikuuwkaswsoyy = WoocommerceFilter::geiygweugseyomyy . 'available_refinements'; protected ?string $name = null; protected ?string $title = null; protected ?string $type = null; protected ?string $icon = null; public function aakmagwggmkoiiyu() : ?string { if (!$this->name) { $this->name = $this->gueasuouwqysmomu(); } return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function __construct() { $this->setting = Setting::symcgieuakksimmu()->cisyiemkeykgkomc(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('pre_get_posts', [$this, 'uuqqcukckuscoyas'])->qcsmikeggeemccuu('woocommerce_product_query', [$this, 'uuqqcukckuscoyas']); $this->waqewsckuayqguos(WoocommerceFilter::geiygweugseyomyy . 'product_query', [$this, 'uuqqcukckuscoyas']); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("escape_{$this->aakmagwggmkoiiyu()}_filter", [$this, 'sekkmwqwqwcayiwg']); $this->aqaqisyssqeomwom('available_refinements', function ($omqqwgmkqyaqmqew) { $omqqwgmkqyaqmqew[$this->aakmagwggmkoiiyu()] = $this; return $omqqwgmkqyaqmqew; }); parent::kgquecmsgcouyaya(); } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query && $this->ayseokmqycoqaigc() && $this->kokwyquiqyoaaioc()->oisaqgayaackmaai(WoocommerceFilter::eigiqicogcmgmgwi, [], false)) { $oyiyuuoguwwaksaa = $gqgemcmoicmgaqie->query_vars[Constants::cuoyscoiacswuauq] ?? []; $this->msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); if (!isset($oyiyuuoguwwaksaa[Constants::soqkeeoakocumawu])) { $oyiyuuoguwwaksaa[Constants::soqkeeoakocumawu] = Constants::skewaiwksksokmqo; } $gqgemcmoicmgaqie->set(Constants::cuoyscoiacswuauq, $oyiyuuoguwwaksaa); } return $gqgemcmoicmgaqie; } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { return $oyiyuuoguwwaksaa; } public function render(array $ywmkwiwkosakssii = []) { if ($this->ayseokmqycoqaigc()) { $qookweymeqawmcwo = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $this->gayqqwwuycceosii()); if ($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qookweymeqawmcwo, 'render', false)) { echo $this->iuygowkemiiwqmiw($this->aakmagwggmkoiiyu(), $qookweymeqawmcwo); } } } public function gayqqwwuycceosii($ymqmyyeuycgmigyo = null) : array { if (!$ymqmyyeuycgmigyo) { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); } $aokagokqyuysuksm = $this->guecmwukeoqiwyac($ymqmyyeuycgmigyo); $eqgoocgaqwqcimie = $this->kokwyquiqyoaaioc()->oiqmuywqkkmuswuc($ymqmyyeuycgmigyo); $qookweymeqawmcwo = ['render' => true, Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::NAME => $ymqmyyeuycgmigyo, Constants::squoamkioomemiyi => $this->euwgygcicmmsagwq($aokagokqyuysuksm), Constants::qgqyauaqwqmqseim => $this->weysguygiseoukqw($aokagokqyuysuksm . Constants::qgoqceyygkyoswoq), Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::qescuiwgsyuikume => $this->weysguygiseoukqw($aokagokqyuysuksm . Constants::icmokuskwoskgace, $this->qcgakseyaikigqco()), 'show_title' => __('See All Items', PR__MDL__WOOCOMMERCE_FILTER), 'hide_title' => __('Close', PR__MDL__WOOCOMMERCE_FILTER), 'remove_icon' => IconInterface::ucomcyskmkiqysee, 'plus_icon' => IconInterface::kuwiuiewuwoikaau, 'minus_icon' => IconInterface::kssigsoqmyeeskke, 'arrow_up_icon' => IconInterface::gmqoogkmiakmkweu, 'arrow_down_icon' => IconInterface::ckqgusoqoosqqwyo, 'collapse_items' => $this->weysguygiseoukqw(Setting::ukwmkmkkuskewess, false), 'hide_more_items' => $this->weysguygiseoukqw(Setting::oegqewgkigmcymmq, false)]; return $qookweymeqawmcwo; } public function euwgygcicmmsagwq($ymqmyyeuycgmigyo = null) : ?string { return $this->eeikyioeusswwmme(self::uimkoimiuiwagwak, $ymqmyyeuycgmigyo, $this->gueasuouwqysmomu()); } public function ayseokmqycoqaigc($ymqmyyeuycgmigyo = null) : bool { return (bool) $this->eeikyioeusswwmme(Constants::yyicwqsqaecyqwco, $ymqmyyeuycgmigyo, false); } public function sekkmwqwqwcayiwg($eqgoocgaqwqcimie) { return $eqgoocgaqwqcimie; } public function ykwqaukkycogooii() { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $ikgwqyuyckaewsow = $this->ycwskoawcksousga(); $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg($ymqmyyeuycgmigyo)->gswweykyogmsyawy($this->qcgakseyaikigqco())->saemoowcasogykak($this->eyamqkqiykagecsw())->gucwmccyimoagwcm(sprintf(__('%s Configuration', PR__MDL__WOOCOMMERCE_FILTER), $this->qcgakseyaikigqco()))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam($ymqmyyeuycgmigyo . Constants::iusoecsswgekecks)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__('General', PR__MDL__WOOCOMMERCE_FILTER))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww($this->esmcwikgmwoaeoyy(Constants::yyicwqsqaecyqwco, $ymqmyyeuycgmigyo))->gswweykyogmsyawy(__('Use in Filter', PR__MDL__WOOCOMMERCE_FILTER))->gucwmccyimoagwcm(__('Check this option, if you want show this item in filter.', PR__MDL__WOOCOMMERCE_FILTER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws($this->esmcwikgmwoaeoyy(Constants::qescuiwgsyuikume, $ymqmyyeuycgmigyo))->gswweykyogmsyawy(__('Display Title', PR__MDL__WOOCOMMERCE_FILTER))->eyygsasuqmommkua($this->qcgakseyaikigqco())->gucwmccyimoagwcm(__('This title used in filter form as this filter section title..', PR__MDL__WOOCOMMERCE_FILTER)))->mkksewyosgeumwsa($this->gosycecgwuesyysq($this->esmcwikgmwoaeoyy(Constants::qgqyauaqwqmqseim, $ymqmyyeuycgmigyo))->gswweykyogmsyawy(__('Icon', PR__MDL__WOOCOMMERCE_FILTER))))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam($ymqmyyeuycgmigyo . Constants::wiawyoegoyeweaoe)->saemoowcasogykak(IconInterface::isscgcamsuaqwwkc)->gswweykyogmsyawy(__('Advanced', PR__MDL__WOOCOMMERCE_FILTER))->ewweaossowcqywaw($ikgwqyuyckaewsow))); parent::ykwqaukkycogooii(); } public function esmcwikgmwoaeoyy(string $omkysikckkcieckq, $ymqmyyeuycgmigyo = null) : string { if (!$ymqmyyeuycgmigyo) { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); } return "{$ymqmyyeuycgmigyo}_{$omkysikckkcieckq}"; } public function eeikyioeusswwmme(string $omkysikckkcieckq, $ymqmyyeuycgmigyo = null, $ggauoeuaesiymgee = null) { return $this->weysguygiseoukqw($this->esmcwikgmwoaeoyy($omkysikckkcieckq, $ymqmyyeuycgmigyo), $ggauoeuaesiymgee); } public function weysguygiseoukqw($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { return Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $gmcgeogogyqsgawk); } public function ycwskoawcksousga() : array { return []; } public function guecmwukeoqiwyac($ymqmyyeuycgmigyo) : string { return $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc(self::omumymwakeoiwouc, '', $ymqmyyeuycgmigyo); } }
