<?php
require "logic.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shell</title>
    <style>
    body {
        font-family: 'Times New Roman', Times, serif;
        background-color: #f1f1f1;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-top: 0;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 20px;
    }

    form {
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 10px;
        color: #555;
        font-weight: bold;
    }

    select,
    input[type="number"],
    input[type="submit"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        box-sizing: border-box;
        transition: all 0.3s ease;
        font-size: 16px;
    }

    input[type="number"]::placeholder {
        color: #999;
    }

    input[type="number"]:focus,
    select:focus {
        outline: none;
        border-color: #66afe9;
        box-shadow: 0 0 5px rgba(102, 175, 233, 0.5);
    }

    input[type="submit"] {
        background-color: red;
        color: white;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    </style>
</head>
<body>
    <center>
        <div class="container">
<form method="post">
    <label for="jumlahLiter">Masukkan Jumlah Liter:</label>
    <input type="number" id="jumlahLiter" name="jumlah"><br><br>
    <label for="tipeBahanBakar">Pilih Tipe Bahan Bakar:</label>
    <select id="jenis" name="jenis">
        <option value="SSuper">Shell Super</option>
        <option value="SVPower">V-Power</option>
        <option value="SVPowerDiesel">SVPowerDiesel</option>
        <option value="SVPowerNitro">SVPower Nitro</option>
    </select><br><br>
    <input type="submit" value="Beli" name="submit">
</form>
    </div>

    <?php 
        // panggil filenya
        // require 'logic.php';
        // baru buka , langsung set harga
        $logic = new Pembelian;
        $logic->setHarga(10000, 15000, 18000, 20000);
        if (isset($_POST['submit'])) {
            $logic->jenisYangDipilih = $_POST['jenis'];
            $logic->totalLiter = $_POST['jumlah'];
            // $pembelian = new Pembelian();
            $logic->totalHarga();
            $logic->cetakBukti();
        }
    ?>
</body>
</html>