<?php

function acronymConverter($name){
    $explodedName = explode(" ",$name);
    $convertedName = array_map("subAcronymConverter", $explodedName);
    $implodedName = implode(".",$convertedName);
    $correctName = $implodedName.".";
    return $correctName;
}

function subAcronymConverter($name){
    $initialLetter = substr($name, 0, 1);
    $upperLetter = strtoupper($initialLetter);
    return $upperLetter;
}