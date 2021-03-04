<?php
$answerE = 0;
for($i = 1; $i <=7; $i ++){
	$answerE += $_POST["answer$i"];
}
// ===============確認用のecho=================
echo "シートEの「はい」の数は".$answerE."<br>";
echo "シートDの「はい」の数は".$_POST["resultD"]."<br>";
echo "シートCの「はい」の数は".$_POST["resultC"]."<br>";
echo "シートBの「はい」の数は".$_POST["resultB"]."<br>";
echo "シートAの「はい」の数は".$_POST["resultA"]."<br>";
// ===============確認用のecho=================
$answerA = $_POST["resultA"];
$answerB = $_POST["resultB"];
$answerC = $_POST["resultC"];
$answerD = $_POST["resultD"];
?>



<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
<link rel="stylesheet" href="css/diagnosis.css">
<title>職業診断</title>

</head>
<body>
	<!-- ヘッダーのフラグメントを挿入 -->
	<?php include("./header.php"); ?>
	<h2 class="note">設問の内容に対してチェックをつけていってね</h2>

	<div class="choose">
		<p>Q1</p>
		<div class="choose-question">
			<h1>ひとつのことをとことん研究するのが好き</h1>
		</div>

		<form action="/answer.php" method="post" class="choose-question-answer">
		<!-- ============================過去シートのテータ================================ -->
		<input type="hidden" name="resultA" value=<?php echo $answerA;?>>
		<input type="hidden" name="resultB" value=<?php echo $answerB;?>>
		<input type="hidden" name="resultC" value=<?php echo $answerC;?>>
		<input type="hidden" name="resultD" value=<?php echo $answerD;?>>
		<input type="hidden" name="resultE" value=<?php echo $answerE;?>>
<!-- ============================過去シートのテータ================================ -->
		<label><input type="radio" name="answer1" value=1>はい</label>
		<label><input type="radio" name="answer1" value=0>いいえ</label>

			<p>Q2</p>
			<div class="choose-question">
				<h1>誰も知らない新しい事実を発見したい</h1>
			</div>
			<label><input type="radio" name="answer2" value=1>はい</label>
			<label><input type="radio" name="answer2" value=0>いいえ</label>

			<p>Q3</p>
			<div class="choose-question">
				<h1>昔から、理数系の勉強は得意だった</h1>
			</div>
			<label><input type="radio" name="answer3" value=1>はい</label>
			<label><input type="radio" name="answer3" value=0>いいえ</label>

			<p>Q4</p>
			<div class="choose-question">
				<h1>「もし〜なものが会ったら」とよく考える</h1>
			</div>
			<label><input type="radio" name="answer4" value=1>はい</label>
			<label><input type="radio" name="answer4" value=0>いいえ</label>

			<p>Q5</p>
			<div class="choose-question">
				<h1>自分の価値を実証してみたい</h1>
			</div>
			<label><input type="radio" name="answer5" value=1>はい</label>
			<label><input type="radio" name="answer5" value=0>いいえ</label>

			<p>Q6</p>
			<div class="choose-question">
				<h1>正直、〇〇オタクと呼べるかも</h1>
			</div>
			<label><input type="radio" name="answer6" value=1>はい</label>
			<label><input type="radio" name="answer6" value=0>いいえ</label>

			<p>Q7</p>
			<div class="choose-question">
				<h1>ひとりで考える時間は必ず確保したい</h1>
			</div>
			<label><input type="radio" name="answer7" value=1>はい</label>
			<label><input type="radio" name="answer7" value=0>いいえ</label><br>
			<input type="submit" value="送信">

		</form>




	</div>
	<!-- フッターのフラグメントを挿入 -->
	<?php include("./hooter.php"); ?>

</body>
</html>