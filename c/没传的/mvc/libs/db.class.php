<?php
class db{
    public $hostname="localhost";//连接端口
    public $username="root";//用户名
    public $password="";//密码
    // public $sqlname="mEzxzhdFAoDEpLrqQzke";//数据库名
    public $dbname="blog";
    public $tablename;
    public $opt;
    public $connect;

    function __construct($tablename){
        $this->tablename=empty($tablename)?"demo":$tablename;
        $this->config();
    }
    function config(){
        $this->connect=new mysqli($this->hostname,$this->username,$this->password);
        if(mysqli_connect_errno($this->connect)){
            echo "连接失败";
            $this->connect->close();
            exit();
        }
        $this->connect->query("set names utf8");
        $this->opt["filed"]="*";
        $this->opt["where"]=$this->opt["order"]=$this->opt["limit"]="";
    }
    function where($opt=""){
        $str=empty($opt)?"":"WHERE ".$opt;
        $this->opt["where"]=$str;
        return $this;
    }
    function filed($opt=""){
        $keys="";
        $values="";
        if(empty($opt)){
            $sql=$this->opt["filed"];
        }else{
            if(strpos($opt,";")&&strpos($opt,"=")){
                $arr=explode(";",$opt);
                foreach($arr as $k=>$v){
                    $newarr=explode("=",$v);
                    $keys.=$newarr[0].",";
                    $values.=$newarr[1].",";
                }
                $keys=substr($keys,0,-1);
                $values=substr($values,0,-1);
                $sql="(".$keys.")"." values "."(".$values.")";
            }else if(strpos($opt,"=")){
                $arr=explode("=",$opt);
                $keys.=$arr[0];
                $values.=$arr[1];
                $sql="(".$keys.")"." values "."(".$values.")";
            }else{
                $sql=$opt;
            }
        }
        $this->opt["filed"]=$sql;
        return $this;
    }
    function order($opt=""){
        $str=empty($opt)?"":"ORDER BY ".$opt;
        $this->opt["order"]=$str;
        return $this;
    }
    function limit($opt=""){
        $str=empty($opt)?"":"LIMIT ".$opt;
        $this->opt["limit"]=$str;
        return $this;
    }
    function select($opt=""){
        if(strpos($opt,"elect")){
            $sql=$opt;
        }else{
            if(empty($opt)){
                $sql="select ".$this->opt["filed"]." from ".$this->tablename." ".$this->opt["where"]." ". $this->opt["order"]." ".$this->opt["limit"];
            }else{
                $this->filed($opt);
                $sql="select ".$this->opt["filed"]." from ".$this->tablename." ".$this->opt["where"]." ". $this->opt["order"]." ".$this->opt["limit"];
            }
        }
//			echo $sql;
//			exit;
        $result=$this->connect->query($sql);
        $arr=array();
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        return $arr;
    }
    function insert($opt=""){
        if(strpos($opt,"nsert")){
            $sql=$opt;
        }else{
            if(empty($opt)){
                $sql="insert into ".$this->tablename." ".$this->opt["filed"];
            }else{
                $this->filed($opt);
                $sql="insert into ".$this->tablename." ".$this->opt["filed"];
            }
        }
        $this->connect->query($sql);
        return $this->connect->affected_rows;
    }
    function delete($opt=""){
        if(empty($opt)){
            $sql="delete from ".$this->tablename." ".$this->opt["where"];
        }else{
            $sql=$opt;
        }
        $this->connect->query($sql);
        return $this->connect->affected_rows;
    }
    function update($opt=""){
        if(strpos($opt,"pdate")){
            $sql=$opt;
        }else{
            if(empty($opt)){
                $sql="update ".$this->tablename." set ".$this->opt["filed"]." ".$this->opt["where"];
            }else{
                $this->filed($opt);
                $sql="update ".$this->tablename." set ".$this->opt["filed"]." ".$this->opt["where"];
            }
        }
        $this->connect->query($sql);
        return $this->connect->affected_rows;
    }
}
//$db=new db("user");
//echo "<pre>";
//var_dump($db->select("uname"));
//var_dump($db->select("select uname from user"));
//var_dump($db->filed("uname")->select());



//var_dump($db->filed("uname='lisi';uid=10")->insert());
//var_dump($db->insert("insert into user uid values 43"));
//var_dump($db->insert("uid=11;uname='jh'"));
//var_dump($db->filed("username='34kj669';uid=54")->insert());


//var_dump($db->where("uid=10")->update("uname='34566'"));
//var_dump($db->update("update user set uname='aaaaaa' where uid=10"));
//var_dump($db->where("uid=4")->delete());
//$db=new db("admin");
//var_dump($db->filed("aname='admin';apass=md5('admin')")->insert());
?>