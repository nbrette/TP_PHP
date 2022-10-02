<?php 
$data = array('jan' => 'janvier', 'fev' => 'fevrier', 'ma' => 'mars', 'avr' => 'avril', 'mai' => 'mai', 'ju' => 'juin', 'jui' => 'juillet', 'aou' =>'aout', 'sep' => 'septembre', 'oct' => 'octobre', 'nov'=>'novembre', 'dec'=>'decembre');
$object = (object) $data;
var_dump($object->jan);
$object->ber = 'bernardinho';
var_dump($object->ber);
echo date(DATE_ISO8601, strtotime(date_default_timezone_get()));
$doc = new DOMDocument('<!doctype html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>HTML5 Useless Page</title>
<style></style>
<script></script>
</head>
<body>
</body>
</html>');
foreach ($doc->getElementsByTagName('html') as $item) {

    $item->setAttribute('lang', 'fr-FR');
    echo $dom->saveHTML();
}
var_dump($doc);

?>