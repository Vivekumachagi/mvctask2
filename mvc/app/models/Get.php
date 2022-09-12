<?php
class Get extends Database
{
    public function getdata()
    {
        $this->query("select * from empdetail");
        return $this->resultSet();
    }

    public function getone()
    {
        $name = $_POST['inputname'];
        $this->query("select * from empdetail where fname='$name'");
        return $this->resultSet();
        
    }
    public function getid($id)
    {
        $this->query("select * from empdetail where id='$id'");
        return $this->single();
    }
}
