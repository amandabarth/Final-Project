<?php include 'top.php';
$dataIsGood = true;
$message = '';
$email = '';
$question = '';
$termsAndService = false;
$emailList = true;
$postOnSite = true;
$knowledge = 'YES!';

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
            <h1>Questions</h1>
            <section class="flexA">
                <h2>Please submit this form if you have any questions!</h2>
<?php
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $email = sanatize("txtEmail");
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) or $email == ''){
        print '<p class="wrong">Please enter your email.</p>';
        $dataIsGood = false;
    }

    $question = sanatize("txtQuestion");

    $termsAndService = (int) sanatize('chkTermsAndService');
    $emailList = (int) sanatize('chkEmailList');
    $postOnSite = (int) sanatize('chkPostOnSite');
    if($termsAndService != 1){
        print '<p class="wrong">Please agree to Terms of Service. </p>';
        $dataIsGood = false;
    }

    $knowledge = sanatize("newInfo");
    if($knowledge != "YES!" AND $knowledge != "some" AND $knowledge != "no"){
        print '<p class="wrong">Please choose if you learned or not. </p>';
        $dataIsGood = false;
    }

    if($dataIsGood){
        $sql = 'INSERT INTO tblQuestions(fldEmail, fldQuestion, fldTermsOfService, fldEmailList, fldPostOnSite, fldKnowledge) VALUES(?,?,?,?,?,?)';
        $statement = $pdo->prepare($sql);
        $data = array($email, $question, $termsAndService, $emailList, $postOnSite, $knowledge);

        if($statement->execute($data)){
            $message = '<h2>Thank you</h2>';
            $message .= '<p>Your question was sucessfully sent!</p>';
        }
        else {
            $message = '<p class="wrong">Your question was not submitted.<p>';
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
                            <label for="txtQuestion">Questions:</label>
                            <textarea name="txtQuestion" id="txtQuestion" placeholder="?" rows="3" cols="20"><?php print $question; ?></textarea>
                        </p>
                    </fieldset>
                    <fieldset>
                        <p class="form">
                            <input type="checkbox" name="chkTermsAndService" id="chkTermsAndService" value="1" <?php if ($termsOfService) print 'checked';?>>
                            <label for="chkTermsAndService">Agree to terms of service</label>
                        </p>
                        <p class="form">
                            <input type="checkbox" name="chkEmailList" id="chkEmailList" value="1" <?php if ($emailList) print 'checked';?>>
                            <label for="chkEmailList">Sign up for Email List</label>
                        </p>
                        <p class="form">
                            <input type="checkbox" name="chkPostOnSite" id="chkPostOnSite" value="1" <?php if ($postOnSite) print 'checked';?>>
                            <label for="chkPostOnSite">Agree to your question being posted</label>
                        </p>
                    </fieldset>
                    <fieldset>
                        <legend>Survey: Did you Learn Something?</legend>
                        <p class="form">
                            
                            <input type="radio" name="newInfo" id="radYes" value="YES!" <?php if ($knowledge == 'YES!') print 'checked';?>> 
                            <label for="radYes">YES!</label>&nbsp;
                            
                            <input type="radio" name="newInfo" id="radSome" value="some" <?php if ($knowledge == 'some') print 'checked';?>> 
                            <label for="radSome">A Little Bit</label>&nbsp;
                            
                            <input type="radio" name="newInfo" id="radNo" value="no" <?php if ($knowledge == 'no') print 'checked';?>> 
                            <label for="radNo">No :(</label>&nbsp;
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
            <h2>We value your response!</h2>
                <?php
                    print $message;
                    print '<p>Post Array:</p><pre>';
                    print_r($_POST);
                    print '</pre>';
                ?>
            </section>
            <section class="flexC">
                <h2>Thank you to everyone who submitted questions!</h2>
                <figure class="image">
                    <img src="images/thank_you_small.jpg" srcset="images/thank_you_medium.jpg 2x, images/thank_you.jpg 3x" alt="Thank You">
                    <figcaption><cite>https://emilypost.com/advice/different-ways-to-say-thank-you</cite></figcaption>
                </figure>
            </section>
            <section class="flexB">
                <h2>Questions:</h2>
                <p class="form">#1 Is climate change real?</p>
            </section>
            <section class="flexC">
                <h2>Answers:</h2>
                <p class="form">#1 Yes, but we have the power to stop it from continuing at such a drastic rate.</p>
            </section>
        </main>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>