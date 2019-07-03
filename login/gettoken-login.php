<?php
require_once '../model/class.Auth.php';
$gettoken=new Auth;
$resultGetToken=$gettoken->getToken([ // información del usuario
    'id' => 2,
    'name' => 'Julio',
    'email' => 'jramos@vinculosystems.com.mx'
]);
echo ($resultGetToken);
