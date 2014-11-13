



<div class="row">
	<div class="large-4 columns">
		<label>Lastname</label>
		{{ Form::text('lastname', '', array('class'=>'error text-center radius', 'placeholder'=>'Enter your Lastname')) }}
		@if ($errors->has('lastname')) <small class="error">{{ $errors->first('lastname') }}</small> @endif
	</div>

	<div class="large-4 columns">
		<label>Firstname</label>
		{{ Form::text('firstname', '', array('class'=>'error text-center radius', 'placeholder'=>'Enter your Firstname')) }}
		@if ($errors->has('firstname')) <small class="error">{{ $errors->first('firstname') }}</small> @endif
	</div>

	<div class="large-4 columns">
		<label>Middle (Name/Initial)</label>
		{{ Form::text('middle', '', array('class'=>'error text-center radius', 'placeholder'=>'Enter your Middle (Name/Initial)')) }}
		@if ($errors->has('middle')) <small class="error">{{ $errors->first('middle') }}</small> @endif
	</div>
</div>
<!--  -->
<div class="row">
	<div class="large-4 columns">
		<label>Nick name<i class="size-12">(optional)</i></label>
		{{ Form::text('nickname', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Nickname')) }}
	</div>

	<div class="large-4 columns">
		<label>Home Tel. <i class="size-12">(optional)</i></label>
		{{ Form::text('hometel', '', array('class'=>'error text-center radius', 'placeholder'=>'Enter your Telephone No#')) }}
		@if ($errors->has('hometel')) <small class="error">{{ $errors->first('hometel') }}</small> @endif
	</div>

	<div class="large-4 columns">
		<label>Mobile Tel.</label>
		{{ Form::text('mobiletel', '', array('class'=>'error text-center radius', 'placeholder'=>'Enter your Mobile No#')) }}
		@if ($errors->has('mobiletel')) <small class="error">{{ $errors->first('mobiletel') }}</small> @endif
	</div>
</div>
<!--  -->
<div class="row">
	<div class="large-12 columns">
		<label>Address</label>
		{{ Form::text('address', '', array('class'=>'error text-center radius', 'placeholder'=>'Enter your Address')) }}
		@if ($errors->has('address')) <small class="error">{{ $errors->first('address') }}</small> @endif
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
		{{ Form::text('civilstatus', '', array('class'=>'error text-center radius', 'placeholder'=>'Enter your Civil Status')) }}
		@if ($errors->has('civilstatus')) <small class="error">{{ $errors->first('civilstatus') }}</small> @endif
	</div>
</div>
<!--  -->
<div class="row">
	<div class="large-4 columns">
		<label>
			E-mail
			{{ Form::email('email', '', array('class'=>'error text-center radius', 'placeholder'=>'Enter your E-mail Address')) }}
			@if ($errors->has('email')) <small class="error">{{ $errors->first('email') }}</small> @endif
		</label>
	</div>
	<div class="large-4 columns">
		<label>Date of Birth <i class="size-12">(format: 08/20/1900)</i></label>
		<input class="drp-element error text-center radius" placeholder="Enter your Date of Birth" type="text" id="dp1" name="dateofbirth" onchange="getAge()"/>
		@if ($errors->has('dateofbirth')) <small class="error">{{ $errors->first('dateofbirth') }}</small> @endif
	</div>
	<div class="large-2 columns left">
		<label>Age</label>
		{{ Form::text('age', '', array('id'=>'age','class'=>'text-center radius', 'readonly', 'onchange'=>'javascript:checkAge()')) }}
	</div>
</div>
<!--  -->
<div class="row">
	<div class="large-12 columns">
		<label>Place of Birth</label>
			{{ Form::text('placeofbirth', '', array('class'=>'error text-center radius', 'placeholder'=>'Enter your Place of Birth')) }}
			@if ($errors->has('placeofbirth')) <small class="error">{{ $errors->first('placeofbirth') }}</small> @endif
	</div>
</div>
<!--  -->
<div class="row">
	<div class="large-6 columns">
		<label>SSS No#</label>
		{{ Form::text('sss', '', array('class'=>'error text-center radius', 'placeholder'=>'SSS #')) }}
		@if ($errors->has('sss')) <small class="error">{{ $errors->first('sss') }}</small> @endif
	</div>
	<div class="large-6 columns">
		<label>TIN #</label>
		{{ Form::text('tin', '', array('class'=>'error text-center radius', 'placeholder'=>'TIN #')) }}
		@if ($errors->has('tin')) <small class="error">{{ $errors->first('tin') }}</small> @endif
	</div>
</div>