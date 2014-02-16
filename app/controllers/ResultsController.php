<?php

class ResultsController extends BaseController {

	/**
	 * Result Repository
	 *
	 * @var Result
	 */
	protected $result;

	public function __construct(Result $result)
	{
		$this->result = $result;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$results = $this->result->all();

		$title = 'Résultats de compétitions';

		return View::make('results.index', compact('results', 'title'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$title = 'Ajouter un résultat';

		return View::make('results.create', compact('title'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Result::$rules);

		if ($validation->passes())
		{
			$this->result->create($input);

			return Redirect::route('results.index');
		}

		return Redirect::route('results.create')
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
		$result = $this->result->find($id);

		$title = 'modifier résultat';

		if (is_null($result))
		{
			return Redirect::route('results.index');
		}

		return View::make('results.edit', compact('result', 'title'));
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
		$validation = Validator::make($input, Result::$rules);

		if ($validation->passes())
		{
			$result = $this->result->find($id);
			$result->update($input);

			return Redirect::route('results.index', $id);
		}

		return Redirect::route('results.edit', $id)
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
		$this->result->find($id)->delete();

		return Redirect::route('results.index');
	}

}
