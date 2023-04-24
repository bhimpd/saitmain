<!-- started above nav bar contents -->
<div class="container-fluid text-center" id="topnav">
    <div class="row">
        <div class="col">
            Mail: <a href="mailto:info@sait.com.np" style="text-decoration: none;color:white;" onmouseover="this.style.color='grey';" onmouseout="this.style.backgroundColor='transparent';this.style.color='white';">info@sait.com.np</a>
        </div>

        <div class="col">
            Mobile No. <a href="tel: +9779801067391" style="text-decoration: none;color:white;" onmouseover="this.style.color='grey';" onmouseout="this.style.backgroundColor='transparent';this.style.color='white';"> (977) 9801067391 </a> <a href="tel: +9779802835022" style="text-decoration: none;color:white;" onmouseover="this.style.color='grey';" onmouseout="this.style.backgroundColor='transparent';this.style.color='white';"><span> 9802835022</span></a>
        </div>

        <div class="col">
            <a href="https://esupport.sait.com.np/open.php" target="_blank" style="text-decoration: none;color:white;" onmouseover="this.style.color='grey';" onmouseout="this.style.backgroundColor='transparent';this.style.color='white';">
                OPEN A SUPPORT TICKET
            </a>
        </div>

    </div>
</div>
<div class="social-icons">
    <a href="https://www.facebook.com/saitsolutionpokhara" target="_blank" class="me-3"><i class="fab fa-facebook-f"></i></a>
    <a href="https://twitter.com/saitsolution" target="_blank" class="me-3"><i class="fab fa-twitter"></i></a>
    <a href="https://www.instagram.com/saitsolutionpokhara/" target="_blank" class="me-3"><i class="fab fa-linkedin-in"></i></a>
    <a href="https://www.linkedin.com/company/saitsolution" target="_blank" class="me-3"><i class="fab fa-instagram"></i></a>
    <a href="https://api.whatsapp.com/send/?phone=9779801067391&text&type=phone_number&app_absent=0" target="_blank" class="me-3"><i class="fab fa-whatsapp"></i></a>
    <a href="https://t.me/saitsolutionandtrade" target="_blank" class="me-3"><i class="fab fa-telegram"></i></a>
</div>
<!-- ended above navbar contents -->



<!-- starting navbar -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid" id="main-nav">
        <a class="navbar-brand" href="home.php">
            <img src="images/logos/saitlogo.jpg" style="height: 70px; width:70px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"   id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>

                <li class="nav-item dropdown" id="servicedown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu text-center">
                        <li><a class="dropdown-item" href="network.php">Networking</a></li>
                        <li><a class="dropdown-item" href="photography.php">Photography</a></li>
                        <li><a class="dropdown-item" href="tech.php">Tech Support</a></li>
                        <li><a class="dropdown-item" href="itinfra.php">IT Infrastructure</a></li>
                        <li><a class="dropdown-item" href="cctv.php">Survelliance System</a></li>
                        <li><a class="dropdown-item" href="digital.php">Digital Marketting</a></li>
                        <li><a class="dropdown-item" href="web.php">Web Development</a></li>
                        <li><a class="dropdown-item" href="domain.php">Web & Domain Hosting</a></li>
                        <li><a class="dropdown-item" href="software.php">Software Development</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="store.php">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!-- ends navbar -->




<!-- to change the color of the active nav-link class to yellow -->
<script>
// get all nav links
const navLinks = document.querySelectorAll('.nav-link');
let activeLink = null; // variable to store currently active link

// loop through nav links and add event listener
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        // remove active class from previously active link
        if (activeLink) {
            activeLink.classList.remove('active');
            activeLink.style.color = ''; // reset background color
        }
        // add active class to clicked link with red background color
        link.classList.add('active');
        link.style.color = '#FFC93C';
        activeLink = link; // store currently active link
        // save active link index and background color to browser storage
        localStorage.setItem('activeLinkIndex', Array.from(navLinks).indexOf(link));
        localStorage.setItem('activeLinkBgcolor', '#FFC93C');
    });
});

// set initial active link and background color from browser storage or default to first link
if (navLinks.length > 0) {
    let activeLinkIndex = localStorage.getItem('activeLinkIndex');
    let activeLinkBgcolor = localStorage.getItem('activeLinkBgcolor');
    if (activeLinkIndex !== null && activeLinkBgcolor !== null) {
        activeLink = navLinks[activeLinkIndex];
        activeLink.classList.add('active');
        activeLink.style.color = activeLinkBgcolor;
    } else {
        navLinks[0].classList.add('active');
        navLinks[0].style.color = '#FFC93C';
        activeLink = navLinks[0];
    }
}


</script>

