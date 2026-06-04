<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="jadwal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <center>
        <form action="proses.php" method="POST">
            <h1>Pilih jadwal kelas dan jadwal guru</h1><br><br>
            <label for="jadwalguru">Nama Guru</label>
            <select name="jadwalguru" id="jadwalguru" required>
                <option value="">Pilih Jadwal Guru Mengajar</option>
                <option value="1">Pa Riyan Permana</option>
                <option value="2">Pa Bayu Supriatna (ranger merah)</option>
                <option value="3">Bu Atin Mulyani</option>
                <option value="3">Pa Budi Laswardi</option>
                <option value="4">Bu Iklima</option>
                <option value="5">Bu Ananda</option>
                <option value="6">Bu Ina Tursina</option>
                <option value="7">Bu Gina</option>
                <option value="8">Bu Febri Diyas</option>
                <option value="9">Bu Bimarita</option>
                <option value="10">Pa Oke</option>
                <option value="11">Pa Lutfi</option>
                <option value="12">Bu Dewi Qori Lestari</option>
                <option value="13">Pa Rifai</option>
            </select><br><br>
            <button type="submit">submit</button><br><br>

            <a href="dashboard.php">Pilih jadwal kelas</a>

        </form>

    </center>
</body>

</html>