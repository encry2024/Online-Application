



<h1 class="size-24 text-center">PREVIOUS EMPLOYER</h1>
<!-- 1 -->
<div class="row">
	<div class="large-3 columns">
		<label>Previous Employer</label>
		{{ Form::text('pemployer_1', '', ['class'=>'error text-center radius', 'placeholder'=>'Name of your Previous Employer']) }}
		@if ($errors->has('pemployer_1')) <small class="error">{{ $errors->first('pemployer_1') }}</small> @endif
	</div>
	<div class="large-3 columns">
		<label>Position</label>
		{{ Form::text('pempposition', '', ['class'=>'error text-center radius', 'placeholder'=>'Previous Employer Position']) }}
		@if ($errors->has('pempposition')) <small class="error">{{ $errors->first('pempposition') }}</small> @endif
	</div>
	<div class="large-3 columns">
		<label>Inclusive Dates</label>
		{{ Form::text('pempincdates', '', ['class'=>'text-center radius', 'placeholder'=>'Enter Inclusive Dates']) }}
	</div>
	<div class="large-3 columns">
		<label>Base Salary/Month</label>
		{{ Form::text('pempbsalarymonth', '', ['class'=>'error text-center radius', 'placeholder'=>'Base Salary/Month']) }}
		@if ($errors->has('pempbsalarymonth')) <small class="error">{{ $errors->first('pempbsalarymonth') }}</small> @endif
	</div>
</div>
		<!-- 1 -->


		<!-- 2 -->
<div class="row">
	<div class="large-6 columns">
		<label>Supervisor</label>
		{{ Form::text('supervisor', '', array('class'=>'error text-center radius', 'placeholder'=>'Supervisor name')) }}
		@if ($errors->has('supervisor')) <small class="error">{{ $errors->first('supervisor') }}</small> @endif
	</div>
	<div class="large-6 columns">
		<label>Phone Number</label>
		{{ Form::text('phonenumber', '', array('class'=>'error text-center radius', 'placeholder'=>'Supervisor Phone number')) }}
		@if ($errors->has('phonenumber')) <small class="error">{{ $errors->first('phonenumber') }}</small> @endif
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
		{{ Form::text('pempcashcompensation', '', array('class'=>'error text-center radius', 'placeholder'=>'Other Cash Compensation')) }}
		@if ($errors->has('pempcashcompensation')) <small class="error">{{ $errors->first('pempcashcompensation') }}</small> @endif
	</div>
</div>
<!-- 4 -->

<h1 class="size-24 text-center">PREVIOUS EMPLOYER</h1>
<!-- 1 -->
<div class="row">
	<div class="large-3 columns">
		<label>Previous Employer</label>
		{{ Form::text('pemployer_2', '', ['class'=>'error text-center radius', 'placeholder'=>'Name of your Previous Employer']) }}
		@if ($errors->has('pemployer_2')) <small class="error">{{ $errors->first('pemployer_2') }}</small> @endif
	</div>
	<div class="large-3 columns">
		<label>Position</label>
		{{ Form::text('pempposition_2', '', ['class'=>'error text-center radius', 'placeholder'=>'Previous Employer Position']) }}
		@if ($errors->has('pempposition_2')) <small class="error">{{ $errors->first('pempposition_2') }}</small> @endif
	</div>
	<div class="large-3 columns">
		<label>Inclusive Dates</label>
		{{ Form::text('pempincdates_2', '', ['class'=>'text-center radius', 'placeholder'=>'Enter Inclusive Dates']) }}
		
	</div>
	<div class="large-3 columns">
		<label>Base Salary/Month</label>
		{{ Form::text('pempbsalarymonth_2', '', ['class'=>'error text-center radius', 'placeholder'=>'Base Salary/Month']) }}
		@if ($errors->has('pempbsalarymonth_2')) <small class="error">{{ $errors->first('pempbsalarymonth_2') }}</small> @endif
	</div>
</div>
<!-- 1 -->


<!-- 2 -->
<div class="row">
	<div class="large-6 columns">
		<label>Supervisor</label>
		{{ Form::text('supervisor_2', '', array('class'=>'error text-center radius', 'placeholder'=>'Supervisor name')) }}
		@if ($errors->has('supervisor_2')) <small class="error">{{ $errors->first('supervisor_2') }}</small> @endif
	</div>
	<div class="large-6 columns">
		<label>Phone Number</label>
		{{ Form::text('phonenumber_2', '', array('class'=>'error text-center radius', 'placeholder'=>'Supervisor Phone number')) }}
		@if ($errors->has('phonenumber_2')) <small class="error">{{ $errors->first('phonenumber_2') }}</small> @endif
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
		{{ Form::text('pempcashcompensation_2', '', array('class'=>'error text-center radius', 'placeholder'=>'Other Cash Compensation')) }}
		@if ($errors->has('pempcashcompensation_2')) <small class="error">{{ $errors->first('pempcashcompensation_2') }}</small> @endif
	</div>
</div>
<!-- 4 -->