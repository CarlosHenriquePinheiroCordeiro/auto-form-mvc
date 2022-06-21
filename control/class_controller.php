<?php
namespace controller;

/**
 * Basic Controller class
 * Classe base para classes de Controller
 */
abstract class Controller {

    protected $Model;
    protected $View;

    

    /**
     * Get the value of Model
     */ 
    public function getModel(){
        return $this->Model;
    }

    /**
     * Set the value of Model
     *
     * @return  self
     */ 
    public function setModel($Model) {
        $this->Model = $Model;
        return $this;
    }

    /**
     * Get the value of View
     */ 
    public function getView() {
        return $this->View;
    }

    /**
     * Set the value of View
     *
     * @return  self
     */ 
    public function setView($View) {
        $this->View = $View;
        return $this;
    }
}