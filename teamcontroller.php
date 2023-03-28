<?php

class Controller_Teamcontroller extends Controller_Template
{
	public $template = 'teamtemplate';
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		//die('team index');
		//return Response::forge(View::forge('teamviews/index'));
		$data = array();
		$this->template->title = 'Team Home Page';
		$this->template->css = 'style.css';
		$this->template->content = View::forge('teamviews/index', $data);
		$this->template->css = "style.css";
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_one()
	{
		return Response::forge(Presenter::forge('teamviews/one'));
	}


}
