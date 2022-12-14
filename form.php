<?php include 'top.php';
$dataIsGood = true;
$message = '';
$mailMessage = '';
$mailSent = '';
$email = '';
$name = '';
$appointTime = '';
$type = '';
$intentions = '';

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
            <section>
                <h2>To schedule a reading, submit this form!</h2>
<?php
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $email = sanatize("txtEmail");
        if(!filter_var($email, FILTER_VALIDATE_EMAIL) or $email == ''){
            print '<p class="wrong">Please enter your email.</p>';
            $dataIsGood = false;
        }

        $name = sanatize("txtName");
        if($name == ''){
            print'<p class="wrong">Please enter your name.</p>';
            $dataIsGood = false;
        }

        $appointTime = sanatize("appointTime");
        if($appointTime == ''){
            print '<p class="wrong">Please choose an appointment time.</p>';
            $dataIsGood = false;
        }

        $type = sanatize("radType");
        if($type != "Individual" AND $type != "Couple" AND $type != "Group"){
            print '<p class="wrong">Please chose which type of reading you would like. For more information on what each reading includes go to the pricing page.</p>';
            $dataIsGood = false;
        }

        $intentions = sanatize("txtIntentions");


        if($dataIsGood){
            $sql = 'INSERT INTO tblFinalProjectResponses(fldEmail, fldName, fldAppointTime, fldType, fldIntentions) VALUES(?,?,?,?,?)';
            $statement = $pdo->prepare($sql);
            $data = array($email, $name, $appointTime, $type, $intentions);

            if($statement->execute($data)){
                $message = '<h2>You Scheduled a Reading!</h2>';
                print '<p>Your reading was sucessfully scheduled!</p>';

                $to = $email;
                $from = 'CS 008 Team <rlkoenig@uvm.edu>';
                $subject = 'You Scheduled a Tarot Reading';
                $mailMessage = '<p style="font:Georgia; color:rbg(67, 42, 255);">Thank you, ' . $name . ' for scheduling a reading! Your appointment is at '. $appointTime. '</p>';
                $mailMessage .= '<p>See you then!</p>';
                $mailMessage .= '<p>Linsey Reads Tarot</p>';
                $headers = "MIME_Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=stf-8\r\n";
                $headers .= "From: ".$from. "\r\n";
                $mailSent = mail($to, $subject, $mailMessage, $headers);
                if ($mailSent){
                    $message .= '<p>A confirmation email was sent.</p>';
                } 
                else{
                    $message .= '<p>An error occured. An email was not sent.</p>';
                }
            }
            else{
                $message .= '<p>An error occured. Your appointment was not scheduled.</p>';
            }
        }

    }
?>
                <form action="#" method="POST">
                    <fieldset>
                        <p class="form">
                            <label for="txtEmail">Email:</label>
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
                            
                            <input type="radio" name="radType" id="radIndiv" value="Individual" <?php if ($type == 'Individual') print 'checked';?>> 
                            <label for="radIndiv">Individual</label>&nbsp;
                            
                            <input type="radio" name="radType" id="radCouple" value="Couple" <?php if ($type == 'Couple') print 'checked';?>> 
                            <label for="radCouple">Couple</label>&nbsp;
                            
                            <input type="radio" name="radType" id="radGroup" value="Group" <?php if ($type == 'Group') print 'checked';?>> 
                            <label for="radGroup">Group</label>&nbsp;
                        </p>
                    </fieldset>
                    <fieldset>
                        <legend>What are your intentions for this reading?</legend>
                        <p class="form">
                            <label for="txtIntentions">Intentions: </label>
                            <textarea id="txtIntentions" name="txtIntentions" rows="5" cols="30"><?php print $intentions; ?></textarea>
                        </p>
                    </fieldset>
                    <fieldset>
                        <p class="form">
                            <input type="submit" value="Send">
                        </p>
                    </fieldset>
                </form>
        </section>
        <section>
            <h2>Thank You!</h2>
                <?php
                    print $message;
                    //print '<p>Post Array:</p><pre>';
                    //print_r($_POST);
                    //print '</pre>';
                ?>
            </section>
        </main>
    <?php
        include 'footer.php';
    ?>