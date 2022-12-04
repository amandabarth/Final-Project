<?php include 'top.php';
$dataIsGood = true;
$message = '';
$mailMessage = '';
$mailSent = '';
$email = '';
$name = '';
$appointTime = '';
$type = 'Individual';

function sanatize($field){
    if(!isset($_POST[$field])){
        $data = "";
    }
    else {
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
}
?>
        <main>
            <h1>Schedule a Reading</h1>
            <section class="flexA">
                <h2>To schedule a reading, submit this form!</h2>
<?php
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $email = sanatize("txtEmail");
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) or $email == ''){
        print '<p class="wrong">Please enter your email.</p>';
        $dataIsGood = false;
    }

    $name = sanatize("txtName");

    $appointTime = sanatize('type');

    $type = sanatize("newInfo");
    if($type != "Individual" AND $type != "Couple" AND $type != "Group"){
        print '<p class="wrong">Please chose which type of reading you would like. For more information on what each reading includes go to the pricing page.</p>';
        $dataIsGood = false;
    }

    if($dataIsGood){
        $sql = 'INSERT INTO tblSchedule(fldEmail, fldName, fldAppointTime, fldType) VALUES(?,?,?,?,?,?)';
        $statement = $pdo->prepare($sql);
        $data = array($email, $name, $appointTime, $type);

        if($statement->execute($data)){
            print '<p>Your reading was sucessfully scheduled!</p>';

            $to = $email;
            $from = 'CS 008 Team <rlkoenig@uvm.edu>';
            $subject = 'You Scheduled a Tarot Reading';

            $mailMessage = '<p style="font:">Thank you' . $name . 'for scheduling a reading! Your appointment is at '. $appointTime. '</p>';
            $mailMessage .= '<p>See you then!</p>';
            $mailMessage .= '<p>Linsey Reads Tarot</p>';

            $headers = "MIME_Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=stf-8\r\n";
            $headers .= "From: ".$from. "\r\n";

            $mailSent = mail($to, $subject, $mailMessage, $headers);

            if ($mailSent){
                print "<p>A copy has been emailed to your records.</p>";
                print $mailMessage; 
            }

        } else {
            print '<p>Your reading was NOT scheduled.<p>';
        }
     
    }
}
    
?>
                <form action="#" method="POST">
                    <fieldset>
                        <p class="form">
                            <label for="txtEmail">Email(required):</label>
                            <input type="text" name="txtEmail" id="txtEmail" value = "<?php print $email; ?>" required>
                        </p>
                        <p class="form">
                            <label for="txtName">Name:</label>
                            <input type = "text" name="txtName" id="txtName" value="<?php print $name; ?>">
                        </p>
                    </fieldset>
                    <fieldset>
                        <p class="form">
                            <label for="appointTime">When would you like to schedule your reading for?</label>
                            <input type="datetime-local" name="appointTime" id="appointTime" value="<?php print $appointTime;?>">
                        </p>
                    </fieldset>
                    <fieldset>
                        <legend>What type of reading would you like?</legend>
                        <p class="form">
                            
                            <input type="radio" name="type" id="radIndiv" value="Individual" <?php if ($knowledge == 'Individual') print 'checked';?>> 
                            <label for="radIndiv">Individual</label>&nbsp;
                            
                            <input type="radio" name="type" id="radCouple" value="Couple" <?php if ($knowledge == 'Couple') print 'checked';?>> 
                            <label for="radCouple">Couple</label>&nbsp;
                            
                            <input type="radio" name="type" id="radGroup" value="Group" <?php if ($knowledge == 'Group') print 'checked';?>> 
                            <label for="radGroup">Group</label>&nbsp;
                        </p>
                    </fieldset>
                    <fieldset>
                        <p class="form">
                            <input type="submit" value="Send">
                        </p>
                    </fieldset>
                </form>
        </section>
        <section class="flexB">
            <h2>Check your email </h2>
                <?php
                    print $message;
                    print '<p>Post Array:</p><pre>';
                    print_r($_POST);
                    print '</pre>';
                ?>
            </section>
            <section class="flexC">
                <h2>Thank you for Scheduling an appointment!</h2>
                <figure class="image">
                    <img src="images/thank_you_small.jpg" srcset="images/thank_you_medium.jpg 2x, images/thank_you.jpg 3x" alt="Thank You">
                    <figcaption><cite>https://emilypost.com/advice/different-ways-to-say-thank-you</cite></figcaption>
                </figure>
            </section>
        </main>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>