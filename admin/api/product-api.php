<?php


 function getProduct($id){
   if($id == 0){
     echo json_encode(Product::readALL());
   }else{
     echo  json_encode(Product::readAllFilter($id)) ;
   }
   
 }

 function getProductById(){

 }

?>