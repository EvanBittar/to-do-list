<?php

class Database {
    public $connected;
    public $statmant;
    public function __construct($config,$username='evan', $password= 'evan'){
        $dns = 'mysql: '. http_build_query($config,'',';');
        $this->connected = new PDO( $dns,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
    public function query($query,$params=[]){
    $this->statmant = $this->connected->prepare($query);
    $this->statmant->execute($params);
    return $this;
}
    public function all(){
        return $this->statmant->fetchAll();
    }
    public function fetch(){
        return $this->statmant->fetch();
    }
    public function FindOrFalse(){
    $result = $this->statmant->fetch();
        if(!$result){
            return abort();
        }
    }
}