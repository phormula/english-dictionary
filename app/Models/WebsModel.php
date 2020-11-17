<?php namespace App\Models;
  
use CodeIgniter\Database\ConnectionInterface;
  
class WebsModel
{
    protected $db;
    public function __construct(ConnectionInterface &$db){
        $this->db =& $db;
    }

    function websDefA($w){
        return $this->db->table('webs_entries')
                        ->where('word', $w)
                        ->orLike('word', '-'.$w)
                        ->get()
                        ->getResult();
    }

    function websDefB($w){
        /* return $this->db->table('webs_entries')
                        ->where('word', function(BaseBuilder $builder) {
                            return $builder->select('word')->from('webs_entries')->where('id', $w))
                        ->get()
                        ->getResult(); */
    }

}