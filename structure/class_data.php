<?php
namespace structure;
use structure\interface\InterfaceData;
use structure\DataRelationship;
use structure\Connect;

/**
 * Basic Data class
 * Classe base para classes de banco de dados
 */
abstract class Data implements InterfaceData {

    protected $relationships = [];

    /**
     * Sets a integer relationship
     * Define um relacionamento como Integer
     * @return DataRelationship
     */
    public function integer($column, $attribute) {
        $rel = new DataRelationship($column, $attribute, DataRelationship::INTEGER);
        $relationships[] = $rel;
        return $rel;
    }

    /**
     * Sets a varchar relationship
     * Define um relacionamento como Varchar
     * @return DataRelationship
     */
    public function varchar($column, $attribute) {
        $rel = new DataRelationship($column, $attribute, DataRelationship::VARCHAR);
        $relationships[] = $rel;
        return $rel;
    }

    /**
     * Sets a Date relationship
     * Define um relacionamento como Date
     * @return DataRelationship
     */
    public function date($column, $attribute) {
        $rel = new DataRelationship($column, $attribute, DataRelationship::DATE);
        $relationships[] = $rel;
        return $rel;
    }

    /**
     * Inserts the model on db
     * Insere o modelo no banco de dados
     * @return boolean
     */
    public function insert() {
        return true;
    }

    /**
     * Updates the model on db
     * Atualiza o modelo no banco de dados
     * @return boolean
     */
    public function update() {
        return true;
    }

    /**
     * Deletes the model on db
     * Exclui o modelo no banco de dados
     * @return boolean
     */
    public function delete() {
        return true;
    }

    /**
     * Queries this model registers
     * Consulta os registros deste modelo
     * @return boolean
     */
    public function query() {
        return true;
    }

    /**
     * Returns the connection
     * Retorna a conexão
     * @return PDO
     */
    private function getConn() {
        return Connect::getInstance();
    }

    /**
     * Begins a db transaction
     * Começa uma transação no banco de dados
     */
    private function begin() {
        $this->getConn()->beginTransaction();
    }

    /**
     * Commits the db transaction
     * Comita a transação no banco de dados
     */
    private function commit() {
        $this->getConn()->commit();
    }

    /**
     * Rollbacks the db transaction
     * Volta atrás na transação no banco de dados
     */
    private function rollback() {
        $this->getConn()->rollBack();
    }


}