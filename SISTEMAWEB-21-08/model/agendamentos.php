<?php
require_once("../conexao.php");
class Agendamentos extends Conexao{
    private $nome;
    private $telefone;
    private $origem;
    private $data_contato;
    private $observacao;
    
    //GET E SET
    public function setNome($string){
        $this->nome = $string;
    }
    public function setTelefone($string){
        $this->telefone = $string;
    }
    public function setOrigem($string){
        $this->origem = $string;
    }
    public function setData_contato($string){
        $this->data_contato = $string;
    }
    public function setObservacao($string){
        $this->observacao = $string;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getOrigem(){
        return $this->origem;
    }
    public function getData_contato(){
        return $this->data_contato;
    }
    public function getObservacao(){
        return $this->observacao;
    }
    public function incluir(){
        return $this->setAgendamentos($this->getNome(),$this->getTelefone(),$this->getOrigem(),$this->getData_contato(),$this->getObservacao());
    }
}

?>