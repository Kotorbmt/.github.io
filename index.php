<!-- php タグの前に書く方法 -->
<!DOCTYPE html>
<html lang="ja">
<head>
<?php

// echo で出力する方法
echo '<meta charset="UTF-8">';

// 文字列リテラルとして書く方法（このままでは出力されません）
$title = 'php で HTML を書く方法';

// 文字列操作でつなげることも出来ます
echo "<title>{$title}</title>";

// 一時的に php タグから脱出する方法
?>
</head>
<body>
<?php

// ヒアドキュメント で HTML を書く方法
$body = <<<HTML
Hello
World!
<script>
console.log('不正な処理');
</script>
HTML;

// 文字列を関数で加工して表示する方法
echo nl2br(htmlspecialchars($body));

// php タグの後に書く方法
?>
</body>
</html>
