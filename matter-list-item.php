<?php foreach ($records as $record):
    require_once(__DIR__ . '/functions.php');
?>

    <div class="p-matter__center__record-list__item" data-record-id="<?= $record['recordId'] ?>">
        <div class="p-matter__center__record-list__item__main">
            <div class="p-matter__center__record-list__item__main__heading">
                <div class="p-matter__center__record-list__item__main__heading__left">
                    <span>
                        <img src="./img/man.svg" alt="">
                    </span>
                    <div class="p-matter__center__record-list__item__main__heading__left__texts">
                        <div class="p-matter__center__record-list__item__main__heading__left__texts__name">
                            <p><?= htmlspecialchars($record['fieldData']['t_契約者名カナ'] ?? '') ?></p>
                            <p><?= htmlspecialchars($record['fieldData']['t_契約者名'] ?? '') ?></p>
                        </div>

                        <div class="p-matter__center__record-list__item__main__heading__left__texts__number">
                            <p>管理番号：<?= htmlspecialchars($record['fieldData']['n_管理番号'] ?? '') ?></p>
                        </div>
                    </div>
                </div>

                <div class="p-matter__center__record-list__item__main__heading__right">
                    <div class="p-matter__center__record-list__item__main__heading__right__status">
                        <div class="p-matter__center__record-list__item__main__heading__right__status__item">
                            <span>ステータス：</span>
                            <p>
                                <?= htmlspecialchars($record['fieldData']['t_エントリーステータス'] ?? '') ?>
                            </p>
                        </div>
                        <div class="p-matter__center__record-list__item__main__heading__right__status__item">
                            <span>サブステータス：</span>
                            <p>
                                <?= htmlspecialchars($record['fieldData']['t_サブエントリーステータス'] ?? '') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-matter__center__record-list__item__main__contents">

                <!-- メインのパネル -->
                <div class="p-matter__center__record-list__item__main__contents__left">
                    <div class="p-matter__center__record-list__item__main__contents__left__tab">
                        <ul class="p-matter__center__record-list__item__main__contents__left__tab__btn">
                            <li class="is-active">アポ情報</li>
                            <li>アトカク情報</li>
                            <li>キャンセル理由</li>
                        </ul>

                        <div class="p-matter__center__record-list__item__main__contents__left__tab__panel">
                            <!-- アポ情報 -->
                            <table class="is-active">
                                <tr>
                                    <td>コール希望日：</td>
                                    <td>
                                        <input type="date" class="editable" name="d_アポイント希望日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_アポイント希望日'] ?? '')) ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>コール希望時間：</td>
                                    <td>
                                        <input type="time" class="editable" name="ti_アポイント希望時間1" value="<?= htmlspecialchars(formatTimeJP($record['fieldData']['ti_アポイント希望時間1'] ?? '')) ?>"> ~ <input type="time" class="editable" name="ti_アポイント希望時間2" value="<?= htmlspecialchars(formatTimeJP($record['fieldData']['ti_アポイント希望時間2'] ?? '')) ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>築年数：</td>
                                    <td>
                                        <input type="text" class="editable" name="t_築年数" value="<?= htmlspecialchars($record['fieldData']['t_築年数'] ?? '') ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>アポ種別：</td>
                                    <td>
                                        <select class="editable" name="t_アポ種別" data-valuelist="アポ種別">
                                            <option value="<?= htmlspecialchars($record['fieldData']['t_アポ種別']) ?>"></option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>保険会社：</td>
                                    <td>
                                        <select class="editable" name="t_保険会社証書" data-valuelist="保険会社証書">
                                            <option value="<?= htmlspecialchars($record['fieldData']['t_保険会社証書']) ?>"></option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>付箋案件：</td>
                                    <td>
                                        <div class="editable-checkbox"
                                            data-valuelist="付箋案件"
                                            data-name="t_付箋案件"
                                            data-selected="<?= htmlspecialchars($record['fieldData']['t_付箋案件'] ?? '') ?>"
                                            data-original-value=""
                                            style="font-size: 0;">
                                        </div>
                                        <button class="fm-script-btn" data-script="LINE付箋" data-param="">📃LINE付箋</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>お客様情報：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['t_アポイント備考'] ?? '') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ネガ：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['t_ネガ'] ?? '') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ネガ返し：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['t_ネガ返し'] ?? '') ?>
                                    </td>
                                </tr>
                            </table>

                            <!-- アトカク情報 -->
                            <table>
                                <tr>
                                    <td>アトカク担当者：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['d_確認電話担当者'] ?? '') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>現地調査予定日：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['d_現地調査予定日'] ?? '') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>訪問時間：</td>
                                    <td>
                                        <?php
                                        $rawTime = $record['fieldData']['ti_現地調査時間1'] ?? '';

                                        $formattedTime = '';
                                        if (!empty($rawTime)) {
                                            $timeObj = DateTime::createFromFormat('H:i:s', $rawTime);
                                            $formattedTime = $timeObj ? $timeObj->format('G:i') : htmlspecialchars($rawTime);
                                        }

                                        echo $formattedTime;
                                        ?> ~
                                        <?php
                                        $rawTime = $record['fieldData']['ti_現地調査時間2'] ?? '';

                                        $formattedTime = '';
                                        if (!empty($rawTime)) {
                                            $timeObj = DateTime::createFromFormat('H:i:s', $rawTime);
                                            $formattedTime = $timeObj ? $timeObj->format('G:i') : htmlspecialchars($rawTime);
                                        }
                                        echo $formattedTime;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>現地調査完了日：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['d_現地調査完了日'] ?? '') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>備考：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['t_アトカク備考'] ?? '') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>年齢層：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['t_年齢層'] ?? '') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>受注日：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['d_受注日'] ?? '') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>アトカク者メモ：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['t_アポイントmemo'] ?? '') ?>
                                    </td>
                                </tr>
                            </table>

                            <!-- キャンセル情報 -->
                            <table>
                                <tr>
                                    <td>アトカクキャンセル日：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['d_アトカク現調前キャンセル日'] ?? '') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>現調前キャンセル日：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['d_現調前キャンセル日'] ?? '') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>現調以降キャンセル日：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['d_現調以降キャンセル日'] ?? '') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>クロージング以降キャンセル日：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['d_クロージング以降キャンセル日'] ?? '') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>キャンセルセグメント：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['t_キャンセルセグメント'] ?? '') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>キャンセル理由詳細：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['t_キャンセル理由'] ?? '') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>受注日：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['d_受注日'] ?? '') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>アトカク者メモ：</td>
                                    <td>
                                        <?= htmlspecialchars($record['fieldData']['t_アポイントmemo'] ?? '') ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- 基本情報 -->
                <div class="p-matter__center__record-list__item__main__contents__right">
                    <div class="p-matter__center__record-list__item__main__contents__right__info">

                        <!-- 情報1　受付日等 -->
                        <table>
                            <tr>
                                <td>受付日：</td>
                                <td>
                                    <input type="date" class="editable" name="d_受付日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_受付日'] ?? '')) ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>受付時間：</td>
                                <td>
                                    <input type="time" class="editable" name="ti_受付時間" value="<?= htmlspecialchars(formatTimeJP($record['fieldData']['ti_受付時間'] ?? '')) ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>アポ担当者：</td>
                                <td>
                                    <select class="editable" name="t_アポ担当者" data-valuelist="担当者一覧">
                                        <option value="<?= htmlspecialchars($record['fieldData']['t_アポ担当者']) ?>"></option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>支店：</td>
                                <td>
                                    <input type="text" class="editable" name="t_支店判別" value="<?= htmlspecialchars($record['fieldData']['t_支店判別'] ?? '') ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Web区分：</td>
                                <td>
                                    <select class="editable" name="t_web区分" data-valuelist="web区分">
                                        <option value="<?= htmlspecialchars($record['fieldData']['t_web区分']) ?>"></option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>確認者：</td>
                                <td>
                                    <input type="text" class="editable" name="t_確認者" value="<?= htmlspecialchars($record['fieldData']['t_確認者'] ?? '') ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>固定電話：</td>
                                <td>
                                    <input type="text" class="editable" name="t_固定電話番号" value="<?= htmlspecialchars($record['fieldData']['t_固定電話番号'] ?? '') ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>携帯電話：</td>
                                <td>
                                    <input type="text" class="editable" name="t_携帯電話番号" value="<?= htmlspecialchars($record['fieldData']['t_携帯電話番号'] ?? '') ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>メールアドレス：</td>
                                <td>
                                    <textarea class="editable" name="t_Email"><?= htmlspecialchars($record['fieldData']['t_Email'] ?? '') ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>〒：</td>
                                <td>
                                    <input type="text" class="editable" name="t_郵便番号" value="<?= htmlspecialchars($record['fieldData']['t_郵便番号'] ?? '') ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>住所：</td>
                                <td>
                                    <textarea class="editable" name="t_施工先住所"><?= htmlspecialchars($record['fieldData']['t_施工先住所'] ?? '') ?></textarea>
                                </td>
                            </tr>
                        </table>

                        <!-- 情報2　外注先等 -->
                        <table>
                            <tr>
                                <td>外注先：</td>
                                <td>
                                    <select class="editable" name="t_外注先" data-valuelist="外注先">
                                        <option value="<?= htmlspecialchars($record['fieldData']['t_外注先']) ?>"></option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>屋号代表者：</td>
                                <td>
                                    <input type="text" class="editable" name="t_屋号代表者" value="<?= htmlspecialchars($record['fieldData']['t_屋号代表者'] ?? '') ?>">
                                    <!-- 他テーブル参照が必要 -->
                                    <!-- <select class="editable" name="t_屋号代表者" data-valuelist="クローザー氏名">
                                        <option value="<?= htmlspecialchars($record['fieldData']['t_屋号代表者']) ?>"></option>
                                    </select> -->
                                </td>
                            </tr>
                            <tr>
                                <td>電話連絡予定日：</td>
                                <td>
                                    <input type="date" class="editable" name="d_電話連絡予定日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_電話連絡予定日'] ?? '')) ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>電話連絡時間：</td>
                                <td style="display: flex; width:fit-content; ">
                                    <input type="time" class="editable" name="ti_電話連絡時間1" value="<?= htmlspecialchars(formatTimeJP($record['fieldData']['ti_電話連絡時間1'] ?? '')) ?>"> ~ <input type="time" class="editable" name="ti_電話連絡時間2" value="<?= htmlspecialchars(formatTimeJP($record['fieldData']['ti_電話連絡時間2'] ?? '')) ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>クローザー：</td>
                                <td>
                                    <!-- <select class="editable" name="t_担当クローザー" data-valuelist="クローザー氏名">
                                        <option value="<?= htmlspecialchars($record['fieldData']['t_担当クローザー']) ?>"></option>
                                    </select> -->
                                    <input type="text" class="editable" name="t_担当クローザー" value="<?= htmlspecialchars($record['fieldData']['t_担当クローザー'] ?? '') ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>クロージング完了日：</td>
                                <td>
                                    <input type="date" class="editable" name="d_クロージング完了日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_クロージング完了日'] ?? '')) ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>チェック項目：</td>
                                <td style="display:flex; flex-wrap:wrap; gap:.3vw;">
                                    <div class="editable-checkbox"
                                        data-valuelist="再申請チェック"
                                        data-name="t_再申請"
                                        data-selected="<?= htmlspecialchars($record['fieldData']['t_再申請'] ?? '') ?>"
                                        data-original-value="">
                                    </div>
                                    <div class="editable-checkbox"
                                        data-valuelist="訪販チェック"
                                        data-name="t_訪販"
                                        data-selected="<?= htmlspecialchars($record['fieldData']['t_訪販'] ?? '') ?>"
                                        data-original-value="">
                                    </div>
                                    <div class="editable-checkbox"
                                        data-valuelist="紹介チェック"
                                        data-name="t_紹介"
                                        data-selected="<?= htmlspecialchars($record['fieldData']['t_紹介'] ?? '') ?>"
                                        data-original-value="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>紹介者管理番号</td>
                                <td>
                                    <input type="text" class="editable" name="n_紹介者管理番号" value="<?= htmlspecialchars($record['fieldData']['n_紹介者管理番号'] ?? '') ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>進捗確認日：</td>
                                <td>
                                    <input type="date" class="editable" name="d_進捗確認日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_進捗確認日'] ?? '')) ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>キャンセル日：</td>
                                <td>
                                    <?= htmlspecialchars($record['fieldData']['cd_キャンセル日まとめ'] ?? '') ?>
                                </td>
                            </tr>
                            <tr>
                                <td>訪問予定日：</td>
                                <td>
                                    <input type="date" class="editable" name="d_訪問予定日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_訪問予定日'] ?? '')) ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>訪問時間：</td>
                                <td style="display: flex; width:fit-content; ">
                                    <input type="time" class="editable" name="ti_訪問時間1" value="<?= htmlspecialchars(formatTimeJP($record['fieldData']['ti_訪問時間1'] ?? '')) ?>"> ~ <input type="time" class="editable" name="ti_訪問時間2" value="<?= htmlspecialchars(formatTimeJP($record['fieldData']['ti_訪問時間2'] ?? '')) ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>訪問備考：</td>
                                <td>
                                    <textarea class="editable" name="t_訪問備考"><?= htmlspecialchars($record['fieldData']['t_訪問備考'] ?? '') ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>工事種別：</td>
                                <td>
                                    <select class="editable" name="t_主工事種別" data-valuelist="工事種別">
                                        <option value="<?= htmlspecialchars($record['fieldData']['t_主工事種別']) ?>"></option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>工事補足：</td>
                                <td>
                                    <textarea class="editable" name="t_工事名_種別自由入力欄"><?= htmlspecialchars($record['fieldData']['t_工事名_種別自由入力欄'] ?? '') ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>管理部チェック：</td>
                                <td>
                                    <div class="editable-checkbox"
                                        data-valuelist="電話臨時チェック"
                                        data-name="t_管理部イレギュラーチェック"
                                        data-selected="<?= htmlspecialchars($record['fieldData']['t_管理部イレギュラーチェック'] ?? '') ?>"
                                        data-original-value=""
                                        style="font-size: 0;">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>管理部メモ：</td>
                                <td>
                                    <textarea class="editable" name="t_管理部イレギュラーメモ"><?= htmlspecialchars($record['fieldData']['t_管理部イレギュラーメモ'] ?? '') ?></textarea>
                                </td>
                            </tr>
                        </table>
                    </div>


                    <div class="p-matter__center__record-list__item__main__contents__right__number">
                        <p>顧客管理番号：<?= htmlspecialchars($record['fieldData']['n_顧客管理番号'] ?? '') ?></p>
                        <p>旧管理番号：<?= htmlspecialchars($record['fieldData']['n_旧管理番号'] ?? '') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>