<?php session_start(); ?>

<!doctype html>
<?php require 'header.php'; ?>




<?php

$login = $password = $mail = $skill_a = $skill_b = $skill_c = $skill_per_a = $skill_per_b = $skill_per_c = $sub = $memo = $attribute_a = $attribute_b = $attribute_c = '';
if ( isset( $_SESSION[ 'customer' ] ) ) {
	$login = $_SESSION[ 'customer' ][ 'login' ];
	$password = $_SESSION[ 'customer' ][ 'password' ];
	$mail = $_SESSION[ 'customer' ][ 'mail' ];
	$skill_a = $_SESSION[ 'customer' ][ 'skill_a' ];
	$skill_b = $_SESSION[ 'customer' ][ 'skill_b' ];
	$skill_c = $_SESSION[ 'customer' ][ 'skill_c' ];
	$skill_per_a = $_SESSION[ 'customer' ][ 'skill_per_a' ];
	$skill_per_b = $_SESSION[ 'customer' ][ 'skill_per_b' ];
	$skill_per_c = $_SESSION[ 'customer' ][ 'skill_per_c' ];
	$sub = $_SESSION[ 'customer' ][ 'sub' ];
	$memo = $_SESSION[ 'customer' ][ 'memo' ];
	$attribute_a = $_SESSION[ 'customer' ][ 'attribute_a' ];
	$attribute_b = $_SESSION[ 'customer' ][ 'attribute_b' ];
	$attribute_c = $_SESSION[ 'customer' ][ 'attribute_c' ];

}




echo '<div class="content_a">';
echo '<section class="section_a">';
echo '<h1 class="center enter_log">Examination</h1>';

echo '</section>';
echo '</div>';


echo '<form   class="center" action="customer-output.php" method="post">';

echo '<div class="mybox_2">';

echo '<div class="box_dub">';
echo '<span class="box-title">name</span>';
echo '<p><input class="kiso_width" type="text" name="login" placeholder="ログイン名になります"　value="', $login, '"></p>';
echo '</div>';

echo '<div class="box_dub">';
echo '<span class="box-title">password</span>';
echo '<p><input class="kiso_width" type="text" name="password" placeholder="パスワードを入力ください" value="', $password, '"></p>';
echo '</div>';

echo '<div class="box_dub">';
echo '<span class="box-title">mail</span>';
echo '<p><input class="kiso_width" type="text" name="mail" placeholder="連絡手段"　value="', $mail, '"></p>';
echo '</div>';

echo '</div>';

echo '<div class="mybox_3">';

echo '<p class="box_text">チームに貢献する際使用する能力と習得度を３つ記入ください。<br>技能に関わらずリーダシップや語学も記入可能です</p>';

echo '<div class="flex_box">';
echo '<div>';

echo '<div class="box_sim">';
echo '<p><input class="ability_width" type="text" name="skill_a" placeholder="例(営業力)" value="', $skill_a, '"></p>';
echo '</div>';

echo '<div class="box_sim">';
echo '<input class="ability_width" type="text" name="skill_b" placeholder="例(java)" value="', $skill_b, '">';
echo '</div>';

echo '<div class="box_sim">';
echo '<input class="ability_width" type="text" name="skill_c" placeholder="例(動画制作)"　value="', $skill_c, '">';
echo '</div>';
echo '</div>';

echo '<div>';

echo '<div class="box_per">';
echo '<input class="per_width" type="text" name="skill_per_a" placeholder="%"　value="', $skill_per_a, '">';
echo '</div>';

echo '<div class="box_per">';
echo '<input class="per_width" type="text" name="skill_per_b" placeholder="%" value="', $skill_per_b, '">';
echo '</div>';

echo '<div class="box_per">';
echo '<input class="per_width" type="text" name="skill_per_c" placeholder="%" value="', $skill_per_c, '">';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';


echo '<div class="mybox_4">';

echo '<p class="box_text">復活の呪文は自身を奮い立たせる言葉やチームへの呼びかけ、自身の売り込み文句を記入ください。</p>';

echo '<div class="box_magic">';
echo '<input class="magic_width" type="text" name="sub" placeholder="13文字以内推奨" value="', $sub, '">';
echo '</div>';
echo '</div>';

echo '<div class="mybox_5">';

echo '<p class="box_text">申し送り事項には自身の職歴、得意なことなど自身のアピールをしましょう。</p>';
echo '<div class="box_magic">';
echo '<textarea class="textarea"  name="memo" rows="6" cols="" wrap="hard" value="', $memo, '" ></textarea>';
echo '</div>';
echo '</div>';


echo '<div class="mybox_6">';

echo '<p class="box_text">ここから先はマスターからの質問になります。<br>記入漏れを確認し登録を押してください。</p>';



echo '<div class="box_q">';
echo '<div class="box_title_q">最適な休みの過ごし方は？</div>';
//echo'<p>';
echo '<select name="attribute_a">';
echo '<p>';
echo '<option value="愛を守りし">友人と楽しく過ごす</option>';
echo '<option value="逆鱗する">アウトドアや運動をして過ごす</option>';
echo '<option value="深淵に漂う">家で過ごす</option>';
echo '<option value="宿命を背負いし">自己投資や仕事に備える</option>';
echo '</p>';
echo '</select>';

echo '</div>';


echo '<div class="box_q">';
echo '<div class="box_title_q">人の心を傷つける武器は？</div>';
echo '<select name="attribute_b">';
echo '<p>';
echo '<option value="焔の">長いやりのような形</option>';
echo '<option value="雷の">マシンガンのような銃の形</option>';
echo '<option value="森の">カミソリのような小さい形</option>';
echo '<option value="氷の">針のような鋭利な形</option>';
echo '</p>';
echo '</select>';
echo '</div>';


echo '<div class="box_q">';
echo '<div class="box_title_q">プロジェクトに重要なのは？</div>';
echo '<select name="attribute_c">';
echo '<p>';
echo '<option value="勇者">高い目標と勢い</option>';
echo '<option value="ウィザード">知識や能力</option>';
echo '<option value="ヒーラー">チームワーク</option>';
echo '<option value="アサシン">計画性</option>';
echo '</p>';
echo '</select>';
echo '</div>';


echo '</div>';

echo '<input class="submit sample faa-float animated" type="submit" value="登録">';

echo '<div class="box_text">';
echo '<p>再度このページから更新が可能ですがアカウントイメージの変更はされません。</p>';
echo '<p>アカウントイメージの変更は登録から変更までお時間を頂いております。</p>';
echo '</div>';


echo '</form>';

echo '<div class="content_b">';
echo '<section class="section_b">';

echo '</section>';
echo '</div>';


?>


<?php require 'footer.php'; ?>