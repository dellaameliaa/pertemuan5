<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Barang</title>
</head>
<body>
    <h1>Form Barang</h1>
    <form action="tambah-data.php" method="get">
        <label form="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" /><br /> 
        <label form="harga">Harga</label>
        <input type="number" name="harga"> /><br />
        <label form="stok">Stok</label>
        <input type="number" name="stok">
        <label form="kategori">Kategori</label>
        <select name="kategori">
            <option value="Food">Food</option>
            <option value="Fashion">Fashion</option>
            <option value="Farmasi">Farmasi</option>
        </select>
        <button>Simpan</button>
    </form>
</body>
</html>