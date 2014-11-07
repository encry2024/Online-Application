


<div class="row">
	<div class="large-4 columns">
		<label>Lastname</label>
		{{ Form::text('lastname', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Lastname')) }}
	</div>

	<div class="large-4 columns">
		<label>Firstname</label>
		{{ Form::text('firstname', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Firstname')) }}
	</div>

	<div class="large-4 columns">
		<label>Middle (Name/Initial)</label>
		{{ Form::text('middle', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Middle (Name/Initial)')) }}
	</div>
</div>
<!--  -->
<div class="row">
	<div class="large-4 columns">
		<label>Nick name</label>
		{{ Form::text('nickname', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Nickname')) }}
	</div>

	<div class="large-4 columns">
		<label>Home Tel.</label>
		{{ Form::text('hometel', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Telephone No#')) }}
	</div>

	<div class="large-4 columns">
		<label>Mobile Tel.</label>
		{{ Form::text('mobiletel', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Mobile No#')) }}
	</div>
</div>
<!--  -->
<div class="row">
	<div class="large-12 columns">
		<label>Address</label>
		{{ Form::text('address', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Address')) }}
	</div>
</div>
<!--  -->
<div class="row">
	<div class="large-4 columns">
		<label>Religion</label>
		{{ Form::text('religion', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Religion')) }}
	</div>
	<div class="large-4 columns">
		<label>Gender</label>
		{{ Form::Select('gender', array('Male'=>'Male', 'Female'=>'Female'), '', array('class' => 'lHeight-1')) }}
	</div>
	<div class="large-4 columns">
		<label>Civil Status</label>
		{{ Form::text('civilstatus', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Civil Status')) }}
	</div>
</div>
<!--  -->
<div class="row">
	<div class="large-4 columns">
		<label>
			E-mail
			{{ Form::email('email', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your E-mail Address')) }}
		</label>
	</div>
	<div class="large-4 columns">
		<label>Date of Birth <i class="size-12">(format: 08/20/1900)</i></label>
		<input class="text-center radius" placeholder="Enter your Date of Birth" type="text" id="dp1" name="dateofbirth" onchange="getAge()"/>
	</div>
	<div class="large-4 columns">
		<label>Age</label>
		{{ Form::text('age', '', array('id'=>'age','class'=>'text-center radius', 'placeholder'=>'Enter your Date of Birth', 'readonly', 'onchange'=>'javascript:checkAge()')) }}
	</div>
</div>
<!--  -->
<div class="row">
	<div class="large-12 columns">
		<label>Place of Birth
			{{ Form::text('placeofbirth', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Place of Birth')) }}
		</label>
	</div>
</div>
<!--  -->
<div class="row">
	<div class="large-6 columns">
		<label>SSS No#
		{{ Form::text('sss', '', array('class'=>'text-center radius', 'placeholder'=>'SSS #')) }}
		</label>
	</div>
	<div class="large-6 columns">
		<label>TIN #
		{{ Form::text('tin', '', array('class'=>'text-center radius', 'placeholder'=>'TIN #')) }}
		</label>
	</div>
</div>