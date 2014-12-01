



<div class="large-10 columns large-centered">
	<div class="panel radius panel-body">
		<div class="panel panel-header cus-pan-hd-3 radius">
			<label class="size-22 laravel-fnt large-10 label-mg-left label-ln-ht-1"># Personal Information</label>
		</div>
		<div class="panel-body">

			<div class="row">
				<div class="large-4 columns">
					<label><b>LASTNAME</b></label>
					{{ Form::text('lastname', $applicant_info->lastname, array('class'=>'error text-center radius', 'placeholder'=>'Enter your Lastname')) }}
					@if ($errors->has('lastname')) <small class="error">{{ $errors->first('lastname') }}</small> @endif
				</div>

				<div class="large-4 columns">
					<label><b>FIRSTNAME</b></label>
					{{ Form::text('firstname', $applicant_info->firstname, array('class'=>'error text-center radius', 'placeholder'=>'Enter your Firstname')) }}
					@if ($errors->has('firstname')) <small class="error">{{ $errors->first('firstname') }}</small> @endif
				</div>

				<div class="large-4 columns">
					<label><b>MIDDLE <i>(NAME / INITIAL)</i></b></label>
					{{ Form::text('middle', $applicant_info->middle, array('class'=>'error text-center radius', 'placeholder'=>'Enter your Middle (Name/Initial)')) }}
					@if ($errors->has('middle')) <small class="error">{{ $errors->first('middle') }}</small> @endif
				</div>
			</div>

			<br>

			<div class="row">
				<div class="large-4 columns">
					<label>Nick name <i class="size-12">(optional)</i></label>
					{{ Form::text('nickname', $applicant_info->nickname, array('class'=>'text-center radius', 'placeholder'=>'Enter your Nickname')) }}
				</div>

				<div class="large-4 columns">
					<label>Home Tel. <i class="size-12">(optional)</i></label>
					{{ Form::text('hometel', $applicant_info->hometel, array('class'=>'error text-center radius', 'placeholder'=>'Enter your Telephone No#')) }}
					@if ($errors->has('hometel')) <small class="error">{{ $errors->first('hometel') }}</small> @endif
				</div>

				<div class="large-4 columns">
					<label>Mobile Tel.</label>
					{{ Form::text('mobiletel', $applicant_info->mobiletel, array('class'=>'error text-center radius', 'placeholder'=>'Enter your Mobile No#')) }}
					@if ($errors->has('mobiletel')) <small class="error">{{ $errors->first('mobiletel') }}</small> @endif
				</div>
			</div>

			<br>

			<div class="row">
				<div class="large-12 columns">
					<label>Address</label>
					{{ Form::text('address', $applicant_info->address, array('class'=>'error text-center radius', 'placeholder'=>'Enter your Address')) }}
					@if ($errors->has('address')) <small class="error">{{ $errors->first('address') }}</small> @endif
				</div>
			</div>

			<br>

			<div class="row">
				<div class="large-4 columns">
					<label>Religion</label>
					{{ Form::text('religion', $applicant_info->religion, array('class'=>'text-center radius', 'placeholder'=>'Enter your Religion')) }}
				</div>
				<div class="large-4 columns">
					<label>Gender</label>
					{{ Form::Select('gender', array('Male'=>'Male', 'Female'=>'Female'), $applicant_info->gender, array('class' => 'lHeight-1 label-black')) }}
				</div>
				<div class="large-4 columns">
					<label>Civil Status</label>
					{{ Form::Select('civilstatus', array('Single'=>'Single', 'Married'=>'Married', 'Separated'=>'Separated', 'Widowed'=>'Widowed'), '', array('class' => 'lHeight-1 label-black error text-center radius', 'placeholder'=>'Enter your Civil Status')) }}
					@if ($errors->has('civilstatus')) <small class="error">{{ $errors->first('civilstatus') }}</small> @endif
				</div>
			</div>

			<br>

			<div class="row">
				<div class="large-4 columns">
					<label>
						E-mail
						{{ Form::email('email', $applicant_info->email, array('class'=>'error text-center radius', 'placeholder'=>'Enter your E-mail Address')) }}
						@if ($errors->has('email')) <small class="error">{{ $errors->first('email') }}</small> @endif
					</label>
				</div>
				<div class="large-4 columns">
					<label>Date of Birth <i class="size-12">(format: 08/20/1900)</i></label>
					<input class="drp-element error text-center radius" placeholder="Enter your Date of Birth" type="text" id="dp1" name="dateofbirth" onchange="getAge()" value="{{ $applicant_info->dateofbirth }}" />
					@if ($errors->has('dateofbirth')) <small class="error">{{ $errors->first('dateofbirth') }}</small> @endif
				</div>
				<div class="large-2 columns left">
					<label>Age</label>
					{{ Form::text('age', $applicant_info->age, array('id'=>'age','class'=>'text-center radius', 'readonly', 'onchange'=>'javascript:checkAge()')) }}
				</div>
			</div>

			<br>

			<div class="row">
				<div class="large-12 columns">
					<label>Place of Birth</label>
						{{ Form::text('placeofbirth', $applicant_info->placeofbirth, array('class'=>'error text-center radius', 'placeholder'=>'Enter your Place of Birth')) }}
						@if ($errors->has('placeofbirth')) <small class="error">{{ $errors->first('placeofbirth') }}</small> @endif
				</div>
			</div>

			<br>

			<div class="row">
				<div class="large-6 columns">
					<label>SSS No#</label>
					{{ Form::text('sss', $applicant_info->sss, array('class'=>'error text-center radius', 'placeholder'=>'SSS #', 'id'=>'sss')) }}
					@if ($errors->has('sss')) <small class="error">{{ $errors->first('sss') }}</small> @endif
				</div>
				<div class="large-6 columns">
					<label>TIN #</label>
					{{ Form::text('tin', $applicant_info->tin, array('class'=>'error text-center radius', 'placeholder'=>'TIN #', 'id'=>'tin')) }}
					@if ($errors->has('tin')) <small class="error">{{ $errors->first('tin') }}</small> @endif
				</div>
			</div>

			<br>

		</div>

	</div>
</div>