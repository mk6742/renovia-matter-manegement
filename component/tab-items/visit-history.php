<table>
    <tr>
        <td>訪問履歴：</td>
        <td>
            <div class="is-scroll-contents">
                <table class="is-portal">
                    <tr>
                        <th>訪問目的</th>
                        <th>区分</th>
                        <th>訪問日</th>
                        <th>訪問時間</th>
                        <th>訪問担当</th>
                        <th>備考</th>
                    </tr>
                    <?php if (!empty($record['portalData']['訪問履歴管理TB'])): ?>
                        <?php foreach ($record['portalData']['訪問履歴管理TB'] as $row): ?>
                            <tr>
                                <td>
                                    <?= htmlspecialchars($row['訪問履歴管理TB::t_訪問目的']) ?>
                                </td>
                                <td>
                                    <?= htmlspecialchars($row['訪問履歴管理TB::t_区分']) ?>
                                </td>
                                <td>
                                    <?= htmlspecialchars(formatDateForInput($row['訪問履歴管理TB::d_訪問日'])) ?>
                                </td>
                                <td>
                                    <?= htmlspecialchars(formatTimeJP($row['訪問履歴管理TB::ti_訪問時間1'] ?? '')) ?> ~ <?= htmlspecialchars(formatTimeJP($row['訪問履歴管理TB::ti_訪問時間2'] ?? '')) ?>
                                </td>
                                <td>
                                    <?= htmlspecialchars($row['訪問履歴管理TB::t_訪問担当']) ?>
                                </td>
                                <td>
                                    <?= htmlspecialchars($row['訪問履歴管理TB::t_訪問備考']) ?>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8">データなし</td>
                        </tr>
                    <?php endif; ?>

                </table>
            </div>
            <p style="text-align: end;">
                訪問回数：
                <?= htmlspecialchars($record['fieldData']['cn_総計訪問回数'] ?? '') ?>回
            </p>
        </td>
    </tr>

</table>