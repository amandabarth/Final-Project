<?php
include 'top.php';
?>
<main>
    <p>Create Table SQL</p>
<pre>
    CREATE TABLE tblChanges(
        pmkId INT AUTO_INCREMENT PRIMARY KEY,
        fldYears VARCHAR(4),
        fldAveTemp VARCHAR(5),
        fldSeaLevel VARCHAR(5),
        fldAveCOO FLOAT
    )
    INSERT INTO tblChanges(fldYears, fldAveTemp, fldSeaLevel, fldAveCOO) 
    VALUES ('2000','+0.4','-0.12','370'),
    ('2010','+0.7','7','387'),
    ('2020', '+1.0', '30','412.5')
    SELECT fldYears, fldAveTemp, fldSeaLevel, fldAveCOO FROM tblChanges

    CREATE TABLE tblQuestions(
    pmkSubmissionId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fldEmail VARCHAR(50) DEFAULT NULL,
    fldQuestion VARCHAR(150) DEFAULT NULL,
    fldTermsOfService tinyint(1) DEFAULT 0,
    fldEmailList tinyint(1) DEFAULT 0,
    fldPostOnSite tinyint(1) DEFAULT 0,
    fldKnowledge tinyint(1) DEFAULT 0)

    INSERT INTO tblQuestions(fldEmail, fldQuestion, fldTermsOfService, fldEmailList, fldPostOnSite, fldKnowledge)
    VALUES('acbarth@uvm.edu','How long until the Earth implodes?', 1, 0, 1, 1)
</pre>
</main>
<?php include 'footer.php';?>
    </body>
    </html>