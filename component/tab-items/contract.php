<table>
    <tr>
        <td>請負一覧：</td>
        <td>
            <table class="is-portal">
                <tr>
                    <th>取引先事業者名</th>
                    <th>区分</th>
                    <th>施工前現調日</th>
                    <th>着工日</th>
                    <th>完工予定日</th>
                    <th>発注日</th>
                    <th>金額（仮）</th>
                    <th>支払日</th>
                </tr>
                <?php if (!empty($record['portalData']['原価管理TB_新'])): ?>
                    <?php foreach ($record['portalData']['原価管理TB_新'] as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['原価管理TB_新::t_取引先事業者名'] ?? '') ?></td>
                            <td><?= htmlspecialchars($row['原価管理TB_新::t_事業者区分'] ?? '') ?></td>
                            <td><?= htmlspecialchars($row['原価管理TB_新::d_施工前現調日'] ?? '') ?></td>
                            <td><?= htmlspecialchars($row['原価管理TB_新::d_着工日'] ?? '') ?></td>
                            <td><?= htmlspecialchars($row['原価管理TB_新::d_完工予定日'] ?? '') ?></td>
                            <td><?= htmlspecialchars($row['原価管理TB_新::d_発注日'] ?? '') ?></td>
                            <td><?= htmlspecialchars(number_format((int)($row['原価管理TB_新::n_金額_クローザー報告'] ?? 0))) ?></td>
                            <td><?= htmlspecialchars($row['原価管理TB_新::d_支払日'] ?? '') ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8">データなし</td>
                    </tr>
                <?php endif; ?>
            </table>
        </td>
    </tr>

</table>