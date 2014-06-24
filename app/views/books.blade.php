@extends('template.main')

@section('content')
	<ul>
	@foreach($books as $book)
	
		<li>{{ $book->name }}</li>
	
	@endforeach
	</ul>
@stop
