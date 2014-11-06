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

@section('setScript')
	onLoad="defaultValues()"
@endsection

@section('body')
<!-- BASIC DETAILS -->
<div class="large-12 columns">
	<h1 class="size-16 label-black">Basic Details<br>user ID - {{ Form::label('', '', ['id'=>'userid', 'class'=>'label-inblock']) }}</h1>

</div>

<div class="large-12 columns">
	<div class="row">
	
		<div class="large-12 columns large-centered">
			<div class="row">
				<div class="large-3 columns">
					<label>Position Desired</label>
					{{ Form::text('positiondesired_1', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Desired Position')) }}
				</div>

				<div class="large-3 columns">
					<label>Expected Salary</label>
					{{ Form::text('expectedsalary', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Expected Salary')) }}
				</div>

				<div class="large-2 columns">
					<label>Currently Employed?</label>
					{{ Form::checkbox('cemployed[1]', 'yes', null, ['class' => 'text-center text-center']) }} <label class="mTop-07 text-center"> Yes </label>
					{{ Form::checkbox('cemployed[1]', 'No', null, ['class' => 'text-center text-center']) }} <label class="mTop-07 text-center"> No </label>
				</div>

				<div class="large-4 columns">
					<label>Date of Application</label>
					<input class="text-center radius" placeholder="Enter your Date of Birth" type="text" id="applicationdate" name="dateofbirth" readonly />
				</div>
			</div>

			<div class="row">
				<div class="large-3 columns">
					<label>Second Choice</label>
					{{ Form::text('positiondesired_2', '', array('class'=>'text-center radius', 'placeholder'=>'Second choice for Position')) }}
				</div>
			</div>

			<div class="row">
				<div class="large-6 columns">
					<label>Previously Applied Here?</label>
					{{ Form::checkbox('previouslyApp[1]', 'Yes', null, ['id'=>'y_id','class' => 'text-center', 'onclick'=>'enableTbReason()']) }} Yes, <label class="mTop-07 text-center"> {{ Form::text('reason_1', '', ['class'=>'text-center radius', 'placeholder'=>'State the Date', 'id'=>'dp2', 'disabled']) }} </label>
					{{ Form::checkbox('previouslyApp[1]', 'No', null, ['id'=>'n_id', 'class' => 'text-center', 'onclick'=>'disableTbReason()']) }} <label class="mTop-07 text-center">No </label>
				</div>
			</div>

			<div class="row">
				<div class="large-4 columns">
					<label>Notice Period Required</label>
					{{ Form::text('nprequired', '', array('class'=>'text-center radius', 'placeholder'=>'Notice Period Required.')) }}
				</div>

				<div class="large-4 columns">
					<label>Source</label>
					{{ Form::text('source', '', array('class'=>'text-center radius', 'placeholder'=>'Where did you see the Company?')) }}
				</div>

				<div class="large-4 columns">
					<label>Referred By:</label>
					{{ Form::text('source', '', array('class'=>'text-center radius', 'placeholder'=>'Who introduced the company?')) }}
				</div>
			</div>
		</div>

	</div>
</div>

<!-- PERSONAL INFORMATION -->

<div class="large-12 columns">
	<h1 class="size-24 label-black">Personal Information</h1>
</div>

<div class="large-12 columns">
	<div class="row">

	<div class="large-12 columns large-centered">
		<!-- PERSONAL INFORMATION - FIELDS -->
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
		<!--  -->
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
		<!--  -->
		<div class="row">
			<div class="large-12 columns">
				<label>Address
					{{ Form::text('address', '', array('class'=>'text-center radius', 'placeholder'=>'Enter your Address')) }}
				</label>
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
		<!--  -->
		</div>
	</div>
</div>

<!-- EMPLOYMENT INFORMATION -->
<div class="large-12 columns">
	<h1 class="size-24 label-black">Employment Information</h1>
</div>

<div class="large-12 columns">
	<div class="row">

		<div class="large-12 columns large-centered">
			<!--  -->
			<h1 class="size-24 text-center">CURRENT EMPLOYER</h1>
			<div class="row">
				<div class="large-12 columns">
					<label>Have you been dismissed by any of your former employers for any administrative or just cause? If: </label>
					{{ Form::checkbox('state[1]', 'Yes', null, ['id'=>'y_state','class' => 'text-center', 'onclick'=>'enableTbReason_2()']) }} <label class="mTop-07">Yes</label>
					{{ Form::checkbox('state[1]', 'No', null, ['id'=>'n_state', 'class' => 'text-center', 'onclick'=>'disableTbReason_2()']) }} <label class="mTop-07">No </label>
					{{ Form::text('reason_2', '', ['id'=>'reason_2', 'class'=>'radius', 'placeholder'=>'State your details here', 'disabled']) }}
				</div>
			</div>
			<!--  -->
			<div class="row">
				<div class="large-3 columns">
					<label>Current Employer</label>
					{{ Form::text('cemployer', '', ['class'=>'text-center radius', 'placeholder'=>'Name of your Current Employer']) }}
				</div>
				<div class="large-3 columns">
					<label>Position</label>
					{{ Form::text('position', '', ['class'=>'text-center radius', 'placeholder'=>'Current Employer Position']) }}
				</div>
				<div class="large-3 columns">
					<label>Inclusive Dates</label>
					{{ Form::text('incdates', '', ['class'=>'text-center radius', 'placeholder'=>'Enter Inclusive Dates']) }}
				</div>
				<div class="large-3 columns">
					<label>Base Salary/Month</label>
					{{ Form::text('bsalarymonth', '', ['class'=>'text-center radius', 'placeholder'=>'Base Salary/Month']) }}
				</div>
			</div>
			<!--  -->
			<div class="row">
				<div class="large-12 columns">
					<label>Address</label>
						{{ Form::text('employeraddress_1', '', array('class'=>'text-center radius', 'placeholder'=>'Current Employer Address')) }}
					
				</div>
			</div>
			<!--  -->
			<div class="row">
				<div class="large-12 columns">
					<label>Other Cash Compensation</label>
						{{ Form::text('cashcompensation_1', '', array('class'=>'text-center radius', 'placeholder'=>'Other Cash Compensation')) }}
				</div>
			</div>
		
		<!--  -->
		<h1 class="size-24 text-center">PREVIOUS EMPLOYER</h1>
			<!-- 1 -->
			<div class="row">
				<div class="large-3 columns">
					<label>Previous Employer</label>
					{{ Form::text('pemployer_1', '', ['class'=>'text-center radius', 'placeholder'=>'Name of your Previous Employer']) }}
				</div>
				<div class="large-3 columns">
					<label>Position</label>
					{{ Form::text('pempposition', '', ['class'=>'text-center radius', 'placeholder'=>'Previous Employer Position']) }}
				</div>
				<div class="large-3 columns">
					<label>Inclusive Dates</label>
					{{ Form::text('pempincdates', '', ['class'=>'text-center radius', 'placeholder'=>'Enter Inclusive Dates']) }}
				</div>
				<div class="large-3 columns">
					<label>Base Salary/Month</label>
					{{ Form::text('pempbsalarymonth', '', ['class'=>'text-center radius', 'placeholder'=>'Base Salary/Month']) }}
				</div>
			</div>
			<!-- 1 -->


			<!-- 2 -->
			<div class="row">
				<div class="large-6 columns">
					<label>Supervisor</label>
					{{ Form::text('supervisor', '', array('class'=>'text-center radius', 'placeholder'=>'Supervisor name')) }}
				</div>
				<div class="large-6 columns">
					<label>Phone Number</label>
					{{ Form::text('phonenumber', '', array('class'=>'text-center radius', 'placeholder'=>'Supervisor Phone number')) }}
				</div>
			</div>
			<!-- 2 -->


			<!-- 3 -->
			<div class="row">
				<div class="large-12 columns">
					<label>Address</label>
					{{ Form::text('pempemployeraddress', '', array('class'=>'text-center radius', 'placeholder'=>'Current Employer Address')) }}
				</div>
			</div>
			<!-- 3 -->


			<!-- 4 -->
			<div class="row">
				<div class="large-12 columns">
					<label>Other Cash Compensation</label>
					{{ Form::text('pempcashcompensation', '', array('class'=>'text-center radius', 'placeholder'=>'Other Cash Compensation')) }}
				</div>
			</div>
			<!-- 4 -->

		<h1 class="size-24 text-center">PREVIOUS EMPLOYER</h1>
			<!-- 1 -->
			<div class="row">
				<div class="large-3 columns">
					<label>Previous Employer</label>
					{{ Form::text('pemployer_2', '', ['class'=>'text-center radius', 'placeholder'=>'Name of your Previous Employer']) }}
				</div>
				<div class="large-3 columns">
					<label>Position</label>
					{{ Form::text('pempposition_2', '', ['class'=>'text-center radius', 'placeholder'=>'Previous Employer Position']) }}
				</div>
				<div class="large-3 columns">
					<label>Inclusive Dates</label>
					{{ Form::text('pempincdates_2', '', ['class'=>'text-center radius', 'placeholder'=>'Enter Inclusive Dates']) }}
				</div>
				<div class="large-3 columns">
					<label>Base Salary/Month</label>
					{{ Form::text('pempbsalarymonth_2', '', ['class'=>'text-center radius', 'placeholder'=>'Base Salary/Month']) }}
				</div>
			</div>
			<!-- 1 -->


			<!-- 2 -->
			<div class="row">
				<div class="large-6 columns">
					<label>Supervisor</label>
					{{ Form::text('supervisor_2', '', array('class'=>'text-center radius', 'placeholder'=>'Supervisor name')) }}
				</div>
				<div class="large-6 columns">
					<label>Phone Number</label>
					{{ Form::text('phonenumber_2', '', array('class'=>'text-center radius', 'placeholder'=>'Supervisor Phone number')) }}
				</div>
			</div>
			<!-- 2 -->


			<!-- 3 -->
			<div class="row">
				<div class="large-12 columns">
					<label>Address</label>
					{{ Form::text('pempemployeraddress_2', '', array('class'=>'text-center radius', 'placeholder'=>'Current Employer Address')) }}
				</div>
			</div>
			<!-- 3 -->


			<!-- 4 -->
			<div class="row">
				<div class="large-12 columns">
					<label>Other Cash Compensation</label>
					{{ Form::text('pempcashcompensation_2', '', array('class'=>'text-center radius', 'placeholder'=>'Other Cash Compensation')) }}
				</div>
			</div>
			<!-- 4 -->
		</div>
	</div>
</div>
@endsection

@section('scripts')
	<script type="text/javascript">
		// Get the locale date
		function defaultValues() {
			var text = "";
			var possible = "A2BC8DEF08GHIJKL123MNO1PQRST4567UV7WXYZ9";
			var elem = document.getElementById("applicationdate");
			var dte = new Date();
			elem.value = dte.toLocaleDateString();

			for( var i=0; i < 16; i++ ) {
				if ( i != 0 && i % 4 == 0 ) {
					text += '-';
				}
			text += possible.charAt(Math.floor(Math.random() * possible.length));
			}
			document.getElementById("userid").innerHTML = text;
		}

		$('#dp1').fdatepicker({
			format: 'mm/dd/yyyy',
		});

		$('#dp2').fdatepicker({
			format: 'mm/dd/yyyy',
		});

		//Compute Age
		function getAge() {
			var date1 = new Date();
			var dob = document.getElementById("dp1").value
			var date2 = new Date(dob);
			var pattern = /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
			//Regex to validate date format (dd/mm/yyyy)       
			if (pattern.test(dob) ) {
				var y1 = date1.getFullYear();
				//getting current year
				var y2 = date2.getFullYear();
				//getting dob year            
				var age = y1 - y2;
				//calculating age                       
				document.getElementById("age").value = age;

				if (age < 18) {
					alert("Invalid age. Legal age is only 18 and above.");
					document.getElementsByName("dateofbirth").focus();
					return false;
				} else {
					return true;
				}
			} else {
				alert("Invalid date format. Please Input in (mm/dd/yyyy) format.");
				return false;
			}
		}
		
		function enableTbReason() {
			if(document.getElementById('y_id').checked) {
				document.getElementById('dp2').disabled = false;
			} else {
				document.getElementById('dp2').disabled = true;
				document.getElementById('dp2').value = null;
			}
		}

		function disableTbReason() {
			if(document.getElementById('n_id').checked) {
				document.getElementById('dp2').disabled = true;
				document.getElementById('dp2').value = null;
			}
		}

		function enableTbReason_2() {
			if(document.getElementById('y_state').checked) {
				document.getElementById('reason_2').disabled = false;
			} else {
				document.getElementById('reason_2').disabled = true;
				document.getElementById('reason_2').value = null;
			}
		}

		function disableTbReason_2() {
			if(document.getElementById('n_state').checked) {
				document.getElementById('reason_2').disabled = true;
				document.getElementById('reason_2').value = null;
			} 
		}

		$("input:checkbox").on('click', function() {
			// in the handler, 'this' refers to the box clicked on
			var $box = $(this);
			if ($box.is(":checked")) {
				// the name of the box is retrieved using the .attr() method
				// as it is assumed and expected to be immutable
				var group = "input:checkbox[name='" + $box.attr("name") + "']";
				// the checked state of the group/box on the other hand will change
				// and the current value is retrieved using .prop() method
				$(group).prop("checked", false);
				$box.prop("checked", true);
			} else {
				$box.prop("checked", false);
			}
		});
	</script>
@endsection