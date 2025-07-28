<table>
    <tr>
        <td>入金1：</td>
        <td>
            <table>
                <tr>
                    <td>入金額</td>
                    <td>
                        <input type="text" class="editable number-comma" name="n_コジマ前入金金額" value="<?= number_format((float)($record['fieldData']['n_コジマ前入金金額'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>入金日</td>
                    <td>
                        <input type="date" class="editable" name="d_コジマ前入金日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_コジマ前入金日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>入金方法</td>
                    <td>
                        <select class="editable" name="t_コジマ前入金支払方法" data-valuelist="コジマ支払方法">
                            <option value="<?= htmlspecialchars($record['fieldData']['t_コジマ前入金支払方法']) ?>"></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>確定</td>
                    <td>
                        <div class="editable-checkbox"
                            data-valuelist="コジマ確定"
                            data-name="t_コジマ前入金確定"
                            data-selected="<?= htmlspecialchars($record['fieldData']['t_コジマ前入金確定'] ?? '') ?>"
                            data-original-value=""
                            style="font-size: 0;">
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>入金2：</td>
        <td>
            <table>
                <tr>
                    <td>入金額</td>
                    <td>
                        <input type="text" class="editable number-comma" name="n_コジマ中入金金額" value="<?= number_format((float)($record['fieldData']['n_コジマ中入金金額'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>入金日</td>
                    <td>
                        <input type="date" class="editable" name="d_コジマ中入金日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_コジマ中入金日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>入金方法</td>
                    <td>
                        <select class="editable" name="t_コジマ中入金支払方法" data-valuelist="コジマ支払方法">
                            <option value="<?= htmlspecialchars($record['fieldData']['t_コジマ中入金支払方法']) ?>"></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>確定</td>
                    <td>
                        <div class="editable-checkbox"
                            data-valuelist="コジマ確定"
                            data-name="t_コジマ中入金確定"
                            data-selected="<?= htmlspecialchars($record['fieldData']['t_コジマ中入金確定'] ?? '') ?>"
                            data-original-value=""
                            style="font-size: 0;">
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>入金3：</td>
        <td>
            <table>
                <tr>
                    <td>入金額</td>
                    <td>
                        <input type="text" class="editable number-comma" name="n_コジマ後入金金額" value="<?= number_format((float)($record['fieldData']['n_コジマ後入金金額'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>入金日</td>
                    <td>
                        <input type="date" class="editable" name="d_コジマ後入金日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_コジマ後入金日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>入金方法</td>
                    <td>
                        <select class="editable" name="t_コジマ後入金支払方法" data-valuelist="コジマ支払方法">
                            <option value="<?= htmlspecialchars($record['fieldData']['t_コジマ後入金支払方法']) ?>"></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>確定</td>
                    <td>
                        <div class="editable-checkbox"
                            data-valuelist="コジマ確定"
                            data-name="t_コジマ後入金確定"
                            data-selected="<?= htmlspecialchars($record['fieldData']['t_コジマ後入金確定'] ?? '') ?>"
                            data-original-value=""
                            style="font-size: 0;">
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>