



<br>
<div class="large-12 columns large-centered">
	<div class="panel custom-panel-1 title-panel sticky fixed">
		<label class="size-22 label-title label-white">NorthStar Solutions Inc. 
			<span class="welcome-label label-white size-14">Logged in as :: {{ link_to('#', Auth::user()->firstname . ' ' . Auth::user()->lastname . ' ', [ 'id'=>'drp-bx' , 'class' => 'small', "data-dropdown"=>"drop1", "aria-controls"=>"drop1", "aria-expanded"=>"false", "class"=>"dropdown user", "data-options"=>"is_hover:true"]) }}</span>
		</label>

		<ul id="drop1" data-dropdown-content class="f-dropdown custom-dropdown-1" aria-hidden="true" tabindex="-1" >
			<li><a href="#" class="fi-key"> Change Password</a></li>
			<li>{{ link_to('logout', ' Logout', ['class'=>'fi-power']) }}</li>
		</ul>
	</div>
</div>
<br><br>
