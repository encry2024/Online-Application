




<div class="large-12 columns large-centered">
	<div class="panel radius custom-panel-1 panel-bg-white sticky fixed">
		<label class="size-22 label-title label-black">{{ $applicant_info->firstname }} {{ $applicant_info->middle }} {{ $applicant_info->lastname }} 
		<span class="welcome-label size-18">
			<button class="button button-bg label-black button-bg-sb right font-style-segoe tiny" style=" margin-top: -1.2rem; font-size: 13px; " type="submit">
				<i class="fi-pencil"></i>
				<span>Update</span>
			</button>
			{{ link_to('Mainpage', ' Homepage', ['class'=>'fi-home button button-bg label-black button-bg-sb right font-style-segoe tiny homepage-link']) }}
		</label>
		<ul id="drop1" data-dropdown-content class="f-dropdown custom-dropdown-1" aria-hidden="true" tabindex="-1" >
			<li>{{ link_to('', ' New Applicants', ['class'=>'fi-torsos-all']) }}</li>
			<div class="separator"></div>
			<li><a href="#" class="fi-key"> Change Password</a></li>
			<li>{{ link_to('logout', ' Logout', ['class'=>'fi-power']) }}</li>
		</ul>
	</div>
</div>
<br><br>