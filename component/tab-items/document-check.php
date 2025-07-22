<table>
    <tr>
        <td>チェック項目：</td>
        <td>
            <div class="editable-checkbox"
                data-valuelist="提出書類チェック"
                data-name="t_提出書類チェック"
                data-selected="<?= htmlspecialchars($record['fieldData']['t_提出書類チェック'] ?? '') ?>"
                data-original-value="">
            </div>
        </td>
    </tr>
    <tr>
        <td>覚書日：</td>
        <td>
            <table>
                <tr>
                    <td>初回</td>
                    <td>
                        <input type="date" class="editable" name="d_初回覚書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_初回覚書'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>最終</td>
                    <td>
                        <input type="date" class="editable" name="d_最終覚書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_最終覚書'] ?? '')) ?>">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>成約日：</td>
        <td>
            <input type="date" class="editable" name="d_成約日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_成約日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>完工書回収日：</td>
        <td>
            <input type="date" class="editable" name="d_完工書回収日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_完工書回収日'] ?? '')) ?>">
        </td>
    </tr>
</table>