@extends('template.main')

@section('content')

	{{ Form::open() }}
	

		<div id="name">
			<label for="">code</label>
			<input type="text" name="code" id="" />
			{{ $errors->first('code') }}
		</div>
		
		<div id="name">
			<label for="">name</label>
			<input type="text" name="name" id="" />		  
			{{ $errors->first('name') }}
		</div>

		<div id="name">
			<label for="">ภาาค</label>
			{{ Form::select('geo', $geography) }}  
			{{ $errors->first('geo') }}
		</div>
		<input type="submit" value="เพิ่มจังหวัด" />

	{{ Form::close() }}

@stop