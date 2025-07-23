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
                                <?= htmlspecialchars($record['fieldData']['ct_メインステータス'] ?? '') ?>
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
                </div>
            </div>

            <!-- 下　メイン -->
            <div class="p-matter__center__record-list__item__main__contents">

                <!-- 左　メインのパネル -->
                <div class="p-matter__center__record-list__item__main__contents__left">
                    <div class="p-matter__center__record-list__item__main__contents__left__tab">
                        <div class="p-matter__center__record-list__item__main__contents__left__tab__btn tab-btn">
                            <span>詳細情報</span>
                            <ul>
                                <li class="is-active">アポ情報</li>
                                <li>アトカク情報</li>
                                <li>アトカクチェック</li>
                                <li>現調情報</li>
                                <li>訪問履歴</li>
                                <li>定期訪問</li>
                                <li>クロージング連携情報</li>
                                <li>キャンセル情報</li>
                                <li>保険申請</li>
                                <li>書類チェック</li>
                                <li>書類進捗</li>
                                <li>創蓄情報</li>
                                <li>請求／入金</li>
                                <li>工事状況</li>
                                <li>請負管理</li>
                            </ul>
                        </div>

                        <div class="p-matter__center__record-list__item__main__contents__left__tab__panel">
                            <!-- アポ情報 -->
                            <?php
                            include('component/tab-items/apo.php');
                            ?>

                            <!-- アトカク情報 -->
                            <?php
                            include('component/tab-items/atokaku-info.php');
                            ?>

                            <!-- アトカクチェック -->
                            <?php
                            include('component/tab-items/atokaku-check.php');
                            ?>

                            <!-- 現調情報 -->
                            <?php
                            include('component/tab-items/field-survey.php');
                            ?>

                            <!-- 訪問履歴 -->
                            <?php
                            include('component/tab-items/visit-history.php');
                            ?>

                            <!-- 定期訪問 -->
                            <?php
                            include('component/tab-items/regular-visit.php');
                            ?>

                            <!-- クロージング連携情報 -->
                            <?php
                            include('component/tab-items/closing-alignment.php');
                            ?>

                            <!-- キャンセル情報 -->
                            <?php
                            include('component/tab-items/cancel-info.php');
                            ?>

                            <!-- 保険申請 -->
                            <?php
                            include('component/tab-items/insurance.php');
                            ?>

                            <!-- 書類チェック -->
                            <?php
                            include('component/tab-items/document-check.php');
                            ?>

                            <!-- 書類進捗 -->
                            <?php
                            include('component/tab-items/document-progress.php');
                            ?>

                            <!-- 創蓄情報 -->
                            <?php
                            include('component/tab-items/solar.php');
                            ?>

                            <!-- 請求／入金 -->
                            <?php
                            include('component/tab-items/payment.php');
                            ?>

                            <!-- 工事状況 -->
                            <?php
                            include('component/tab-items/construction.php');
                            ?>

                            <!-- 請負管理 -->
                            <?php
                            include('component/tab-items/contract.php');
                            ?>
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