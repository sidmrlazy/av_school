<div class="academics-banner-container">
    <div class="academics-banner-section">
        <h1 class="academics-page-section animate__animated animate__fadeInUp">CONTACT</h1>
        <h3 class="academics-screen-name text-center animate__animated animate__fadeInUp">Connect with us</h3>
    </div>
</div>

<div class="container contact-section-container mt-5 mb-5">
    <div id="contact-red" class="contact-card">
        <p class="contact-label">
            ADDRESS
        </p>
        <p class="contact-description">888/1 Vigyan Khand, Gomti Nagar Lucknow 226010</p>
    </div>

    <div id="contact-mango" class="contact-card">
        <p class="contact-label">
            SCHOOL HOURS
        </p>
        <p class="contact-description">Mon - Fri : 8:00 am to 2:00 pm</p>
        <p class="contact-description">Sat : 8:00 am to 12:00 pm</p>
        <p class="contact-description">Sun : Closed</p>
    </div>

    <div id="contact-blue" class="contact-card">
        <p class="contact-label">
            PHONE & EMAIL
        </p>
        <p class="contact-description">+91 8318075979 | +91 9792316818</p>
        <p class="contact-description">avaneendraacademy@gmail.com</p>
    </div>
</div>



<div class="container contact-form-container mt-5 mb-5">
    <?php

    // $to = 'avaneendraacademy@gmail.com';
    // $subject = 'Website Visitor!';
    // $message = '';
    // $from = 'avaneendraacademy@gmail.com';

    // $headers  = 'MIME-Version: 1.0' . "\r\n";
    // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // $headers .= 'From: ' . $from . "\r\n" .
    //     'Reply-To: ' . $from . "\r\n" .
    //     'X-Mailer: PHP/' . phpversion();

    // $message = '<html>';
    // $message .= '<head>';
    // $message .= '<meta charset="UTF-8">';
    // $message .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
    // $message .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    // $message .= '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    // integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">';
    // $message .= '<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    // integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    // </script>';
    // $message .= '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    // integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    // </script>';
    // $message .= '</head>';


    // $message .= '<body>';
    // $message .= '<div style="background-color: #0178a3;">';
    // $message .= "<img style='width: 10%;' src='https://static.vecteezy.com/system/resources/previews/002/401/092/non_2x/mail-icon-new-email-notification-simple-design-style-free-vector.jpg'>";
    // $message .= "<h1 class='mt-5' style='color: #fff; font-weight: bold; margin-top: -10px !important'>New Website Visitor!</h1>";
    // $message .= "<p style='color: #e7e7e7'>Name:</p>";
    // $message .= "<div style='background-color: #fff; padding: 20px'>";
    // $message .= "<h5 style='text-align: center; margin-bottom:20px;'>Connect with us</h5>";
    // $message .= "<div class='d-flex justify-content-center align-items-center'>";
    // $message .= '<a style="margin: 15px" href="https://www.facebook.com/AvaneendraAcademySchoolLucknow/" target="_blank">
    // <ion-icon name="logo-facebook" style="color: #000; font-size: 30px"></ion-icon>
    // </a>';
    // $message .= '<a style="margin: 15px" href="https://instagram.com/avaneendraacademy?igshid=YmMyMTA2M2Y="
    // target="_blank">
    // <ion-icon name="logo-instagram" style="color: #000; font-size: 30px"></ion-icon>
    // </a>';
    // $message .= '</div></div></div>';

    // $message .= "<script type='module' src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>";
    // $message .= "    <script nomodule src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>";
    // $message .= '</body></html>';

    // // Sending email
    // if (mail($to, $subject, $message, $headers)) {
    //     echo "<div class='alert alert-success' role='alert'>Thank you for your interest. Someone from our team will contact you shortly</div>";
    // }

    require_once('includes/config.php');
    if (isset($_POST['submit'])) {
        $user_name = $_POST['user_name'];
        $user_contact = $_POST['user_contact'];
        $user_email = $_POST['user_email'];
        $user_contact_for = $_POST['user_contact_for'];
        $user_details = $_POST['user_details'];

        $query = "INSERT INTO `contact`(
        `user_name`,
        `user_contact`,
        `user_email`,
        `user_contact_for`,
        `user_details`
    )
    VALUES(
        '$user_name',
        '$user_contact',
        '$user_email',
        '$user_contact_for',
        '$user_details')";
        $result = mysqli_query($connection, $query);

        // Email Body
        $to = "avaneendraacademy@gmail.com, connectonlyn@onlynus.com";
        $subject = "Website Visitor | The Avaneendra Academy";
        $message = "
        <html>
        <head>
        </head>
        <body>
        <table>
        <tr>
        <th>Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Contacting For</th>
        <th>Details</th>
        </tr>
        <tr>
        <td>$username</td>
        <td>$user_contact</td>
        <td>$user_email</td>
        <td>$user_contact_for</td>
        <td>$user_details</td>
        </tr>
        </table>
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


        if (!$result) {
            echo die("<div class='alert alert-danger' role='alert'>
            Oops! Looks like there was some problem submitting your query. Please try again.
          </div>" . " " .  mysqli_error($connection));
        } else {
            echo '<div class="alert alert-success" role="alert">Thank you for contacting Avaneendra Academy! We will connect with you shortly.</div>';
            mail($to, $subject, $message, $headers);
        }
    }
    ?>
    <p>Send a Message</p>
    <form action="" method="POST">
        <div class="form-floating mb-3">
            <input type="text" reuired name="user_name" class="contact-input form-control" id="fullName" placeholder="Full Name">
            <label for="fullName" class="contact-input-label">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" required maxlength="10" name="user_contact" class="contact-input form-control" id="contactNumber" placeholder="+91 XXXXX XXXXX">
            <label for="contactNumber" class="contact-input-label">Contact number</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="contact-input form-control" name="user_email" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword" class="contact-input-label">Email</label>
        </div>
        <div class="form-floating mb-3">
            <select class="contact-input form-select" id="floatingSelect" name="user_contact_for" aria-label="Floating label select example">
                <option selected>Contacting for?</option>
                <option value="Admissions">Admissions</option>
                <option value="Career">Career</option>
                <option value="Other">Other</option>
            </select>
            <label for="floatingSelect" class="contact-input-label">Works with selects</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="contact-input form-control" name="user_details" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2" class="contact-input-label">Share Details</label>
        </div>

        <button type="submit" name="submit" class="btn btn-outline-primary p-3 w-100 contact-button">Submit</button>
    </form>
</div>