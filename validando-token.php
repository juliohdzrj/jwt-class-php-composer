<?php
require_once 'vendor/firebase/php-jwt/src/JWT.php';
use Firebase\JWT\JWT;
// Indicamos llave secreta, token y algoritmo
$key='my_secret_key';
$token='eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1NjIxNjQ1OTcsImV4cCI6MTU2MjE2ODE5NywiZGF0YSI6eyJpZCI6MiwibmFtZSI6Ikp1bGlvIn19.cV1b--7T243Kp_FjY6n_p0WFGAbwc-S9Uw2lVUbKnAA';
$algorithm=array('HS256');
$jwt = JWT::decode($token, $key, $algorithm);
echo ('<pre/>');

echo ($token.'<br/><br/>');

var_dump($jwt);
