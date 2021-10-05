<?php
interface InterfaceTemplate{
    public function getList(); 
    public function getListById();
    public function getUser();
    public function insert($dataArr);
    public function update();
    public function delete($id);
}
?>