<?php

class Controller {

    function __construct() {
        //echo 'Main controller<br />';
        $this->view = new View();
    }
    
    /**
     * 
     * @param string $name Name of the model
     * @param string $path Location of the models
     */
    public function loadModel($name, $modelPath = 'models/') {
        
        $path = $modelPath . 'Model' . $name.'.php';
        
        if (file_exists($path)) {
            require $modelPath . 'Model' . $name.'.php';
            
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }        
    }

}