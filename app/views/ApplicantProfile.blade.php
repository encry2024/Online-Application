@extends('Templates.Outside')

@section('head')
@include('Topbar.Topbar')
@endsection


@section('body')

<!-- APPLICANT INFORMATION START -->
@include('Container.Container-Mainpage.Container-Applicant-Information.applicantInformation')
<!-- APPLICANT INFORMATION END -->

@endsection
