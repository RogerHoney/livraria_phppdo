<?php

class Livraria_Categoria extends Livraria_Db_Abstract{
    protected $_table = "categorias";
    private $nome = null;
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function _insert() {
        
        $db = $this->getDb();
        $stm = $db->prepare("INSERT INTO " .$this->_table. "(nome) VALUES(:nome)");
        $stm->bindValue(":nome", $this->getNome());
        $stm->execute();
    }
    
    public function _update() {
        $db = $this->getDb();
        $stm = $db->prepare("UPDATE " .$this->_table. "SET nome=:nome WHERE id=:id");
        $stm->bindValue(":id", $this->getId());
        $stm->bindValue(":nome", $this->getNome());
        $stm->execute();
    }
}   
    

