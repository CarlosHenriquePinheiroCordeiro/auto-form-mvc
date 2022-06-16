<?php
namespace structure;

class Input {

    protected $name;
    protected $title;
    protected $placeholder;
    protected $type;
    protected $disabled;
    protected $required;
    protected $value;

    public function __construct(int $type, string $name, string $title) {
        $this->setType($type);
        $this->setName($name);
        $this->setTitle($title);
    }

    /**
     * Returns the input in a HTML format
     * Retorna o campo em formato HTML
     */
    public function inputToHtml() : string {
        $html = '';
        $this->label($html);
        $this->input($html);
        return $html;
    }

    /**
     * Returns the input label in a HTML format
     * Retorna o label do campo em formato HTML
     */
    protected function label($html) {
        $html .= '<label for="'.$this->getName().'">'.$this->getTitle().'</label>';
    }

    /**
     * Builds the HTML input
     * Monta o HTML do campo
     */
    protected function input($html) {
        $html .= '<input '.$this->inputElements().'>';
    }

    /**
     * Returns the input elements
     * Retorna os elementos do campo
     * @return string
     */
    protected function inputElements() : string {
        $elements = '';
        $elements .= $this->typeToHtml();
        $elements .= $this->nameToHtml();
        $elements .= $this->placeholderToHtml();
        $elements .= $this->valueToHtml();
        $elements .= $this->requiredToHtml();
        $elements .= $this->disabledToHtml();
        return $elements;
    }

    /**
     * Returns the input type in HTML
     * Retorna o tipo do campo em HTML
     */
    protected function typeToHtml() : string {
        return ' type='.DataRelationship::$types[$this->getType()];
    }

    /**
     * Returns the name for the input in HTML
     * Retorna o name para o campo em HTML
     */
    protected function nameToHtml() : string {
        return ' name='.$this->getName();
    }

    /**
     * Returns the placeholder in HTML
     * Retorna o placeholder em HTML
     * @return string
     */
    protected function placeholderToHtml() : string {
        $placeholder = '';
        if ($this->getPlaceholder() != null) {
            $placeholder .= 'placeholder='.$this->getPlaceholder();
        }
        return $placeholder;
    }

    /**
     * Returns the value in HTML
     * Retorna o valor em HTML
     * @return string
     */
    protected function valueToHtml() : string {
        $value = '';
        if ($this->getValue() != null) {
            $value .= 'value='.$this->getValue();
        }
        return $value;
    }

    /**
     * Returns if the input is required in HTML
     * Retorna se o campo é obrigatório em HTML
     * @return string
     */
    protected function requiredToHtml() : string {
        $required = '';
        if ($this->getRequired() != null) {
            $required .= ' required';
        }
        return $required;
    }

    /**
     * Returns if the input is disabled in HTML
     * Retorna se o campo é desabilitado em HTML
     * @return string
     */
    protected function disabledToHtml() : string {
        $disabled = '';
        if ($this->getDisabled() != null) {
            $disabled .= ' disabled';
        }
        return $disabled;
    }

    /**
     * Get the value of name
     * @return string
     */ 
    public function getName() : string {
        return $this->name;
    }

    /**
     * Set the value of name
     * @param string $name
     * @return  self
     */ 
    public function setName(string $name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get the value of title
     * @return string
     */ 
    public function getTitle() : string {
        return $this->title;
    }

    /**
     * Set the value of title
     * @param string $title
     * @return  self
     */ 
    public function setTitle(string $title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get the value of placeholder
     * @return string
     */ 
    public function getPlaceholder() : string {
        return $this->placeholder;
    }

    /**
     * Set the value of placeholder
     * @param string $placeholder
     * @return  self
     */ 
    public function setPlaceholder(string $placeholder) {
        $this->placeholder = $placeholder;
        return $this;
    }

    /**
     * Get the value of type
     * @return int
     */ 
    public function getType() : int {
        return $this->type;
    }

    /**
     * Set the value of type
     * @param int $type
     * @return  self
     */ 
    public function setType(int $type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get the value of disabled
     * @return boolean
     */ 
    public function getDisabled() : bool {
        return $this->disabled;
    }

    /**
     * Set the value of disabled
     * @param boolean $disabled
     * @return  self
     */ 
    public function setDisabled(bool $disabled) {
        $this->disabled = $disabled;
        return $this;
    }

    /**
     * Get the value of required
     * @return boolean
     */ 
    public function getRequired() : bool {
        return $this->required;
    }

    /**
     * Set the value of required
     * @param boolean $required
     * @return  self
     */ 
    public function setRequired(bool $required) {
        $this->required = $required;
        return $this;
    }

    /**
     * Get the value of value
     */ 
    public function getValue() {
        return $this->value;
    }

    /**
     * Set the value of value
     * @return  self
     */ 
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }


}