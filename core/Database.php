<?php

class Database {
    public $connected;
    public function __construct($config,$username='evan', $password= 'evan'){
        $dns = 'mysql: '. http_build_query($config,'',';');
        $this->connected = new PDO( $dns,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
    public function query($query,$params=[]){
    $statmant = $this->connected->prepare($query);
    $statmant->execute($params);
    return $statmant;
}
//     public function all(){
//         return $this->statmant->fetchAll();
//     }
//     public function fetch(){
//         return $this->statmant->fetch();
//     }
}