<?php

try {
    $dbh = new PDO("sqlite:db/tcmc.sqlite"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

?>

     <div id='postbulliten' class ='addArtistDialog'>     
         <div>
 		  <a href='#close' title='Close' class='close'>X</a>
 		  <h2>Post Bulliten</h2>
 		  <form id='addartist' name='addartist' method='post' action='php/addartistprocess.php' enctype='multipart/form-data'>
             <label class='nameLabel' for='name'>Name    </label>
             <input name='name' class='name' type='text' id='name' placeholder='Artist Name' required><br>
             <label for='details'>Details *</label><br>
             <textarea name='details' rows='3' cols='48' id='details' ></textarea><br>
             <table style='width:1'>
                 <tr>
                     <td><label class='webpageLabel' for='webpage'>Webpage URL</label></td>
                     <td><input name='webpage' class='webpage' type='text' id='webpage' placeholder='http://...com'></td>
                 </tr>
                 <tr>
                     <td><label class='webpageLabel' for='expire'>expire (YYYY-MM-DD): </label></td>
                     <td><input name='expire' class='expire' type='expire' id='expire' placeholder='YYYY-MM-DD' required> </td> </tr>
                 <tr>
                     <td><label for='file'>Photo *</label></td>
                     <td> <input type='file' name='imagefile' id='imagefile' required/> </td>
                 </tr>
             </table>
             <input name= 'submit' class='submit' type='submit' value='Add Artist' >            
          </form>  

    </div>
</div>