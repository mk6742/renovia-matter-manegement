<table>
    <tr>
        <td>訪問日：</td>
        <td>
            <input type="date" class="editable" name="d_定期点検訪問日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_定期点検訪問日'] ?? '')) ?>">

        </td>
    </tr>
    <tr>
        <td>訪問クローザー：</td>
        <td>
            <input type="text" class="editable" name="t_定期点検クローザー" value="<?= htmlspecialchars($record['fieldData']['t_定期点検クローザー'] ?? '') ?>">
            <!-- <select class="editable" name="t_定期点検クローザー" data-valuelist="クローザー氏名">
                <option value="<?= htmlspecialchars($record['fieldData']['t_定期点検クローザー']) ?>"></option>
            </select> -->
        </td>
    </tr>
    <tr>
        <td>ステータス：</td>
        <td>
            <input type="text" class="editable" name="t_定期点検ステータス" value="<?= htmlspecialchars($record['fieldData']['t_定期点検ステータス'] ?? '') ?>">
        </td>
    </tr>
</table>