<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>

<body>
    <form id="form">
        <div id="nama">
            <label>Nama Anda</label>
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>
        <div id="umur">

        </div>
        <div id="hobi">

        </div>
        <br>
        <div id="button1">
            <button type="button" onclick="input1()"> SUBMIT </button>
        </div>
    </form>
    <textarea  id="text1" cols="30" rows="10">

    </textarea>

    <script type="text/javascript">
        $(document).ready(function() {
            event.preventDefault();

            $("#text1").hide("");
        });
        function input1(){
            var nama = $('[name=nama]').val();
            $("#umur").load("soal2b.php");
            $("#nama").hide("");
            $("#button1").hide("");
        }
        function input2(){
            var umur = $('[name=umur]').val();
            $("#hobi").load("soal2c.php");
            $("#umur").hide("");
            $("#button2").hide("");
        }
        function input3(){
            var hobi = $('[name=hobi]').val();
            var umur = $('[name=umur]').val();
            var nama = $('[name=nama]').val();
            
            $("#form").hide("");

            $("#text1").show();

            $("#text1").html([nama,umur,hobi]);
           

        }
    </script>
</body>


</html>