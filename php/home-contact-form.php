<?php
    error_reporting(0);

    $fullname = $_REQUEST['frmfullName'];
    $phone = $_REQUEST['frmphoneNumber'];
    $email = $_REQUEST['frmEmail'];
    $subject = $_REQUEST['frmSubject'];
    $user_message = $_REQUEST['frmMessage'];

    // Validate name and email
    if (($fullname == "") || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Message Sent Failed')</script>";
        echo "<script>location.href='../contact.php'</script>";
        exit();
    } else {
        // multiple recipients
        $to  = 'binu@mapleleapgroups.com';

        // Construct message body
        $message = '
        <html>
        <head>
          <title>Contact Form</title>
          <link href="https://fonts.googleapis.com/css?family=Lato|Poppins:400,700" rel="stylesheet">
          <style>
            table#contenttable {
                border: 4px solid #222;
                color: #222;
                padding: 10px;
                width: 100%;
                max-width: 991px;
            }
            table#logotable {
                width: 100%;
                border: 0;
                text-align: center;
            }
            th, td {
                font-family: Lato;
                font-size: 16px;
                width: 50%;
                height: 30px;
                text-align: center;
                border-bottom: 2px solid rgba(34, 34, 34, 0.3);
            }
            #logo {
                width: 250px;
                height: auto;
                text-align: center;
                margin: 5px auto;
            }
            h1#title {
                text-align: center;
                font-family: Poppins;
            }
          </style>
        </head>
        <body>
          <table id="logotable">
            <img src="https://ongradecivilandhire.com.au/assets/img/logo.png" alt="LOGO" id="logo">
          </table>
          <h1 id="title">Home Contact Form</h1>
          <table id="contenttable" style="max-width:767px; margin:0 auto;">
            <tr>
              <td>Name</td><td>' . $fullname . '</td>
            </tr>
            <tr>
              <td>Phone No.</td><td>' . $phone . '</td>
            </tr>
            <tr>
              <td>Email</td><td>' . $email . '</td>
            </tr>
            <tr>
              <td>Subject</td><td>' . $subject . '</td>
            </tr>
            <tr>
              <td colspan="2">Message : <br><br>' . $user_message . '</td>
            </tr>
          </table>
        </body>
        </html>';

        // Headers
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: ' . $fullname . ' <' . $email . '>' . "\r\n";
        $headers .= 'Reply-to: ' . $email . "\r\n";

        // Send email and check for success
        if (mail($to, $subject, $message, $headers)) {
            echo "<script>location.href='msgsuccess.php'</script>";
        } else {
            echo "<script>alert('Message failed to send')</script>";
            print_r(error_get_last());
        }
    }
?>
