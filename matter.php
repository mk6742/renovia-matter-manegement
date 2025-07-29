<?php

require_once(__DIR__ . '/api/authCheck.php');

require_once(__DIR__ . '/api/init.php');

// ログイン中のユーザー名を取得
$id = htmlspecialchars($_SESSION['user']['id']);

// １０件ごとに追加で表示
$limit = 5;
$offset = 1;

include(__DIR__ . '/api/matterQuery.php');

?>

<?php
$title = '案件管理';
$description = '';
include('component/header.php');
?>

<body>
    <main class="p-matter">
        <div class="p-matter__left">
            <p>
                こんにちは！ <br>
                <?php echo $id; ?>さん
            </p>
        </div>

        <div class="p-matter__center">
            <div id="p-matter__center__record-list" class="p-matter__center__record-list">
                <?php include('matter-list-item.php'); ?>
            </div>

            <div id="loading" class="p-matter__center__loading">
                <p>読み込み中...</p>
                <div class="loading-spinner"></div>
            </div>
        </div>

        <div class="p-matter__right">
            <div class="p-matter__right__total">
                <p>
                    合計：<br>
                    <span><?= htmlspecialchars($record['fieldData']['gcn_対象レコード数'] ?? '') ?></span>
                    レコード
                </p>
            </div>

            <?php
            // 検索対象フィールドとラベル
            $fields = [
                'n_管理番号' => '管理番号',
                'ct_メインステータス' => 'ステータス',
                't_サブエントリーステータス' => 'サブステータス',
                't_契約者名' => '契約者名',
                'd_受付日' => '受付日',
                't_アポ担当者' => '担当',
                't_支店判別' => '支店',
                'd_アポイント希望日' => 'アポイント希望日',
                't_保険会社証書' => '保険会社',
            ];

            // バリューリストに対応するフィールド
            $valueListMapping = [
                'ct_メインステータス' => 'メインステータス',
                't_サブエントリーステータス' => 'サブステータス',
                't_アポ担当者' => '担当者一覧',
                't_保険会社証書' => '保険会社証書',
            ];

            // 日付フィールド
            $dateFields = [
                'd_受付日',
                'd_アポイント希望日'
            ];
            ?>

            <form method="GET" action="">
                <div class="select-wrap">
                    <p>検索対象：</p>
                    <select name="field" id="search-field">
                        <?php foreach ($fields as $key => $label):
                            $selected = ($_GET['field'] ?? '') === $key ? 'selected' : '';
                            $valuelistAttr = isset($valueListMapping[$key]) ? 'data-valuelist="' . $valueListMapping[$key] . '"' : '';
                        ?>
                            <option value="<?= $key ?>" <?= $selected ?> <?= $valuelistAttr ?>><?= $label ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="input-wrap" id="input-area">
                    <!-- 初期表示用：JSで上書きされます -->
                    <img src="./img/search.svg" alt="">
                    <input type="text" name="keyword" id="keyword-input" value="<?= htmlspecialchars($_GET['keyword'] ?? '') ?>" placeholder="検索">
                </div>

                <button type="submit">検索</button>
            </form>

            <script>
                const valueListMapping = <?= json_encode($valueListMapping, JSON_UNESCAPED_UNICODE) ?>;
                const dateFields = <?= json_encode($dateFields) ?>;
                const fieldSelect = document.getElementById('search-field');
                const inputArea = document.getElementById('input-area');

                // 入力フィールドを更新
                function updateInputField() {
                    const selectedOption = fieldSelect.options[fieldSelect.selectedIndex];
                    const selectedField = fieldSelect.value;
                    const valuelistName = selectedOption.dataset.valuelist;
                    const currentKeyword = <?= json_encode($_GET['keyword'] ?? '', JSON_UNESCAPED_UNICODE) ?>;

                    inputArea.innerHTML = '<img src="./img/search.svg" alt="">';

                    if (dateFields.includes(selectedField)) {
                        inputArea.innerHTML += `<input type="date" name="keyword" value="">`;
                        // キーワードが日付形式（例：2025/7/29）なら value に変換してセット
                        const parts = currentKeyword.split('/');
                        if (parts.length === 3) {
                            const y = parts[2].padStart(4, '0');
                            const m = parts[0].padStart(2, '0');
                            const d = parts[1].padStart(2, '0');
                            inputArea.querySelector('input[type="date"]').value = `${y}-${m}-${d}`;
                        }
                    } else if (valuelistName) {
                        inputArea.innerHTML += `<select name="keyword" data-valuelist="${valuelistName}"><option value=""></option></select>`;
                        updateValuelists();
                    } else {
                        inputArea.innerHTML += `<input type="text" name="keyword" value="${currentKeyword}" placeholder="検索">`;
                    }
                }

                // 値一覧を取得してセレクトボックスに反映
                function updateValuelists() {
                    const selects = document.querySelectorAll('select[data-valuelist]');
                    if (selects.length === 0) return;

                    const valuelistTypes = new Set();
                    selects.forEach(el => valuelistTypes.add(el.dataset.valuelist));

                    const url = 'api/getValuelist.php?types=' + encodeURIComponent([...valuelistTypes].join(','));

                    fetch(url)
                        .then(res => res.json())
                        .then(data => {
                            if (data.status !== 'success') return;
                            selects.forEach(field => {
                                const type = field.dataset.valuelist;
                                const values = data.lists[type] || [];
                                const currentValue = <?= json_encode($_GET['keyword'] ?? '') ?>;
                                while (field.options.length > 1) field.remove(1);
                                values.forEach(val => {
                                    const option = document.createElement('option');
                                    option.value = val;
                                    option.textContent = val;
                                    if (val === currentValue) option.selected = true;
                                    field.appendChild(option);
                                });
                            });
                        })
                        .catch(err => {
                            console.error('値一覧の取得に失敗しました:', err);
                        });
                }

                // 日付送信時に「7/29/2025」形式に変換
                document.querySelector('form').addEventListener('submit', function(e) {
                    const selectedField = fieldSelect.value;
                    if (dateFields.includes(selectedField)) {
                        const dateInput = this.querySelector('input[type="date"]');
                        if (dateInput && dateInput.value) {
                            const parts = dateInput.value.split('-'); // yyyy-mm-dd
                            const formatted = `${parseInt(parts[1])}/${parseInt(parts[2])}/${parseInt(parts[0])}`;

                            const hidden = document.createElement('input');
                            hidden.type = 'hidden';
                            hidden.name = 'keyword';
                            hidden.value = formatted;
                            this.appendChild(hidden);

                            dateInput.name = ''; // 重複防止
                        }
                    }
                });

                // 初期表示
                document.addEventListener('DOMContentLoaded', () => {
                    updateInputField();
                    updateValuelists();
                    fieldSelect.addEventListener('change', () => {
                        updateInputField();
                    });
                });
            </script>

            <nav class="p-matter__right__nav">
                <a href="api/logout.php">ログアウト</a>

            </nav>

        </div>
    </main>


    <!-- スクロールで更新 -->
    <script>
        let offset = <?= $limit ?>;
        const limit = <?= $limit ?>;
        let loading = false;

        // 検索フォームの要素取得
        const form = document.querySelector('.p-matter__right form');
        const selectField = form.querySelector('select[name="field"]');
        const inputKeyword = form.querySelector('input[name="keyword"]');

        // 現在の検索条件を保存
        let currentField = selectField.value;
        let currentKeyword = inputKeyword.value.trim();

        // 検索フォームのinputやselectが変わったら条件更新してリセット
        function resetAndSearch() {
            offset = 0;
            currentField = selectField.value;
            currentKeyword = inputKeyword.value.trim();
            document.getElementById('p-matter__center__record-list').innerHTML = ''; // リストクリア
            loadRecords();
        }

        selectField.addEventListener('change', resetAndSearch);

        function loadRecords() {
            if (loading) return;
            loading = true;
            document.getElementById('loading').style.display = 'block';

            let url = `load.php?offset=${offset}&limit=${limit}`;
            if (currentField) url += `&field=${encodeURIComponent(currentField)}`;
            if (currentKeyword) url += `&keyword=${encodeURIComponent(currentKeyword)}`;

            fetch(url)
                .then(res => res.text())
                .then(html => {
                    if (html.trim() === '') {
                        document.getElementById('loading').innerText = 'これ以上データはありません';
                        window.removeEventListener('scroll', onScrollHandler);
                        return;
                    }
                    document.getElementById('p-matter__center__record-list').insertAdjacentHTML('beforeend', html);

                    bindTabEvents();
                    updateValuelists();

                    offset += limit;
                    loading = false;
                    document.getElementById('loading').style.display = 'none';
                })
                .catch(err => {
                    console.error(err);
                    loading = false;
                    document.getElementById('loading').style.display = 'none';
                });
        }

        function onScrollHandler() {
            const scrollY = window.scrollY + window.innerHeight;
            const documentHeight = document.body.offsetHeight;

            if (scrollY + 100 >= documentHeight) {
                loadRecords();
            }
        }

        window.addEventListener('scroll', onScrollHandler);

        // ページロード時に初回読み込み
        loadRecords();
    </script>

    <!-- 創蓄セレクト出し分け -->
    <script>
        (function() {
            const roofOptions_<?= $recordId ?> = <?= json_encode($roofOptions, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>;
            const selectedMain_<?= $recordId ?> = <?= json_encode($selectedMain) ?>;
            const selectedSub_<?= $recordId ?> = <?= json_encode($selectedSub) ?>;

            const subSelect = document.getElementById('roof-sub-<?= $recordId ?>');
            const mainSelect = document.getElementById('roof-main-<?= $recordId ?>');

            function populateSubOptions_<?= $recordId ?>(mainType, selectedValue = '') {
                const hideTypes = ['スレート', 'アスファルトシングル'];

                if (hideTypes.includes(mainType)) {
                    subSelect.style.display = 'none';
                    subSelect.innerHTML = '';
                    return;
                }

                subSelect.style.display = '';
                subSelect.innerHTML = '<option value="">選択してください</option>';

                const subOptions = roofOptions_<?= $recordId ?>[mainType] || [];

                subOptions.forEach(function(subVal) {
                    const opt = document.createElement('option');
                    opt.value = subVal;
                    opt.textContent = subVal;
                    if (subVal === selectedValue) opt.selected = true;
                    subSelect.appendChild(opt);
                });
            }

            // 初期表示
            window.addEventListener('DOMContentLoaded', function() {
                if (selectedMain_<?= $recordId ?>) {
                    populateSubOptions_<?= $recordId ?>(selectedMain_<?= $recordId ?>, selectedSub_<?= $recordId ?>);
                }
            });

            // メイン変更時
            mainSelect.addEventListener('change', function() {
                populateSubOptions_<?= $recordId ?>(this.value);
            });
        })();
    </script>



    <script src="./js/valueList.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>