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
    // 初期値を data 属性に保持
    input.dataset.originalValue = input.value;

    input.addEventListener('blur', function () {
        const recordDiv = input.closest('.p-matter__center__record-list__item');
        const recordId = recordDiv.dataset.recordId;
        const fieldName = input.name;
        let fieldValue = input.value;

        // 値が変わっていない場合は送信しない
        if (fieldValue === input.dataset.originalValue) {
            return;
        }

        // 日付フィールド：YYYY-MM-DD → MM/DD/YYYY
        if (input.type === 'date' && fieldValue) {
            const parts = fieldValue.split('-');
            fieldValue = `${parts[1]}/${parts[2]}/${parts[0]}`;
        }

        // 時刻フィールド：HH:MM → HH:MM:00
        if (input.type === 'time' && fieldValue) {
            if (!fieldValue.match(/^\d{2}:\d{2}:\d{2}$/)) {
                fieldValue = `${fieldValue}:00`;
            }
        }

        fetch('api/update.php', {
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
        .then(response => response.json())
        .then(data => {
            console.log("Update Response:", data);
            if (data.status === 'success') {
                input.style.backgroundColor = '#e6ffe6';
                input.dataset.originalValue = input.value; // 更新後の値を保存
            } else {
                input.style.backgroundColor = '#ffe6e6';
                console.log("保存失敗の詳細:", data.message);
            }
        })
        .catch(error => {
            input.style.backgroundColor = '#ffe6e6';
            console.error("通信エラー:", error);
        });
    });
});









