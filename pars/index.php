<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новый раздел");
define("WP_MEMORY_LIMIT", "1024M");
?>
wq
<?
function ParsFile(){
    global $DB;
    $path = $_SERVER["DOCUMENT_ROOT"] . '/pars/export_file_788727.csv';
    if (($fp = fopen($path, "r")) !== FALSE) {
        while (($data = fgetcsv($fp, 0, ";")) !== FALSE) {
            #$list[] = trim($data, " \t\n\r\0\x0B");
            $list[] = $data;
        }
        fclose($fp);
    }
    foreach ($list as $ls) {
        $DB->Add(
            "ils_pars",
            array(
                "i01" => trim($ls[0]," \t\n\r\0\x0B"),
                "i02" => trim($ls[1]," \t\n\r\0\x0B"),
                "i03" => trim($ls[2]," \t\n\r\0\x0B"),
                "i04" => trim($ls[3]," \t\n\r\0\x0B"),
                "i05" => trim($ls[4]," \t\n\r\0\x0B"),
                "i06" => trim($ls[5]," \t\n\r\0\x0B"),
                "i07" => trim($ls[6]," \t\n\r\0\x0B"),
                "i08" => trim($ls[7]," \t\n\r\0\x0B"),
                "i09" => trim($ls[8]," \t\n\r\0\x0B"),
                "i10" => trim($ls[9]," \t\n\r\0\x0B"),
                "i11" => trim($ls[10]," \t\n\r\0\x0B"),
                "i12" => trim($ls[11]," \t\n\r\0\x0B"),
                "i13" => trim($ls[12]," \t\n\r\0\x0B"),
                "i14" => trim($ls[13]," \t\n\r\0\x0B"),
                "i15" => trim($ls[14]," \t\n\r\0\x0B"),
                "i16" => trim($ls[15]," \t\n\r\0\x0B"),
                "i17" => trim($ls[16]," \t\n\r\0\x0B"),
                "i18" => trim($ls[17]," \t\n\r\0\x0B"),
                "i19" => trim($ls[18]," \t\n\r\0\x0B"),
                "i20" => trim($ls[19]," \t\n\r\0\x0B"),
                "i21" => trim($ls[20]," \t\n\r\0\x0B"),
                "i22" => trim($ls[21]," \t\n\r\0\x0B"),
                "i23" => trim($ls[22]," \t\n\r\0\x0B"),
                "i24" => trim($ls[23]," \t\n\r\0\x0B"),
                "i25" => trim($ls[24]," \t\n\r\0\x0B"),
                "i26" => trim($ls[25]," \t\n\r\0\x0B"),
                "i27" => trim($ls[26]," \t\n\r\0\x0B"),
                "i28" => trim($ls[27]," \t\n\r\0\x0B"),
                "i29" => trim($ls[28]," \t\n\r\0\x0B"),
                "i30" => trim($ls[29]," \t\n\r\0\x0B"),
                "i31" => trim($ls[30]," \t\n\r\0\x0B"),
                "i32" => trim($ls[31]," \t\n\r\0\x0B"),
                "i33" => trim($ls[32]," \t\n\r\0\x0B"),
                "i34" => trim($ls[33]," \t\n\r\0\x0B"),
                "i35" => trim($ls[34]," \t\n\r\0\x0B"),
                "i36" => trim($ls[35]," \t\n\r\0\x0B"),
                "i37" => trim($ls[36]," \t\n\r\0\x0B"),
                "i38" => trim($ls[37]," \t\n\r\0\x0B"),
                "i39" => trim($ls[38]," \t\n\r\0\x0B"),
                "i40" => trim($ls[39]," \t\n\r\0\x0B"),
                "i41" => trim($ls[40]," \t\n\r\0\x0B"),
                "i42" => trim($ls[41]," \t\n\r\0\x0B"),
                "i43" => trim($ls[42]," \t\n\r\0\x0B"),
                "i44" => trim($ls[43]," \t\n\r\0\x0B"),
                "i45" => trim($ls[44]," \t\n\r\0\x0B"),
                "i46" => trim($ls[45]," \t\n\r\0\x0B"),
                "i47" => trim($ls[46]," \t\n\r\0\x0B"),
                "i48" => trim($ls[47]," \t\n\r\0\x0B"),
                "i49" => trim($ls[48]," \t\n\r\0\x0B"),
                "i50" => trim($ls[49]," \t\n\r\0\x0B"),
                "i51" => trim($ls[50]," \t\n\r\0\x0B"),
                "i52" => trim($ls[51]," \t\n\r\0\x0B"),
                "i53" => trim($ls[52]," \t\n\r\0\x0B"),
                "i54" => trim($ls[53]," \t\n\r\0\x0B"),
                "i55" => trim($ls[54]," \t\n\r\0\x0B"),
                "i56" => trim($ls[55]," \t\n\r\0\x0B"),
                "i57" => trim($ls[56]," \t\n\r\0\x0B"),
                "i58" => trim($ls[57]," \t\n\r\0\x0B"),
                "i59" => trim($ls[58]," \t\n\r\0\x0B"),
                "i60" => trim($ls[59]," \t\n\r\0\x0B"),
                "i61" => trim($ls[60]," \t\n\r\0\x0B"),
                "i62" => trim($ls[61]," \t\n\r\0\x0B"),
                "i63" => trim($ls[62]," \t\n\r\0\x0B")
            )
        );
    }
}
function Marka() {
    global $DB;
    #$text = 'Насосы гидроусилителя руля ГУР (восстановленные)';
    #$text = 'Насосы гидроусилителя руля ГУР (новые)';
    #$text = 'Рейки рулевые (L) с гидроусилителем ГУР (восстановленные)';
    #$text = 'Рейки рулевые (L) с гидроусилителем ГУР (новые)'; 
    #$text = 'Рейки рулевые с гидроусилителем ГУР EU (восстановленные. Правый руль)';
    $text = 'Рейки рулевые с электроусилителем ЭУР (восстановленные)';
    $zapros = $DB->Query("
        select * from ils_pars where i60 = '".$text."'
    ");
    while ($row = $zapros->Fetch()){
        if(!empty($row) || $row != '') {
            #$result[trim($row["i61"], " \t\n\r\0\x0B")] = trim($row["i61"], " \t\n\r\0\x0B");
            #$result[$row["i61"]] = $row["i61"];
            $result[] = $row;
        }
    }
    return $result;
}
?>

<?#='<pre>'; print_r(ParsFile()); '</pre>';?>
<?#='<pre>'; print_r(count(Marka())); '</pre>';?>
<?='<pre>'; print_r(Marka()); '</pre>';?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>