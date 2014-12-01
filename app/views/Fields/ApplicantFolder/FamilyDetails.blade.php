



<br>

<div class="large-10 columns large-centered">	
	<div class="panel radius panel-body">
		<div class="panel panel-header cus-pan-hd-3 radius">
			<label class="size-22 laravel-fnt large-10 label-mg-left label-ln-ht-1"># Family Information</label>
		</div>
		<div class="panel-body">

			<div class="row">
				<div class="tb-width-20 columns">
					<label>Family Name</label><br>
					{{ Form::text('famname1', $applicant_info->famname1, ['class'=>'text-center radius', 'placeholder'=>'Family Member name']) }}
					{{ Form::text('famname2', $applicant_info->famname2, ['class'=>'text-center radius', 'placeholder'=>'Family Member name']) }}
					{{ Form::text('famname3', $applicant_info->famname3, ['class'=>'text-center radius', 'placeholder'=>'Family Member name']) }}
					{{ Form::text('famname4', $applicant_info->famname4, ['class'=>'text-center radius', 'placeholder'=>'Family Member name']) }}
					{{ Form::text('famname5', $applicant_info->famname5, ['class'=>'text-center radius', 'placeholder'=>'Family Member name']) }}
				</div>
				<div class="tb-width-20 columns">
					<label>Relationship</label><br>
					{{ Form::text('famrel1', $applicant_info->famrel1, ['class'=>' text-center radius', 'placeholder'=>'Relationship']) }}
					{{ Form::text('famrel2', $applicant_info->famrel2, ['class'=>'text-center radius', 'placeholder'=>'Relationship']) }}
					{{ Form::text('famrel3', $applicant_info->famrel3, ['class'=>'text-center radius', 'placeholder'=>'Relationship']) }}
					{{ Form::text('famrel4', $applicant_info->famrel4, ['class'=>'text-center radius', 'placeholder'=>'Relationship']) }}
					{{ Form::text('famrel5', $applicant_info->famrel5, ['class'=>'text-center radius', 'placeholder'=>'Relationship']) }}
				</div>
				<div class="tb-width-20 columns">
					<label>Firm / School</label><br>
					{{ Form::text('famsch1', $applicant_info->famsch1, ['class'=>' text-center radius', 'placeholder'=>'Family Member School']) }}
					{{ Form::text('famsch2', $applicant_info->famsch2, ['class'=>'text-center radius', 'placeholder'=>'Family Member School']) }}
					{{ Form::text('famsch3', $applicant_info->famsch3, ['class'=>'text-center radius', 'placeholder'=>'Family Member School']) }}
					{{ Form::text('famsch4', $applicant_info->famsch4, ['class'=>'text-center radius', 'placeholder'=>'Family Member School']) }}
					{{ Form::text('famsch5', $applicant_info->famsch5, ['class'=>'text-center radius', 'placeholder'=>'Family Member School']) }}
				</div>
				<div class="tb-width-20 columns">
					<label>Position</label><br>
					{{ Form::text('fampos1', $applicant_info->fampos1, ['class'=>' text-center radius', 'placeholder'=>'Family Member Position']) }}
					{{ Form::text('fampos2', $applicant_info->fampos2, ['class'=>'text-center radius', 'placeholder'=>'Family Member Position']) }}
					{{ Form::text('fampos3', $applicant_info->fampos3, ['class'=>'text-center radius', 'placeholder'=>'Family Member Position']) }}
					{{ Form::text('fampos4', $applicant_info->fampos4, ['class'=>'text-center radius', 'placeholder'=>'Family Member Position']) }}
					{{ Form::text('fampos5', $applicant_info->fampos5, ['class'=>'text-center radius', 'placeholder'=>'Family Member Position']) }}
				</div>
				<div class="tb-width-20 columns">
					<label>Phone Number</label><br>
					{{ Form::text('famphn1', $applicant_info->famphn1, ['class'=>' text-center radius', 'placeholder'=>'Family Phone No #']) }}
					{{ Form::text('famphn2', $applicant_info->famphn2, ['class'=>'text-center radius', 'placeholder'=>'Family Phone No #']) }}
					{{ Form::text('famphn3', $applicant_info->famphn3, ['class'=>'text-center radius', 'placeholder'=>'Family Phone No #']) }}
					{{ Form::text('famphn4', $applicant_info->famphn4, ['class'=>'text-center radius', 'placeholder'=>'Family Phone No #']) }}
					{{ Form::text('famphn5', $applicant_info->famphn5, ['class'=>'text-center radius', 'placeholder'=>'Family Phone No #']) }}
				</div>
			</div>

			<br>

			@if ($errors->has('famphn1'))
				<small class="error">{{ $errors->first('famphn1') }}</small>
			@endif

			@if ($errors->has('fampos1'))
				<small class="error">{{ $errors->first('fampos1') }}</small>
			@endif

			@if ($errors->has('famsch1'))
				<small class="error">{{ $errors->first('famsch1') }}</small>
			@endif

			@if ($errors->has('famrel1'))
				<small class="error">{{ $errors->first('famrel1') }}</small>
			@endif

			@if ($errors->has('famname1'))
				<small class="error">{{ $errors->first('famname1') }}</small>
			@endif	
			<!--  -->
			<div class="row">
				<div class="large-12 columns">
					<label>Have you ever been involved in any administrative, civil or criminal case?</label>
					{{ Form::radio('chkbx', 'Yes', $applicant_info->chkbx_1=='Yes'?'checked':'', ['id'=>'chkbx_y_state','class' => 'text-center', 'onclick'=>'enableTbRsn()']) }} <label class="mTop-07">Yes</label>
					{{ Form::radio('chkbx', 'No', $applicant_info->chkbx_1=='No'?'checked':'', ['id'=>'chkbx_n_state', 'class' => 'text-center', 'onclick'=>'disableTbRsn()']) }} <label class="mTop-07">No </label>
					{{ Form::text('rsn', $applicant_info->rsn, ['id'=>'rsn', 'class'=>'error radius', 'placeholder'=>'State your details here', 'readOnly']) }}
					@if ($errors->has('chkbx')) <small class="error">{{ $errors->first('chkbx') }}</small> @endif
				</div>
			</div>

			<br>

			<div class="row">
				<div class="large-12 columns">
					<label>Have you had any physical pre mental condition which limits your ability to perform the job applied for or pose a potential risk to other employees?</label>
					{{ Form::radio('chkbx_2', 'Yes', $applicant_info->chkbx_2 == 'Yes' ? 'checked' : '', ['id'=>'chkbx_2_y_state','class' => 'text-center', 'onclick'=>'enableTbRsn_2()']) }} <label class="mTop-07">Yes</label>
					{{ Form::radio('chkbx_2', 'No', $applicant_info->chkbx_2 == 'No' ? 'checked' : '', ['id'=>'chkbx_2_n_state', 'class' => 'text-center', 'onclick'=>'disableTbRsn_2()']) }} <label class="mTop-07">No </label>
					{{ Form::text('rsn_2', $applicant_info->reason_2, ['id'=>'rsn_2', 'class'=>'error radius', 'placeholder'=>'State your details here', 'readOnly']) }}
					@if ($errors->has('chkbx_2')) <small class="error">{{ $errors->first('chkbx_2') }}</small> @endif
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
			<label class="size-22 laravel-fnt large-10 label-mg-left label-ln-ht-1"># Character Reference</label>
			<label class="size-13 laravel-fnt large-10 label-mg-left label-mrgn-top right push-1"><i>Provide at least 2 persons</i></label>
		</div>
		<div class="panel-body">

			<div class="row">
				<div class="large-4 columns">
					<label>Name</label><br>
					{{ Form::text('nme1', $applicant_info->nme1, ['class'=>'text-center radius', 'placeholder'=>'Name (1)']) }}
					{{ Form::text('nme2', $applicant_info->nme2, ['class'=>'text-center radius', 'placeholder'=>'Name (2)']) }}
					{{ Form::text('nme3', $applicant_info->nme3, ['class'=>'text-center radius', 'placeholder'=>'Name (3)']) }}
				</div>
				<div class="large-4 columns">
					<label>Relationship</label><br>
					{{ Form::text('rel1', $applicant_info->rel1, ['class'=>'text-center radius', 'placeholder'=>'Relationship (1)']) }}
					{{ Form::text('rel2', $applicant_info->rel2, ['class'=>'text-center radius', 'placeholder'=>'Relationship (2)']) }}
					{{ Form::text('rel3', $applicant_info->rel3, ['class'=>'text-center radius', 'placeholder'=>'Relationship (3)']) }}
				</div>
				<div class="large-4 columns">
					<label>Address / Contact Number</label><br>
					{{ Form::text('addcon1', $applicant_info->addcon1, ['class'=>'text-center radius', 'placeholder'=>'Address / Contact Number  (1)']) }}
					{{ Form::text('addcon2', $applicant_info->addcon2, ['class'=>'text-center radius', 'placeholder'=>'Address / Contact Number  (2)']) }}
					{{ Form::text('addcon3', $applicant_info->addcon3, ['class'=>'text-center radius', 'placeholder'=>'Address / Contact Number  (3)']) }}
				</div>
			</div>

			@if ($errors->has('nme1'))
				<small class="error">{{ $errors->first('nme1') }}</small>
			@endif

			@if ($errors->has('nme2'))
				<small class="error">{{ $errors->first('nme2') }}</small>
			@endif

			@if ($errors->has('nme3'))
				<small class="error">{{ $errors->first('nme3') }}</small>
			@endif

			@if ($errors->has('rel1'))
				<small class="error">{{ $errors->first('rel1') }}</small>
			@endif

			@if ($errors->has('rel2'))
				<small class="error">{{ $errors->first('rel2') }}</small>
			@endif

			@if ($errors->has('rel3'))
				<small class="error">{{ $errors->first('rel3') }}</small>
			@endif
		</div>

	</div>
</div>