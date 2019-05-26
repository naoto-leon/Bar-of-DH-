<?php session_start(); ?>

<!doctype html>
<?php require 'header.php'; ?>


<div class="content_a">
	<section class="section_a">
		<h2 class="center enter_log">Login</h2>


	</section>
</div>




<form class="center bg-white bg_colore" action="login-output.php" method="post">

	<p class="login_box"><span class="sub_box_text_name"></span><span class="sub_box_input input_box"><input type="text" class="login_input" placeholder="ログイン名" name="login"></span>
	</p>
	<p class="login_box"><span class="sub_box_text_pass"></span><span class="sub_box_input input_box"><input type="password" class="login_input" placeholder="パスワード"  name="password"></span>
	</p>

	<i class="fab fa-fort-awesome-alt fa-fw fa-2x"></i>
	<p class="enter_submit"><input class="faa-float animated" type="submit" value="LOG IN">
	</p>

</form>

<div class="content_b">
	<section class="section_b">

	</section>
</div>

<section class="make_ac">
	<h2 class="acount">Make Acount</h2>
	<p class="acount_text center">酒場の入室には登録が必要です。</p>

	<div class="center bg_colore">
		<p class="heigh_ba">
			<a href="customer-input.php"><i class="fas fa-church fa-fw fa-2x "></i>
		</p>
		
		<p class="text_eight faa-float animated">Examination</p>		
	</a>
	</div>

</section>



<?php require 'footer.php'; ?>