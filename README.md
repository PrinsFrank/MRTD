# MRTD - Machine Readable Travel Documents

![GitHub](https://img.shields.io/github/license/prinsfrank/MRTD)
![PHP Version Support](https://img.shields.io/packagist/php-v/prinsfrank/MRTD)

Machine Readable Travel Documents are everywhere. They are standardized by ICAO - the International Civil Aviation Organization, a United Nations specialized agency.

MRTDs are standardized in Doc series 9303.

This Package currently implements retrieving data from MRZ strings and checking data integrity by calculating check digits. It doesn't implement generating MRZ strings from data or checking data correctness from source data to encoded data. Feel free to contribute!

## Setup

> **Note**
> Make sure you are running PHP 8.1 or higher to use this package

To start right away, run the following command in your composer project;

```composer require prinsfrank/mrtd```

Or for development only;

```composer require prinsfrank/mrtd --dev```

## MRTD1

Format as specified in [Doc 9303 Part 5](https://www.icao.int/publications/Documents/9303_p5_cons_en.pdf), Appendix B. (Hover for short descriptions)

<table style="font-family: Monospace,serif; letter-spacing: 5px;">
    <tr>
        <td colspan="2" title="Identifier">I&lt;</td>
        <td colspan="3" title="Issuing State">UTO</td>
        <td colspan="9" title="Document Number">D23145890</td>
        <td colspan="1" title="Check Digit on Document Number">7</td>
        <td colspan="15" title="Optional Data">&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;</td>
    </tr>
    <tr>
        <td colspan="6" title="Date of Birth in YYMMDD">740812</td>
        <td colspan="1" title="Check digit on Date of Birth">2</td>
        <td colspan="1" title="Sex">F</td>
        <td colspan="6" title="Expiry date in YYMMDD">120415</td>
        <td colspan="1" title="Check digit on Expiry Date">9</td>
        <td colspan="3" title="Nationality">UTO</td>
        <td colspan="11" title="Optional Data">&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;</td>
        <td colspan="1" title="Overall Check Digit">6</td>
    </tr>
    <tr>
        <td colspan="30" title="Name">ERIKSSON&lt;&lt;ANNA&lt;MARIA&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;</td>
    </tr>
</table>

## MRTD2

Format as specified in [Doc 9303 Part 6](https://www.icao.int/publications/Documents/9303_p6_cons_en.pdf), Appendix B. (Hover for short descriptions)

<table style="font-family: Monospace,serif; letter-spacing: 5px;">
    <tr>
        <td colspan="2" title="Identifier">I&lt;</td>
        <td colspan="3" title="Issuing State">UTO</td>
        <td colspan="31" title="Name">ERIKSSON&lt;&lt;ANNA&lt;MARIA&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;</td>
    </tr>
    <tr>
        <td colspan="9" title="Document Number">D23145890</td>
        <td colspan="1" title="Check digit on Document Number">7</td>
        <td colspan="3" title="Nationality">UTO</td>
        <td colspan="6" title="Date of Birth in YYMMDD">740812</td>
        <td colspan="1" title="Check digit on Birth Date">2</td>
        <td colspan="1" title="Sex">F</td>
        <td colspan="6" title="Expiry date in YYMMDD">120415</td>
        <td colspan="1" title="Check Digit on Expiry Date">9</td>
        <td colspan="7" title="Optional Data">&lt;&lt;&lt;&lt;&lt;&lt;&lt;</td>
        <td colspan="1" title="Overall Check Digit">6</td>
    </tr>
</table>

## MRTD3

Format as specified in [Doc 9303 Part 4](https://www.icao.int/publications/Documents/9303_p4_cons_en.pdf), Appendix B. (Hover for short descriptions)

<table style="font-family: Monospace,serif; letter-spacing: 5px;">
    <tr>
        <td colspan="2" title="Identifier">P&lt;</td>
        <td colspan="3" title="Issuing State">UTO</td>
        <td colspan="39" title="Name">ERIKSSON&lt;&lt;ANNA&lt;MARIA&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;</td>
    </tr>
    <tr>
        <td colspan="9" title="Document Number">L898902C3</td>
        <td colspan="1" title="Check digit on Document Number">7</td>
        <td colspan="3" title="Nationality">UTO</td>
        <td colspan="6" title="Date of Birth in YYMMDD">740812</td>
        <td colspan="1" title="Check digit on Birth Date">2</td>
        <td colspan="1" title="Sex">F</td>
        <td colspan="6" title="Expiry date in YYMMDD">120415</td>
        <td colspan="1" title="Check Digit on Expiry Date">9</td>
        <td colspan="13" title="Optional Data">ZE184226B&lt;&lt;&lt;&lt;&lt;</td>
        <td colspan="1" title="Check Digit on Optional Data">1</td>
        <td colspan="1" title="Overall Check Digit">0</td>
    </tr>
</table>
