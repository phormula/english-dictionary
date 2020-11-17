<?php namespace App\Controllers;

use App\Models\WebsModel;

class Webs extends BaseController
{
	public function index()
	{
        $db = db_connect();
        $model = new WebsModel($db);
        
        $data['cID'] = $_GET["wid"];

        if(!is_numeric($_GET["wid"])){
            $data['meaning'] = $model->websDefA($_GET["wid"]);
        }
        else{
            $data['meaning'] = $model->websDefB($_GET["wid"]);
        }

		return view('webster', $data);
	}

	//--------------------------------------------------------------------

}
