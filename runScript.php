<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');

require_once(__DIR__ . '/api/init.php');
require_once(__DIR__ . 'cURL.php');

$input = json_decode(file_get_contents('php://input'), true);
$script = $input['script'] ?? '';
$param = $input['param'] ?? '';

if (empty($script)) {
    echo json_encode(['status' => 'error', 'message' => 'スクリプト名が指定されていません']);
    exit;
}

$response = $curlclass->script($URL, $DB, $LAYOUT, $TOKEN, $script, $param);

if (!is_array($response)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'FileMaker APIから無効なレスポンス',
        'raw' => $response
    ]);
    exit;
}

if (isset($response['messages'][0]['code']) && $response['messages'][0]['code'] === '0') {
    echo json_encode(['status' => 'success', 'message' => 'スクリプト実行成功']);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'スクリプト実行失敗',
        'response' => $response
    ]);
}
