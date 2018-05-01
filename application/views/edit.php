<?php 

function array_values_recursive($arr) {
    $arr2 = array();
    foreach ($arr as $key => $value) {
        if(is_array($value))
        {            
            $arr2[] = array_values_recursive($value);
        }else{
            $arr2[] =  $value;
        }
    }

    return $arr2;
}
$nlist = array_values_recursive ($list, 'test_print');

//var_dump($nlist);
$klist = array("data" => $nlist);
$klist = json_encode($klist);
echo $klist;
//$kk=var_export($klist);
//$e = json_decode($klist, true);
//var_dump($e);
?>