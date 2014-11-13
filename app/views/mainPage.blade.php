@extends('Templates.Outside')

@section('head')
@include('Topbar.Topbar')
@endsection


@section('body')

<!-- SIDEBAR START -->
@include('Sidebars.Sidebar-Mainpage.Sidebar')
<!-- SIDEBAR END -->

<!-- CONTAINER MAINPAGE START -->
@include('Container.Container-Mainpage.MainPage')
<!-- CONTAINER MAINPAGE END -->
@endsection