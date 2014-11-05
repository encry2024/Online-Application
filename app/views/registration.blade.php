@extends('Templates.Outside')


@section('head')
<div class="large-5 columns">
	<div class="row">
		<div class="large-8 columns img-margin">
			{{HTML::image('packages/imgs/nsi-background.png')}}
		</div>
	</div>
</div>
<div class="large-12 columns backcolor">
	{{ Form::label('', 'Application Form', array('class'=>'label-style-header font-style-segoe right')) }}
</div>
@endsection

@section('body')
<div class="large-12 columns">
	<h1 class="size-24 label-black">Personal Information</h1>
</div>

<div class="large-12 columns">
	<div class="row">

	<br>

	<div class="large-12 columns large-centered">
		<!-- PERSONAL INFORMATION -->
		<div class="row">
			<div class="large-4 columns">
				<label>Lastname
				{{ Form::text('lastname', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Lastname')) }}
				</label>
			</div>
			<div class="large-4 columns">
				<label>Firstname
				{{ Form::text('firstname', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Firstname')) }}
				</label>
			</div>
			<div class="large-4 columns">
				<label>Middle (Name/Initial)
				{{ Form::text('middle', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Middle (Name/Initial)')) }}
				</label>
			</div>
		</div>
		
		<div class="row">
			<div class="large-4 columns">
				<label>Nick name
					{{ Form::text('nickname', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Nickname')) }}
				</label>
			</div>
			<div class="large-4 columns">
				<label>Home Tel.
					{{ Form::text('hometel', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Telephone No#')) }}
				</label>
			</div>
			<div class="large-4 columns">
				<label>Mobile Tel.
					{{ Form::text('mobiletel', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Mobile No#')) }}
				</label>
			</div>
		</div>
	
		<div class="row">
			<div class="large-12 columns">
				<label>Address
					{{ Form::text('address', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Address')) }}
				</label>
			</div>
		</div>

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
		
		<div class="row">
			<div class="large-4 columns">
				<label>
					E-mail
					{{ Form::email('email', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your E-mail Address')) }}
				</label>
			</div>
			<div class="large-4 columns">
				<label>Date of Birth</label>
				<input class="text-center radius" placeholder="Enter your Date of Birth" type="text" id="dp1" name="dateofbirth" onBlur="ageCount()"/>
			</div>
			<div class="large-4 columns">
				<label>Age</label>
				{{ Form::text('age', '', array('id'=>'age','class'=>'text-center radius', 'placeholder'=>'Enter your Date of Birth', 'readonly')) }}
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns">
				<label>Place of Birth
					{{ Form::text('placeofbirth', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Place of Birth')) }}
				</label>
			</div>
		</div>

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

		</div>
	</div>
</div>
@endsection

@section('scripts')
	<script type="text/javascript">
		$('#dp1').fdatepicker({
				format: 'dd/mm/yyyy',
			});


		function ageCount() {
			var date1 = new Date();
			var dob = document.getElementById("dp1").value;
			var date2 = new Date(dob);
			var pattern = /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
			//Regex to validate date format (dd/mm/yyyy)       
			if (pattern.test(dob) === isNaN() ) {
				var y1 = date1.getFullYear();
				//getting current year            
				var y2 = date2.getFullYear();
				//getting dob year            
				var age = y1 - y2;
				//calculating age                       
				document.getElementById("age").value = age;
				return true;
			} else {
			alert("Invalid date format. Please Input in (dd/mm/yyyy) format!");
			return false;
		}

}
	</script>
@endsection