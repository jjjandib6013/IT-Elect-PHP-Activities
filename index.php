<?php $name = "Nocturnal Devs"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page PHP</title>
</head>
<body>
    <br><p style="font-size: 15px; text-align: right; padding-right: 50px;">
            Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            About&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Services&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            My Works&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Contact Me
        </p> 
    <h1 style="text-align: center;"><?php echo $name; ?></h1>

    <?php
        echo '<p style="text-align: center; font-size: 14px; color: gray;">' . date("l, F j, Y") . '</p>';

        echo '<br>
        <div id="contact" style="max-width:900px; margin:auto; padding:20px;">
            <div class="container">
                <div class="row" style="display:flex; flex-wrap:wrap; gap:20px;">
                    <div class="contact-left" style="flex:1; min-width:250px;">
                        <h1 class="sub-title">Contact Us</h1>
                        <p>jandaevelouis1234@gmail.com</p>
                        <p>09949069496</p>
                    </div>
                    <div class="contact-right" style="flex:1; min-width:250px;">
                        <form id="submitForm" name="submit-to-google-sheet">
                            <input type="text" name="Name" placeholder="Your Name" required style="width:100%; padding:8px; margin:5px 0;">
                            <input type="email" name="Email" placeholder="Your Email" required style="width:100%; padding:8px; margin:5px 0;">
                            <textarea name="Message" rows="6" placeholder="Your Message" style="width:100%; padding:8px; margin:5px 0;"></textarea>
                            <button type="submit" class="btn btn2" style="padding:8px 16px; margin-top:10px;">Submit</button>
                        </form>
                        <span id="msg"></span>
                    </div>
                </div>
            </div>
        </div>';
        echo '<br><br><br><p style="max-width: 600px; margin: auto; text-align: center; font-size: 18px;">
                We create innovative, efficient, and modern web solutions for your business needs.
                From sleek designs to powerful backend systems, we’ve got you covered.
              </p>';

        echo '<br><hr>';
        echo '<p style="text-align: center; font-size: 14px; color: gray;">&copy; ' . ' If Symptoms Persists, Insult Your Doctor.</p>';
    ?>
</body>
</html>
