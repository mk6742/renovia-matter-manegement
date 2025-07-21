<table class="is-active">
    <tr>
        <td>コール希望日：</td>
        <td>
            <input type="date" class="editable" name="d_アポイント希望日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_アポイント希望日'] ?? '')) ?>">
            <div style="display:flex; align-items:center; gap:.5vw; padding-top:.3vw;">
                <button
                    class="fm-script-btn"
                    data-script="テストスクリプト"
                    data-record-id="<?= $record['recordId'] ?>"
                    data-param="">
                    テストスクリプト
                </button>
            </div>
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
            <input type="number" class="editable" name="t_築年数" value="<?= htmlspecialchars($record['fieldData']['t_築年数'] ?? '') ?>">
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
            <!-- <div style="display:flex; align-items:center; gap:.5vw; padding-top:.3vw;">
                <button class="fm-script-btn" data-script="LINE付箋" data-param="">📃LINE付箋</button>
                <?php if (!empty($record['fieldData']['t_付箋案件'])): ?>
                    <span>
                        <?= htmlspecialchars($record['fieldData']['t_LINE付箋送信フラグ']) ?>
                    </span>
                <?php endif; ?>
            </div> -->
        </td>
    </tr>
    <tr>
        <td>お客様情報：</td>
        <td>
            <textarea class="editable" name="t_アポイント備考"><?= htmlspecialchars($record['fieldData']['t_アポイント備考'] ?? '') ?></textarea>
        </td>
    </tr>
    <tr>
        <td>ネガ：</td>
        <td>
            <textarea class="editable" name="t_ネガ"><?= htmlspecialchars($record['fieldData']['t_ネガ'] ?? '') ?></textarea>
        </td>
    </tr>
    <tr>
        <td>ネガ返し：</td>
        <td>
            <textarea class="editable" name="t_ネガ返し"><?= htmlspecialchars($record['fieldData']['t_ネガ返し'] ?? '') ?></textarea>
        </td>
    </tr>
</table>