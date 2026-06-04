<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="jadwal.css">
</head>

<body>
    <center>
        <form action="proses.php" method="POST">
            <h1>Pilih jadwal kelas dan jadwal guru</h1><br><br>
            <label for="jadwalkelas">Nama Kelas</label>
            <select name="jadwalkelas" id="jadwalkelas" required>
                <option value="">Pilih jadwal kelas</option>
                <option value="1">X RPL</option>
                <option value="2">XI RPL A</option>
                <option value="3">XI RPL B</option>
                <option value="3">X MEKA A</option>
                <option value="4">XI MEKA A</option>
                <option value="5">XI MEKA B</option>
                <option value="6">X ELIND</option>
                <option value="7">XI ELIND</option>
                <option value="8">X TSM A</option>
                <option value="9">X TSM B</option>
                <option value="10">XI TSM A</option>
                <option value="11">XI TSM B</option>
                <option value="12">X TKR</option>
                <option value="13">XI TKR</option>
                </select><br><br>
                <button type="submit">submit</button><br><br>

            <a href="guru.php">Cari jadwal guru mengajar</a>

        </form>

    </center>
</body>

</html>