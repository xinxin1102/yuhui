<?php

class category extends main
{

    function __construct()
    {
        parent::__construct();
        $this->db = new db("category");
    }

    function init()
    {
        if (!$this->checkLogin()) {
            exit;
        }
        $this->smarty->assign("username", $_SESSION["aname"]);
        $this->smarty->display("admin/index.html");
    }

    function addCategory()
    {
        if ($this->checkLogin()) {

            $db = $this->db->connect;
            $tree = new infinite();

            if (isset($_GET['id'])) {
                $tree->tree(0, 1, "category", $db, $_GET['id']);
            } else {
                $tree->tree(0, 1, "category", $db);
            }

            $this->smarty->assign("options", $tree->str);


            $this->smarty->display("admin/addCategory.html");
        }
    }

    function addCategoryInfo()
    {
        if (!$this->checkLogin()) {
            exit;
        }
        $pid = P("category");
        $val = P("addcat");
        $db = $this->db;
        $result = $db->filed("cname='$val';pid=$pid")->insert();
        $db->insert_id;
        if ($result > 0) {
            $message = "添加成功";
            $url = "index.php?m=admin&f=category&a=addCategory&id=" . $db->insert_id;
            $this->jump($url, $message);
        } else {
            $message = "添加失败";
            $url = "index.php?m=admin&f=category&a=addCategory";
            $this->jump($url, $message);
        }
    }

    function showCategory()
    {
        if (!$this->checkLogin()) {
            exit;
        }
        /*$result = $this->db->select();
        $this->smarty->assign("result", $result);
        $this->smarty->display("admin/showCategory.html");*/
        $table=new infinite();
        $db=$this->db->connect;
        $table->table(0,1,"category",$db);
        $this->smarty->assign("result", $table->str);
        $this->smarty->display("admin/showCategory.html");
    }

    function editCategory(){
        if (!$this->checkLogin()) {
            exit;
        }

        $edit=new infinite();
        $cid=P("cid");
        $edit->tree(0,1,"category",$this->db->connect,$cid);
        $category=$edit->str;

        $curcat=$this->db->where("cid=$cid")->select();
        $curcat=$curcat[0];

        $this->smarty->assign("categorys",$category);
        $this->smarty->assign("nowcat",$curcat);
        $this->smarty->display("admin/editCategory.html");

    }
    function editCategoryInfo(){
        if (!$this->checkLogin()) {
            exit;
        }

        $cid=P("cid");
        $cname=P("cname");
        $pid=P("category");

        $result=$this->db->where("cid=$cid")->update("cname='$cname',pid=$pid");

        if($result>0){
            $message="修改成功";
            $url="index.php?m=admin&f=category&a=showCategory";
            $this->jump($url,$message);
        }else{
            $message="修改失败";
            $url="index.php?m=admin&f=category&a=showCategory";
            $this->jump($url,$message);
        }
    }

    function delCategory()
    {
        $del = $_GET['cid'];
        $result = $this->db->delete("cid=$del");
        if ($result > 0) {
            $url="index.php?m=admin&f=category&a=showCategory";
            $message="删除成功";
            $this->jump($url,$message);
        }else{
            $url="index.php?m=admin&f=category&a=showCategory";
            $message="删除失败";
            $this->jump($url,$message);
        }
    }
}