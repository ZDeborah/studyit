<?php
    $pathinfo="/dashboard/index";

    if(array_key_exists("PATH_INFO",$_SERVER)){
     $pathinfo=$_SERVER["PATH_INFO"];
    }

//    echo $pathinfo;
    $pathArr=explode("/",substr($pathinfo,1));
//    var_dump($pathArr);
    if(count($pathArr)==2){
    include "views/".$pathArr[0]."/".$pathArr[1].".html";
    }else{
    include "views/dashboard/".$pathArr[0].".html";
    }
?>