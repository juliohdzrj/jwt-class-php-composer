<?php
require_once 'vendor/firebase/php-jwt/src/JWT.php';
use Firebase\JWT\JWT;
// Indicamos llave secreta, token y algoritmo
$key='my_secret_key';
$token='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1NTM5MDY3ODgsImV4cCI6MTU1MzkxMDM4OCwiZGF0YSI6eyJpZCI6MSwibmFtZSI6IkVkdWFyZG8ifX0.6DPlWYu2PVGf1djQtAIvUTrxUd3NeWkaggmFsF2pY3Q';
$algorithm=array('HS256');
$jwt = JWT::decode($token, $key, $algorithm);
echo ('<pre/>');

echo ($token.'<br/><br/>');

var_dump($jwt);
