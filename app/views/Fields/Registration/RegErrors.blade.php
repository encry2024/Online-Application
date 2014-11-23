


@if ($errors->has())
<br>
<div class="large-10 columns large-centered">	
	<div class="panel radius panel-body">
		<div class="panel panel-header cus-pan-hd-3 radius">
			<label class="size-22 error-Message large-10 label-mg-left label-ln-ht-1"><i class="fi-alert "></i> Error Summary</label>
		</div>
		<div class="panel-body">
			
			<div class="row">
				@foreach ($errors->all() as $error)
					{{ Form::label('', ' ' . $error, ['class'=>'error-Message']) }}
				@endforeach
			</div>
			
			<br>
		</div>
	</div>
</div>
<br>
@endif