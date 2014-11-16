


<!-- APPLICANT HEADER NAME -->
<div class="row">
	<div class="large-12 columns large-centered">
		<br>
		<h1 class="font-style-segoe label-black">
			{{$applicant_info->firstname . ' ' . $applicant_info->middle . ' ' . $applicant_info->lastname}} - 
			<a href="#" title="Edit Applicant's Information."><i class="foundicon-edit size-21"></i></a>
			<a href="#" title="Delete Applicant."><i class="general foundicon-trash size-21"></i></a>
			<i>{{ link_to('Mainpage', 'Homepage', ['class'=>'general foundicon-refresh size-21 push-4']) }}</i>
		</h1>
	</div>
</div>