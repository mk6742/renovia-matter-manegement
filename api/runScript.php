<?php
require_once(__DIR__ . '/init.php');
header('Content-Type: application/json');

$LAYOUT = '案件_web表示用';

// JSON POSTの内容を取得
$input = json_decode(file_get_contents('php://input'), true);
$scriptName = $input['script'] ?? '';
$param = $input['param'] ?? '';

if (empty($scriptName)) {
    echo json_encode(['error' => 'Script name is required']);
    exit;
}

$TOKEN = ensureValidToken($curlclass, $URL, $DB);
if (!$TOKEN) {
    echo json_encode(['error' => 'Token is invalid']);
    exit;
}

// スクリプト実行
$response = $curlclass->runScript($URL, $DB, $TOKEN, $LAYOUT, $scriptName, $param);

echo json_encode($response);
