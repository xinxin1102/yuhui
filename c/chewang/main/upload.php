<?php
    include "../public/session.php";
    $time=time();

   if(is_uploaded_file($_FILES["file"]["tmp_name"])){
        if(!file_exists("upload")){
            mkdir("upload");
        }
        $dirname=date("y-m-d");
        if(!file_exists("upload/".$dirname)){
            mkdir("upload/".$dirname);
        }

        $filename=$time.iconv("GBK","UTF-8",$_FILES["file"]["name"]);

        move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$dirname."/".$filename);
        echo "http://localhost/chewang/upload/".$dirname."/".$filename;


    }



?>