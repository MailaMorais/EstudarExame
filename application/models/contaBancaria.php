<?php


class ContaBancaria extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    public function getConta($id_conta, $conta){
        $result['conta'] = $this->db->getConta(1, 123456);
        return 0;
        
    }
    
}
