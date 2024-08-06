<?php

class Conexao{
    public static $instance;

    public static function get_instance()
    {
        if (!isset(self::$instance)) {
             self::$instance = new PDO("mysql:host=localhost;dbname=aprendix","root","",
           array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'));
             self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}

class protocolo extends Conexao
{
    public function list_client()
    {

        $pdo = parent::get_instance();
        $sql = "SELECT * FROM usuario order by id desc";
        $statement = $pdo->query($sql);
        $statement->execute();

        return $statement->fetchAll();
    }
    public function list_client_by_id($id)
    {
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM usuario WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();

        return $statement->fetchAll();
    }

    public function update_client($data)
    {
        $pdo = parent::get_instance();
        $sql = "UPDATE usuario SET nome = :nome,
                                   sobrenome = :sobrenome,
                                   email = :email,
                                   senha = :senha,
                                   permissao = :permissao,
                                   WHERE id = :id";
                                   
        var_dump($sql);
        $statement = $pdo->prepare($sql);
        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value);
        }
        $statement->execute();
    }

}

