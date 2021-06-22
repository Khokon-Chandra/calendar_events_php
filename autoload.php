<?php


spl_autoload_register(function($class_name){
      
    if(file_exists(PATH."/$class_name.php")){
        include_once PATH."/$class_name.php";
    }else{
       $directory = PATH."/$class_name.php";
       echo "<i>{$directory}</i> doesn't exists";
    }

});

