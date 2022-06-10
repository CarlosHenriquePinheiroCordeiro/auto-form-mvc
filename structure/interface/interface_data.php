<?php
namespace structure\interface;

/**
 * Interface for Data methods
 * Interface para métodos das classes de banco de dados
 */
interface InterfaceData {

    /**
     * Sets the primary keys
     * Define as chaves primárias
     */
    function setPrimaryKeys();

    /**
     * Sets the foreign keys
     * Define as chaves estrangeiras
     */
    function setForeignKeys();

    /**
     * Sets the other relationships, no keys
     * Define os outros relacionamentos, que não sejam chaves
     */
    function setRelationships();

    /**
     * Returns the table name
     * Retorna o nome da tabela
     * @return string
     */
    function getTable();

    /**
     * Returns the schema name
     * Retorna o schema da tabela
     * @return string
     */
    function getSchema();


}