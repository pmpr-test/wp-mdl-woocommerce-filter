<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc5d87a549             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Segment; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\WoocommerceFilter\Setting; use Pmpr\Module\WoocommerceFilter\Traits\CommonTrait; use Pmpr\Module\WoocommerceFilter\WoocommerceFilter; use WP_Query; abstract class Element extends Segment { use CommonTrait; const lowmsmaykkuowskm = "\x73\x6f\x72\164\x5f\164\145\x72\x6d\x73"; const uucggqgemiykigga = "\137\163\x6f\162\x74\x5f\157\162\x64\x65\x72"; const ucqemkuiauocomws = "\163\x6f\x72\164\x5f\x6f\162\x64\145\162"; const smommoywqawkuceg = "\x5f\x68\x69\x64\145\137\x65\x6d\x70\x74\171"; const uimkoimiuiwagwak = "\x66\151\x65\x6c\x64\137\x74\171\x70\145"; const omumymwakeoiwouc = "\164\x61\170\x5f"; const qoiegmkyyyauooso = WoocommerceFilter::geiygweugseyomyy . "\x72\145\x66\151\x6e\145\155\x65\156\x74\x5f\x66\x69\145\154\x64\163"; const qaeeoomwegsygeuk = "\x63\157\155\160\x72\x65\163\163\151\157\x6e\x5f\154\x6f\147\x69\x63"; const gwsikuuwkaswsoyy = WoocommerceFilter::geiygweugseyomyy . "\141\166\141\151\x6c\x61\142\154\145\137\x72\145\x66\151\x6e\145\x6d\145\x6e\164\163"; protected ?string $name = null; protected ?string $title = null; protected ?string $type = null; protected ?string $icon = null; public function aakmagwggmkoiiyu() : ?string { if (!$this->name) { $this->name = $this->gueasuouwqysmomu(); } return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function __construct() { $this->setting = Setting::symcgieuakksimmu()->cisyiemkeykgkomc(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x6f\157\143\x6f\x6d\x6d\145\162\x63\145\137\x70\x72\157\x64\x75\x63\164\137\161\x75\145\162\171", [$this, "\165\165\x71\161\143\x75\x6b\x63\153\165\163\143\157\x79\x61\x73"]); $this->waqewsckuayqguos(WoocommerceFilter::geiygweugseyomyy . "\160\162\157\x64\x75\x63\x74\137\161\x75\x65\x72\x79", [$this, "\165\165\x71\x71\143\x75\x6b\143\153\x75\163\143\x6f\171\141\163"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\145\x73\143\x61\160\145\137{$this->aakmagwggmkoiiyu()}\137\146\151\154\164\x65\x72", [$this, "\x73\145\153\x6b\155\167\161\x77\x71\167\143\141\x79\151\167\147"]); $this->aqaqisyssqeomwom("\x61\x76\x61\x69\x6c\141\142\x6c\145\137\162\x65\146\151\156\x65\x6d\145\x6e\x74\x73", function ($omqqwgmkqyaqmqew) { $omqqwgmkqyaqmqew[$this->aakmagwggmkoiiyu()] = $this; return $omqqwgmkqyaqmqew; }); parent::kgquecmsgcouyaya(); } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query && $this->ayseokmqycoqaigc() && $this->kokwyquiqyoaaioc()->oisaqgayaackmaai(WoocommerceFilter::eigiqicogcmgmgwi, [], false)) { $oyiyuuoguwwaksaa = $gqgemcmoicmgaqie->query_vars[Constants::cuoyscoiacswuauq] ?? []; $this->msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); if (!isset($oyiyuuoguwwaksaa[Constants::soqkeeoakocumawu])) { $oyiyuuoguwwaksaa[Constants::soqkeeoakocumawu] = Constants::skewaiwksksokmqo; } $gqgemcmoicmgaqie->set(Constants::cuoyscoiacswuauq, $oyiyuuoguwwaksaa); } return $gqgemcmoicmgaqie; } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { return $oyiyuuoguwwaksaa; } public function render(array $ywmkwiwkosakssii = []) { if ($this->ayseokmqycoqaigc()) { $qookweymeqawmcwo = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $this->gayqqwwuycceosii()); if ($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qookweymeqawmcwo, "\x72\145\156\144\145\162", false)) { echo $this->iuygowkemiiwqmiw($this->aakmagwggmkoiiyu(), $qookweymeqawmcwo); } } } public function gayqqwwuycceosii($ymqmyyeuycgmigyo = null) : array { if (!$ymqmyyeuycgmigyo) { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); } $aokagokqyuysuksm = $this->guecmwukeoqiwyac($ymqmyyeuycgmigyo); $eqgoocgaqwqcimie = $this->kokwyquiqyoaaioc()->oiqmuywqkkmuswuc($ymqmyyeuycgmigyo); return ["\162\145\156\144\145\162" => true, Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::NAME => $ymqmyyeuycgmigyo, Constants::squoamkioomemiyi => $this->euwgygcicmmsagwq($aokagokqyuysuksm), Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::qescuiwgsyuikume => $this->weysguygiseoukqw($ymqmyyeuycgmigyo . Constants::icmokuskwoskgace) ?? $this->qcgakseyaikigqco(), "\x73\150\157\x77\137\x74\x69\x74\154\x65" => __("\x53\145\145\40\101\154\154\x20\111\164\145\x6d\163", PR__MDL__WOOCOMMERCE_FILTER), "\150\151\144\x65\x5f\164\x69\164\x6c\145" => __("\x43\154\157\163\145", PR__MDL__WOOCOMMERCE_FILTER), "\x72\145\155\157\166\145\x5f\x69\x63\157\x6e" => IconInterface::ucomcyskmkiqysee, "\x70\x6c\x75\x73\x5f\151\x63\x6f\x6e" => IconInterface::scqkowciwiiwiuwy, "\141\162\x72\x6f\x77\137\x75\x70\x5f\151\143\157\x6e" => IconInterface::gmqoogkmiakmkweu, "\141\162\x72\157\167\x5f\144\x6f\167\x6e\137\151\143\157\x6e" => IconInterface::ckqgusoqoosqqwyo, "\143\x6f\x6c\154\x61\x70\x73\145\137\151\x74\145\155\163" => $this->weysguygiseoukqw(Setting::ukwmkmkkuskewess, false), "\150\x69\144\145\x5f\x6d\157\162\145\x5f\151\x74\145\155\163" => $this->weysguygiseoukqw(Setting::oegqewgkigmcymmq, false)]; } public function euwgygcicmmsagwq($ymqmyyeuycgmigyo = null) : ?string { return $this->eeikyioeusswwmme(self::uimkoimiuiwagwak, $ymqmyyeuycgmigyo, $this->gueasuouwqysmomu()); } public function ayseokmqycoqaigc($ymqmyyeuycgmigyo = null) : bool { return (bool) $this->eeikyioeusswwmme(Constants::yyicwqsqaecyqwco, $ymqmyyeuycgmigyo, false); } public function sekkmwqwqwcayiwg($eqgoocgaqwqcimie) { return $eqgoocgaqwqcimie; } public function ykwqaukkycogooii() { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $ikgwqyuyckaewsow = $this->ycwskoawcksousga(); $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg($ymqmyyeuycgmigyo)->gswweykyogmsyawy($this->qcgakseyaikigqco())->saemoowcasogykak($this->eyamqkqiykagecsw())->gucwmccyimoagwcm(sprintf(__("\x25\163\40\103\157\156\146\x69\x67\165\x72\x61\164\151\x6f\156", PR__MDL__WOOCOMMERCE_FILTER), $this->qcgakseyaikigqco()))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam($ymqmyyeuycgmigyo . Constants::iusoecsswgekecks)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__("\107\x65\x6e\x65\162\x61\x6c", PR__MDL__WOOCOMMERCE_FILTER))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww($this->esmcwikgmwoaeoyy(Constants::yyicwqsqaecyqwco, $ymqmyyeuycgmigyo))->gswweykyogmsyawy(__("\x55\x73\145\x20\151\x6e\x20\x46\151\154\x74\x65\162", PR__MDL__WOOCOMMERCE_FILTER))->gucwmccyimoagwcm(__("\x43\x68\x65\143\153\40\x74\x68\151\163\40\x6f\x70\x74\x69\x6f\x6e\x2c\x20\x69\x66\40\x79\157\165\40\167\141\x6e\x74\x20\x73\x68\x6f\x77\40\x74\x68\x69\163\40\x69\164\145\155\x20\151\156\40\x66\151\154\x74\145\x72\56", PR__MDL__WOOCOMMERCE_FILTER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws($this->esmcwikgmwoaeoyy(Constants::qescuiwgsyuikume, $ymqmyyeuycgmigyo))->gswweykyogmsyawy(__("\104\151\x73\x70\x6c\x61\x79\x20\x54\x69\164\154\145", PR__MDL__WOOCOMMERCE_FILTER))->eyygsasuqmommkua($this->qcgakseyaikigqco())->gucwmccyimoagwcm(__("\124\x68\x69\x73\40\164\x69\164\x6c\x65\40\x75\x73\145\x64\40\151\x6e\40\146\x69\154\164\145\162\x20\146\x6f\162\x6d\40\x61\163\40\x74\x68\151\163\x20\146\x69\x6c\164\x65\162\x20\x73\x65\143\x74\151\x6f\156\x20\x74\151\x74\154\145\x2e\x2e", PR__MDL__WOOCOMMERCE_FILTER))))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam($ymqmyyeuycgmigyo . Constants::wiawyoegoyeweaoe)->saemoowcasogykak(IconInterface::isscgcamsuaqwwkc)->gswweykyogmsyawy(__("\101\144\166\141\156\x63\x65\144", PR__MDL__WOOCOMMERCE_FILTER))->ewweaossowcqywaw($ikgwqyuyckaewsow))); parent::ykwqaukkycogooii(); } public function esmcwikgmwoaeoyy(string $omkysikckkcieckq, $ymqmyyeuycgmigyo = null) : string { if (!$ymqmyyeuycgmigyo) { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); } return "{$ymqmyyeuycgmigyo}\x5f{$omkysikckkcieckq}"; } public function eeikyioeusswwmme(string $omkysikckkcieckq, $ymqmyyeuycgmigyo = null, $ggauoeuaesiymgee = null) { return $this->weysguygiseoukqw($this->esmcwikgmwoaeoyy($omkysikckkcieckq, $ymqmyyeuycgmigyo), $ggauoeuaesiymgee); } public function weysguygiseoukqw($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { return Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $gmcgeogogyqsgawk); } public function ycwskoawcksousga() : array { return []; } public function guecmwukeoqiwyac($ymqmyyeuycgmigyo) : string { return $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc(self::omumymwakeoiwouc, '', $ymqmyyeuycgmigyo); } }
