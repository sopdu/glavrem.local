<?php
class sopdu {
    function copyright($currentYeare, $copyright){
        if($currentYeare == date('Y')){
            $yeare = date('Y');
        } else {
            $yeare = $currentYeare.' - '.date('Y');
        }
        $result = '&copy;'.$yeare.'&nbsp;'.$copyright;
        return $result;
    }
    function phone($path){
        $phone = file_get_contents($path);
        $result = preg_replace('/[^0-9]/', '', $phone);
        return 'tel:+'.$result;
    }
}
$sopdu = new sopdu();
?>