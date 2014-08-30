<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function saveTodo()
	{
		// save new todo
		if(Input::get('inputTodo') != null || Input::get('inputTodo') != "")
			{
				$d=strtotime(Input::get('inputDuedate'));
				$todo = new Todo;
				$todo->title = Input::get('inputTodo');
				$todo->description = Input::get('inputDescription');
				$todo->complete = false;
				$todo->duedate = date("Y-m-d h:i:s", $d);
				$todo->author = Input::get('inputAuthor');
				$todo->save();
			}

		$todos = Todo::all();
		return View::make('todos')->with('todos', $todos);
	}

}
