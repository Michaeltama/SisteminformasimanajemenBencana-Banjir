<html>
<head>
    <title>Form</title>
</head>
<body>
    <h2>Banjir Pedia</h2>
    <br>
    <!--cek pesan notifikasi -->
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "Login gagal! username dan password salah!";
        }else if($_GET['pesan']=="logout"){
            echo "Anda telah berhasil logout";
         } else if($_GET['pesan']=="belum_login")
         echo "Anda harus login untuk mengakses halaman admin";
        }
        
    ?>
    <style>
	body{
            margin-left: 500px;
            margin-right: 500px;
            margin-bottom: 300px;
            margin-top: 300px;
        }
        .header{
            background-color:orange;
            padding: 10px;
            font-style: unset;
            color:black;
        } 
        .form{
            background-color:white;
            font-style: inherit;
            color:white;
            padding: 10px;
        }
</style>
<body>
    <center>
  <div class="header"><h2>Silahkan Login</h2></div>

 <!-- Ini Error jika tidak bisa login -->
 <?php if (isset($error)) : ?>
                <?php echo '<script>alert("Username atau Password Salah!");</script>'; ?>
                <?php endif; ?>

  
     <form  method="POST" action="index.php">
    <table>
        <tr>
            <td>Username</td>
            <td><input type= "text" name="username" placeholder= "masukkan username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type= "password" name="password" placeholder="masukan password" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="LOGIN"></td>
        </tr>
    </table>
   </form> 
  </form>
  <br>
   
    </form>
  </div>
  </center>

  
</body>
</html>