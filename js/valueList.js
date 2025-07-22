// 値一覧
function updateValuelists() {
    const selects = document.querySelectorAll('select[data-valuelist]');
    const checkboxes = document.querySelectorAll('.editable-checkbox[data-valuelist]');

    const valuelistTypes = new Set();

    selects.forEach(el => valuelistTypes.add(el.dataset.valuelist));
    checkboxes.forEach(el => valuelistTypes.add(el.dataset.valuelist));

    if (valuelistTypes.size === 0) return Promise.resolve();

    const url = 'api/getValuelist.php?types=' + encodeURIComponent([...valuelistTypes].join(','));

    return fetch(url)
        .then(res => res.json())
        .then(data => {
            if (data.status !== 'success') return;

            selects.forEach(field => {
                const type = field.dataset.valuelist;
                const values = data.lists[type] || [];
                const currentValue = field.value;

                while (field.options.length > 1) field.remove(1);

                values.forEach(val => {
                    const option = document.createElement('option');
                    option.value = val;
                    option.textContent = val;
                    if (val === currentValue) option.selected = true;
                    field.appendChild(option);
                });
            });

            checkboxes.forEach(wrapper => {
                const type = wrapper.dataset.valuelist;
                const name = wrapper.dataset.name;
                const selectedRaw = wrapper.dataset.selected || '';
                const selected = selectedRaw.split(/\r?\n/); 
                const values = data.lists[type] || [];

                wrapper.innerHTML = values.map(val => {
                    const checked = selected.includes(val) ? 'checked' : '';
                    return `<label><input type="checkbox" name="${name}[]" value="${val}" ${checked}> ${val}</label>`;
                }).join('');
            });
        })
        .catch(err => {
            console.error('値一覧の取得に失敗しました:', err);
        });
}

// 初回読み込み時に呼ぶ
document.addEventListener('DOMContentLoaded', () => {
    updateValuelists();
});