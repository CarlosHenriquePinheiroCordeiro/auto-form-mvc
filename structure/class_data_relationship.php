<?php
namespace structure;

class DataRelationship {

    const INTEGER  = 0;
    const VARCHAR  = 1;
    const DATE     = 2;

    /** @var boolean */
    private $primary;

    /** @var boolean */
    private $foreign;

    /** @var array */
    private $reference = [];

    /** @var string */
    private $referenceTable;

    /** @var int */
    private $type;

    /** @var string */
    private $column;

    /** @var string */
    private $attribute;

    /** @var string */
    private $default;

    /** @var boolean */
    private $autoIncrement;

    /** @var array */
    public static $types = [
        self::INTEGER => 'number',
        self::VARCHAR => 'text',
        self::DATE    => 'date',
    ];
    
    public function __construct(string $column, string $atribute, int $type = 0) {
        $this->column    = $column;
        $this->attribute = $atribute;
        $this->type      = $type;
    }

    /**
     * Sets that this is a primary key
     * Define que esta é uma chave primária
     * @return self
     */
    public function primaryKey() : self {
        $this->primary = true;
        return $this;
    }

    /**
     * Sets that this is a foreign key
     * Define que esta é uma chave estrangeira
     * @return self
     */
    public function foreignKey() : self {
        $this->foreign = true;
        return $this;
    }

    /**
     * Sets the foreign key reference
     * Define a referência da chave estrangeira
     * @return self
     */
    public function references(string $column, string $atribute) : self {
        if ($this->isForeign()) {
            $this->reference = ['col' => $column, 'att' => $atribute];
        }
        return $this;
    }

    /**
     * Set the foreign key reference table
     * Define a tabela da referência da chave estrangeira
     * @return self
     */
    public function on(string $table) : self {
        if (count($this->getReference()) > 0) {
            $this->referenceTable = $table;
        }
        return $this;
    }

    /**
     * Get the value of primary
     * @return boolean
     */ 
    public function isPrimary() : bool {
        return $this->primary;
    }

    /**
     * Get the value of foreign
     * @return boolean
     */ 
    public function isForeign() : bool {
        return $this->foreign;
    }

    /**
     * Get the value of reference
     * @return array
     */ 
    public function getReference() : array {
        return $this->reference;
    }

    /**
     * Get the value of referenceTable
     * @return string
     */ 
    public function getReferenceTable() : string {
        return $this->referenceTable;
    }

    /**
     * Get the value of type
     * @return int
     */ 
    public function getType() : int {
        return $this->type;
    }

    /**
     * Get the value of column
     * @return string
     */ 
    public function getColumn() : string {
        return $this->column;
    }

    /**
     * Get the value of attribute
     * @return string
     */ 
    public function getAttribute() : string {
        return $this->attribute;
    }

     /**
     * Get the value of default
     * @return string
     */ 
    public function getDefault() : string {
        return $this->default;
    }

    /**
     * Get the value of autoIncrement
     * @return boolean
     */ 
    public function isAutoIncrement() : bool {
        return $this->autoIncrement;
    }


}