function displaytrans() {
    var translatedtext = document.getElementById("lang2").value;
    var wordtext = document.getElementById("wordhey").value;

    $.ajax({
        url:"translationdisplay.php",
        method: "POST",
        data: {
            Word: wordtext,
            Language2: translatedtext
            
        },
        dataType: "JSON",
        success: function(data) {
            document.getElementById('transhey').value = data.Translated;
        }

    })

}