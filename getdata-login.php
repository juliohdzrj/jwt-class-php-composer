<?php
require_once './class.Auth.php';
$token=$_SERVER['HTTP_AUTHORIZATION'];
$getDataUserToken=new Auth;
//echo ($token);
$resultGetDataUserToken=$getDataUserToken->getUserForToken($token);
print_r($resultGetDataUserToken);
// if( !function_exists('apache_request_headers') ) {
// ///
// function apache_request_headers() {
//   $arh = array();
//   $rx_http = '/\AHTTP_/';
//   foreach($_SERVER as $key => $val) {
//     if( preg_match($rx_http, $key) ) {
//       $arh_key = preg_replace($rx_http, '', $key);
//       $rx_matches = array();
//       // do some nasty string manipulations to restore the original letter case
//       // this should work in most cases
//       $rx_matches = explode('_', $arh_key);
//       if( count($rx_matches) > 0 and strlen($arh_key) > 2 ) {
//         foreach($rx_matches as $ak_key => $ak_val) $rx_matches[$ak_key] = ucfirst($ak_val);
//         $arh_key = implode('-', $rx_matches);
//       }
//       $arh[$arh_key] = $val;
//     }
//   }
//   return( $arh );
// }
// ///
//
// }
// print_r (apache_request_headers());
///

// header('Authorization:eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHAiOjE1NTQxNzAyMDIsImRhdGEiOnsiaWQiOjIsIm5hbWUiOiJKdWxpbyJ9fQ.ttPXsnomNk2zjzL7yZ5bWzXFPQ_BVFmmuuiEb_5HL1E');
// function getRequestHeaders() {
//     $headers = array();
//     foreach($_SERVER as $key => $value) {
//         if (substr($key, 0, 5) <> 'HTTP_') {
//             continue;
//         }
//         $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
//         $headers[$header] = $value;
//     }
//     return $headers;
// }
//
// $headers = getRequestHeaders();
//
// foreach ($headers as $header => $value) {
//     echo "$header: $value <br />\n";
// }





//   if(isset($headers['Authorization'])){
//     print_r=$headers['Authorization'];
//     //$matches = array();
//     //preg_match('/Token token="(.*)"/', $headers['Authorization'], $matches);
//     //if(isset($matches[1])){
//     //  $token = $matches[1];
//     //}
//   }
//   exit(0);
// require_once './class.Auth.php';
// $gettoken=new Auth;
// $resultGetToken=$gettoken->getToken([ // información del usuario
//     'id' => 2,
//     'name' => 'Julio'
// ]);
// echo ($resultGetToken);
