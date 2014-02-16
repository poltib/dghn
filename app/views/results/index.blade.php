@extends('layouts.slider')

@section('main')

<h2>Liste des résultats</h2>

<p>{{ link_to_route('results.create', 'Add new result') }}</p>

@if ($results->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Date</th>
				<th>Result</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($results as $result)
				<tr>
					<td>{{{ $result->name }}}</td>
					<td>{{{ $result->date }}}</td>
					<td>{{{ $result->result }}}</td>
                    <td>{{ link_to_route('results.edit', 'Edit', array($result->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('results.destroy', $result->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no results
@endif

@stop
