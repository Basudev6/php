<html>
    <head>
        <title>Ajax Call</title>
    </head>
    <body>
        <p id="para">
            <input type="button" value="Load Data" id="btnload" onclick="loaddoc()">
        </p>
    </body>
    <script>
        function loaddoc()
        {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function(){
                document.getElementById("para").innerText=this.responseText;
            }

            xhttp.open("GET","ajax.txt",true);
            xhttp.send();
        }
    </script>
</html>