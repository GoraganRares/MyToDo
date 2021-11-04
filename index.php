<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require_once "design/dependecies.php"; ?>
</head>
<body>
<?php require_once "design/nav.php";?>
<!-- Navbar & Header -->
<nav id="navbar-scroll" class="navigation padding-all">
    <div class="nav-container">
        <a href="#header" class="nav-logo">
            <img class="logo" src="static/content/Horizontal-Color.svg">
        </a>
        <ul class="nav-list">
            <div class="flex nav not-nav">
                <li class="nav-item dropdown">
                    <button onclick="myFunction()" class="dropbtn nav-link">Comenzi</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="analiza-discord.html">dIn asteptare</a>
                        <a href="incepatori.html">Comenzi noi</a>
                        <a href="intermediar.html">Comenzi terminate</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button onclick="myFunction()" class="dropbtn nav-link">Mesaje</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="analiza-discord.html">
                            <img src="/static/content/tjmiles.webp" alt="picture-logo">
                            <div class="message-bog flex row">
                                <h5 class="username">username21</h5>
                                <span>abia aștept să colaborăm...</span>
                                <span class="hours-ago">Acum 69 de zile</span>
                            </div>
                        </a>
                        <a href="incepatori.html">Comenzi noi</a>
                        <a href="intermediar.html">Comenzi terminate</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href='#about' class="nav-link">Prestează servicii</a>
                </li>
                <li class="nav-item">
                    <a href='#services' class="nav-link">Promovează-te</a>
                </li>
                <li class="nav-item">
                    <a href='#portofolio' class="nav-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a href='#contact' class="nav-link button">Login/sign up</a>
                </li>
            </div> 
        </ul>
        <div class="hamburger hamburger--spin fixed">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </div>
</nav>   
<header id="header" class="header padding-all flex column section-block">
    <div class="header-div">
        <h1 class="margin20 title">Cea mai potrivită platformă de servicii</h1>
        <p class="margin40">Starting from your idea, a drawing, a sketch, a photo and with the material you desire,
            we are able to produce any type of parts or products for home, garden, office or any other industry.
            From simple to complex automations, no challenge is big enough for us.
        </p>
        <div class="box-header flex row margin80">
            <form class="search-box flex1" action="#">
                <button class="flex1 button-search" type="submit"><i class="fa fa-search"></i></button>
                <input class="input-button flex1" type="text" placeholder="caută serviciul de care ai nevoie" name="search">
                <ul class="flex1">
                    <li class="dropdown-v2 ">
                        <button onclick="myFunction()" class="dropbtn-v2 nav-link">unde ai nevoie de ajutor?</button>
                        <div id="myDropdown-v2" class="dropdown-content-v2">
                            <a href="analiza-discord.html">In asteptare</a>
                            <a href="incepatori.html">Comenzi noi</a>
                            <a href="intermediar.html">Comenzi terminate</a>
                        </div>
                    </li>
                </ul>
                <button class="search-button flex1">caută</button>
            </form>
            <button class="searh"><i class="fa fa-map-marker" aria-hidden="true"></i></button>
        </div>
        <div class="popular-header-container flex row">
            <span>Popular:</span>
            <a href="#" class="button">curățenie</a>
            <a href="#" class="button">plimbat caini</a>
            <a href="#" class="button">reparații mobilă</a>
        </div>
        
        <span class="city-span">București|2021</span>
    </div>
</header>
<section class="categorii padding-all not-fullscreen">
    <div class="categori-container">
        <div class="categori-title flex">
            <h2 class="title">Categorii comune</h2>
            <a href='#' class="title-link">Vezi toate categoriile</a>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="item-prop item-pexels1">
                    <h2 class="service-title">Plimbat câine</h2>
                </div>
            </div>
            <div class="item">
                <div class="item-prop item-pexels2">
                    <h2 class="service-title">Reparații hardware</h2>
                </div>
            </div>
            <div class="item">
                <div class="item-prop item-pexels3">
                    <h2 class="service-title">Bonă</h2>
                </div>
            </div>
            <div class="item">
                <div class="item-prop item-pexels4">
                    <h2 class="service-title">Spălare geamuri</h2>
                </div>
            </div>
            <div class="item">
                <h4>5</h4>
            </div>
            <div class="item">
                <h4>6</h4>
            </div>
            <div class="item">
                <h4>7</h4>
            </div>
            <div class="item">
                <h4>8</h4>
            </div>
            <div class="item">
                <h4>9</h4>
            </div>
        </div>
    </div>
</section>

<section class="functionality flex padding-all not-fullscreen">
    <h2 class="title">Cum funcționează?</h2>
    <div class="bubbles"></div>
</section>

<section class="benefits flex row padding-all not-fullscreen">
    <div class="left-container flex column">
        <h2 class="title">Beneficiile MyToDo</h2>
        <div class="container-check flex row"> 
            <div class="flex column">
                <div class="flex row check-box">
                    <i class="fa fa-check blue-color" aria-hidden="true"></i>
                    <p class="black-color">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="flex row check-box">
                    <i class="fa fa-check blue-color" aria-hidden="true"></i>
                    <p class="black-color">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="flex row check-box">
                    <i class="fa fa-check blue-color" aria-hidden="true"></i>
                    <p class="black-color">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="flex row check-box">
                    <i class="fa fa-check blue-color" aria-hidden="true"></i>
                    <p class="black-color">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="flex row check-box">
                    <i class="fa fa-check blue-color" aria-hidden="true"></i>
                    <p class="black-color">Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="flex column">
                <div class="flex row check-box">
                    <i class="fa fa-check blue-color" aria-hidden="true"></i>
                    <p class="black-color">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="flex row check-box">
                    <i class="fa fa-check blue-color" aria-hidden="true"></i>
                    <p class="black-color">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="flex row check-box">
                    <i class="fa fa-check blue-color" aria-hidden="true"></i>
                    <p class="black-color">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="flex row check-box">
                    <i class="fa fa-check blue-color" aria-hidden="true"></i>
                    <p class="black-color">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="flex row check-box">
                    <i class="fa fa-check blue-color" aria-hidden="true"></i>
                    <p class="black-color">Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
    </div>
    <div class="right-container">
        <div class="bk-blue"></div>
        <img src="./static/content/sugardady.webp" class="sugardady" alt=""/>
    </div>
</section>

<section class="benefits todoerul-lunii flex row padding-all not-fullscreen">
    <div class="left-container flex column">
        <h2 class="title hide">To do-erul lunii septembrie</h2>
        <div class="container-check flex column"> 
            <p class="black-color margin40 max-width500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et imperdiet quam. Morbi scelerisque nec dolor sed sollicitudin. Quisque sit amet magna et lorem luctus iaculis vel vitae lacus. Sed ultricies egestas velit, scelerisque suscipit erat consequat quis. Proin elementum, ipsum a tincidunt elementum, ex tortor luctus urna, ac aliquam arcu justo a quam. Sed facilisis nibh in varius fringilla. Nulla scelerisque odio eu nisl ultrices, eu dignissim urna mattis. In non nisi suscipit, consequat orci in, facilisis odio. Praesent rhoncus, turpis ut fringilla blandit, ante ante cursus sapien, vitae blandit nisi tortor at lorem.</p>
            <div class="flex column">
                <div class="flex row check-box">
                    <i class="fa fa-check blue-color" aria-hidden="true"></i>
                    <p class="black-color blue-color">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="flex row check-box">
                    <i class="fa fa-check blue-color" aria-hidden="true"></i>
                    <p class="black-color">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="flex row check-box">
                    <i class="fa fa-check blue-color" aria-hidden="true"></i>
                    <p class="black-color">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="flex row check-box">
                    <i class="fa fa-check blue-color" aria-hidden="true"></i>
                    <p class="black-color">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="flex row check-box">
                    <i class="fa fa-check blue-color" aria-hidden="true"></i>
                    <p class="black-color">Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
    </div>
    <div class="right-container">
        <div class="item-card">
            <div class="item-card-img img-tri">
            </div>
            <div class="item-card-text">
                <h2>Alina Ionescu</h2>
                <div class="item-card-stars">
                    <div class="flex">
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                       <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <h6>(55 reviews)</h6>
                </div>
            </div>
            <div class="item-promovat">
                <h5>13-18 lei/oră</h5>
            </div>
        </div>
    </div>
    <h2 class="title hided">To do-erul lunii septembrie</h2>
</section>

<section class="todoeri padding-all section-block">
    <div class="todoeri-container">
       <div class="todoeri-container-text">
           <h2 class="title">To do-eri promovați</h2>
       </div>
       <div class="owl-carousel owl-theme">
         <div class="item">
             <div class="item-card">
                 <div class="item-card-img img-tri">
                     <div class="item-text">
                         <h6>PROMOVAT</h6>
                     </div>
                 </div>
                 <div class="item-card-text">
                     <h2>Ana Paraschiv</h2>
                     <div class="item-card-stars">
                         <div class="flex">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                         </div>
                         <h6>(32 reviews)</h6>
                     </div>
                     <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                     <div class="services">
                         <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                         <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                         <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                     </div>
                 </div>
                 <div class="item-promovat">
                     <h5>13-18 lei/oră</h5>
                 </div>
             </div>
         </div>
         <!-- Baietasu cu sculele -->
         <div class="item">
             <div class="item-card">
                 <div class="item-card-img img-one">
                     <div class="item-text">
                         <h6>PROMOVAT</h6>
                     </div>
                 </div>
                 <div class="item-card-text">
                     <h2>Bogdan Rădulescu</h2>
                     <div class="item-card-stars">
                         <div class="flex">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                         </div>
                         <h6>(32 reviews)</h6>
                     </div>
                     <h5 class="location"><i class="fas fa-map-marker-alt"></i> Târgoviște</h5>
                     <div class="services">
                         <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Reparații calculatoare</h4>
                         <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Instalare windows</h4>
                         <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Reparații TV</h4>
                     </div>
                 </div>
                 <div class="item-promovat">
                     <h5>21-60 lei/oră</h5>
                 </div>
             </div>
         </div>
         <!-- Bulangiu de ala -->
         <div class="item">
             <div class="item-card">
                 <div class="item-card-img img-two">
                     <div class="item-text">
                         <h6>PROMOVAT</h6>
                     </div>
                 </div>
                 <div class="item-card-text">
                     <h2>Alex Filip</h2>
                     <div class="item-card-stars">
                         <div class="flex">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                         </div>
                         <h6>(32 reviews)</h6>
                     </div>
                     <h5 class="location"><i class="fas fa-map-marker-alt"></i> Constanța</h5>
                     <div class="services">
                         <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                     </div>
                 </div>
                 <div class="item-promovat">
                     <h5>13-18 lei/oră</h5>
                 </div>
             </div>
         </div>
         <!-- Unghii Costel si Maria -->
         <div class="item">
             <div class="item-card">
                 <div class="item-card-img img-three">
                     <div class="item-text">
                         <h6>PROMOVAT</h6>
                     </div>
                 </div>
                 <div class="item-card-text">
                     <h2>Alexandra Pantic</h2>
                     <div class="item-card-stars">
                         <div class="flex">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                         </div>
                         <h6>(32 reviews)</h6>
                     </div>
                     <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                     <div class="services">
                         <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                         <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Servicii beauty</h4>
                     </div>
                 </div>
                 <div class="item-promovat">
                     <h5>30-41 lei/oră</h5>
                 </div>
             </div>
         </div>
     </div>
    </div>
</section>

<section class="testimoniale todoerul-lunii flex row padding-all not-fullscreen">
    <div class="left-container flex column">
        <h2 class="title">Testimoniale</h2>
        <div class="left-profil flex column">
            <div class="box-profil flex row">
                <img class="profile-image" src="static/content/tjmiles.webp" alt="profile picture"/>
                <span class="name-text blue-color">Victor Prodan</span>
            </div>
            <div class="box-profil flex row">
                <img class="profile-image" src="static/content/tjmiles.webp" alt="profile picture"/>
                <span class="name-text blue-color">Victor Prodan</span>
            </div>
            <div class="box-profil flex row">
                <img class="profile-image" src="static/content/tjmiles.webp" alt="profile picture"/>
                <span class="name-text blue-color">Victor Prodan</span>
            </div>
        </div>
    </div>
    <div class="right-container flex column">
        <h2 class="blue-color">Lorem Lipsum</h2>
        <div class="flex">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
         </div>
         <p class="black-color margin40">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et imperdiet quam. Morbi scelerisque nec dolor sed sollicitudin. Quisque sit amet magna et lorem luctus iaculis vel vitae lacus. Sed ultricies egestas velit, scelerisque suscipit erat consequat quis. Proin elementum, ipsum a tincidunt elementum, ex tortor luctus urna, ac aliquam arcu justo a quam. Sed facilisis nibh in varius fringilla. Nulla scelerisque odio eu nisl ultrices,</p>
         <p class="black-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et imperdiet quam. Morbi scelerisque nec dolor sed sollicitudin. Quisque sit amet magna et lorem luctus iaculis vel vitae lacus. Sed ultricies egestas velit, scelerisque suscipit erat consequat quis. Proin elementum, ipsum a tincidunt elementum, ex tortor luctus urna, ac aliquam arcu justo a quam. Sed facilisis nibh in varius fringilla. Nulla scelerisque odio eu nisl ultrices,</p>
    </div>
</section>
<section class="noutati padding-all not-fullscreen">
    <div class="noutati-container">
        <div class="noutati-container-text">
            <h2 class="title">Noutăți</h2>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <!-- Aici baa -->
                <div class="noutati-card noutati-one">
                    <div class="noutati-text">
                        <h2 class="noutati-title">Titlu articol</h2>
                        <p class="noutati-pargraph">Lorem ipsum dolor sit amet adipiscing elit. 
                        Fusce et imperdiet quam. Morbi scelerisque nec dolor sed sollicitudin. Quisque sit 
                        amet magna et lorem luctus</p>
                        <a href="#" class="noutati-link">citește mai mult</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- Aici baa -->
                <div class="noutati-card noutati-two">
                    <div class="noutati-text">
                        <h2 class="noutati-title">Titlu articol</h2>
                        <p class="noutati-pargraph">Lorem ipsum dolor sit amet adipiscing elit. 
                        Fusce et imperdiet quam. Morbi scelerisque nec dolor sed sollicitudin. Quisque sit 
                        amet magna et lorem luctus</p>
                        <a href="#" class="noutati-link">citește mai mult</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- Aici baa -->
                <div class="noutati-card noutati-three">
                    <div class="noutati-text">
                        <h2 class="noutati-title">Titlu articol</h2>
                        <p class="noutati-pargraph">Lorem ipsum dolor sit amet adipiscing elit. 
                        Fusce et imperdiet quam. Morbi scelerisque nec dolor sed sollicitudin. Quisque sit 
                        amet magna et lorem luctus</p>
                        <a href="#" class="noutati-link">citește mai mult</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once "design/footer.php";?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        700:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:false
        },
        1500:{
            items:4,
            nav:false
        }
    }
})
</script> 
</body>
</html>