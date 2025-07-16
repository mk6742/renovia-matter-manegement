<?php
// 日付変換関数 ------------------------------------------------------------------------
function formatDateForInput($rawDate)
{
    if (empty($rawDate)) return '';

    // 試すフォーマットを配列で用意
    $formats = ['Y-m-d', 'm/d/Y', 'n/j/Y', 'Y/n/j']; // 追加で柔軟に

    foreach ($formats as $format) {
        $dateObj = DateTime::createFromFormat($format, $rawDate);
        if ($dateObj !== false) {
            return $dateObj->format('Y-m-d');
        }
    }

    // 直接 strtotime() で変換できる形式にも対応
    $timestamp = strtotime($rawDate);
    if ($timestamp !== false) {
        return date('Y-m-d', $timestamp);
    }

    // パース失敗なら空文字
    return '';
}


// 時間変換関数 ------------------------------------------------------------------------
function formatTimeJP($rawTime)
{
    if (empty($rawTime)) return '';

    // H:i:s 形式を期待して変換（例：14:00:00 → 14:00）
    $timeObj = DateTime::createFromFormat('H:i:s', $rawTime);
    if ($timeObj !== false) {
        return $timeObj->format('G:i'); // 先頭0なし
    }

    // フォーマットに合わない場合はそのまま出力（HTMLエスケープ）
    return htmlspecialchars($rawTime, ENT_QUOTES, 'UTF-8');
}
