<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;
        charset=UTF-8">
        
    
    <title>omer</title></head>


    
        
  <body>
    
  

    <?php
    $gewerkteuren = 45;
    $uurtarief= 15.00;
    $bonus= 100.00;
    $bruto= $gewerkteuren * $uurtarief ;
    $netto= $gewerkteuren * $uurtarief - 0.45 * $bruto;

    if($gewerkteuren<= 40){
        echo "Uw basissalaris is: e ". $bruto;
        echo "<br>Uw belasting is: e ". 0.40*$bruto;
        echo "<br>Uw nettobedrag is: e ". $netto;
    }elseif ($gewerkteuren > 40) {
        echo "Uw basissalaris is: e ". $bruto;
        echo "Uw basissalaris plus bonus is: ". $bruto+$bonus;
  
    }
    /*
    $uur =10;

    if($uur<=11){
        echo "Goedemorgen";
    }elseif ($uur>=12 && $uur < 18) {
        echo "Goedemiddag";
    }else{
        echo "Goedenavond";
    }
    */





    ?>
    </body>

    </html>