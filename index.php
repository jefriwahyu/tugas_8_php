<?php

// Menampilkan pola belah ketupat 
$jumlah = 0;
echo "<div style='display: flex; width: 100%;'>";
do{
    echo "<div style='padding: 3px;'>";
    for( $a=10;$a>0;$a--){
        for($i=1; $i<=$a; $i++){
        echo "_";
        }
        for($a1=10;$a1>$a;$a1--){
        echo"x";
        }
        for($a2=10;$a2>$a;$a2--){
        echo"x";
        }
        echo"<br>";
    }
    for($b=0; $b<=10;$b++){
        for($j=1;$j<=$b;$j++){
        echo"_";
        }
        for($b1=10; $b1>$b;$b1--){
        echo"x";
        }
        for($b2=10; $b2>$b;$b2--){
        echo"x";
        }
        echo"<br>";
    }
    echo "</div>";
    $jumlah++;
    
}while($jumlah < 9);
echo "</div>";

$jumlah1 = 0;
echo "<div style='display: flex; width: 100%;'>";
do{
    echo "<div style='padding: 3px;'>";
    for( $a=10;$a>0;$a--){
        for($i=1; $i<=$a; $i++){
        echo "_";
        }
        for($a1=10;$a1>$a;$a1--){
        echo"x";
        }
        for($a2=10;$a2>$a;$a2--){
        echo"x";
        }
        echo"<br>";
    }
    for($b=0; $b<=10;$b++){
        for($j=1;$j<=$b;$j++){
        echo"_";
        }
        for($b1=10; $b1>$b;$b1--){
        echo"x";
        }
        for($b2=10; $b2>$b;$b2--){
        echo"x";
        }
        echo"<br>";
    }
    echo "</div>";
    $jumlah1++;
    
}while($jumlah1 < 9);
echo "</div>";
?>