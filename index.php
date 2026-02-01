<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lynn Margarett M. Ocharon | Portfolio</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', sans-serif;
    background: #1f2d16;
    color: #f2f2f2;
}

/* NAVIGATION */
nav {
    position: sticky;
    top: 0;
    background: rgba(0,0,0,0.6);
    backdrop-filter: blur(10px);
    padding: 1rem 5%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 1.5rem;
}

nav a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
}

nav a:hover {
    color: #a8d5a2;
}

/* HERO */
.hero {
    background: url("background.jpg") center/cover fixed;
    min-height: 90vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
}

.hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.6);
}

.hero-content {
    position: relative;
    z-index: 1;
}

.profile-photo {
    width: 180px;
    height: 180px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #fff;
    margin-bottom: 1.5rem;
}

.hero h1 {
    font-size: 3rem;
}

.hero p {
    font-size: 1.2rem;
    opacity: 0.9;
}

/* SECTIONS */
section {
    padding: 4rem 5%;
}

/* INFORMATION */
.info-grid {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.info-box {
    background: rgba(255,255,255,0.08);
    padding: 2rem;
    border-radius: 15px;
    text-align: center;
    transition: 0.3s;
}

.info-box:hover {
    transform: translateY(-5px);
    background: rgba(255,255,255,0.15);
}

.info-icon {
    width: 50px;
    height: 50px;
    object-fit: contain;
    margin-bottom: 1rem;
    border-radius: 8px;
}

/* ABOUT */
.about-wrapper {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    align-items: center;
}

.about-text h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.about-text p {
    font-size: 1.1rem;
    line-height: 1.8;
}

.about-photos {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
}

.about-photos img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    border-radius: 12px;
}

/* EDUCATION */
/* EDUCATION */
.education-grid {
    max-width: 1000px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
    column-gap: 3rem;
}

.education-item {
    background: rgba(255,255,255,0.08);
    padding: 2rem 2.5rem;
    border-left: 5px solid #8bcf88;
    border-radius: 10px;
    font-size: 1.1rem;
    transition: 0.3s;
}

.education-item:hover {
    background: rgba(255,255,255,0.15);
    transform: translateX(10px);
}

.education-item strong {
    display: block;
    font-size: 1.3rem;
    margin-bottom: 0.5rem;
    color: #a8d5a2;
}

.education-item p {
    font-size: 1rem;
    opacity: 0.9;
    margin: 0;
}

.edu-icon {
    width: 50px;
    height: 50px;
    object-fit: contain;
    margin-bottom: 0.8rem;
    border-radius: 8px;
}

/* INTERESTS */
.interest-grid {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
}

.interest-card {
    background: rgba(255,255,255,0.08);
    padding: 2rem;
    border-radius: 15px;
    text-align: center;
}

.interest-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
    margin-top: 1rem;
}

/* FOOTER */
footer {
    text-align: center;
    padding: 2rem;
    background: rgba(0,0,0,0.6);
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .about-wrapper {
        grid-template-columns: 1fr;
    }
    
    .education-grid {
        grid-template-columns: 1fr;
    }
}
</style>
</head>

<body>

<nav>
    <h3>Personal Profile</h3>
    <ul>
        <li><a href="#info">Info</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#education">Education</a></li>
        <li><a href="#interests">Interests</a></li>
    </ul>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <img src="profile.jpg" class="profile-photo">
        <h1>Lynn Margarett M. Ocharon</h1>
        <p>BSIT Student | Technology Enthusiast</p>
    </div>
</section>

<!-- INFO -->
<section id="info">
    <div class="info-grid">
        <div class="info-box">
            <img src="course.jpg" class="info-icon" alt="Course">
            <h3>Course</h3>
            <p>BSIT</p>
        </div>
        <div class="info-box">
            <img src="ustp.jpg" class="info-icon" alt="School">
            <h3>School</h3>
            <p>USTP</p>
        </div>
        <div class="info-box">
            <img src="section.jpg" class="info-icon" alt="Section">
            <h3>Section</h3>
            <p>IT3R11</p>
        </div>
        <div class="info-box">
            <img src="age.jpg" class="info-icon" alt="Age">
            <h3>Age</h3>
            <p>21</p>
        </div>
        <div class="info-box">
            <img src="contact.jpg" class="info-icon" alt="Contact">
            <h3>Contact</h3>
            <p>09565218332</p>
        </div>
        <div class="info-box">
            <img src="email.jpg" class="info-icon" alt="Email">
            <h3>Email</h3>
            <p>ocharon.lynnmargarett@gmail.com</p>
        </div>
        <div class="info-box">
            <img src="facebook.jpg" class="info-icon" alt="Facebook">
            <h3>Facebook</h3>
            <p>Marga Metillo Ocharon</p>
        </div>
        <div class="info-box">
            <img src="hobbies.jpg" class="info-icon" alt="Hobbies">
            <h3>Hobbies</h3>
            <p>Nature & K-Dramas</p>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about">
    <div class="about-wrapper">
        <div class="about-text">
            <h2>About Me</h2>
            <p>
                I am a motivated student who is passionate about learning technology
                and improving my programming skills. Currently pursuing my Bachelor's
                degree in Information Technology at USTP.
            </p>
        </div>
        <div class="about-photos">
            <img src="about1.jpg">
            <img src="about2.jpg">
            <img src="about3.jpg">
            <img src="about4.jpg">
        </div>
    </div>
</section>

<!-- EDUCATION -->
<section id="education">
    <h2 style="text-align:center; margin-bottom:2rem;">Education Background</h2>
    <div class="education-grid">
        <div class="education-item">
            <img src="bayacabac.jpg" class="edu-icon" alt="Nursery">
            <strong>Nursery</strong>
            <p>Bayacabac, Maribojoc, Bohol</p>
        </div>
        <div class="education-item">
            <img src="bonbon.jpg" class="edu-icon" alt="Preschool">
            <strong>Preschool</strong>
            <p>Bonbon, CDO</p>
        </div>
        <div class="education-item">
            <img src="bonbon.jpg" class="edu-icon" alt="Elementary">
            <strong>Grade 1–5</strong>
            <p>Bonbon Elementary School</p>
        </div>
        <div class="education-item">
            <img src="bayacabac.jpg" class="edu-icon" alt="Elementary">
            <strong>Grade 6</strong>
            <p>Bayacabac Elementary School</p>
        </div>
        <div class="education-item">
            <img src="dcpnhs.jpg" class="edu-icon" alt="High School">
            <strong>High School</strong>
            <p>Dr. Cecilio Putong NHS</p>
        </div>
        <div class="education-item">
            <img src="dcpnhs.jpg" class="edu-icon" alt="Senior High">
            <strong>Senior High</strong>
            <p>Dr. Cecilio Putong NHS</p>
        </div>
        <div class="education-item">
            <img src="ustp.jpg" class="edu-icon" alt="College">
            <strong>College</strong>
            <p>USTP (1st–3rd Year)</p>
        </div>
    </div>
</section>

<!-- INTERESTS -->
<section id="interests">
    <h2 style="text-align:center; margin-bottom:2rem;">Interests & Passions</h2>
    <div class="interest-grid">
        <div class="interest-card">
            <h3>Technology</h3>
            <p>Still learning, still evolving.</p>
            <img src="technology.jpg">
        </div>
        <div class="interest-card">
            <h3>Nature</h3>
            <p>Nature is where my heart feels alive.</p>
            <img src="nature.jpg">
        </div>
        <div class="interest-card">
            <h3>K-Dramas</h3>
            <p>My comfort zone is a warm blanket and a K-drama.</p>
            <img src="kdrama.jpg">
        </div>
    </div>
</section>

<footer>
    <p>© 2026 Lynn Margarett M. Ocharon</p>
</footer>

</body>
</html>
