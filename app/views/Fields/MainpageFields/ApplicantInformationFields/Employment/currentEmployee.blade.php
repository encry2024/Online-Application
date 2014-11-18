


<h1 class="size-24 text-center">CURRENT EMPLOYER</h1>
<!--  -->
<div class="row">
	<div class="large-12 columns">
		<label>Have you been dismissed by any of your former employers for any administrative or just cause? If: </label>
		{{ Form::radio('state_1', 'Yes', $applicant_info->state_1=='Yes'?'checked':'', ['id'=>'y_state','class' => 'text-center', 'onclick'=>'enableTbReason_2()']) }} <label class="mTop-07">Yes</label>
		{{ Form::radio('state_1', 'No', $applicant_info->state_1=='No'?'checked':'', ['id'=>'n_state', 'class' => 'text-center', 'onclick'=>'disableTbReason_2()']) }} <label class="mTop-07">No </label>
		{{ Form::text('reason_2', $applicant_info->reason_2, ['id'=>'reason_2', 'class'=>'error radius', 'placeholder'=>'State your details here', 'disabled']) }}
		@if ($errors->has('state_1')) <small class="error">{{ $errors->first('state_1') }}</small> @endif
	</div>
</div>
<!--  -->
<div class="row">
	<div class="large-3 columns">
		<label>Current Employer</label>
		{{ Form::text('cemployer', $applicant_info->cemployer, ['class'=>'text-center radius', 'placeholder'=>'Name of your Current Employer']) }}
		@if ($errors->has('cemployer')) <small class="error">{{ $errors->first('cemployer') }}</small> @endif
	</div>
	<div class="large-3 columns">
		<label>Position</label>
		{{ Form::text('position', $applicant_info->position, ['class'=>'text-center radius', 'placeholder'=>'Current Employer Position']) }}
		@if ($errors->has('position')) <small class="error">{{ $errors->first('position') }}</small> @endif
	</div>
	<div class="large-3 columns">
		<label>Inclusive Dates</label>
		{{ Form::text('incdates', $applicant_info->incdates, ['class'=>'text-center radius', 'placeholder'=>'Enter Inclusive Dates']) }}
		@if ($errors->has('incdates')) <small class="error">{{ $errors->first('incdates') }}</small> @endif
	</div>
	<div class="large-3 columns">
		<label>Base Salary/Month</label>
		{{ Form::text('bsalarymonth', $applicant_info->bsalarymonth, ['class'=>'text-center radius', 'placeholder'=>'Base Salary/Month']) }}
		@if ($errors->has('bsalarymonth')) <small class="error">{{ $errors->first('bsalarymonth') }}</small> @endif
	</div>
</div>
<!--  -->
<div class="row">
	<div class="large-12 columns">
		<label>Address</label>
		{{ Form::text('employeraddress_1', $applicant_info->employeraddress_1, array('class'=>'text-center radius', 'placeholder'=>'Current Employer Address')) }}
		
	</div>
</div>
<!--  -->
<div class="row">
	<div class="large-12 columns">
		<label>Other Cash Compensation</label>
		{{ Form::text('cashcompensation_1', $applicant_info->cashcompensation_1, array('class'=>'error text-center radius', 'placeholder'=>'Other Cash Compensation')) }}
		@if ($errors->has('cashcompensation_1')) <small class="error">{{ $errors->first('cashcompensation_1') }}</small> @endif
	</div>
</div>