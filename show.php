<?php session_start(); ?>

<!doctype html>
<?php require 'header.php'; ?>

		<?php
	echo '<div class="content_a">';
  echo'<section class="section_a">';
echo'<h1 class="center enter_log show">デジハリの酒場</h1>';

echo'</section>';
	  echo'</div>';

		if (!isset($_SESSION['customer'])) {
			echo '<div class="blankbox">';
				echo '<p class="center">ログインをしてください</p>';
		echo '</div>';	
		} else 
			{
			

			$pdo=new PDO('mysql:host=localhost;dbname=RPG;charset=utf8', 
				'staff', 'password');
			if (isset($_REQUEST['keyword'])) {
				$sql=$pdo->prepare('select * from customer where login like ?');
				
				$sql->execute(['%'.$_REQUEST['keyword'].'%']);
			} else {
				$sql=$pdo->prepare('select * from customer');
				$sql->execute([]);
			}
			
			foreach ($sql as $row) {
				$id=$row['id'];
				
echo '<form class="center mybox">';		
						
		echo '<a href="detail.php?id=', $id, '">';
	
				 echo '<p class="friend_udemae_width">',htmlspecialchars($row['login']), '</p>';
				
				 echo '<p class="friend_udemae_width">',htmlspecialchars($row['sub']), '</p>';

		echo'<div class="flex_box">';
				 echo '<p class="friend_udemae_width">',htmlspecialchars($row['attribute_a']), '</p>';

				 echo '<p class="friend_udemae_width">',htmlspecialchars($row['attribute_b']), '</p>';

				 echo '<p class="friend_udemae_width">',htmlspecialchars($row['attribute_c']), '</p>';
		echo'</div>';
				
		echo'<div class="at_c">';				
		 echo'<figure class="attribute_figure">';
		 echo '<img width="80" height="80"　class="" src="img/attribute_sub/', $row['attribute_b'], '.png">';
		 echo'</figure>';	
	echo'</div>';
				
				
		echo'</a>';
		
echo '</form>';
				
			}
			
			}

	echo '<div class="content_b">';
  echo '<section class="section_b">';
		
echo'</section>';
echo'</div>';
?>

<?php require 'footer.php'; ?>

