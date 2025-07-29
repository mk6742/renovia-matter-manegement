<table>
    <tr>
        <td>アポ獲得者：</td>
        <td>
            <select class="editable" name="t_コジマアポ獲得者" data-valuelist="コジマアポ獲得者">
                <option value="<?= htmlspecialchars($record['fieldData']['t_コジマアポ獲得者']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>業者担当：</td>
        <td>
            <input type="text" class="editable" name="t_コジマアポ獲得者_業者担当" value="<?= htmlspecialchars($record['fieldData']['t_コジマアポ獲得者_業者担当'] ?? '') ?>">
        </td>
    </tr>
    <tr>
        <td>店舗：</td>
        <td>
            <select class="editable" name="t_コジマ店舗名" data-valuelist="コジマ店舗">
                <option value="<?= htmlspecialchars($record['fieldData']['t_コジマ店舗名']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>種別：</td>
        <td>
            <select class="editable" name="t_コジマ案件獲得種別" data-valuelist="コジマ案件獲得種別">
                <option value="<?= htmlspecialchars($record['fieldData']['t_コジマ案件獲得種別']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>大分類：</td>
        <td>
            <select class="editable" name="t_コジマ施工内容大分類" data-valuelist="コジマ工事分類">
                <option value="<?= htmlspecialchars($record['fieldData']['t_コジマ施工内容大分類']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>トス</td>
        <td>
            <div class="editable-checkbox"
                data-valuelist="コジマトス"
                data-name="t_コジマトスアップ判定"
                data-selected="<?= htmlspecialchars($record['fieldData']['t_コジマトスアップ判定'] ?? '') ?>"

                style="font-size: 0;">
            </div>
        </td>
    </tr>
    <tr>
        <td>見込</td>
        <td>
            <div class="editable-checkbox"
                data-valuelist="コジマ見込"
                data-name="t_コジマ見込み"
                data-selected="<?= htmlspecialchars($record['fieldData']['t_コジマ見込み'] ?? '') ?>"

                style="font-size: 0;">
            </div>
        </td>
    </tr>
</table>