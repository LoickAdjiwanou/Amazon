<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <title>AMAZON</title>
    <link rel="stylesheet" href="css.css">
</head>

<main class="ma">
    <header>
        <p class="haut">
            <a href=""><img src="amazonb.png" width="50px" height="50px" class="ama"/></a>
            <p class="dtb">Deliver to<br/><img src="location.png" width="20px" height="20px"/><font size="4px"><b>Benin</b></font></p>
            <form method="" action="" class="rec">
               <input type="submit" class="a" name="menu" value="All"/>
                <input  type="search" class="b" placeholder="Rechercher un article" name="article"/>
                <a href="" class="rec2"><img src="recherche.png" width="20px" height="20px" class="loupe"/></a>
            </form>
            <p class="acl2">Hello, Sign in<br/><a href="" class="acl"><font size="4px"><b>Account & Lists</b></font></a></p>
            <p class="acl3">Returns<br/><font size="4px"><b>& <a href="" class="ord">Orders</a></b></font>
            <a href=""><img src="achat.png" width="40px" height="40px" class="achat"/></a></p>
        </p>
        <p class="haut2">
            <img src="menu.png" width="25px" height="25px" class="menu"/>
            <ul class="lien">
                <a href="" class="lien1">All</a>
                <a href="" class="lien2">Today'Deals</a>
                <a href="" class="lien2">Customer Services</a>
                <a href="" class="lien2">Gift Cards</a>
                <a href="" class="lien2">Registry</a>
                <a href="" class="lien2">Sell</a>
                <a href="" class="lien3">Amazon's reponse to Covid 19</a>
            </ul>
        </p>
    </header>
    <?php
        //session_start();
        echo '<strong><font size=6px>Résultats pour <<'.$_SESSION['art'].'>></font></strong>';
    ?>
    <body>
        <center>
            <br/><br/>
        </center>
        <div class="page">
            <div class="case1">
                <p class="t1">Amazon Basics</p><img src="pcaccess.jpg" width="270px" height="270px"/><br/><br/><a href="" class="s1">See more</a>
            </div>
            <div class="case2">
                <p class="t2">Get fit at home</p><img src="yoga.jpg" width="270px" height="270px"/><br/><br/><a href="" class="s2">Explore now</a>
            </div>
            <div class="case3">
                <p class="sbc1">Shop by </p><p class="sbc2">Category</p>
                <div class="case31">
                    <br class="t3"/><a href="" class="i3"><img src="gaming.jpg" width="105px" height="105px"/></a><br/>Computers &<br/>Accessories
                </div>
                <div class="case32">
                    <br class="t4"/><a href="" class="i4"><img src="ps5.jpg" width="105px" height="105px"/></a><br/>Video Games<br/>
                </div>
                <div class="case33">
                    <br class="t5"/><a href="" class="i5"><img src="baby.jpg" width="105px" height="105px"/></a><br/>Baby
                </div>
                <div class="case34">
                    <br class="t6"/><a href="" class="i6"><img src="jeu.jpg" width="105px" height="105px"/></a><br/>Toys & Games<br/><br/>
                </div>
                <a href="" class="s3456">Shop now</a>
            </div>
            <div class="esp1"><br/><br/></div>
            <div class="case4">
                <p class="t7">Oculus</p><img src="casquevr.jpg" width="270px" height="270px"/><br/><br/><a href="" class="s7">Shop now</a>
            </div>
            <div class="case5">
                <p class="t8">Computers & Accessories</p><img src="ecran.jpg" width="270px" height="270px"/><br/><br/><a href="" class="s8">Shop now</a>
            </div>
            <div class="case6">
                <img src="boites.jpg" width="270px" height="270px"/><div class="s9"><p class="sign2">Sign in for the best<br/>experience</p><br/><center><a href="sign_in_secur.php" class="sign">Sign in securely</a></center></div><br/><br/>
            </div>
            <div class="esp2"><br/><br/></div>
            <div class="case7">
                <p class="sbc3">Shop by </p><p class="sbc4">Category</p>
                <div class="case71">
                    <br class="t10"/><a href="" class="i10"><img src="casques.jpg" width="130px" height="105px"/></a><br/>Headsets
                </div>
                <div class="case72">
                    <br class="t11"/><a href="" class="i11"><img src="clavier.jpg" width="130px" height="105px"/></a><br/>Keyboards<br/>
                </div>
                <div class="case73"> 
                    <br class="t12"/><a href="" class="i12"><img src="souris.jpg" width="130px" height="105px"/></a><br/>Computer mice
                </div>
                <div class="case74">
                    <br class="t13"/><a href="" class="i13"><img src="chair.jpg" width="130px" height="105px"/></a><br/>Chairs<br/><br/>
                </div>
                <a href="" class="s10111213">See more</a>
            </div>
            <div class="case8">
                <p class="t14">Find your ideal TV</p><img src="tele.jpg" width="270px" height="270px"/><br/><br/><br/><a href="" class="s14">See more</a>
            </div>
            <div class="case9">
                <p class="t15">Easy returns</p><img src="bricolage.jpg" width="270px" height="270px"/><br/><a href="" class="s15"><br/><br/><a href="" class="s15">Learn more</a>
            </div>
            <div class="esp3"><br/><br/></div>
            <div class="case10">
                <p class="sbc5">Comfy styles </p><p class="sbc6">for her</p>
                <div class="case101">
                    <br class="t16"/><a href="" class="i16"><img src="pulls.jpg" width="120px" height="120px"/></a><br/>Sweetshirts
                </div>
                <div class="case102">
                    <br class="t17"/><a href="" class="i17"><img src="panta.jpg" width="120px" height="120px"/></a><br/>Joggers<br/>
                </div>
                <div class="case103">
                    <br class="t18"/><a href="" class="i18"><img src="teeshs.jpg" width="120px" height="120px"/></a><br/>Cardigans
                </div>
                <div class="case104">
                    <br class="t19"/><a href="" class="i19"><img src="teehs2.jpg" width="120px" height="120px"/></a><br/>Easy tees<br/><br/>
                </div>
                <a href="" class="s16171819">See more</a>
            </div>
            <div class="case11">
                <p class="t20">Shop Laptops & Tablets</p><img src="table.jpg" width="270px" height="270px"/><br/><br/><br/><a href="" class="s20">See more</a>
            </div>
            <div class="case12">
                <p class="t21">Explore home bedding</p><img src="lit.jpg" width="270px" height="270px"/><br/><br/><br/><a href="" class="s21">See more</a>
            </div>
        </div>
        <br/><br/><br/><br/><br/><br/>
            <center class="mails">     
                    <p>See personalized recommendations</p>
                    <div>
                        <center>
                            <a href="sign_in_secur.php" class="signin">Sign in</a>
                        </center>
                    </div>
                    <br/>
                    New customer ? <a href="start_new.php" class="newc">Start here.</a>
            </center>
    </body>

    <footer>
        <br/><br/>
        <center class="btt"><a href="" class="btt2">Back to top</a></center>
        <div class="menubas">
            <ul class="lienguk1">
                <p class="lienguk11">Get us know</p>
                <a href="" class="liengukp">Careers</a><br/><br/>
                <a href="" class="liengukp">Blog</a><br/><br/>
                <a href="" class="liengukp">About Amazon</a><br/><br/>
                <a href="" class="liengukp">Investors Relations</a><br/><br/>
                <a href="" class="liengukp">Amazon Devices</a><br/><br/>
            </ul>
            <ul class="lienguk2">
                <p class="lienguk22">Make money with us</p>
                <a href="" class="liengukp">Sell products on Amazon</a><br/><br/>
                <a href="" class="liengukp">Sell on Amazon Business</a><br/><br/>
                <a href="" class="liengukp">Sell apps on Amazon</a><br/><br/>
                <a href="" class="liengukp">Become an Affiliate</a><br/><br/>
                <a href="" class="liengukp">Advertise Your Products</a><br/><br/>
                <a href="" class="liengukp">Self-Publish with Us</a><br/><br/>
                <a href="" class="liengukp">Host an Amazon Hub</a><br/><br/>
                <a href="" class="liengukp"><font size="2px">See More Make Money</font><br/>With Us</a><br/><br/>
            </ul>
            <ul class="lienguk3">
                <p class="lienguk33">Amazon Payment Products</p>
                <a href="" class="liengukp">Amazon Business Card</a><br/><br/>
                <a href="" class="liengukp">Shop with Points</a><br/><br/>
                <a href="" class="liengukp">Reload Your Balance</a><br/><br/>
                <a href="" class="liengukp">Amazon Currency Convertor</a><br/><br/>
                <a href="" class="liengukp">Advertise Your Products</a><br/><br/>
            </ul>
            <ul class="lienguk4">
                <p class="lienguk44">Let Us Help You</p>
                <a href="" class="liengukp">Amazon and COVID-<br/>19</a><br/><br/>
                <a href="" class="liengukp">Your Account</a><br/><br/>
                <a href="" class="liengukp">Your Orders</a><br/><br/>
                <a href="" class="liengukp">Shipping Rates & <br/>Policies</a><br/><br/>
                <a href="" class="liengukp">Returns & <br/>Replacements</a><br/><br/>
                <a href="" class="liengukp">Manage Your<br/>Content and Devices</a><br/><br/>
                <a href="" class="liengukp">Amazon Assistant</a><br/><br/>
                <a href="" class="liengukp">Help</a><br/><br/>
            </ul>
        </div>
        <hr class="trait"/>
        <div class="ligneopts">
            <a href=""><img src="amazon.png" width="140px" height="60px" class="part1"/></a>
            <select name="langue" class="part2">
                <option value="">English</option>
                <option value="">French</option>
                <option value="">Deutch</option>
                <option value="">Spanish</option>
                <option value="">Portuguese</option>
                <option value="">Chinese</option>
                <option value="">Japenese</option>
            </select>
            <select name="monnaie" class="part3">
                <option value="">$ USD - US Dollar</option>
                <option value="">€ EUR - UE Euro</option>
                <option value="">¥ YN - JP Yen</option>
            </select>
            <select name="pays" class="part4">
                <option value="">United States</option>
                <option value="">France</option>
                <option value="">Germany</option>
                <option value="">Spain</option>
                <option value="">Portugual</option>
                <option value="">China</option>
                <option value="">Japan</option>
            </select>
        </div>
        <div class="tit">
            <a href="" class="ti">
                <p class="tita">Amazon Music</p>
                Stream millions<br/>of songs
            </a>
            <a href="" class="ti">
                <p class="tita">Amazon Advertising</p>
                Find, attract, and<br/>engage<br/>customers
            </a>
            <a href="" class="ti">
                <p class="tita">Amazon Drive</p>
                Cloud storage<br/>from Amazon
            </a>
            <a href="" class="ti">
                <p class="tita">6pm</p>
                Score deals<br/>on fashion<br/>brands
            </a>
            <a href="" class="ti">
                <p class="tita">AbeBooks</p>
                Books, art<br/>& collectibles
            </a>
            <a href="" class="ti">
                <p class="tita">ACX</p>
                Audiobook<br/>Publishing<br/>Made Easy
            </a>
            <a href="" class="ti">
                <p class="tita">Alexa</p>
                Actionnable Analytics<br/>for the Web
            </a>
            <a href="" class="ti">
                <p class="tita">Sell on<br/>Amazon</p>
                Start a Selling<br/>Account
            </a>
            <a href="" class="ti">
                <p class="tita">Amazon<br/>Business</p>
                Everithing For<br/>Your Business
            </a>
            <a href="" class="ti">
                <p class="tita">AmazonGlobal</p>
                Ship Orders<br/>Internationally
            </a>
            <a href="" class="ti">
                <p class="tita">Home Services</p>
                Experienced<br/>Pros<br/>Happiness<br/>Guarantee
            </a>
            <a href="" class="ti">
                <p class="tita">Amazon Ignite</p>
                Sell your original<br/>Digital, Educational<br/>Ressources
            </a>
            <a href="" class="ti">
                <p class="tita">Amazon Web<br/>Services</p>
                Scalable Cloud<br/>Computing<br/>Services
            </a>
            <a href="" class="ti">
                <p class="tita">Audible</p>
                Listen to Books & Original<br/>Audio Performances
            </a>
            <a href="" class="ti">
                <p class="tita">Book<br/>Depository</p>
                Books With Free<br/>Delivery<br/>Worldwide
            </a>
            <a href="" class="ti">
                <p class="tita">Box Office Mojo</p>
                Find Movie<br/>Box Office Beta
            </a>
            <a href="" class="ti">
                <p class="tita">ComiXologiy</p>
                Thousand of<br/>Digital Comics
            </a>
            <a href="" class="ti">
                <p class="tita">DPReview</p>
                Digital<br/>Photography
            </a>
            <a href="" class="ti">
                <p class="tita">East Dame</p>
                Designer Men's<br/>Fashion
            </a>
            <a href="" class="ti">
                <p class="tita">Fabric</p>
                Sewing, Quiting<br/>& Knitting
            </a>
            <a href="" class="ti">
                <p class="tita">Goodreads</p>
                Book review<br/>& recommandations
            </a>
            <a href="" class="ti">
                <p class="tita">IMDb</p>
                Movies, TV<br/>& Celebrities
            </a>
            <a href="" class="ti">
                <p class="tita">IMDbPro</p>
                Get Info<br/>Entertainment<br/>Professionals<br/>Need
            </a>
            <a href="" class="ti">
                <p class="tita">Kindle Direct<br/>Publishing</p>
                Indle Digital & Print<br/>Publishing<br/>Made Easy
            </a>
            <a href="" class="ti">
                <p class="tita">Prime Video<br/>Direct</p>
                Video<br/>Distribution<br/>Made Easy
            </a>
            <a href="" class="ti">
                <p class="tita">Shopbop</p>
                Designer<br/>Fashion Brands
            </a>
            <a href="" class="ti">
                <p class="tita">Woot!</p>
                Deals and<br/>Shenaningans
            </a>
            <a href="" class="ti">
                <p class="tita">Zappas</p>
                Shoes &<br/>Clothing
            </a>
            <a href="" class="ti">
                <p class="tita">Ring</p>
                Smart Home<br/>Security<br/>Systems
            </a>
            <a href="" class="ti">
                <p class="tita">eero WIFI</p>
                Stream 4K Video<br/>In Every room
            </a>
            <a href="" class="ti">
                <p class="tita">Blink</p>
                Smart Security<br/>for Every Home
            </a>
            <a href="" class="ti">
                <p class="tita">Neighbors<br/>App</p>
                Real time<br/>Crime<br/>& Safety Alerts
            </a>
            <a href="" class="ti">
                <p class="tita">Amazon Subscriptions<br/>Boxes</p>
            </a>
            <a href="" class="ti">
                <p class="tita">PillPack</p>
                Pharmacy<br/>Simplified
            </a>
            <a href="" class="ti">
                <p class="tita">Amazon Second Chance</p>
                Pass it on, trade it in, give<br/>it a second life
            </a>
            <br/><br/>
        </div>
        <center class="fin">
            <a href="" class="finn">Condtions of Use</a>
            <a href="" class="finn">Privacy Notice</a>
            <a href="" class="finn">Interest-Based Ads</a>© 1996-2021, <a href="" class="finm">Amazon.com</a>, Inc. or its affiliates<br/><br/>
        </center>
    </footer>
</main>
</html>