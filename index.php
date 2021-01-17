<!--variables-->
<?php
//general
$name = "Clarissa";
$btn_txt = "View More";
//nav
$main = "Home";
$skill = "Skills";
$edu = "Education";
$org = "Organizations";
$award = "Awards";
$cont = "Contact";
//skills
$html = "Hyper Text Markup Language (HTML)";
$css = "Cascading Style Sheets (CSS)";
$js = "JavaScript (Js)";
$jv = "Java Programming Language";
$py = "Python Programming Language";
//education
$uni = "University";
$shs = "Senior High";
$jhs = "Junior High";
$elem = "Elementary";
$wma = "WMA - Specialization in Web and Mobile Applications";
$stem = "STEM - Science, Technology, Engineering and Mathematics";
//organizations
$feu = "FEU Institute of Technology";
$aits = "Alliance of Information Technology Students (AITS)";
$jpcs = "Junior Philippine Computer Society (JPCS)";
$yfc = "Youth For Christ (YFC)";
$jeg =  "Junior Einstein Guild";
//awards
$ms ="Microsoft";
//footer
$full_name = "Maria Clarissa Victoria";
$cp = "Copyright 2020";
?>
<!--html document-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            issa's portfolio
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--icon-->
        <link rel="shortcut icon" href="assets/logo1.png">
        <!--FontAwesome-->
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--main-->
        <section id="main">
            <!--navigation-->
            <nav>
                <!--logo-->
                <a href="#main" class="logo">
                    <img src="assets/logo1.png">
                </a>
                <!--menu-btn-->
                <input class="menu-btn" type="checkbox" id="menu-btn">
                <label class="menu-icon"for="menu-btn">
                    <span class="nav-icon"></span>
                </label>
                <!--menu-->
                <ul class="menu">
                    <li><a href="#main"><?php echo $main ?></a></li>
                    <li><a href="#skills"><?php echo $skill ?></a></li>
                    <li><a href="#education"><?php echo $edu ?></a></li>
                    <li><a href="#organizations"><?php echo $org ?></a></li>
                    <li><a href="#awards"><?php echo $award ?></a></li>
                    <li><a href="#contact"><?php echo $cont ?></a></li>
                </ul>
            </nav>
            <!--content-->
            <div class="content">
                <!--profile-->
                <div class="profile">
                    <img src="assets/profile1.jpg">
                </div>
                <!--text-->
                <div class="main-text">
                    <h1><?php echo "Hello, I am ".$name; ?></h1>
                    <p><?php echo "This website is a sample site for my Application Development course subject."?></p>
                    <!--btn-->
                    <a href="#" class="portfolio-btn">See My Portfolio</a>
                </div>
            </div>
        </section>
        <!--skills-->
        <section id="skills">
            <!--skill-text-->
            <div class="skill-text">
                <!--heading-->
                <div class="skill-heading">
                    <span><?php echo "My ".$skill;?></span>
                    <h2><?php echo "My Expertise";?></h2>
                    <p><?php echo "The following are the programming languages that I have experience in:"?></p>
                </div>
                <!--skill-box-container-->
                <div class="skill-box-container">
                    <!--skill-box html5-->
                    <div class="skill-box">
                        <!--icon-->
                        <div class="skill-box-icon">
                            <i class="fab fa-html5"></i>
                        </div>
                        <!--skill-box-text-->
                        <div class="skill-box-text">
                            <strong><?php echo $html?></strong>
                            <p><?php echo "I learned HTML from Web Design 1 and 2 course subjects"?></p>
                        </div>
                    </div>
                    <!--skill-box css-->
                    <div class="skill-box">
                        <!--icon-->
                        <div class="skill-box-icon">
                            <i class="fab fa-css3-alt"></i>
                        </div>
                        <!--skill-box-text-->
                        <div class="skill-box-text">
                            <strong><?php echo $css?></strong>
                            <p><?php echo "I learned CSS from Web Design 1 and 2 course subjects"?></p>
                        </div>
                    </div>
                    <!--skill-box javascript-->
                    <div class="skill-box">
                        <!--icon-->
                        <div class="skill-box-icon">
                            <i class="fab fa-js-square"></i>
                        </div>
                        <!--skill-box-text-->
                        <div class="skill-box-text">
                            <strong><?php echo $js?></strong>
                            <p><?php echo "I have learned how to use JavaScript from Web Design 2 course subject"?></p>
                        </div>
                    </div>
                    <!--skill-box java-->
                    <div class="skill-box">
                        <!--icon-->
                        <div class="skill-box-icon">
                            <i class="fab fa-java"></i>
                        </div>
                        <!--skill-box-text-->
                        <div class="skill-box-text">
                            <strong><?php echo $jv?></strong>
                            <p><?php echo "I have gained experience on this language through Object Oriented Programming"?></p>
                        </div>
                    </div>
                    <!--skill-box python-->
                    <div class="skill-box">
                        <!--icon-->
                        <div class="skill-box-icon">
                            <i class="fab fa-python"></i>
                        </div>
                        <!--skill-box-text-->
                        <div class="skill-box-text">
                            <strong><?php echo $py?></strong>
                            <p><?php echo "I have learned this programming language last year"?></p>
                        </div>
                    </div>
                </div>
                <!--btn-->
                <div class="skill-box-button">  
                    <a href="#" class="skill-btn"><?php echo $btn_txt?></a>
                </div>  
            </div>
            <!--image-->
            <div class="skill-img">
                <img src="assets/skill-programming.png">
            </div>
        </section>
        <!--education-->
        <section id="education">
            <!--image-->
            <div class="education-img">
                <img src="assets/education.png">
            </div>
            <!--education-text-->
            <div class="education-text">
                <!--heading-->
                <div class="education-heading">
                    <span><?php echo "My ".$edu?></span>
                    <h2><?php echo "Schools Studied"?></h2>
                    <p><?php echo "I have been to several schools ever since grade school, and they are:"?></p>
                </div>
                <!--education-box-container-->
                <div class="education-box-container">
                    <!--education-box feu-->
                    <div class="education-box">
                        <!--icon-->
                        <div class="education-box-icon">
                            <strong><?php echo "2018-2021"?></strong><br>
                            <strong><?php echo $uni?></strong>
                        </div>
                        <!--education-box-text-->
                        <div class="education-box-text">
                            <strong><?php echo $feu?></strong>
                            <p><?php echo "Nicanor Reyes St., Sampaloc, Manila"?></p>
                            <strong><?php echo "Bachelor of Science in Information Technology"?></strong>
                            <strong><?php echo $wma?></strong>
                        </div>
                    </div>
                    <!--education-box cjps-->
                    <div class="education-box">
                        <!--icon-->
                        <div class="education-box-icon">
                            <strong><?php echo "2017-2018"?></strong><br>
                            <strong><?php echo $shs?></strong>
                        </div>
                        <!--education-box-text-->
                        <div class="education-box-text">
                            <strong><?php echo "Child Jesus of Prague School"?></strong>
                            <p><?php echo "Batingan, Binangonan, Rizal"?></p>
                            <strong><?php echo $stem?></strong>
                        </div>
                    </div>
                    <!--education-box buffalo grove-->
                    <div class="education-box">
                        <!--icon-->
                        <div class="education-box-icon">
                            <strong><?php echo "2017-2017"?></strong><br>
                            <strong><?php echo $shs?></strong>
                        </div>
                        <!--education-box-text-->
                        <div class="education-box-text">
                            <strong><?php echo "Buffalo Grove High School"?></strong>
                            <p><?php echo "Dundee Road, Buffalo Grove, Illinois"?></p>
                            <strong><?php echo $stem?></strong>
                        </div>
                    </div>
                    <!--education-box dulles-->
                    <div class="education-box">
                        <!--icon-->
                        <div class="education-box-icon">
                            <strong><?php echo "2014-2016"?></strong><br>
                            <strong><?php echo $shs?></strong>
                        </div>
                        <!--education-box-text-->
                        <div class="education-box-text">
                            <strong><?php echo "Dulles High School"?></strong>
                            <p><?php echo "Dulles Avenue, Sugar Land, Texas"?></p>
                            <strong><?php echo $stem?></strong>
                        </div>
                    </div>
                    <!--education-box westwood-->
                    <div class="education-box">
                        <!--icon-->
                        <div class="education-box-icon">
                            <strong><?php echo "2013-2014"?></strong><br>
                            <strong><?php echo $jhs?></strong>
                        </div>
                        <!--education-box-text-->
                        <div class="education-box-text">
                            <strong><?php echo "Westwood Junior High School"?></strong>
                            <p><?php echo "Arapaho Road, Dallas, Texas"?></p>
                        </div>
                    </div>
                    <!--education-box jefferson-->
                    <div class="education-box">
                        <!--icon-->
                        <div class="education-box-icon">
                            <strong><?php echo "2012-2012"?></strong><br>
                            <strong><?php echo $jhs?></strong>
                        </div>
                        <!--education-box-text-->
                        <div class="education-box-text">
                            <strong><?php echo "Thomas Jefferson Junior High School"?></strong>
                            <p><?php echo "Janes Avenue, Woodridge, Illinois"?></p>
                        </div>
                    </div>
                    <!--education-box raises-->
                    <div class="education-box">
                        <!--icon-->
                        <div class="education-box-icon">
                            <strong><?php echo "2011-2012"?></strong><br>
                            <strong><?php echo $elem?></strong>
                        </div>
                        <!--education-box-text-->
                        <div class="education-box-text">
                            <strong><?php echo "Raises Montessori Academe"?></strong>
                            <p><?php echo "Pantok, Binangonan, Rizal"?></p>
                        </div>
                    </div>
                    <!--education-box claremont-->
                    <div class="education-box">
                        <!--icon-->
                        <div class="education-box-icon">
                            <strong><?php echo "2010-2011"?></strong><br>
                            <strong><?php echo $elem?></strong>
                        </div>
                        <!--education-box-text-->
                        <div class="education-box-text">
                            <strong><?php echo "Claremont School of Binangonan"?></strong>
                            <p><?php echo "Pantok, Binangonan, Rizal"?></p>
                        </div>
                    </div>
                    <!--education-box immaculada-->
                    <div class="education-box">
                        <!--icon-->
                        <div class="education-box-icon">
                            <strong><?php echo "2006-2010"?></strong><br>
                            <strong><?php echo $elem?></strong>
                        </div>
                        <!--education-box-text-->
                        <div class="education-box-text">
                            <strong><?php echo "La Immaculada Concepcion School"?></strong>
                            <p><?php echo "Caruncho Avenue, Pasig, Metro Manila"?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--organizations-->
        <section id="organizations">
            <!--organizations-text-->
            <div class="organizations-text">
                <!--heading-->
                <div class="organizations-heading">
                    <span><?php echo $org." I Have Joined"?></span>
                    <h2><?php echo "Memberships"?></h2>
                    <p><?php echo "I have always been an active member in the community I reside in. The following are some of the organizations I have joined since High School:"?></p>
                </div>
                <!--organizations-box-container-->
                <div class="organizations-box-container">
                    <!--organizations-box aits-->
                    <div class="organizations-box">
                        <!--icon-->
                        <div class="organizations-box-icon">
                            <strong><?php echo "2020-Current"?></strong>
                        </div>
                        <!--organizations-box-text-->
                        <div class="organizations-box-text">
                            <strong><?php echo $aits?></strong>
                            <p><?php echo "Vice President of Web and Mobile Applications"?></p>
                            <p><?php echo $feu?></p>
                        </div>
                    </div>
                    <!--organizations-box jpcs-->
                    <div class="organizations-box">
                        <!--icon-->
                        <div class="organizations-box-icon">
                            <strong><?php echo "2018-2019"?></strong>
                        </div>
                        <!--organizations-box-text-->
                        <div class="organizations-box-text">
                            <strong><?php echo $jpcs?></strong>
                            <p><?php echo $feu?></p>
                        </div>
                    </div>
                    <!--organizations-box yfc-->
                    <div class="organizations-box">
                        <!--icon-->
                        <div class="organizations-box-icon">
                            <strong><?php echo "2018-2019"?></strong>
                        </div>
                        <!--organizations-box-text-->
                        <div class="organizations-box-text">
                            <strong><?php echo $yfc?></strong>
                            <p><?php echo $feu?></p>
                        </div>
                    </div>
                    <!--organizations-box einstein-->
                    <div class="organizations-box">
                        <!--icon-->
                        <div class="organizations-box-icon">
                            <strong><?php echo "2017-2018"?></strong>
                        </div>
                        <!--organizations-box-text-->
                        <div class="organizations-box-text">
                            <strong><?php echo $jeg?></strong>
                            <p><?php echo "President Officer"?></p>
                            <p><?php echo "Child Jesus of Prague School"?></p>
                        </div>
                    </div>
                </div>
                <!--btn-->
                <div class="organizations-box-button">  
                    <a href="#" class="organizations-btn"><?php echo $btn_txt?></a>
                </div>  
            </div>
            <!--image-->
            <div class="organizations-img">
                <img src="assets/organizations.png">
            </div>
        </section>
        <!--awards-->
        <section id="awards">
            <!--img-->
            <div class="awards-img">
                <img src="assets/trophy.png">
            </div>
            <!--awards-text-->
            <div class="awards-text">
                <!--heading-->
                <div class="awards-heading">
                    <span><?php echo "earned awards and certifications"?></span>
                    <h3><?php echo "My ".$award?></h3>
                    <p><?php echo "The following are the awards and certifications I have received according by year:"?></p>
                </div>
                <!--awards-box-container-->
                <div class="awards-box-container">
                    <!--awards-box microsoft python-->
                    <div class="awards-box">
                            <!--icon-->
                            <div class="awards-box-icon">
                                <i class="fab fa-windows"></i>
                            </div>
                            <!--skill-box-text-->
                            <div class="awards-box-text">
                                <strong><?php echo $ms?></strong>
                                <p><?php echo "MTA: Python Fundamentals - 2020 Certified"?></p>
                            </div>
                        </div>
                    <!--awards-box microsoft database-->
                    <div class="awards-box">
                            <!--icon-->
                            <div class="awards-box-icon">
                                <i class="fab fa-windows"></i>
                            </div>
                            <!--skill-box-text-->
                            <div class="awards-box-text">
                                <strong><?php echo $ms?></strong>
                                <p><?php echo "MTA: Database Fundamentals - 2019 Certified"?></p>
                            </div>
                        </div>
                    <!--awards-box python language competition-->
                    <div class="awards-box">
                            <!--icon-->
                            <div class="awards-box-icon">
                                <i class="fab fa-python"></i>
                            </div>
                            <!--skill-box-text-->
                            <div class="awards-box-text">
                                <strong><?php echo "Python Language Competition (3rd Place)"?></strong>
                                <p><?php echo $feu." - 2019"?></p>
                            </div>
                        </div>
                    <!--awards-box best thesis defender-->
                    <div class="awards-box">
                            <!--icon-->
                            <div class="awards-box-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <!--skill-box-text-->
                            <div class="awards-box-text">
                                <strong><?php echo "Best Thesis Defender"?></strong>
                                <p><?php echo "Child Jesus of Prague School - 2018"?></p>
                            </div>
                        </div>
                    <!--awards-box excellence achievement awardee-->
                    <div class="awards-box">
                            <!--icon-->
                            <div class="awards-box-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <!--skill-box-text-->
                            <div class="awards-box-text">
                                <strong><?php echo "Excellence Achievement Awardee"?></strong>
                                <p><?php echo "Dulles High School - 2017"?></p>
                            </div>
                        </div>
                    <!--btn-->
                    <div class="awards-box-button">  
                        <a href="#" class="awards-btn"><?php echo $btn_txt?></a>
                    </div>  
                </div>
            </div>    
        </section>
        <!--contact-->
        <section id="contact">
            <!--image-->
            <img src="assets/contact.png">
            <!--heading-->
            <h3><?php echo "If you have any inquiries, let me know!"?></h3>
            <!--input-->
            <div class="contact-input">
                <input type="email" placeholder="example@gmail.com"/>
                <a href="#"><?php echo "Continue"?></a>
            </div>
            <!--social media-->
            <div class="social-menu">
                <ul>
                    <li><a href="https://www.facebook.com/mcv717/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/clarissawissa17/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/clarissav1707" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.snapchat.com/add/clarissa1707" target="_blank"><i class="fa fa-snapchat-ghost"></i></a></li>
                    <li><a href="https://catalight.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                </ul>
            </div>
        </section>
        <!--footer-->
        <footer>
            <p><?php echo $full_name ?></p>
            <p><?php echo $cp ?></p>
        </footer>
    </body>
</html>