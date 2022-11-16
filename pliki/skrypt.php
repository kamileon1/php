<?php
    
    $conn = mysqli_connect("localhost","root","","dziennik");

    //krok1: sprawdzamy czy zmeinne zostaly ustawione

        if(isset($_POST['imie']) && $_POST['imie'] != "" && isset($_POST['nazwisko']) && $_POST['nazwisko'] != "" && isset($_POST['wiek']) && $_POST['wiek'] != ""){
            if(!$conn){
                exit("Nie polaczono");
            }
            else{
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $wiek = $_POST['wiek'];

            //echo $imie." ".$nazwisko." ".$wiek." ";
            
            $zapytanie = "INSERT INTO uczniowie VALUES ('$imie', '$nazwisko', '$wiek')";
            $res = mysqli_query($conn, $zapytanie);

            if(!$res){
                echo("nie dodano");
            }
            else{
                echo "dodano ucznia";
            }
            mysqli_close($conn);
            }
        }
        else{
            echo "brak danych";
        }
    
?>