<?php
// Simple file-based contact form handler

// Get and sanitize the input
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

// Prepare the data line
$entry  = "----- New Message -----\n";
$entry .= "Date: " . date('Y-m-d H:i:s') . "\n";
$entry .= "Name: " . $name . "\n";
$entry .= "Email: " . $email . "\n";
$entry .= "Message:\n" . $message . "\n\n";

// Save to file
$file = __DIR__ . '/messages.txt';
file_put_contents($file, $entry, FILE_APPEND | LOCK_EX);

// Show a simple thank-you message (customize as you wish)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <title>Thank You</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body { background:#f6ecd9; color:#332211; font-family:sans-serif; text-align:center; padding:3rem; }
                .card { display:inline-block; background:rgba(246,236,217,0.92); border-radius:1rem; box-shadow:0 4px 16px #dac8a355; padding:2.5rem 2.2rem; margin-top:3rem; }
                    a { color: #bb8516; text-decoration:underline; font-weight:600; }
                        a:hover { color: #8a713e; }
                          </style>
                          </head>
                          <body>
                            <div class="card">
                                <h2>Thank you for your message!</h2>
                                    <p>Your submission has been saved.<br>We will review it soon.</p>
                                        <p><a href="/">← Back to Main Page</a></p>
                                          </div>
                                          </body>
                                          </html>