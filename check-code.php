<?php
ini_set('display_errors', 1); // Show PHP errors for debugging (optional)
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entered = $_POST['code'] ?? '';
        $expected = 'boobrie'; // <-- CHANGE THIS to your password/code

            if ($entered === $expected) {
                    header("Location: /hidden-chapters/menu.html");
                            exit;
                                } else {
                                        $error = "Wrong code. Try again.";
                                            }
                                            }
                                            ?>
                                            <!DOCTYPE html>
                                            <html lang="en">
                                            <head>
                                              <meta charset="UTF-8"/>
                                                <title>Enter Access Code</title>
                                                </head>
                                                <body>
                                                  <form method="post">
                                                      <input type="password" name="code" placeholder="Enter code" required>
                                                          <button type="submit">Submit</button>
                                                            </form>
                                                              <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
                                                              </body>
                                                              </html>