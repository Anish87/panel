<?php

function RobberRank($skills) 
{
    if($skills <= 100) return 'Street Punk';
    if($skills >= 100 && $skills <= 500) return 'Thug';
    if($skills >= 500 && $skills <= 2000) return 'Gangster';
    if($skills >= 2000 && $skills <= 6000) return '';
    if($skills >= 6000 && $skills <= 10000) return 'Mafia';
}

function CopRank($skills)
{
    if($skills <= 100) return 'Officer';
    if($skills >= 100 && $skills <= 500) return 'Captain';
    if($skills >= 500 && $skills <= 2000) return 'Sergeant';
    if($skills >= 2000 && $skills <= 6000) return 'Lieutenant';
    if($skills >= 6000 && $skills <= 10000) return 'General';
}
function TrimClanTag($strPlayer) 
{
    preg_match("([\[(=^<]+\w+[\])=^>]+)", $strPlayer, $dElim, PREG_UNMATCHED_AS_NULL);
    preg_match("(\w.+[*=]+)", $strPlayer, $sElim, PREG_UNMATCHED_AS_NULL);
    if($dElim != null) return $strPlayer = trim($strPlayer, $dElim[0]);
    else if($dElim != null) return $strPlayer = trim($strPlayer, $sElim[0]);
    else return $strPlayer;
}