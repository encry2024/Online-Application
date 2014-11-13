@extends('Templates.Outside')



@section('body')
<br><br><br>
<div class="row">
	<div class="large-12 columns large-centered">
		<div data-alert class="panel error-Panel radius">
			{{ Form::label('', 'Sorry! Something went wrong...', ['class'=>'error-Message size-40 font-style-segoe']) }}
			<br><br>
			<label class="error-Message size-18 font-style-segoe">The page you are trying to access has been already processed. You can not open it again.</label>			
			<br><br><br>
			<label class="size-18 font-style-segoe">Please redirect to one of the following links:</label>
			<br>
			<ul>
				<li>{{ link_to('registration', 'Registration Page') }}</li>
				<li>{{ link_to('/', 'Home Page') }}</li>
			</ul>
		</div>
	</div>
</div>
@endsection