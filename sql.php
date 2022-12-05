<?php
include 'top.php';
?>
<main>
    <p>Create Table SQL</p>
<pre>
    CREATE TABLE tblPrices(
        fldPrimKey INT AUTO_INCREMENT PRIMARY KEY,
        fldType VARCHAR(20),
        fldAmount VARCHAR(20)
    )
    INSERT INTO tblPrices(fldType, fldAmount) 
    VALUES ('Individual','$10'),
    ('Couples', '$15'),
    ('Group', '$15 + $10 per person'), 
    ('Individual (Online)', '$8'),
    ('Couples (Online)', '$12'),
    ('Group (Online)', '$10 + $5 per person')

    CREATE TABLE tblFinalProjectResponses(
    fldPrimKey INT AUTO_INCREMENT PRIMARY KEY,
    fldEmail VARCHAR(50) DEFAULT NULL,
    fldName VARCHAR(20) DEFAULT NULL,
    fldAppointTime DATETIME,
    fldType VARCHAR(10),
    fldIntentions VARCHAR(150))

    INSERT INTO tblFinalProjectResponses(fldEmail, fldName, fldAppointTime, fldType, fldIntentions)
    VALUES('acbarth@uvm.edu','Amanda Barth', '2022-12-08 10:32:00','Individual', 'I would like to focus this session on being more sure of myself')
</pre>
</main>
<?php include 'footer.php';?>
    </body>
    </html>