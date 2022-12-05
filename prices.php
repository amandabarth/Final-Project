<?php 
    include 'top.php';
?>
<main class="prices">
            <h1>Prices</h1>
            <section> 
                <h2>Prices starting at...</h2>
                <table>
                    <tr>
                        <?php 
                        $sql = 'SELECT fldType, fldAmount FROM tblPrices';
                        $statement = $pdo->prepare($sql);
                        $statement->execute();
                        $records = $statement->fetchAll();
                        print '<th>Type</th>';
                        foreach($records as $record){
                            print'<td>'.$record['fldType'].'</td>';
                        }
                    print'</tr>
                    <tr>';
                        print'<th>Price per Reading</th>';
                        foreach($records as $record){
                            print'<td>'.$record['fldAmount'].'</td>';
                        }    
                        ?>
                    </tr>
                </table>
                <h2>About Each</h2>
            </section>
            <section class="options"> 
                <section class="sec-1">
                    <h3>Individual</h3>
                    <p>Are you wondering what your future holds? Or perhaps you are looking for insight into your inner psyche... Either way, an individual reading will give you the answers and insight you need to guide you on your journey. Come to the reading with intentions and know what you hope to get out of it. This is your session so take the time to look deep within yourself to get the most out of it.</p>
                </section>
                <section class="sec-1">
                    <h3>Couples</h3>
                    <p>Relationships can be complicated, but couple's tarot readings can help clear the air. Couples tarot readings are intuitive readings that delve into fibers of your relationship. How do you love eachother? What does your future hold? Is your relationship strong enough to stand against the river of time or will your relationship be swept away?</p>
                </section>
                <section class="sec-1">
                    <h3>Group</h3>
                    <p>Group tarot readings are a fun way to delve into the relationships you have with your friends. Group dinamics can be complicated, but a tarot reading will certainly may help you sort out some of the knots in your web of friendships. Although you must be wary of these types of tarot readings as emotions and past conflicts may arise. Once the reading is over, you should have clarity and know what everyone wants out of the friendships and feel more connected to one another.</p>
                </section>
            </section>
            <section> 
                <h2>Other</h2>
                <p>Readings are Boulder and Burlington based. All readings are also available online from anywhere. Each reading is 30 minutes minimum, and then theres an aditional cost for readings over 30 minutes.</p>
            </section>
        </main>
        <?php
        include 'footer.php';
        ?>
    </body>