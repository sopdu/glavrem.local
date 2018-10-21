<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новый раздел");
define("WP_MEMORY_LIMIT", "2048M");
CModule::IncludeModule("iblock");
?>
<?
$filename = $_SERVER["DOCUMENT_ROOT"].'/pars/test.csv';
function csv_to_array($filename, $USER, $delimiter=';')
{
    if(!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
	$el = new CIBlockElement;
	$gr= new CIBlockSection;
    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
		echo "<PRE>";
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
        {
            if(!$header)
                $header = $row;
            else {
				$value=array_combine($header, $row);
				if ($value["IC_GROUP0"]) {
					$res=CIBlockSection::GetList(
						Array("SORT"=>"ASC"),
						Array("IBLOCK_ID"=>8, "NAME"=>$value["IC_GROUP0"]),
						false,
						Array(),
						false
					);
					$fin=$res->GetNext();
					if (!$fin){
						$arBlockSectionArray = Array(
							"IBLOCK_ID"	=>8,
							"CODE"		=>$value["IC_GROUP0"],
							"NAME"		=>$value["IC_GROUP0"]
							);
						if($section_id = $gr->Add($arBlockSectionArray))
							echo "New Group ID: ".$section_id."<BR>";
						else
							echo "Error: ".$gr->LAST_ERROR;
					} else 
						$section_id = $fin[ID];
				}	
				$arLoadPropertysArray = Array(
				 "20"			=> $value["P20"],
				 "21"			=> $value["P21"],
				 "22"			=> $value["P22"],
				 "23"			=> $value["P23"],
				 "24"			=> $value["P24"],
				 "25"			=> $value["P25"],
				 "26"			=> $value["P26"],
				 "27"			=> $value["P27"],
				 "28"			=> $value["P28"],
				 "29"			=> $value["P29"],
				 "30"			=> $value["P30"],
				 "31"			=> $value["P31"],
				 "32"			=> $value["P32"],
				 "33"			=> $value["P33"],
				 "34"			=> $value["P34"],
				 "35"			=> $value["P35"],
				 "36"			=> $value["P36"],
				 "37"			=> $value["P37"],
				 "38"			=> $value["P38"],
				 "39"			=> $value["P39"],
				 "40"			=> $value["P40"],
				 "41"			=> $value["P41"],
				 "42"			=> $value["P42"],
				 "43"			=> $value["P43"],
				 "44"			=> $value["P44"],
				 "45"			=> $value["P45"],
				 "46"			=> $value["P46"],
				 "47"			=> $value["P47"],
				 "48"			=> $value["P48"],
				 "49"			=> $value["P49"],
				 "50"			=> $value["P50"],
				 "51"			=> $value["P51"],
				 "52"			=> $value["P52"],
				 "53"			=> $value["P53"],
				 "54"			=> $value["P54"],
				 "55"			=> $value["P55"],
				 "56"			=> $value["P56"],
				 "57"			=> $value["P57"],
				 "58"			=> $value["P58"],
				 "59"			=> $value["P59"],
				 "60"			=> $value["P60"],
				 "61"			=> $value["P61"],
				 "62"			=> $value["P62"],
				 "63"			=> $value["P63"]
				 );
				$arLoadProductArray = Array(
				 "MODIFIED_BY"			=> $USER->GetID(), // элемент изменен текущим пользователем
				 "IBLOCK_SECTION_ID" 	=> ($value["IC_GROUP0"] ? $section_id : false),
				 "IBLOCK_ID"      		=> 8,
				 "XML_ID"           	=> $value["IE_XML_ID"],
				 "NAME"           		=> $value["IE_NAME"],
				 "ID"					=> $value["IE_ID"],
				 "ACTIVE"				=> $value["IE_ACTIVE"],            // активен
				 "ACTIVE_FROM"			=> $value["IE_ACTIVE_FROM"],            // активен
				 "ACTIVE_TO"			=> $value["IE_ACTIVE_TO"],   
				 "PREVIEW_PICTURE"		=> ($value["IE_PREVIEW_PICTURE"] ? CFile::MakeFileArray("https://www.gurauto.ru".$value["IE_PREVIEW_PICTURE"]) : ""),
				 "PREVIEW_TEXT"			=> $value["IE_PREVIEW_TEXT"],  
				 "PREVIEW_TEXT_TYPE"	=> $value["IE_PREVIEW_TEXT_TYPE"],  
				 "DETAIL_PICTURE"		=> ($value["IE_PREVIEW_PICTURE"] ? CFile::MakeFileArray("https://www.gurauto.ru".$value["IE_DETAIL_PICTURE"]) : ""),
				 "DETAIL_TEXT"			=> $value["IE_DETAIL_TEXT"],  
				 "DETAIL_TEXT_TYPE"		=> $value["IE_DETAIL_TEXT_TYPE"],  
				 "CODE"					=> $value["IE_CODE"],  
				 "SORT"					=> $value["IE_SORT"],  
				 "TAGS"					=> $value["IE_TAGS"],  
				 "PROPERTY_VALUES"		=> $arLoadPropertysArray
				 );
				if($PRODUCT_ID = $el->Add($arLoadProductArray)){
					echo "New ID: ".$PRODUCT_ID."<BR>";
				}
				else
					echo "Error: ".$el->LAST_ERROR;
			}
        }
        fclose($handle);
		echo "</PRE>";
    }
    return $data;
}

if ($USER->IsAuthorized())
$csv = csv_to_array($filename, $USER);
else
	echo "Вы не авторизованы";
?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>