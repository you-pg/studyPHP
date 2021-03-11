<?php

echo $_POST["result"];
$result = $_POST["result"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
<link rel="stylesheet" href="css/diagnosis.css">
<title>職業一覧ビデオページ</title>
</head>
<body>
	
	<!-- ヘッダーのフラグメントを挿入 -->
	<?php include("./header.php"); ?>

<div class="video">
<?php
if($result == "A"){

echo '<h2> 医療、介護職 </h2>
<div class="video_answer">
				<iframe  width="600" height="300"
					src="https://www.youtube.com/embed/kFwgDfmAink" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe>';

echo 	'<h2> インストラクター、教育系 </h2>
				<iframe width="600" height="300"
					src="https://www.youtube.com/embed/NMB9nbtJuk8" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
			</iframe>';

echo '<h2> コールセンター、カウンセリング職 </h2>
				<iframe width="600" height="300"
					src="https://www.youtube.com/embed/eUOXSfEg8t8" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe></div>';



}elseif($result == "B"){
echo '<h2> 管理職全般 </h2>
				<iframe width="600" height="300"
					src="https://www.youtube.com/embed/giunAIgMCgg" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe>';

echo '<h2> 営業、企画、人事・労務 </h2>
				<iframe width="600" height="300"
					src="https://www.youtube.com/embed/U9le9RupONQ" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe>';

echo '<h2> 起業家 </h2>
				<iframe width="600" height="300"
					src="https://www.youtube.com/embed/68Kj4-Fr6KA" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe>';


}elseif($result == "C"){
echo '<h2> 一般事務、経理 </h2>
				<iframe width="600" height="300"
					src="https://www.youtube.com/embed/M0iO4EI_cOs" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe>';

echo '<h2> 秘書、税理士 </h2>
				<iframe width="600" height="300"
					src="https://www.youtube.com/embed/EBzJhbMdBJw" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe>';

echo '<h2> 数字やデータ処理系 </h2>
				<iframe width="600" height="300"
					src="https://www.youtube.com/embed/uWpBQA5KSfk" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe>';


}elseif($result == "D"){
echo '<h2> 商品開発 </h2>
				<iframe width="600" height="300"
					src="https://www.youtube.com/embed/lwCdrO5xM2I" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe>';

echo '<h2> 美容師 </h2>
				<iframe width="600" height="300"
					src="https://www.youtube.com/embed/ZJpbvYqTHdk" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe>';

echo '<h2> デザイナー </h2>
				<iframe width="600" height="300"
					src="https://www.youtube.com/embed/4FiClVKW5L0" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe>';


}	elseif($result == "E"){
echo '<h2> プログラマー、CADオペレーター </h2>
				<iframe width="600" height="300"
					src="https://www.youtube.com/embed/4ycF689sfCY" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe>';

echo '<h2> 歯科技師 </h2>
				<iframe width="600" height="300"
					src="https://www.youtube.com/embed/GhVYm9syKRU" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe>';

echo '<h2> トリマー </h2>
				<iframe width="600" height="300"
					src="https://www.youtube.com/embed/z7FOfe-mrLE" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe>';


}elseif($result == "F"){
echo '<h2> 医師 </h2>
				<iframe width="600" height="300"
					src="https://www.youtube.com/embed/z4hPWGiaq9Y" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe>';

echo '<h2> 研究者 </h2>
				<iframe width="600" height="300"
					src="https://www.youtube.com/embed/kgOTlX1htjk" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe>';

echo '<h2> SE(システムエンジニア) </h2>
				<iframe th:if="${systemengineers}" width="600" height="300"
					src="https://www.youtube.com/embed/Ob_eykQMsPw" frameborder="0"
					allow="accelerometer;
					autoplay;
					encrypted-media; gyroscope; 
					picture-in-picture"
					allowfullscreen="allowfullscreen"> 
				</iframe>';
}
?>
</div>


<div class="thankyou">
	<p>このアプリはここまでになります。触っていただきありがとうございました。</p>
</div>

	<!-- フッターのフラグメントを挿入 -->
	<?php include("./hooter.php"); ?>
</body>
</html>