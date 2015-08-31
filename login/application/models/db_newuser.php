<?php

if (!defined('BASEPATH'))
    exit('NO direct script access allowed!');

class Db_newuser extends CI_Model {

    public function __construct() {
        parent::__construct();
        //load the database
        $this->load->database();
    }

    public function db_select($x, $y) {

//        $sql_select = "select username,password from kosala_login where username=? and password=?";//for server kbtl
        $sql_select = "select username,password from newuser where username=? and password=?";
        $stmt = $this->db->conn_id->prepare($sql_select);
        $stmt->bindParam(1, $x, PDO::PARAM_STR, 20);
        $stmt->bindParam(2, $y, PDO::PARAM_STR, 200);
        $stmt->execute();
        //$stmt->fetch($sql_select);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function db_insert($x, $y) {

        $id = NULL;
//        $insert = "insert into kosala_login values(?,?,?)";//kbtl server
        $insert = "insert into newuser values(?,?,?)";
        $stmt = $this->db->conn_id->prepare($insert);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->bindParam(2, $x, PDO::PARAM_STR, 20);
        $stmt->bindParam(3, $y, PDO::PARAM_STR, 200);
        $stmt->execute();
        $stmt->fetch();
    }

    public function user_select($x) {

         $sql_select = "select username from newuser where username=?";
        $stmt = $this->db->conn_id->prepare($sql_select);
        $stmt->bindParam(1, $x, PDO::PARAM_STR);
//        $stmt->bindParam(2, $y, PDO::PARAM_STR, 200);
        $stmt->execute();
        //$stmt->fetch($sql_select);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
