<?php
namespace view;

use structure\Input;
use structure\interface\InterfaceView;

/**
 * Basic View class
 * Classe base para classes de View
 */
abstract class View implements InterfaceView {

    /** @var Input[] */
    protected $inputs = [];

    public function print() {
        $html = '';
        $this->initForm($html);
        $this->closeForm($html);
    }

    protected function initForm(string $html) {

    }

    protected function closeForm(string $html) {
        $html .= '</form>';
    }

    protected function addFormInputs(string $html) {
        foreach ($this->inputs as $input) {
            $html .= $input->toHtml();
        }
    }

    /**
     * Add an input field to the view
     * Adiciona um campo de input para a tela
     */
    protected function addInput(Input $input) {
        $this->inputs[] = $input;
    }

    /**
     * Get the view inputs
     * @return array
     */ 
    public function getInputs() : array {
        return $this->inputs;
    }


}