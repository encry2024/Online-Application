



<h1 class="size-24 text-center">CHARACTER REFERENCE</h1>
<div class="row">
	<div class="large-4 columns">
		<label>Name</label>
		{{ Form::text('nme1', $applicant_info->nme1, ['class'=>'text-center radius', 'placeholder'=>'Name (1)']) }}
		{{ Form::text('nme2', $applicant_info->nme2, ['class'=>'text-center radius', 'placeholder'=>'Name (2)']) }}
		{{ Form::text('nme3', $applicant_info->nme3, ['class'=>'text-center radius', 'placeholder'=>'Name (3)']) }}
	</div>
	<div class="large-4 columns">
		<label>Relationship</label>
		{{ Form::text('rel1', $applicant_info->rel1, ['class'=>'text-center radius', 'placeholder'=>'Relationship (1)']) }}
		{{ Form::text('rel2', $applicant_info->rel2, ['class'=>'text-center radius', 'placeholder'=>'Relationship (2)']) }}
		{{ Form::text('rel3', $applicant_info->rel3, ['class'=>'text-center radius', 'placeholder'=>'Relationship (3)']) }}
	</div>
	<div class="large-4 columns">
		<label>Address / Contact Number</label>
		{{ Form::text('addcon1', $applicant_info->addcon1, ['class'=>'text-center radius', 'placeholder'=>'Address / Contact Number  (1)']) }}
		{{ Form::text('addcon2', $applicant_info->addcon2, ['class'=>'text-center radius', 'placeholder'=>'Address / Contact Number  (2)']) }}
		{{ Form::text('addcon3', $applicant_info->addcon3, ['class'=>'text-center radius', 'placeholder'=>'Address / Contact Number  (3)']) }}
	</div>
</div>

@if ($errors->has('nme1'))
	<small class="error">{{ $errors->first('nme1') }}</small>
@endif

@if ($errors->has('nme2'))
	<small class="error">{{ $errors->first('nme2') }}</small>
@endif

@if ($errors->has('nme3'))
	<small class="error">{{ $errors->first('nme3') }}</small>
@endif

@if ($errors->has('rel1'))
	<small class="error">{{ $errors->first('rel1') }}</small>
@endif

@if ($errors->has('rel2'))
	<small class="error">{{ $errors->first('rel2') }}</small>
@endif

@if ($errors->has('rel3'))
	<small class="error">{{ $errors->first('rel3') }}</small>
@endif