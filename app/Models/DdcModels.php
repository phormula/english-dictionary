<?php namespace App\Models;
  
use CodeIgniter\Database\ConnectionInterface;
  
class DdcModels
{
    protected $db;
    public function __construct(ConnectionInterface &$db){
        $this->db =& $db;
    }

    function ddcDefA($w){
        return $this->db->table('ddc_content_blocks')
                        ->where('word', $w)
                        ->like('word', $w)
                        ->get()
                        ->getResult();
    }

}