<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $plz = $_POST['plz'];
    $ort = $_POST['ort'];
    $email = $_POST['email'];
    $description = $_POST['description'];

    // Create email content
    $to = "kaja.wetzel@haw-hamburg.de";  // Replace with your email address
    $subject = "Neue Leerräume Einreichung";
    $message = "Gebäudename: $name\n";
    $message .= "Postleitzahl: $plz\n";
    $message .= "Ort: $ort\n";
    $message .= "E-Mail: $email\n";
    $message .= "Beschreibung: $description\n";

    // Handle file uploads
    if (isset($_FILES['file'])) {
        $files = $_FILES['file'];

        // Email headers
        $headers = "From: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"boundary1\"\r\n";

        // Message part with form data
        $email_message = "--boundary1\r\n";
        $email_message .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $email_message .= "Content-Transfer-Encoding: 7bit\r\n";
        $email_message .= "\r\n";
        $email_message .= $message;
        $email_message .= "\r\n";

        // Attach images
        for ($i = 0; $i < count($files['name']); $i++) {
            $file_tmp_name = $files['tmp_name'][$i];
            $file_name = $files['name'][$i];
            $file_type = $files['type'][$i];
            $file_data = file_get_contents($file_tmp_name);
            $file_data = chunk_split(base64_encode($file_data));

            $email_message .= "--boundary1\r\n";
            $email_message .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
            $email_message .= "Content-Transfer-Encoding: base64\r\n";
            $email_message .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
            $email_message .= "\r\n";
            $email_message .= $file_data;
            $email_message .= "\r\n";
        }

        $email_message .= "--boundary1--";

        // Send the email
        if (mail($to, $subject, $email_message, $headers)) {
            echo "Danke für Ihre Einreichung! Ihre Daten wurden erfolgreich gesendet.";
        } else {
            echo "Es gab ein Problem beim Senden der E-Mail.";
        }
    }
}
?>
