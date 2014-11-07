



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