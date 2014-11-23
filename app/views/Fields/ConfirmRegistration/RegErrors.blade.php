


@if ($errors->has())
<br>
<div class="large-10 columns large-centered">	
	<div class="panel radius panel-body">
		<div class="panel panel-header cus-pan-hd-3 radius">
			<label class="size-22 error-Message large-10 label-mg-left label-ln-ht-1">Error Summary - Total of {{ count($errors->all()) }} errors</label>
		</div>
		<div class="panel-body">
			
			<div class="row">
				@foreach ($errors->all() as $error)
					<i class="">{{ Form::label('', ' ' . $error, ['class'=>'error-Message fi-alert']) }}</i>
				@endforeach
			</div>
			
			<br>
		</div>
	</div>
</div>
<br>
@endif