<?php

class Controller_Teamcontroller extends Controller_Template
{
	public $template = 'teamtemplate';

	public function action_index()
	{
		$data = array();
		$this->template->title = 'Team Home Page';
		$this->template->css = 'style.css';
		$this->template->content = View::forge('teamviews/index', $data);
		$this->template->css = "style.css";

	}

	public function action_one()
	{
		$this->template->title = 'About Page';
		$this->template->css = 'style.css';
		$this->template->content = View::forge('teamviews/one');
		$this->template->css = "style.css";
	}
	
	public function action_two()
	{
    $this->template->title = 'Color Coordinate Page';
		$this->template->css = 'style.css';
    if (!empty($_POST["color"])) {
    $this->template->content = View::forge('teamviews/two2');
		$this->template->css = "print.css";
    }
    else {
		$this->template->content = View::forge('teamviews/two');
		$this->template->css = "style.css";
    }
	}

	public function action_three()
	{
		$this->template->title = 'Print View Page';
		$this->template->css = 'style.css';
		$this->template->content = View::forge('teamviews/three');
		$this->template->css = "style.css";
	}


}
