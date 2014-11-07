



<h1 class="size-24 text-center">GRADUATE STUDIES</h1>
<div class="row">
	<div class="large-6 columns">
		<label>School</label>
		{{ Form::text('gradschoolname', '', ['class'=>'text-center radius', 'placeholder'=>'Enter your School Name']) }}
	</div>

	<div class="large-6 columns">
		<label>Degree / Concentration / Major</label>
		{{ Form::text('gradeductitle', '', ['class'=>'text-center radius', 'placeholder'=>'Enter your Education Title']) }}
	</div>
</div>

<div class="row">
	<div class="large-4 columns">
		<label>Address</label>
		{{ Form::text('gradschooladdress', '', ['class'=>'text-center radius', 'placeholder'=>'Enter your School Address']) }}
	</div>
	<div class="large-4 columns">
		<label>Date Attended</label>
		{{ Form::text('graddateattended', '', ['class'=>'text-center radius', 'placeholder'=>'Date you Attend', 'id'=>'dp3']) }}
	</div>
	<div class="large-4 columns">
		<label>Mo. & Yr. Of Graduation</label>
		{{ Form::text('gradgraduate_1', '', ['class'=>'text-center radius', 'placeholder'=>'Date you Graduated', 'id'=>'dp4']) }}
	</div>
</div>