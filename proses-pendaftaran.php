<pre>
<?php

        $a = @$_REQUEST['nama'];
        $b = @$_REQUEST['email'];
        $c = @$_REQUEST['usia'];
        $d = @$_REQUEST['tanggal_lahir'];
        $e = @$_REQUEST['alamat'];
        $f = @$_REQUEST['jenis_kelamin'];
        $g = @$_REQUEST['status'];
        $h = @$_REQUEST['hobi'];
        

        echo "=========== Biodata Diri ===========<br>";
        echo "================================<br>";
        echo "Nama : $a <br>";
        echo "Email :$b <br>";
        echo "Usia : $c <br>";
        echo "Tanggal Lahir : $d <br>";
        echo "Alamat : $e <br>";
        echo "Jenis Kelamin: $f <br>";
        echo "Status : $g <br>";
        echo "Hobi $h <br>";
       
    
    ?>

</pre>