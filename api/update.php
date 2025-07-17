<?php

require_once(__DIR__ . '/authCheck.php');
header('Content-Type: application/json');

$recordId = $_POST['recordId'] ?? '';
$fieldName = $_POST['fieldName'] ?? '';
$fieldValue = $_POST['fieldValue'] ?? '';
$token = $_SESSION['user']['token'] ?? '';

if (!$recordId || !$fieldName || $token === '') {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => '不正なデータです']);
    exit;
}

$LAYOUT = '案件_管理アポ';

$postFields = json_encode([
    'fieldData' => [
        $fieldName => $fieldValue
    ]
]);

if (!$curlclass->isTokenValid($URL, $DB, $token)) {
    $token = ensureValidToken($curlclass, $URL, $DB);
    $_SESSION['user']['token'] = $token;
}

$result = $curlclass->edit($URL, $DB, $LAYOUT, $recordId, $token, $postFields);


if (isset($result['messages']) && $result['messages'][0]['code'] !== '0') {
    echo json_encode([
        'status' => 'error',
        'message' => '保存失敗',
        'response' => $result
    ]);
} else {
    echo json_encode([
        'status' => 'success',
        'message' => '保存成功',
        'response' => $result
    ]);
}
exit;
