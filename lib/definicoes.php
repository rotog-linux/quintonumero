<?php

header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');

require ('./vendor/autoload.php');

define("DS", DIRECTORY_SEPARATOR);
define("APP_VERSION", '2022.08.25-001');

define("NIVEL", array(
    '1' => 'Administrador',
    '2' => 'Usuário Comum'
));

define("STATUS", array(
    '0' => 'Ativo',
    '1' => 'Inativo'
));

define("DIFICULDADE", array(
    '1' => 'Baixa',
    '2' => 'Média',
    '3' => 'Alta'
));

define("CAMPO_DIFICULDADE", array(
    1 => 'faceis',
    2 => 'medias',
    3 => 'dificeis'
));

define("FACIL", 1);
define("MEDIA", 2);
define("DIFICIL", 3);