<?php include('header.php'); ?>

	<!-- <div class="organization-description">
		<button type="button" class="btn btn-success">Donate to this organization</button>
	</div> -->

	<ul ng-repeat="org in WaterInfos">
		<p>{{org.organization}}</p>
    <!-- 	<li>{{org.organization}}<br>{{org.info}} <br>{{org.donate}}</li> -->
    </ul>

<?php include('footer.php'); ?>



