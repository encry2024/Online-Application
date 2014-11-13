<?php

	$ctr = 0;

?>


<div class="large-11 small-12 columns push-1">
	<div class="row">
		<div class="large-11 small-12 right	">
			<table class="large-12" id="stream_table">
				<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Status</th>
					<th>Date Applied</th>
				</tr>
				</thead>

				<tbody>
				@foreach($applicants as $applicant)
					<tr>
						<td>{{Form::label('', ++$ctr, ['class'=>'size-14', 'id'=>'', 'name'=>'']) }}</td>
						<td>{{ link_to('', $applicant->firstname . ' ' . $applicant->middle . ' ' . $applicant->lastname, ['class'=>'size-14', 'id'=>'', 'name'=>''] ) }}</td>
						<td></td>
						<td>{{ Form::label('', $applicant->dateofapplication, ['class'=>'size-14', 'id'=>'', 'name'=>'']) }}</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>