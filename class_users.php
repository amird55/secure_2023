<?php

class users {
    private $mysql;

    function __construct($conn) {
        $this->mysql=$conn;
    }
    private function EncPass($p){
        return md5("W".$p."23");
    }
    public function IsValid($u,$p){
        $enc_pass = $this->EncPass($p);
        $q  = "SELECT * FROM `users` ";
        $q .= " WHERE username='$u' AND pass='$enc_pass' ";
        $result = mysqli_query($this->mysql, $q);

        if(mysqli_num_rows($result)>0)
            return true;
        return false;
    }
    public function CreateUser($params){
        $uname=isset($params['username']) ? $params['username'] : "";
        $passw=isset($params['passwd'])   ? $params['passwd']   : "";
        $valid_until="";

        $enc_pass = $this->EncPass($passw);
        if(!empty($uname)) {
            $q = "INSERT INTO `users` ( `username`, `pass`, `valid_until`) ";
            $q .= " VALUES ( '$uname', '$enc_pass', '$valid_until')";

            $result = mysqli_query($this->mysql, $q);
        }

    }
    public function UpdateUser($params){
        $id=isset($params['id']) ? $params['id'] : -1;
        $uname=isset($params['username']) ? $params['username'] : "";
        $valid_until=isset($params['valid_until'])   ? $params['valid_until']   : "";

        if($id > 0 ) {
            $q = "UPDATE `users` SET  ";
            $q .= "`username`='$uname' , ";
            $q .= "`valid_until`='$valid_until'  ";
            $q .= " WHERE id=$id ";

            $result = mysqli_query($this->mysql, $q);
        }

    }
    public function GetList(){
        $q  = "SELECT * FROM `users` ";
        $result = mysqli_query($this->mysql, $q);
        $data=array();
        while($row=mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
    public function GetUser($id){
        $q  = "SELECT * FROM `users` ";
        $q .= " WHERE id=$id";
        $result = mysqli_query($this->mysql, $q);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }
}