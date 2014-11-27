



<br>
<div class="large-10 columns large-centered">	
	<div class="panel radius panel-body">
		<div class="panel panel-header cus-pan-hd-3 radius">
			<label class="size-22 label-white large-10 label-mg-left label-ln-ht-1">Basic Details</label>
		</div>
		<div class="panel-body">

			<div class="row">
				<div class="large-3 columns">
					<label>Position Desired</label>
					{{ Form::text('positiondesired_1', $applicant_info->positiondesired_1, array('class'=>'text-center error radius', 'placeholder'=>'Enter your Desired Position')) }}
					@if ($errors->has('positiondesired_1')) <small class="error fi-alert"> {{ $errors->first('positiondesired_1') }}</small> @endif
				</div>

				<div class="large-3 columns">
					<label>Expected Salary</label>
					{{ Form::text('expectedsalary', $applicant_info->expectedsalary, array('class'=>'text-center error radius', 'placeholder'=>'Enter your Expected Salary')) }}
					@if ($errors->has('expectedsalary')) <small class="error fi-alert"> {{ $errors->first('expectedsalary') }}</small> @endif
				</div>

				<div class="large-3 columns">
					<label>Currently Employed?</label>
					{{ Form::radio('cemployed', 'yes', $applicant_info->cemployed_1 == 'yes' ? 'checked' : '', ['class' => 'text-center mrgin-07']) }} <label class="mTop-07"> Yes </label>
					{{ Form::radio('cemployed', 'No', $applicant_info->cemployed_1 == 'No' ? 'checked' : '', ['class' => 'text-center mrgin-07']) }} <label class="mTop-07"> No </label>
					@if ($errors->has('cemployed')) <small class="error fi-alert"> {{ $errors->first('cemployed') }}</small> @endif
				</div>

				<div class="large-3 columns">
					<label>Date of Application</label>
					{{ Form::text('dateofapplication', $applicant_info->dateofapplication, ['class'=>'text-center radius', 'placeholder'=>'Enter your Date of Birth', 'id'=>'applicationdate', 'readonly']) }}
				</div>
			</div>

			<div class="row">
				<div class="large-3 columns">
					<label>Second Choice</label>
					{{ Form::text('positiondesired_2', $applicant_info->positiondesired_2, array('class'=>'text-center radius', 'placeholder'=>'Second choice for Position')) }}
				</div>
			</div>

			<div class="row">
				<div class="large-5 columns">
					<label>Previously Applied Here?</label>
					{{ Form::radio('previouslyApp', 'Yes', $applicant_info->previouslyApp_1=='Yes'?'checked':'', ['id'=>'y_id','class' => 'text-center', 'onclick'=>'enableTbReason()']) }} <label> Yes </label>, <label class="mTop-07 text-center"> {{ Form::text('stateDate', $applicant_info->stateDate, ['class'=>'drp-element text-center radius', 'placeholder'=>'State the Date', 'id'=>'dp2', 'readOnly']) }} </label>
					{{ Form::radio('previouslyApp', 'No', $applicant_info->previouslyApp_1 == 'No' ? 'checked' : '', ['id'=>'n_id', 'class' => 'text-center', 'onclick'=>'disableTbReason()']) }} <label class="mTop-07 text-center">No </label>
				</div>
			</div>

			<div class="row">
				<div class="large-4 columns">
					<label>Notice Period Required</label>
					{{ Form::text('nprequired', $applicant_info->nprequired, array('id'=>'npDate', 'class'=>'text-center radius large-12', 'placeholder'=>'Notice Period Required.')) }}
				</div>

				<div class="large-4 columns">
					<label>Source</label>
					{{ Form::text('source', $applicant_info->source, array('class'=>'text-center radius', 'placeholder'=>'Where did you see the Company?')) }}
				</div>

				<div class="large-4 columns">
					<label>Referred By:</label>
					{{ Form::text('referred', $applicant_info->referred, array('class'=>'text-center radius', 'placeholder'=>'Who introduced the company?')) }}
				</div>
			</div>
			<br>
		</div>
	</div>
</div>
<br>