<?php
class session{
    function __construct(){
        session_start();
    }
    function  set($k,$v){//设置
        if(is_array($k)){//如果传入数组
            foreach ($k as $k1=>$v1){
                $_SESSION[$k1]=$v1;
            }
        }else{
            $_SESSION[$k]=$v;
        }
    }
    function  del($k){//删除
        unset($_SESSION[$k]);
    }
    function  clear(){//清空
        foreach ($_SESSION as $k=>$v){
            unset($_SESSION[$k]);
        }
    }
    function  get($k){
        return empty($_SESSION[$k])?null:$_SESSION[$k];//是否存在
    }
}

?>