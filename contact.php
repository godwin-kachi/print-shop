<?php
require_once 'serverscripts\db_connect.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dezzyworld Multiservices | View Inventory</title>
</head>

<body>
    <?php
    include_once "pageHeader.php";
    ?>

    <br>
    <br>
    <div class="clear"></div>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="container">
                    <p>Our Technical Team are working round the clock to ensure that your experience while using our product is really worth your time,
                        We shall get back to you as soon as possible as we believe that you are the major reason why we are still in business.<br>
                        Enquiries made after <strong><em>6pm on Friday</em></strong>, may not get immediate response.
                    </p>
                    <br>
                </div>

                <div class="container">
                    <form action="" class="form-group" name="contact_form">

                        <h4>Please feel free to send us your enquiries</h4>

                        <div class="form-group">
                            <label for="contact_name">Full Name</label><br>
                            <input type="text" name="contact_name" class="form-control" placeholder="Full Name" required />
                        </div>
                        <div class="form-group">
                            <label for="contact_mail">E-Mail Address</label><br>
                            <input type="email" name="contact_mail" class="form-control" placeholder="E-mail" required />
                        </div>
                        <div class="form-group">
                            <label for="contact_subject">Subjet</label><br>
                            <input type="text" name="contact_subject" class="form-control" placeholder="Enquiry Topic" required />
                        </div>
                        <div class="form-group">
                            <label for="contact_message">Message Body</label><br>
                            <textarea class="form-control" name="contact_message">

                            </textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="send_contact" class="btn btn-primary" value="Send" />
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>


    <!-- FOOTER AREA -->

    <div>
        <?php
        include_once "pageFooter.php";

        ?>

    </div>
</body>

</html>