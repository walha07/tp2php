<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function affichage($tab){
        echo"<pre>";
        print_r($tab);
        echo"</pre>";
    }
    $matieres=["java"=>[14,15],"html"=>[13,18],"php"=>[17,15]];
    $tab6=["java"=>[14,15,8],"html"=>[12.5,15,11],"js"=>[19.25,13,17],"css"=>[12,17,15],"angular"=>[8,14,13],"nodejs"=>[12,10,12]];
    $etudiants=[
        "ali"=>["java"=>[14,5],"html"=>[13,15],"php"=>[17,14]],
        "salah"=>["java"=>[12,13],"html"=>[10,14.5],"php"=>[13,4]],
        "sami"=>["java"=>[10,15],"html"=>[13.5,18],"php"=>[15,19]]
        ];
    affichage($matieres);
    echo "<table border=1>
           <tr>
          <th>nom matiere</th>
        <th>note1</th>
        <th>note2</th>
        <th>note3</th>
        <th>Moyenne</th>
        </tr>";

    foreach ($tab6 as $key => $value) {
        echo "<tr>
        <td>$key</td>";
        $moy=0;
        foreach($value as $note){
        $moy+=$note;
        echo "<td>$note</td>";
        }
        echo "<td>".round($moy/count($value),2)."</td>";
        
        echo "</tr>";
        }
        
    
?>
</body>
</html>