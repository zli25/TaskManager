<?php

class TaskController extends BaseController {


	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		
		# Make sure BaseController construct gets called
		parent::__construct();		
		
		# Only logged in users should have access to this controller
		$this->beforeFilter('auth');
		
	}
	
	
	
	/* Get all the tasks of the loged in user */
	public function getAll() {

		$tasks = Task::searchAll(Auth::id());

		return View::make('task_all')->with('tasks', $tasks)->render();

	}

	/* Get all the tasks that are done of the loged in user */
	public function getDone() {

		$tasks = Task::searchDone(Auth::id());

		return View::make('task_done')->with('tasks', $tasks)->render();

	}

	/* Get all the in progress tasks of the loged in user */
	public function getTodo() {

		$tasks = Task::searchTodo(Auth::id());

		return View::make('task_todo')->with('tasks', $tasks)->render();

	}

	/* Get a specific task */
	public function getOne($id) {

		//$book = Book::with('author')->findOrFail($id);

		$task = Task::findOrFail($id);

		//$task = Task::searchOne($id);

		return View::make('task_one')->with('task', $task)->render();


	}




	/* Edit a specific task */
	public function getEdit($id) {

		$task = Task::findOrFail($id);

		return View::make('task_edit')->with('task', $task)->render();


	}


	public function postEdit($id) {

		$task = Task::findOrFail($id);
		$task->title = Input::get('title');
		$task->start_date = Input::get('start_date');
		$task->due_date = Input::get('due_date');
		$task->description= Input::get('description');
		$task->save();

		return Redirect::action('TaskController@getOne', $task->id)->with('flash_message','Your changes have been saved.');

	}
	
	
	/* create a task*/
	public function getCreate() {
	
	
		return View::make('task_create');
	}
	
	
	public function postCreate() {
		

		$task = new Task();
		
		$task->title = Input::get('title');
		$task->start_date = Input::get('start_date');
		$task->due_date = Input::get('due_date');
		$task->description= Input::get('description');
		$task->completeness = 0;
		$task->user()->associate(Auth::user());
		
		$task->save();
		
		return Redirect::action('TaskController@getOne', $task->id)->with('flash_message','Your task has been added.');

	}

	public function postDone($id) {

		$task = Task::findOrFail($id);

		$task->completeness = 1;
		$task->save();

		return Redirect::action('TaskController@getOne', $task->id)->with('flash_message','Your changes have been saved.');
	}
	
}