<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>competenceCheck</title>
</head>
<body>
    <?php

        

        $users = array(
            array("Vorname","Nachname","Alter"),
            array("Fritz","Phantom","70"),
            array("Lilo","Knickerbocker","37"),
            array("Thomas","Breziner","58"),
            array("Tom","Turbo","27")
        );

        


        for($i = 0; $i < count($users); $i++){
            print "<br>";
            for($j = 0; $j < 3;$j++){
                print $users[$i][$j] . " "; 
            }
        }

    ?>

    <div> <hr> </div>

    <?php

        echo $users[0][0] . " " . $users[0][1] . " " . $users[0][2] . "<br>";
        echo $users[1][0] . " " . $users[1][1] . " " . $users[1][2] . "<br>";
        echo $users[2][0] . " " . $users[2][1] . " " . $users[2][2] . "<br>";
        echo $users[3][0] . " " . $users[3][1] . " " . $users[3][2] . "<br>";
        echo $users[4][0] . " " . $users[4][1] . " " . $users[4][2];
    ?>

    <div> <hr> </div>

    <?php
        $userAndColor = array("Fritz"=>"Lila", "Lilo"=>"Pink", "Thomas"=>"Gelb", "Tom"=>"Rot");

        ksort($userAndColor);   //Ascending Order
        //krsort($userAndColor); //Descanding Order

        foreach($userAndColor as $key => $key_value) {
            echo "Key = " . $key . ", Value = " . $key_value;
            echo "<br>";
          }
    ?>

    <div> <hr> </div>

    <?php

        $tom_mag= array("Schmieröl", "DeBreziner" , "Essiggurkerl");
        sort($tom_mag); //ABC sortieren

        for($i = 0; $i < count($tom_mag); $i++){
            print $tom_mag[$i] . ", ";
        }

        print "<br>";

        $tricks= array(6, 89, 23, 1, 7, 8, 19);
        rsort($tricks); //Absteigend Sortieren

        for($i = 0; $i < count($tricks); $i++){
            print $tricks[$i] . ", ";
        }
    ?>

    <div> <hr> </div>

    <?php

        $theString = "Die Knickerbockerbande, das sind wir!";

        print strlen($theString); //strlen() function fürs Char Zählen!

        $tomTurboLikes = "Tom Turbo mag Schmieröl";

        echo "<br>";
        echo stripos($tomTurboLikes,"Schmieröl"); //Sucht den ersten platz im String tomTurboLikes mit dem Wort Schmieröl beginnt bei 0?

        echo "<br>";

        $revertString = "Turbo Durchblick";
        print strrev($revertString);

    ?>

    <div> <hr> </div>

    <?php

        $handle = fopen("tricks.txt","w") or die ("can't open write file");

        $texts = array("Turbo Kleber", "Turbo Bratpfannentrick", "Knoblauch Stinkbombe");

        foreach($texts as $textPart){
            fputs($handle, $textPart . "\n");
        }

        readfile("tricks.txt");

        fclose($handle);
    ?>

</body>
</html>