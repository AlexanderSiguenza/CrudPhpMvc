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

    public function Crud(){  
        $tea = new Teacher();        
        require_once 'view/header.php';
        require_once 'view/teacher/edit-teacher.php';
        require_once 'view/footer.php';
    }
   
    public function Guardar(){
        $tea = new Teacher();        
        $id = $_REQUEST['id'];
        $tea->nombres = $_REQUEST['nombre'];
        $tea->apellidos = $_REQUEST['apellido'];
        $tea->telefono = $_REQUEST['telefono'];
        $tea->edad = $_REQUEST['edad'];
        $tea->dpi = $_REQUEST['dpi'];
        $tea->id > 0 ? $this->model->Actualizar($tea) : $this->model->Registrar($tea);        
        header('Location: index.php');
    }
   
}