



<br>

<div class="large-10 columns large-centered">	
	<div class="panel radius panel-body">
		<div class="panel panel-header cus-pan-hd-3 radius">
			<label class="size-22 label-black large-10 label-mg-left label-ln-ht-1">Family Information</label>
		</div>
		<div class="panel-body">

			<div class="row">
				<div class="tb-width-20 columns">
					<label>Family Name</label><br>
					{{ Form::text('famname1', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member name']) }}
					{{ Form::text('famname2', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member name']) }}
					{{ Form::text('famname3', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member name']) }}
					{{ Form::text('famname4', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member name']) }}
					{{ Form::text('famname5', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member name']) }}
				</div>
				<div class="tb-width-20 columns">
					<label>Relationship</label><br>
					{{ Form::text('famrel1', '', ['class'=>' text-center radius', 'placeholder'=>'Relationship']) }}
					{{ Form::text('famrel2', '', ['class'=>'text-center radius', 'placeholder'=>'Relationship']) }}
					{{ Form::text('famrel3', '', ['class'=>'text-center radius', 'placeholder'=>'Relationship']) }}
					{{ Form::text('famrel4', '', ['class'=>'text-center radius', 'placeholder'=>'Relationship']) }}
					{{ Form::text('famrel5', '', ['class'=>'text-center radius', 'placeholder'=>'Relationship']) }}
				</div>
				<div class="tb-width-20 columns">
					<label>Firm / School</label><br>
					{{ Form::text('famsch1', '', ['class'=>' text-center radius', 'placeholder'=>'Family Member School']) }}
					{{ Form::text('famsch2', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member School']) }}
					{{ Form::text('famsch3', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member School']) }}
					{{ Form::text('famsch4', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member School']) }}
					{{ Form::text('famsch5', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member School']) }}
				</div>
				<div class="tb-width-20 columns">
					<label>Position</label><br>
					{{ Form::text('fampos1', '', ['class'=>' text-center radius', 'placeholder'=>'Family Member Position']) }}
					{{ Form::text('fampos2', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member Position']) }}
					{{ Form::text('fampos3', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member Position']) }}
					{{ Form::text('fampos4', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member Position']) }}
					{{ Form::text('fampos5', '', ['class'=>'text-center radius', 'placeholder'=>'Family Member Position']) }}
				</div>
				<div class="tb-width-20 columns">
					<label>Phone Number</label><br>
					{{ Form::text('famphn1', '', ['class'=>' text-center radius', 'placeholder'=>'Family Phone No #']) }}
					{{ Form::text('famphn2', '', ['class'=>'text-center radius', 'placeholder'=>'Family Phone No #']) }}
					{{ Form::text('famphn3', '', ['class'=>'text-center radius', 'placeholder'=>'Family Phone No #']) }}
					{{ Form::text('famphn4', '', ['class'=>'text-center radius', 'placeholder'=>'Family Phone No #']) }}
					{{ Form::text('famphn5', '', ['class'=>'text-center radius', 'placeholder'=>'Family Phone No #']) }}
				</div>
			</div>

			<div class="row">
				<div class="large-12 columns">
				@if ($errors->has('famname1'))
					<small class="error fi-alert"> {{ $errors->first('famname1') }}</small>
				@endif	
				@if ($errors->has('famrel1'))
					<small class="error fi-alert"> {{ $errors->first('famrel1') }}</small>
				@endif
				@if ($errors->has('famsch1'))
					<small class="error fi-alert"> {{ $errors->first('famsch1') }}</small>
				@endif
				@if ($errors->has('fampos1'))
					<small class="error fi-alert"> {{ $errors->first('fampos1') }}</small>
				@endif
				@if ($errors->has('famphn1'))
					<small class="error fi-alert"> {{ $errors->first('famphn1') }}</small>
				@endif
				</div>
			</div>

			<!--  -->
			<div class="row">
				<div class="large-12 columns">
					<label>Have you ever been involved in any administrative, civil or criminal case?</label>
					{{ Form::radio('chkbx', 'Yes', null, ['id'=>'chkbx_y_state','class' => 'text-center', 'onclick'=>'enableTbRsn()']) }} <label class="mTop-07">Yes</label>
					{{ Form::radio('chkbx', 'No', null, ['id'=>'chkbx_n_state', 'class' => 'text-center', 'onclick'=>'disableTbRsn()']) }} <label class="mTop-07">No </label>
					{{ Form::text('rsn', '', ['id'=>'rsn', 'class'=>'error radius', 'placeholder'=>'State your details here', 'readOnly']) }}
					@if ($errors->has('chkbx')) <small class="error fi-alert"> {{ $errors->first('chkbx') }}</small> @endif
				</div>
			</div>

			<br>

			<div class="row">
				<div class="large-12 columns">
					<label>Have you had any physical pre mental condition which limits your ability to perform the job applied for or pose a potential risk to other employees?</label>
					{{ Form::radio('chkbx_2', 'Yes', null, ['id'=>'chkbx_2_y_state','class' => 'text-center', 'onclick'=>'enableTbRsn_2()']) }} <label class="mTop-07">Yes</label>
					{{ Form::radio('chkbx_2', 'No', null, ['id'=>'chkbx_2_n_state', 'class' => 'text-center', 'onclick'=>'disableTbRsn_2()']) }} <label class="mTop-07">No </label>
					{{ Form::text('rsn_2', '', ['id'=>'rsn_2', 'class'=>'error radius', 'placeholder'=>'State your details here', 'readOnly']) }}
					@if ($errors->has('chkbx_2')) <small class="error fi-alert"> {{ $errors->first('chkbx_2') }}</small> @endif
				</div>
			</div>
			<br>
		</div>
	</div>
</div>

<br>

<div class="large-10 columns large-centered">	
	<div class="panel radius panel-body">
		<div class="panel panel-header cus-pan-hd-3 radius">
			<label class="size-22 label-black large-10 label-mg-left label-ln-ht-1">Character Reference</label>
			<label class="size-13 label-black large-10 label-mg-left label-mrgn-top right push-1"><i>Provide at least 2 persons</i></label>
		</div>
		<div class="panel-body">

			<div class="row">
				<div class="large-4 columns">
					<label>Name</label><br>
					{{ Form::text('nme1', '', ['class'=>'text-center radius', 'placeholder'=>'Name (1)']) }}
					{{ Form::text('nme2', '', ['class'=>'text-center radius', 'placeholder'=>'Name (2)']) }}
					{{ Form::text('nme3', '', ['class'=>'text-center radius', 'placeholder'=>'Name (3)']) }}
				</div>
				<div class="large-4 columns">
					<label>Relationship</label><br>
					{{ Form::text('rel1', '', ['class'=>'text-center radius', 'placeholder'=>'Relationship (1)']) }}
					{{ Form::text('rel2', '', ['class'=>'text-center radius', 'placeholder'=>'Relationship (2)']) }}
					{{ Form::text('rel3', '', ['class'=>'text-center radius', 'placeholder'=>'Relationship (3)']) }}
				</div>
				<div class="large-4 columns">
					<label>Address / Contact Number</label><br>
					{{ Form::text('addcon1', '', ['class'=>'text-center radius', 'placeholder'=>'Address / Contact Number  (1)']) }}
					{{ Form::text('addcon2', '', ['class'=>'text-center radius', 'placeholder'=>'Address / Contact Number  (2)']) }}
					{{ Form::text('addcon3', '', ['class'=>'text-center radius', 'placeholder'=>'Address / Contact Number  (3)']) }}
				</div>
			</div>

			@if ($errors->has('nme1'))
				<small class="error fi-alert"> {{ $errors->first('nme1') }}</small>
			@endif

			@if ($errors->has('nme2'))
				<small class="error fi-alert"> {{ $errors->first('nme2') }}</small>
			@endif

			@if ($errors->has('nme3'))
				<small class="error fi-alert"> {{ $errors->first('nme3') }}</small>
			@endif

			@if ($errors->has('rel1'))
				<small class="error fi-alert"> {{ $errors->first('rel1') }}</small>
			@endif

			@if ($errors->has('rel2'))
				<small class="error fi-alert"> {{ $errors->first('rel2') }}</small>
			@endif

			@if ($errors->has('rel3'))
				<small class="error fi-alert"> {{ $errors->first('rel3') }}</small>
			@endif
		</div>

	</div>
</div>