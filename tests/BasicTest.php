<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use MutasiBank\Mandiri;

class BasicTest extends TestCase
{
    public function testParseHtmlTable()
    {
        $html = "<!-- Start of Item List -->        \r\n        <table border=\"0\" cellpadding=\"2\" cellspacing=\"1\" width=\"100%\">\r\n\t\t<tr bgcolor=\"#000066\"> \r\n            <td class=\"menu1\">Tanggal<\/td>                        \r\n            <td class=\"menu1\">Keterangan Transaksi<\/td>                        \r\n            <td class=\"menu1\">Debet<\/td>                        \r\n            <td class=\"menu1\">Kredit<\/td>\r\n        <\/tr>\r\n\r\n        \r\n        <tr height=\"25\">\r\n           <td height=\"25\" class=\"tabledata\" bgcolor=\"\">09\/11\/2019<\/td>\r\n           <td height=\"25\" class=\"tabledata\" bgcolor=\"\">SA OB SA No Book<br>linkaja<br>KE FRIEDMAN A H GULTOM<br><\/td>\r\n           <td height=\"25\" class=\"tabledata\" align=\"right\" bgcolor=\"\" name=\"dbtamt\">200.000,00<\/td>\r\n           <td height=\"25\" class=\"tabledata\" align=\"right\" bgcolor=\"\" name=\"crdamt\">0,00<\/td>\r\n        <\/tr>\r\n        \r\n\t\t<\/table>\r\n\t\t";
        $expected = [[
            "Tanggal" => "09\/11\/2019",
            "Keterangan Transaksi" => "SA OB SA No BooklinkajaKE FRIEDMAN A H GULTOM",
            "Debet" => "200.000,00",
            "Kredit" => "0,00",
        ]];
        $mandiri = new Mandiri('username', 'password');
        $res = $mandiri->parseHtmlTable($html);        
        print_r($res);
        $this->assertEquals($expected, $res);
    }
}
