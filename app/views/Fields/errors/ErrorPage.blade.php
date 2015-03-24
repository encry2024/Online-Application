@extends('Template.Front')

@section('head')
@endsection

@section('body')
<div class="large-8 columns large-centered">
	<br><br>
	<div class="panel error-Panel">
	<label class="error-Message size-38">Oops! Something went wrong...</label>
	<br><br>
	<label class="error-Message size-20"> The cause of this error is:</label>
	<br><br><br>
	<label class="error-Message size-16">
		* The page you are trying to view has already been processed. 
		<br><br>
		* You are trying to view someone else's Information.
	</label>
	</div>
</div>
@endsection


@section('style')

@endsection