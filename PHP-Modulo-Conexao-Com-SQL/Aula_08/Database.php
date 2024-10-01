<?php

namespace Database;

use PDO;
use PDOException;
use stdClass;

class Database
{
    // propriedades
    private $_host;
    private $_database;
    private $_username;
    private $_password;
    private $_return_type;

    public function __construct($cfg_options, $return_type = 'object')
    {
        // define configurações de conexão
        $this->_host = $cfg_options['host'];
        $this->_database = $cfg_options['database'];
        $this->_username = $cfg_options['username'];
        $this->_password = $cfg_options['password'];


        // define o tipo de retorno
        if (!empty($return_type) && $return_type == 'object') {
            $this->_return_type = PDO::FETCH_OBJ;
        } else {
            $this->_return_type = PDO::FETCH_ASSOC;
        }
    }

    // Método que vai devolver os resultados
    public function execute_query($sql, $parametros = null)
    {
        // executa a query de resultados
        

        // conexão 
        $conexao = new PDO(
            'mysql:host=' . $this->_host . ';dbname=' . $this->_database . ';charset=utf8',
            $this->_username,
            $this->_password,
            array(PDO::ATTR_PERSISTENT => true)
        );

        $resultados = null;

        try {
            $db = $conexao->prepare($sql);

            if (!empty($parametros)) {
                $db->execute($parametros);
            } else {
                $db->execute();
            }

            $results = $db->fetchAll($this->_return_type);

        } catch (PDOException $err) {

            // fechar a conexão
            $conexao = null;

            // return do error
            return $this->_result('error', $err->getMessage(), $sql, null, 0, null);
        }

        $conexao = null;

        // retorna o resultado
        return $this->_result('success', 'success', $sql, $results, $db->rowCount(), null);
    }

    private function _result($status, $message, $sql, $resultados, $affected_rows, $last_id) 
    {
        $tmp = new stdClass();
        $tmp->status = $status;
        $tmp->message = $message;
        $tmp->sql = $sql;
        $tmp->resultados = $resultados;
        $tmp->affected_rows = $affected_rows;
        $tmp->last_id = $last_id;
        return $tmp;
    }
}
