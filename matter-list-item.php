<?php foreach ($records as $record):
    require_once(__DIR__ . '/functions.php');

    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
?>


    <div class="p-matter__center__record-list__item" data-record-id="<?= $record['recordId'] ?>">
        <div class="p-matter__center__record-list__item__main">
            <!-- 上　名前・管理番号・ステータス -->
            <div class="p-matter__center__record-list__item__main__heading">
                <div class="p-matter__center__record-list__item__main__heading__left">
                    <span>
                        <img src="./img/man.svg" alt="">
                    </span>
                    <div class="p-matter__center__record-list__item__main__heading__left__texts">
                        <div class="p-matter__center__record-list__item__main__heading__left__texts__name">
                            <p>
                                <input type="text" class="editable" name="t_契約者名カナ" value="<?= htmlspecialchars($record['fieldData']['t_契約者名カナ'] ?? '') ?>">
                            </p>
                            <p>
                                <input type="text" class="editable" name="t_契約者名" value="<?= htmlspecialchars($record['fieldData']['t_契約者名'] ?? '') ?>">
                            </p>
                        </div>

                        <div class="p-matter__center__record-list__item__main__heading__left__texts__number">
                            <p>管理番号：<?= htmlspecialchars($record['fieldData']['n_管理番号'] ?? '') ?></p>
                        </div>
                    </div>
                </div>

                <div class="p-matter__center__record-list__item__main__heading__right">
                    <div class="p-matter__center__record-list__item__main__heading__right__status">
                        <div class="p-matter__center__record-list__item__main__heading__right__status__item">
                            <span>ステータス：</span>
                            <p>
                                <select class="editable" name="ct_メインステータス" data-valuelist="メインステータス">
                                    <option value="<?= htmlspecialchars($record['fieldData']['ct_メインステータス']) ?>">
                                        <?= htmlspecialchars($record['fieldData']['ct_メインステータス']) ?>
                                    </option>
                                </select>
                            </p>
                        </div>
                        <div class="p-matter__center__record-list__item__main__heading__right__status__item">
                            <span>サブステータス：</span>
                            <p>
                                <select class="editable" name="t_サブエントリーステータス" data-valuelist="サブステータス">
                                    <option value="<?= htmlspecialchars($record['fieldData']['t_サブエントリーステータス']) ?>">
                                        <?= htmlspecialchars($record['fieldData']['t_サブエントリーステータス']) ?>
                                    </option>
                                </select>
                            </p>
                        </div>
                    </div>

                    <div class="p-matter__center__record-list__item__main__heading__right__number">
                        <p>顧客管理番号：<?= htmlspecialchars($record['fieldData']['n_顧客管理番号'] ?? '') ?></p>
                        <p>旧管理番号：<?= htmlspecialchars($record['fieldData']['n_旧管理番号'] ?? '') ?></p>
                    </div>
                </div>
            </div>

            <!-- 下　メイン -->
            <div class="p-matter__center__record-list__item__main__contents">

                <!-- 左　メインのパネル -->
                <div class="p-matter__center__record-list__item__main__contents__left">

                    <?php
                    $tabs = [
                        [
                            'label' => 'アポ',
                            'subtabs' => [
                                ['label' => 'アポ詳細', 'file' => 'apo.php'],
                                ['label' => 'アトカク情報', 'file' => 'atokaku-info.php'],
                                ['label' => 'アトカクチェック', 'file' => 'atokaku-check.php'],
                                ['label' => 'アトカクメモ', 'file' => 'atokaku-memo.php'],
                            ]
                        ],
                        [
                            'label' => '管理',
                            'subtabs' => [
                                ['label' => '保険申請', 'file' => 'insurance.php'],
                                ['label' => '書類チェック', 'file' => 'document-check.php'],
                                ['label' => 'クロージング連携情報', 'file' => 'closing-alignment.php'],
                                ['label' => '定期訪問', 'file' => 'regular-visit.php'],
                                ['label' => '訪問履歴', 'file' => 'visit-history.php'],
                                ['label' => '書類進捗', 'file' => 'document-progress.php'],
                                ['label' => '創蓄情報', 'file' => 'solar.php'],
                                ['label' => '施工箇所', 'file' => 'construction-scope.php'],
                                ['label' => '管理メモ', 'file' => 'management-memo.php'],
                            ]
                        ],
                        [
                            'label' => '原価／施工管理',
                            'subtabs' => [
                                ['label' => '請負管理', 'file' => 'contract.php'],
                                ['label' => '工事状況', 'file' => 'construction.php'],
                                ['label' => '請求／入金', 'file' => 'payment.php'],
                                ['label' => '金額計算', 'file' => 'calc.php'],
                                ['label' => '相殺管理', 'file' => 'offset.php'],
                                ['label' => '工事メモ', 'file' => 'construction-memo.php'],
                            ]
                        ],
                        [
                            'label' => '見積／請求／保証／領収',
                            'subtabs' => [
                                ['label' => '見積書管理', 'file' => 'quotation.php'],
                                ['label' => '請求書管理', 'file' => 'invoice.php'],
                                ['label' => '保証書管理', 'file' => 'warranty.php'],
                                ['label' => '領収書管理', 'file' => 'receipt.php'],
                                ['label' => '営業確認管理', 'file' => 'sales-check.php'],
                            ]
                        ],
                        [
                            'label' => 'コジマ',
                            'subtabs' => [
                                ['label' => 'アポ獲得情報', 'file' => 'apo-aquisition.php'],
                                ['label' => '受注情報', 'file' => 'order.php'],
                                ['label' => 'SF情報', 'file' => 'sf.php'],
                                ['label' => '現調情報', 'file' => 'field-survey.php'],
                                ['label' => '見積情報', 'file' => 'quotation-info.php'],
                                ['label' => 'ASLES入金', 'file' => 'asles-payment.php'],
                                ['label' => 'コジマ店舗売上', 'file' => 'kojima-sales.php'],
                                ['label' => 'キャンセル情報', 'file' => 'cancel-info.php'],
                                ['label' => 'アトカクメモ', 'file' => 'atokaku-memo.php'],
                            ]
                        ],
                        [
                            'label' => 'FIT申請／補助金',
                            'subtabs' => [
                                ['label' => 'FIT申請／系統関連', 'file' => 'fit.php'],
                            ]
                        ],
                    ];
                    ?>

                    <div class="p-matter__center__record-list__item__main__contents__left__tab">
                        <ul class="p-matter__center__record-list__item__main__contents__left__tab__btn">
                            <?php foreach ($tabs as $i => $tab): ?>
                                <li class="<?= $i === 0 ? 'is-active' : '' ?>"><?= htmlspecialchars($tab['label']) ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="p-matter__center__record-list__item__main__contents__left__tab__panels">
                            <?php foreach ($tabs as $i => $tab): ?>
                                <div class="p-matter__center__record-list__item__main__contents__left__tab__panels__item <?= $i === 0 ? 'is-active' : '' ?>">
                                    <ul class="p-matter__center__record-list__item__main__contents__left__tab__panels__item__btn tab-btn">
                                        <?php foreach ($tab['subtabs'] as $j => $subtab): ?>
                                            <li class="<?= $j === 0 ? 'is-active' : '' ?>"><?= htmlspecialchars($subtab['label']) ?></li>
                                        <?php endforeach; ?>
                                    </ul>

                                    <?php foreach ($tab['subtabs'] as $j => $subtab): ?>
                                        <div class="p-matter__center__record-list__item__main__contents__left__tab__panels__item__panel <?= $j === 0 ? 'is-active' : '' ?>">
                                            <?php include("component/tab-items/" . $subtab['file']); ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>

                <!-- 右　基本情報・備考 -->
                <div class="p-matter__center__record-list__item__main__contents__right">
                    <div class="p-matter__center__record-list__item__main__contents__right__tab">
                        <ul class="p-matter__center__record-list__item__main__contents__right__tab__btn tab-btn">
                            <li class="is-active">基本情報</li>
                            <li>アトカクメモ</li>
                            <li>クロージング備考</li>
                            <li>工事備考</li>
                            <li>管理メモ</li>
                            <li>工事メモ</li>
                            <li>重複</li>
                        </ul>

                        <div class="p-matter__center__record-list__item__main__contents__right__tab__panel">
                            <!-- 基本情報 -->
                            <?php
                            include('component/tab-items/info.php');
                            ?>

                            <!-- アトカクメモ -->
                            <textarea class="editable" name="t_アポイントmemo">
                                <?= htmlspecialchars($record['fieldData']['t_アポイントmemo'] ?? '') ?>
                            </textarea>

                            <!-- クロージング備考 -->
                            <textarea class="editable" name="t_クロージング備考">
                                <?= htmlspecialchars($record['fieldData']['t_クロージング備考'] ?? '') ?>
                            </textarea>

                            <!-- 工事備考 -->
                            <textarea class="editable" name="t_工事備考">
                                <?= htmlspecialchars($record['fieldData']['t_工事備考'] ?? '') ?>
                            </textarea>

                            <!-- 管理メモ -->
                            <textarea class="editable" name="t_管理メモ">
                                <?= htmlspecialchars($record['fieldData']['t_管理メモ'] ?? '') ?>
                            </textarea>

                            <!-- 工事メモ -->
                            <textarea class="editable" name="t_工事memo">
                                <?= htmlspecialchars($record['fieldData']['t_工事memo'] ?? '') ?>
                            </textarea>

                            <!-- 重複 -->
                            <?php
                            include('component/tab-items/duplication.php');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>