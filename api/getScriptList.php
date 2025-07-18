<?php
require_once(__DIR__ . '/init.php');

header('Content-Type: application/json; charset=UTF-8');

// トークン取得（ログイン）
$TOKEN = ensureValidToken($curlclass, $URL, $DB);

if (!$TOKEN) {
    echo json_encode(['error' => true, 'message' => 'トークン取得に失敗しました。ログイン状態を確認してください。']);
    exit;
}

// スクリプト一覧を取得
$response = $curlclass->getScriptList($URL, $DB, $TOKEN);

// 結果をJSONで返す（整形付き）
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// トークンの破棄は任意（何度もAPI使うなら不要）
$curlclass->logout($URL, $DB, $TOKEN);
