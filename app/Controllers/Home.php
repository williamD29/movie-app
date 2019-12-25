<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index($page = "accueil")
	{
		if (!is_file(APPPATH."/Views/pages/$page.php")) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}
		
		$data['title'] = ucfirst($page);
		$data['content'] = $page;

		return view("templates/template", $data);
	}

}
