<?php namespace App\Controllers;

use App\Models\OxfordModels;

class Oxford extends BaseController
{
	public function index()
	{
        $db = db_connect();
        $model = new OxfordModels($db);
        
        $data['cID'] = $_GET["wid"];

        if(!is_numeric($_GET["wid"])){
            $data['meaning'] = $model->oeDefA($_GET["wid"]);
        }

		return view('oe', $data);
	}

	//--------------------------------------------------------------------

}
