<?php namespace App\Controllers;

use App\Models\WordModel;

class Fetch extends BaseController
{
	public function index()
	{
        $db = db_connect();
        $model = new WordModel($db);
        $word = $_GET["q"];

        if($_GET['did'] == 'webs'){
            $result = $model->webs($word);
        }
        elseif($_GET['did'] == 'wiki'){
            $result = $model->wiki($word);
        }
        elseif($_GET['did'] == 'ddc'){
            $result = $model->ddc($word);
        }
        elseif($_GET['did'] == 'wn'){
            $result = $model->wn($word);
        }elseif($_GET['did'] == 'oe'){
            $result = $model->oe($word);
        }
        //$this->model->word($word);

        header('Content-Type: application/json');
 
        if (empty($result)) {
            $status = false;
        }
         
        header('Content-Type: application/json');
         
        echo json_encode(array(
            "status" => $status,
            "error"  => null,
            "data"   => array(
                "user"      => $result
            )
        ));
	}

	//--------------------------------------------------------------------

}
