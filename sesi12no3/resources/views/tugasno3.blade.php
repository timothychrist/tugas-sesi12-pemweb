<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Sederhana</title>
    <style>
        * { box-sizing: border-box; font-family: 'Segoe UI', Arial, sans-serif; }
        body { background: linear-gradient(135deg, #6a11cb, #2575fc); display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .kalkulator-box { background: #ffffff; padding: 30px 35px; border-radius: 12px; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25); width: 350px; }
        h2 { text-align: center; color: #333; margin-bottom: 20px; }
        label { display: block; margin-bottom: 6px; color: #555; font-weight: bold; font-size: 14px; }
        input[type="text"], select { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 6px; font-size: 15px; }
        input[type="submit"] { width: 100%; padding: 12px; background-color: #2575fc; color: white; border: none; border-radius: 6px; font-size: 16px; cursor: pointer; transition: background-color 0.3s; }
        input[type="submit"]:hover { background-color: #6a11cb; }
        .hasil-box { margin-top: 20px; padding: 15px; background-color: #f1f4ff; border-left: 5px solid #2575fc; border-radius: 6px; text-align: center; font-size: 18px; font-weight: bold; color: #222; }
    </style>
</head>
<body>

    <div class="kalkulator-box">
        <h2>Kalkulator Sederhana</h2>

        <form method="POST" action="">
            @csrf 
            <label for="angka1">Angka Pertama</label>
            <input type="text" id="angka1" name="angka1" value="{{ $angka1 }}" placeholder="Masukkan angka pertama" required>

            <label for="operator">Operasi</label>
            <select name="operator" id="operator">
                <option value="tambah" {{ $operator == 'tambah' ? 'selected' : '' }}>Tambah (+)</option>
                <option value="kurang" {{ $operator == 'kurang' ? 'selected' : '' }}>Kurang (-)</option>
                <option value="kali" {{ $operator == 'kali' ? 'selected' : '' }}>Kali (x)</option>
                <option value="bagi" {{ $operator == 'bagi' ? 'selected' : '' }}>Bagi (÷)</option>
            </select>

            <label for="angka2">Angka Kedua</label>
            <input type="text" id="angka2" name="angka2" value="{{ $angka2 }}" placeholder="Masukkan angka kedua" required>

            <input type="submit" value="Hitung">
        </form>

        @if($hasil !== "")
            <div class="hasil-box">
                Hasil = {{ $hasil }}
            </div>
        @endif
    </div>

</body>
</html>