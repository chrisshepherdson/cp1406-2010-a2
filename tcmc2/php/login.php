<?php

$error = $_SESSION['error'];


echo    "<div id='openModal' class ='modalDialog'>";     
echo        "<div>";
echo		"<a href='#close' title='Close' class='close'>X</a>";
echo		"<h2>Login</h2>";
echo        "<h3>$error</h3>";
echo		"<form id='login' name='login' method='post' action='' >";
echo        "<table>";
echo        "<tr>";
echo            "<td><label class='loginlabel' for='login'>Username</label></td>";
echo            "<td><input name='username' class='username' type='text' id='username' placeholder='email'></td>";
echo                "</tr>";
echo                "<tr>";
echo            "<td><label class='loginlabel' for='password'>Password</label></td>";
echo            "<td><input name='password' class='password' type='password' id='password' placeholder='username'></td>";
echo            "</tr>";
echo            "</table>";
echo            "<input name= 'submit' class='submit' type='submit' value='Login' >";            
echo            "</form>";  
    
            

if (isset($_POST['submit'])) 
{
    
    $sql = "SELECT * FROM users WHERE username = '{$_POST['username']}'";
    foreach ($dbh->query($sql) as $row) 
    {
        if ($row[username] == $_POST['username']) 
        {
            if ($row[password] == $_POST['password']) 
            {
                unset($_SESSION['error']);
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['id'] = $row[id];
                header("Location:#close");
            } 
            else 
            {
                $_SESSION['error'] = 'Invalid Password';
                unset($_POST['username']);
                unset($_POST['password']);
              //  header("Location:#openModal");
            }
        } 
        else 
        {
            $_SESSION['error'] = 'invalid username';
            unset($_POST['username']);
            unset($_POST['password']);
         //   header("Location:#openModal");
        }
    }

}
?>