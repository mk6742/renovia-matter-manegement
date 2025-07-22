<?php
require_once(__DIR__ . '/init.php');
header('Content-Type: application/json');

$typesParam = $_GET['types'] ?? '';
$types = array_filter(array_map('trim', explode(',', $typesParam)));

$results = [];
$token = $_SESSION['user']['token'] ?? '';

// トークンチェック＆更新（必要に応じて実装してください）
if (!$curlclass->isTokenValid($URL, $DB, $token)) {
    $token = ensureValidToken($curlclass, $URL, $DB);
    $_SESSION['user']['token'] = $token;
}

// 既存の値一覧を取得するレイアウト名（valueListsを取得）
$baseLayout = '案件_web表示用';
$baseUrl = "$URL/fmi/data/vLatest/databases/$DB/layouts/" . urlencode($baseLayout);

$res = $curlclass->get($baseUrl, [
    "Authorization: Bearer $token",
    "Content-Type: application/json"
]);

if (!empty($res['response']['valueLists'])) {
    foreach ($res['response']['valueLists'] as $valuelist) {
        $name = $valuelist['name'] ?? '';
        if (in_array($name, $types)) {
            $results[$name] = array_map(fn($item) => $item['value'] ?? '', $valuelist['values'] ?? []);
        }
    }
}


echo json_encode([
    'status' => 'success',
    'lists' => $results
]);
