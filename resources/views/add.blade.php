<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add_employee.css">
    <title>Tambah Karyawan</title>
</head>
<body>
    <style>
        :root{
    --blue: #02AFF9;
    --white: #FFFFFF;
    --black: #000000;
    --bluel: #AFEADF;
}

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Raleway';
    background-color: linear-gradient(180deg, #D5FFFF 0%, rgba(101, 239, 239, 0) 100%);
}

.container{
    padding: 6.25rem;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: space-between;
}

h1{
    font-size: 70px;
    font-weight: bold;
}

form{
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: space-between;
    margin-top: 50px;
}

.forms{
    display: flex;
    align-items: center;
    flex-direction: row;
    justify-content: space-between;
    margin-top: 50px;
}

.form-pertama{
    margin-right: 50px;
}

a{
    text-decoration: none;
    color: var(--blue);
}

label{
    font-family: 'Raleway';
    font-weight: 400;
    font-size: 24px;
    margin-bottom: 40px;
}

input{
    background: #E6F1E9;
    border: 1px solid #000000;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    padding-right: 320px;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 12px;
}

button{
    margin-top: 30px;
    background-color: var(--blue);
    padding: 15px 60px;
    border-radius: 12px;
    cursor: pointer;
    color: white;
    font-weight: bold;
    font-size: 16px;
}

button:hover{
    transition: 0.2s;
    background-color: black;
}

.foto{
    margin-top: 20px;
}
.upload{
    padding: 20px 30px;
    margin-top: 5px;
}
    </style>
    <div class="container">
        <h1>Tambah Karyawan</h1>
        <form>
            <div class="forms">
                <div class="form-pertama">
                    <label for="Nama">Nama Lengkap</label><br>
                    <input type="text" placeholder="Masukkan Nama Lengkap" required><br>
                    <label for="password">Alamat</label><br>
                    <input type="text" placeholder="Masukkan Alamat" required><br>
                    <label for="password">Email</label><br>
                    <input type="email" placeholder="Masukkan Email" required><br>
                </div>
                <div class="form-kedua">
                    <label for="Nama">No Telp</label><br>
                    <input type="number" placeholder="Masukkan Nomor Telepon" required><br>
                    <label for="password">Posisi</label><br>
                    <input type="text" placeholder="Masukkan Posisi" required><br>
                    <label for="password">Umur</label><br>
                    <input type="number" placeholder="Masukkan Umur" required><br>
                </div>
            </div>
            <label for="Foto" class="foto">Upload Foto</label>
            <input type="image" name="" id="" class="upload">
            <button class="login" onclick="window.location.href='home.blade.php';">Tambah</button>
        </form>
    </div>
</body>
</html>
