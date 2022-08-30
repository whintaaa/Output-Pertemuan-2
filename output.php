<?php
    function matematika($jawab,$x,$y){
        echo "Apakah kamu suka matematika?? ".$jawab;
        echo "<br>Kami akan menampilkan penjumlahan, perkalian dan pengurangan dari angka yang kamu pilih: ";
        echo "<br>Angka 1 = ".$x;
        echo "<br>Angka 2 = ".$y." <br>";
        if ($jawab=='ya'){
            echo "<br>WAHHH KAMU SUKA MATEMATIKA!!! KERENNNN:)))";
            $tambah=$x+$y;
            echo "<br>hasil Penjumlahan ".$x." dan ".$y." adalah ".$tambah;
            $kali=$x*$y;
            echo "<br>hasil perkalian ".$x." dan ".$y." adalah ".$kali;
            $pengurangan=$x-$y;
            echo "<br>hasil pengurangan ".$x." dan ".$y." adalah ".$pengurangan."<br>";
        }
        if($jawab=='tidak'){
            echo "<br>YAA KENAPA GA SUKA MATEMATIKA PADAHAL SANGAT MENYENANGKAN :(( <br>";
            echo "Tapi mimin akan tetap menjawab angka yang kamu pilih : <br>";
            $tambah=$x+$y;
            echo "<br>hasil Penjumlahan ".$x." dan ".$y." adalah ".$tambah;
            $kali=$x*$y;
            echo "<br>hasil perkalian ".$x." dan ".$y." adalah ".$kali;
            $pengurangan=$x-$y;
            echo "<br>hasil pengurangan ".$x." dan ".$y." adalah ".$pengurangan;
        }
    };
    echo "<br> NARASUMBER : WHINTA <br>";

    matematika('ya',8,9);

    echo "<br> --------------------------------------------- <br>";
    echo "<br> NARASUMBER : BAIM <br>";

    matematika('ya',15,5);

    echo "<br> --------------------------------------------- <br>";
    echo "<br> NARASUMBER : YUSUF <br>";

    matematika('tidak',3,9);

?>