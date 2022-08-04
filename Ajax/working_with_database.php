<html>
    <head>
        <title>Working with database in Ajax</title>
    </head>
    <body>
        <p id="msg"></p>
        ID<input type="text" id="txtID">
        <input type="button" value="Delete" id="btndelete" onclick="del()">
    </body>
    <script>
        function del()
        {
            var id=document.getElementById("txtID").value;
            const xhttp=new XMLHttpRequest();
            xhttp.onload=function(){
                document.getElementById("msg").innerText=this.responseText;
            }
            xhttp.open("GET","http://localhost/basudev/database_delete.php?id="+id+"&btnDelete=Delete",true);
            xhttp.send();
        }
    </script>
</html>