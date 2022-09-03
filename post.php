<?php
//my solution attempt regarding to user ,coment and post

require_once('/database.php');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,
Access-Control-Allow-Methods, Aythorization,X-Requested-with');

$table='comment';
$post;
$title;
//preparing to make a comment

$data=['id'=>$id,
      'title'=>$title,
      'post'=>$post
];
$Data_in_json_Fromat=json_encode($data,true);
$Make_A_post_Comment=createMethod($table,$Data_in_json_Fromat);

if($Make_A_post_Comment){
array_push('success');
}else{
array_push('something is wrong!!');                                     
   exit();                                     
}
?>