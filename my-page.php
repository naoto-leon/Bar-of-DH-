<?php session_start(); ?>

<!doctype html>

<?php require 'header.php'; ?>
<div style="height: 100vh">
	<?php


	if ( !isset( $_SESSION[ 'customer' ] ) ) {
		echo '<div class="blankbox">';
		echo '<p class="center">ログインをしてください</p>';
		echo '</div>';
	} else {

		echo '<form class="po_re">';

		echo '<div class="content_c">';
		echo '<section class="section_c">';
		echo '</section>';
		echo '</div>';

		echo '<p class="center login">', $_SESSION[ 'customer' ][ 'login' ], '</p>';


		echo '<div class="flex_box attribute">';
		echo '<p class="udemae_width">', $_SESSION[ 'customer' ][ 'attribute_a' ], '</p>';
		echo '<p class="udemae_width">', $_SESSION[ 'customer' ][ 'attribute_b' ], '</p>';
		echo '<p class="udemae_width">', htmlspecialchars( $_SESSION[ 'customer' ][ 'attribute_c' ] ), '</p>';
		echo '</div>';


		echo '<p class="text_jp sub">', $_SESSION[ 'customer' ][ 'sub' ], '</p>';

		echo '<figure class="figure">';
		echo '<img src="img/image_a/', $_SESSION[ 'customer' ][ 'id' ], '.png">';
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
		echo '<p class="icon icon_movile">', $_SESSION[ 'customer' ][ 'skill_a' ], '</p>';

		echo '<p class="text">';
		echo '<span class="percent-number">', $_SESSION[ 'customer' ][ 'skill_per_a' ], '</span>';
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
		echo '<p class="icon icon_movile">', $_SESSION[ 'customer' ][ 'skill_b' ], '</p>';

		echo '<p class="text">';
		echo '<span class="percent-number">', $_SESSION[ 'customer' ][ 'skill_per_b' ], '</span>';
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
		echo '<p class="icon icon_movile">', $_SESSION[ 'customer' ][ 'skill_c' ], '</p>';

		echo '<p class="text">';
		echo '<span class="percent-number">', $_SESSION[ 'customer' ][ 'skill_per_c' ], '</span>';
		echo '<span class="percent-symbol">%</span>';
		echo '</p>';
		echo '</div>';

		echo '</div>';

		echo '</div>';
		echo '</div>';


		echo '<div class="img_b_box">';

		echo '<div class="at_b">';
		echo '<figure class="attribute_figure">';
		echo '<img class="" src="img/attribute_sub/', $_SESSION[ 'customer' ][ 'attribute_b' ], '.png">';
		echo '</figure>';
		echo '</div>';



		echo '<p class="memo">';
		echo nl2br( $_SESSION[ 'customer' ][ 'memo' ] ), '</p>';

		echo '<div>';


		echo '<p class="mail">', $_SESSION[ 'customer' ][ 'mail' ], '</p>';




	}

	echo '</form>';

	echo '<div class="content_d">';
	echo '<section class="section_d">';
	echo '</section>';
	echo '</div>';
	?>
</div>
<?php require 'footer.php'; ?>