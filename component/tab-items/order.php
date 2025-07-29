<table>
    <tr>
        <td>SF管理番号：</td>
        <td>
            <input type="text" class="editable" name="t_コジマSF管理番号" value="<?= htmlspecialchars($record['fieldData']['t_コジマSF管理番号'] ?? '') ?>">
        </td>
    </tr>
    <tr>
        <td>成約：</td>
        <td>
            <div class="editable-checkbox"
                data-valuelist="コジマ成約"
                data-name="t_コジマ成約判定"
                data-selected="<?= htmlspecialchars($record['fieldData']['t_コジマ成約判定'] ?? '') ?>"

                style="font-size: 0;">
            </div>
        </td>
    </tr>
    <tr>
        <td>請負契約書回収日：</td>
        <td>
            <input type="date" class="editable" name="d_コジマ請負契約書回収日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_コジマ請負契約書回収日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>完工書回収日：</td>
        <td>
            <input type="date" class="editable" name="d_コジマ完工書回収日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_コジマ完工書回収日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>獲得種別：</td>
        <td>
            <div class="editable-checkbox"
                data-valuelist="コジマ種別"
                data-name="t_コジマ獲得種別"
                data-selected="<?= htmlspecialchars($record['fieldData']['t_コジマ獲得種別'] ?? '') ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>ローン：</td>
        <td>
            <div class="editable-checkbox"
                data-valuelist="コジマローン"
                data-name="t_コジマローン判定"
                data-selected="<?= htmlspecialchars($record['fieldData']['t_コジマローン判定'] ?? '') ?>"

                style="font-size: 0;">
            </div>
        </td>
    </tr>
    <tr>
        <td>ローン回数：</td>
        <td>
            <input type="number" class="editable" name="n_コジマローン回数" value="<?= htmlspecialchars($record['fieldData']['n_コジマローン回数'] ?? '') ?>">
        </td>
    </tr>
    <tr>
        <td>格納チェック：</td>
        <td>
            <div class="editable-checkbox"
                data-valuelist="コジマ格納チェック"
                data-name="t_コジマ格納チェック"
                data-selected="<?= htmlspecialchars($record['fieldData']['t_コジマ格納チェック'] ?? '') ?>">
            </div>
        </td>
    </tr>
</table>