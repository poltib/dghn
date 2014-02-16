@extends('layouts.slider')

@section('main')

<h2>{{{$announce->nom}}}</h2>

<p>{{ link_to_route('announces.index', 'Return to all announces') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Nom</th>
				<th>Annonce</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $announce->nom }}}</td>
					<td>{{{ $announce->annonce }}}</td>
                    <td>{{ link_to_route('announces.edit', 'Edit', array($announce->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('announces.destroy', $announce->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
