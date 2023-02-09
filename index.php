<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LandScapers</title>
    <script src="./assets/js/logic.js"></script>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/first_page.css">
</head>
<body class="body-index">
    <header>
        <a href="#" class="logo"></a>
        <ul>
            <li><button id="btn_top" class="log-in" onclick="window.location.href='./session/login-index.php'">Log In</button></li>
            <li><button id="btn_top" class="register" onclick="window.location.href='./session/register.php'">SignUp</button></li>
            <li> <button id="toggle-mode-btn" class="register">Go dark</button></li>
        </ul>      
    </header>

    <section>
        <img alt="part1" id="top" class="light-mode">
        <img alt="part1" id="top2" class="light-mode">
        <h2 id="text"></h2>
        <img src="/assets/css/parte_medio.webp" alt="part1" id="midle" class="light-mode">
        <img  alt="part1" id="sun" class="light-mode initial">
        <a href="#sec" id="btn">Explore</a>
        <img alt="part1" id="bottom" class="light-mode">
    </section>

    <div class="sec index-text" id="sec">
        <div class="container py-3">
        <h2 class="text-center index-title">Hello mountain lover!</h2>
            <div class="justify-content-end">
                <p>Welcome to Landscapers, a space designed for mountain lovers, where you can find different routes of hiking, cycling and trail running.</p>
                <p>This blog is created by four young lovers of sport, mountains and nature, whose passion has brought us together since we were children, growing up loving every corner of the paths that we were discovering.</p>
                <p>As more we walked on the mountain, as more we climbed it, it didn't matter if it was in hot months or in cold months, we liked more the sensations we experienced. So, one afternoon the idea of sharing these places that stole our hearts with others arose.</p>
                <p>On this page we want to give the opportunity to share routes and trails with details to follow them and in this way also create a community.</p><br>
                <p>Glad you're here and see you on the mountain!</p>
            </div>
        </div>
        
    </div>


    <script>
        const clouds = document.getElementById('top');
        const underClouds = document.getElementById('top2');
        const sun = document.getElementById('sun');
        const montains = document.getElementById('midle');
        const trees = document.getElementById('bottom');
        const text = document.getElementById('text');
        const button = document.getElementById('btn');

        window.addEventListener('scroll', function(){
            let value = window.scrollY;
            clouds.style.left = value * 0.5 + 'px';
            sun.style.top = value * 1.05 + 'px';
            montains.style.top = value * + 0 + 'px';
            // trees.style.top = value * - 0.15 + 'px';
            text.style.marginRight =value * 4 + 'px';
            button.style.marginTop =value * 1.5 + 'px';

        })
        

const toggleBtn = document.getElementById('toggle-mode-btn');
const darkBackground = document.getElementById('top2');
const body = document.body;

function cambiarImagen() {
  clouds.classList.toggle('active');
  underClouds.classList.toggle('active');
}


toggleBtn.addEventListener('click', function() {
  if (body.classList.contains('light-mode')) {
    setTimeout(()=>{
    sun.classList.remove('light-mode');
    sun.classList.add('dark-mode');
},1000)

    setTimeout(() => {     
    
    body.classList.remove('light-mode');
    body.classList.add('dark-mode');
    clouds.classList.remove('light-mode');
    clouds.classList.add('dark-mode');
    montains.classList.remove('light-mode');
    montains.classList.add('dark-mode');
    trees.classList.remove('light-mode');
    trees.classList.add('dark-mode');

    darkBackground.classList.remove('light-mode');
    darkBackground.classList.add('dark-mode');
    clouds.style.opacity = "1";
    darkBackground.style.opacity = "1";

},1000);
  } else {
    setTimeout(() => { 
    sun.classList.remove('dark-mode');
    sun.classList.add('light-mode');
}, 1000)

  setTimeout(() => {
    body.classList.remove('dark-mode');
    body.classList.add('light-mode');
    clouds.classList.remove('dark-mode');
    clouds.classList.add('light-mode');
    montains.classList.remove('dark-mode');
    montains.classList.add('light-mode');
    trees.classList.remove('dark-mode');
    trees.classList.add('light-mode');

    darkBackground.classList.remove('dark-mode');
    darkBackground.classList.add('light-mode');
    clouds.style.opacity = "1";
    darkBackground.style.opacity = "0";
  }, 1000)
}


sun.classList.add('reverse');

setTimeout(function() {
    sun.classList.remove('reverse');
}, 0.1);
});



    </script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>

    <footer class="footer">
        <p>LandScapers © 2023 @ <a href="https://assemblerinstitute.com/?utm_medium=paidsearch&utm_source=google.com&utm_campaign=branding&gclid=CjwKCAiArY2fBhB9EiwAWqHK6sAVZAJi6gNirAygoFPY8NRJJLR-JgCdfZu7ZBZdUynIqii66lt4ahoCo5MQAvD_BwE">Assembler Institute of Technology</a></p>
    </footer>
</body>
</html>
