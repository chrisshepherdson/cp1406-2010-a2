<?php
include("php/dbconnect.php");
?>
<section class="events">
    <ul class="events-list">
<?php 
$sql = "SELECT * FROM events";
foreach ($dbh->query($sql) as $row) {
    $artist;
    $sql2 = "SELECT * FROM artists WHERE id='$row[artistId]'";
    foreach ($dbh->query($sql2) as $art) {
        $artist = $art;
    }
    if (time() < $row['time']) {
       $date = date('l jS \of F Y h:i:s A', $row['time']);

?>


        <li>
            <div class="event-container">
                <div class="event-image"><img <?php echo "src='$artist[thumb]' alt='$artist[name]'";?>></img></div>
                <div class="event-info">
                    <h3 class="event-info-name"><?php echo "$row[name]"; ?></h3>
                    <div class="event-info-details"> 
                        <span class="event-time"><?php echo "$date"; ?></span>  
                        <span class="event-location"> at the <?php echo "$row[location]"; ?></span>                         </div>
                    <div class="event-info-text"><?php echo "$row[details]"; ?></div>
                    <br>
                    <div class="event-button"><
                        <a href="#" class="ui small button coloured">Read More</a>
                    </div>
                </div> 
            </div>
        </li>
                        
<?php
    }
}
?>
</ul>
</section>