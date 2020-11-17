<?php namespace App\Models;
  
use CodeIgniter\Database\ConnectionInterface;
  
class WikiModels
{
    protected $db;
    public function __construct(ConnectionInterface &$db){
        $this->db =& $db;
    }

    function wikiDefA($w){
        return $this->db->table('wiki_dict')
                        ->where('word', $w)
                        ->like('word', $w)
                        ->get()
                        ->getResult();
    }

}