<?php

session_start();
include("php/dbconnect.php");

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Townsville Community Music Centre - About</title>
<meta name="description" content="With the support of the Townsville City Council, we work from an office in the Civic ... All private schools and most government schools have music teachers.">
<link rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- JS -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.royalslider.min.js"></script>
</head>
<!-- START Logo -->
<body>
<div class="container">
<a href="index.html" rel="home">
<br><img src="images/logo.png" alt="Townsville Community Music Centre Logo"></a><br/><br/>
</div>
<!-- END Logo -->
    
<!-- WEBSITE LAYOUT Box -->
<div id="boxed_content" class="boxed_content">
<div class="inner">
<!-- START Navigation -->
<nav class="site-navigation primary-navigation clearfix">
<div class="menu-all-pages-container">
<ul class="nav-menu">
<li ><a href="index.php">Home</a></li>
<li><a href="#">Events</a></li> <li><a href="#">Bulletin Board</a></li>
<li><a href="artists.php">Artists</a></li>
<li><a href="#">Members</a></li>
<li class="current-menu-item"><a href="#">About</a></li>
<li><a href="#">Contact</a></li>
    
<?php

    if (isset($_SESSION['username'])) {
        echo "<li><a href='php/logout.php'>Logout</a></li>";
    echo "<li>{$_SESSION['username']}</li>";
    } else {
        echo "<li><a href='#openModal'>Login</a></li>";
}

?>
    <?php
include("php/login.php");
?>
</ul>
</div>
</nav>
<!-- END Navigation -->
    
<div class="about-content">
    
    <h2>About Us</h2>
    
    <section class="about-intro">
        <div class="about-intro-image">
            <img src="images/CivicFront300_edit.jpg" width="244" height="170" alt="image">
        </div>
        <div class="about-intro-text">
            <h3>Townsville Community Music Centre</h3>
            <p>Based in Townsville, North Qld, the Music Centre presents concerts and workshops throughout the year, in a diverse range of genres including classical, jazz, folk, blues, world and contemporary music, featuring touring artists and locally-based professional and emerging artists.</p>
        </div>
    </section>
    
    <section class="about-contact">
        <h3>Contact Details</h3>
        <div class="about-contact-info-container">
            <div class="about-contact-info-1">
                <p>
                    <strong>Phone</strong> <span id="info-contact-phone">07 4724 2086</span><br>
                    <strong>Mobile</strong> <span id="info-contact-mobile">0402 255 182</span><br>
                    <strong>Email</strong> <span id="info-contact-email"><a href="mailto:admin@townsvillemusic.org.au?Subject=Enquiry" target="_top">admin@townsvillemusic.org.au</a></span>
                </p>
            </div>
            <div class="about-contact-info-2">
                <p>
                    <strong>Street Address</strong> <span id="info-contact-address1">Townsville Civic Theatre, 41 Boundry Street,</span><br>
                    <span id="info-contact-address2">Townsville, Qld 4810</span><br>
                    <strong>Postal Address PO Box</strong> <span id="info-contact-postal">1006, Townsville, Qld 4810</span>
                </p>
            </div>
        </div>
    </section>
    
    
    <section class="about-lookingback">
        <div class="about-lookingback-image">
            <img src="images/old-music_edit.jpg" width="500" height="161" alt="image">
        </div>
        <div class="about-lookingback-text">
            <h3>Looking Back - The First 30 Years</h3>
            <p>
                The Townsville Community Music Centre celebrated its 30th year in 2013.<br>
                <br>
It has been constantly changing over the years to keep up to date with the musical tastes and needs of the Townsville community. As part of the relocation of the Music Centre to the Civic Theatre, Bronia Renison and Jean Dartnall, both librarians, have assessed the old collection of sheet music, books and recorded music which the centre has been storing, unused, for many years. Sometimes older things have to be discarded to make way for the new, but the Music Centre is aware that older material may still have value.<br>
The National Library of Australia has an online catalogue (TROVE) that lists not only its own holdings but also information about items held by many other libraries around Australia. Using this catalogue Bronia and Jean have identified at least 150 items of music that are not held by any of the country's major libraries. These items have been donated to the National Library to include in their collection and thus made available to all historians and musicians.<br>
<br>
Also discovered in the old collection were some pieces relevant to North Queensland. Local musicians performed these at a musical social afternoon on Sunday April 21st in C2 at the Civic Theatre. The remaining sheet music, books and CDs were put on display and distributed free of charge to the local music community.
            </p>
        </div>
    </section>
    
    <section class="about-history">
        <h3>A Brief History - By Jean Dartnall</h3>
        <table class="about-history-table">
            <tr><th>1983</th><td>The Townsville Community Music Centre was established at a public meeting on May 24th. Then Deputy Mayor, Ken McElligott, opened the meeting and presented a cheque for $50 from the City Council to cover initial petty cash, the Centre's first funds. At the meeting an executive committee was formed. Over the next few weeks that committee drafted a constitution which was endorsed at another public meeting on June 15th. Fred Thompson was Chairman from September 1983, with Gordon Dean as his Deputy and Jan Eagleton as Secretary.</td></tr>
            <tr><th>1984</th><td>Mira Henderson, who had extensive experience in community music work in England, was the first staff member. (Her position was Acting Director because she was only in Townsville for a brief spell.) She instigated a series of classes starting in 1984 using the skills of people living in Townsville to enhance and encourage music learners of all ages.</td></tr>
            <tr><th>1985</th><td>Kirsty Veron was appointed as the first Director. Kirsty was very interested in teaching music to children and had worked with Mira in the 1983 classes. She held this position until 1988 leading the new organisation into a strong position in the Townsville arts community.</td></tr>
            <tr><th>1985</th><td>The Music Centre produced Benjamin Britten's Noyes Fludde in St James Anglican Cathedral. This involved hundreds of children and some of Townsville's best known (and loved) musicians. It was produced by Rachel Berker (now Rachel Matthews) and involved Bernie Lannigan and Sandra Voss in the main parts rehearsed by Bill Williams; Donna McMahon and Jenny Carr rehearsing the strings and recorders and guest conductor Donald Hollier. This was by the no means the only major production mounted by the Music Centre but was probably the largest.</td></tr>
            <tr><th>1987</th><td>This was the year of the first fund raising dinner. These dinners became a tradition as they were a wonderful mixture of good food, good wine and good music. The first ones were held at the home of Paul and June Tonnoir in North Ward. Later they moved to the Bishop's Lodge as guests of the Anglican Bishop. Attendees would often book their tickets for the next year's dinner as soon as they had attended this one. They ran until 2004.</td></tr>
            <tr><th>1988</th><td>Mary Lou Schoenfeldt was appointed as Administrator. Although this was initially a small part time job with limited responsibilities, Mary Lou made the job, the Centre and indeed music in Townsville, her own. She was a wonderful asset to the Centre and to the cultural life of the City until she had to retire due to ill health in 2003.</td></tr>
            <tr><th>1990</th><td>This year the first lunchtime concert was held at the PercTucker Gallery. The importance of providing performance opportunities for emerging musicians had become evident and from this time, for a number of years, one of the major activities of the Centre was the production and management of concerts.</td></tr>
            <tr><th>1999</th><td>Arts Queensland had been a major funder of Music Centre activities for a number of years but in this year they agree to provide funding on a three year basis. This made it much easier for the Centre to plan ahead and reduced the time that had to be spent on repetitive grant applications. This arrangement ran until 2004.</td></tr>
            <tr><th>2003</th><td>A spectacular variety concert was held at the Townsville Civic Theatre to celebrate twenty years of the Music Centre and as a tribute to May Lou.</td></tr>
            <tr><th>2005</th><td>The Centre moved to offices in the Old Magistrate's Court.</td></tr>
            <tr><th>2012</th><td>The Centre moved to its present office in the Townsville Civic Theatre building.</td></tr>
        </table>
        <p>
            More details of the period 1983 - 2008 can be found in the book, 
<strong>"Townsville Community Music Centre: some memories of the first 25 years" 
by Jean Dartnall.</strong> (Copies available from the Music Centre)
        </p>
    
    </section>
    
    
</div>
        


<div class="footer-wrapper">
    <footer class="site-footer">
        
        <div class="footer-logo"><img src="images/logo.png" width=147px height=98px alt="logo"></div>
        <ul class="footer-navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Bulletin Board</a></li>
            <li><a href="artists.php">Artists</a></li>
            <li><a href="#">Members</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <ul class="footer-contact">
            <li class="footer-contact-address">41 Boundary Street, Townsville</li>
            <li class="footer-contact-email">
                <a href="mailto:admin@townsvillemusic.org.au?Subject=Enquiry" target="_top">admin@townsvillemusic.org.au</a>
                </li>
            <li class="footer-contact-phone">Phone: 07 4724 2086</li>
        </ul>
        <div class="footer-facebook"><a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534"><img src="images/FB-f-Logo__white_29.png" width=29px height=29px alt="facebook"></a></div>
        
    </footer>
</div> 
    
    
</body>
</html>