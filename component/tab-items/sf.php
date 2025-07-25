<table>
    <tr>
        <td>現調日反映日：</td>
        <td>
            <input type="date" class="editable" name="d_コジマ現調日SF反映日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_コジマ現調日SF反映日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>見積反映日：</td>
        <td>
            <input type="date" class="editable" name="d_コジマ見積SF反映日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_コジマ見積SF反映日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>商談日反映日：</td>
        <td>
            <input type="date" class="editable" name="d_コジマ商談日SF反映日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_コジマ商談日SF反映日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>受注承認日：</td>
        <td>
            <input type="date" class="editable" name="d_コジマ受注SF承認日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_コジマ受注SF承認日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>キャンセル反映日：</td>
        <td>
            <input type="date" class="editable" name="d_コジマキャンセルSF反映日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_コジマキャンセルSF反映日'] ?? '')) ?>">
        </td>
    </tr>
</table>