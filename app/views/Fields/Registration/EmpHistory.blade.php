



<div class="large-10 columns large-centered">	
	<div class="panel radius panel-body">
		<div class="panel panel-header cus-pan-hd-3 radius">
			<label class="size-22 label-black large-10 label-mg-left label-ln-ht-1">Employment History</label>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="large-12 columns">
					<label>Have you been dismissed by any of your former employers for any administrative or just cause? If: </label>
					{{ Form::radio('state_1', 'Yes', null, ['id'=>'y_state','class' => 'text-center', 'onclick'=>'enableTbReason_2()']) }} <label class="mTop-07">Yes</label>
					{{ Form::radio('state_1', 'No', null, ['id'=>'n_state', 'class' => 'text-center', 'onclick'=>'disableTbReason_2()']) }} <label class="mTop-07">No </label>
					{{ Form::text('reason_2', '', ['id'=>'reason_2', 'class'=>'error radius', 'placeholder'=>'State your details here', 'readOnly']) }}
					@if ($errors->has('state_1')) <small class="error fi-alert"> {{ $errors->first('state_1') }}</small> @endif
				</div>
			</div>
			<br>
			<div class="row">
				<div class="large-3 columns">
					<label>Current Employer</label>
					{{ Form::text('cemployer', '', ['class'=>'text-center radius', 'placeholder'=>'Current Employer Name']) }}
					@if ($errors->has('cemployer')) <small class="error fi-alert"> {{ $errors->first('cemployer') }}</small> @endif
				</div>
				<div class="large-3 columns">
					<label>Position</label>
					{{ Form::text('position', '', ['class'=>'text-center radius', 'placeholder'=>'Current Employer Position']) }}
					@if ($errors->has('position')) <small class="error fi-alert"> {{ $errors->first('position') }}</small> @endif
				</div>
				<div class="large-3 columns">
					<label>Inclusive Dates</label>
					{{ Form::text('incdates', '', ['class'=>'text-center radius', 'placeholder'=>'Enter Inclusive Dates']) }}
					@if ($errors->has('incdates')) <small class="error fi-alert"> {{ $errors->first('incdates') }}</small> @endif
				</div>
				<div class="large-3 columns">
					<label>Base Salary/Month</label>
					{{ Form::text('bsalarymonth', '', ['class'=>'text-center radius', 'placeholder'=>'Base Salary/Month']) }}
					@if ($errors->has('bsalarymonth')) <small class="error fi-alert"> {{ $errors->first('bsalarymonth') }}</small> @endif
				</div>
			</div>
			<br>
			<div class="row">
				<div class="large-12 columns">
					<label>Address</label>
					{{ Form::text('employeraddress_1', '', array('class'=>'text-center radius', 'placeholder'=>'Current Employer Address')) }}
					
				</div>
			</div>
			<br>
			<div class="row">
				<div class="large-12 columns">
					<label>Other Cash Compensation</label>
					{{ Form::text('cashcompensation_1', '', array('class'=>'error text-center radius', 'placeholder'=>'Other Cash Compensation')) }}
					@if ($errors->has('cashcompensation_1')) <small class="error fi-alert"> {{ $errors->first('cashcompensation_1') }}</small> @endif
				</div>
			</div>

			<br><br>
			<li class="separator separator-width"></li>
			<br><br>

			<div class="row">
				<div class="large-3 columns">
					<label>Previous Employer</label>
					{{ Form::text('pemployer_1', '', ['class'=>'error text-center radius', 'placeholder'=>'Previous Employer Name']) }}
					@if ($errors->has('pemployer_1')) <small class="error fi-alert"> {{ $errors->first('pemployer_1') }}</small> @endif
				</div>
				<div class="large-3 columns">
					<label>Position</label>
					{{ Form::text('pempposition', '', ['class'=>'error text-center radius', 'placeholder'=>'Previous Employer Position']) }}
					@if ($errors->has('pempposition')) <small class="error fi-alert"> {{ $errors->first('pempposition') }}</small> @endif
				</div>
				<div class="large-3 columns">
					<label>Inclusive Dates</label>
					{{ Form::text('pempincdates', '', ['id'=>'pempincdates', 'class'=>'text-center radius', 'placeholder'=>'Enter Inclusive Dates']) }}
				</div>
				<div class="large-3 columns">
					<label>Base Salary/Month</label>
					{{ Form::text('pempbsalarymonth', '', ['class'=>'error text-center radius', 'placeholder'=>'Base Salary/Month']) }}
					@if ($errors->has('pempbsalarymonth')) <small class="error fi-alert"> {{ $errors->first('pempbsalarymonth') }}</small> @endif
				</div>
			</div>
					<!-- 1 -->


					<!-- 2 -->
			<div class="row">
				<div class="large-6 columns">
					<label>Supervisor</label>
					{{ Form::text('supervisor', '', array('class'=>'error text-center radius', 'placeholder'=>'Supervisor name')) }}
					@if ($errors->has('supervisor')) <small class="error fi-alert"> {{ $errors->first('supervisor') }}</small> @endif
				</div>
				<div class="large-6 columns">
					<label>Phone Number</label>
					{{ Form::text('phonenumber', '', array('class'=>'error text-center radius', 'placeholder'=>'Supervisor Phone number')) }}
					@if ($errors->has('phonenumber')) <small class="error fi-alert"> {{ $errors->first('phonenumber') }}</small> @endif
				</div>
			</div><br>
			<!-- 2 -->


			<!-- 3 -->
			<div class="row">
				<div class="large-12 columns">
					<label>Address</label>
					{{ Form::text('pempemployeraddress', '', array('class'=>'text-center radius', 'placeholder'=>'Current Employer Address')) }}
				</div>
			</div><br>
			<!-- 3 -->


			<!-- 4 -->
			<div class="row">
				<div class="large-12 columns">
					<label>Other Cash Compensation</label>
					{{ Form::text('pempcashcompensation', '', array('class'=>'error text-center radius', 'placeholder'=>'Other Cash Compensation')) }}
					@if ($errors->has('pempcashcompensation')) <small class="error fi-alert"> {{ $errors->first('pempcashcompensation') }}</small> @endif
				</div>
			</div>

			<br><br>
			<li class="separator separator-width"></li>
			<br><br>

			<div class="row">
				<div class="large-3 columns">
					<label>Previous Employer</label>
					{{ Form::text('pemployer_2', '', ['class'=>'error text-center radius', 'placeholder'=>'Previous Employer Name']) }}
					@if ($errors->has('pemployer_2')) <small class="error fi-alert"> {{ $errors->first('pemployer_1') }}</small> @endif
				</div>
				<div class="large-3 columns">
					<label>Position</label>
					{{ Form::text('pempposition_2', '', ['class'=>'error text-center radius', 'placeholder'=>'Previous Employer Position']) }}
					@if ($errors->has('pempposition_2')) <small class="error fi-alert"> {{ $errors->first('pempposition_2') }}</small> @endif
				</div>
				<div class="large-3 columns">
					<label>Inclusive Dates</label>
					{{ Form::text('pempincdates_2', '', ['id'=>'pempincdates_2', 'class'=>'text-center radius', 'placeholder'=>'Enter Inclusive Dates']) }}
				</div>
				<div class="large-3 columns">
					<label>Base Salary/Month</label>
					{{ Form::text('pempbsalarymonth_2', '', ['class'=>'error text-center radius', 'placeholder'=>'Base Salary/Month']) }}
					@if ($errors->has('pempbsalarymonth_2')) <small class="error fi-alert"> {{ $errors->first('pempbsalarymonth_2') }}</small> @endif
				</div>
			</div>
					<!-- 1 -->


					<!-- 2 -->
			<div class="row">
				<div class="large-6 columns">
					<label>Supervisor</label>
					{{ Form::text('supervisor_2', '', array('class'=>'error text-center radius', 'placeholder'=>'Supervisor Name (2)')) }}
					@if ($errors->has('supervisor_2')) <small class="error fi-alert"> {{ $errors->first('supervisor_2') }}</small> @endif
				</div>
				<div class="large-6 columns">
					<label>Phone Number</label>
					{{ Form::text('phonenumber_2', '', array('class'=>'error text-center radius', 'placeholder'=>'Supervisor Phone number (2)')) }}
					@if ($errors->has('phonenumber_2')) <small class="error fi-alert"> {{ $errors->first('phonenumber_2') }}</small> @endif
				</div>
			</div><br>
			<!-- 2 -->


			<!-- 3 -->
			<div class="row">
				<div class="large-12 columns">
					<label>Address</label>
					{{ Form::text('pempemployeraddress_2', '', array('class'=>'text-center radius', 'placeholder'=>'Previous Employer Address (2)')) }}
				</div>
			</div>
			<!-- 3 -->


			<!-- 4 -->
			<div class="row">
				<div class="large-12 columns">
					<label>Other Cash Compensation</label>
					{{ Form::text('pempcashcompensation_2', '', array('class'=>'error text-center radius', 'placeholder'=>'Other Cash Compensation from Previous Employer (2)')) }}
					@if ($errors->has('pempcashcompensation_2')) <small class="error fi-alert"> {{ $errors->first('pempcashcompensation_2') }}</small> @endif
				</div>
			</div>
			<br><br>
		</div>
	</div>
		{{ Form::submit("Register", ['class'=>'button-bg button large-12 label-black button-bg-sb text-size-20 small right font-style-segoe']) }}
</div>