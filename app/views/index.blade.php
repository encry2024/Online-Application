@extends('Templates.Outside')

@section('head')
<div class="large-12 columns">
	<div class="row">
		<div class="large-5 columns large-centered">
			{{HTML::image('packages/imgs/nsi-background.png')}}
		</div>
	</div>
</div>

@endsection

@section('body')
<div class="large-12 columns">
<h1 class="h1-border-2"></h1>
	<div class="row">
		<div class="large-12 columns">
			<div class="row">
				<div class="large-10 columns large-centered">
				<br><br><br><br><br><br><br>
					{{ link_to('/registration', 'Register', array('class'=>'alert radius button expand')) }}
				</div>
			</div>
		</div>
	</div>
</div>


@endsection