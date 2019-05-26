<?php session_start(); ?>

<!doctype html>
<?php require 'header.php'; ?>
	
	<?php

	
$pdo=new PDO('mysql:host=localhost;dbname=RPG;charset=utf8', 
	'staff', 'password');
if (isset($_SESSION['customer'])) {
	$id=$_SESSION['customer']['id'];
	$sql=$pdo->prepare('select * from customer where id!=? and login=?');
	$sql->execute([$id, $_REQUEST['login']]);
} else {
	$sql=$pdo->prepare('select * from customer where login=?');
	$sql->execute([$_REQUEST['login']]);
}
if (empty($sql->fetchAll())) {
	if (isset($_SESSION['customer'])) {
		$sql=$pdo->prepare('update customer set login=?, password=?, mail=?, skill_a=?, skill_b=?, skill_c=?, skill_per_a=?, skill_per_b=?, skill_per_c=?, sub=?, memo=?, attribute_a=?, attribute_b=?, attribute_c=? where id=?');
		$sql->execute([
			$_REQUEST['login'], $_REQUEST['password'], 
			$_REQUEST['mail'], $_REQUEST['skill_a'], $_REQUEST['skill_b'], $_REQUEST['skill_c'], $_REQUEST['skill_per_a'], $_REQUEST['skill_per_b'], $_REQUEST['skill_per_c'], $_REQUEST['sub'], $_REQUEST['memo'], $_REQUEST['attribute_a'], $_REQUEST['attribute_b'], $_REQUEST['attribute_c'], $id]);
		$_SESSION['customer']=[
			'id'=>$id, 'login'=>$_REQUEST['login'], 
			'password'=>$_REQUEST['password'], 'mail'=>$_REQUEST['mail'], 
			'skill_a'=>$_REQUEST['skill_a'], 'skill_b'=>$_REQUEST['skill_b'], 'skill_c'=>$_REQUEST['skill_c'], 'skill_per_a'=>$_REQUEST['skill_per_a'], 'skill_per_b'=>$_REQUEST['skill_per_b'], 'skill_per_c'=>$_REQUEST['skill_per_c'], 'sub'=>$_REQUEST['sub'], 'memo'=>$_REQUEST['memo'], 'attribute_a'=>$_REQUEST['attribute_a'], 'attribute_b'=>$_REQUEST['attribute_b'], 'attribute_c'=>$_REQUEST['attribute_c']];
		echo '<div class="text_center top">';
		echo '更新を完了しました。';
		echo '</div>';
	} else {
		$sql=$pdo->prepare('insert into customer values(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
		$sql->execute([
			$_REQUEST['login'], $_REQUEST['password'], 
			$_REQUEST['mail'], $_REQUEST['skill_a'], $_REQUEST['skill_b'], $_REQUEST['skill_c'], $_REQUEST['skill_per_a'], $_REQUEST['skill_per_b'], $_REQUEST['skill_per_c'],$_REQUEST['sub'], $_REQUEST['memo'], $_REQUEST['attribute_a'], $_REQUEST['attribute_b'], $_REQUEST['attribute_c']]);
		echo '<div class="center　bg_colore">';
		echo 'お客様情報を登録しました。';
		echo '</div>';
	}
} else {
	echo '<div class="center　bg_colore">';
	echo 'ログイン名がすでに使用されていますので、変更してください。';
	echo '</div>';
}
		?>		
	
<?php require 'footer.php'; ?>