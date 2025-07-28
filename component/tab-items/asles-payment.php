<table>
    <tr>
        <td>入金1：</td>
        <td>
            <table>
                <tr>
                    <td>入金額</td>
                    <td>
                        <input type="text" class="editable number-comma" name="n_コジマ前実入金額" value="<?= number_format((float)($record['fieldData']['n_コジマ前実入金額'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>入金日</td>
                    <td>
                        <input type="date" class="editable" name="d_コジマ前実入金日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_コジマ前実入金日'] ?? '')) ?>">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>入金2：</td>
        <td>
            <table>
                <tr>
                    <td>入金額</td>
                    <td>
                        <input type="text" class="editable number-comma" name="n_コジマ中実入金額" value="<?= number_format((float)($record['fieldData']['n_コジマ中実入金額'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>入金日</td>
                    <td>
                        <input type="date" class="editable" name="d_コジマ中実入金日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_コジマ中実入金日'] ?? '')) ?>">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>入金3：</td>
        <td>
            <table>
                <tr>
                    <td>入金額</td>
                    <td>
                        <input type="text" class="editable number-comma" name="n_コジマ後実入金額" value="<?= number_format((float)($record['fieldData']['n_コジマ後実入金額'] ?? '')) ?>">&nbsp;円
                    </td>
                </tr>
                <tr>
                    <td>入金日</td>
                    <td>
                        <input type="date" class="editable" name="d_コジマ後実入金日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_コジマ後実入金日'] ?? '')) ?>">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>確定入金総額</td>
        <td>
            <input type="text" class="editable number-comma" name="nc_コジマ確定入金総額" value="<?= number_format((float)($record['fieldData']['nc_コジマ確定入金総額'] ?? '')) ?>">&nbsp;円
        </td>
    </tr>
    <tr>
        <td>最終入金入金日</td>
        <td>
            <input type="date" class="editable" name="d_コジマ最終入金日" value="<?= htmlspecialchars(formatDateForInput($record['fieldData']['d_コジマ最終入金日'] ?? '')) ?>">
        </td>
    </tr>
    <tr>
        <td>CP支給月</td>
        <td>
            <?= htmlspecialchars(formatDateForInput($record['fieldData']['dc_コジマCP支給月'] ?? '')) ?>
        </td>
    </tr>
</table>