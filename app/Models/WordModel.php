<?php namespace App\Models;
  
use CodeIgniter\Database\ConnectionInterface;
  
class WordModel
{
    protected $db;
    public function __construct(ConnectionInterface &$db){
        $this->db =& $db;
    }

    function webs($w){
        return $this->db->table('webs_entries')
                        ->like('word', $w, 'after')
                        ->groupBy('word')
                        ->get()
                        ->getResult();
    }

    function wiki($w){
        return $this->db->table('wiki_dict')
                        ->like('word', $w, 'after')
                        ->groupBy('word')
                        ->get()
                        ->getResult();
    }

    function ddc($w){
        return $this->db->table('ddc_entries')
                        ->like('word', $w, 'after')
                        ->groupBy('word')
                        ->get()
                        ->getResult();
    }

    function wn($w){
        return $this->db->table('wn_synset')
                        ->like('word', $w, 'after')
                        ->groupBy('word')
                        ->get()
                        ->getResult();
    }

    function oe($w){
        return $this->db->table('oedict')
                        ->where('word', $w)
                        ->orLike('word', $w)
                        ->groupBy('word')
                        ->get()
                        ->getResult();
    }
}