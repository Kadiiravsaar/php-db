<?php
try{
    $baglan = new PDO("mysql:dbname=bilisim;host=localhost","root",""); // bilisim adında bir database
    echo "bağlandı" // bu sonradan kaldırılabilir

}
catch(PDExpception $e)
{
    echo $e->getMessage();
}
?>






