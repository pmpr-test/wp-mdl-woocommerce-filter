<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4707a28b9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Rating extends Element { const ecgwsmyuesewsqom = "\142\171\137\162\x61\164\x69\x6e\147"; public function __construct() { $this->name = self::ecgwsmyuesewsqom; $this->icon = IconInterface::asaomwmaicuoeekg; $this->title = __("\x42\171\40\124\x69\164\x6c\145", PR__MDL__WOOCOMMERCE_FILTER); parent::__construct(); } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { $qqyuqswckkcomeak = (int) $this->kokwyquiqyoaaioc()->oiqmuywqkkmuswuc($this->aakmagwggmkoiiyu(), 0); if ($qqyuqswckkcomeak) { $mwsawgusoeygascy = $qqyuqswckkcomeak; if ($mwsawgusoeygascy > 5) { $mwsawgusoeygascy = 5; } if ($mwsawgusoeygascy === 5) { $giqggecqqikcysgq = 5; } else { $giqggecqqikcysgq = $mwsawgusoeygascy + 1 - 0.001; } $oyiyuuoguwwaksaa[] = [Constants::ascagqcquwgmygkm => "\x5f\x77\143\x5f\x61\x76\x65\162\141\147\145\x5f\162\x61\164\151\156\147", Constants::squoamkioomemiyi => "\104\x45\x43\111\115\101\x4c", Constants::ciyoccqkiamemcmm => [$mwsawgusoeygascy, $giqggecqqikcysgq], Constants::ykemsyouoqyoaysg => "\102\105\124\x57\105\105\x4e"]; } return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } }
