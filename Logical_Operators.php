<?php
    const passinggrade = 100;

    $subj1 = 70;
    $subj2 = 75;
    $subj3 = 80;

    if($subj1 >= passinggrade){
        echo "Passed";
    }
    else{
        echo "Failed";
    }

    if($subj2 >= passinggrade){
        echo "Passed";
    }
    else{
        echo "Failed";
    }

    if($subj3 >= passinggrade){
        echo "Passed";
    }
    else{
        echo "Failed";
    }

    if($subj1 && $subj2 && $subj3){
        echo "Passed!";
    }
    else{;
        echo "Failed!";
    }

    if($subj1 && $subj2 || $subj3){
        echo "Passed!";
    }
    else{
        echo "Failed!";
    }

    if($subj1 || $subj2 || $subj3){
        echo "Passed!";
    }
    else{
        echo "Failed!";
    }
?>