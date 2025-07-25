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
                        ['label' => 'アポ情報', 'file' => 'apo.php'],
                        ['label' => 'アトカク情報', 'file' => 'atokaku-info.php'],
                        ['label' => 'アトカクチェック', 'file' => 'atokaku-check.php'],
                        ['label' => '現調情報', 'file' => 'field-survey.php'],
                        ['label' => '訪問履歴', 'file' => 'visit-history.php'],
                        ['label' => '定期訪問', 'file' => 'regular-visit.php'],
                        ['label' => 'クロージング連携情報', 'file' => 'closing-alignment.php'],
                        ['label' => 'キャンセル情報', 'file' => 'cancel-info.php'],
                        ['label' => '保険申請', 'file' => 'insurance.php'],
                        ['label' => '書類チェック', 'file' => 'document-check.php'],
                        ['label' => '書類進捗', 'file' => 'document-progress.php'],
                        ['label' => '創蓄情報', 'file' => 'solar.php'],
                        ['label' => '工事状況', 'file' => 'construction.php'],
                        ['label' => '施工箇所', 'file' => 'construction-scope.php'],
                        ['label' => '請負管理', 'file' => 'contract.php'],
                        ['label' => '請求／入金', 'file' => 'payment.php'],
                        ['label' => '金額計算', 'file' => 'calc.php'],
                        ['label' => '相殺管理', 'file' => 'offset.php'],
                        ['label' => '見積書管理', 'file' => 'quotation.php'],
                    ];
                    ?>

                    <div class="p-matter__center__record-list__item__main__contents__left__tab">
                        <div class="p-matter__center__record-list__item__main__contents__left__tab__btn tab-btn">
                            <span>詳細情報</span>
                            <ul>
                                <?php foreach ($tabs as $index => $tab): ?>
                                    <li class="<?= $index === 0 ? 'is-active' : '' ?>"><?= htmlspecialchars($tab['label']) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="p-matter__center__record-list__item__main__contents__left__tab__panel">
                            <?php foreach ($tabs as $tab): ?>
                                <?php include("component/tab-items/" . $tab['file']); ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- 右　基本情報・備考 -->
                <div class="p-matter__center__record-list__item__main__contents__right">
                    <div class="p-matter__center__record-list__item__main__contents__right__tab">
                        <div class="p-matter__center__record-list__item__main__contents__right__tab__btn tab-btn">
                            <span>基本情報・備考</span>
                            <ul>
                                <li class="is-active">基本情報</li>
                                <li>アトカクメモ</li>
                                <li>クロージング備考</li>
                                <li>工事備考</li>
                                <li>管理メモ</li>
                                <li>工事メモ</li>
                            </ul>
                        </div>

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>