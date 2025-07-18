<?php


// ----- FileMaker Data API -----
require_once(__DIR__ . "/../cURL.php");
$curlclass = new cURLClass();

$URL    = 'https://app.nexus-fms.com';
$ID        = '';
$PW        = '';
$DB        = 'ASLESx'; // 必要に応じてカスタム App のファイル名(データベース名)を指定
$AUTH    = base64_encode($ID . ':' . $PW);


function ensureValidToken($curlclass, $URL, $DB)
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // セッションに認証情報がなければエラー
    if (empty($_SESSION['user']['auth'])) {
        return false;
    }

    // トークンを再取得
    $AUTH = $_SESSION['user']['auth'];
    $token = $curlclass->login($URL, $DB, $AUTH);

    if ($token) {
        $_SESSION['user']['token'] = $token;
        return $token;
    } else {
        return false;
    }
}
