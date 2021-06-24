<?php
require_once 'model/model.teacher.php';

class TeacherController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Teacher();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/teacher/teacher.php';
        require_once 'view/footer.php';
    }   
   
}