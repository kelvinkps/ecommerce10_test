<?php

class FornecedorEnt{
    
    private $efo_id;
    private $efo_razao_social;
    private $efo_cnpj;
    private $efo_site;
    private $efo_endereco;
    private $efo_bairro;
    private $efo_cep;
    private $efo_num;
    private $efo_email;
    private $efo_telefone;
    private $efo_eusu_id;
    private $efo_municipio;
    private $efo_uf;
    private $efo_complemento;
    


    public function setEfoId($efo_id){
        $this->efo_id = $efo_id;
    }
    
    public function getEfoId(){
        return $this->efo_id;
    }
    
    public function setEfoRazaoSocial($efo_razao_social){
        $this->efo_razao_social = $efo_razao_social;
    }
    
    public function getEfoRazaoSocial(){
        return $this->efo_razao_social;
    }
    
    public function setEfoCnpj($efo_cnpj){
        $this->efo_cnpj = $efo_cnpj;
    }
    
    public function getEfoCnpj(){
        return $this->efo_cnpj;
    }
    
    public function setEfoSite($efo_site){
        $this->efo_site = $efo_site;
    }
    
    public function geEfoSite(){
        return $this->efo_site;
    }
    
    public function setEfoEndereco($efo_endereco){
        $this->efo_endereco = $efo_endereco;
    }
    
    public function getEfoEndereco(){
        return $this->efo_endereco;
    }
    
    
    public function setEfoBairro($efo_bairro){
        $this->efo_bairro= $efo_bairro;
    }
    
    public function getEfoBairro(){
        return $this->efo_bairro;
    }
    
    public function setEfoCep($efo_cep){
        $this->efo_cep = $efo_cep;
    }
    
    public function getEfoCep(){
        return $this->efo_cep;
    }
    
    public function setEfoNum($efo_num){
        $this->efo_num = $efo_num;
    }
    
    public function getEfoNum(){
        return $this->efo_num;
    }
    
    public function setEfoEmail($efo_email){
        $this->efo_email = $efo_email;
    }
    
    public function getEfoEmail(){
        return $this->efo_email;
    }

    public function setEfoTelefone($efo_telefone){
        $this->efo_telefone = $efo_telefone;
    }
    
    public function getEfoTelefone(){
        return $this->efo_telefone;
    }
    
    public function setEfoEusuId($efo_eusu_id){
        $this->efo_eusu_id = $efo_eusu_id;
    }
    
    public function getEfoEusuId(){
        return $this->efo_eusu_id;
    }

    public function setEfoMunicipio($efo_municipio){
        $this->efo_municipio = $efo_municipio;
    }
    
    public function getEfoMunicipio(){
        return $this->efo_municipio;
    }

    public function setEfoUf($efo_uf){
        $this->efo_uf= $efo_uf;
    }
    
    public function getEfoUf(){
        return $this->efo_uf;
    }

    public function setEfoComplemento($efo_complemento){
        $this->efo_complemento = $efo_complemento;
    }
    
    public function getEfoComplemento(){
        return $this->efo_complemento;
    }
}
