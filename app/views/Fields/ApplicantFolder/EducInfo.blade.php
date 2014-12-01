



<BR>

<div class="large-10 columns large-centered">	
	<div class="panel radius panel-body">
		<div class="panel panel-header cus-pan-hd-3 radius">
			<label class="size-22 laravel-fnt large-10 label-mg-left label-ln-ht-1"># Educational Background</label>
		</div>
		<div class="panel-body">

			<div class="row">
				<div class="large-6 columns">
					<label>School (Graduate of Study)</label>
					{{ Form::text('gradschoolname', $applicant_info->gradschoolname, ['class'=>'text-center radius', 'placeholder'=>'Enter your School Name']) }}
					@if ($errors->has('gradschoolname')) <small class="error">{{ $errors->first('gradschoolname') }}</small> @endif
				</div>

				<div class="large-6 columns">
					<label>Degree / Concentration / Major</label>
					{{ Form::text('gradeductitle', $applicant_info->gradeductitle, ['class'=>'text-center radius', 'placeholder'=>'Enter your Education Title']) }}
					@if ($errors->has('gradeductitle')) <small class="error">{{ $errors->first('gradeductitle') }}</small> @endif
				</div>
			</div>

			<br>

			<div class="row">
				<div class="large-4 columns">
					<label>Address</label>
					{{ Form::text('gradschooladdress', $applicant_info->gradschooladdress, ['class'=>'text-center radius', 'placeholder'=>'Enter your School Address']) }}
					@if ($errors->has('collegeschooladdress')) <small class="error">{{ $errors->first('collegeschooladdress') }}</small> @endif
				</div>

				<div class="large-4 columns">
					<label>Date Attended</label>
					{{ Form::text('graddateattended', $applicant_info->graddateattended, ['class'=>'drp-element text-center radius', 'placeholder'=>'Date you Attend', 'id'=>'dp3']) }}
					@if ($errors->has('collegedateattended')) <small class="error">{{ $errors->first('collegedateattended') }}</small> @endif
				</div>
				
				<div class="large-4 columns">
					<label>Mo. & Yr. Of Graduation</label>
					{{ Form::text('gradgraduate_1', $applicant_info->gradgraduate_1, ['class'=>'drp-element text-center radius', 'placeholder'=>'Date you Graduated', 'id'=>'dp4']) }}
					@if ($errors->has('gradgraduate_1')) <small class="error">{{ $errors->first('gradgraduate_1') }}</small> @endif
				</div>
			</div>

			<br><br>
			<li class="separator separator-width"></li>

			<br><br>

			<div class="row">
				<div class="large-6 columns">
					<label>School (College School)</label>
					{{ Form::text('collegename', $applicant_info->collegename, ['class'=>'error text-center radius', 'placeholder'=>'Enter your School Name']) }}
					@if ($errors->has('collegename')) <small class="error">{{ $errors->first('collegename') }}</small> @endif
				</div>

				<div class="large-6 columns">
					<label>Degree / Concentration / Major</label>
					{{ Form::text('collegeeductitle', $applicant_info->collegeeductitle, ['class'=>'error text-center radius', 'placeholder'=>'Enter your Education Title']) }}
					@if ($errors->has('collegeeductitle')) <small class="error">{{ $errors->first('collegeeductitle') }}</small> @endif
				</div>
			</div>
			<br>
			<div class="row">
				<div class="large-4 columns">
					<label>Address</label>
					{{ Form::text('collegeschooladdress', $applicant_info->collegeschooladdress, ['class'=>'error text-center radius', 'placeholder'=>'Enter your School Address']) }}
					@if ($errors->has('collegeschooladdress')) <small class="error">{{ $errors->first('collegeschooladdress') }}</small> @endif
				</div>

				<div class="large-4 columns">
					<label>Date Attended</label>
					{{ Form::text('collegedateattended', $applicant_info->collegedateattended, ['class'=>'drp-element error text-center radius', 'placeholder'=>'Date you Attend', 'id'=>'dp5']) }}
					@if ($errors->has('collegedateattended')) <small class="error">{{ $errors->first('collegedateattended') }}</small> @endif
				</div>
				
				<div class="large-4 columns">
					<label>Mo. & Yr. Of Graduation</label>
					{{ Form::text('collegegraduate', $applicant_info->collegegraduate, ['class'=>'drp-element error text-center radius', 'placeholder'=>'Date you Graduated', 'id'=>'dp6']) }}
					@if ($errors->has('collegegraduate')) <small class="error">{{ $errors->first('collegegraduate') }}</small> @endif
				</div>
			</div>

			<br><br>
			<li class="separator separator-width"></li>
			<label class="left label-white rq-lbl"><i class="fi-alert icon-mrgn"> Required</i></label>
			<br><br>

			<div class="row">
				<div class="large-6 columns">
					<label>Name of School (Highschool)</label>
					{{ Form::text('hsname', $applicant_info->hsname, ['class'=>'error text-center radius', 'placeholder'=>'Enter your School Name']) }}
					@if ($errors->has('hsname')) <small class="error">{{ $errors->first('hsname') }}</small> @endif
				</div>

				<div class="large-6 columns">
					<label>Degree / Concentration / Major</label>
					{{ Form::text('hseductitle', $applicant_info->hseductitle, ['class'=>'error text-center radius', 'placeholder'=>'Enter your Education Title', 'disabled']) }}
					@if ($errors->has('hseductitle')) <small class="error">{{ $errors->first('hseductitle') }}</small> @endif
				</div>
			</div>
			<br>
			<div class="row">
				<div class="large-4 columns">
					<label>Address</label>
					{{ Form::text('hsschooladdress', $applicant_info->hsschooladdress, ['class'=>'error text-center radius', 'placeholder'=>'Enter your School Address']) }}
					@if ($errors->has('hsschooladdress')) <small class="error">{{ $errors->first('hsschooladdress') }}</small> @endif
				</div>

				<div class="large-4 columns">
					<label>Date Attended</label>
					{{ Form::text('hsdateattended', $applicant_info->hsdateattended, ['class'=>'drp-element error text-center radius', 'placeholder'=>'Date you Attend', 'id'=>'dp5']) }}
					@if ($errors->has('hsdateattended')) <small class="error">{{ $errors->first('hsdateattended') }}</small> @endif
				</div>
				
				<div class="large-4 columns">
					<label>Mo. & Yr. Of Graduation</label>
					{{ Form::text('hsgraduate', $applicant_info->hsgraduate, ['class'=>'drp-element error text-center radius', 'placeholder'=>'Date you Graduated', 'id'=>'dp6']) }}
					@if ($errors->has('hsgraduate')) <small class="error">{{ $errors->first('hsgraduate') }}</small> @endif
				</div>
			</div>
			<br><br>
		</div>
	</div>
</div>