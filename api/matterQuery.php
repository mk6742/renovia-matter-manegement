<?php
$TOKEN = $curlclass->login($URL, $DB, $AUTH);
$LAYOUT = '案件_web表示用';

$field = $_GET['field'] ?? '';
$keyword = $_GET['keyword'] ?? '';

if (!empty($field) && !empty($keyword)) {
    $postFields = json_encode([
        'query' => [[$field => $keyword]],
        'limit' => $limit,
        'offset' => $offset,
        'sort' => [
            ['fieldName' => 'n_管理番号', 'sortOrder' => 'descend']
        ],
    ]);
    $result = $curlclass->find($URL, $DB, $LAYOUT, $TOKEN, $postFields);
} else {
    $result = $curlclass->getrecords($URL, $DB, $LAYOUT, $TOKEN, $limit, $offset);
}

// 一覧表示用（最大20件）
$listLimit = 20;
$listResult = $curlclass->getrecords($URL, $DB, $LAYOUT, $TOKEN, $listLimit, 1);
$listRecords = $listResult['response']['data'] ?? [];


$curlclass->logout($URL, $DB, $TOKEN);

$records = $result['response']['data'] ?? [];
if (isset($result['messages'][0]['code']) && $result['messages'][0]['code'] === '401') {
    $records = [];
}
