<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e853bbb26d3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Rating extends Element { const ecgwsmyuesewsqom = 'by_rating'; public function __construct() { $this->name = self::ecgwsmyuesewsqom; $this->icon = IconInterface::asaomwmaicuoeekg; $this->title = __('By Title', PR__MDL__WOOCOMMERCE_FILTER); parent::__construct(); } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { $qqyuqswckkcomeak = (int) $this->kokwyquiqyoaaioc()->oiqmuywqkkmuswuc($this->aakmagwggmkoiiyu(), 0); if ($qqyuqswckkcomeak) { $mwsawgusoeygascy = $qqyuqswckkcomeak; if ($mwsawgusoeygascy > 5) { $mwsawgusoeygascy = 5; } if ($mwsawgusoeygascy === 5) { $giqggecqqikcysgq = 5; } else { $giqggecqqikcysgq = $mwsawgusoeygascy + 1 - 0.001; } $oyiyuuoguwwaksaa[] = [Constants::ascagqcquwgmygkm => '_wc_average_rating', Constants::squoamkioomemiyi => 'DECIMAL', Constants::ciyoccqkiamemcmm => [$mwsawgusoeygascy, $giqggecqqikcysgq], Constants::ykemsyouoqyoaysg => 'BETWEEN']; } return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } }
