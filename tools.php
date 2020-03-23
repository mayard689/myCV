<?php

/**
 * The purpose of this function in to check and prepare data to be included into an html code
 * It check if all of the data are set. It also ensure that there is no character other than [a-zA-Z0-9_] by removing other chars and replacing space by _.
 *
 * if the provided param $data is null, return null
 * check if all of the provided data are set. Return null if one of them is unset or null.
 * if the data is string type, associate to the string a variant with spaces replaced by "_"
 *
 * @param array|null $dataList : the lsit of $data to be checked
 * @return array|null
 */
function htmlCheckedDataFormat (?array $dataList) : ?array
{
    if (is_null($dataList)) {
        return null;
    }

    $toBeReturned = $dataList;

    foreach ($dataList as $data => $dataValue){
        if (isset($data)) {
            if (is_string($data)) {
                $simplifiesDataValue=str_replace(' ','_',$dataValue);
                $simplifiesDataValue=preg_replace('#[^a-z0-9_]#i', '', $simplifiesDataValue);
                $toBeReturned['withoutSpace_'.$data]=$simplifiesDataValue;

            }
        } else {
            return null;
        }
    }

    return $toBeReturned;

}
