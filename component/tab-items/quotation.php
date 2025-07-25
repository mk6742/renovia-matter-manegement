<table>
    <tr>
        <td>見積書一覧：</td>
        <td>
            <div class="is-scroll-contents">
                <table class="is-portal">
                    <tr>
                        <th>ステータス</th>
                        <th>見積書番号</th>
                        <th>作成者</th>
                        <th>見積日</th>
                        <th>有効期限</th>
                        <th>合計金額</th>
                        <th>確認依頼日</th>
                        <th>確認日</th>
                        <th>不備完了日</th>
                        <th>完了日</th>
                        <th>営業連携ステータス</th>
                        <th>営業連携ワークフロー種別</th>
                        <th>最終原価反映</th>
                        <th>簡易メモ</th>
                    </tr>
                    <?php if (!empty($record['portalData']['見積書TB'])): ?>
                        <?php
                        foreach ($record['portalData']['見積書TB'] as $row):
                            $status = $row['見積書TB::tc_ステータス'] ?? '';
                            $style = ($status === '削除') ? 'background-color:#ffe6e6; color:#cc0000;' : '';
                        ?>
                            <tr style="<?= $style ?>">
                                <td><?= htmlspecialchars($status) ?></td>
                                <td><?= htmlspecialchars($row['見積書TB::n_見積書番号'] ?? '') ?></td>
                                <td><?= htmlspecialchars($row['見積書TB::作成者'] ?? '') ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['見積書TB::d_見積日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['見積書TB::d_有効期限'] ?? '')) ?></td>
                                <td><?= htmlspecialchars(number_format((int)($row['見積書TB::n_合計金額'] ?? 0))) ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['見積書TB::d_営業連携_確認依頼日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['見積書TB::d_営業連携_営業確認日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['見積書TB::d_営業連携_不備完了日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['見積書TB::d_営業連携_完了日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars($row['見積書TB::ct_営業連携_ステータス'] ?? '') ?></td>
                                <td><?= htmlspecialchars($row['見積書TB::t_営業連携_ワークフロー種別'] ?? '') ?></td>
                                <td>
                                    <div class="editable-checkbox"
                                        data-valuelist="再申請チェック"
                                        data-name="t_再申請"
                                        data-selected="<?= htmlspecialchars($record['fieldData']['t_再申請'] ?? '') ?>"
                                        data-original-value=""
                                        style="font-size: 0; pointer-events:none;">
                                    </div>
                                </td>
                                <td><?= htmlspecialchars($row['見積書TB::t_簡易メモ'] ?? '') ?></td>
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
</table>