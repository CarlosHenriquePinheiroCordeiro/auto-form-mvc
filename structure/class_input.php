<?php
namespace structure;

class Input {

    protected $name;
    protected $title;
    protected $placeholder;
    protected $type;
    protected $disabled;
    protected $required;

    public function __construct(int $type, string $name, string $title) {
        $this->setType($type);
        $this->setName($name);
        $this->setTitle($title);
    }

    /**
     * Returns the input in a HTML format
     * Retorna o campo em formato HTML
     */
    public function toHtml() : string {
        $html = '';
        $this->label($html);
        $this->input($html);
        return $html;
    }

    /**
     * Return the input label in a HTML format
     * Retorna o label do campo em formato HTML
     */
    protected function label($html) {
        $html .= '<label for="'.$this->getName().'">'.$this->getTitle().'</label>';
    }

    /**
     * Build the HTML input
     * Monta o HTML do campo
     */
    protected function input($html) {
        $input = '<input';
        $input .= '>';
        $html .= $input;
    }

    /**
     * Sets the input type
     * Define o tipo do campo
     */
    protected function type($input) {
        $input .= ' type='.DataRelationship::$types[$this->getType()];
    }

    /**
     * Get the value of name
     * @return string
     */ 
    public function getName() {
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


}