



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