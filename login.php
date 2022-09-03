<?php
//my solution attempt regarding to user ,coment and post

include_once('/Creating.php');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,
Access-Control-Allow-Methods, Aythorization,X-Requested-with');
$error=array();
$name;
$password;
$c_password;

$comparePassword=SingleData('user', ['name'=>$name,'password'=>$password]);
if($comparePassword){
if(!(isset($_POST['$password'])==SingleData('user', ['password']))){
    header('http://localhost/litle-blog/comment/comment.php');                                 
}else{
    array_push($error,'password incorrect!!');
    exit();                                    
}
}
?>