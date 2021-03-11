<?php
$answerB = 0;
for($i = 1; $i <=7; $i ++){
	$answerB += $_POST["answer$i"];
}
// ===============確認用のecho=================
// echo "シートBの「はい」の数は".$answerB."<br>";
// echo "シートAの「はい」の数は".$_POST["resultA"];
// ===============確認用のecho=================
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
			<h1>ルールにはできるだけ従いたいほう</h1>
		</div>

		<form action="/choose4.php" method="post" class="choose-question-answer">
<!-- ============================過去シートのテータ================================ -->
		<input type="hidden" name="resultA" value=<?php echo $answerA;?>>
		<input type="hidden" name="resultB" value=<?php echo $answerB;?>>
<!-- ============================過去シートのテータ================================ -->
		<label><input type="radio" name="answer1" value=1>はい</label>
		<label><input type="radio" name="answer1" value=0>いいえ</label>

			<p>Q2</p>
			<div class="choose-question">
				<h1>お金の計算、管理が好き</h1>
			</div>
			<label><input type="radio" name="answer2" value=1>はい</label>
			<label><input type="radio" name="answer2" value=0>いいえ</label>

			<p>Q3</p>
			<div class="choose-question">
				<h1>テータや文書の作成・整理が得意</h1>
			</div>
			<label><input type="radio" name="answer3" value=1>はい</label>
			<label><input type="radio" name="answer3" value=0>いいえ</label>

			<p>Q4</p>
			<div class="choose-question">
				<h1>日記・ブログ更新など毎日続けていることがある</h1>
			</div>
			<label><input type="radio" name="answer4" value=1>はい</label>
			<label><input type="radio" name="answer4" value=0>いいえ</label>

			<p>Q5</p>
			<div class="choose-question">
				<h1>時間や締め切りを守るのは当然のことだ</h1>
			</div>
			<label><input type="radio" name="answer5" value=1>はい</label>
			<label><input type="radio" name="answer5" value=0>いいえ</label>

			<p>Q6</p>
			<div class="choose-question">
				<h1>けっこう小まめにメモを取る</h1>
			</div>
			<label><input type="radio" name="answer6" value=1>はい</label>
			<label><input type="radio" name="answer6" value=0>いいえ</label>

			<p>Q7</p>
			<div class="choose-question">
				<h1>何をするにも事前の準備・計算は欠かせない</h1>
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