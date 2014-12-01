




<div class="large-12 columns large-centered">
	<div class="panel custom-panel-1 title-panel sticky fixed">
		<label class="size-22 label-title label-white">Applicant: {{ $applicant_info->firstname }} {{ $applicant_info->middle }} {{ $applicant_info->lastname }} 
		</label>
		<span class="welcome-label size-18">
			{{ link_to('Mainpage', ' Homepage', ['class'=>'radius fi-home button a-bg title-button right tiny homepage-link' ]) }}
			<button class="radius button button-bg title-button right tiny" style=" margin-top: -1rem; font-size: 13px; " type="submit">
				<i class="fi-pencil"></i>
				<span>Update</span>
			</button>
		</span>
		<ul id="drop1" data-dropdown-content class="f-dropdown custom-dropdown-1" aria-hidden="true" tabindex="-1" >
			<li>{{ link_to('', ' New Applicants', ['class'=>'fi-torsos-all']) }}</li>
			<div class="separator"></div>
			<li><a href="#" class="fi-key"> Change Password</a></li>
			<li>{{ link_to('logout', ' Logout', ['class'=>'fi-power']) }}</li>
		</ul>
	</div>
</div>
<br><br>