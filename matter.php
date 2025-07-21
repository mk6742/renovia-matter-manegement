<?php

require_once(__DIR__ . '/api/authCheck.php');

require_once(__DIR__ . '/api/init.php');

// ログイン中のユーザー名を取得
$id = htmlspecialchars($_SESSION['user']['id']);

// １０件ごとに追加で表示
$limit = 10;
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

            <div id="loading" class="loading">読み込み中...</div>
        </div>

        <div class="p-matter__right">
            <form method="GET" action="">
                <div class="select-wrap">
                    <p>検索対象：</p>
                    <select name="field">
                        <option value="n_管理番号" <?= ($_GET['field'] ?? '') === 'n_管理番号' ? 'selected' : '' ?>>管理番号</option>
                        <option value="t_エントリーステータス" <?= ($_GET['field'] ?? '') === 't_エントリーステータス' ? 'selected' : '' ?>>ステータス</option>
                        <option value="t_サブエントリーステータス" <?= ($_GET['field'] ?? '') === 't_サブエントリーステータス' ? 'selected' : '' ?>>サブステータス</option>
                        <option value="t_契約者名" <?= ($_GET['field'] ?? '') === 't_契約者名' ? 'selected' : '' ?>>契約者名</option>
                        <option value="d_受付日" <?= ($_GET['field'] ?? '') === 'd_受付日' ? 'selected' : '' ?>>受付日</option>
                        <option value="t_アポ担当者" <?= ($_GET['field'] ?? '') === 't_アポ担当者' ? 'selected' : '' ?>>担当</option>
                        <option value="t_支店判別" <?= ($_GET['field'] ?? '') === 't_支店判別' ? 'selected' : '' ?>>支店</option>
                        <option value="d_アポイント希望日" <?= ($_GET['field'] ?? '') === 'd_アポイント希望日' ? 'selected' : '' ?>>コール希望日</option>
                        <option value="t_保険会社証書" <?= ($_GET['field'] ?? '') === 't_保険会社証書' ? 'selected' : '' ?>>保険会社</option>

                    </select>
                </div>

                <div class="input-wrap">
                    <img src="./img/search.svg" alt="">
                    <input type="text" name="keyword" value="<?= htmlspecialchars($_GET['keyword'] ?? '') ?>" placeholder="検索">
                </div>
            </form>

            <a href="api/logout.php">ログアウト</a>

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

    <script src="./js/valueList.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>