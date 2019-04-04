<?php
/**
 * Julio ramos 29/03/2019
 */
// require('vendor/firebase/php-jwt/src/JWT.php');
// require('vendor/firebase/php-jwt/src/ExpiredException.php');

require_once 'vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;
class Auth
{
  private $secret_key='my_secret_key';
  private $encrypt=['HS256'];
  public function getToken($dataUser)
  {
    $time=time();
    $token=array(
      'iat'=>$time,
      'exp'=>$time+(60*60),
      'data'=>$dataUser
    );
return JWT::encode($token, $this->secret_key);
  }
  public function getUserForToken($dataToken){
    try {
    if(!$resultData=JWT::decode($dataToken, $this->secret_key, $this->encrypt)){
      throw new Exception('Error token incorrecto o ha expirado','1');
    }else{
      // obtenemos datos de usuario o regresamos token de acuerdo a una variable
      // si es true o false como sea requerido. 
    }
} catch (\Exception $e) { // Also tried JwtException
    $resultData=array('msg'=>'Error token incorrecto o ha expirado_'.$e->getMessage(),"code"=>$e->getCode());
}
return $resultData;
  }

}
