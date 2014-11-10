



<h1 class="size-24 text-center">HIGH SCHOOL</h1>
<div class="row">
	<div class="large-6 columns">
		<label>School</label>
		{{ Form::text('hsname', '', ['class'=>'error text-center radius', 'placeholder'=>'Enter your School Name']) }}
		@if ($errors->has('hsname')) <small class="error">{{ $errors->first('hsname') }}</small> @endif
	</div>

	<div class="large-6 columns">
		<label>Degree / Concentration / Major</label>
		{{ Form::text('hseductitle', '', ['class'=>'error text-center radius', 'placeholder'=>'Enter your Education Title']) }}
		@if ($errors->has('hseductitle')) <small class="error">{{ $errors->first('hseductitle') }}</small> @endif
	</div>
</div>

<div class="row">
	<div class="large-4 columns">
		<label>Address</label>
		{{ Form::text('hsschooladdress', '', ['class'=>'error text-center radius', 'placeholder'=>'Enter your School Address']) }}
		@if ($errors->has('hsschooladdress')) <small class="error">{{ $errors->first('hsschooladdress') }}</small> @endif
	</div>
	
	<div class="large-4 columns">
		<label>Date Attended</label>
		{{ Form::text('hsdateattended', '', ['class'=>'error text-center radius', 'placeholder'=>'Date you Attend', 'id'=>'dp7']) }}
		@if ($errors->has('hsdateattended')) <small class="error">{{ $errors->first('hsdateattended') }}</small> @endif
	</div>
	
	<div class="large-4 columns">
		<label>Mo. & Yr. Of Graduation</label>
		{{ Form::text('hsgraduate', '', ['class'=>'error text-center radius', 'placeholder'=>'Date you Graduated', 'id'=>'dp8']) }}
		@if ($errors->has('hsgraduate')) <small class="error">{{ $errors->first('hsgraduate') }}</small> @endif
	</div>
</div>