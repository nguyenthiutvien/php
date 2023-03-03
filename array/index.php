<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $ages = array("Petter"=>22, "Clark"=>32, "Maggie" => 21);
    // $ages["Petter"]=44;
    // $ages["Clark"]=33;
    // $ages["Maggie"]=23;
    // // echo "Hello" . $ages[0] . $ages["Petter"] . " years old"

    // foreach($ages as $x => $x_value) {
    //     echo "Key=" . $x . ", Value=" . $x_value;
    //     echo "<br>";
    //   }
    
    // $animal = array("Lion","Woft","Dog");
    // foreach($animal as $animal_value){
    //     echo " " . $animal_value;
    // }

    // for($i==0; $i<count($animal); $i++) {
    //     echo $animal[$i];

    // }

$student = array(
  array("18T","Ho Van Cuong","Quang Tri"),
  array("19T","Ho Van Tri","Quang Tri"),
  array("20T","Ho Van La","Quang Tri"),
  array("21T","Ho Van Na","Quang Tri")
  );
 
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b> $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$student[$row][$col]."</li>";
    }
    echo "</ul>";
}
?>
<table>
    <tr>
        <td>1</td>
        <td>Name </td>
        <td>Que quan</td>
    </tr>
</table>
    <!-- $sv = array(
        array(
            "mssv"=> "12T8378"
            "name" => "Hồ Văn An",
            "Que quan"=> "Quang Tri"
        ),
        array(
            "mssv"=> "02T8378"
            "name" => "Thu Huong",
            "Que quan"=> "Quang Tri"
        ),
        array(
            "mssv"=> "32T8378"
            "name" => "La Thi He",
            "Que quan"=> "Quang Tri"
        ),
        array(
            "mssv"=> "22T8378"
            "name" => "Hồ Văn Na",
            "Que quan"=> "Quang Tri"
        ))

        

;
    ?> -->
</body>
</html>