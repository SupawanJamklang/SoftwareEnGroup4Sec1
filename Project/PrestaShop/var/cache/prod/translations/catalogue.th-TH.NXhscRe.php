<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('th-TH', array (
));

$catalogueTh = new MessageCatalogue('th', array (
));
$catalogue->addFallbackCatalogue($catalogueTh);

return $catalogue;
