



<?php

	$ctr = 0;

?>

<div class="large-12 columns large-centered">	
	<div class="panel radius panel-body">
		<div class="panel panel-header-admin cus-pan-hd-3 radius">
			<label class="size-22 label-black large-12 label-ln-ht-1">List of Applicants</label>
		</div>
		<div class="panel-body">
			<div class="push-11 large-3">{{ $applicants->links() }}</div>
			<br>
			<div class="large-12 columns large-centered">
				<div class="row">
					<table id="example1" class="dtable large-12" style="border: none;">
						<thead style=" border-bottom-style: solid; border-bottom-width: 2px !important; background-color: transparent; border-bottom-color: #ddd; ">
							<tr class="text-center">
								<th class="text-center">#</th>
								<th class="text-center">Name</th>
								<th class="text-center">Applicant ID</th>
								<th class="text-center">Date Applied</th>
								<th class="text-center">Status</th>
							</tr>
						</thead>
						
						<tbody>
						@foreach($applicants as $applicant)
							<tr class=" table-format">
								<td class="text-center">{{Form::label('', ++$ctr, ['class'=>'size-14', 'id'=>'', 'name'=>'']) }}</td>
								<td class="text-center">{{ link_to('Applicant/'.$applicant->applicant_id.'/Profile', $applicant->firstname . ' ' . $applicant->middle . ' ' . $applicant->lastname, ['class'=>'size-14', 'id'=>'', 'name'=>''] ) }}</td>
								<td class="text-center">{{Form::label('', $applicant->applicant_id, ['class'=>'size-14', 'id'=>'', 'name'=>'']) }}</td>
								<td class="text-center">{{ Form::label('', date('F d, Y', strtotime($applicant->dateofapplication)), ['class'=>'size-14', 'id'=>'', 'name'=>'']) }}</td>
								<td class="text-center"><span class="warning radius label">Pending</span></td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>