<?php
?>



<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
<link rel="stylesheet" href="css/diagnosis.css">
<title>職業診断(PHP)</title>

</head>
<body>
	<!-- ヘッダーのフラグメントを挿入 -->
	<?php include("./header.php"); ?>
	<h2 class="note">設問の内容に対してチェックをつけていってね</h2>

	<div class="choose">
		<p>Q1</p>
		<div class="choose-question">
			<h1>困っている人を見ると放っておけない</h1>
		</div>

		<form action="/choose2.php" method="post" class="choose-question-answer">
		<label><input type="radio" name="answer1" value=1>はい</label>
		<label><input type="radio" name="answer1" value=0>いいえ</label>

			<p>Q2</p>
			<div class="choose-question">
				<h1>人と協力して何かをするのが好き</h1>
			</div>
			<label><input type="radio" name="answer2" value=1>はい</label>
			<label><input type="radio" name="answer2" value=0>いいえ</label>


			<p>Q3</p>
			<div class="choose-question">
				<h1>人や社会の役に立つことをしたい</h1>
			</div>
			<label><input type="radio" name="answer3" value=1>はい</label>
			<label><input type="radio" name="answer3" value=0>いいえ</label>


			<p>Q4</p>
			<div class="choose-question">
				<h1>人に何かを教えるのが得意</h1>
			</div>
			<label><input type="radio" name="answer4" value=1>はい</label>
			<label><input type="radio" name="answer4" value=0>いいえ</label>


			<p>Q5</p>
			<div class="choose-question">
				<h1>人から相談されることが多い</h1>
			</div>
			<label><input type="radio" name="answer5" value=1>はい</label>
			<label><input type="radio" name="answer5" value=0>いいえ</label>


			<p>Q6</p>
			<div class="choose-question">
				<h1>ボランティア活動に取り組んでいる</h1>
			</div>
			<label><input type="radio" name="answer6" value=1>はい</label>
			<label><input type="radio" name="answer6" value=0>いいえ</label>



			<p>Q7</p>
			<div class="choose-question">
				<h1>「ありがとう」と言われるのが幸せ！</h1>
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
