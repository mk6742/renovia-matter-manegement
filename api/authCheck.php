<?php
session_start();
require_once(__DIR__ . '/init.php');

$token = $_SESSION['user']['token'] ?? null;

// トークンがない、または無効な可能性がある場合は再ログインを試みる
if (!$token) {
    $token = ensureValidToken($curlclass, $URL, $DB);
    if (!$token) {
        // JSON形式で返すページ（例：update.phpなど）ならこのままでも可
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
            echo json_encode(['status' => 'error', 'message' => '認証情報が無効です']);
            exit;
        } else {
            // 通常のHTMLページ（例：matter.phpなど）ならリダイレクト
            header('Location: index.php');
            exit;
        }
    }
}
