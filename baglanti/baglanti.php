<?php
try{
    $baglan = new PDO("mysql:dbname=bilisim;host=localhost","root","");


}
catch(PDExpception $e)
{
    echo $e->getMessage();
}
?>






