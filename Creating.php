<?php
//my solution attempt regarding to user ,coment and post

include_once('./configuration.php');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,
Access-Control-Allow-Methods, Aythorization,X-Requested-with');

$id;
$name;
$password;
$comfirm_pass;
$title;
$post;

//creating my user
$CreateUserAccount=createMethod('user',
 [
    'id'=>$id,
    'name'=>$name,
    'password'=>$password,
    'c_password'=>$comfirm_pass
]
);
echo json_decode(file_get_contents("php://input"));
if($CreateUserAccount==true){
   header('http://localhost/litle-blog/database/login.php');                                     
}else{
     echo array_push('You need to Register your account first');      
     exit();                           
}



?>