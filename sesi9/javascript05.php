<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h3>input data</h3>
    <form>
        <div>
            nama lengkap
            <input type="text" name="txNAMA" id="txNAMA">
        </div>

        <div>
            <button type="button" onclick="CheckNama()">cek nama</button>
        </div>
    </form>

    <script>
        function CheckNama(){
            let nm = document.getElementById("txNAMA").value;
            console.log("isi field nama : " +nm);
        }
    </script>

</body>
</html>