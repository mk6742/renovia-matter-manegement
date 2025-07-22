<table>
    <tr>
        <td>屋根種類：</td>
        <td>
            <select class="editable" name="t_屋根種類" data-valuelist="屋根種類">
                <option value="<?= htmlspecialchars($record['fieldData']['t_屋根種類']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>ソーラー：</td>
        <td>
            <select class="editable" name="t_ソーラー" data-valuelist="ソーラー">
                <option value="<?= htmlspecialchars($record['fieldData']['t_ソーラー']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>蓄電池：</td>
        <td>
            <select class="editable" name="t_蓄電池" data-valuelist="蓄電池">
                <option value="<?= htmlspecialchars($record['fieldData']['t_蓄電池']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>給湯器：</td>
        <td>
            <table>
                <tr>
                    <td>種類</td>
                    <td>
                        <select class="editable" name="t_給湯器" data-valuelist="給湯器">
                            <option value="<?= htmlspecialchars($record['fieldData']['t_給湯器']) ?>"></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>メーカー</td>
                    <td>
                        <input type="text" class="editable" name="t_給湯器メーカー" value="<?= htmlspecialchars($record['fieldData']['t_給湯器メーカー'] ?? '') ?>">
                    </td>
                </tr>
                <tr>
                    <td>ガス種類</td>
                    <td>
                        <select class="editable" name="t_給湯器ガス種類" data-valuelist="給湯器ガス種類">
                            <option value="<?= htmlspecialchars($record['fieldData']['t_給湯器ガス種類']) ?>"></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>使用年数</td>
                    <td>
                        <input type="number" class="editable" name="t_給湯器使用年数" value="<?= htmlspecialchars($record['fieldData']['t_給湯器使用年数'] ?? '') ?>">&nbsp;年
                    </td>
                </tr>
                <tr>
                    <td>容量</td>
                    <td>
                        <input type="number" class="editable" name="t_給湯器容量" value="<?= htmlspecialchars($record['fieldData']['t_給湯器容量'] ?? '') ?>">&nbsp;号
                    </td>
                </tr>
            </table>
        </td>
    </tr>

</table>