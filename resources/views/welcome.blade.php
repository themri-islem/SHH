<html>
    <head>
    <title>IHome</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/css/navbar.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    </head>
<style>
     .banniere{
        background-image: url(assets/img/home.jpg);
  } 

</style>


    <body>


    <header>
    <a href="#" class="logo"><span>I</span>HOME</a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    
    @include('navbar')
    @include('butt')
</header>
<section class="banniere" id="banniere">
    
</section>





<section class="apropos" id="apropos">
    <div class="row">
        <div class="col50">
            <h1 class="titre-texte"><span>A</span> bout Us</h1>
            <p><h3>Welcome to IHome!</h3></p>
                <p><h3> We are a passionate team, dedicated to shaping the future of the smart home.
With diverse expertise, we bring together exceptional talents in the areas of software development, hardware engineering,
 data security, design and user experience. </h3></p>
                     <p><h3> Our mission is clear: 
                        to simplify daily life by offering innovative and integrated solutions that
                      transform every home into an intelligent and connected space. 
                      At IHome we stand out
                       through our commitment to constant innovation, exceptional customer service and a personalized approach.
                       Each member of our team shares a common vision: making technology a natural ally of your
                       daily, offering intelligent solutions that adapt to your specific needs. </h3></p>
                       <p><h3> In this exciting adventure towards a smarter and more comfortable home life. At IHome,
                         we transform houses into connected homes, redefining the way you live,
                       interact and enjoy your space.
                </h3></p>
            </p>
        </div>
        <div class="col50">
            <div class="img">
                <img src="assets/img/image2.jpg" alt="image">
            </div>
        </div>
    </div>
</section>
<section class="menu" id="menu">
    <div class="titre">
        <h2 class="titre-texte"><span>E</span>quipement</h2>
        <p>Our equipment embody the very essence of modernity and innovation,
            offering a complete range of technological solutions for the smart home.</p>
            <p> From sophisticated lighting and security systems to smart thermostats and locks,
                each piece of equipment is designed to enhance your
            daily by combining comfort, efficiency and control at the cutting edge of technology </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="assets/img/eq1.jpg" alt="">
            </div>
            <div class="text">
                <h3>Home Automation Hub</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/e2.jpg" alt="">
            </div>
            <div class="text">
                <h3>Smart Lighting</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="assets/img/eq3.jpg" alt="">
            </div>
            <div class="text">
                <h3>Smart Thermostats</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="assets/img/eq4.jpg" alt="">
            </div>
            <div class="text">
                <h3>Surveillance cameras</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="assets/img/eq5.jpg" alt="">
            </div>
            <div class="text">
                <h3>Smart Locks</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="assets/img/eq6.jpg" alt="">
            </div>
            <div class="text">
                <h3>Special salade</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="assets/img/eq7.jpg" alt="">
            </div>
            <div class="text">
                <h3>Smart Smoke and Carbon Monoxide Detectors</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="assets/img/eq8.jpg" alt="">
            </div>
            <div class="text">
                <h3>Irrigation Controllers</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="assets/img/eq9.jpg" alt="">
            </div>
            <div class="text">
                <h3>Smart Speakers and Audio Systems</h3>
            </div>
        </div>
    </div>

 </div>
 <div class="titre">
    <a href="#" class="btn1">Voir Plus</a>
 </div>
</section>









 <section class="temoignage" id="temoignage">
    <div class="titre blanc">
        <h2 class="titre-texte">What do our people say? <span>C</span>lients</h2>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="assets/img/h2.jpg" alt="">
            </div>
            <div class="text">
                <p>
                “I am impressed by the innovative technology of IHome.
                Controlling my home has never been easier, and the customer support team is exceptional."
                </p>  
                <h3>Aida Trabelsi</h3>
                <h3>Monastir</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="assets/img/h1.jpg" alt="">
            </div>
            <div class="text">
                <p>
                "Thanks to IHome, my home has become a truly smart place. The ease of use and
            of the customization features exceeded my expectations."
                </p>
                <h3> Kamel Harbaoui</h3>
                <h3> Tunis </h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="assets/img/h3.jpg" alt="">
            </div>
            <div class="text">
                <p>
                "The smart home was once a distant dream, but thanks to IHome,
                it has become my daily reality.
                The products and services offered are simply revolutionary."
                <h3>Ritej Harbaoui </h3>
                <h3>Djerba </h3>
            </div>
        </div>
    </div>
 </section>



 <section class="expert" id="expert">
    <div class="titre">
        <h2 class="titre-texte">Our <span>V</span>ideo</h2>
        <p> Explore our latest video showcasing our dedicated work in the field of smart homes. </p>
            <p>Immerse yourself in the captivating world of our innovative solutions, designed to transform every household into a smart,
                 secure, and connected space. 
                 Delve into our team's expertise and ingenuity through this immersive video that illustrates our commitment to the
                  future of smart homes.</p>
    </div>
</section>



 <section class="contact" id="contact">
     <div class="titre noir">
         <h2 class="titre-text"><span>C</span>ontact</h2>
         <p>“At IHome, we value your experience. </p>
            <p>Please let us know your concerns and suggestions by sending us your complaints.
             Your feedback is essential.</p>
            <p> To help us constantly improve our products and services to better meet your needs.</p>
     </div>
     <div class="contactform">
         <h3>Send a message</h3>
         <div class="inputboite">
             <input type="text" placeholder="your name">
         </div>
         <div class="inputboite">
            <input type="text" placeholder="your email">
         </div>
         <div class="inputboite">
            <textarea placeholder="Your complaint message"></textarea>
         </div>
         <div class="inputboite">
             <input type="submit" value="send">
         </div>
     </div>
 </section>



 


 <div class="copyright">
     <p>copyright <a href="#">IHome</a> All rights reserved </p>
 </div>
 <script type="text/javascript">
window.addEventListener('scroll', function(){
         const header =document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0 );
     });
     function toggleMenu(){
         const tmenuToggle = document.querySelector('.menuToggle');
         const navbar = document.querySelector('.navbar');
         navbar.classList.toggle('active');
         menuToggle.classList.toggle('active');
     }
 </script>
    </body>
</html>