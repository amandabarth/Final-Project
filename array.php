<?php 
include 'top.php';
$yearlyStatistics = array(
    array('2011-2020', '44.1','43.3','86'),
    array('2001-2010', '43.0','48.0','89'),
    array('1991-2000', '43.0','43.9','96'),
    array('1960-1969', '42.6','36.6','96'),
    array('1900-1909', '42.1','35.8','68')
);
?>
    <main>
        <h1></h1>
        <section class="flexA">
            <h2></h2>
            <table>
                <tr>
                    <th>Years</th>
                    <th>Average Temperature(F)</th>
                    <th>Precipitaion(in)</th>
                    <th>Snowfall(in)</th>
                </tr>
                <?php 
                foreach($yearlyStatistics as $yearlyStat){
                    print'<tr>';
                    print '<td>'.$yearlyStat[0].'</td>';
                    print '<td>'.$yearlyStat[1].'</td> ';
                    print '<td>'.$yearlyStat[2].'</td>';
                    print '<td>'.$yearlyStat[3].'</td>';
                    print '</tr>'. PHP_EOL;
                }
                ?>
            </table>
        </section>
        <section class="flexB">
            <h2></h2>
            <p></p>
        </section>
        <section class="flexC">
            <h2></h2>
            <p></p>
        </section>
    </main>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>