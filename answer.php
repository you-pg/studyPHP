<?php
$answerF = 0;
for($i = 1; $i <=7; $i ++){
	$answerF += $_POST["answer$i"];
}

// ===============確認用のecho=================
// echo "シートEの「はい」の数は".$answerF."<br>";
// echo "シートEの「はい」の数は".$_POST["resultE"]."<br>";
// echo "シートDの「はい」の数は".$_POST["resultD"]."<br>";
// echo "シートCの「はい」の数は".$_POST["resultC"]."<br>";
// echo "シートBの「はい」の数は".$_POST["resultB"]."<br>";
// echo "シートAの「はい」の数は".$_POST["resultA"]."<br>";
// ===============確認用のecho=================
$answerA = $_POST["resultA"];
$answerB = $_POST["resultB"];
$answerC = $_POST["resultC"];
$answerD = $_POST["resultD"];
$answerE = $_POST["resultE"];

$Score = array($answerA,$answerB,$answerC,$answerD,$answerE,$answerF);

$maxScore = 0;
for($i = 0 ; $i < count($Score); $i++){
	if($maxScore < $Score[$i]){
		$maxScore = $Score[$i];
	}
}

// ====================最大シートの確認====================
// echo "最大のシートは".$maxScore;
// ====================最大シートの確認====================
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

	<div class="answer">
		
			<h1><?php 
			if($maxScore == $answerA){
				echo "あなたは「サポーター」タイプ";
				$view = "A";
			}elseif($maxScore == $answerB){
				echo "あなたは「リーダー」タイプ";
				$view = "B";
			}elseif($maxScore == $answerC){
				echo "あなたは「事務管理」タイプ";
				$view = "C";
			}elseif($maxScore == $answerD){
				echo "あなたは「アーティスト」タイプ";
				$view = "D";
			}elseif($maxScore == $answerE){
				echo "あなたは「職人」タイプ";
				$view = "E";
			}elseif($maxScore == $answerF){
				echo "あなたは「研究者」タイプ";
				$view = "F";
			}
			?></h1>

		<div class="comment">

			<p><?php
			$ranking;
			if($maxScore == $answerA){
				$ranking = array("医療、介護職","インストラクター、教育職","コールセンター、カウンセリング職");

				echo "あなたは人と接し、相手が喜んでくれることや、誰かの役に立つことに喜びを感じるタイプ。自分の利益を追求するよりも人をサポートし、その人が幸せになることで、あなた自身もハッピーになるのでは？ 社会貢献やボランティア活動などへの意識も高く、人に何かを教えることも好きなはず。ただ、いつも周囲の人間関係や友人関係に気を配って、どこか気疲れしてしまうことが多いかもしれません。利益や売り上げの数字を重視する風土の組織では、ストレスが溜まることも少なくないでしょう。おすすめは誰かをサポートする医療や介護系などの職種。これに向けた資格を目指してみては。";

			}elseif($maxScore == $answerB){
				$ranking = array("管理職全般","営業、企画、人事・労務","起業家");

				echo "あなたは組織の中でリーダーシップを取って、目的に向かって邁進していくことに喜びを感じるタイプ。組織をまとめたり、企業経営にも関心が高く、積極的に昇進・昇格したいと思っている傾向もあるよう。自信家で周囲からは指導力があると言われることも多く、社外でも高い社会的地位を得たいと思っていない？ 話術にも長けており、他人と議論をしても、多くの場合は相手を説き伏せて自分の意見を通すみたい。内心そのことに喜びを感じている人が多そう。独立志向も持つあなたは、経営に役立つ中小企業診断士、MBAといった難しい資格にチャレンジもしてみて！";

			}elseif($maxScore == $answerC){
				$ranking = array("一般事務、経理","秘書、税理士","数字やデータ処理系");

				echo "あなたはデータ、情報、文書などを一定の決まりに従って処理する仕事に強みを発揮するタイプ。クリエイティブな作業はあまり得意ではないのでは？ 物事を正確に記録したり、整理したりする能力は高く、仕事のスキルを熟練させて高めていくことに喜びを感じる人が多いようです。変化の多い仕事よりも、ルーティンワークのほうが落ち着いて取り組めるはず。ルールが明確ではっきりしていることを好み、曖昧なことは好きではない傾向も。周囲との人間関係に気を配り、自らがトラブルの原因となることは比較的少ないあなたにピッタリな仕事は事務職系です。";

			}elseif($maxScore == $answerD){
				$ranking = array("商品開発","美容師","デザイナー");

				echo "あなたは既成概念に縛られることのない、自由な発想力で人を楽しませたり、驚かせたりすることを好むタイプ。自分で何かを創造することに強い興味を持つ反面、ルーティンワークはあまり好きではないのでは？他人の指示に忠実に動く必要のある仕事は不得手で、細かな決まり事のある組織にいると、居心地悪く感じてしまうかもしれません。「美しいもの」に高い価値観を見いだす人が多く、同じタイプの人とは高く共感し合う人が多いようです。普段から感性をみがきながらも、業務に必要な知識を補完する資格にチャレンジしてみては？";

			}elseif($maxScore == $answerE){
				$ranking = array("プログラマー、CADオペレーター","歯科技師","トリマー");

				echo "あなたは自分のペースでコツコツと何かをやり遂げることを好むタイプ。機械やモノを対象とする仕事への関心が高く、気になるキーワードは「持続的」「実利的」「シンプル」など。料理やクルマの運転、日曜大工など、道具を使いこなすことも得意でしょう。金銭や上下関係、社会的な地位など、分かりやすい基準を尊重する傾向もあるようです。獣医など動物相手の根気が必要な仕事にも向いているはずです。ただこのタイプには、対人関係を作っていくのが比較的苦手な人も目立ちます。営業や販売などは避けたほうがいいと言えるでしょう。";

			}elseif($maxScore == $answerF){
				$ranking = array("医師","研究者","SE(システムエンジニア)");

				echo "あなたはひとりで思索にふけったり、様々な仮説を頭の中で組み立てることが好きなタイプ。あまり感情をむき出しにすることはなく、学者肌でどちらかというと理数系の分野が得意な人が多いはず。仕事の選択においても、売り上げをどんどん伸ばすことよりは、徹底的に調査や研究をするなど、自己の能力が存分に発揮できるかどうかを優先したいと考えているのでは？また、このタイプには合理的で、筋道を立てて実証的に物事を考えることを好む人も目立ちます。何かを分析したり、検証しながら組み立てていく仕事を選んでみましょう";
			}
			?></p>
		</div>
		<img src="images/image2/Suc.jpg" alt="職業画">
	</div>

	<div class="Recommended">
	
	<article>
			<h3>そんなあなたにはこんな職業がおすすめ</h3>

			<div class="ranking">
			<?php 
			for($i = 0; $i < count($ranking); $i++){
				echo "<ul><li>{$ranking[$i]}</li></ul>";
			}
				?>
			</div>
		</article>
	</div>
	<div class="video_post">
		<form action="/video.php" method="post">
		<input type="hidden" name="result" value=<?php echo $view; ?>>
		<input type ="submit" value="おすすめの仕事を見てみよう">
		</form>
	</div>
	<!-- フッターのフラグメントを挿入 -->
	<?php include("./hooter.php"); ?>
</body>
</html>