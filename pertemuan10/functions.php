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
    htmlspecialchars($gambar = $data["Gambar"]);

    $query = "INSERT INTO TimTour VALUES ('', '$nama', '$nick', '$role', '$posisi','$gambar')";
    mysqli_query ($conn,$query);  

     return mysqli_affected_rows ($conn);
}


function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM TimTour WHERE Id = $id");
    return mysqli_affected_rows($conn);
}


?>