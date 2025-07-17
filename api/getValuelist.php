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
$baseLayout = '案件_管理アポ';
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

// 他テーブル参照などカスタム値一覧取得を登録する配列
$customValuelistFetchers = [
    'クローザー氏名' => function () use ($curlclass, $URL, $DB, $token) {
        $layout = 'アカウント管理';
        $names = [];

        // 全件取得クエリ（空条件）
        $query = json_encode(['query' => []]);
        $res = $curlclass->find($URL, $DB, $layout, $token, $query);

        if (!empty($res['response']['data'])) {
            foreach ($res['response']['data'] as $rec) {
                $fd = $rec['fieldData'] ?? [];
                if (!empty($fd['tc_氏名'])) {
                    $names[] = $fd['tc_氏名'];
                }
            }
        }

        $names = array_unique($names);
        sort($names);

        return $names;
    },
    // 他の値一覧があればここに追加可能
];

// リクエストされたtypesにカスタム処理があれば実行
foreach ($types as $type) {
    if (!isset($results[$type]) && isset($customValuelistFetchers[$type])) {
        $results[$type] = $customValuelistFetchers[$type]();
    }
}

echo json_encode([
    'status' => 'success',
    'lists' => $results
]);
