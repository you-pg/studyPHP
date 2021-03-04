<?php
$answerA = 0;
for($i = 1; $i <=7; $i ++){
	$answerA += $_POST["answer$i"];
}
//確認後は削除していいですよ。
// ================確認用のecho===================
echo "シートAの「はい」の数は".$answerA;
// ================確認用のecho===================
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
			<h1>グループ中ではなぜかリーダーになってしまう</h1>
		</div>

		<form action="/choose3.php" method="post" class="choose-question-answer">
<!-- ============================過去シートのテータ================================ -->
		<input type="hidden" name="resultA" value=<?php echo $answerA;?>>
<!-- ============================過去シートのテータ================================ -->

		
		<label><input type="radio" name="answer1" value=1>はい</label>
		<label><input type="radio" name="answer1" value=0>いいえ</label>

			<p>Q2</p>
			<div class="choose-question">
				<h1>人や社会人に対して影響力を持ちたい</h1>
			</div>
			<label><input type="radio" name="answer2" value=1>はい</label>
			<label><input type="radio" name="answer2" value=0>いいえ</label>

			<p>Q3</p>
			<div class="choose-question">
				<h1>実は政治家に興味があるかも</h1>
			</div>
			<label><input type="radio" name="answer3" value=1>はい</label>
			<label><input type="radio" name="answer3" value=0>いいえ</label>

			<p>Q4</p>
			<div class="choose-question">
				<h1>どうすれば組織・グループの利益になるか考えている</h1>
			</div>
			<label><input type="radio" name="answer4" value=1>はい</label>
			<label><input type="radio" name="answer4" value=0>いいえ</label>

			<p>Q5</p>
			<div class="choose-question">
				<h1>いつかは企業したい、または会社のトップになりたい</h1>
			</div>
			<label><input type="radio" name="answer5" value=1>はい</label>
			<label><input type="radio" name="answer5" value=0>いいえ</label>

			<p>Q6</p>
			<div class="choose-question">
				<h1>新規事業やプロジェクトの企画に興味がある</h1>
			</div>
			<label><input type="radio" name="answer6" value=1>はい</label>
			<label><input type="radio" name="answer6" value=0>いいえ</label>

			<p>Q7</p>
			<div class="choose-question">
				<h1>人と競争するとつい燃えてしまう</h1>
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