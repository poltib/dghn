<?php

class SectionsController extends BaseController {

	/**
	 * Section Repository
	 *
	 * @var Section
	 */
	protected $section;

	public function __construct(Section $section)
	{
		$this->section = $section;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sections = $this->section->all();

		$title = 'Accueil';

		return View::make('sections.index', compact('sections', 'title'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$title = 'Ajouter une section';

		return View::make('sections.create', compact('title'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Section::$rules);

		if ($validation->passes())
		{
			$this->section->create($input);

			$title = 'Accueil';

			return Redirect::route('sections.index', compact('title'));
		}

		return Redirect::route('sections.create')
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
		$section = $this->section->findOrFail($id);

		$title = $section->name;

		return View::make('sections.show', compact('section', 'title'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$section = $this->section->find($id);

		$title = $section->name;

		if (is_null($section))
		{
			return Redirect::route('sections.index');
		}

		return View::make('sections.edit', compact('section', 'title'));
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
		$validation = Validator::make($input, Section::$rules);

		if ($validation->passes())
		{
			$section = $this->section->find($id);
			$section->update($input);

			return Redirect::route('sections.index');
		}

		return Redirect::route('sections.edit', $id)
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
		$this->section->find($id)->delete();

		return Redirect::route('sections.index');
	}

}
