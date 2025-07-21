// タブ切り替え ------------------------------------------------------------------------
function bindTabEvents() {
    document.querySelectorAll(".p-matter__center__record-list__item").forEach((container) => {
        const tabItems = container.querySelectorAll(".p-matter__center__record-list__item__main__contents__left__tab__btn li");
        const tabPanels = container.querySelectorAll(".p-matter__center__record-list__item__main__contents__left__tab__panel > table");

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




// 編集機能 ------------------------------------------------------------------------
{
    function removeErrorMessage(target) {
        const next = target.querySelector?.('.error-message') || target.nextElementSibling;
        if (next?.classList.contains('error-message')) next.remove();
    }
    
    function showErrorMessage(target, message) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'error-message';
        errorDiv.textContent = message;
    
        // 一度削除してから追加（重複防止）
        removeErrorMessage(target);
    
        // input の場合は親の直後に挿入
        if (target.tagName === 'INPUT' || target.tagName === 'SELECT' || target.tagName === 'TEXTAREA') {
            target.parentNode.insertBefore(errorDiv, target.nextSibling);
        } else {
            // それ以外（wrapperなど）は中に追加
            target.appendChild(errorDiv);
        }
    }
    
    
    function updateField({ recordId, fieldName, fieldValue, target }) {
        const parent = target.parentElement;
    
        // 既存スピナー削除
        parent.querySelectorAll('.loading-spinner').forEach(el => el.remove());
    
        // スピナー追加
        const loader = document.createElement('div');
        loader.className = 'loading-spinner';
        parent.appendChild(loader);
    
        fetch('api/update.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({ recordId, fieldName, fieldValue })
        })
        .then(res => res.json())
        .then(data => {
            loader.remove(); // スピナー削除
    
            if (data.status === 'success') {
                target.style.backgroundColor = '#e6ffe6';
                target.dataset.originalValue = target.value;
            } else {
                target.style.backgroundColor = '#ffe6e6';
                const error301 = data.response?.messages?.find(msg => msg.code === '301');
                if (error301) {
                    showErrorMessage(target, 'このレコードは他のユーザーによって編集中です。保存できませんでした。');
                }
                console.log("保存失敗の詳細:", data.message);
            }
        })
        .catch(err => {
            loader.remove(); // 通信エラー時もスピナー削除
            target.style.backgroundColor = '#ffe6e6';
            console.error("通信エラー:", err);
        });
    }
    
    
    document.querySelectorAll('.editable').forEach(input => {
        input.dataset.originalValue = input.value;
    
        input.addEventListener('blur', function () {
            const recordDiv = input.closest('.p-matter__center__record-list__item');
            const recordId = recordDiv?.dataset?.recordId;
            const fieldName = input.name;
            let fieldValue = input.value;
    
            removeErrorMessage(input);
    
            if (fieldValue === input.dataset.originalValue) {
                // 変更がなかった場合、背景色を元に戻す
                input.style.backgroundColor = 'rgb(246, 246, 246)';
                return;
            }
    
            // フォーマット補正
            if (input.type === 'date' && fieldValue) {
                const [y, m, d] = fieldValue.split('-');
                fieldValue = `${m}/${d}/${y}`;
            } else if (input.type === 'time' && fieldValue && !fieldValue.includes(':00')) {
                fieldValue += ':00';
            }
    
            updateField({ recordId, fieldName, fieldValue, target: input });
        });
    });
    
    document.addEventListener('change', function (e) {
        if (!e.target.matches('.editable-checkbox input[type="checkbox"]')) return;
    
        const wrapper = e.target.closest('.editable-checkbox');
        const recordDiv = wrapper.closest('.p-matter__center__record-list__item');
        const recordId = recordDiv?.dataset?.recordId;
        const fieldName = wrapper.dataset.name;
        const fieldValue = Array.from(wrapper.querySelectorAll('input:checked')).map(cb => cb.value).join('¶');
    
        removeErrorMessage(wrapper);
        updateField({ recordId, fieldName, fieldValue, target: wrapper });
    });
}




// filemakerスクリプト実行 ------------------------------------------------------------------------
document.querySelectorAll('.fm-script-btn').forEach(button => {
    button.addEventListener('click', () => {
        const script = button.dataset.script;
        const recordId = button.dataset.recordId;
        let param = button.dataset.param || '';

        // レコードIDをパラメータとして付加（既存paramがあるならカンマ区切りでもOK）
        if (recordId) {
            param = param ? `${param},${recordId}` : recordId;
        }
        console.log(param); 
        const parent = button.parentElement;

        parent.querySelectorAll('.custom-alert, .loading-spinner').forEach(el => el.remove());

        const loader = document.createElement('div');
        loader.className = 'loading-spinner';
        parent.appendChild(loader);

        fetch('api/runScript.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ script, param })
        })
        .then(res => res.json())
        .then(data => {
            loader.remove();
            showCustomAlert(parent, 'success', `「${script}」の実行に成功しました`);
        })
        .catch(err => {
            loader.remove();
            showCustomAlert(parent, 'error', '通信エラーが発生しました');
        });
    });

    function showCustomAlert(container, type, message) {
        const alert = document.createElement('div');
        alert.className = `custom-alert`;
        alert.innerHTML = `
            <div class="custom-alert__inner">
            <p class="${type}">${message}</p>
            <button>閉じる</button>
            </div>
        `;
        container.appendChild(alert);
        alert.querySelector('button').addEventListener('click', () => {
            alert.remove();
        });
    }
});





