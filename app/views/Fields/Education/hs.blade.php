



<h1 class="size-24 text-center">HIGH SCHOOL</h1>
<div class="row">
	<div class="large-6 columns">
		<label>School</label>
		{{ Form::text('hsname', '', ['class'=>'text-center radius', 'placeholder'=>'Enter your School Name']) }}
	</div>

	<div class="large-6 columns">
		<label>Degree / Concentration / Major</label>
		{{ Form::text('hseductitle', '', ['class'=>'text-center radius', 'placeholder'=>'Enter your Education Title']) }}
	</div>
</div>

<div class="row">
	<div class="large-4 columns">
		<label>Address</label>
		{{ Form::text('hsschooladdress', '', ['class'=>'text-center radius', 'placeholder'=>'Enter your School Address']) }}
	</div>
	<div class="large-4 columns">
		<label>Date Attended</label>
		{{ Form::text('hsdateattended', '', ['class'=>'text-center radius', 'placeholder'=>'Date you Attend', 'id'=>'dp7']) }}
	</div>
	<div class="large-4 columns">
		<label>Mo. & Yr. Of Graduation</label>
		{{ Form::text('hsgraduate', '', ['class'=>'text-center radius', 'placeholder'=>'Date you Graduated', 'id'=>'dp8']) }}
	</div>
</div>