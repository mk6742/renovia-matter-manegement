<table>
    <tr>
        <td>日程：</td>
        <td>
            <table>
                <tr>
                    <td>着工日</td>
                    <td>
                        <input type="date" class="editable" name="d_工務店着工日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_工務店着工日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>完工予定日</td>
                    <td>
                        <input type="date" class="editable" name="d_工務店完工予定日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_工務店完工予定日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>完工日</td>
                    <td>
                        <input type="date" class="editable" name="d_工務店完工日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_工務店完工日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>完工写真作成日</td>
                    <td>
                        <input type="date" class="editable" name="d_完工写真作成日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_完工写真作成日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>完工写真発送日</td>
                    <td>
                        <input type="date" class="editable" name="d_完工写真発送日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_完工写真発送日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>施工後やり直し日</td>
                    <td>
                        <input type="date" class="editable" name="d_施工後やり直し日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_施工後やり直し日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>やり直し理由</td>
                    <td>
                        <textarea class="editable" name="t_やり直し理由"><?= htmlspecialchars($record['fieldData']['t_やり直し理由'] ?? '') ?></textarea>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>金額情報：</td>
        <td>
            <table>
                <tr>
                    <td>見積額</td>
                    <td>
                        <input type="text" class="editable number-comma" name="n_上乗せ見積額" value="<?= number_format((float)($record['fieldData']['n_上乗せ見積額'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>認定額</td>
                    <td>
                        <input type="text" class="editable number-comma" name="n_認定金額" value="<?= number_format((float)($record['fieldData']['n_認定金額'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>売上</td>
                    <td>
                        <input type="text" class="editable number-comma" name="n_火災保険適用金額" value="<?= number_format((float)($record['fieldData']['n_火災保険適用金額'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>計算原価</td>
                    <td>
                        <input type="text" class="editable number-comma" name="nc_請負金額" value="<?= number_format((float)($record['fieldData']['nc_請負金額'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>粗利</td>
                    <td>
                        <input type="text" class="editable number-comma" name="nc_新粗利" value="<?= number_format((float)($record['fieldData']['nc_新粗利'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>