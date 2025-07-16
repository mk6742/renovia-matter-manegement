<?php
require_once(__DIR__ . '/init.php');
header('Content-Type: application/json');

$typesParam = $_GET['types'] ?? '';
$types = array_filter(explode(',', $typesParam));

// レイアウト指定（値一覧取得にはレイアウト名が必要）
$LAYOUT = '案件_管理アポ';

$results = [];
$token = $_SESSION['user']['token'] ?? '';

// トークンチェック
if (!$curlclass->isTokenValid($URL, $DB, $token)) {
    $token = ensureValidToken($curlclass, $URL, $DB);
    $_SESSION['user']['token'] = $token;
}

// 値一覧の一括取得（1回で全部取る）
$url = "$URL/fmi/data/vLatest/databases/$DB/layouts/" . urlencode($LAYOUT);
$res = $curlclass->get($url, [
    "Authorization: Bearer $token",
    "Content-Type: application/json"
]);

if (!empty($res['response']['valueLists'])) {
    foreach ($res['response']['valueLists'] as $valuelist) {
        $name = $valuelist['name'] ?? '';
        if (in_array($name, $types)) {
            $results[$name] = array_map(function ($item) {
                return $item['value'] ?? '';
            }, $valuelist['values'] ?? []);
        }
    }
}

echo json_encode([
    'status' => 'success',
    'lists' => $results
]);
