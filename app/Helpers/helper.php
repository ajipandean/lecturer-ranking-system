<?php

function parse_score($score)
{
    if (($score <= 100) && ($score >= 86)) {
        return 5;
    } else if (($score <= 85) && ($score >= 76)) {
        return 4;
    } else if (($score <= 75) && ($score >= 66)) {
        return 3;
    } else if (($score <= 65) && ($score >= 51)) {
        return 2;
    } else {
        return 1;
    }
}

function parse_education($edu)
{
    $value = 1;
    switch ($edu) {
        case 'S1':
            $value = 1;
            break;
        case 'S2':
            $value = 3;
            break;
        case 'S3':
            $value = 5;
            break;
        default:
            $value = 1;
    }
    return $value;
}

function parse_achievements($ach)
{
    if ($ach >= 4) {
        return 5;
    } else if ($ach == 3) {
        return 4;
    } else if ($ach == 2) {
        return 3;
    } else if ($ach == 1) {
        return 2;
    } else {
        return 1;
    }
}

function parse_title($title)
{
    $value = 1;
    switch ($title) {
        case 'Guru Besar':
            $value = 5;
            break;
        case 'Lektor Kepala':
            $value = 4;
            break;
        case 'Lektor':
            $value = 3;
            break;
        case 'Asisten Ahli':
            $value = 2;
            break;
        case 'Pengajar':
            $value = 1;
            break;
        default:
            $value = 1;
    }
    return $value;
}
