# MRTD - Machine Readable Travel Documents

Machine Readable Travel Documents are everywhere. They are standardized by ICAO - the International Civil Aviation Organization, a United Nations specialized agency.

MRTDs are standardized in Doc series 9303.

This Package currently implements retrieving data from MRZ strings and checking data integrity by calculating check digits.

## MRTD1

<style>
    table {
        font-family: Monospace,serif;
    }

    table tr,
    table td {
        border: 0;
        margin: 0;
        padding: 0;
        letter-spacing: 10px;
        word-spacing: 0;
    }
</style>
<table>
    <tr>
        <td colspan="2">I&lt;</td>
        <td colspan="3">UTO</td>
        <td colspan="9">D23145890</td>
        <td colspan="1">7</td>
        <td colspan="15">&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;</td>
    </tr>
    <tr>
        <td colspan="6">740812</td>
        <td colspan="1">2</td>
        <td colspan="1">F</td>
        <td colspan="6">120415</td>
        <td colspan="1">9</td>
        <td colspan="3">UTO</td>
        <td colspan="11">&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;</td>
        <td colspan="1">6</td>
    </tr>
    <tr>
        <td colspan="30">ERIKSSON&lt;&lt;ANNA&lt;MARIA&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;</td>
    </tr>
</table>
