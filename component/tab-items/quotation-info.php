<table>
    <tr>
        <td>見積金額：</td>
        <td>
            <input type="text" class="editable number-comma" name="n_コジマ見積額" value="<?= number_format((float)($record['fieldData']['n_コジマ見積額'] ?? '')) ?>">&nbsp;円
        </td>
    </tr>
    <tr>
        <td>ロイヤリティ率：</td>
        <td>
            <input type="text" class="editable" name="n_コジマロイヤリティ率" value="<?= ($record['fieldData']['n_コジマロイヤリティ率'] ?? '') ?>">
        </td>
    </tr>
    <tr>
        <td>コジマCB：</td>
        <td>
            <input type="text" class="editable number-comma" name="n_コジマCB" value="<?= number_format((float)($record['fieldData']['n_コジマCB'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>コジマ原価：</td>
        <td>
            <input type="text" class="editable number-comma" name="n_コジマ原価" value="<?= number_format((float)($record['fieldData']['n_コジマ原価'] ?? '')) ?>">&nbsp;円
        </td>
    </tr>
    <tr>
        <td>ロイヤリティ：</td>
        <td>
            <input type="text" class="editable number-comma" name="nc_コジマロイヤリティ" value="<?= number_format((float)($record['fieldData']['nc_コジマロイヤリティ'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>粗利：</td>
        <td>
            <input type="text" class="editable number-comma" name="nc_コジマ粗利" value="<?= number_format((float)($record['fieldData']['nc_コジマ粗利'] ?? '')) ?>">&nbsp;円
        </td>
    </tr>
    <tr>
        <td>外部案件管理番号：</td>
        <td>
            <input type="text" class="editable" name="t_外部案件管理番号" value="<?= htmlspecialchars($record['fieldData']['t_外部案件管理番号'] ?? '') ?>">
        </td>
    </tr>
</table>