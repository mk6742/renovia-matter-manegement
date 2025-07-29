<table>
    <tr>
        <td>有無：</td>
        <td>
            <div class="editable-checkbox is-flex-list"
                data-valuelist="完工報告用1"
                data-name="FIT管理_t_有無"
                data-selected="<?= htmlspecialchars($record['fieldData']['FIT管理_t_有無'] ?? '') ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>FIT種別：</td>
        <td>
            <select class="editable" name="FIT管理_t_FIT種別" data-valuelist="FIT種別">
                <option value="<?= htmlspecialchars($record['fieldData']['FIT管理_t_FIT種別']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>FIT申請者：</td>
        <td>
            <select class="editable" name="FIT管理_t_FIT申請者" data-valuelist="FIT申請者">
                <option value="<?= htmlspecialchars($record['fieldData']['FIT管理_t_FIT申請者']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>受給契約申込書返信日：</td>
        <td>
            <input type="date" class="editable" name="FIT管理_d_受給契約申込書返信日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['FIT管理_d_受給契約申込書返信日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>FIT回収書類：</td>
        <td>
            <div class="editable-checkbox is-flex-list"
                data-valuelist="新規値一覧"
                data-name="FIT管理_t_回収書類"
                data-selected="<?= htmlspecialchars($record['fieldData']['FIT管理_t_回収書類'] ?? '') ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>印鑑証明：</td>
        <td>
            <table>
                <tr>
                    <td>取得日</td>
                    <td>
                        <input type="date" class="editable" name="FIT管理_d_FIT印鑑証明取得日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['FIT管理_d_FIT印鑑証明取得日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>期日</td>
                    <td>
                        <input type="date" class="editable" name="FIT管理_d_FIT印鑑証明期日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['FIT管理_d_FIT印鑑証明期日'] ?? '')) ?>">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>登記簿：</td>
        <td>
            <table>
                <tr>
                    <td>取得日</td>
                    <td>
                        <input type="date" class="editable" name="FIT管理_d_FIT建物登記簿取得日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['FIT管理_d_FIT建物登記簿取得日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>期日</td>
                    <td>
                        <input type="date" class="editable" name="FIT管理_d_FIT建物登記簿期日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['FIT管理_d_FIT建物登記簿期日'] ?? '')) ?>">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>FIT申請日：</td>
        <td>
            <input type="date" class="editable" name="FIT管理_d_FIT申請日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['FIT管理_d_FIT申請日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>FIT認定日：</td>
        <td>
            <input type="date" class="editable" name="FIT管理_d_FIT認定日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['FIT管理_d_FIT認定日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>系統連系日：</td>
        <td>
            <input type="date" class="editable" name="FIT管理_d_系統連系日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['FIT管理_d_系統連系日'] ?? '')) ?>">
        </td>
    </tr>
</table>