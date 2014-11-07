


<h1 class="size-24 text-center">FAMILY DETAILS</h1>
<div class="row">
	<div class="tb-width-20 columns">
		<label>Family Name</label>
		{{ Form::text('famname1', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member name']) }}
		{{ Form::text('famname2', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member name']) }}
		{{ Form::text('famname3', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member name']) }}
		{{ Form::text('famname4', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member name']) }}
		{{ Form::text('famname5', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member name']) }}
	</div>
	<div class="tb-width-20 columns">
		<label>Relationship</label>
		{{ Form::text('famrel1', '', ['class'=>'text-center radius', 'placeholder'=>'Relationship']) }}
		{{ Form::text('famrel2', '', ['class'=>'text-center radius', 'placeholder'=>'Relationship']) }}
		{{ Form::text('famrel3', '', ['class'=>'text-center radius', 'placeholder'=>'Relationship']) }}
		{{ Form::text('famrel4', '', ['class'=>'text-center radius', 'placeholder'=>'Relationship']) }}
		{{ Form::text('famrel5', '', ['class'=>'text-center radius', 'placeholder'=>'Relationship']) }}
	</div>
	<div class="tb-width-20 columns">
		<label>Firm / School</label>
		{{ Form::text('famsch1', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member School']) }}
		{{ Form::text('famsch2', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member School']) }}
		{{ Form::text('famsch3', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member School']) }}
		{{ Form::text('famsch4', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member School']) }}
		{{ Form::text('famsch5', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member School']) }}
	</div>
	<div class="tb-width-20 columns">
		<label>Position</label>
		{{ Form::text('fampos1', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member Position']) }}
		{{ Form::text('fampos2', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member Position']) }}
		{{ Form::text('fampos3', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member Position']) }}
		{{ Form::text('fampos4', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member Position']) }}
		{{ Form::text('fampos5', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member Position']) }}
	</div>
	<div class="tb-width-20 columns">
		<label>Phone Number</label>
		{{ Form::text('famphn1', '', ['class'=>'text-center radius', 'placeholder'=>'Family Phone No #']) }}
		{{ Form::text('famphn2', '', ['class'=>'text-center radius', 'placeholder'=>'Family Phone No #']) }}
		{{ Form::text('famphn3', '', ['class'=>'text-center radius', 'placeholder'=>'Family Phone No #']) }}
		{{ Form::text('famphn4', '', ['class'=>'text-center radius', 'placeholder'=>'Family Phone No #']) }}
		{{ Form::text('famphn5', '', ['class'=>'text-center radius', 'placeholder'=>'Family Phone No #']) }}
	</div>
</div>
<!--  -->
<div class="row">
	<div class="large-12 columns">
		<label>Have you ever been involved in any administrative, civil or criminal case?</label>
		{{ Form::checkbox('chkbx[1]', 'Yes', null, ['id'=>'chkbx_y_state','class' => 'text-center', 'onclick'=>'enableTbRsn()']) }} <label class="mTop-07">Yes</label>
		{{ Form::checkbox('chkbx[1]', 'No', null, ['id'=>'chkbx_n_state', 'class' => 'text-center', 'onclick'=>'disableTbRsn()']) }} <label class="mTop-07">No </label>
		{{ Form::text('rsn', '', ['id'=>'rsn', 'class'=>'radius', 'placeholder'=>'State your details here', 'disabled']) }}
	</div>
</div>
<!--  -->
<div class="row">
	<div class="large-12 columns">
		<label>Have you had any physical pre mental condition which limits your ability to perform the job applied for or pose a potential risk to other employees?</label>
		{{ Form::checkbox('chkbx_2[1]', 'Yes', null, ['id'=>'chkbx_2_y_state','class' => 'text-center', 'onclick'=>'enableTbRsn_2()']) }} <label class="mTop-07">Yes</label>
		{{ Form::checkbox('chkbx_2[1]', 'No', null, ['id'=>'chkbx_2_n_state', 'class' => 'text-center', 'onclick'=>'disableTbRsn_2()']) }} <label class="mTop-07">No </label>
		{{ Form::text('rsn_2', '', ['id'=>'rsn_2', 'class'=>'radius', 'placeholder'=>'State your details here', 'disabled']) }}
	</div>
</div>

