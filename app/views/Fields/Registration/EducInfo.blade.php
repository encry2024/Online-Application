



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
					{{ Form::text('gradschoolname', '', ['class'=>'error text-center radius', 'placeholder'=>'Enter your School Name']) }}
					@if ($errors->has('gradschoolname')) <small class="error fi-alert"> {{ $errors->first('gradschoolname') }}</small> @endif
				</div>

				<div class="large-6 columns">
					<label>Degree / Concentration / Major</label>
					{{ Form::text('gradeductitle', '', ['class'=>'error text-center radius', 'placeholder'=>'Enter your Education Title']) }}
					@if ($errors->has('gradeductitle')) <small class="error fi-alert"> {{ $errors->first('gradeductitle') }}</small> @endif
				</div>
			</div>

			<br>

			<div class="row">
				<div class="large-4 columns">
					<label>Address</label>
					{{ Form::text('gradschooladdress', '', ['class'=>'error text-center radius', 'placeholder'=>'Enter your School Address']) }}
					@if ($errors->has('gradschooladdress')) <small class="error fi-alert"> {{ $errors->first('gradschooladdress') }}</small> @endif
				</div>

				<div class="large-4 columns">
					<label>Date Attended</label>
					{{ Form::text('graddateattended', '', ['class'=>'drp-element error text-center radius', 'placeholder'=>'Date you Attend', 'id'=>'dp3']) }}
					@if ($errors->has('graddateattended')) <small class="error fi-alert"> {{ $errors->first('graddateattended') }}</small> @endif
				</div>
				
				<div class="large-4 columns">
					<label>Mo. & Yr. Of Graduation</label>
					{{ Form::text('gradgraduate_1', '', ['class'=>'drp-element error text-center radius', 'placeholder'=>'Date you Graduated', 'id'=>'dp4']) }}
					@if ($errors->has('gradgraduate_1')) <small class="error fi-alert"> {{ $errors->first('gradgraduate_1') }}</small> @endif
				</div>
			</div>

			<br><br>
			<li class="separator separator-width"></li>
			<br><br>

			<div class="row">
				<div class="large-6 columns">
					<label>School (College / University)</label>
					{{ Form::text('collegename', '', ['class'=>'error text-center radius', 'placeholder'=>'Enter your School Name']) }}
					@if ($errors->has('collegename')) <small class="error fi-alert"> {{ $errors->first('collegename') }}</small> @endif
				</div>

				<div class="large-6 columns">
					<label>Degree / Concentration / Major</label>
					{{ Form::text('collegeeductitle', '', ['class'=>'error text-center radius', 'placeholder'=>'Enter your Education Title']) }}
					@if ($errors->has('collegeeductitle')) <small class="error fi-alert"> {{ $errors->first('collegeeductitle') }}</small> @endif
				</div>
			</div>

			<div class="row">
				<div class="large-4 columns">
					<label>Address</label>
					{{ Form::text('collegeschooladdress', '', ['class'=>'error text-center radius', 'placeholder'=>'Enter your School Address']) }}
					@if ($errors->has('collegeschooladdress')) <small class="error fi-alert"> {{ $errors->first('collegeschooladdress') }}</small> @endif
				</div>

				<div class="large-4 columns">
					<label>Date Attended</label>
					{{ Form::text('collegedateattended', '', ['class'=>'drp-element error text-center radius', 'placeholder'=>'Date you Attend', 'id'=>'dp5']) }}
					@if ($errors->has('collegedateattended')) <small class="error fi-alert"> {{ $errors->first('collegedateattended') }}</small> @endif
				</div>
				
				<div class="large-4 columns">
					<label>Mo. & Yr. Of Graduation</label>
					{{ Form::text('collegegraduate', '', ['class'=>'drp-element error text-center radius', 'placeholder'=>'Date you Graduated', 'id'=>'dp6']) }}
					@if ($errors->has('collegegraduate')) <small class="error fi-alert"> {{ $errors->first('collegegraduate') }}</small> @endif
				</div>
			</div>

			<br><br>
			<li class="separator separator-width"></li>
			<label class="left label-white rq-lbl"><i class="fi-alert icon-mrgn"> Required</i></label>
			<br><br>

			<div class="row">
				<div class="large-6 columns">
					<label>Name of School (Highschool)</label>
					{{ Form::text('hsname', '', ['class'=>'error text-center radius', 'placeholder'=>'Enter your School Name']) }}
					@if ($errors->has('hsname')) <small class="error fi-alert"> {{ $errors->first('hsname') }}</small> @endif
				</div>

				<div class="large-6 columns">
					<label>Degree / Concentration / Major</label>
					{{ Form::text('hseductitle', '', ['class'=>'error text-center radius', 'placeholder'=>'Enter your Education Title', 'disabled']) }}
					@if ($errors->has('hseductitle')) <small class="error fi-alert"> {{ $errors->first('hseductitle') }}</small> @endif
				</div>
			</div>
			<br>
			<div class="row">
				<div class="large-4 columns">
					<label>Address</label>
					{{ Form::text('hsschooladdress', '', ['class'=>'error text-center radius', 'placeholder'=>'Enter your School Address']) }}
					@if ($errors->has('hsschooladdress')) <small class="error fi-alert"> {{ $errors->first('hsschooladdress') }}</small> @endif
				</div>

				<div class="large-4 columns">
					<label>Date Attended</label>
					{{ Form::text('hsdateattended', '', ['class'=>'drp-element error text-center radius', 'placeholder'=>'Date you Attend', 'id'=>'dp7']) }}
					@if ($errors->has('hsdateattended')) <small class="error fi-alert"> {{ $errors->first('hsdateattended') }}</small> @endif
				</div>
				
				<div class="large-4 columns">
					<label>Mo. & Yr. Of Graduation</label>
					{{ Form::text('hsgraduate', '', ['class'=>'drp-element error text-center radius', 'placeholder'=>'Date you Graduated', 'id'=>'dp8']) }}
					@if ($errors->has('hsgraduate')) <small class="error fi-alert"> {{ $errors->first('hsgraduate') }}</small> @endif
				</div>
			</div>
			<br><br>
		</div>
	</div>
</div>