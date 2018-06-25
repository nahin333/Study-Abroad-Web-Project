<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php include 'helpers/Format.php' ?>
<?php

	$db = new Database();
	$fm = new Format();

?>
<?php
	$search = $_GET['search'];	
?>
<?php
		$query = "select * from tbl_news where title like '%$search%' or body like '%$search%'";
		$news = $db->select($query);
		if($news){
?>
		<ul>
<?php			
			while($result = $news->fetch_assoc()){			
?>

			<li><a href="<?php echo $result['link']; ?>"><?php echo $fm->textShorten($result['body'],20); ?></a></li>
		
		
			<?php } ?>

		</ul>
		
		<?php } ?>		