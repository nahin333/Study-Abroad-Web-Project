<?php include 'inc/header.php'; ?>
<?php

	if(isset($_GET['delaccount']))
	{
		$delaccount = $_GET['delaccount'];
	}

?>

<?php

	$query = "delete from tbl_user where id = '$delaccount'";
	$delQuery = $db->delete($query);
	if($delQuery)
	{
		header("Location:admin.php");
	}

?>