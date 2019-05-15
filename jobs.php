<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php';?>
<?php include 'helpers/format_helpers.php'; ?>
<?php include 'includes/styles.php'; ?>

<?php
   $db 		= new Database();
   $query 	= "SELECT * FROM categories";
   $result 	= $db->select($query);

   if(isset($_GET['id']))
   	{
		$id = $_GET['id'];
	   	//Select Jobs matching category
	   	$query2 = "SELECT * FROM jobs WHERE category_id = '$id'";
	   	$result2 = $db->select($query2);
   	}
 	else
	{
		$query2 = "SELECT * FROM jobs";
		$result2 = $db->select($query2);
	}
?>
<?php if($result2): ?>
<div class="container containerMarginTop">
    <div id="category_block" class="col-xs-12 category_block center">
		<ul>
			<?php while($row = $result->fetch_assoc()): ?>
				<li>
					<a href="jobs.php?id=<?php echo $row['id']; ?>">
						<?php echo $row['name']; ?>
					</a>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
	<div class="col-sm-12">
		<h1 class="center">Job Listing</h1>
			<ul id="listings">
				<?php while ($row = $result2->fetch_assoc()): ?>
					<li>
						<div class="type">
							<span class="green">
								<?php echo $row['job_type']; ?>
							</span>
						</div>
						<div class="description">
							<a href="job.php?id=<?php echo $row['id']; ?>"><h1><?php echo $row['title']; ?></h1></a>
							<p>
								<?php echo shortText($row['description'],200); ?>
							</p>
						</div>
					</li>
				<?php endwhile;  ?>
			</ul>
	</div>
</div>
<?php else : ?>
	<div class="col-xs-12 containerMarginTop center">
		<h2>There are no jobs in this field</h2>
		<p>
			<a href="jobs.php" role="button">Browse more jobs</a>
		</p>
	</div>
<?php endif; ?>
<?php include 'includes/footer.php'; ?>