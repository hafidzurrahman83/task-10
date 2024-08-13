
<form action="" method="POST">
        <input type="number" name="angka1" placeholder="Masukkan angka" required>
        <br>
        <br>
        <input type="number" name="angka2" placeholder="Masukkan angka" required>
        <button type="submit">Jumlahkan</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $angka1 = $_POST['angka1'];  
        $angka2 = $_POST['angka2'];

        
        $hasil = $angka1+$angka2;

        echo "<h2>Hasil: $hasil</h2>";
    }
    ?>