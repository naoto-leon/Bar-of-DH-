<?php session_start(); ?>

<!doctype html>
<?php require 'header.php'; ?>

<?php
unset( $_SESSION[ 'customer' ] );
$pdo = new PDO( 'mysql:host=localhost;dbname=RPG;charset=utf8',
	'staff', 'password' );
$sql = $pdo->prepare( 'select * from customer where login=? and password=?' );
$sql->execute( [ $_REQUEST[ 'login' ], $_REQUEST[ 'password' ] ] );
foreach ( $sql as $row ) {
	$_SESSION[ 'customer' ] = [
		'id' => $row[ 'id' ], 'login' => $row[ 'login' ],
		'password' => $row[ 'password' ], 'mail' => $row[ 'mail' ],
		'skill_a' => $row[ 'skill_a' ], 'skill_b' => $row[ 'skill_b' ], 'skill_c' => $row[ 'skill_c' ], 'skill_per_a' => $row[ 'skill_per_a' ], 'skill_per_b' => $row[ 'skill_per_b' ], 'skill_per_c' => $row[ 'skill_per_c' ], 'sub' => $row[ 'sub' ], 'memo' => $row[ 'memo' ], 'attribute_a' => $row[ 'attribute_a' ], 'attribute_b' => $row[ 'attribute_b' ],
		'attribute_c' => $row[ 'attribute_c' ]
	];
}
if ( isset( $_SESSION[ 'customer' ] ) ) {
	echo '<div>';
	echo '<p class="center top_blank">';
	echo 'ようこそ、', $_SESSION[ 'customer' ][ 'login' ], 'さん';
	echo '</p>';
	echo '<div class="center acount_text">';
	echo '<a href="my-page.php"><i class="fas fa-chess-queen fa-fw fa-2x"></i>';
	echo '<p class="text_eight">My page</p>';
	echo '</a>';
	echo '</div>';

	echo '<div class="center acount_text">';
	echo '<a href="show.php"><i class="fas fa-glass-cheers fa-fw fa-2x"></i>';
	echo '<p class="text_eight">デジハリの酒場へ行く</p>';
	echo '</a>';
	echo '</div>';

} else {
	echo '<div class="center">';
	echo '<p class="top_blank">';
	echo 'ログイン名またはパスワードが違います。';
	echo '<p class="sample"><a href="login-input.php">戻る</a></p>';
	echo '</p>';

	echo '</div>';
}
?>



<?php require 'footer.php'; ?>