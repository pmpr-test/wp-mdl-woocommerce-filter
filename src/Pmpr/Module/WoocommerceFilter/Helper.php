<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4707a28b9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter; class Helper extends Container { public function sacmaiqouaeswkyy($icwicymcioeyeyek = []) : bool { if (!$icwicymcioeyeyek) { $icwicymcioeyeyek = $this->ioegacqacywgucsc(); } $umuecysoywoumgwo = false; if ($icwicymcioeyeyek && $this->oiqmuywqkkmuswuc(WoocommerceFilter::eigiqicogcmgmgwi, false, $icwicymcioeyeyek)) { $umuecysoywoumgwo = true; } return $umuecysoywoumgwo; } public function oisaqgayaackmaai($uusmaiomayssaecw, $icwicymcioeyeyek = null, bool $sscegwueamckwmcy = true) : bool { if (!$icwicymcioeyeyek) { $icwicymcioeyeyek = $this->ioegacqacywgucsc($sscegwueamckwmcy); } return isset($icwicymcioeyeyek[$uusmaiomayssaecw]); } public function oiqmuywqkkmuswuc($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $icwicymcioeyeyek = []) { if (!$icwicymcioeyeyek) { $icwicymcioeyeyek = $this->ioegacqacywgucsc(); } return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function ioegacqacywgucsc(bool $sscegwueamckwmcy = true) { $icwicymcioeyeyek = $_GET; $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($icwicymcioeyeyek, "\147\143\154\151\x64"); if ($icwicymcioeyeyek && is_array($icwicymcioeyeyek)) { foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (is_string($eqgoocgaqwqcimie) && strpos($eqgoocgaqwqcimie, "\54")) { $eqgoocgaqwqcimie = explode("\54", $eqgoocgaqwqcimie); } $icwicymcioeyeyek = $this->sekkmwqwqwcayiwg($icwicymcioeyeyek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); } } if ($sscegwueamckwmcy) { $icwicymcioeyeyek = $this->ocksiywmkyaqseou(WoocommerceFilter::geiygweugseyomyy . "\x67\145\x74\137\x73\145\141\162\x63\x68\137\144\141\x74\x61", $icwicymcioeyeyek); } return $icwicymcioeyeyek; } public function sekkmwqwqwcayiwg($icwicymcioeyeyek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, bool $iiiycicsyekkaaec = false) { if (is_array($eqgoocgaqwqcimie)) { foreach ($eqgoocgaqwqcimie as $momcykaoccoymeig => $uiymkeeaukcyqqik) { $eqgoocgaqwqcimie = $this->sekkmwqwqwcayiwg($eqgoocgaqwqcimie, $momcykaoccoymeig, $uiymkeeaukcyqqik, $iiiycicsyekkaaec); $eqgoocgaqwqcimie = $this->ocksiywmkyaqseou("\x65\163\x63\x61\x70\x65\x5f{$uusmaiomayssaecw}\x5f\146\x69\x6c\x74\x65\162", $eqgoocgaqwqcimie); } } else { if (is_string($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->_escape($eqgoocgaqwqcimie); if ($iiiycicsyekkaaec) { $eqgoocgaqwqcimie = urlencode($eqgoocgaqwqcimie); } } } if (is_string($uusmaiomayssaecw)) { $uusmaiomayssaecw = $this->_escape($uusmaiomayssaecw); } $icwicymcioeyeyek[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $icwicymcioeyeyek; } private function _escape($eqgoocgaqwqcimie) { if (is_string($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc(esc_html($eqgoocgaqwqcimie)); } return $eqgoocgaqwqcimie; } }
