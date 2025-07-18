<?php
require_once(__DIR__ . '/init.php');

header('Content-Type: application/json');

$LAYOUT = '案件_web表示用'; // ここでレイアウトを明示的に指定

// パラメータ取得
$scriptName = $_GET['script'] ?? '';
$param = $_GET['param'] ?? '';

if (empty($scriptName)) {
    echo json_encode(['error' => 'Script name is required']);
    exit;
}

// トークン取得または更新
$TOKEN = ensureValidToken($curlclass, $URL, $DB);
if (!$TOKEN) {
    echo json_encode(['error' => 'Token is invalid']);
    exit;
}

// スクリプト実行
$response = $curlclass->runScript($URL, $DB, $TOKEN, $LAYOUT, $scriptName, $param);

echo json_encode($response);
