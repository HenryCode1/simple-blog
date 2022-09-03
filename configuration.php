<?php

$host='localhost';
$username='root';
$password='';
$db='little_blog';
$db=(new MYSQLI($host,$username,$password,$db)); 
 if($db){
    return true;                                 
 }else{
     return false;                                    
 }                           

?>
