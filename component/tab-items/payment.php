<table>
    <tr>
        <td>支払方法：</td>
        <td>
            <select class="editable" name="t_支払方法" data-valuelist="支払方法">
                <option value="<?= htmlspecialchars($record['fieldData']['t_支払方法']) ?>"></option>
            </select>
            <input type="number" class="editable" name="n_ASLES支払回数" value="<?= htmlspecialchars($record['fieldData']['n_ASLES支払回数'] ?? '') ?>">&nbsp;回
        </td>
    </tr>
    <tr>
        <td>口座：</td>
        <td>
            <select class="editable" name="t_口座" data-valuelist="口座">
                <option value="<?= htmlspecialchars($record['fieldData']['t_口座']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <div class="is-flex-list">
                <div class="editable-checkbox"
                    data-valuelist="Paypay"
                    data-name="t_paypay"
                    data-selected="<?= htmlspecialchars($record['fieldData']['t_paypay'] ?? '') ?>"
                    data-original-value="">
                </div>
                <div class="editable-checkbox"
                    data-valuelist="トラブル案件"
                    data-name="t_トラブル案件"
                    data-selected="<?= htmlspecialchars($record['fieldData']['t_トラブル案件'] ?? '') ?>"
                    data-original-value="">
                </div>
            </div>

        </td>
    </tr>
    <tr>
        <td>前半金：</td>
        <td>
            <table>
                <tr>
                    <td>入金予定日</td>
                    <td>
                        <input type="date" class="editable" name="d_入金予定日1" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_入金予定日1'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>請求金額</td>
                    <td>
                        <input type="text" class="editable number-comma" name="n_請求金額1" value="<?= number_format((float)($record['fieldData']['n_請求金額1'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>入金日</td>
                    <td>
                        <input type="date" class="editable" name="d_入金日1" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_入金日1'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>入金額</td>
                    <td>
                        <input type="text" class="editable number-comma" name="n_入金金額1" value="<?= number_format((float)($record['fieldData']['n_入金金額1'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>後半金：</td>
        <td>
            <table>
                <tr>
                    <td>入金予定日</td>
                    <td>
                        <input type="date" class="editable" name="d_入金予定日2" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_入金予定日2'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>請求金額</td>
                    <td>
                        <input type="text" class="editable number-comma" name="n_請求金額2" value="<?= number_format((float)($record['fieldData']['n_請求金額2'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>入金日</td>
                    <td>
                        <input type="date" class="editable" name="d_入金日2" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_入金日2'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>入金額</td>
                    <td>
                        <input type="text" class="editable number-comma" name="n_入金金額2" value="<?= number_format((float)($record['fieldData']['n_入金金額2'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>