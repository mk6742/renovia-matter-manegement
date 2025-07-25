<table>
    <tr>
        <td>営業確認一覧：</td>
        <td>
            <div class="is-scroll-contents">
                <table class="is-portal">
                    <tr>
                        <th>ステータス</th>
                        <th>確認依頼日</th>
                        <th>確認区分</th>
                        <th>管理担当</th>
                        <th>営業担当</th>
                        <th>回答日</th>
                        <th>完了日</th>
                        <th>確認内容</th>
                        <th>回答内容</th>
                    </tr>
                    <?php if (!empty($record['portalData']['営業確認管理TB'])): ?>
                        <?php
                        foreach ($record['portalData']['営業確認管理TB'] as $row):
                        ?>
                            <tr>
                                <td><?= htmlspecialchars($row['営業確認管理TB::t_ステータス'] ?? '') ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['営業確認管理TB::d_管理確認依頼日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars($row['営業確認管理TB::t_確認分類'] ?? '') ?></td>
                                <td><?= htmlspecialchars($row['営業確認管理TB::t_管理担当'] ?? '') ?></td>
                                <td><?= htmlspecialchars($row['営業確認管理TB::t_営業担当'] ?? '') ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['営業確認管理TB::d_営業回答日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars(formatDateForInput($row['営業確認管理TB::d_完了日'] ?? '')) ?></td>
                                <td><?= htmlspecialchars($row['営業確認管理TB::t_管理確認内容'] ?? '') ?></td>
                                <td><?= htmlspecialchars($row['営業確認管理TB::t_営業回答'] ?? '') ?></td>
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