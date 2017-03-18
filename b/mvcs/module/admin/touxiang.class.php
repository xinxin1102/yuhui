<?php
    class touxiang extends index{
        function __construct()
        {
            parent::__construct();
            $this->db=new db("user");
        }


    }