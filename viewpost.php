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
			<!-- job header -->
			<div class="row">
				<div class="col-md-9">
					<h1 class="job-title">
						<?php echo $postinfo['work']; ?>
					</h1>

					<!--date("d M", strtotime($fromMYSQL))
					$fromMYSQL = $postinfo['date_posted']; -->

					<h2 class="job-employer">
						<?php echo $postinfo['employer'];?>
					</h2>

					<div class="job-location">
						<?php echo $postinfo['location']; ?>
					</div>

					<div class="job-locationcat">
						<?php echo $postinfo['loccat']; ?>
					</div>

					<small class="job-publish-date">
						Posted on
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
							<?php
							echo "<br>".$apply;
							?>
						</div>
					</div>
					<!-- /card -->
				</div>
			</div>
			<!-- end job header -->

			<!-- job content -->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<div class="job-scope">
						<?php echo $postinfo['scope']; ?>
					</div>
					<div class="job-info">
						<?php echo $postinfo['addinfo']; ?>
					</div>
				</div>
			</div>

			<!-- end job content -->

		</div>
	</div>



	<?php
	//include scripts php file
	include'_scripts.php';
	include'_footer.php';
	?>

</body>



</html>
