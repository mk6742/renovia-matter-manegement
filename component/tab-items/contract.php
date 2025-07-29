<table>
    <tr>
        <td>請負一覧：</td>
        <td>
            <div class="is-scroll-contents">
                <!-- ポータルないの値はいじれない（実装がちょっと大変かも） -->
                <table class="is-portal">
                    <tr>
                        <th>取引先事業者名</th>
                        <th>区分</th>
                        <th>施工前現調日</th>
                        <th>着工日</th>
                        <th>完工予定日</th>
                        <th>発注日</th>
                        <th>金額（仮）</th>
                        <th>金額</th>
                        <th>支払日</th>
                    </tr>
                    <?php if (!empty($record['portalData']['原価管理TB_新'])): ?>
                        <?php foreach ($record['portalData']['原価管理TB_新'] as $row): ?>
                            <tr>
                                <td><?= htmlspecialchars($row['原価管理TB_新::t_取引先事業者名'] ?? '') ?></td>
                                <td><?= htmlspecialchars($row['原価管理TB_新::t_事業者区分'] ?? '') ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['原価管理TB_新::d_施工前現調日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['原価管理TB_新::d_着工日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['原価管理TB_新::d_完工予定日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['原価管理TB_新::d_発注日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars(number_format((int)($row['原価管理TB_新::n_金額_クローザー報告'] ?? 0))) ?></td>
                                <td><?= htmlspecialchars(number_format((int)($row['原価管理TB_新::n_金額'] ?? 0))) ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['原価管理TB_新::d_支払日'] ?? '')) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9">データなし</td>
                        </tr>
                    <?php endif; ?>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td>請負合計：</td>
        <td>

            <?= htmlspecialchars(number_format((int)($record['fieldData']['nc_全体原価登録合計'] ?? 0))) ?>&nbsp;円
        </td>
    </tr>
    <tr>
        <td>原価計算：</td>
        <td>
            <div class="is-scroll-contents">
                <table class="is-portal">
                    <tr>
                        <th>工事概要</th>
                        <th>工事項目</th>
                        <th>工事内容</th>
                        <th>種類</th>
                        <th>単位</th>
                        <th>数量</th>
                        <th>単価</th>
                        <th>原価</th>
                    </tr>
                    <?php if (!empty($record['portalData']['原価表登録マスタ'])): ?>
                        <?php foreach ($record['portalData']['原価表登録マスタ'] as $row): ?>
                            <tr>
                                <td><?= htmlspecialchars($row['原価表登録マスタ::t_工事概要'] ?? '') ?></td>
                                <td><?= htmlspecialchars($row['原価表登録マスタ::t_工事項目'] ?? '') ?></td>
                                <td><?= htmlspecialchars($row['原価表登録マスタ::t_工事内容'] ?? '') ?></td>
                                <td><?= htmlspecialchars($row['原価表登録マスタ::t_工事種類'] ?? '') ?></td>
                                <td><?= htmlspecialchars($row['原価表登録マスタ::t_工事単位'] ?? '') ?></td>
                                <td><?= htmlspecialchars(number_format((int)($row['原価表登録マスタ::t_工事数量'] ?? 0))) ?></td>
                                <td><?= htmlspecialchars(number_format((int)($row['原価表登録マスタ::t_工事単価'] ?? 0))) ?></td>
                                <td><?= htmlspecialchars(number_format((int)($row['原価表登録マスタ::tc_原価合計'] ?? 0))) ?></td>
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
        <td>自社合計：</td>
        <td>
            <?= htmlspecialchars(number_format((int)($record['fieldData']['nc_原価登録合計'] ?? 0))) ?>&nbsp;円
        </td>
    </tr>

</table>