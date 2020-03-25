<?php

/**
 * The purpose of this function in to check and prepare data to be included into an html code
 * It check if all of the data are set. It also ensure that there is no character other than [a-zA-Z0-9_] by removing other chars and replacing space by _.
 *
 * if the provided param $dataList is null, return null
 *
 * check if type and fieldName are set. If not, type is set to "text" and fieldName get the same value as the name with special char removed.
 * if the data is string type, associate to the string a variant with spaces replaced by "_"
 *
 * @param array|null $dataList : the lsit of $data to be checked
 * @return array|null
 */
function checkDataBeforeFormIntegration (string $name, ?array $dataList) : ?array
{
    if (is_null($dataList)) {
        return null;
    }

    $toBeReturned = $dataList;

    if (empty($dataList["type"])) {
        $toBeReturned["type"]="text";
    }

    if (empty($dataList["fieldName"])) {
        $toBeReturned["fieldName"]=removeSpecialChar($name);
    }

    foreach ($dataList as $data => $dataValue){
        if (isset($dataValue)) {
            if (is_string($dataValue)) {
                $simplifiesDataValue=removeSpecialChar($dataValue);
                $toBeReturned['withoutSpace_'.$data]=$simplifiesDataValue;
            }
        }

    }

    return $toBeReturned;

}

/**
 * It check if all of the data are set. It also ensure that there is no character other than [a-zA-Z0-9_] by removing other chars and replacing space by _.
 * @param string $s
 * @return string
 */
function removeSpecialChar(string $s) : string
{
    $simplifiesDataValue=str_replace(' ','_',$s);
    return preg_replace('#[^a-z0-9_]#i', '', $simplifiesDataValue);
}

/**
 * Check the data coming from contact form
 * Note that the provided array $dataList parameter will be modified by the process
 * its value key will be loaded with the corresponding $_POST value
 *
 * This function test the following conditions :
 * - data described have a value (not null and not empty)
 * - email match with an email regex
 * - text contains only letter with or without accent, numbers but no special characters
 * - phone number contain only numbers, "-","." or " "
 *
 *
 *
 * @param array $
 * @return array
 */
function checkDataFromContactForm(array &$dataList) : array
{

    $messagesToBeReturned=[];

    foreach ( $dataList as $inputName => &$inputProperties) {

        $inputProperties = checkDataBeforeFormIntegration($inputName, $inputProperties);

        $fieldName=$inputProperties["fieldName"];
        $dataName=$inputName;
        if (empty($_POST[$fieldName])) {
            // if true, !empty=> true, if false,!empty)=>false, il null !empty=>false
            if (!empty($inputProperties["mandatory"])){
                $messagesToBeReturned[$dataName][]="Le champs ".$dataName." doit être rempli" ;
            }

        }else{

            $inputProperties["value"]=$_POST[$fieldName];

            if($inputProperties["type"]=="email") {
                if (!filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL)) {
                    $messagesToBeReturned[$dataName][]="Le champs '$dataName' doit être une adresse email valide" ;
                }
            }
            if($inputProperties["type"]=="text") {
                if (!preg_match("/^[a-zA-Z0-9ùèéàiîïêôö ]*$/", $_POST[$fieldName])) {
                    $messagesToBeReturned[$dataName][]="Le champs '$dataName' ne doit comporter que des lettres et éventuellement des chiffres";
                }
            }
            if($inputProperties["type"]=="tel") {
                if (!preg_match("/^[0-9\-\. ]*$/", $_POST[$fieldName])) {
                    $messagesToBeReturned[$dataName][]="Le champs '$dataName' ne doit comporter que des chiffres et éventuellement des espaces, tirets ou points";
                }
            }

        }
    }
    return $messagesToBeReturned;


}