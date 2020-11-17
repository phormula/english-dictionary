<?php namespace App\Models;
  
use CodeIgniter\Database\ConnectionInterface;
  
class OxfordModels
{
    protected $db;
    public function __construct(ConnectionInterface &$db){
        $this->db =& $db;
    }

    function oeDefA($w){
        return $this->db->table('oedict')
                        ->where('word', $w)
                        ->like('word', $w)
                        ->get()
                        ->getResult();
    }

}