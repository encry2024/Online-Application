@extends('Template.Front')

@section('head')
<h1 class="label-white text-center">Admin Register</h1>
@endsection

@section('body')
@include('Fields.Admin.adminregister')
@endsection


@section('style')
<style type="text/css">
	body {
		background: linear-gradient(to bottom, #f4726d, #f0443e);
	}
</style>
@endsection