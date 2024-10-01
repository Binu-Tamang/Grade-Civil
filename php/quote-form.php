<?php
error_reporting(0);

$name = $_REQUEST['fullname'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$location = $_REQUEST['location'];
$service = $_REQUEST['service'];
$message = $_REQUEST['description'];

if (($name == "") || ($email == "")) {
    echo "<script>alert('Message Sent Failed')</script>";
    echo "<script>location.href='../quote.php'</script>";
} else {
    // Multiple recipients
    $to  = 'binu@mapleleapgroups.com' . ', '; // Note the comma

    // Message
    $messageContent = '
        <html>
        <head>
            <title>Request A Form</title>
            <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;700&display=swap" rel="stylesheet">
            <style>
                table {
                    font-family: Spartan;
                }
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
                th {
                    width: 50%;
                    height: 30px;
                    border-bottom: 2px solid rgba(34,34,34,0.6);
                    font-size: 18px;
                }
                td {
                    font-family: Spartan;
                    font-size: 16px;
                    width: 50%;
                    height: 30px;
                    text-align: center;
                    border-bottom: 2px solid rgba(34,34,34,0.3);
                }
                #logo {
                    width: 250px; height: auto;
                    text-align: center;
                    margin: 5px auto;
                }
                h1#title {
                    text-align: center;
                    font-family: Spartan;
                }
            </style>
        </head>
        <body>
            <table id="logotable">
                <!-- brand logo -->
                <!-- <img src="https://ongradecivilandhire.com.au/assets/img/logo.png" alt="LOGO" id="logo"> -->
            </table>
            <h1 id="title">Get A Quote Form</h1>
            <table id="contenttable" style="max-width: 767px; margin: 0 auto;">
                <tr>
                    <td>Full Name</td><td>' . $name . '</td>
                </tr>
                <tr>
                    <td>Phone No.</td><td>' . $phone . '</td>
                </tr>
                <tr>
                    <td>Email</td><td>' . $email . '</td>
                </tr>
                <tr>
                    <td>Project Location</td><td>' . $location . '</td>
                </tr>
                <tr>
                    <td>Services</td><td>' . $service . '</td>
                </tr>
                <tr>
                    <td colspan="2">Message:<br><br>' . nl2br($message) . '</td>
                </tr>
            </table>
        </body>
        </html>
    ';

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Additional headers
    $headers .= 'From: ' . $name . ' <' . $email . '>' . "\r\n";
    $subject = 'Contact Form Submission';

    // Mail it
    mail($to, $subject, $messageContent, $headers);
    echo "<script>location.href='msgsuccess.php'</script>";
}
?>
