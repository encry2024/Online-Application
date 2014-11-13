



<h1 class="size-24 text-center">COLLEGE / UNIVERSITY
<br>
<i class="size-12">(optional)</i></h1>
<div class="row">
	<div class="large-6 columns">
		<label>School</label>
		{{ Form::text('collegename', '', ['class'=>'error text-center radius', 'placeholder'=>'Enter your School Name']) }}
		@if ($errors->has('collegename')) <small class="error">{{ $errors->first('collegename') }}</small> @endif
	</div>

	<div class="large-6 columns">
		<label>Degree / Concentration / Major</label>
		{{ Form::text('collegeeductitle', '', ['class'=>'error text-center radius', 'placeholder'=>'Enter your Education Title']) }}
		@if ($errors->has('collegeeductitle')) <small class="error">{{ $errors->first('collegeeductitle') }}</small> @endif
	</div>
</div>

<div class="row">
	<div class="large-4 columns">
		<label>Address</label>
		{{ Form::text('collegeschooladdress', '', ['class'=>'error text-center radius', 'placeholder'=>'Enter your School Address']) }}
		@if ($errors->has('collegeschooladdress')) <small class="error">{{ $errors->first('collegeschooladdress') }}</small> @endif
	</div>

	<div class="large-4 columns">
		<label>Date Attended</label>
		{{ Form::text('collegedateattended', '', ['class'=>'drp-element error text-center radius', 'placeholder'=>'Date you Attend', 'id'=>'dp5']) }}
		@if ($errors->has('collegedateattended')) <small class="error">{{ $errors->first('collegedateattended') }}</small> @endif
	</div>
	
	<div class="large-4 columns">
		<label>Mo. & Yr. Of Graduation</label>
		{{ Form::text('collegegraduate', '', ['class'=>'drp-element error text-center radius', 'placeholder'=>'Date you Graduated', 'id'=>'dp6']) }}
		@if ($errors->has('collegegraduate')) <small class="error">{{ $errors->first('collegegraduate') }}</small> @endif
	</div>
</div>