<?php
if(isset($_POST["submit"])){
    if (empty($_POST["naam"])){
        echo "naam niet ingevuld";
    }else{
        $naam= $_POST["naam"];
        $taal= $_POST["taal"];


        if ($taal=="N"){
            echo " Goedendag " . $naam;
        }
        elseif ($taal=="E"){
            echo "Good Morning " . $naam;
        }
        elseif($taal== "S"){
            echo "Buenos dias " . $naam;
        }else{
            echo "Taal  niet ingevuld ";
        }
    }
}
