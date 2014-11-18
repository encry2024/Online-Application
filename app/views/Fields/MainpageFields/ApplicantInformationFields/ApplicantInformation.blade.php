


<!-- APPLICANT HEADER NAME -->
<div class="row">
	<div class="large-12 columns large-centered">
		<br>
		<h1 class="font-style-segoe label-black">
			{{$applicant_info->firstname . ' ' . $applicant_info->middle . ' ' . $applicant_info->lastname}}			<br>
			{{ Form::submit('Update', ['class'=>'tiny radius large-1 button']) }}
			{{ link_to('#', 'Delete', ['class'=>'tiny radius large-1 button']) }}
			<i>{{ link_to('Mainpage', 'Homepage', ['class'=>'general foundicon-refresh size-21 push-8 button tiny radius large-1']) }}</i>
		</h1>
	</div>
</div>