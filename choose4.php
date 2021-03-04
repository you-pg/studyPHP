<?php
$answerC = 0;
for($i = 1; $i <=7; $i ++){
	$answerC += $_POST["answer$i"];
}
// ===============確認用のecho=================
echo "シートCの「はい」の数は".$answerC."<br>";
echo "シートBの「はい」の数は".$_POST["resultB"]."<br>";
echo "シートAの「はい」の数は".$_POST["resultA"]."<br>";
// ===============確認用のecho=================
$answerB = $_POST["resultB"];
$answerA = $_POST["resultA"];

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
			<h1>人が驚くようなことを考えるのが得意</h1>
		</div>

		<form action="/choose5.php" method="post" class="choose-question-answer">
		<!-- ============================過去シートのテータ================================ -->
		<input type="hidden" name="resultA" value=<?php echo $answerA;?>>
		<input type="hidden" name="resultB" value=<?php echo $answerB;?>>
		<input type="hidden" name="resultC" value=<?php echo $answerC;?>>
<!-- ============================過去シートのテータ================================ -->
		<label><input type="radio" name="answer1" value=1>はい</label>
		<label><input type="radio" name="answer1" value=0>いいえ</label>

			<p>Q2</p>
			<div class="choose-question">
				<h1>芸術的センス（絵を描く、文書を書く、写真を撮る、楽器を演奏するなど）に自信がある</h1>
			</div>
			<label><input type="radio" name="answer2" value=1>はい</label>
			<label><input type="radio" name="answer2" value=0>いいえ</label>

			<p>Q3</p>
			<div class="choose-question">
				<h1>何よりもオリジナリティーを重視する</h1>
			</div>
			<label><input type="radio" name="answer3" value=1>はい</label>
			<label><input type="radio" name="answer3" value=0>いいえ</label>

			<p>Q4</p>
			<div class="choose-question">
				<h1>既成概念に縛られずに行動する</h1>
			</div>
			<label><input type="radio" name="answer4" value=1>はい</label>
			<label><input type="radio" name="answer4" value=0>いいえ</label>

			<p>Q5</p>
			<div class="choose-question">
				<h1>人をきれいにしたり、楽しませたりしたい</h1>
			</div>
			<label><input type="radio" name="answer5" value=1>はい</label>
			<label><input type="radio" name="answer5" value=0>いいえ</label>

			<p>Q6</p>
			<div class="choose-question">
				<h1>何をするにも自分なりの工夫を加える</h1>
			</div>
			<label><input type="radio" name="answer6" value=1>はい</label>
			<label><input type="radio" name="answer6" value=0>いいえ</label>

			<p>Q7</p>
			<div class="choose-question">
				<h1>「個性的」と言われるのが快感！</h1>
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