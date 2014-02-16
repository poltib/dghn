<?php

class CoursesController extends BaseController {

	/**
	 * Course Repository
	 *
	 * @var Course
	 */
	protected $course;

	public function __construct(Course $course)
	{
		$this->course = $course;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$title = 'Ajouter un cours';

		return View::make('courses.create', compact('title'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Course::$rules);

		if ($validation->passes())
		{
			$this->course->create($input);

			return Redirect::route('sections.index');
		}

		return Redirect::route('courses.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$course = $this->course->findOrFail($id);

		$title = $course->name;

		return View::make('courses.show', compact('course', 'title'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$course = $this->course->find($id);

		$title = $course->name;

		if (is_null($course))
		{
			return Redirect::route('courses.index');
		}

		return View::make('courses.edit', compact('course', 'title'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Course::$rules);

		if ($validation->passes())
		{
			$course = $this->course->find($id);
			$course->update($input);

			return Redirect::route('courses.show', $id);
		}

		return Redirect::route('courses.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->course->find($id)->delete();

		return Redirect::route('sections.index');
	}

}
