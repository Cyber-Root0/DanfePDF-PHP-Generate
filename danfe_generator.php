<?php

require(__DIR__.'/vendor/autoload.php');
error_reporting(E_ERROR | E_PARSE);

use Danfe\Generate;
use NFePHP\DA\NFe\Danfe;

$xml = file_get_contents(__DIR__ . '/notafiscal.xml');

try{
    $danfeObject = new Danfe($xml);
    $pdf = new Generate($danfeObject);
    $pdf->render();
}catch(\Exception $e){
    echo $e->getMessage();
}

