<?php

require_once(__DIR__. '/../../Services/interface/interfaceWiki.php');
require_once(__DIR__.'../../../Services/implementation/serviceWiki.php');

$displayLastWiki = new serviceWiki();

$WikiDatas = $displayLastWiki->displayLastWiki();


?>