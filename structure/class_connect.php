<?php
namespace structure;
use PDO;
use PDOException;

/**
 * Singleton db connection class
 * Classe Singleton da conexão com o banco de dados
 */
class Connect {

    private $Connection;

    private function __construct() {}

    /**
     * Returns the PDO connection
     * Retorna a conexão PDO
     * @return PDO
     */
    public static function getInstance() {
        if (!isset(self::$Connection)) {
            self::setConnection();
        }
        return self::$Connection;
    }

    /**
     * Setups the PDO connection
     * Define a conexão PDO
     */
    private function setConnection() {
        try {  
            $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', 
                            PDO::ATTR_PERSISTENT         => TRUE,
                            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION);
  
            self::$Connection = new PDO(DRIVER.
                                 ":host=" . HOST . 
                                 "; dbname=" . DBNAME . 
                                 "; charset=" . CHARSET . 
                                 ";", USER, PASSWORD, 
                                 $opcoes);  
  
          } catch (PDOException $e) {  
            print "DB Error: " . $e->getMessage();  
          }
    }


}