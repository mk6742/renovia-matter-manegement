<table>
    <tr>
        <td>金額情報：</td>
        <td>
            <table>
                <tr>
                    <td>見積額</td>
                    <td>
                        <input type="text" class="editable" name="n_上乗せ見積額" value="<?= htmlspecialchars($record['fieldData']['n_上乗せ見積額'] ?? '') ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>認定額</td>
                    <td>
                        <input type="text" class="editable" name="n_認定金額" value="<?= htmlspecialchars($record['fieldData']['n_認定金額'] ?? '') ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>売上</td>
                    <td>
                        <input type="text" class="editable" name="n_火災保険適用金額" value="<?= htmlspecialchars($record['fieldData']['n_火災保険適用金額'] ?? '') ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>計算原価</td>
                    <td>
                        <input type="text" class="editable" name="nc_請負金額" value="<?= htmlspecialchars($record['fieldData']['nc_請負金額'] ?? '') ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>粗利</td>
                    <td>
                        <input type="text" class="editable" name="nc_新粗利" value="<?= htmlspecialchars($record['fieldData']['nc_新粗利'] ?? '') ?>">&nbsp;円
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>支払：</td>
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
        <td>トラブル</td>
        <td>
            <div class="editable-checkbox"
                data-valuelist="トラブル案件"
                data-name="t_トラブル案件"
                data-selected="<?= htmlspecialchars($record['fieldData']['t_トラブル案件'] ?? '') ?>"
                data-original-value=""
                style="font-size: 0;">
            </div>
        </td>
    </tr>
    <tr>
        <td>完工連絡完了日：</td>
        <td>
            <input type="date" class="editable" name="d_完工連絡完了日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_完工連絡完了日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>請求書：</td>
        <td>
            <table>
                <tr>
                    <td>発送タイミング</td>
                    <td>
                        <select class="editable" name="t_請求書発送タイミング" data-valuelist="請求書発送タイミング">
                            <option value="<?= htmlspecialchars($record['fieldData']['t_請求書発送タイミング']) ?>"></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>発送予定日</td>
                    <td>
                        <input type="date" class="editable" name="d_請求書発送予定日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_請求書発送予定日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>発送日</td>
                    <td>
                        <input type="date" class="editable" name="d_請求書発送日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_請求書発送日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>領収書発送日</td>
                    <td>
                        <input type="date" class="editable" name="d_領収書発送日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_領収書発送日'] ?? '')) ?>">
                    </td>
                </tr>
            </table>
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
                        <input type="text" class="editable" name="n_請求金額1" value="<?= htmlspecialchars($record['fieldData']['n_請求金額1'] ?? '') ?>">&nbsp;円
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
                        <input type="text" class="editable" name="n_入金金額1" value="<?= htmlspecialchars($record['fieldData']['n_入金金額1'] ?? '') ?>">&nbsp;円
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
                        <input type="text" class="editable" name="n_請求金額2" value="<?= htmlspecialchars($record['fieldData']['n_請求金額2'] ?? '') ?>">&nbsp;円
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
                        <input type="text" class="editable" name="n_入金金額2" value="<?= htmlspecialchars($record['fieldData']['n_入金金額2'] ?? '') ?>">&nbsp;円
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>商談：</td>
        <td>
            <table>
                <tr>
                    <td>商談日1</td>
                    <td>
                        <input type="date" class="editable" name="d_商談日1" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_商談日1'] ?? '')) ?>"><br>
                    </td>
                </tr>
                <tr>
                    <td>商談日2</td>
                    <td>
                        <input type="date" class="editable" name="d_商談日2" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_商談日2'] ?? '')) ?>"><br>
                    </td>
                </tr>
                <tr>
                    <td>商談日3</td>
                    <td>
                        <input type="date" class="editable" name="d_商談日3" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_商談日3'] ?? '')) ?>"><br>
                    </td>
                </tr>
                <tr>
                    <td>成約日</td>
                    <td>
                        <input type="date" class="editable" name="d_成約日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_成約日'] ?? '')) ?>"><br>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>