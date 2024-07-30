<?php namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

use App\Repositories\ProjectRepository;

class HomeController extends Controller {


    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepo = $projectRepository;
    }

	public function default()
	{
        return view('main.home.default')->with('projects', $this->projectRepo->all());
    }

    public function professional()
	{
        return view('main.home.professional');
    }

}
