@extends('Templates.Outside')



@section('body')
<br><br><br>
<div class="row">
	<div class="large-12 columns large-centered">
		<div data-alert class="panel error-Panel radius">
			{{ Form::label('', 'Sorry! Something went wrong...', ['class'=>'error-Message size-40 font-style-segoe']) }}
			<br><br>
			<label class="error-Message size-18 font-style-segoe">The page you are trying to access is either Unavailable or Under Development.</label>			
			<br><br><br>
			<label class="size-18 font-style-segoe">Click the link below to return to your previous page:</label>
			<br>
			<ul>
				<li>{{ link_to('Mainpage', 'Mainpage') }}</li>
			</ul>
		</div>
	</div>
</div>
@endsection