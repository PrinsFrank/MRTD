# MRTD - Machine Readable Travel Documents

Machine Readable Travel Documents are everywhere. They are standardized by ICAO - the International Civil Aviation Organization, a United Nations specialized agency.

MRTDs are standardized in Doc series 9303.

This Package currently implements retrieving data from MRZ strings and checking data integrity by calculating check digits.

## MRTD1

Format as specified in [Doc 9303 Part 5](https://www.icao.int/publications/Documents/9303_p5_cons_en.pdf), Appendix B

<table style="font-family: Monospace,serif; letter-spacing: 5px;">
    <tr>
        <td colspan="2" title="Identifier">I&lt;</td>
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
