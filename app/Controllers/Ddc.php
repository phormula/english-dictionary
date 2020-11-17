<?php namespace App\Controllers;

use App\Models\DdcModels;

class Ddc extends BaseController
{
	public function index()
	{
        $db = db_connect();
        $model = new DdcModels($db);
        
        $data['cID'] = $_GET["wid"];

        if(!is_numeric($_GET["wid"])){
            $data['meaning'] = $model->ddcDefA($_GET["wid"]);
        }

		return view('ddc', $data);
	}

	//--------------------------------------------------------------------

}
