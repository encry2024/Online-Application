@extends('Templates.Outside')

@section('body')
<br><br><br>
<div class="row">
	<div class="large-12 columns large-centered">
		<div data-alert class="panel error-Panel radius">
			{{ Form::label('', 'Sorry! Something went wrong...', ['class'=>'error-Message size-40 font-style-segoe']) }}
			<br><br>
				{{ Form::label('', 'The page you are trying to access requires a key to access.', ['class'=>'error-Message']) }}
			<br>
			<ul>
				<li><label class="error-Message">You didn't provide any key to access the page.</label></li>
				<li><label class="error-Message">You provided an invalid key.</label></li>
			</ul>
		</div>
	</div>
</div>
@endsection