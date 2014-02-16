<?php

class AnnouncesController extends BaseController {

	/**
	 * Announce Repository
	 *
	 * @var Announce
	 */
	protected $announce;

	public function __construct(Announce $announce)
	{
		$this->announce = $announce;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$announces = $this->announce->all();

		$title = 'Toutes les annonces';

		return View::make('announces.index', compact('announces', 'title'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$title = 'ajouter une annonce';

		return View::make('announces.create', compact('title'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Announce::$rules);

		if ($validation->passes())
		{
			$this->announce->create($input);

			return Redirect::route('sections.index');
		}

		return Redirect::route('announces.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$announce = $this->announce->find($id);

		$title = $announce->name;

		if (is_null($announce))
		{
			return Redirect::route('announces.index');
		}

		return View::make('announces.edit', compact('announce', 'title'));
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
		$validation = Validator::make($input, Announce::$rules);

		if ($validation->passes())
		{
			$announce = $this->announce->find($id);
			$announce->update($input);

			return Redirect::route('sections.index', $id);
		}

		return Redirect::route('announces.edit', $id)
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
		$this->announce->find($id)->delete();

		return Redirect::route('sections.index');
	}

}
