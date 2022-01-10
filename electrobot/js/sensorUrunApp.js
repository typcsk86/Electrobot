var x, xmlhttp, xmlDoc, div;
xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", "xmlFiles/urunSensor.xml", false);
xmlhttp.send();
xmlDoc = xmlhttp.responseXML;
x = xmlDoc.getElementsByTagName("URUN");
div = "";
for(i=0; i<x.length; i++) {
    div += "<div class='col mb-4' data-aos='fade-up'>";
        div += "<div class='card h-100 border-info mb-2'>";
            div += "<img src='./images/sensorimage/" + i + ".jpg' class='card-img-top'>";
            div += "<div class='card-body'>";
                div += "<h6 class='card-title'>";
                    div += x[i].getElementsByTagName("BASLIK")[0].childNodes[0].nodeValue;
                div += "</h6>";
                div += "<p class='card-text'>";
                    div += x[i].getElementsByTagName("ACIKLAMA")[0].childNodes[0].nodeValue;
                div += "</p>";
            div += "</div>";
            div += "<div class='card-footer bg-transparent'>";
                div += "<a href='./urunSayfa/sensorSayfa/" +
                        x[i].getElementsByTagName("LINK")[0].childNodes[0].nodeValue + 
                        "' class='btn btn-outline-primary btn-block'>Satın Al</a>";
            div += "</div>";
        div += "</div>";
    div += "</div>";
}
document.getElementById("urunBolumu").innerHTML = div;