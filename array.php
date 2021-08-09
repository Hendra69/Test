<?php
$aplikasi = ["gtAkamedik","gtFinansi","gtPerizinan","eCampus","eOviz"];
$arrylength = count($aplikasi);

$i = 0;
while($i<$arrylength)
{
    echo $aplikasi[$i]."<br />";
    $i++;
}
