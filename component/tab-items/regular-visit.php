<table>
    <tr>
        <td>訪問日：</td>
        <td>
            <input type="date" class="editable" name="d_定期点検訪問日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_定期点検訪問日'] ?? '')) ?>">

        </td>
    </tr>
    <tr>
        <td>訪問クローザー：</td>
        <td>
            <?php
            $closer = $curlclass->getrecords($URL, $DB, 'アカウント管理', $token);
            ?>
            <select class="editable" name="t_定期点検クローザー">
                <?php
                $selectedValue = $record['fieldData']['t_定期点検クローザー'] ?? '';

                foreach ($closer['response']['data'] as $recordItem) {
                    $name = htmlspecialchars($recordItem['fieldData']['tc_氏名']);
                    $selected = ($name === $selectedValue) ? 'selected' : '';
                    echo "<option value='{$name}' {$selected}>{$name}</option>";
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>ステータス：</td>
        <td>
            <input type="text" class="editable" name="t_定期点検ステータス" value="<?= htmlspecialchars($record['fieldData']['t_定期点検ステータス'] ?? '') ?>">
        </td>
    </tr>
</table>