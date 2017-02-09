<?php
require_once('src/twitterOauth.php');
$consumer_key = 'qCYf3bD5AhxXcu8C3jxi4UwWd';
$consumer_secret = 'OVnQY1ODIVUJWuGj0o2xn8JttfCzxmcHo7V2nCWFZysatY45Hl';
$app_addr = 'https://kichihei6.github.io';
session_start($consumer_key, $consumer_secret,$_SESSION['request_token'], $_SESSION['request_token_secret']);

// アクセス・トークンを取得
$token = $client->getAccessToken($_GET['oauth_verifier']);

if (empty($token['oauth_token'])) {
	/*
	 * アクセス・トークンがなければ、何らかの理由で取得失敗した。
	 * もう一度リクエスト・トークンを生成して認証を試みる。
	 */
}

$_SESSION['access_token'] = $token['oauth_token'];
$_SESSION['access_token_secret'] = $token['oauth_token_secret'];

echo ($token['access_token']);
echo ($token['oauth_token_secret']);
?>
