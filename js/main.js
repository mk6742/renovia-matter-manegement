// タブ切り替え ------------------------------------------------------------------------
function bindTabEvents() {
    document.querySelectorAll(".p-matter__center__record-list__item").forEach((container) => {
        const tabItems = container.querySelectorAll(".p-matter__center__record-list__item__main__contents__left__tab__btn li");
        const tabPanels = container.querySelectorAll(".p-matter__center__record-list__item__main__contents__left__tab__panel table");

        tabItems.forEach((tabItem) => {
            tabItem.addEventListener("click", () => {
                tabItems.forEach((t) => t.classList.remove("is-active"));
                tabPanels.forEach((p) => p.classList.remove("is-active"));

                tabItem.classList.add("is-active");
                const tabIndex = Array.from(tabItems).indexOf(tabItem);
                tabPanels[tabIndex].classList.add("is-active");
            });
        });
    });
}
// 初期表示分にバインド
bindTabEvents();




// 編集可能 ------------------------------------------------------------------------
document.querySelectorAll('.editable').forEach(input => {
    input.addEventListener('blur', function () {
        const recordDiv = input.closest('.p-matter__center__record-list__item');
        const recordId = recordDiv.dataset.recordId;
        const fieldName = input.name;
        let fieldValue = input.value;

        // デバッグログ（送信前）
        console.log('送信内容:', { recordId, fieldName, fieldValue });

        fetch('update.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                recordId,
                fieldName,
                fieldValue
            })
        })
            .then(response => {
                // 応答がJSONでない場合のエラーハンドリング
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                console.log('Update Response:', data); // ← ここでレスポンス全体を表示

                if (data.status === 'success') {
                    input.style.backgroundColor = '#e6ffe6'; // 成功時に薄緑
                } else {
                    input.style.backgroundColor = '#ffe6e6'; // 失敗時に赤
                    console.warn('保存失敗の詳細:', data.message, data.response);
                }
            })
            .catch(error => {
                console.error('通信エラー:', error);
                input.style.backgroundColor = '#ffe6e6'; // 通信エラーも赤
                setTimeout(() => input.style.backgroundColor = '', 1000);
            });
    });
});



