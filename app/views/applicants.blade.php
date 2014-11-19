<?php

	$ctr = 0;

?>
<div class="push-11 large-3">{{ $applicants->links() }}</div>
<br>
<div class="large-12 columns large-centered">
	<div class="row">
		<table id="example1" class="dtable" class="large-12">
			<thead>
				<tr class="text-center">
					<th>#</th>
					<th>Name</th>
					<th>ID</th>
					<th>Status</th>
					<th>Date Applied</th>
				</tr>
			</thead>
			
			<tbody>
			@foreach($applicants as $applicant)
				<tr>
					<td>{{Form::label('', ++$ctr, ['class'=>'size-14', 'id'=>'', 'name'=>'']) }}</td>
					<td>{{ link_to('Applicant/'.$applicant->applicant_id.'/Profile', $applicant->firstname . ' ' . $applicant->middle . ' ' . $applicant->lastname, ['class'=>'size-14', 'id'=>'', 'name'=>''] ) }}</td>
					<td>{{Form::label('', $applicant->applicant_id, ['class'=>'size-14', 'id'=>'', 'name'=>'']) }}</td>
					<td></td>
					<td>{{ Form::label('', $applicant->dateofapplication, ['class'=>'size-14', 'id'=>'', 'name'=>'']) }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>

