<?php

class art extends main
{
    function __construct()
    {
        parent::__construct();
        $this->db = new db("shows");
    }

    function init()
    {
        if ($this->checkLogin()) {
            $this->smarty->assign("username", $_SESSION["aname"]);
            $this->smarty->display("admin/index.html");
        }
    }

    function addcon()
    {
        $db = $this->db->connect;
        $tree = new infinite();
        $tree->tree(0, 1, "category", $db);
        $this->smarty->assign("tree", $tree->str);
        $this->smarty->display("admin/addcon.html");
    }

    function addconInfo()
    {
        $cid = P("category");
        $stitle = P("title");
        $scon = P("edit");
        $username = $_SESSION["aname"];

        $result = $this->db->insert("stitle='$stitle';scon='$scon';cid=$cid;username='$username';userrole=0");
        if ($result > 0) {
            $url = "index.php?m=index&f=art&a=addcon";
            $message = "文章保存成功";
            $this->jump($url, $message);
        } else {
            $url = "index.php?m=index&f=art&a=addcon";
            $message = "文章保存失败，如发生多次，请联系管理员";
            $this->jump($url, $message);
        }

    }

//    audited
    function showcon()
    {

        $result = $this->db->select();
        $pages = new pages(count($result), 3);

        $result = $this->db->limit($pages->limit)->select();
//        $result=$this->db->select("select * from shows,category where category.cid=shows.cid ".$pages->limit);
        $result=$this->db->select("select * from shows,position where position.posid=shows.posid ".$pages->limit);
        $pages = $pages->out();

        $this->smarty->assign("pages", $pages);
        $this->smarty->assign("result", $result);
        $this->smarty->display("admin/showcon.html");

    }

    function statucon()
    {
        $sid = P("sid");
        $result = $this->db->where("sid=" . $sid)->select();
        $possql="select * from position";
        $position=$this->db->select($possql);

        $this->smarty->assign("result", $result);
        $this->smarty->assign("position", $position);
        $this->smarty->display("admin/statucon.html");
    }

    function statuconInfo()
    {
        $sid = P("sid");
        $statu = P("statu");
        $posid = P("posid");

        $result = $this->db->where("sid=$sid")->update("statu=$statu,posid=$posid");
        if ($result > 0) {
            $url = "index.php?m=admin&f=art&a=showcon";
            $message = "审核提交成功";
            $this->jump($url, $message);
        } else {
            $url = "index.php?m=admin&f=art&a=showcon";
            $message = "审核提交失败";
            $this->jump($url, $message);
        }
    }

    /*
     * 删除文章
     * */
    function delcon()
    {
        $sid = P("sid");
        $result = $this->db->delete("sid=$sid");
        if ($result > 0) {
            $url = "index.php?m=admin&f=art&a=showcon";
            $message="文章删除成功";
            $this->jump($url,$message);
        }else{
            $url = "index.php?m=admin&f=art&a=showcon";
            $message="文章删除失败";
            $this->jump($url,$message);
        }
    }


}