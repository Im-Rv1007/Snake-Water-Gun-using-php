<?php 
    echo "Snake water gun \n";
    $n=readline('Enter Number Of Round : '); 
    $comp=0;
    $player=0;

    $i=1;
    while($i<=$n){
    // for($i=0;$i<=$n;$i++){
        echo "Round ".$i;
        echo "  snake -s    water -w   gun -g   \n";
        
        $select=readline('Choose Your Option :');
        $compSelect = getName(); 
        echo "\ncomputer Choose ".$compSelect;

        if($select=='s' || $select=='w' || $select=='g'){
            if($select=='s' &&  $compSelect =='g'){
                $comp=$comp+1;
                echo "\nComputer Won : ".$comp;
            }elseif($select=='s' && $compSelect=='w'){
                $player=$player+1;
                echo "\nPlayer Won : ".$player;
            }elseif($select=='s' && $compSelect=='s'){
                echo "\nMatch Draw Same Slection";
                echo "\nPlayer Won : ".$player;
                echo "\nComputer Won : ".$comp;
            }elseif($select=='w' &&  $compSelect =='s'){
                $comp=$comp+1;
                echo "\nComputer Won : ".$comp;
            }elseif($select=='w' && $compSelect=='g'){
                $player=$player+1;
                echo "\nPlayer Won : ".$player;
            }elseif($select=='w' && $compSelect=='w'){
                echo "\nMatch Draw Same Slection";
                echo "\nPlayer Won : ".$player;
                echo "\nComputer Won : ".$comp;
            }elseif($select=='g' &&  $compSelect =='w'){
                $comp=$comp+1;
                echo "\nComputer Won : ".$comp;
            }elseif($select=='g' && $compSelect=='s'){
                $player=$player+1;
                echo "\nPlayer Won : ".$player;
            }elseif($select=='g' && $compSelect=='g'){
                echo "\nMatch Draw Same Slection";
                echo "\nPlayer Won : ".$player;
                echo "\nComputer Won : ".$comp;
            }
        }else{
            echo "\n Select Proper Input ";
        }

        $i=$i+1;
    }

    function getName() { 
        $characters = 'swg'; 
        $randomString = ''; 
         
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index];  
        
        return $randomString; 
    } 
        
    // getName();
?>