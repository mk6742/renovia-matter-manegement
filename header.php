<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title ?? 'notitle') ?></title>
    <meta name="description" content="<?= htmlspecialchars($description ?? 'nodesc') ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./css/style.css">
</head>



<!-- 時間統一 -->
<?php
function formatDateForInput($rawDate)
{
    if (empty($rawDate)) return '';

    // 試すフォーマットを配列で用意
    $formats = ['m/d/Y'];

    foreach ($formats as $format) {
        $dateObj = DateTime::createFromFormat($format, $rawDate);
        if ($dateObj !== false) {
            return $dateObj->format('Y-m-d');
        }
    }
    // パース失敗なら空文字
    return '';
}
?>