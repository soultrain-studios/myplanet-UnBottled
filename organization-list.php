<?php include('header.php'); ?>
		<h1>Fundraiser organizations</h1>
		<p>Here's a list we've compiled of current, active fundraisers who are looking for donators and/or volunteers to help kick off some of their fundraising events!</p>
		
		<!-- List of organizations -->

		<div id="organization-list">
			
			<!-- List item: Taco bell -->
			<div class="organization-list-item" ng-repeat="org in WaterInfos">

				<div class="organization-logo">
					<img src="images/organizations/{{org.organization}}.jpg" />
				</div>

				<div class="organization-title">{{org.organization}}</div>

				<div class="organization-description-short">
					<p>{{org.info}}</p>
				</div>

				<div class="organization-more">
					<button type="button" class="btn btn-success">Learn more</button>
				</div>

			</div>

		</div>

<?php include('footer.php'); ?>