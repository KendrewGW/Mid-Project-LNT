<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="home.css">
    <title>Document</title>
</head>
<body>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.container{
    padding: 6.85rem;
}

header{
    width: 100%;
    height: 40%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    background: yellow;
}

header h2{
    margin-left: 40px;
    font-weight: 2000;
    font-size: 30px;
}

#clock{
    font-size: 50px;
    font-family: 'Raleway';
    text-align: center;
    border-radius: 20px;
    padding: 50px;
    font-weight: bold;
}

header .tambah{
    margin-right: 40px;
    padding: 10px 15px;
    border-radius: 5px;
    background-color: #02AFF9;
    font-size: 20px;
    border: none;
    color: white;
    cursor: pointer;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

button:hover{
    transition: 0.2s;
    background-color: black;
}

.employee{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
}

.karyawan{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    margin: 20px 15px;
}

.profil{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    padding: 20px 12px;
    background-color: rgb(194, 194, 194);
    margin-left: 50px;
    border-radius: 10px;
}

.profil img{
    min-width: 170px;
    min-height: 140px;
    max-width: 170px;
    max-height: 140px;
}

.profil a{
    text-decoration: none;
    color: black;
}

.profil a:hover{
    text-decoration: underline;
    font-weight: 600;
}
    </style>
    <header>
        <h2>Pt.Meksiko</h2>
        <div class="jam">
            <div id="clock">8:10:45</div>
        <script src="home.js"></script>
        </div>
        <button class="tambah" onclick="window.location.href='add.blade.php';">Tambah</button>
    </header>

        <div class="employee">
            <div class="container">
                <div class="karyawan">
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                </div>
                <div class="karyawan">
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                </div>
                <div class="karyawan">
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                </div>
                <div class="karyawan">
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                    <div class="profil">
                        <img src="" alt="foto karyawan">
                        <a href="employee.blade.php">Nama Karyawan</a>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
