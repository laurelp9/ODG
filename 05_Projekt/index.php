<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">

        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lernende der öffentlichen Volksschule nach Schulgemeinden im Kanton Thurgau</title>
        <link rel="stylesheet" href="css/home.css">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="js/script.js"></script>

    </head>
    <body>
        <div class="wrapper">
            <div class="pb-4">
                <div>
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-auto"><img src="img/tg.png" height="100" class="d-block"></div>
                                <div class="col"><h2 class="display-4 m-0">Lernende der öffentlichen Volksschule nach Schulgemeinden im Kanton Thurgau</h2>
                                    <br>
                                    <h3 class="text-muted">Eine Website die Daten von <a style="color: black;" href="https://opendata.swiss/de/dataset/lernende-der-oeffentlichen-volksschule-kanton-thurgau" target="_blank">Opendata.swiss</a> nutzt.</h3>
                                    <h5>Die Website zeigt die Anzahl Schülerinnen und Schüler nach Jahrgang, Schulgemeinde und Stufe an.</h5>
                                    <?php
                                    // CSV File einlesen
                                    $filename = 'data/daten.csv';
                                    $main_array = [];
                                    if (($h = fopen("{$filename}", "r")) !== FALSE) {
                                        while (($data = fgetcsv($h, 1000, ",")) !== FALSE) {
                                            $main_array[] = $data;
                                        }
                                        fclose($h);
                                    }
                                    ?>
                                    <br>
                                    <!--Die drei Comboboxen, mit den Parametern-->
                                    <form method="post" action="index.php">
                                        <p>Schulgemeinde:</p>
                                        <select id="Schulgemeinde" class="custom-select" style="width: 30%" name="Schulgemeinde">
                                            <option value="Aadorf VSG">Aadorf VSG</option>
                                            <option value="Affeltrangen PSG">Affeltrangen PSG</option>
                                            <option value="Altnau PSG">Altnau PSG</option>
                                            <option value="Amlikon PSG">Amlikon PSG</option>
                                            <option value="Amriswil PSG">Amriswil PSG</option>
                                            <option value="Arbon PSG">Arbon PSG</option>
                                            <option value="Berg-Birwinken VSG">Berg-Birwinken VSG</option>
                                            <option value="Berlingen PG">Berlingen PG</option>
                                            <option value="Bettwiesen PSG">Bettwiesen PSG</option>
                                            <option value="Bichelsee-Balterswil VSG">Bichelsee-Balterswil VSG</option>
                                            <option value="Bischofszell VSG">Bischofszell VSG</option>
                                            <option value="Bottighofen PSG">Bottighofen PSG</option>
                                            <option value="Braunau PSG">Braunau PSG</option>
                                            <option value="Bürglen VSG">Bürglen VSG</option>
                                            <option value="Bussnang-Rothenhausen PSG">Bussnang-Rothenhausen PSG</option>
                                            <option value="Dettighofen-Lanzenneunform PSG">Dettighofen-Lanzenneunform PSG</option>
                                            <option value="Diessenhofen VSG">Diessenhofen VSG</option>
                                            <option value="Egnach VSG">Egnach VSG</option>
                                            <option value="Erlen VSG">Erlen VSG</option>
                                            <option value="Ermatingen PSG">Ermatingen PSG</option>
                                            <option value="Eschenz PSG">Bürglen VSG</option>
                                            <option value="Eschlikon VSG">Eschlikon VSG</option>
                                            <option value="Felben-Wellhausen PSG">Felben-Wellhausen PSG</option>
                                            <option value="Fischingen VSG">Fischingen VSG</option>
                                            <option value="Frasnacht PSG">Frasnacht PSG</option>
                                            <option value="Frauenfeld PSG">Frauenfeld PSG</option>
                                            <option value="Freidorf-Watt PSG">Freidorf-Watt PSG</option>
                                            <option value="Gachnang PSG">Gachnang PSG</option>
                                            <option value="Götighofen PSG">Götighofen PSG</option>
                                            <option value="Gündelhart-Hörhausen PSG">Gündelhart-Hörhausen PSG</option>
                                            <option value="Güttingen PSG">Güttingen PSG</option>
                                            <option value="Hefenhofen PSG">Hefenhofen PSG</option>
                                            <option value="Herdern PSG">Herdern PSG</option>
                                            <option value="Homburg-Hörstetten PSG">Homburg-Hörstetten PSG</option>
                                            <option value="Horn VSG">Horn VSG</option>
                                            <option value="Hüttlingen PSG">Hüttlingen PSG</option>
                                            <option value="Hüttwilen PSG">Hüttwilen PSG</option>
                                            <option value="Kemmental VSG">Kemmental VSG</option>
                                            <option value="Kesswil PSG">Kesswil PSG</option>
                                            <option value="Kreuzlingen PSG">Kreuzlingen PSG</option>
                                            <option value="Langrickenbach PSG">Langrickenbach PSG</option>
                                            <option value="Lommis PSG">Lommis PSG</option>
                                            <option value="Mammern PG">Mammern PG</option>
                                            <option value="Märstetten PSGG">Märstetten PSGG</option>
                                            <option value="Märwil PSG">Märwil PSG</option>
                                            <option value="Matzingen PSG">Matzingen PSG</option>
                                            <option value="Müllheim PSG">Müllheim PSG</option>
                                            <option value="Münchwilen VSG">Münchwilen VSG</option>
                                            <option value="Münsterlingen PSG">Münsterlingen PSG</option>
                                            <option value="Neunforn PSG">Neunforn PSG</option>
                                            <option value="Nollen VSG">Nollen VSG</option>
                                            <option value="Nussbaumen PSG">Nussbaumen PSGG</option>
                                            <option value="Oberhofen-Lengwil PSG">Oberhofen-Lengwil PSG</option>
                                            <option value="Ottoberg PSG">Ottoberg PSG</option>
                                            <option value="Pfyn PSG">Pfyn PSG</option>
                                            <option value="Rickenbach PSG">Rickenbach PSG</option>
                                            <option value="Roggwil PSG">Roggwil PSG</option>
                                            <option value="Romanshorn PSG">Romanshorn PSGG</option>
                                            <option value="Salenstein PG">Müllheim PSG</option>
                                            <option value="Salmsach PG">Salmsach PG</option>
                                            <option value="Schönenberg-Kradolf PSG">Schönenberg-Kradolf PSG</option>
                                            <option value="Sirnach VG">Sirnach VG</option>
                                            <option value="Sommeri PSG">Sommeri PSG</option>
                                            <option value="Stachen PSG">Stachen PSG</option>
                                            <option value="Steckborn PSG">Steckborn PSG</option>
                                            <option value="Stettfurt PSG">Stettfurt PSG</option>
                                            <option value="Strohwilen-Wolfikon PSG">Strohwilen-Wolfikon PSG</option>
                                            <option value="Sulgen PSG">Sulgen PSG</option>
                                            <option value="Tägerwilen VSG">Tägerwilen VSG</option>
                                            <option value="Thundorf PSG">Thundorf PSG</option>
                                            <option value="Tobel-Tägerschen PG">Tobel-Tägerschen PG</option>
                                            <option value="Uesslingen PSG">Uesslingen PSG</option>
                                            <option value="Uttwil PSG">Uttwil PSG</option>
                                            <option value="Wagenhausen-Kaltenbach PSG">Wagenhausen-Kaltenbach PSG</option>
                                            <option value="Wängi VSG">Wängi VSG</option>
                                            <option value="Warth-Weiningen PSG">Warth-Weiningen PSG</option>
                                            <option value="Weinfelden PSG">Weinfelden PSG</option>
                                            <option value="Wigoltingen VSG">Wigoltingen VSG</option>
                                            <option value="Wilen bei Wil PSG">Wilen bei Wil PSG</option>
                                        </select>
                                        <p>Stufe:</p>
                                        <select id="Stufe" class="custom-select" style="width: 30%" name="Stufe">
                                            <option value="Kindergartenstufe">Kindergartenstufe</option>
                                            <option value="Primar Unterstufe">Primar Unterstufe</option>
                                            <option  value="Primar Mittelstufe">Primar Mittelstufe</option>
                                            <option  value="Sekundarstufe I">Sekundarstufe I</option>
                                        </select>

                                        <p>Schuljahr:</p>
                                        <select id="Schuljahr" class="custom-select" style="width: 30%" name="Schuljahr">
                                            <option  value="2007/2008">2007/2008</option>
                                            <option  value="2008/2009">2008/2009</option>
                                            <option value="2009/2010">2009/2010</option>
                                            <option  value="2010/2011">2010/2011</option>
                                            <option  value="2011/2012">2011/2012</option>
                                            <option  value="2012/2013">2012/2013</option>
                                            <option  value="2013/2014">2013/2014</option>
                                            <option  value="2014/2015">2014/2015</option>
                                            <option  value="2015/2016">2015/2016</option>
                                            <option  value="2016/2017">2016/2017</option>
                                            <option  value="2017/2018">2017/2018</option>
                                            <option value="2018/2019">2018/2019</option>
                                        </select>
                                        <br>
                                        <br>
                                        <button type="submit">Anzeigen</button> 
                                    </form>
                                    <br>
                                    <br>
                                    <?php

                                    //Funktion, die Werte mit den Parametern sucht
                                    function search($array, $search_list) {

                                        $result = array();

                                        foreach ($array as $key => $value) {
                                            foreach ($search_list as $k => $v) {

                                                if (!isset($value[$k]) || $value[$k] != $v) {

                                                    continue 2;
                                                }
                                            }
                                            $result[] = $value;
                                        }

                                        return $result;
                                    }

                                    //Anwendung der Funktion
                                    $search_items = array([0] => $_POST['Schuljahr'], [1] => $_POST['Stufe'], [2] => $_POST['Schulgemeinde']);
                                    $res = search($main_array, $search_items);
                                    print '<br>';
                                    foreach ($res as $var) {
                                        if ($var[0] == $_POST['Schuljahr'] && $var[1] == $_POST['Stufe'] && $var[2] == $_POST['Schulgemeinde']) {
                                            echo 'Geschlecht: ' . $var[3] . '<br>';
                                            echo 'Nationalität: ' . $var[4] . '<br>';
                                            $test = 'Anzahl: ' . $var[5] . '<br>';
                                            echo $test;
                                        }
                                    }
                                    if ($test == null) {
                                        echo 'Es sind keine Schüler vorhanden';
                                    }
                                    ?>
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <h5>Copyright © Ivo E., Laurel M.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        
    </footer>
</html>


