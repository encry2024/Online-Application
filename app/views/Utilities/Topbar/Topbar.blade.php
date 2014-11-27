



<br>
<div class="large-12 columns large-centered">
	<div class="panel custom-panel-1 panel-bg-white sticky fixed">
		<label class="size-22 label-title label-black">NorthStar Solutions Inc. 
			<span class="welcome-label size-14">Logged in as ::{{ link_to('#', ' ' . Auth::user()->firstname . ' ' . Auth::user()->lastname . ' ', [ 'id'=>'drp-bx' , 'class' => 'small', "data-dropdown"=>"drop1", "aria-controls"=>"drop1", "aria-expanded"=>"false", "class"=>"dropdown", "data-options"=>"is_hover:true"]) }}</span>
		</label>

		<ul id="drop1" data-dropdown-content class="f-dropdown custom-dropdown-1" aria-hidden="true" tabindex="-1" >
			<li>
				<div id="retriever">
					<a href="#" id="notifLink" class="fi-torsos-all" data-reveal-id="myModal"> New Applicants
					<span class="badge" id="notifBadge"></span>
					</a>
				</div>
			</li>
			<div class="separator"></div>
			<li><a href="#" class="fi-key"> Change Password</a></li>
			<li>{{ link_to('logout', ' Logout', ['class'=>'fi-power']) }}</li>
		</ul>
	</div>
</div>
<br><br>
