<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d005bca905             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter; use Exception; class Storage extends Container { const ouqgiccuookgiioq = "\143\x6f\x6f\x6b\x69\145"; const moocuyskywyosass = "\x74\162\141\156\x73\x69\145\156\x74"; const sokgkegywgcccmwc = "\163\x65\163\x73\x69\x6f\156"; protected ?string $ip = null; protected ?string $key = null; protected ?string $type = self::moocuyskywyosass; public function __construct($sqeykgyoooqysmca = '') { if ($sqeykgyoooqysmca) { $this->aseocggwwegcmqes($sqeykgyoooqysmca); } if ($this->gueasuouwqysmomu() === self::moocuyskywyosass && !session_id()) { try { @session_start(); } catch (Exception $wgaoewqkwgomoaai) { } } $this->ksqoomuuqmwowiim($this->caokeucsksukesyo()->issssuygyewuaswa()->mmscegoieayuaguo()); $this->gcgmwakaoecqcuwo(md5($this->meymqemgekqiawec() . WoocommerceFilter::geiygweugseyomyy . "\x73\141\x6c\164")); parent::__construct(); } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function ksqoomuuqmwowiim(?string $kucumcusyyckayas) : self { $this->ip = $kucumcusyyckayas; return $this; } public function meymqemgekqiawec() : ?string { return $this->ip; } public function gcgmwakaoecqcuwo(?string $uusmaiomayssaecw) : self { $this->key = $uusmaiomayssaecw; return $this; } public function cisyiemkeykgkomc() : ?string { return $this->key; } public function set($uusmaiomayssaecw, $eqgoocgaqwqcimie) { switch ($this->gueasuouwqysmomu()) { case self::moocuyskywyosass: $this->caokeucsksukesyo()->wikusamwomuogoau()->giyscymwkesykqsg($uusmaiomayssaecw, $eqgoocgaqwqcimie); break; case self::sokgkegywgcccmwc: $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $icwicymcioeyeyek = $qkqgcaykemoiecma->igqksmmwesguiaae($this->cisyiemkeykgkomc()); if (!is_array($icwicymcioeyeyek)) { $icwicymcioeyeyek = []; } $icwicymcioeyeyek[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; $qkqgcaykemoiecma->gawcqwcqgwgucgya($this->cisyiemkeykgkomc(), $icwicymcioeyeyek, DAY_IN_SECONDS); break; case self::ouqgiccuookgiioq: setcookie($uusmaiomayssaecw, $eqgoocgaqwqcimie, time() + DAY_IN_SECONDS); break; } } public function get(?string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if ($uusmaiomayssaecw) { switch ($this->gueasuouwqysmomu()) { case self::moocuyskywyosass: if ($this->has($uusmaiomayssaecw)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->wikusamwomuogoau()->wugwewwmekuaamos($uusmaiomayssaecw); } break; case self::sokgkegywgcccmwc: $icwicymcioeyeyek = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->igqksmmwesguiaae($this->cisyiemkeykgkomc()); $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); break; case self::ouqgiccuookgiioq: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($_COOKIE, $uusmaiomayssaecw, $ggauoeuaesiymgee); break; } } return $eqgoocgaqwqcimie; } public function has(?string $uusmaiomayssaecw) : bool { $oyuakceioggwckok = false; if ($uusmaiomayssaecw) { switch ($this->gueasuouwqysmomu()) { case self::moocuyskywyosass: $oyuakceioggwckok = $this->caokeucsksukesyo()->wikusamwomuogoau()->mawiagaeusgooyuk($uusmaiomayssaecw); break; case self::sokgkegywgcccmwc: $oyuakceioggwckok = !empty($this->get($uusmaiomayssaecw)); break; case self::ouqgiccuookgiioq: $oyuakceioggwckok = isset($_COOKIE[$uusmaiomayssaecw]); break; } } return $oyuakceioggwckok; } public function remove(?string $uusmaiomayssaecw) { if ($uusmaiomayssaecw) { switch ($this->gueasuouwqysmomu()) { case self::moocuyskywyosass: if ($this->has($uusmaiomayssaecw)) { $this->caokeucsksukesyo()->wikusamwomuogoau()->aakkiwusygocokce($uusmaiomayssaecw); } break; case self::sokgkegywgcccmwc: if ($this->has($uusmaiomayssaecw)) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $icwicymcioeyeyek = $qkqgcaykemoiecma->igqksmmwesguiaae($this->cisyiemkeykgkomc()); $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($icwicymcioeyeyek, $uusmaiomayssaecw); $qkqgcaykemoiecma->gawcqwcqgwgucgya($this->cisyiemkeykgkomc(), $icwicymcioeyeyek, DAY_IN_SECONDS); } break; case self::ouqgiccuookgiioq: if ($this->has($uusmaiomayssaecw)) { unset($_COOKIE[$uusmaiomayssaecw]); setcookie($uusmaiomayssaecw, '', time() - 3600, "\57"); } break; } } } }
