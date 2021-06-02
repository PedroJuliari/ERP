<?php
session_start();
require 'config/config.php';
require 'app/core/Core.php';
require 'vendor/autoload.php';
require 'app/helper/helper.php';
date_default_timezone_set("America/Sao_Paulo");

$core = new Core;
$core->run();

/*
echo "contoller: " .$core->getController();
echo "<br>Método : " .$core->getMetodo();
$parametros = $core->getParametros();
foreach ($parametros as $param)
    echo "<br>Parâmetro : " .$param;*/

//http://www.qualit.com.br/manuais/base-de-conhecimento/ordem-de-compra/
