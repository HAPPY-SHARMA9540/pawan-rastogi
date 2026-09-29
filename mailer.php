<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user'])) {

    $name    = htmlspecialchars($_POST['user']);
    $email   = htmlspecialchars($_POST['cont_email']);
    $phone   = htmlspecialchars($_POST['cont_phone']);
    $city    = htmlspecialchars($_POST['cont_city']);
    $message = htmlspecialchars($_POST['cont_massage']);

    $to = "info@worldomania.com";
    $from = "info@worldomania.com";
    $fromName = "Brand Tune Studio";

    $subject = "Get a Free Quote Brand Tune Studio";

    $htmlContent = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Brand Tune Studio</title>
        <style>
            body{
                margin:0;
                padding:20px;
                font-family:Arial, sans-serif;
                background:#f5f5f5;
            }
            .container{
                max-width:700px;
                margin:auto;
                background:#fff;
                padding:20px;
                border-radius:10px;
            }
            .header{
                background:#da251c;
                color:#fff;
                text-align:center;
                padding:15px;
                border-radius:5px;
            }
            table{
                width:100%;
                border-collapse:collapse;
                margin-top:20px;
            }
            table th,
            table td{
                border:1px solid #ddd;
                padding:12px;
                text-align:left;
            }
            table th{
                background:#f7f7f7;
                width:180px;
            }
            .footer{
                margin-top:20px;
                text-align:right;
                font-size:14px;
            }
        </style>
    </head>
    <body>

        <div class="container">

            <div class="header">
                <h2>You Have New Customer Enquiry</h2>
            </div>

            <table>
                <tr>
                    <th>Name</th>
                    <td>'.$name.'</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>'.$email.'</td>
                </tr>

                <tr>
                    <th>Phone</th>
                    <td>'.$phone.'</td>
                </tr>

                <tr>
                    <th>City</th>
                    <td>'.$city.'</td>
                </tr>

                <tr>
                    <th>Message</th>
                    <td>'.$message.'</td>
                </tr>
            </table>

            <div class="footer">
                Regards,<br>
                Brand Tune Studio
            </div>

        </div>

    </body>
    </html>';

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: ".$fromName." <".$from.">\r\n";
    $headers .= "Reply-To: ".$email."\r\n";

    if (mail($to, $subject, $htmlContent, $headers)) {

        echo json_encode([
            'status' => true,
            'message' => 'Mail Sent Successfully'
        ]);

    } else {

        echo json_encode([
            'status' => false,
            'message' => 'Mail Sending Failed'
        ]);

    }

    exit;
}
?>