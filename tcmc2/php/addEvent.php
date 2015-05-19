<?php
session_start()
    //event Name / artist id / details / time / location
?>

<div id='addEvent' class ='addArtistDialog'>     
    <div>
        <a href='#close' title='Close' class='close'>X</a>
        <h2>Add New Event</h2>
        <form id='addevent' name='addevent' method='post' action='php/addeventprocess.php' enctype='multipart/form-data'>
            <label class='nameLabel' for='name'>Event Name    </label>
            <input name='name' class='name' type='text' id='name' placeholder='Event Name' required><br>
            <label for='details'>Details:</label><br>
            <textarea name='details' rows='3' cols='48' id='details' required ></textarea><br>
            <table style='width:1'>
                <tr>
                    <td><label class='webpageLabel' for='location'>Location:</label></td>
                    <td><input name='location' class='location' type='text' id='location' placeholder='Location' required></td>
                </tr>
                <tr>
                    <td><label class='webpageLabel' for='date'>Date (YYYY-MM-DD): </label></td>
                    <td><input name='date' class='date' type='date' id='date' placeholder='YYYY-MM-DD' required> </td>
                </tr>
                <tr>
                    <td><label class='webpageLabel' for='time'>Time (HH:MM AM/PM):</label></td>
                    <td><input name='time' class='time' type='time' id='time' placeholder='HH:MM' required></td>
                </tr>
            </table>
            <input name= 'submit' class='submit' type='submit' value='Add Artist' >            
         </form>  
    </div>
</div>
