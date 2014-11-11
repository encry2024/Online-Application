@extends('Templates.Outside')

@section('head')
<div class="large-5 columns">
	<div class="row">
		<div class="large-8 columns img-margin">
			{{HTML::image('packages/imgs/nsi-background.png')}}
		</div>
	</div>
</div>
<div class="large-12 columns backcolor">
	{{ Form::label('', 'Application Form', array('class'=>'label-style-header font-style-segoe right')) }}
</div>
@endsection

@section('setScript')
	onLoad="defaultValues()"
@endsection

@section('body')
	{{ Form::open(array('url'=>'register')) }}

	<!-- ERROR CONTAINER START -->
	@include('Container.errorContainer')
	<!-- ERROR CONTAINER END -->

	<!-- BASIC CONTAINER START -->
	@include('Container.BasicDetails')
	<!-- BASIC CONTAINER END -->

	<!-- PERSONAL CONTAINER START -->
	@include('Container.PersonalInformation')
	<!-- PERSONAL CONTAINER END -->

	<!-- EDUCATION CONTAINER START -->
	@include('Container.Education')
	<!-- EDUCATION CONTAINER END -->

	<!-- FAMILY CONTAINER START -->
	@include('Container.Family')
	<!-- FAMILY CONTAINER END -->

	<!-- EMPLOYMENT CONTAINER START -->
	@include('Container.EmploymentHistory')
	<!-- EMPLOYMENT CONTAINER END -->

	<!-- INTERVIEW CONTAINER START -->
	@include('Container.Interview')
	<!-- INTERVIEW CONTAINER END -->

	
	<div class="large-12 columns">
		<div class="row">
		<br><br><br>
			{{ Form::submit('Register', ['class'=>'large-2 success button radius right', 'id'=>'register']) }}
		</div>
	</div>

	{{ Form::close() }}
@endsection