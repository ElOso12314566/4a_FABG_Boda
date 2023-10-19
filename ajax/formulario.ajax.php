<?php

require_once "../controladores/formularios.controlador.php";
require_once "../modelos/formularios.modelos.php";

/**Clase de ajax */

class ajaxFormularios{

    /** Validar Email existente */
    public $validarEmail;

    public function ajaxValidarEmail(){
        $item ="Email";
        $valor= $this->validarEmail;
        $respuesta =ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
        
        //echo '<pre>'; print_r($respuesta); echo '</pre>';
        echo json_encode($respuesta);
    }
}


/** Objetos de ajax que recibe las variables de POST*/

 if (isset($_POST["validarEmail"])){
    $valEmail=new ajaxFormularios;
    $valEmail -> validarEmail = $_POST["validarEmail"]; 
    $valEmail -> ajaxValidarEmail();
}