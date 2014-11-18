@extends('Templates.Outside')

@section('head')
@include('Topbar.Topbar')
@endsection


@section('body')
{{ Form::open(array('url'=>$applicant_info->id.'/Update')) }}
<!-- APPLICANT INFORMATION START -->
@include('Container.Container-Mainpage.Container-Applicant-Information.applicantInformation')
<!-- APPLICANT INFORMATION END -->
{{ Form::close() }}
@endsection