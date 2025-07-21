<table>
    <tr>
        <td>アトカクCXL日：</td>
        <td>
            <input type="date" class="editable" name="d_アトカク現調前キャンセル日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_アトカク現調前キャンセル日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>現調前CXL日：</td>
        <td>
            <input type="date" class="editable" name="d_現調前キャンセル日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_現調前キャンセル日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>現調以降CXL日：</td>
        <td>
            <input type="date" class="editable" name="d_現調以降キャンセル日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_現調以降キャンセル日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>クロージング以降CXL日：</td>
        <td>
            <input type="date" class="editable" name="d_キャンセル日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_キャンセル日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>キャンセルセグメント：</td>
        <td>
            <select class="editable" name="t_キャンセルセグメント" data-valuelist="キャンセルセグメント">
                <option value="<?= htmlspecialchars($record['fieldData']['t_キャンセルセグメント']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>キャンセル理由詳細：</td>
        <td>
            <textarea class="editable" name="t_キャンセル理由"><?= htmlspecialchars($record['fieldData']['t_キャンセル理由'] ?? '') ?></textarea>
        </td>
    </tr>
</table>