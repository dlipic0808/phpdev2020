<?php

function ispis_tablica($imenaArray)
{
echo'
<table border="1">
            <tr>
            <th>Ime</th>
            <th>Prezime</th>
            </tr>';
        foreach($imenaArray as $key => $ucenik)
    {
    
    echo'
    <tr>
        <td>'.$ucenik["ime"].'</td>
        <td>'.$ucenik["prezime"].'</td>
    </tr>';
    }
    
    echo '</table>';
}

$ucenici = array();

$ucenici[1]["ime"] = "Ivan";
$ucenici[1]["prezime"] = "Ivic";

$ucenici[2]["ime"] = "Petar";
$ucenici[2]["prezime"] = "Petric";

ispis_tablica($ucenici);

?>