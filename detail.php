<!doctype html>
<?php require 'header.php'; ?>
<div style="height: 100vh">
	<?php
	$pdo = new PDO( 'mysql:host=localhost;dbname=RPG;charset=utf8',
		'staff', 'password' );
	$sql = $pdo->prepare( 'select * from customer where id=?' );
	$sql->execute( [ $_REQUEST[ 'id' ] ] );

	foreach ( $sql as $row ) {


		echo '<form class="po_re">';

		echo '<div class="content_c">';
		echo '<section class="section_c">';
		echo '</section>';
		echo '</div>';

		echo '<p class="center login">', $row[ 'login' ], '</p>';


		echo '<div class="flex_box attribute">';
		echo '<p class="udemae_width">', $row[ 'attribute_a' ], '</p>';
		echo '<p class="udemae_width">', $row[ 'attribute_b' ], '</p>';
		echo '<p class="udemae_width">', htmlspecialchars( $row[ 'attribute_c' ] ), '</p>';
		echo '</div>';


		echo '<p class="text_jp sub">', $row[ 'sub' ], '</p>';

		echo '<figure class="figure">';
		echo '<img class="" src="img/image_a/', $row[ 'id' ], '.png">';
		echo '</figure>';


		echo '<div id="scene-2-content">';
		echo '<div class="charts clearfix skill_container">';

		echo '<div class="chart" id="ab_1">';
		echo '<div class="circle-mask-outer left">';
		echo '<div class="circle-mask-inner">';
		echo '<div class="circle-body">';
		echo '</div>';
		echo '</div>';
		echo '</div>';

		echo '<div class="circle-mask-outer right">';
		echo '<div class="circle-mask-inner">';
		echo '<div class="circle-body">';
		echo '</div>';
		echo '</div>';
		echo '</div>';

		echo '<div class="chart-content">';
		echo '<p class="icon icon_movile">', $row[ 'skill_a' ], '</p>';

		echo '<p class="text">';
		echo '<span class="percent-number">', $row[ 'skill_per_a' ], '</span>';
		echo '<span class="percent-symbol">%</span>';
		echo '</p>';
		echo '</div>';

		echo '</div>';



		echo '<div class="chart" id="ab_2">';
		echo '<div class="circle-mask-outer left">';
		echo '<div class="circle-mask-inner">';
		echo '<div class="circle-body">';
		echo '</div>';
		echo '</div>';
		echo '</div>';

		echo '<div class="circle-mask-outer right">';
		echo '<div class="circle-mask-inner">';
		echo '<div class="circle-body">';
		echo '</div>';
		echo '</div>';
		echo '</div>';

		echo '<div class="chart-content">';
		echo '<p class="icon icon_movile">', $row[ 'skill_b' ], '</p>';

		echo '<p class="text">';
		echo '<span class="percent-number">', $row[ 'skill_per_b' ], '</span>';
		echo '<span class="percent-symbol">%</span>';
		echo '</p>';
		echo '</div>';

		echo '</div>';






		echo '<div class="chart" id="ab_3">';
		echo '<div class="circle-mask-outer left">';
		echo '<div class="circle-mask-inner">';
		echo '<div class="circle-body">';
		echo '</div>';
		echo '</div>';
		echo '</div>';

		echo '<div class="circle-mask-outer right">';
		echo '<div class="circle-mask-inner">';
		echo '<div class="circle-body">';
		echo '</div>';
		echo '</div>';
		echo '</div>';

		echo '<div class="chart-content">';
		echo '<p class="icon icon_movile">', $row[ 'skill_c' ], '</p>';

		echo '<p class="text">';
		echo '<span class="percent-number">', $row[ 'skill_per_c' ], '</span>';
		echo '<span class="percent-symbol">%</span>';
		echo '</p>';
		echo '</div>';

		echo '</div>';

		echo '</div>';
		echo '</div>';


		echo '<div class="img_b_box">';

		echo '<div class="at_b">';
		echo '<figure class="attribute_figure">';
		echo '<img class="" src="img/attribute_sub/', $row[ 'attribute_b' ], '.png">';
		echo '</figure>';
		echo '</div>';



		echo '<p class="memo">';
		echo nl2br( $row[ 'memo' ] ), '</p>';

		echo '<div>';


		echo '<p class="mail">', $row[ 'mail' ], '</p>';




	}

	echo '</form>';

	echo '<div class="content_d">';
	echo '<section class="section_d">';
	echo '</section>';
	echo '<a href="show.php"><p class="back"><i class="fas fa-angle-left fa-fw fa-2x faa-passing-reverse animated"></i>back</p></a>';
	echo '</div>';



	?>
</div>
<?php require 'footer.php'; ?>