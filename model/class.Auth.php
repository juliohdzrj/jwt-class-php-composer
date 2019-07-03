<?php
/**
 * Julio ramos 29/03/2019
 */
require_once '../vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;
class Auth
{
  private $secret_key='askjftyujebcnmdiop_21r4tdif9okdytr67#a98123ewdfrtyuiojnh';
  private $encrypt=['HS256'];
  public function getToken($dataUser)
  {
    $time=time();
    $token=array(
      'iat'=>$time,
      'exp'=>$time+(60), // agrega un minuto 60 seg - agrega 1hr 60*60= 3600 seg
      'data'=>$dataUser
    );
return JWT::encode($token, $this->secret_key);
  }
  public function getUserForToken($dataToken, $typeCheck){
    try {
    if(!$resultData=JWT::decode($dataToken, $this->secret_key, $this->encrypt)){
      throw new Exception('Error token incorrecto o ha expirado','1');
    }else{
      if($typeCheck==true){
        $resultDataUser = JWT::decode($dataToken, $this->secret_key, $this->encrypt); // obtenemos los datos del usuario
        $dataUser=json_encode($resultDataUser);
        $dataUser=json_decode($dataUser, true);
        $resultData=array('msg'=>'datos-usuario','result'=>$dataUser,'code'=>http_response_code());
      }else{
        // Obtenemos los datos del usuario corespondiente del token y renovamos el token solo si este no a expirado
        $resultDataUser = JWT::decode($dataToken, $this->secret_key, $this->encrypt);
        $dataUserToken=json_encode($resultDataUser);
        $dataUserToken=json_decode($dataUserToken, true);
        $dataUserArray=$dataUserToken['data']; // Array con datos del usuario
        $nuevoToken=$this->getToken($dataUserArray);// Generamos nuevo token
        http_response_code(200); // ok fetched
        $resultData=array('msg'=>'nuevo-token','result'=>$nuevoToken,'code'=>http_response_code());
      }
      // obtenemos datos de usuario o regresamos token de acuerdo a una variable
      // si es true o false como sea requerido
    }
} catch (\Exception $e) { // Also tried JwtException - Token a expirado, renovar token.
    $resultData=array('msg'=>'Error token incorrecto o ha expirado_'.$e->getMessage(), 'result'=>'nologin','code'=>$e->getCode());
}
return $resultData;
  }
}
