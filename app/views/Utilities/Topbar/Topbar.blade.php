



<br>
<div class="large-12 columns large-centered">
	<div class="panel radius custom-panel-1 panel-bg-white">
		<label class="size-22 label-title label-black">NorthStar Solutions Inc. <span class="welcome-label size-18">Logged in as ::{{ link_to('#', ' ' . Auth::user()->firstname . ' ' . Auth::user()->lastname, ['class' => 'small', "data-dropdown"=>"drop1", "aria-controls"=>"drop1", "aria-expanded"=>"false", "class"=>"dropdown"]) }}</label>
		<ul id="drop1" data-dropdown-content class="f-dropdown custom-dropdown-1" aria-hidden="true" tabindex="-1" >
			<li>{{ link_to('', ' New Applicants', ['class'=>'fi-torsos-all']) }}</li>
			<div class="separator"></div>
			<li><a href="#" class="fi-key"> Change Password</a></li>
			<li>{{ link_to('logout', ' Logout', ['class'=>'fi-power']) }}</li>
		</ul>
	</div>
</div>