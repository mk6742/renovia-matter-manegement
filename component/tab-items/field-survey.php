<table>
    <tr>
        <td>保険会社：</td>
        <td>
            <select class="editable" name="t_保険会社証書" data-valuelist="保険会社証書">
                <option value="<?= htmlspecialchars($record['fieldData']['t_保険会社証書']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>訪問種別：</td>
        <td>
            <select class="editable" name="t_コジマ訪問種別" data-valuelist="コジマ訪問種別">
                <option value="<?= htmlspecialchars($record['fieldData']['t_コジマ訪問種別']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>予定日：</td>
        <td>
            <input type="date" class="editable" name="d_現地調査予定日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_現地調査予定日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>予定時間：</td>
        <td>
            <input type="time" class="editable" name="ti_現地調査時間1" value="<?= htmlspecialchars(formatTimeJP($record['fieldData']['ti_現地調査時間1'] ?? '')) ?>"> ~ <input type="time" class="editable" name="ti_現地調査時間2" value="<?= htmlspecialchars(formatTimeJP($record['fieldData']['ti_現地調査時間2'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>完了日：</td>
        <td>
            <input type="date" class="editable" name="d_現地調査完了日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_現地調査完了日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>築年数：</td>
        <td>
            <input type="text" class="editable" name="t_築年数" value="<?= htmlspecialchars($record['fieldData']['t_築年数'] ?? '') ?>">
        </td>
    </tr>
    <tr>
        <td>備考：</td>
        <td>
            <textarea class="editable" name="t_アトカク備考"><?= htmlspecialchars($record['fieldData']['t_アトカク備考'] ?? '') ?></textarea>
        </td>
    </tr>
</table>