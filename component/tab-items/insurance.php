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
        <td>申請方法：</td>
        <td>
            <select class="editable" name="t_火災保険申請方法" data-valuelist="火災保険申請方法">
                <option value="<?= htmlspecialchars($record['fieldData']['t_火災保険申請方法']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>保険会社現地調査日：</td>
        <td>
            <input type="date" class="editable" name="d_保険会社現調日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_保険会社現調日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>商談日（北古賀用）：</td>
        <td>
            <input type="date" class="editable" name="d_商談日3 コピー" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_商談日3 コピー'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>事故種類A：</td>
        <td>
            <select class="editable" name="t_事故種類A" data-valuelist="事故種類">
                <option value="<?= htmlspecialchars($record['fieldData']['t_事故種類A']) ?>"></option>
            </select>
            <div style="display: flex; align-items:center; padding:.2vw">
                申請日&nbsp;
                <input type="date" class="editable" name="d_事故申請日A" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_事故申請日A'] ?? '')) ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>事故種類B：</td>
        <td>
            <select class="editable" name="t_事故種類B" data-valuelist="事故種類">
                <option value="<?= htmlspecialchars($record['fieldData']['t_事故種類B']) ?>"></option>
            </select>
            <div style="display: flex; align-items:center; padding:.2vw">
                申請日&nbsp;
                <input type="date" class="editable" name="d_事故申請日B" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_事故申請日B'] ?? '')) ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>保険申請日：</td>
        <td>
            <input type="date" class="editable" name="d_火災保険申請日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_火災保険申請日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>査定完了確認日：</td>
        <td>
            <input type="date" class="editable" name="d_保険会社査定完了確認日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_保険会社査定完了確認日'] ?? '')) ?>">
        </td>
    </tr>
</table>