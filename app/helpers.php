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

function GenerateAvatar($Char)
{
    $imageFilePath = "img/initials/".$Char.".png";

    $avatar = imagecreatetruecolor(128, 128);
    $bg_color = imagecolorallocate($avatar, 10, 45, 58);
    imagefill($avatar,0,0,$bg_color);
    $avatar_text_color = imagecolorallocate($avatar, 255, 255, 255);
    imagettftext($avatar, 64, 0, 36, 92, $avatar_text_color, public_path('fonts/default.ttf'), $Char);
    header('Content-type: image/png');
    imagepng($avatar, $imageFilePath);
    imagedestroy($avatar);
 
    return asset($imageFilePath);
}