<?php
    class upload extends indexMain{
        function __construct()
        {
            parent::__construct();
            $this->db=new db("user");
        }

        function editinfo(){
            $db=new db("info");
            $db=$db->connect;
            $sql="select * from info";
            $result=$db->query($sql);
            if($row=$result->fetch_assoc()){
                $host=$row['host'];
                $imgfile=$row['imgfile'];
            }else{
                $host="";
                $imgfile="";
            };

            $this->smarty->assign("host",$host);
            $this->smarty->assign("imgfile",$imgfile);
            $this->smarty->display("admin/editinfo.html");
        }

        function editinfoInfo(){
            $db=new db("info");
            $db=$db->connect;
            $host=P("host");
            $imgfile=P("imgfile");

            $result=$db->query("select * from info");
            if($result->fetch_assoc()){
                $sql="update info set host='$host',imgfile='$imgfile'";
            }else{
                $sql="insert into info (host,imgfile) values ('$host','$imgfile')";
            }

            $db->query($sql);

//study/yue/moni-cms/upload
//localhost

            if($db->affected_rows>0){
                $message="修改成功";
                $url="index.php?m=admin&f=upload&a=editinfo";
                $this->jump($url,$message);
            }else{
                $message="修改失败";
                $url="index.php?m=admin&f=upload&a=editinfo";
                $this->jump($url,$message);
            }

        }


        function addtouxiang(){

            $result=$this->db->select("select * from info");
            $row=$result[0];

            $url=$row["host"]."/".$row['imgfile']."/";

            $time=time();

            if(is_uploaded_file($_FILES["file"]["tmp_name"])){
                if(!file_exists(ROOT_URL."/static/upload")){
                    mkdir(ROOT_URL."/static/upload");
                }
                $dirname=date("y-m-d");
                if(!file_exists(ROOT_URL."/static/upload/".$dirname)){
                    mkdir(ROOT_URL."/static/upload/".$dirname);
                }

                $filename=$time.iconv("GBK","UTF-8",$_FILES["file"]["name"]);

                move_uploaded_file($_FILES["file"]["tmp_name"],ROOT_URL."/static/upload/".$dirname."/".$filename);
                echo "http://".$url.$dirname."/".$filename;

            }

        }

        function addtouxiangInfo(){
            $imgurl=P("imgurl");
            $uid=P("uid");

            $result=$this->db->where("uid=$uid")->update("imgurl='$imgurl'");
            if($result>0){
                $message="头像上传成功";
                $url="index.php?m=index&f=home";
                $this->jump($url,$message);
            }else{
                $message="头像上传失败";
                $url="index.php?m=index&f=home";
                $this->jump($url,$message);
            }
        }


        /*
         * 更新图片路径
         * 如果没有上传图片使用默认的
         * */
        function imgurl(){

            $result1=$this->db->select("select * from info");
            $row1=$result1[0];

            $result=$this->db->select("");

            foreach ($result as $row){
                if($row["imgurl"]){
                    if(strrpos($row["imgurl"],"touxiang.jpg")){
                        continue;
                    }
                    $str=$row["imgurl"];
                    $str=substr($str,strrpos($str,"/")-8);
                    $str="http://".$row1["host"]."/".$row1["imgfile"]."/".$str;
                    if($str==$row['imgurl']){
                        continue;
                    }

                    $res=$this->db->update("update user set imgurl='$str' where uid=".$row["uid"]);
                    if($res>0){
                        echo "图片路径修改成功<br/>";
                    }else{
                        echo "图片路径修改失败<br/>";
                    }
                    unset($str);
                }else{
                    $res=$this->db->update("update user set imgurl='{IMG_PATH}/touxiang.jpg' where uid=".$row["uid"]);
                    if($res>0){
                        echo "默认头像修改成功<br/>";
                    }else{
                        echo "默认头像修改失败<br/>";
                    }
                }
            }


            echo "更新完成";

        }
    }


