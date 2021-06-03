<?php
class Internship {

    private $mysqli;
    private $table;
    public function __construct()
    {
        require_once("db.php");
        $this->mysqli = $mysqli;
        $this->table = 'internship';
    }

    function insert($data){

        $sql = "INSERT INTO $this->table (id, company_name, company_email, title, category, description, details, logo_path) VALUES (null,'".
            $data['company_name'] . "','".
            $data['company_email'] . "','".
            $data['title'] . "',".
            $data['category'] . ",'".
            $data['description'] . "','".
            $data['details'] . "','".
            $data['logo_path'] . "');";

        $this->mysqli->query($sql);
    }

    function getAll(){
        $sql = "SELECT * FROM $this->table";

        return $this->mysqli->query($sql);
    }

    function get($id){
        $sql = "SELECT * FROM $this->table WHERE id = $id";

        return $this->mysqli->query($sql);
    }

    function delete($id){
        $sql = "DELETE FROM $this->table WHERE id = $id";

        $this->mysqli->query($sql);
    }

    public function update(array $data, $id)
    {
        $sql = "UPDATE $this->table SET company_name='".$data['company_name']."', company_email='".$data['company_email'] ."',".
            " title='".$data['title'] ."', category=".$data['category'] .", description='".$data['description'] ."', details='".$data['details'] ."', logo_path='".$data['logo_path'] ."' WHERE id = $id";

        $this->mysqli->query($sql);
    }

}
