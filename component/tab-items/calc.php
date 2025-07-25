<table>
    <tr>
        <td>材料発注日：</td>
        <td>
            <div class="is-flex-list">
                <input type="date" class="editable" name="d_材料発注日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_材料発注日'] ?? '')) ?>">
                <div class="editable-checkbox"
                    data-valuelist="発注なし"
                    data-name="t_発注なし"
                    data-selected="<?= htmlspecialchars($record['fieldData']['t_発注なし'] ?? '') ?>"
                    data-original-value="">
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>発注業者：</td>
        <td>
            <select class="editable" name="t_発注業者" data-valuelist="発注業者">
                <option value="<?= htmlspecialchars($record['fieldData']['t_発注業者']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>金額：</td>
        <td>
            <table>
                <tr>
                    <td>計算請負</td>
                    <td>
                        <input type="text" class="editable number-comma" name="nc_請負金額" value="<?= number_format((float)($record['fieldData']['nc_請負金額'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>計算足場</td>
                    <td>
                        <input type="text" class="editable number-comma" name="nc_足場費用" value="<?= number_format((float)($record['fieldData']['nc_足場費用'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>材料費合計</td>
                    <td>
                        <input type="text" class="editable number-comma" name="nc_材料費合計" value="<?= number_format((float)($record['fieldData']['nc_材料費合計'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>計算原価</td>
                    <td>
                        <input type="text" class="editable number-comma" name="nc計算原価" value="<?= number_format((float)($record['fieldData']['nc計算原価'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>実原価</td>
                    <td>
                        <input type="text" class="editable number-comma" name="nc_原価" value="<?= number_format((float)($record['fieldData']['nc_原価'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>粗利</td>
                    <td>
                        <input type="text" class="editable number-comma" name="nc_新粗利" value="<?= number_format((float)($record['fieldData']['nc_新粗利'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>補助金額</td>
                    <td>
                        <input type="text" class="editable number-comma" name="n_補助金額" value="<?= number_format((float)($record['fieldData']['n_補助金額'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>原価支払日：</td>
        <td>
            <input type="date" class="editable" name="d_原価支払日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_原価支払日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>売上計上月：</td>
        <td>
            <input type="date" class="editable" name="dc_売上計上月" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['dc_売上計上月'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>発注書保存日：</td>
        <td>
            <input type="date" class="editable" name="d_原価支払日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_原価支払日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>足場写真チェック：</td>
        <td>
            <div class="editable-checkbox is-flex-list"
                data-valuelist="足場チェック"
                data-name="t_足場チェック"
                data-selected="<?= htmlspecialchars($record['fieldData']['t_足場チェック'] ?? '') ?>"
                data-original-value="">
            </div>
        </td>
    </tr>
</table>