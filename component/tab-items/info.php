<div class="p-matter__center__record-list__item__main__contents__right__tab__panel__info is-active">
    <?php if (!empty($record['fieldData']['t_ワンドライブリンク'])): ?>
        <a href="<?= htmlspecialchars($record['fieldData']['t_ワンドライブリンク']) ?>" class="p-matter__center__record-list__item__main__contents__right__tab__panel__info__link" target="_blank">
            <p>OneDrive</p>
            <i class="fa-solid fa-up-right-from-square"></i>
        </a>
    <?php else: ?>
        <div class="p-matter__center__record-list__item__main__contents__right__tab__panel__info__link is-empty">
            <p>OneDriveリンク未登録</p>
        </div>
    <?php endif; ?>

    <!-- 情報1　受付日等 -->
    <table>
        <tr>
            <td>管理番号：</td>
            <td>
                <?= htmlspecialchars($record['fieldData']['n_管理番号'] ?? '') ?>
            </td>
        </tr>
        <tr>
            <td>氏名カナ：</td>
            <td>
                <input type="text" class="editable" name="t_契約者名カナ" value="<?= htmlspecialchars($record['fieldData']['t_契約者名カナ'] ?? '') ?>">
            </td>
        </tr>
        <tr>
            <td>氏名：</td>
            <td>
                <input type="text" class="editable" name="t_契約者名" value="<?= htmlspecialchars($record['fieldData']['t_契約者名'] ?? '') ?>">
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

    <div class="p-matter__center__record-list__item__main__contents__right__tab__panel__info__bottom">
        <p>顧客管理番号：<?= htmlspecialchars($record['fieldData']['n_顧客管理番号'] ?? '') ?></p>
        <p>旧管理番号：<?= htmlspecialchars($record['fieldData']['n_旧管理番号'] ?? '') ?></p>
    </div>
</div>