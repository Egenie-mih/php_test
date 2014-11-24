<form action="" method="post">
	<input type="text" name="title">
	<textarea name="content" id="" cols="30" rows="10"></textarea>
	<input type="submit">
</form>
<?php
if (!empty($_POST['title']) && !empty($_POST['content'])){

	$filename='post.php';
	$post_page = file_get_contents($filename);
	$post_page = $_POST['title'] ."\n\r\n\r----\n\r\n\r" . $_POST['content'] ."\n\r\n\r====\n\r\n\r" . $post_page;
	$post_page = file_put_contents($filename,$post_page);
	
}
