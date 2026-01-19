<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lynn Margarett M. Ocharon - Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #c5edc8;
            color: #2d5a2f;
            overflow-x: hidden;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 100;
            animation: slideDown 0.5s ease;
        }

        @keyframes slideDown {
            from { transform: translateY(-100px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: -1px;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: #2d5a2f;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            position: relative;
        }

        .nav-links a:hover {
            transform: translateY(-2px);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #5a9e5f;
            transition: width 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .hero {
            text-align: center;
            padding: 6rem 5% 4rem;
            animation: fadeInUp 0.8s ease;
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            min-height: 600px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            z-index: 0;
        }

        .hero > * {
            position: relative;
            z-index: 1;
        }

        @keyframes fadeInUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .profile-photo {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            margin: 0 auto 2rem;
            border: 5px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 5rem;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #fff, #f0f0f0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.2;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .role {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            opacity: 0.95;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .subtitle {
            font-size: 1.2rem;
            margin-bottom: 3rem;
            opacity: 0.95;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .cta-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }

        .btn {
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: #fff;
            color: #667eea;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            border: 2px solid rgba(255, 255, 255, 0.5);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
        }

        .info-section {
            background: rgba(0, 0, 0, 0.2);
            padding: 3rem 5%;
        }

        .info-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .info-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s;
        }

        .info-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
        }

        .info-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
            display: block;
        }

        .info-card h3 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            opacity: 0.8;
        }

        .info-card p {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .about-section {
            padding: 4rem 5%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-section h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .about-content {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 2.5rem;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 1.2rem;
            line-height: 1.8;
            text-align: center;
        }

        .education-section {
            background: rgba(0, 0, 0, 0.2);
            padding: 4rem 5%;
        }

        .education-section h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .education-timeline {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            column-gap: 3rem;
        }

        .education-item {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            padding: 2rem 2.5rem;
            margin-bottom: 0;
            border-radius: 15px;
            border-left: 4px solid #5a9e5f;
            transition: all 0.3s;
            animation: fadeIn 0.8s ease forwards;
            opacity: 0;
            font-size: 1.1rem;
        }

        .education-item strong {
            display: block;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: #2d5a2f;
}

        .education-item:nth-child(1) { animation-delay: 0.1s; }
        .education-item:nth-child(2) { animation-delay: 0.2s; }
        .education-item:nth-child(3) { animation-delay: 0.3s; }
        .education-item:nth-child(4) { animation-delay: 0.4s; }
        .education-item:nth-child(5) { animation-delay: 0.5s; }
        .education-item:nth-child(6) { animation-delay: 0.6s; }
        .education-item:nth-child(7) { animation-delay: 0.7s; }

        @keyframes fadeIn {
            to { opacity: 1; }
        }

        .education-item:hover {
            transform: translateX(10px);
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 4rem 5%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .features h2 {
            grid-column: 1 / -1;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 1rem;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 2.5rem;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s;
            text-align: center;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            background: rgba(255, 255, 255, 0.15);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            display: block;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .feature-card p {
            opacity: 0.9;
            line-height: 1.6;
        }

        footer {
            text-align: center;
            padding: 3rem 5%;
            background: rgba(0, 0, 0, 0.2);
            margin-top: 4rem;
        }

        footer p {
            opacity: 0.7;
        }

        @media (max-width: 768px) {
            .education-timeline{
                grid-template-columns: 1fr;
            }

            .nav-links {
                gap: 1rem;
                font-size: 0.9rem;
            }

            .info-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">Personal Profile</div>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#info">Info</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#interests">Interests</a></li>
        </ul>
    </nav>

    <section class="hero">
        <img src="profile.jpg" alt="Lynn Ocharon" class="profile-photo" style="object-fit: cover;">
        <h1>Lynn Margarett M. Ocharon</h1>
        <p class="role">IT Student | Technology Enthusiast</p>
        <p class="subtitle">A motivated student passionate about learning technology and improving programming skills</p>
        <div class="cta-buttons">
            <a href="mailto:ocharon.lynnmargarett@gmail.com" class="btn btn-primary">Get in Touch</a>
            <a href="#education" class="btn btn-secondary">View Education</a>
        </div>
    </section>

    <section class="info-section" id="info">
        <div class="info-container">
            <div class="info-card">
                <span class="info-icon">🎓</span>
                <h3>Course</h3>
                <p>Bachelor of Science in Information Technology (BSIT)</p>
            </div>
            <div class="info-card">
                <span class="info-icon">🏫</span>
                <h3>School</h3>
                <p>University of Science and Technology of Southern Philippines (USTP)</p>
            </div>
            <div class="info-card">
                <span class="info-icon">📚</span>
                <h3>Section</h3>
                <p>IT3R11</p>
            </div>
            <div class="info-card">
                <span class="info-icon">🎂</span>
                <h3>Age</h3>
                <p>21 years old</p>
            </div>
            <div class="info-card">
                <span class="info-icon">📱</span>
                <h3>Contact</h3>
                <p>09565218332</p>
            </div>
            <div class="info-card">
                <span class="info-icon">✉️</span>
                <h3>Email</h3>
                <p>ocharon.lynnmargarett@gmail.com</p>
            </div>
            <div class="info-card">
                <span class="info-icon">💬</span>
                <h3>Facebook</h3>
                <p>Marga Metillo Ocharon</p>
            </div>
            <div class="info-card">
                <span class="info-icon">🎨</span>
                <h3>Hobbies</h3>
                <p>Nature & Watching Kdrama's</p>
            </div>
        </div>
    </section>

    <section class="about-section" id="about">
        <h2>About Me</h2>
        <div class="about-content">
            I am a motivated student who is passionate about learning technology and improving my programming skills. Currently pursuing my Bachelor's degree in Information Technology at USTP, I'm dedicated to expanding my knowledge and staying up-to-date with the latest technological advancements.
        </div>
    </section>

    <section class="education-section" id="education">
        <h2>Education Background</h2>
        <div class="education-timeline">
            <div class="education-item">
                <strong>🌱 Nursery</strong><br>
                Bayacabac, Maribojoc, Bohol
            </div>
            <div class="education-item">
                <strong>📖 Preschool</strong><br>
                Bonbon, Cagayan De Oro City
            </div>
            <div class="education-item">
                <strong>📚 Grade 1 - 5</strong><br>
                Bonbon Elementary School CDO
            </div>
            <div class="education-item">
                <strong>📚 Grade 6</strong><br>
                Bayacabac Elementary School Bohol
            </div>
            <div class="education-item">
                <strong>🏫 High School</strong><br>
                Dr. Cecilio Putong National High School
            </div>
            <div class="education-item">
                <strong>🎓 Senior High</strong><br>
                Dr. Cecilio Putong National High School
            </div>
            <div class="education-item">
                <strong>🎓 College (1st - 3rd year)</strong><br>
                University of Science and Technology of Southern Philippines
            </div>
        </div>
    </section>

    <section class="features" id="interests">
        <h2>Interests & Passions</h2>
        <div class="feature-card">
            <span class="feature-icon">💻</span>
            <h3>Technology</h3>
            <p>Still learning, still evolving.</p>
        </div>
        <div class="feature-card">
            <span class="feature-icon">🌿</span>
            <h3>Nature</h3>
            <p>Nature is where my heart feels alive.</p>
        </div>
        <div class="feature-card">
            <span class="feature-icon">📺</span>
            <h3>K-Dramas</h3>
            <p>My comfort zone is a warm blanket and a K-drama.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 Lynn Margarett M. Ocharon. All rights reserved.</p>
    </footer>
</body>
</html>