    <?php 
    // Mengaktifkan Session PHP
    session_start();

    // menghubungkan dengan koneksi 
    include 'koneksi.php';

    // Menangkap data yang dikirim dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menyeleksi data admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi,"SELECT * FROM login WHERE username='$username' and password='$password'");

    // Menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:admin/index.php");
    }else{
        header("location:index.php?pesan=gagal");
    }

    ?>