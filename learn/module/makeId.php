<?php
require_once 'db_conn.php';

function makeId($memId){
    $result = null;
    $msg = null;
    $memId1 = mb_substr($memId, 0, 1);//初めから指定した所まで
    if($memId1=='0'){
        $memId1 = mb_substr($memId, 1, 3);
        $memId2 = mb_substr($memId1, 0, 1);
        if($memId2=='0'){
            $memId2 = mb_substr($memId, 2, 2);
            $memId3 = mb_substr($memId2, 0, 1);
            if($memId3=='0'){
                $su = (int)mb_substr($memId, 3, 1);
                $su++;
                $result = make_jug($su);
            }else{
                $su = (int)$memId2;
                $su++;
                $result = make_jug($su);
            }
        }else{
            $su = (int)$memId1;
            $su++;
            $result = make_jug($su);
        }
    }else{
        $su = (int)$memId;
        $su++;
        $result = make_jug($su);
    }
    return (string)$result;
}

function make_jug($su){//単位が上がるときの処理
    $mResult = $su;
    if($su<10) $mResult = "000".$su;
    else if($su<99) $mResult = "00".$su;
    else if($su<999) $mResult ="0".$su;
    return $mResult;
}

function findId($memId){
    $result = null;
    $msg = null;
    $memId1 = mb_substr($memId, 0, 1);//初めから指定した所まで
    if($memId1=='0'){
        $memId1 = mb_substr($memId, 1, 3);
        $memId2 = mb_substr($memId1, 0, 1);
        if($memId2=='0'){
            $memId2 = mb_substr($memId, 2, 2);
            $memId3 = mb_substr($memId2, 0, 1);
            if($memId3=='0'){
                $result = "000".mb_substr($memId, 3, 1);
            }else{
                $result = "00".$memId2;
            }
        }else{
            $result = "0".$memId1;
        }
    }else{
        $result = $memId;
    }
    return $result;
}
?>