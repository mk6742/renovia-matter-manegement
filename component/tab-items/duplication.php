<div class="p-matter__center__record-list__item__main__contents__right__tab__panel__duplication">
    <p>
        重複データ数：<?= htmlspecialchars($record['fieldData']['gcn_重複データ数'] ?? '') ?>
    </p>
    <?php if (!empty($record['portalData']['案件マスタ_重複表示用'])): ?>
        <?php
        foreach ($record['portalData']['案件マスタ_重複表示用'] as $row):
            $kanriNo = htmlspecialchars($row['案件マスタ_重複表示用::n_管理番号'] ?? '');
        ?>
            <div
                class="p-matter__center__record-list__item__main__contents__right__tab__panel__duplication__item"
                onclick="window.open('?field=n_管理番号&keyword=<?= urlencode($kanriNo) ?>', '_blank')">
                <div class="p-matter__center__record-list__item__main__contents__right__tab__panel__duplication__item__text">
                    <p><?= $kanriNo ?></p>
                    <p><?= htmlspecialchars($row['案件マスタ_重複表示用::t_契約者名'] ?? '') ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>重複なし</p>
    <?php endif; ?>
</div>