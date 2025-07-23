<table>
    <tr>
        <td>確認項目：</td>
        <td>
            <div class="is-scroll-contents">
                <table class="is-portal">
                    <tr>
                        <th>書類</th>
                        <th>作成不要</th>
                        <th>作成者</th>
                        <th>作成日</th>
                        <th>クローザー発送日</th>
                        <th>顧客発送日</th>
                        <th>発送なし</th>
                    </tr>
                    <!-- 現地調査報告書 -->
                    <tr>
                        <td>現地調査報告書</td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_作成不要チェック_現地調査報告書"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_作成不要チェック_現地調査報告書'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                        <td>
                            <select class="editable" name="管理_作成者_現地調査報告書" data-valuelist="管理部人員">
                                <option value="<?= htmlspecialchars($record['fieldData']['管理_作成者_現地調査報告書']) ?>"></option>
                            </select>
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_作成日_現地調査報告書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_作成日_現地調査報告書'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_クローザー発送日_現地調査報告書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_クローザー発送日_現地調査報告書'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_顧客発送日_現地調査報告書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_顧客発送日_現地調査報告書'] ?? '')) ?>">
                        </td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_発送無し_現地調査報告書"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_発送無し_現地調査報告書'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                    </tr>
                    <!-- 見積書 -->
                    <tr>
                        <td>見積書</td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_作成不要チェック_見積書"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_作成不要チェック_見積書'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                        <td>
                            <select class="editable" name="管理_作成者_見積書" data-valuelist="管理部人員">
                                <option value="<?= htmlspecialchars($record['fieldData']['管理_作成者_見積書']) ?>"></option>
                            </select>
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_作成日_見積書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_作成日_見積書'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_クローザー発送日_見積書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_クローザー発送日_見積書'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_顧客発送日_見積書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_顧客発送日_見積書'] ?? '')) ?>">
                        </td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_発送無し_見積書"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_発送無し_見積書'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                    </tr>
                    <!-- 補助金SML -->
                    <tr>
                        <td>補助金SML</td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_作成不要チェック_補助金SML"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_作成不要チェック_補助金SML'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                        <td>
                            <select class="editable" name="管理_作成者_補助金SML" data-valuelist="管理部人員">
                                <option value="<?= htmlspecialchars($record['fieldData']['管理_作成者_補助金SML']) ?>"></option>
                            </select>
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_作成日_補助金SML" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_作成日_補助金SML'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_クローザー発送日_補助金SML" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_クローザー発送日_補助金SML'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_顧客発送日_補助金SML" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_顧客発送日_補助金SML'] ?? '')) ?>">
                        </td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_発送無し_補助金SML"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_発送無し_補助金SML'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                    </tr>
                    <!-- ローンSML -->
                    <tr>
                        <td>ローンSML</td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_作成不要チェック_ローンSML"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_作成不要チェック_ローンSML'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                        <td>
                            <select class="editable" name="管理_作成者_ローンSML" data-valuelist="管理部人員">
                                <option value="<?= htmlspecialchars($record['fieldData']['管理_作成者_ローンSML']) ?>"></option>
                            </select>
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_作成日_ローンSML" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_作成日_ローンSML'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_クローザー発送日_ローンSML" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_クローザー発送日_ローンSML'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_顧客発送日_ローンSML" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_顧客発送日_ローンSML'] ?? '')) ?>">
                        </td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_発送無し_ローンSML"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_発送無し_ローンSML'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                    </tr>
                    <!-- レイアウト -->
                    <tr>
                        <td>レイアウト</td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_作成不要チェック_レイアウト"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_作成不要チェック_レイアウト'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                        <td>
                            <select class="editable" name="管理_作成者_レイアウト" data-valuelist="管理部人員">
                                <option value="<?= htmlspecialchars($record['fieldData']['管理_作成者_レイアウト']) ?>"></option>
                            </select>
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_作成日_レイアウト" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_作成日_レイアウト'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_クローザー発送日_レイアウト" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_クローザー発送日_レイアウト'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_顧客発送日_レイアウト" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_顧客発送日_レイアウト'] ?? '')) ?>">
                        </td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_発送無し_レイアウト"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_発送無し_レイアウト'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                    </tr>
                    <!-- 請求書 -->
                    <tr>
                        <td>請求書</td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_作成不要チェック_請求書"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_作成不要チェック_請求書'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                        <td>
                            <select class="editable" name="管理_作成者_請求書" data-valuelist="管理部人員">
                                <option value="<?= htmlspecialchars($record['fieldData']['管理_作成者_請求書']) ?>"></option>
                            </select>
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_作成日_請求書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_作成日_請求書'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_クローザー発送日_請求書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_クローザー発送日_請求書'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_顧客発送日_請求書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_顧客発送日_請求書'] ?? '')) ?>">
                        </td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_発送無し_請求書"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_発送無し_請求書'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                    </tr>
                    <!-- 保証書 -->
                    <tr>
                        <td>保証書</td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_作成不要チェック_保証書"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_作成不要チェック_保証書'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                        <td>
                            <select class="editable" name="管理_作成者_保証書" data-valuelist="管理部人員">
                                <option value="<?= htmlspecialchars($record['fieldData']['管理_作成者_保証書']) ?>"></option>
                            </select>
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_作成日_保証書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_作成日_保証書'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_クローザー発送日_保証書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_クローザー発送日_保証書'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_顧客発送日_保証書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_顧客発送日_保証書'] ?? '')) ?>">
                        </td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_発送無し_保証書"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_発送無し_保証書'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                    </tr>
                    <!-- 完工写真 -->
                    <tr>
                        <td>
                            完工写真
                            <div class="editable-checkbox"
                                data-valuelist="3点格納"
                                data-name="t_3点格納"
                                data-selected="<?= htmlspecialchars($record['fieldData']['t_3点格納'] ?? '') ?>"
                                data-original-value="">
                            </div>
                        </td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_作成不要チェック_完工写真"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_作成不要チェック_完工写真'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                        <td>
                            <select class="editable" name="管理_作成者_完工写真" data-valuelist="管理部人員">
                                <option value="<?= htmlspecialchars($record['fieldData']['管理_作成者_完工写真']) ?>"></option>
                            </select>
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_作成日_完工写真" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_作成日_完工写真'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_クローザー発送日_完工写真" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_クローザー発送日_完工写真'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_顧客発送日_完工写真" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_顧客発送日_完工写真'] ?? '')) ?>">
                        </td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_発送無し_完工写真"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_発送無し_完工写真'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                    </tr>
                    <!-- 領収書 -->
                    <tr>
                        <td>領収書</td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_作成不要チェック_領収書"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_作成不要チェック_領収書'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                        <td>
                            <select class="editable" name="管理_作成者_領収書" data-valuelist="管理部人員">
                                <option value="<?= htmlspecialchars($record['fieldData']['管理_作成者_領収書']) ?>"></option>
                            </select>
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_作成日_領収書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_作成日_領収書'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_クローザー発送日_領収書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_クローザー発送日_領収書'] ?? '')) ?>">
                        </td>
                        <td>
                            <input type="date" class="editable" name="管理_顧客発送日_領収書" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['管理_顧客発送日_領収書'] ?? '')) ?>">
                        </td>
                        <td>
                            <div class="editable-checkbox"
                                data-valuelist="不要チェック"
                                data-name="管理_発送無し_領収書"
                                data-selected="<?= htmlspecialchars($record['fieldData']['管理_発送無し_領収書'] ?? '') ?>"
                                data-original-value=""
                                style="font-size: 0;">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td>見積期日：</td>
        <td>
            <input type="date" class="editable" name="d_3点見積作成期日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_3点見積作成期日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>請求書発送タイミング：</td>
        <td>
            <select class="editable" name="t_請求書発送タイミング" data-valuelist="請求書発送タイミング">
                <option value="<?= htmlspecialchars($record['fieldData']['t_請求書発送タイミング']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>完工日：</td>
        <td>
            <input type="date" class="editable" name="d_工務店完工日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_工務店完工日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>上乗せ見積額：</td>
        <td>
            <input type="text" class="editable number-comma" name="n_上乗せ見積額"
                value="<?= number_format((float)($record['fieldData']['n_上乗せ見積額'] ?? '')) ?>">&nbsp;円
        </td>
    </tr>

</table>