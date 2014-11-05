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
	{{ Form::label('', 'Application Form', array('class'=>'label-style-header font-style-segoe')) }}
</div>
@endsection

@section('body')
<div class="large-12 columns">
	<div class="row">
		<div class="large-12 columns">
			<div class="row">
				<h1>Personal Information</h1>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
	<script type="text/javascript">
		$('#dp1').fdatepicker({
				format: 'MM dd, yyyy',
			});
	</script>
@endsection