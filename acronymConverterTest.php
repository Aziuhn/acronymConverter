<?php
require "./acronymConverter.php";

$dataset = array(
    ['gioco molto difficile','G.M.D.', __LINE__],
    ['General Motors','G.M.', __LINE__],
    ['Federal Bureau Investigation','F.B.I.', __LINE__]
    );

    foreach ($dataset as $row) {
        $text=$row[0];
        $expected=$row[1];
        $line = $row[2];

        $result=acronymConverter($text);

        //var_dump($result == $expected);

        if($result == $expected){
            //echo "PASS\n";
        }else{
            echo "FAIL on line $line\n$result is not $expected\n";
        }
}