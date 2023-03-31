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
	}
	
	public function action_two()
	{
		$this->template->title = 'Color Coordinate Page';
		$this->template->css = 'style.css';
		$this->template->content = View::forge('teamviews/two');

		//USING GET to obtain the rows and colors

		$rows = Input::get('rows');
		$colors = Input::get('colors');

		//I know I'm on the right track with this - setting an error and then redirecting to the page but rn it doesnt work
		//at least I know we have get/post paradigm working! the page wont work unless you put in rows and colors and keep it within 1-26 or 1-10
		if($rows < 1 || $rows > 26 || !is_numeric($rows)){
			Session::set_flash('error', 'Please enter a number between 1 and 26 for the rows parameter!');
        	Response::redirect('./index/teamcontroller/two');
		}

		if($colors < 1 || $colors > 26 || !is_numeric($colors)){
			Session::set_flash('error', 'Please enter a number between 1 and 26 for the rows parameter!');
        	Response::redirect('./index/teamcontroller/two');
		}

	}

	public function action_three()
	{
		$this->template->title = 'Print View Page';
		$this->template->css = 'style.css';
		$this->template->content = View::forge('teamviews/three');
	}


}