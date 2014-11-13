@extends('Templates.Outside')

@section('head')
<div class="large-5 columns">
	<div class="row">
		<div class="large-8 columns img-margin">
			{{HTML::image('packages/imgs/nsi-background.png')}}
		</div>
	</div>
</div>
@endsection

@section('body')

<!-- SEPARATOR START -->
<br><br><br>
<h1></h1>
<!-- SEPARATOR END -->


<!-- LOGIN CONTAINER START -->
@include('Container.Container-Login-Page.Login')
<!-- LOGIN CONTAINER END -->

@endsection