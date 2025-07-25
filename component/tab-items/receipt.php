<table>
    <tr>
        <td>領収書一覧：</td>
        <td>
            <div class="is-scroll-contents">
                <table class="is-portal">
                    <tr>
                        <th>ステータス</th>
                        <th>領収書番号</th>
                        <th>作成者</th>
                        <th>印刷日</th>
                        <th>金額</th>
                        <th>但書</th>
                        <th>確認依頼日</th>
                        <th>確認日</th>
                        <th>不備内容</th>
                        <th>不備完了日</th>
                        <th>完了日</th>
                        <th>営業連携ステータス</th>
                        <th>簡易メモ</th>
                    </tr>
                    <?php if (!empty($record['portalData']['領収書マスタ'])): ?>
                        <?php
                        foreach ($record['portalData']['領収書マスタ'] as $row):
                            $status = $row['領収書マスタ::ct_ステータス'] ?? '';
                            $style = ($status === '削除') ? 'background-color:#ffe6e6; color:#cc0000;' : '';
                        ?>
                            <tr style="<?= $style ?>">
                                <td><?= htmlspecialchars($status) ?></td>
                                <td><?= htmlspecialchars($row['領収書マスタ::n_領収書管理番号'] ?? '') ?></td>
                                <td><?= htmlspecialchars($row['領収書マスタ::作成者'] ?? '') ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['領収書マスタ::d_印刷日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars(number_format((int)($row['領収書マスタ::n_領収金額'] ?? 0))) ?></td>
                                <td><?= htmlspecialchars($row['領収書マスタ::t_但書'] ?? '') ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['領収書マスタ::d_営業連携_確認依頼日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['領収書マスタ::d_営業連携_営業確認日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars($row['領収書マスタ::t_営業連携_不備内容'] ?? '') ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['領収書マスタ::d_営業連携_不備完了日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['領収書マスタ::d_営業連携_完了日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars($row['領収書マスタ::ct_営業連携_ステータス'] ?? '') ?></td>
                                <td><?= htmlspecialchars($row['領収書マスタ::t_簡易メモ'] ?? '') ?></td>
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