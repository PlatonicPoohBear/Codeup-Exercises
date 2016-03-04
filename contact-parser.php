<?php

function parseContacts($filename)
{
    $contacts = array();

    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $dataArray = explode("\n", $contents);
    fclose($handle);

    
        // Bad bad bad bad bad bad bad bad bad. Shouldn't have done this.
        // Instead of editing and formatting the existing array, I really should've constructed an empty array, pushing
        // the new content onto it.

    foreach ($dataArray as $key => $personArray) {
    	$dataArray[$key] = explode('|', $personArray);
       
        $dataArray[$key]['name'] = $dataArray[$key][0];
        unset($dataArray[$key][0]);
       
        $dataArray[$key]['number'] = $dataArray[$key][1];
        unset($dataArray[$key][1]);

        $temp = substr($dataArray[$key]['number'], 0, 3);
        $temp .= '-';
        $temp .= substr($dataArray[$key]['number'], 3, 3);
        $temp .= '-';
        $temp .= substr($dataArray[$key]['number'], 6, 4);

        $dataArray[$key]['number'] = $temp;
    }


    // return $contacts;
    return $dataArray;
}

var_dump(parseContacts('contacts.txt'));



