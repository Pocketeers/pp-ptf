<?php
//include external php file
include'getviewpost.php';
include'getnavigation.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<Title>workwork</Title>


	<?php
	//include head php file
	include'_head.php';
	?>

</head>

<body>

	<!-- _navigation -->
	<?php
	include '_navigation.php';
	?>



	<div class="container">

		<!-- echo $_GET['id'] is for displaying all the selected value with selected id only-->
		<input type="hidden" name="post_id" value="<?php echo $_GET['post_id']; ?>"/>

		<a href="/">Back to all jobs</a>
		<div id="job-ad-display">
			<div class="row">
				<div class="col-md-9">

					<h1 class="job-title">
						<?php echo $postinfo['work']; ?>
					</h1>

					<h2 class="job-employer">
						<?php echo $postinfo['employer'];?>
					</h2>

					<div class="job-location">
						<?php echo $postinfo['company_address']; ?>
					</div>

					<div class="job-city">
						<?php echo $postinfo['city']; ?>
					</div>

					<div class="job-state">
						<?php echo $postinfo['state']; ?>
					</div>

					<small class="job-publish-date">Posted on
						<?php  $fromMYSQL = $postinfo['date_posted'];
						echo date("j F, Y", strtotime($fromMYSQL)); ?>
					</small>
				</div>

				<div class="col-md-3">
					<div class="card">
						<div class="card-header">
							<div class="job-category small">
								<?php echo $postinfo['jobcat']; ?>
							</div>
						</div>
						<div class="card-block">
							<div class="job-salary">
								<?php echo "<sup class='currency'>RM</sup>" .$postinfo['salary']." <sub class='salary-rate-type'>/ ".$postinfo['salary_rate']."</sub>" ?>
							</div>
							<br>
							<?php
							echo "<br>".$apply;
							?>
						</div>
					</div>
					<!-- /card -->

				</div>
			</div>

			<!-- job content -->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<!-- job details -->
					<div class="job-details m-b-3">
						<div class="job-scope m-b-2">
							<?php echo $postinfo['scope']; ?>
						</div>

						<div class="job-info m-b-2">
							<h5>Additional information</h5>
							<?php echo $postinfo['addinfo']; ?>
						</div>
					</div>

					<!-- end job details -->



					<!-- company details -->
					<div class="company-info m-b-3">
						<h4>About <?php echo $postinfo['employer'];?></h4>
						<div class="job-company m-b-1">
							<?php echo $postinfo['company_info']; ?>
						</div>

						<div class="company-address m-b-1">
							<h5>Address</h5>
							<div class="job-location">
								<?php echo $postinfo['company_address']; ?>
							</div>

							<div class="job-city">
								<?php echo $postinfo['city']; ?>
							</div>

							<div class="job-state">
								<?php echo $postinfo['state']; ?>
							</div>

							<div class="job-postcode">
								<?php echo $postinfo['postcode']; ?>
							</div>

							<div class="job-city">
								<?php echo $postinfo['country']; ?>
							</div>
						</div>
					</div>
					<!-- end company details -->

				</div>
			</div>
			<!-- end job content -->
		</div>
	</div> <!-- /.container -->




	<?php
	//include scripts php file
	include'_scripts.php';
	include'_footer.php';
	?>

</body>



</html>
