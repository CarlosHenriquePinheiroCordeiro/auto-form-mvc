<?php
namespace model\data;
use structure\Data;

/**
 * Database class to Person
 * Classe de banco de dados para Pessoa
 */
class DataPerson extends Data {

    /**
     * {@inheritdoc}
     */
    function setPrimaryKeys() {

    }

    /**
     * {@inheritdoc}
     */
    function setForeignKeys() {

    }

    /**
     * {@inheritdoc}
     */
    function setRelationships() {

    }

    /**
     * {@inheritdoc}
     */
    function getTable() {
        return 'tbperson';
    }


}