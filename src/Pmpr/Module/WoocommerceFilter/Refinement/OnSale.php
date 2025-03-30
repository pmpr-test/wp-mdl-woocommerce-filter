<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e92d1001e7c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Query; class OnSale extends Element { const isasoemkymwoiqem = 'on_sale'; public function __construct() { $this->name = self::isasoemkymwoiqem; $this->type = Constants::semqugiuwygamias; $this->icon = IconInterface::uaimoioocayauuca; $this->title = __('On Sale', PR__MDL__WOOCOMMERCE_FILTER); parent::__construct(); } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { $ccouywuicsaqmais = (bool) $this->kokwyquiqyoaaioc()->oiqmuywqkkmuswuc($this->aakmagwggmkoiiyu(), false); if ($ccouywuicsaqmais) { $eqgoocgaqwqcimie = array_merge([0], $this->uwkmaywceaaaigwo()->aqasygcsqysmmyke()->gucosgmwouaweasy()); if ($gqgemcmoicmgaqie instanceof WP_Query) { $gqgemcmoicmgaqie->set(Constants::eqomgewoayseioos, $eqgoocgaqwqcimie); } else { if (is_array($gqgemcmoicmgaqie)) { $gqgemcmoicmgaqie[Constants::eqomgewoayseioos] = $eqgoocgaqwqcimie; } } } return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } }
