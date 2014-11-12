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
	{{ Form::label('', 'Confirm your Information', array('class'=>'label-style-header font-style-segoe right')) }}
</div>
@endsection

@section('body')
	{{ Form::open(array('url'=>'Applicant/'.$applicant_info->id.'/Update')) }}
	<!-- ERROR CONTAINER START -->
	@include('Container.Container-Confirm-Page.errorContainer')
	<!-- ERROR CONTAINER.Container-Confirm-Page END -->
	
	<!-- BASIC CONTAINER.Container-Confirm-Page START -->
	@include('Container.Container-Confirm-Page.BasicDetails')
	<!-- BASIC CONTAINER.Container-Confirm-Page END -->

	<!-- PERSONAL CONTAINER.Container-Confirm-Page START -->
	@include('Container.Container-Confirm-Page.PersonalInformation')
	<!-- PERSONAL CONTAINER.Container-Confirm-Page END -->

	<!-- EDUCATION CONTAINER.Container-Confirm-Page START -->
	@include('Container.Container-Confirm-Page.Education')
	<!-- EDUCATION CONTAINER.Container-Confirm-Page END -->

	<!-- FAMILY CONTAINER.Container-Confirm-Page START -->
	@include('Container.Container-Confirm-Page.Family')
	<!-- FAMILY CONTAINER.Container-Confirm-Page END -->

	<!-- EMPLOYMENT CONTAINER.Container-Confirm-Page START -->
	@include('Container.Container-Confirm-Page.EmploymentHistory')
	<!-- EMPLOYMENT CONTAINER.Container-Confirm-Page END -->

	<!-- INTERVIEW CONTAINER.Container-Confirm-Page START -->
	@include('Container.Container-Confirm-Page.Interview')
	<!-- INTERVIEW CONTAINER END -->
	
	<div class="large-12 columns">
		<div class="row">
		<br><br><br>
			{{ Form::submit('Register', ['class'=>'large-2 success button radius right', 'id'=>'register']) }}
		</div>
	</div>

	{{ Form::close() }}
@endsection