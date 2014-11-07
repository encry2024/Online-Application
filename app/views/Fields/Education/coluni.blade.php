



<h1 class="size-24 text-center">COLLEGE / UNIVERSITY</h1>
<div class="row">
	<div class="large-6 columns">
		<label>School</label>
		{{ Form::text('collegename', '', ['class'=>'text-center radius', 'placeholder'=>'Enter your School Name']) }}
	</div>

	<div class="large-6 columns">
		<label>Degree / Concentration / Major</label>
		{{ Form::text('collegeeductitle', '', ['class'=>'text-center radius', 'placeholder'=>'Enter your Education Title']) }}
	</div>
</div>

<div class="row">
	<div class="large-4 columns">
		<label>Address</label>
		{{ Form::text('collegeschooladdress', '', ['class'=>'text-center radius', 'placeholder'=>'Enter your School Address']) }}
	</div>
	<div class="large-4 columns">
		<label>Date Attended</label>
		{{ Form::text('collegedateattended', '', ['class'=>'text-center radius', 'placeholder'=>'Date you Attend', 'id'=>'dp5']) }}
	</div>
	<div class="large-4 columns">
		<label>Mo. & Yr. Of Graduation</label>
		{{ Form::text('collegegraduate', '', ['class'=>'text-center radius', 'placeholder'=>'Date you Graduated', 'id'=>'dp6']) }}
	</div>
</div>