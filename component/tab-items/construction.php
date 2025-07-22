<table>
    <tr>
        <td>工務店：</td>
        <td>
            <select class="editable" name="t_工務店A" data-valuelist="工務店">
                <option value="<?= htmlspecialchars($record['fieldData']['t_工務店A']) ?>"></option>
            </select>
            <select class="editable" name="t_工務店B" data-valuelist="工務店">
                <option value="<?= htmlspecialchars($record['fieldData']['t_工務店B']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>足場：</td>
        <td>
            <table>
                <tr>
                    <td>業者</td>
                    <td>
                        <select class="editable" name="t_足場業者" data-valuelist="足場業者">
                            <option value="<?= htmlspecialchars($record['fieldData']['t_足場業者']) ?>"></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>面積（㎡）</td>
                    <td>
                        <input type="number" class="editable" name="n_足場㎡" value="<?= htmlspecialchars($record['fieldData']['n_足場㎡'] ?? '') ?>">
                    </td>
                </tr>
                <tr>
                    <td>施工日</td>
                    <td>
                        <input type="date" class="editable" name="d_足場施工日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_足場施工日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>解体日</td>
                    <td>
                        <input type="date" class="editable" name="d_足場解体日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_足場解体日'] ?? '')) ?>">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
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
                    <td>施工後やり直し日</td>
                    <td>
                        <input type="date" class="editable" name="d_施工後やり直し日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_施工後やり直し日'] ?? '')) ?>">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>3点格納：</td>
        <td>
            <div class="editable-checkbox"
                data-valuelist="3点格納"
                data-name="t_3点格納"
                data-selected="<?= htmlspecialchars($record['fieldData']['t_3点格納'] ?? '') ?>"
                data-original-value=""
                style="font-size: 0;">
            </div>
        </td>
    </tr>
    <tr>
        <td>完工写真：</td>
        <td>
            <table>
                <tr>
                    <td>作成日</td>
                    <td>
                        <input type="date" class="editable" name="d_完工写真作成日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_完工写真作成日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>発送日</td>
                    <td>
                        <input type="date" class="editable" name="d_完工写真発送日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_完工写真発送日'] ?? '')) ?>">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>DMM割付：</td>
        <td>
            <table>
                <tr>
                    <td>依頼日</td>
                    <td>
                        <input type="date" class="editable" name="d_DMM割付依頼日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_DMM割付依頼日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>保存日</td>
                    <td>
                        <input type="date" class="editable" name="d_DMM割付保存日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_DMM割付保存日'] ?? '')) ?>">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>現調依頼業者：</td>
        <td>
            <select class="editable" name="t_現調依頼業者名" data-valuelist="工務店">
                <option value="<?= htmlspecialchars($record['fieldData']['t_現調依頼業者名']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>見積依頼業者：</td>
        <td>
            <select class="editable" name="t_見積依頼業者名" data-valuelist="工務店">
                <option value="<?= htmlspecialchars($record['fieldData']['t_見積依頼業者名']) ?>"></option>
            </select>
        </td>
    </tr>
</table>