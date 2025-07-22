<table>
    <tr>
        <td>アトカク日：</td>
        <td>
            <input type="date" class="editable" name="d_アトカク日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_アトカク日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>担当：</td>
        <td>
            <input type="text" class="editable" name="t_アトカク担当者" value="<?= htmlspecialchars($record['fieldData']['t_アトカク担当者'] ?? '') ?>">
        </td>
    </tr>
    <tr>
        <td>保険：</td>
        <td>
            <table>
                <tr>
                    <td>契約者</td>
                    <td>
                        <select class="editable" name="t_アトカク契約者" data-valuelist="アトカク_契約者">
                            <option value="<?= htmlspecialchars($record['fieldData']['t_アトカク契約者']) ?>"></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>管理者</td>
                    <td>
                        <select class="editable" name="t_アトカク管理者" data-valuelist="アトカク_管理者">
                            <option value="<?= htmlspecialchars($record['fieldData']['t_アトカク管理者']) ?>"></option>
                        </select>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>委託説明：</td>
        <td>
            <input type="text" class="editable" name="t_アトカク委託説明" value="<?= htmlspecialchars($record['fieldData']['t_アトカク委託説明'] ?? '') ?>">
        </td>
    </tr>
    <tr>
        <td>ヒアリング：</td>
        <td>
            <table>
                <tr>
                    <td>工務店</td>
                    <td>
                        <select class="editable" name="t_アトカク工務店ヒアリング" data-valuelist="アトカク_有無">
                            <option value="<?= htmlspecialchars($record['fieldData']['t_アトカク工務店ヒアリング']) ?>"></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>家族</td>
                    <td>
                        <select class="editable" name="t_アトカク家族ヒアリング" data-valuelist="アトカク_有無">
                            <option value="<?= htmlspecialchars($record['fieldData']['t_アトカク家族ヒアリング']) ?>"></option>
                        </select>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>施工歴：</td>
        <td>
            <select class="editable" name="t_アトカク施工歴" data-valuelist="アトカク_有無">
                <option value="<?= htmlspecialchars($record['fieldData']['t_アトカク施工歴']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>塗装歴：</td>
        <td>
            <select class="editable" name="t_アトカク塗装歴ヒアリング" data-valuelist="アトカク_塗装歴ヒアリング">
                <option value="<?= htmlspecialchars($record['fieldData']['t_アトカク塗装歴ヒアリング']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>証券：</td>
        <td>
            <input type="text" class="editable" name="t_アトカク証券" value="<?= htmlspecialchars($record['fieldData']['t_アトカク証券'] ?? '') ?>">
        </td>
    </tr>
    <tr>
        <td>MAP：</td>
        <td>
            <input type="text" class="editable" name="t_アトカクMAP" value="<?= htmlspecialchars($record['fieldData']['t_アトカクMAP'] ?? '') ?>">
        </td>
    </tr>
</table>