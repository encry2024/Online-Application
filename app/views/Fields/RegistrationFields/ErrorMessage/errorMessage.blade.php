


<br>
@if ($errors->has())
<div class="row">
	<div class="large-12 columns">
		<div data-alert class="panel error-Panel radius">
			{{ Form::label('', 'Error Summary', ['class'=>'text-center error-Message size-18']) }}
			
			<ul>
			
			@foreach ($errors->all() as $error)
				<li>{{ Form::label('', $error, ['class'=>'error-Message']) }}</li>
			@endforeach
			</ul>
		</div>
	</div>
</div>
@endif
