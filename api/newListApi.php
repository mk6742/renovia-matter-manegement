<?php
require_once(__DIR__ . '/init.php');
header('Content-Type: application/json; charset=UTF-8');

$TOKEN = ensureValidToken($curlclass, $URL, $DB);

if (!$TOKEN) {
    echo json_encode(['error' => true, 'message' => 'トークン取得失敗']);
    exit;
}

$LAYOUT = '案件_web表示用';
$listLimit = 20;
$listResult = $curlclass->getrecords($URL, $DB, $LAYOUT, $TOKEN, $listLimit, 1);
$listRecords = $listResult['response']['data'] ?? [];

$curlclass->logout($URL, $DB, $TOKEN);

// レスポンス整形
$data = array_map(function ($r) {
    return [
        'kanriNo' => $r['fieldData']['n_管理番号'] ?? '',
        'name' => $r['fieldData']['t_契約者名'] ?? '',
        'date' => $r['fieldData']['作成情報タイムスタンプ'] ?? '',
    ];
}, $listRecords);

echo json_encode(['error' => false, 'records' => $data], JSON_UNESCAPED_UNICODE);
