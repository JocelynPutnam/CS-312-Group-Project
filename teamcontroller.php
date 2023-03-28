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
		return Response::forge(Presenter::forge('teamviews/one'));
	}
	
	public function action_two()
	{
		return Response::forge(Presenter::forge('teamviews/two'));
	}


}
