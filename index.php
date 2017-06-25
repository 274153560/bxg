<?php
    header('Content-Type:text/html;charset=utf-8');
    $path='';
    if(array_key_exists("PATH_INFO",$_SERVER)) {
        $path=$_SERVER['PATH_INFO'];
        $path=substr($path,1);
        $arr = explode('/',$path);
        if(count($arr)==1) {
            $path='views/dashboard/'.$arr[0];
       } else if (count($arr)==2) {
            $path='views/'.$arr[0].'/'.$arr[1];
       }
    } else {
        $path='views/dashboard/index';
    }
    $path=$path.'.html';
    include $path;
?>
