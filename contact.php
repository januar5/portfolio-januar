<?php
// contact.php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = filter_var(trim($_POST["subject"]), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST["message"]), FILTER_SANITIZE_STRING);

    // Basic validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $_SESSION['form_status'] = 'error';
        $_SESSION['form_message'] = 'Semua field wajib diisi.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['form_status'] = 'error';
        $_SESSION['form_message'] = 'Format email tidak valid.';
    } else {
        // In a real scenario, you would send an email here using mail() or PHPMailer.
        // Example: mail("[EMAIL]", $subject, $message, "From: $email");
        
        $_SESSION['form_status'] = 'success';
        $_SESSION['form_message'] = 'Pesan Anda berhasil dikirim! Saya akan segera menghubungi Anda.';
    }
    
    // Redirect back to index with fragment
    header("Location: index.php#contact");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
