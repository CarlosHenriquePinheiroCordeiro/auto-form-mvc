<?php
namespace structure\interface;

/**
 * Interface for View methods
 * Interface para métodos da View
 */
interface InterfaceView {

    /**
     * Add the view input fields
     * Adiciona os campos da tela 
     */
    public function setInputs();

    /**
     * Sets the form view actions
     * Define as ações do formulário da tela
     */
    public function setActions();


}