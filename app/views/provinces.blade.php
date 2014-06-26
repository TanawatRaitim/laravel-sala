@extends('template.main')

@section('title')รายชื่อจังหวัด@stop

@section('content')

	<div class="row">
		<div class="col-md-6">
			<p>
				<a href="{{ URL::route('province-create-get') }}" class="btn btn-primary">create new province</a>
			</p>
			
			<p>
				{{ $provinces->links() }}
			</p>
		
		
			<table class="table table-bordered table-condensed">
			@foreach($provinces as $province)
				<tr>
					<td><a href="{{ URL::route('show-province', $province->id) }}">{{ $province->code }}</a></td><td><a href="http://th.wikipedia.org/wiki/จังหวัด{{ $province->name }}" target="_blank">{{ $province->name }}</a></td>
				</tr>
				<!-- <iframe src="http://th.wikipedia.org/wiki/จังหวัด{{ $province->name }}" frameborder="0"></iframe> -->
			@endforeach
			</table>
			
				<p>
					getCurrentPage = {{ $provinces->getCurrentPage() }}
				</p>
				<p>
					getLastPage = {{ $provinces->getLastPage() }}
				</p>
				<p>
					getPerPage = {{ $provinces->getPerPage() }}
				</p>
				<p>
					getTotal = {{ $provinces->getTotal() }}
				</p>
				<p>
					getFrom = {{ $provinces->getFrom() }}
				</p>
				<p>
					getTo = {{ $provinces->getTo() }}
				</p>
				<p>
					count = {{ $provinces->count() }}
				</p>
				
				{{ $provinces->links() }}
				
				
			</div>

			
				
		</div>

@stop
