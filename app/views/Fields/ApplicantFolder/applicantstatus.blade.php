



<br>
<div class="large-10 columns large-centered">
	@if($alert = Session::get('message'))
		<div data-alert class="alert-box panel success-panel radius">
			<label class="large-12 success">{{ $alert }}</label>
			<a href="#" class="close">&times;</a>
		</div>
		
	@endif
	<div class="panel radius panel-body">
		<div class="panel panel-header cus-pan-hd-3 radius">
			<label class="size-22 laravel-fnt large-10 label-mg-left label-ln-ht-1"># Applicant Status</label>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="large-4 columns">
					<label class="">Status:</label>
					{{ Form::Select('app_status', array('Pending...'=>'Pending...', 'Hired'=>'Hired', 'Rejected'=>'Rejected'), $applicant_info->status , array('class' => 'lHeight-1 label-black ')) }}
				</div>
				<div class="large-4 columns">
					<label class="pull-11">Employee ID#</label>
					{{ Form::text('employee_id', $applicant_info->employee_id, ["class"=>"pull-11", "placeholder"=>"Employee ID"]) }}
				</div>
			</div>
			<br>
		</div>
	</div>
</div>
<br>