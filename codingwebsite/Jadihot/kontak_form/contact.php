<?php
if (isset($_POST["submit"])) { // Periksa apakah formulir telah dikirim
    $name = $_POST['name'];      // Ambil nama dari formulir
    $email = $_POST['email'];    // Ambil email dari formulir
    $subject = $_POST['subject']; // Ambil subjek dari formulir
    $message = $_POST['message']; // Ambil pesan dari formulir

    $to = 'jadihotsilalahi@gmail.com'; // Email Anda di mana pesan akan dikirim
    $headers = "From: $email\r\n";  // Header email yang akan menunjukkan siapa pengirimnya
    $headers .= "Reply-To: $email\r\n"; 

    $body = "Nama: $name\nEmail: $email\nSubjek: $subject\nPesan:\n$message"; // Isi email

}
?>
