<?php namespace App\Controllers;

use App\Models\WnModels;

class Wordnet extends BaseController
{
	public function index()
	{
        $db = db_connect();
        $model = new WnModels($db);
        
        $data['cID'] = $_GET["wid"];

        if(!is_numeric($_GET["wid"])){
            $data['meaning'] = $model->wnDefA($_GET["wid"]);
        }

		return view('wn', $data);
	}

	//--------------------------------------------------------------------

}
