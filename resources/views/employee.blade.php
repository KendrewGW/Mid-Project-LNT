<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="employee_profile.css">
    <title>Profil Karyawan</title>
</head>
<body>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.container{
    padding: 6.25rem;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

button{
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

.foto{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    margin-right: 400px;
}

.button-class{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
}

.button-class button{
   padding: 16px 100px;
   background-color: #02AFF9;
   font-weight: bold;
   font-size: 12px;
   border-radius: 15px;
   cursor: pointer;
   color: white;
   border: none;
   cursor: pointer;
}

.button-class button:hover{
    background-color: #000000;
    transition: 0.2s;
}


.biodata{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between ;
    margin-right: 200px;
}

.isi{
    display: flex;
    flex-direction: column;
    text-align: left;
    justify-content: space-between ;
    margin-left: 200px;
}

.isi p{
    margin-bottom: 20px;
}

.yy p{
    color: rgb(174, 174, 174);
}

.buttons{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    margin-top: 100px;
}

.buttons button{
    padding: 23px 40px;
    border-radius: 10px;
    border: none;
    font-weight: bold;
}


.kembali{
    color: white;
    background-color: #02AFF9;
}

.kembali:hover{
    background-color: black;
    transition: 0.2s;
}

.hapus{
    background-color: rgba(238, 57, 57, 1);
    color: white;
}

.hapus:hover{
    background-color: white;
    color: rgba(238, 57, 57, 1);
    border-color: rgba(238, 57, 57, 1);
    border: solid;
}
    </style>
    <div class="container">
        <div class="foto">
            <img src="" alt="foto karyawan">
            <h3>Position</h3>
        </div>
        <div class="bio">
            <div class="button-class">
                <div class="biodata">
                    <div class="isi">
                        <div class="yy">
                            <p>Nama</p>
                            <p>Umur</p>
                            <p>Email</p>
                            <p>No Telp</p>
                            <p>Alamat</p>
                        </div>

                    </div>
                    <div class="isi">
                        <p>nama</p>
                        <p>umur</p>
                        <p>email</p>
                        <p>no Telp</p>
                        <p>alamat</p>
                    </div>
                </div>
                <button onclick="window.location.href='update.blade.php';">UPDATE</button>
            </div>
        </div>

    </div>
    <div class="buttons">
        <button class="kembali" onclick="window.location.href='home.blade.php';" >Kembali</button>
        <button class="hapus">Hapus</button>
    </div>
</body>
</html>
