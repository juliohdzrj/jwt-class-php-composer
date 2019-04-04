<?php
// require_once 'vendor/firebase/php-jwt/src/JWT.php';
// use Firebase\JWT\JWT;
// $time = time();
// $key = 'my_secret_key';
//
// $token = array(
//     'iat' => $time, // Tiempo que inició el token
//     'exp' => $time + (60*60), // Tiempo que expirará el token (+1 hora)
//     'data' => [ // información del usuario
//         'id' => 1,
//         'name' => 'Eduardo'
//     ]
// );
// $algorithm=array('HS256');
// $jwt = JWT::encode();
// $jwt = JWT::encode($token, $key);
// $data = JWT::decode($jwt, $key, $algorithm);
// echo "<pre>";
// echo $jwt;
// echo "<br/>";
// var_dump($data);
// echo "<br/>----------------------------------------------------------<br/>";
require_once './class.Auth.php';
$gettoken=new Auth;
$resultGetToken=$gettoken->getToken([ // información del usuario
    'id' => 2,
    'name' => 'Julio'
]);
echo ($resultGetToken);
