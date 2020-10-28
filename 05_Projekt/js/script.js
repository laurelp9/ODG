d3.csv("/data/lernendeAnzahl.csv", function (d) {
    return {
        Schuljahr: d.Schuljahr,
        Stufe: d.Stufe,
        Schulgemeinde: d.Schulgemeinde,
        Geschlecht: d.Geschlecht,
        Nationalitaet: d.Nationalitaet,
        Anzahl: d.Anzahl
    };
}).then(function (data) {
    console.log(data[0]);
});
