<table>
    <tr>
        <td>屋根：</td>
        <td>
            <table>
                <tr>
                    <td>形状</td>
                    <td>
                        <select class="editable" name="t_太陽光_屋根形状" data-valuelist="屋根形状">
                            <option value="<?= htmlspecialchars($record['fieldData']['t_太陽光_屋根形状']) ?>"></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>屋根材</td>
                    <td>
                        <?php
                        // レコード固有ID（例: DBの内部ID、またはランダムでも可）
                        $recordId = $record['recordId'] ?? uniqid('roof_');

                        // プルダウン用データ取得
                        $roof = $curlclass->getrecords($URL, $DB, '屋根種別プルダウン選択用TB', $token);

                        // 編集対象レコード（別で取得済と仮定）
                        $editRecord = $record['fieldData'] ?? [];

                        $selectedMain = $editRecord['t_太陽光_屋根種別'] ?? '';
                        $selectedSub  = $editRecord['t_太陽光_屋根種別_小項目'] ?? '';

                        // JS用データ構築
                        $roofOptions = [];

                        foreach ($roof['response']['data'] as $rec) {
                            $main = $rec['fieldData']['t_屋根種別'];
                            $sub  = $rec['fieldData']['t_屋根種別_小区分'];

                            if (!isset($roofOptions[$main])) $roofOptions[$main] = [];
                            if ($sub && !in_array($sub, $roofOptions[$main])) {
                                $roofOptions[$main][] = $sub;
                            }
                        }
                        ?>

                        <!-- HTML：セレクトボックス -->
                        <select id="roof-main-<?= $recordId ?>" class="editable" name="t_太陽光_屋根種別">
                            <option value="">選択してください</option>
                            <?php foreach (array_keys($roofOptions) as $main): ?>
                                <option value="<?= htmlspecialchars($main) ?>" <?= $main === $selectedMain ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($main) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                        <select id="roof-sub-<?= $recordId ?>" class="editable" name="t_太陽光_屋根種別_小項目"></select>

                        <!-- JavaScript -->
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


                    </td>
                </tr>
                <tr>
                    <td>図面データ：</td>
                    <td>
                        <select class="editable" name="t_タイナビ図面有無" data-valuelist="完工報告用1">
                            <option value="<?= htmlspecialchars($record['fieldData']['t_タイナビ図面有無']) ?>"></option>
                        </select>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>見積区分：</td>
        <td>
            <select class="editable" name="t_太陽光_見積区分" data-valuelist="再エネ見積区分">
                <option value="<?= htmlspecialchars($record['fieldData']['t_太陽光_見積区分']) ?>"></option>
            </select>
        </td>
    </tr>
    <tr>
        <td>お客様希望：</td>
        <td>
            <table>
                <tr>
                    <td>メーカー：</td>
                    <td>
                        <input type="text" class="editable" name="t_太陽光_希望メーカー" value="<?= htmlspecialchars($record['fieldData']['t_太陽光_希望メーカー'] ?? '') ?>">
                    </td>
                </tr>
                <tr>
                    <td>太陽光容量：</td>
                    <td>
                        <input type="number" class="editable" name="t_太陽光_PV容量" value="<?= htmlspecialchars($record['fieldData']['t_太陽光_PV容量'] ?? '') ?>">&nbsp;kW
                    </td>
                </tr>
                <tr>
                    <td>蓄電池容量：</td>
                    <td>
                        <input type="number" class="editable" name="t_太陽光_BT容量" value="<?= htmlspecialchars($record['fieldData']['t_太陽光_BT容量'] ?? '') ?>">&nbsp;kW
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>割付：</td>
        <td>
            <table>
                <tr>
                    <td>メーカー割付必要：</td>
                    <td>
                        <select class="editable" name="t_太陽光_メーカー割付必要性" data-valuelist="完工報告用1">
                            <option value="<?= htmlspecialchars($record['fieldData']['t_太陽光_メーカー割付必要性']) ?>"></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>依頼日：</td>
                    <td>
                        <input type="date" class="editable" name="d_DMM割付依頼日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_DMM割付依頼日'] ?? '')) ?>">
                    </td>
                </tr>
                <tr>
                    <td>保存日：</td>
                    <td>
                        <input type="date" class="editable" name="d_DMM割付保存日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_DMM割付保存日'] ?? '')) ?>">
                    </td>
                </tr>
            </table>
        </td>
    </tr>

</table>