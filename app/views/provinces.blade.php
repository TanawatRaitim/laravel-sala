@extends('template.main')

@section('title')รายชื่อจังหวัด@stop

@section('content')

	{{ $provinces->count(); }}

	<ul>
	@foreach($provinces as $province)
		<li><a href="{{ URL::route('show-province', $province->id) }}">{{ $province->code }}</a> - <a href="http://th.wikipedia.org/wiki/จังหวัด{{ $province->name }}" target="_blank">{{ $province->name }}</a></li>
		<!-- <iframe src="http://th.wikipedia.org/wiki/จังหวัด{{ $province->name }}" frameborder="0"></iframe> -->
	@endforeach
	</ul>
@stop
