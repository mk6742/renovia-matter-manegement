<table>
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
        <td>再申請</td>
        <td>
            <div class="editable-checkbox"
                data-valuelist="再申請チェック"
                data-name="t_再申請"
                data-selected="<?= htmlspecialchars($record['fieldData']['t_再申請'] ?? '') ?>"
                data-original-value=""
                style="font-size: 0;">
            </div>
        </td>
    </tr>
    <tr>
        <td>訪販</td>
        <td>
            <div class="editable-checkbox"
                data-valuelist="訪販チェック"
                data-name="t_訪販"
                data-selected="<?= htmlspecialchars($record['fieldData']['t_訪販'] ?? '') ?>"
                data-original-value=""
                style="font-size: 0;">
            </div>
        </td>
    </tr>
    <tr>
        <td>紹介</td>
        <td>
            <div class="editable-checkbox"
                data-valuelist="紹介チェック"
                data-name="t_紹介"
                data-selected="<?= htmlspecialchars($record['fieldData']['t_紹介'] ?? '') ?>"
                data-original-value=""
                style="font-size: 0;">
            </div>
        </td>
    </tr>
    <tr>
        <td>紹介者管理番号</td>
        <td>
            <input type="text" class="editable" name="n_紹介者管理番号" value="<?= htmlspecialchars($record['fieldData']['n_紹介者管理番号'] ?? '') ?>">
        </td>
    </tr>
</table>