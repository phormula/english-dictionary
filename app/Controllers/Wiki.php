<?php namespace App\Controllers;

use App\Models\WikiModels;

class Wiki extends BaseController
{
	public function index()
	{
        $db = db_connect();
        $model = new WikiModels($db);
        
        $data['cID'] = $_GET["wid"];

        if(!is_numeric($_GET["wid"])){
            $data['meaning'] = $model->wikiDefA($_GET["wid"]);
        }

		return view('wiki', $data);
	}

	//--------------------------------------------------------------------

}
