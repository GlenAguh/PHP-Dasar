<?php  
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows= [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows; 
}



function tambah ($data){
    global $conn;

    $nama = htmlspecialchars_decode( $data ["Nama"]);
   htmlspecialchars( $nick = $data ["Nick"]);
    htmlspecialchars( $role = $data ["Role"]);
    htmlspecialchars($posisi = $data ["Posisi"]);

    // Upload gambar
    $gambar = upload();
    if (!$gambar){
        return false;
    }

    $query = "INSERT INTO TimTour VALUES ('', '$nama', '$nick', '$role', '$posisi','$gambar')";
    mysqli_query ($conn,$query);  

     return mysqli_affected_rows ($conn);
}

function upload(){
    $namaFile = $_FILES ['Gambar'] ['name'];
    $ukuranFile = $_FILES ['Gambar'] ['size'];
    $error = $_FILES ['Gambar'] ['error'];
    $tmpName = $_FILES ['Gambar'] ['tmp_name'];

    //Cek apakah tidak ada gambar yang di upload
    if ($error === 4){
        echo "<script>
            alert ('pilih gambar terlebih dahulu!');
            </script>";
            return false;
    }

    // Cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
            alert ('Yang di upload bukan gambar!')
            </script>";
        return false; 
    }

    // Cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000){
        echo "<script>
            alert('Ukuran gambar terlalu besar!')
            </script>";
            return false;
    }

    // lolos pengecekan, gambar siap di upload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar; 



    move_uploaded_file($tmpName, 'img/'.$namaFileBaru);
    return $namaFileBaru;


}


function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM TimTour WHERE Id = $id");
    return mysqli_affected_rows($conn);
}


function ubah ($data){
    global $conn; 
    
    $id = $data ["Id"];
    $nama = htmlspecialchars($data ["Nama"]);
    $nick = htmlspecialchars($data ["Nick"]);
    $role  = htmlspecialchars($data ["Role"]);
    $posisi = htmlspecialchars($data ["Posisi"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //Cek apakah user pilih gambar baru atau tidak
    if ($_FILES ['Gambar'] ['error'] === 4){
        $gambar = $gambarLama;
    } else{
        $gambar = upload();
    }

    

    $query = "UPDATE TimTour SET 
                Nama = '$nama',
                Nick = '$nick',
                Role = '$role',
                Posisi = '$posisi',
                Gambar = '$gambar'
                WHERE Id = $id
                "; 
        
        mysqli_query ($conn,$query); 

        return mysqli_affected_rows ($conn);
}


function cari ($keyword){
    $query = "SELECT * FROM TimTour 
                WHERE
            Nama   LIKE '%$keyword%' OR 
            Nick   LIKE '%$keyword%' OR
            Role   LIKE '%$keyword%' OR
            Posisi LIKE '%$keyword%'
            ";
             return query ($query);
}


function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
		return false;
	}


	// cek konfirmasi password
	if( $password !== $password2 ) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}
    // enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);
}





?>
