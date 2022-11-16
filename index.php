<?php include 'top.php';
?>
    <main>
        <h1>Home</h1>
        <section class="flexA">
            <h2></h2>
            <figure class="image">
                <img src="images/climate_change_medium.jpg" srcset="images/climate_change.jpg 2x, images/climate_change_large.jpg 3x" alt="Image of the earth, where half is burnt and half has lots of greenery">
                <figcaption>A dramatized depiction of what the Earth will look like if we don't start taking care of it.<cite>https://www.roanoke.edu/events/solve_climate_by_2030_a_national_conversation_about_climate_change_x58423"</cite></figcaption>
            </figure>
            <p></p>
        </section>
        <section class="flexB">
            <h2></h2>
            <table>
                <tr>
                    <?php 
                    $sql = 'SELECT fldYears, fldAveTemp, fldSeaLevel, fldAveCOO FROM tblChanges';
                    $statement = $pdo->prepare($sql);
                    $statement->execute();
                    $records = $statement->fetchAll();

                    print'<th></th>';
                    foreach($records as $record){
                    print'<th>'.$record['fldYears'].'</th>';
                    }
                print'</tr>
                <tr>
                    <th>Difference in Average Temperature (Celcius)</th>';
                    foreach($records as $record){
                        print'<td>'.$record['fldAveTemp'].'</td>';
                        }
                print'</tr>
                <tr>
                    <th>Average Sea Level (mm)</th>';
                    foreach($records as $record){
                        print'<td>'.$record['fldSeaLevel'].'</td>';
                        }
                print '</tr>
                <tr>
                    <th>Average Carbon Dioxide (ppm)</th>';
                    foreach($records as $record){
                        print'<td>'.$record['fldAveCOO'].'</td>';
                        }
                ?>
                </tr>
                <tr>
                    <td colspan="4"><cite>nasa.gov</cite></td>
                </tr>
            </table>
        </section>
        <section class="flexC">
            <h2></h2>
            <p></p>
            <ul>
                <li>Glaciers Melting</li>
                <li>Sea Levels Rising</li>
                <li>Increased Flooding</li>
                <li>Increased Erosion</li>
                <li>More Intense Downpours</li>
                <li><cite><a href="https://education.nationalgeographic.org/resource/climate-change">National Geographic</a></cite></li>
            </ul>
        </section>
    </main>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>