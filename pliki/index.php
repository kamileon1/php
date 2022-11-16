<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dziennik</title>
</head>
<body>
    <?php
    
    //Powtorzenie przed egzaminem probnym PHP - speedrun
    //krok1: Polaczenie z baza - tworzenue zmienna o nazwie np.: $conn i podajemy w funkcji mysqli_connect() jej dane

    $conn = mysqli_connect("localhost","root","","dziennik");

    //krok2: sprawdzamy polaczenie z baza, poprzez instrukcje sprawdzamy istnienie

    if(!$conn){
        exit("Nie polaczono");
    }
    else{
        echo "Polaczono poprawnie<br>";

        //podajemy instrukcje skryptu
        //krok3: Chcemy wyswietlic dane z bazy
        //krok4: Tworzymy zmienna, w kturej przechowamy zapytanie sql

        $zapytanie = "SELECT * FROM uczniowie";

        //krok5: wykonujemy zapytanie poprzez mysqli_query() podajac nazwe polaczenia i zmiennej
        //wkladamy do zmiennej

        $res = mysqli_query($conn, $zapytanie);
        
        //krok6: Sprawdzamy czy zapytanie istnieje

        if(!$res){
            echo "nie wykonani";
        }
        else {
            
            //krok7: wyswietlamy winiki za pomoca funkcji while

            while ($row = mysqli_fetch_array($res)) {
                echo "$row[0] $row[1] $row[2] <br>";
            }
        }
    
        //krok8: zamykamy polaczenie

        mysqli_close($conn);
    }
    ?>    
</body>
</html>