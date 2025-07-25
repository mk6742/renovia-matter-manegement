<table>
    <tr>
        <td>相殺一覧：</td>
        <td>
            <div class="is-scroll-contents">
                <table class="is-portal">
                    <tr>
                        <th>支払日</th>
                        <th>計上月</th>
                        <th>原価</th>
                        <th>相殺売上</th>
                        <th>メモ</th>
                    </tr>
                    <?php if (!empty($record['portalData']['計上用相殺管理TB'])): ?>
                        <?php foreach ($record['portalData']['計上用相殺管理TB'] as $row): ?>
                            <tr>
                                <td><?= htmlspecialchars(formatDateForInput($row['計上用相殺管理TB::d_原価支払日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['計上用相殺管理TB::d_計上月'] ?? '')) ?></td>
                                <td><?= htmlspecialchars(number_format((int)($row['計上用相殺管理TB::n_原価'] ?? 0))) ?></td>
                                <td><?= htmlspecialchars(number_format((int)($row['計上用相殺管理TB::n_売上相殺金額'] ?? 0))) ?></td>
                                <td><?= htmlspecialchars($row['計上用相殺管理TB::t_コメント'] ?? '') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8">データなし</td>
                        </tr>
                    <?php endif; ?>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td>相殺金額合計：</td>
        <td>
            <?= htmlspecialchars(number_format((int)($record['fieldData']['nc_計上相殺金額合計'] ?? 0))) ?>&nbsp;円
        </td>
    </tr>
    <tr>
        <td>残計上売上：</td>
        <td>
            <?= htmlspecialchars(number_format((int)($record['fieldData']['nc_計上残売上'] ?? 0))) ?>&nbsp;円
        </td>
    </tr>
    <tr>
        <td>計上事業部：</td>
        <td>
            <select class="editable" name="t_計上事業部" data-valuelist="計上事業部">
                <option value="<?= htmlspecialchars($record['fieldData']['t_計上事業部']) ?>"></option>
            </select>
        </td>
    </tr>
</table>