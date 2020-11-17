<?php namespace App\Models;
  
use CodeIgniter\Database\ConnectionInterface;
  
class WnModels
{
    protected $db;
    public function __construct(ConnectionInterface &$db){
        $this->db =& $db;
    }

    function wnDefA($w){
        return $this->db->table('wn_synset')
                        ->where('word', $w)
                        ->like('word', $w)
                        ->get()
                        ->getResult();
    }

}