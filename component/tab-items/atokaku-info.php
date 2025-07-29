<table>
    <tr>
        <td>アトカク担当者：</td>
        <td>
            <input type="text" class="editable" name="t_確認電話担当者" value="<?= htmlspecialchars($record['fieldData']['t_確認電話担当者'] ?? '') ?>">
        </td>
    </tr>
    <tr>
        <td>現地調査：</td>
        <td>
            <table>
                <tr>
                    <td>予定日</td>
                    <td>
                        <input type="date" class="editable" name="d_現地調査予定日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_現地調査予定日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>予定時間</td>
                    <td>
                        <input type="time" class="editable" name="ti_現地調査時間1" value="<?= htmlspecialchars(formatTimeJP($record['fieldData']['ti_現地調査時間1'] ?? '')) ?>"> ~ <input type="time" class="editable" name="ti_現地調査時間2" value="<?= htmlspecialchars(formatTimeJP($record['fieldData']['ti_現地調査時間2'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>完了日</td>
                    <td>
                        <input type="date" class="editable" name="d_現地調査完了日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_現地調査完了日'] ?? '')) ?>">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>アトカク備考：</td>
        <td>
            <textarea class="editable" name="t_アトカク備考"><?= htmlspecialchars($record['fieldData']['t_アトカク備考'] ?? '') ?></textarea>
        </td>
    </tr>

    <tr>
        <td>当日現調：</td>
        <td>
            <div class="editable-checkbox"
                data-valuelist="当日現調"
                data-name="t_当日現調"
                data-selected="<?= htmlspecialchars($record['fieldData']['t_当日現調'] ?? '') ?>"

                style="font-size: 0;">
            </div>
        </td>
    </tr>
    <tr>
        <td>年齢層：</td>
        <td>
            <input type="text" class="editable" name="t_年齢層" value="<?= htmlspecialchars($record['fieldData']['t_年齢層'] ?? '') ?>">
        </td>
    </tr>
    <tr>
        <td>受注日：</td>
        <td>
            <input type="date" class="editable" name="d_受注日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_受注日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>不通解消：</td>
        <td>
            <input type="date" class="editable" name="d_不通解消" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_不通解消'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>アトカクメモ：</td>
        <td>
            <textarea class="editable" name="t_アポイントmemo">
            <?= htmlspecialchars($record['fieldData']['t_アポイントmemo'] ?? '') ?>
            </textarea>
        </td>
    </tr>
    <tr>
        <td>管理確認：</td>
        <td>
            <textarea class="editable" name="t_保留理由">
            <?= htmlspecialchars($record['fieldData']['t_保留理由'] ?? '') ?>
            </textarea>
        </td>
    </tr>
</table>