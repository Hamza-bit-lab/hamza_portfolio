<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Landing Page</title>
    <style>
        :root {
            --primary: #00CED1;
            --secondary: #1a1f2c;
            --accent: #FFC107;
            --highlight: #7FFFD4;
            --bg: #0d1117;
            --bg-alt: #161b22;
            --section-bg: #1a1f2c;
            --section-bg-alt: #21283b;
            --section-bg-alt2: #283046;
            --text: #e6edf3;
            --heading: #ffffff;
            --nav-bg: #1a1f2c;
            --nav-shadow: 0 2px 16px rgba(0, 206, 209, 0.15);
        }
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
        }
        html {
            scroll-behavior: smooth;
        }
        .navbar {
            position: absolute;
            top: 2.5rem;
            left: 50%;
            transform: translateX(-50%);
            width: auto;
            min-width: 340px;
            max-width: 90vw;
            background: var(--nav-bg);
            box-shadow: var(--nav-shadow);
            border-radius: 2.5rem;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 2.5rem;
            margin: 0 auto;
            border: 2px solid var(--primary);
            font-family: 'Fira Mono', 'Consolas', monospace;
            letter-spacing: 0.5px;
            background: linear-gradient(90deg, #18344a 0%, #264653 100%);
            position: fixed;
            top: 2.5rem;
            left: 50%;
            transform: translateX(-50%);
            box-shadow: 0 4px 32px #00CED133, 0 1.5px 0 #7FFFD4;
        }
        .navbar .logo {
            display: none;
        }
        .navbar ul {
            list-style: none;
            display: flex;
            gap: 2.2rem;
            margin: 0;
            padding: 0;
        }
        .navbar ul li a {
            text-decoration: none;
            color: var(--heading);
            font-size: 1.08rem;
            font-weight: 500;
            position: relative;
            transition: color 0.2s, background 0.2s;
            padding: 0.3rem 0.7rem 0.3rem 2.1rem;
            border-radius: 1.2rem;
            display: flex;
            align-items: center;
            font-family: 'Fira Mono', 'Consolas', monospace;
        }
        .navbar ul li a .nav-icon {
            position: absolute;
            left: 0.7rem;
            font-size: 1.1em;
            color: var(--primary);
            opacity: 0.8;
            transition: color 0.2s;
        }
        .navbar ul li a::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s;
            position: absolute;
            left: 0;
            bottom: -4px;
        }
        .navbar ul li a:hover,
        .navbar ul li a.active {
            color: var(--accent);
            background: #00CED122;
            font-weight: 700;
        }
        .navbar ul li a:hover .nav-icon,
        .navbar ul li a.active .nav-icon {
            color: var(--accent);
        }
        .navbar ul li a:hover::after,
        .navbar ul li a.active::after {
            width: 100%;
        }
        .navbar::before, .navbar::after {
            content: '<nav>';
            color: var(--highlight);
            font-size: 0.95rem;
            position: absolute;
            left: 1.2rem;
            top: -1.5rem;
            opacity: 0.7;
            font-family: 'Fira Mono', 'Consolas', monospace;
        }
        .navbar::after {
            content: '</nav>';
            left: unset;
            right: 1.2rem;
            top: unset;
            bottom: -1.5rem;
        }
        .navbar-toggle {
            display: none;
        }
        @media (max-width: 900px) {
            .navbar {
                padding: 0.5rem 1.2rem;
            }
            .navbar ul {
                gap: 1.2rem;
            }
        }
        @media (max-width: 700px) {
            .navbar {
                min-width: 0;
                max-width: 98vw;
                padding: 0.5rem 0.5rem;
            }
            .navbar ul {
                gap: 0.5rem;
            }
        }
        .hero {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            text-align: center;
            background: linear-gradient(120deg, #18344a 0%, #264653 100%);
            position: relative;
            overflow: hidden;
            padding-top: 8.5rem;
            padding-bottom: 3.5rem;
        }
        @media (max-width: 700px) {
            .hero {
                padding-top: 7rem;
                padding-bottom: 2rem;
            }
        }
        .stars {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            pointer-events: none;
            z-index: 1;
        }
        .star {
            position: absolute;
            width: 2px; height: 2px;
            background: var(--primary);
            border-radius: 50%;
            opacity: 0.7;
            transition: transform 0.2s linear;
        }
        .hero-profile {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary) 60%, var(--accent) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            box-shadow: 0 2px 16px #00CED122;
            margin: 0 auto 1.5rem auto;
        }
        .hero-profile img {
            width: 92%;
            height: 92%;
            object-fit: cover;
            border-radius: 50%;
        }
        .hero-intro {
            color: #fff;
            text-shadow: 0 2px 12px #0007;
            font-size: 1.15rem;
            max-width: 500px;
            margin: 0 auto 2rem auto;
            line-height: 1.6;
            margin-bottom: 2.2rem;
        }
        .hero-intro span {
            color: var(--highlight);
            font-weight: 700;
            text-shadow: 0 2px 8px #0005;
        }
        .hero-socials {
            display: flex;
            gap: 1.2rem;
            justify-content: center;
            margin-bottom: 2.2rem;
            margin-top: 1.2rem;
        }
        .hero-socials a {
            color: var(--primary);
            font-size: 1.7rem;
            background: var(--section-bg-alt);
            border-radius: 50%;
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px #26465322;
            transition: background 0.2s, color 0.2s, transform 0.2s;
        }
        .hero-socials a:hover {
            background: var(--accent);
            color: #fff;
            transform: translateY(-3px) scale(1.08);
        }
        .hero h1 {
            color: var(--accent);
            text-shadow: 0 2px 16px #0008, 0 1px 0 #fff1;
            font-size: 3.2rem;
            font-weight: 900;
            margin-top: 0.2rem;
            margin-bottom: 1.2rem;
            letter-spacing: 2px;
            animation: fadeInDown 1s cubic-bezier(.77,0,.18,1) 0.2s both;
        }
        .hero .animated-text {
            font-size: 1.5rem;
            color: var(--accent);
            margin-bottom: 2rem;
            min-height: 2.2em;
            animation: fadeIn 1.2s cubic-bezier(.77,0,.18,1) 0.8s both;
        }
        .hero .cta-btn {
            padding: 0.9em 2.2em;
            font-size: 1.1rem;
            border: none;
            border-radius: 30px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 4px 24px #FFC10722;
            transition: background 0.2s, color 0.2s, transform 0.2s;
            animation: fadeInUp 1s cubic-bezier(.77,0,.18,1) 1.2s both;
        }
        .hero .cta-btn:hover {
            background-position: 100% 0;
            background: var(--accent);
            color: var(--secondary);
            transform: translateY(-3px) scale(1.04);
        }
        /* Animated background circles */
        .circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.10;
            z-index: 0;
            animation: float 8s ease-in-out infinite;
        }
        .circle1 {
            width: 320px; height: 320px;
            background: var(--primary);
            left: -120px; top: -80px;
            animation-delay: 0s;
        }
        .circle2 {
            width: 180px; height: 180px;
            background: var(--accent);
            right: -60px; top: 120px;
            animation-delay: 2s;
        }
        .circle3 {
            width: 120px; height: 120px;
            background: var(--primary);
            left: 40px; bottom: -60px;
            animation-delay: 4s;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-30px) scale(1.08); }
        }
        @keyframes fadeInDown {
            0% { opacity: 0; transform: translateY(-40px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(40px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        section {
            padding: 64px 0 64px 0;
        }
     
        .section-alt {
            background: var(--section-bg-alt);
        }
        h2 {
            color: var(--primary);
            font-size: 2rem;
            margin-bottom: 1.2rem;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .about-content {
            display: flex;
            flex-wrap: wrap;
            gap: 2.5rem;
            align-items: center;
        }
        .about-img {
            flex: 0 0 160px;
            width: 160px;
            height: 160px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary) 60%, var(--accent) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            box-shadow: 0 2px 16px #00CED122;
        }
        .about-img img {
            width: 90%;
            height: 90%;
            object-fit: cover;
            border-radius: 50%;
        }
        .about-text {
            flex: 1 1 300px;
            color: var(--heading);
            font-size: 1.15rem;
        }
        .projects-list {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
        }
        .project-card {
            background: var(--section-bg);
            border-radius: 1rem;
            box-shadow: 0 2px 16px rgba(0, 206, 209, 0.1);
            padding: 1.5rem 1.2rem;
            width: 270px;
            transition: transform 0.2s, box-shadow 0.2s;
            border: 1.5px solid var(--primary);
        }
        .project-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 32px #D7992222;
            border-color: var(--primary);
        }
        .project-title {
            color: var(--primary);
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .project-desc {
            color: var(--text);
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        .project-tags {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }
        .project-tag {
            background: var(--primary);
            color: #fff;
            font-size: 0.85rem;
            border-radius: 0.7rem;
            padding: 0.2rem 0.8rem;
            font-weight: 500;
        }
        .services-list {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
        }
        .service-card {
            background: var(--section-bg);
            border-radius: 1rem;
            box-shadow: 0 2px 16px rgba(0, 206, 209, 0.1);
            padding: 1.5rem 1.2rem;
            width: 250px;
            text-align: center;
            border: 1.5px solid var(--primary);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .service-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 32px #F13C2022;
            border-color: var(--accent);
        }
        .service-icon {
            font-size: 2.5rem;
            color: var(--accent);
            margin-bottom: 0.7rem;
        }
        .service-title {
            color: var(--primary);
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        .service-desc {
            color: var(--text);
            font-size: 1rem;
        }
        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
            max-width: 400px;
            margin: 0 auto;
        }
        .contact-form input,
        .contact-form textarea {
            padding: 0.8rem 1rem;
            border-radius: 0.7rem;
            border: 1.5px solid var(--highlight);
            font-size: 1rem;
            font-family: inherit;
            background: #fff;
            color: var(--text);
            transition: border 0.2s;
        }
        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: var(--primary);
            outline: none;
        }
        .contact-form button {
            padding: 0.8em 2em;
            font-size: 1.1rem;
            border: none;
            border-radius: 30px;
            background: var(--primary);
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 4px 24px #00CED122;
            transition: background 0.2s, transform 0.2s;
        }
        .contact-form button:hover {
            background: var(--accent);
            color: #fff;
            transform: translateY(-3px) scale(1.04);
        }
        .mouse-symbol {
            position: fixed;
            left: 0; top: 0;
            font-size: 1.5rem;
            color: var(--accent);
            pointer-events: none;
            opacity: 0.85;
            z-index: 12;
            transition: filter 0.2s, opacity 0.4s;
            filter: drop-shadow(0 2px 8px #F13C2044);
            user-select: none;
        }
        .mouse-symbol.hidden {
            opacity: 0 !important;
        }
        .scroll-cue {
            position: absolute;
            left: 50%;
            bottom: 2.5rem;
            transform: translateX(-50%);
            z-index: 20;
            display: flex;
            flex-direction: column;
            align-items: center;
            opacity: 0.7;
            animation: bounceDown 2s infinite;
        }
        .scroll-cue svg {
            width: 32px;
            height: 32px;
            fill: var(--primary);
        }
        @keyframes bounceDown {
            0%, 100% { transform: translateX(-50%) translateY(0); }
            50% { transform: translateX(-50%) translateY(12px); }
        }
        /* Card hover 3D tilt and shadow pop */
        .project-card, .service-card {
            transition: box-shadow 0.3s, transform 0.3s, border-color 0.3s;
            will-change: transform;
        }
        .project-card:hover, .service-card:hover {
            box-shadow: 0 12px 32px #00CED144, 0 2px 16px #26465322;
            transform: scale(1.045) rotateZ(-1.5deg) skewY(1deg);
            border-color: var(--primary);
        }
        /* Button hover: animated gradient, scale, shadow */
        .cta-btn, .contact-form button {
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            background-size: 200% 100%;
            transition: background-position 0.4s, transform 0.2s, box-shadow 0.2s;
        }
        .cta-btn:hover, .contact-form button:hover {
            background-position: 100% 0;
            transform: scale(1.07) translateY(-2px);
            box-shadow: 0 8px 32px #F13C2044;
        }
        /* Social icon hover: color pulse and rotate */
        .hero-socials a {
            transition: background 0.2s, color 0.2s, transform 0.2s, box-shadow 0.2s;
        }
        .hero-socials a:hover {
            background: var(--accent);
            color: #fff;
            transform: rotate(-10deg) scale(1.13);
            box-shadow: 0 4px 24px #F13C2044;
        }
        /* Heading animation base */
        h2 {
            opacity: 0;
            transform: translateY(40px) scale(0.98);
        }
        .services-modern {
            padding-top: 2.5rem;
            background: var(--section-bg-alt);
            border-radius: 1.5rem;
        }
        .services-header {
            text-align: center;
            margin-bottom: 2.5rem;
            position: relative;
        }
        .services-header h2 {
            font-size: 2.3rem;
            font-weight: 800;
            color: var(--heading);
            margin-bottom: 0.2rem;
            letter-spacing: 1px;
            background: none;
            opacity: 1;
            transform: none;
        }
        .services-header .accent {
            color: var(--primary);
        }
        .services-header .sec-icon {
            font-size: 2.1rem;
            color: var(--accent);
            margin-top: 0.2rem;
            display: inline-block;
            position: relative;
        }
        .services-header .sec-icon::before,
        .services-header .sec-icon::after {
            content: "";
            position: absolute;
            height: 2px;
            top: 50%;
            background: var(--primary);
            width: 48px;
        }
        .services-header .sec-icon::before {
            left: -60px;
        }
        .services-header .sec-icon::after {
            right: -60px;
        }
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 2.2rem;
            justify-content: center;
        }
        .service-card-modern {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px #26465322;
            padding: 2.2rem 1.5rem 1.7rem 1.5rem;
            text-align: center;
            position: relative;
            transition: box-shadow 0.3s, transform 0.3s, border-color 0.3s;
            will-change: transform;
            border: 2px solid var(--highlight);
        }
        .service-card-modern:hover {
            box-shadow: 0 12px 32px #00CED144, 0 2px 16px #26465322;
            transform: scale(1.055) rotateZ(-1.5deg) skewY(1deg);
            border-color: var(--primary);
        }
        .service-card-modern .icon-wrapper {
            background: linear-gradient(135deg, var(--primary) 60%, var(--accent) 100%);
            color: #fff;
            font-size: 2.1rem;
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.1rem auto;
            box-shadow: 0 2px 12px #00CED122;
            transition: background 0.3s, color 0.3s, transform 0.3s;
        }
        .service-card-modern:hover .icon-wrapper {
            background: linear-gradient(135deg, var(--accent) 60%, var(--primary) 100%);
            color: #fff;
            transform: scale(1.13) rotate(-8deg);
        }
        .service-card-modern h3 {
            color: var(--heading);
            font-size: 1.18rem;
            font-weight: 700;
            margin: 1.1rem 0 0.7rem 0;
            letter-spacing: 0.5px;
        }
        .service-card-modern p {
            color: var(--text);
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 0;
        }
        .hero-bg-coder {
            position: absolute;
            left: 0; top: 0; width: 100%; height: 100%;
            z-index: 0;
            pointer-events: none;
            overflow: hidden;
        }
        .floating-code {
            position: absolute;
            font-size: 2.1rem;
            font-family: 'Fira Mono', 'Consolas', monospace;
            color: var(--primary);
            opacity: 0.13;
            user-select: none;
            pointer-events: none;
            animation: floatCode 8s linear infinite;
        }
        .floating-code.yellow { color: var(--accent); opacity: 0.18; }
        @keyframes floatCode {
            0% { transform: translateY(120vh) scale(1) rotate(-8deg); opacity: 0.13; }
            10% { opacity: 0.22; }
            80% { opacity: 0.22; }
            100% { transform: translateY(-10vh) scale(1.1) rotate(8deg); opacity: 0.13; }
        }
        .hero-svg-illustration {
            position: absolute;
            right: 2vw;
            bottom: 0;
            width: 320px;
            max-width: 38vw;
            z-index: 2;
            opacity: 0.92;
            pointer-events: none;
        }
        @media (max-width: 900px) {
            .hero-svg-illustration { display: none; }
        }
        .hero-terminal {
            background: #222e36;
            color: #fff;
            font-family: 'Fira Mono', 'Consolas', monospace;
            border-radius: 12px;
            box-shadow: 0 4px 24px #26465322;
            padding: 1.1rem 1.5rem;
            margin: 2.2rem auto 0 auto;
            max-width: 420px;
            min-height: 60px;
            text-align: left;
            font-size: 1.1rem;
            position: relative;
            z-index: 3;
            border: 2px solid var(--primary);
            overflow: hidden;
            margin-bottom: 2.2rem;
        }
        .hero-terminal .typed-cursor {
            color: var(--accent);
            font-weight: bold;
            animation: blink 1s steps(2, start) infinite;
        }
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }
        .about-modern {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 2.5rem;
            justify-content: center;
        }
        .about-visual {
            flex: 0 0 220px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .about-svg {
            width: 200px;
            max-width: 38vw;
            border-radius: 1.2rem;
            box-shadow: 0 2px 16px #00CED122;
            background: var(--section-bg-alt);
            padding: 0.7rem;
        }
        .about-main {
            flex: 1 1 320px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
        }
        .about-main h2 {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 1.1rem;
            letter-spacing: 1px;
            background: none;
            opacity: 1;
            transform: none;
            text-align: left;
            width: 100%;
        }
        .about-tag {
            color: var(--highlight);
            font-size: 1.1rem;
            font-family: 'Fira Mono', 'Consolas', monospace;
            opacity: 0.8;
        }
        .about-terminal {
            background: #222e36;
            color: #fff;
            font-family: 'Fira Mono', 'Consolas', monospace;
            border-radius: 10px;
            box-shadow: 0 2px 12px #26465322;
            padding: 1.1rem 1.3rem;
            margin-bottom: 1.2rem;
            font-size: 1.05rem;
            border: 2px solid var(--primary);
            min-width: 260px;
            max-width: 420px;
            width: 100%;
        }
        .about-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.7rem;
            margin-top: 0.2rem;
        }
        .about-skill:hover {
            background: var(--primary);
            color: #fff;
        }
        @media (max-width: 900px) {
            .about-modern { flex-direction: column; align-items: flex-start; }
            .about-main { align-items: flex-start; }
        }
        @media (max-width: 600px) {
            .about-svg { width: 120px; }
            .about-terminal { font-size: 0.95rem; padding: 0.7rem 0.7rem; }
        }
        .about-simple {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            max-width: 600px;
            margin: 0 auto;
            padding: 2.5rem 2rem;
            background: #fff;
            border-radius: 1.2rem;
            box-shadow: 0 6px 32px #00CED122, 0 1.5px 0 #7FFFD4;
            border-left: 6px solid #00CED1;
        }
        .about-simple h2 {
            color: var(--primary);
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 1.1rem;
            letter-spacing: 1px;
            background: none;
            opacity: 1;
            transform: none;
            text-align: left;
            width: 100%;
        }
        .about-simple-text {
            color: var(--text);
            font-size: 1.13rem;
            line-height: 1.8;
            margin: 0;
        }
        .about-animated {
            opacity: 0;
            transform: translateY(40px) scale(0.98);
        }
        /* Removed patterned background */
        .about-modern-card {
            position: relative;
            z-index: 1;
            border-radius: 1.2rem;
            border-left: 6px solid #00CED1;
            box-shadow: 0 8px 32px rgba(0, 206, 209, 0.15);
            background: var(--section-bg);
            overflow: visible;
            backdrop-filter: blur(10px);
        }
        .about-skills-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 0.7rem;
            margin-top: 1.2rem;
            z-index: 2;
            position: relative;
        }
        .about-skill-tech {
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            color: #fff;
            font-family: 'Fira Mono', 'Consolas', monospace;
            font-size: 1rem;
            border-radius: 0.7rem;
            padding: 0.38rem 1.2rem;
            font-weight: 600;
            box-shadow: 0 2px 8px #00CED122;
            border: 1.5px solid var(--primary);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: background 0.2s, color 0.2s, transform 0.2s;
            cursor: pointer;
            animation: skillPop 0.8s cubic-bezier(.77,0,.18,1) backwards;
        }
        .about-skill-tech:hover {
            background: var(--accent);
            color: var(--secondary);
            transform: scale(1.09) rotate(-3deg);
        }
        @keyframes skillPop {
            0% { opacity: 0; transform: scale(0.7) translateY(20px);}
            100% { opacity: 1; transform: scale(1) translateY(0);}
        }
        .about-floating-code {
            position: absolute;
            right: -40px;
            top: 18px;
            background: #0d1117;
            color: #fff;
            font-family: 'Fira Mono', 'Consolas', monospace;
            border-radius: 8px;
            padding: 0.7rem 1.1rem;
            font-size: 0.98rem;
            border: 2px solid var(--primary);
            box-shadow: 0 2px 12px rgba(0, 206, 209, 0.15);
            opacity: 0.92;
            z-index: 3;
            animation: floatCodeBox 6s ease-in-out infinite alternate;
        }
        @keyframes floatCodeBox {
            0% { transform: translateY(0) rotate(-2deg);}
            100% { transform: translateY(18px) rotate(2deg);}
        }
        @media (max-width: 900px) {
            .about-floating-code { display: none; }
        }
        }
        .about-code-header {
            display: flex;
            align-items: center;
            gap: 0.7rem;
            font-family: 'Fira Mono', 'Consolas', monospace;
            font-size: 1.08rem;
            color: var(--primary);
            margin-bottom: 0.7rem;
        }
        .about-code-icon {
            color: var(--accent);
            font-size: 1.2rem;
        }
        .about-code-label {
            color: var(--secondary);
            font-size: 1.02rem;
            opacity: 0.8;
        }
        .about-code-block {
            font-family: 'Fira Mono', 'Consolas', monospace;
            background: #0d1117;
            color: #fff;
            border-radius: 8px;
            padding: 0.8rem 1.2rem;
            margin-bottom: 1.2rem;
            font-size: 1.05rem;
            border: 2px solid var(--primary);
            box-shadow: 0 2px 12px rgba(0, 206, 209, 0.1);
            width: 100%;
            max-width: 420px;
        }
        .about-code-key { color: var(--primary); }
        .about-code-var { color: var(--highlight); }
        .about-code-str { color: var(--accent); }
        .about-modern-card h2 {
            margin-top: 0.2rem;
        }
        .about-modern-card .about-simple-text {
            margin-top: 0.2rem;
        }
        /* Subtle card animation */
        .about-modern-card {
            opacity: 0;
            transform: translateY(40px) scale(0.98) rotateZ(-1deg);
        }
        .about-cols {
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            gap: 2.5rem;
            justify-content: center;
        }
        .about-col {
            flex: 1 1 320px;
            min-width: 280px;
            max-width: 480px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .about-img-modern {
            align-items: center;
            justify-content: center;
            display: flex;
        }
        .about-img-frame {
            position: relative;
            width: 240px;
            height: 240px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 8px 32px #00CED122, 0 1.5px 0 #7FFFD4;
            border: 5px solid #00CED1;
            background: #fff;
            margin: 0 auto;
        }
        .about-img-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            display: block;
            filter: brightness(0.98) contrast(1.08) saturate(1.1);
        }
        .about-img-overlay {
            position: absolute;
            left: 0; top: 0; width: 100%; height: 100%;
            border-radius: 50%;
            background: linear-gradient(135deg, #00CED1cc 0%, #264653cc 100%);
            opacity: 0.18;
            pointer-events: none;
        }
        @media (max-width: 900px) {
            .about-cols { flex-direction: column; align-items: center; }
            .about-col { max-width: 100%; }
            .about-img-frame { width: 180px; height: 180px; }
        }
        @media (max-width: 600px) {
            .about-img-frame { width: 120px; height: 120px; }
        }
        /* Add styles for the new about-code-demo-col and about-code-demo blocks */
        .about-code-demo-col {
            flex: 1 1 320px;
            min-width: 280px;
            max-width: 480px;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            justify-content: center;
            align-items: flex-start;
            position: relative;
        }
        .about-code-demo {
            width: 100%;
            max-width: 420px;
            background: var(--section-bg);
            border-radius: 1.2rem;
            box-shadow: 0 4px 24px rgba(0, 206, 209, 0.10);
            border-left: 6px solid var(--primary);
            padding: 1.2rem 1.5rem 1.2rem 1.5rem;
            margin-bottom: 0.5rem;
            position: relative;
            opacity: 0;
            transform: translateY(40px) scale(0.98) rotateZ(-1deg);
        }
        .about-code-demo {
            display: none;
            opacity: 0;
            transition: opacity 0.3s;
        }
        .about-code-demo.active {
            display: block;
            opacity: 1;
            animation: none;
        }
        .about-code-demo.blinking {
            animation: blinkOut 0.35s linear;
        }
        @keyframes blinkOut {
            0% { opacity: 1; }
            40% { opacity: 0; }
            60% { opacity: 0; }
            100% { opacity: 1; }
        }
        @media (max-width: 900px) {
            .about-cols { flex-direction: column; align-items: center; }
            .about-code-demo-col { max-width: 100%; align-items: center; }
            .about-code-demo { max-width: 100%; }
        }
        /* Add custom spacing for About section */
        .section-title-main {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary);
            letter-spacing: 1px;
            margin-bottom: 2.5rem;
        }
        .about-modern-card, .about-code-demo-col {
            background: var(--section-bg);
            border-radius: 1.2rem;
            box-shadow: 0 8px 32px rgba(0, 206, 209, 0.15);
            padding: 0;
            margin: 0;
            min-height: unset;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        @media (max-width: 900px) {
            .about-modern-card, .about-code-demo-col { padding: 0; min-height: unset; }
        }
        /* Animation for About code demo blocks */
        .about-code-demo {
            opacity: 0;
            transform: translateY(40px) scale(0.98);
            transition: opacity 0.5s cubic-bezier(.77,0,.18,1), transform 0.5s cubic-bezier(.77,0,.18,1);
            position: absolute;
            left: 0; right: 0;
            width: 100%;
            z-index: 1;
            pointer-events: none;
        }
        .about-code-demo.active {
            opacity: 1;
            transform: translateY(0) scale(1);
            position: static;
            z-index: 2;
            pointer-events: auto;
        }
        .about-code-demo.leaving {
            opacity: 0;
            transform: translateY(-60px) scale(0.98);
            z-index: 3;
            pointer-events: none;
            transition: opacity 0.5s cubic-bezier(.77,0,.18,1), transform 0.5s cubic-bezier(.77,0,.18,1);
        }
        .about-code-demo.entering {
            opacity: 0;
            transform: translateY(60px) scale(0.98);
            z-index: 4;
            pointer-events: none;
        }
        #about-code-demo-col {
            min-height: 100%;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .about-modern-card, .about-code-demo-col {
            max-width: 800px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            padding-left: 4rem;
            padding-right: 4rem;
        }
        @media (max-width: 900px) {
            .about-modern-card, .about-code-demo-col {
                max-width: 100%;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }
        /* Contact section modern card styles */
        .contact-modern-card {
            background: linear-gradient(135deg, #1a1f2e 0%, #16213e 100%);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            border: 1px solid rgba(255,255,255,0.08);
            position: relative;
            overflow: hidden;
        }
        .contact-code-header {
            background: #2d3748;
            padding: 0.75rem 1.2rem;
            border-radius: 10px 10px 0 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 1.5rem;
        }
        .contact-form-modern .form-control {
            background: #1a202c;
            color: #fff;
            border: 1.5px solid #4fd1c7;
            border-radius: 8px;
            font-size: 1.05rem;
            padding: 0.8rem 1.1rem;
            margin-bottom: 0.5rem;
            box-shadow: none;
            transition: border 0.2s, box-shadow 0.2s;
        }
        .contact-form-modern .form-control:focus {
            border-color: #635bff;
            box-shadow: 0 0 0 2px #635bff44;
            background: #181c25;
            color: #fff;
        }
        .contact-form-modern label {
            color: #4fd1c7;
            font-weight: 500;
            margin-bottom: 0.3rem;
        }
        .contact-form-modern button[type="submit"] {
            background: linear-gradient(90deg, #4fd1c7 0%, #635bff 100%);
            border: none;
            border-radius: 8px;
            font-weight: 600;
            box-shadow: 0 4px 16px #4fd1c744;
            transition: background 0.2s, box-shadow 0.2s, transform 0.2s;
        }
        .contact-form-modern button[type="submit"]:hover {
            background: linear-gradient(90deg, #635bff 0%, #4fd1c7 100%);
            box-shadow: 0 8px 32px #635bff44;
            transform: translateY(-2px) scale(1.04);
        }
        /* Contact section modern card styles */
        .contact-floating-symbols {
            position: absolute;
            left: 0; top: 0; width: 100%; height: 100%;
            pointer-events: none;
            z-index: 1;
        }
        .contact-symbol {
            position: absolute;
            font-size: 2.2rem;
            color: #4fd1c7;
            opacity: 0.13;
            animation: contactFloat 3s ease-in-out infinite alternate;
            filter: blur(0.5px);
            user-select: none;
            pointer-events: none;
            transition: opacity 0.2s;
        }
        .contact-symbol.float-x {
            animation: contactFloatX 3s ease-in-out infinite alternate;
        }
        @keyframes contactFloat {
            0% { transform: translateY(0) scale(1) rotate(-8deg); }
            50% { transform: translateY(-18px) scale(1.08) rotate(8deg); }
            100% { transform: translateY(0) scale(1) rotate(-8deg); }
        }
        @keyframes contactFloatX {
            0% { transform: translateX(0) scale(1) rotate(-8deg); }
            50% { transform: translateX(18px) scale(1.08) rotate(8deg); }
            100% { transform: translateX(0) scale(1) rotate(-8deg); }
        }
        /* Services section modern card styles */
        .services-modern-card {
            background: linear-gradient(135deg, #1a1f2e 0%, #16213e 100%);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            border: 1px solid rgba(255,255,255,0.08);
            position: relative;
            overflow: hidden;
        }
        .services-code-header {
            background: #2d3748;
            padding: 0.75rem 1.2rem;
            border-radius: 10px 10px 0 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 1.5rem;
        }
        .services-floating-symbols {
            position: absolute;
            left: 0; top: 0; width: 100%; height: 100%;
            pointer-events: none;
            z-index: 1;
        }
        .services-symbol {
            position: absolute;
            font-size: 2.2rem;
            color: #4fd1c7;
            opacity: 0.13;
            animation: contactFloat 3s ease-in-out infinite alternate;
            filter: blur(0.5px);
            user-select: none;
            pointer-events: none;
            transition: opacity 0.2s;
        }
        .services-symbol.float-x {
            animation: contactFloatX 3s ease-in-out infinite alternate;
        }
        /* Modern glassy service card styles */
        .service-card-modern-glass {
            background: rgba(26,31,46,0.82);
            border-radius: 18px;
            box-shadow: 0 8px 32px #4fd1c733, 0 1.5px 0 #635bff44;
            border: 1.5px solid rgba(79,209,199,0.13);
            backdrop-filter: blur(8px);
            transition: box-shadow 0.3s, transform 0.3s, border-color 0.3s;
            will-change: transform;
            margin-bottom: 2rem;
            position: relative;
            z-index: 2;
            padding: 2.5rem 2rem;
        }
        @media (max-width: 900px) {
            .service-card-modern-glass {
                margin-bottom: 1.2rem;
                padding: 1.2rem 0.7rem;
            }
        }
        .service-icon {
            font-size: 2.5rem;
            color: #4fd1c7;
            margin-bottom: 0.7rem;
            transition: color 0.2s, transform 0.2s;
        }
        .service-card-modern-glass:hover .service-icon {
            color: #635bff;
            transform: scale(1.13) rotate(-8deg);
        }
        .service-title {
            color: #fff;
            font-size: 1.18rem;
            font-weight: 700;
            margin: 1.1rem 0 0.7rem 0;
            letter-spacing: 0.5px;
        }
        .service-desc {
            color: #e2e8f0;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 0;
        }
        /* Add vertical gap between service cards */
        .row.g-4 {
            row-gap: 2rem;
        }
        @media (max-width: 900px) {
            .row.g-4 {
                row-gap: 1.2rem;
            }
        }
        /* Modern glassy project card styles */
        .project-card-modern-glass {
            background: rgba(45,55,86,0.93);
            border-radius: 18px;
            box-shadow: 0 8px 32px #4fd1c733, 0 1.5px 0 #635bff44;
            border: 1.5px solid rgba(79,209,199,0.13);
            backdrop-filter: blur(8px);
            transition: box-shadow 0.3s, transform 0.3s, border-color 0.3s;
            will-change: transform;
            margin-bottom: 2rem;
            position: relative;
            z-index: 2;
            padding: 2.5rem 2rem;
            min-height: 520px; /* Ensures all project cards have the same height as the tallest card */
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }
        .project-card-modern-glass:hover {
            box-shadow: 0 16px 48px #635bff44, 0 2px 16px #4fd1c733;
            border-color: #635bff;
            transform: translateY(-6px) scale(1.04) rotateZ(-1.5deg) skewY(1deg);
        }
        .project-icon {
            font-size: 2.5rem;
            color: #4fd1c7;
            margin-bottom: 0.7rem;
            transition: color 0.2s, transform 0.2s;
        }
        .project-card-modern-glass:hover .project-icon {
            color: #635bff;
            transform: scale(1.13) rotate(-8deg);
        }
        .project-title {
            color: #fff;
            font-size: 1.18rem;
            font-weight: 700;
            margin: 1.1rem 0 0.7rem 0;
            letter-spacing: 0.5px;
        }
        .project-desc {
            color: #e2e8f0;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 0;
        }
        .project-tags {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            justify-content: center;
        }
        .project-tag {
            background: #4fd1c7;
            color: #fff;
            font-size: 0.85rem;
            border-radius: 0.7rem;
            padding: 0.2rem 0.8rem;
            font-weight: 500;
            letter-spacing: 0.5px;
        }
        /* Floating symbols for projects */
        .projects-floating-symbols {
            position: absolute;
            left: 0; top: 0; width: 100%; height: 100%;
            pointer-events: none;
            z-index: 1;
        }
        .projects-symbol {
            position: absolute;
            font-size: 2.2rem;
            color: #4fd1c7;
            opacity: 0.13;
            animation: contactFloat 3s ease-in-out infinite alternate;
            filter: blur(0.5px);
            user-select: none;
            pointer-events: none;
            transition: opacity 0.2s;
        }
        .projects-symbol.float-x {
            animation: contactFloatX 3s ease-in-out infinite alternate;
        }
        /* Project card button styles */
        .project-link-btn {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.6rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            color: #fff;
            background: linear-gradient(90deg, #4fd1c7 0%, #635bff 100%);
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 12px #635bff33;
            text-decoration: none;
            transition: background 0.2s, color 0.2s, transform 0.2s;
        }
        .project-link-btn:hover {
            background: linear-gradient(90deg, #635bff 0%, #4fd1c7 100%);
            color: #fff;
            transform: translateY(-2px) scale(1.04);
            box-shadow: 0 6px 24px #4fd1c744;
        }
        /* Project image styles */
        .project-img {
            width: 100%;
            max-width: 320px;
            height: 180px;
            object-fit: cover;
            border-radius: 14px;
            box-shadow: 0 4px 18px #0003;
            margin-bottom: 1.1rem;
            background: #23293a;
            border: 1.5px solid #23293a;
        }
        /* Projects slider styles */
        .projects-slider-container {
            position: relative;
            overflow: hidden;
            width: 100%;
            margin: 0 auto 2.5rem auto;
        }
        .projects-slider-track {
            display: flex;
            transition: transform 0.5s cubic-bezier(.77,0,.18,1);
            will-change: transform;
            gap: 2rem;
            align-items: stretch;
        }
        .project-card-modern-glass {
            min-width: 320px;
            max-width: 370px;
            flex: 0 0 33.3333%;
            height: 520px; /* Force all project cards to have the same height */
            min-height: 520px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }
        .projects-slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            background: linear-gradient(90deg, #4fd1c7 0%, #635bff 100%);
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 56px;
            height: 56px;
            font-size: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 16px #635bff55;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s, opacity 0.2s;
            opacity: 0.96;
            outline: none;
        }
        .projects-slider-btn:disabled {
            opacity: 0.45;
            cursor: not-allowed;
        }
        .projects-slider-btn.prev {
            left: 12px;
        }
        .projects-slider-btn.next {
            right: 12px;
        }
        @media (max-width: 1100px) {
            .project-card-modern-glass {
                min-width: 320px;
                max-width: 90vw;
                flex: 0 0 50%;
            }
            .projects-slider-btn.prev { left: 2px; }
            .projects-slider-btn.next { right: 2px; }
        }
        @media (max-width: 700px) {
            .project-card-modern-glass {
                min-width: 90vw;
                max-width: 98vw;
                flex: 0 0 100%;
            }
            .projects-slider-btn.prev { left: 2px; }
            .projects-slider-btn.next { right: 2px; }
        }
        /* Footer styles */
        .site-footer {
            background: #181c25;
            color: #e2e8f0;
            padding: 2.2rem 0 1.2rem 0;
            border-top: 1.5px solid #23293a;
            font-size: 1.08rem;
        }
        .footer-social-link {
            color: var(--primary);
            margin-left: 0.7rem;
            margin-right: 0.7rem;
            transition: color 0.2s, transform 0.2s;
            text-decoration: none;
        }
        .footer-social-link:hover {
            color: #635bff;
            transform: translateY(-2px) scale(1.13);
        }
        @media (max-width: 700px) {
            .site-footer .container {
                flex-direction: column !important;
                gap: 1.2rem;
                text-align: center;
            }
            .footer-left { margin-bottom: 0.7rem !important; }
        }
        /* Testimonial section styles */
        .testimonial-card-modern-glass {
            background: rgba(45,55,86,0.93);
            border-radius: 18px;
            box-shadow: 0 8px 32px #4fd1c733, 0 1.5px 0 #635bff44;
            border: 1.5px solid rgba(79,209,199,0.13);
            backdrop-filter: blur(8px);
            transition: box-shadow 0.3s, transform 0.3s, border-color 0.3s;
            will-change: transform;
            margin-bottom: 2rem;
            position: relative;
            z-index: 2;
            padding: 2.5rem 2rem;
        }
        .testimonial-card-modern-glass:hover {
            box-shadow: 0 16px 48px #635bff44, 0 2px 16px #4fd1c733;
            border-color: #635bff;
            transform: translateY(-6px) scale(1.04) rotateZ(-1.5deg) skewY(1deg);
        }
        .testimonial-avatar {
            width: 72px;
            height: 72px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 2px 12px #4fd1c744;
            border: 2.5px solid #4fd1c7;
            margin-bottom: 1.1rem;
        }
        .testimonial-name {
            color: #fff;
            font-size: 1.13rem;
            font-weight: 700;
        }
        .testimonial-role {
            color: #7FFFD4;
            font-size: 0.98rem;
            font-weight: 500;
        }
        .testimonial-quote {
            color: #e2e8f0;
            font-size: 1.08rem;
            font-style: italic;
            margin-top: 0.7rem;
            line-height: 1.7;
        }
        .testimonials-floating-symbols {
            position: absolute;
            left: 0; top: 0; width: 100%; height: 100%;
            pointer-events: none;
            z-index: 1;
        }
        .testimonials-symbol {
            position: absolute;
            font-size: 2.2rem;
            color: #4fd1c7;
            opacity: 0.13;
            animation: contactFloat 3s ease-in-out infinite alternate;
            filter: blur(0.5px);
            user-select: none;
            pointer-events: none;
            transition: opacity 0.2s;
        }
        .testimonials-symbol.float-x {
            animation: contactFloatX 3s ease-in-out infinite alternate;
        }
    </style>
    <!-- Font Awesome CDN for service icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>
<body>
    <nav class="navbar">
        <ul id="navbar-menu">
            <li><a href="#home"><span class="nav-icon"><i class="fa-solid fa-house"></i></span>Home</a></li>
            <li><a href="#about"><span class="nav-icon"><i class="fa-solid fa-user"></i></span>About</a></li>
            <li><a href="#projects"><span class="nav-icon"><i class="fa-solid fa-code"></i></span>Projects</a></li>
            <li><a href="#services"><span class="nav-icon"><i class="fa-solid fa-gears"></i></span>Services</a></li>
            <li><a href="#contact"><span class="nav-icon"><i class="fa-solid fa-envelope"></i></span>Contact</a></li>
        </ul>
    </nav>
    <section class="hero" id="home">
        <div class="hero-bg-coder" id="hero-bg-coder"></div>
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3"></div>
        <div class="stars" id="stars"></div>
        <div id="mouse-symbols"></div>
        <div class="scroll-cue">
            <svg viewBox="0 0 24 24"><path d="M12 16.5c-.28 0-.53-.11-.71-.29l-5-5a1.003 1.003 0 0 1 1.42-1.42L12 13.59l4.29-4.3a1.003 1.003 0 0 1 1.42 1.42l-5 5c-.18.18-.43.29-.71.29z"/></svg>
            <span style="font-size:0.95rem;color:var(--primary);margin-top:0.2rem;">Scroll</span>
        </div>
        <h1>Hamza Rashid</h1>
        <div class="hero-intro">
            I craft robust, scalable, and beautiful web applications.<br>
            My mission: turn complex problems into elegant digital solutions.<br>
            <span style="color:var(--highlight);font-weight:700;text-shadow:0 2px 8px #0005;">Let's build the future together.</span>
        </div>
        <div class="hero-terminal" id="hero-terminal"></div>
        <div class="hero-socials">
            <a href="https://github.com/" target="_blank" title="GitHub"><svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .5C5.73.5.5 5.74.5 12.02c0 5.1 3.29 9.43 7.86 10.96.58.11.79-.25.79-.56 0-.28-.01-1.02-.02-2-3.2.7-3.88-1.54-3.88-1.54-.53-1.36-1.3-1.72-1.3-1.72-1.06-.72.08-.71.08-.71 1.17.08 1.78 1.2 1.78 1.2 1.04 1.78 2.73 1.27 3.4.97.11-.75.41-1.27.74-1.56-2.55-.29-5.23-1.28-5.23-5.7 0-1.26.45-2.29 1.19-3.1-.12-.29-.52-1.46.11-3.05 0 0 .97-.31 3.18 1.18a11.1 11.1 0 0 1 2.9-.39c.98 0 1.97.13 2.9.39 2.2-1.49 3.17-1.18 3.17-1.18.63 1.59.23 2.76.11 3.05.74.81 1.19 1.84 1.19 3.1 0 4.43-2.69 5.41-5.25 5.7.42.36.79 1.09.79 2.2 0 1.59-.01 2.87-.01 3.26 0 .31.21.68.8.56A11.52 11.52 0 0 0 23.5 12.02C23.5 5.74 18.27.5 12 .5z"/></svg></a>
            <a href="https://linkedin.com/hamzaa-rashid" target="_blank" title="LinkedIn"><svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11.75 20h-3v-10h3v10zm-1.5-11.27c-.97 0-1.75-.79-1.75-1.76s.78-1.76 1.75-1.76c.97 0 1.75.79 1.75 1.76s-.78 1.76-1.75 1.76zm15.25 11.27h-3v-5.6c0-1.34-.03-3.07-1.87-3.07-1.87 0-2.16 1.46-2.16 2.97v5.7h-3v-10h2.88v1.36h.04c.4-.75 1.38-1.54 2.85-1.54 3.05 0 3.61 2.01 3.61 4.62v5.56z"/></svg></a>
            <a href="mailto:hamza@email.com" title="Email"><svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 13.065l-11.99-8.065h23.98l-11.99 8.065zm-12-7.065v14h24v-14l-12 8.065-12-8.065z"/></svg></a>
        </div>
        <div class="animated-text" id="animated-text"></div>
        <button class="cta-btn" onclick="document.getElementById('projects').scrollIntoView({behavior: 'smooth'})">View My Work</button>
    </section>
    <!-- Placeholder sections for About, Projects, Services, Contact -->
     
    <section id="about" class="">
    <h1 class="text-center accent" style="margin-bottom: 20px; color: var(--primary);">About Me</h1>
    
        <div class="row gx-4 align-items-stretch" style="min-height: 420px;">
            <!-- Left Column: About Me Content -->
            <div class="col-md-6">
                <div class="about-modern-card h-100">
                    <div class="about-code-header">
                        <span class="about-code-icon"><i class="fa-solid fa-terminal"></i></span>
                        <span class="about-code-label">about.js</span>
                    </div>
                    <div class="about-code-block">
                        <span class="about-code-key">const</span> <span class="about-code-var">name</span> = <span class="about-code-str">"Hamza Rashid"</span>;<br>
                        <span class="about-code-key">const</span> <span class="about-code-var">role</span> = <span class="about-code-str">"Full Stack Developer"</span>;<br>
                        <span class="about-code-key">const</span> <span class="about-code-var">location</span> = <span class="about-code-str">"Saudi Arabia"</span>;
                    </div>
                    <h2>About Me</h2>
                    <p class="about-simple-text">
                        Hi, I'm <b>Hamza Rashid</b>, a passionate full stack developer based in Saudi Arabia. I love building modern, scalable, and user-friendly web applications. My focus is on clean code, creative UI, and solving real-world problems with technology.<br><br>
                        I enjoy working with JavaScript, React, Laravel, <b>MySQL</b>, and <b>Database Design</b>, and I'm always eager to learn new tools and frameworks. Let's build something amazing together!
                    </p>
                    <!-- Animated Skill Badges -->
                    <div class="about-skills-tech">
                    <span class="about-skill-tech"><i class="fa-brands fa-php"></i> PHP</span>
                    <span class="about-skill-tech"><i class="fa-brands fa-laravel"></i> Laravel</span>
                    <span class="about-skill-tech"><i class="fa-brands fa-js"></i> JavaScript</span>
                    <span class="about-skill-tech"><i class="fa-brands fa-react"></i> React</span>
                    <span class="about-skill-tech"><i class="fa-brands fa-css3-alt"></i> CSS</span>
                    <span class="about-skill-tech"><i class="fa-brands fa-html5"></i> HTML</span>
                    <span class="about-skill-tech"><i class="fa-brands fa-mysql"></i> MySQL</span>
                    <span class="about-skill-tech"><i class="fa-brands fa-database"></i> Database Design</span>
                    <span class="about-skill-tech"><i class="fa-brands fa-git"></i> Git</span>
                        <span class="about-skill-tech"><i class="fa-brands fa-js"></i> JavaScript</span>
                        <span class="about-skill-tech"><i class="fa-brands fa-react"></i> React</span>
                        <span class="about-skill-tech"><i class="fa-brands fa-css3-alt"></i> CSS</span>
                        
                        <span class="about-skill-tech"><!-- Stripe SVG Icon -->
                          <svg width="18" height="18" viewBox="0 0 32 32" fill="none" style="vertical-align:middle;margin-right:6px;"><rect width="32" height="32" rx="8" fill="#635BFF"/><path d="M23.5 17.1c0-2.2-1.1-3.2-3.5-3.5l-1.2-.1c-.9-.1-1.2-.3-1.2-.7 0-.4.4-.7 1.1-.7.7 0 1.5.2 2.2.6l.5-2.1c-.7-.3-1.5-.5-2.3-.5-2.1 0-3.4 1.1-3.4 2.9 0 2 1.2 2.8 3.5 3.1.9.1 1.1.3 1.1.7 0 .4-.4.7-1.2.7-.9 0-1.8-.2-2.6-.7l-.5 2.1c.8.4 1.8.6 2.8.6 2.3 0 3.6-1.1 3.6-3.1z" fill="#fff"/></svg>
                          Stripe
                        </span>
                        <span class="about-skill-tech"><i class="fa-brands fa-cc-paypal"></i> PayPal</span>
                    </div>
                </div>
            </div>
            
            <!-- Right Column: Animated Code Blocks -->
            <div class="col-md-6">
                <div class="about-code-demo-col h-100">
                    <div class="about-code-demo">
                        <div class="about-code-header">
                            <span class="about-code-icon"><i class="fa-solid fa-terminal"></i></span>
                            <span class="about-code-label">greet.js</span>
                        </div>
                        <div class="about-code-block">
                            <span class="about-code-key">function</span> <span class="about-code-var">greet</span>() {<br>
                            &nbsp;&nbsp;<span class="about-code-key">return</span> <span class="about-code-str">"Hello, World!"</span>;<br>
                            }
                        </div>
                    </div>
                    <div class="about-code-demo">
                        <div class="about-code-header">
                            <span class="about-code-icon"><i class="fa-solid fa-terminal"></i></span>
                            <span class="about-code-label">skills.js</span>
                        </div>
                        <div class="about-code-block">
                            <span class="about-code-key">const</span> <span class="about-code-var">skills</span> = [<span class="about-code-str">"JavaScript"</span>, <span class="about-code-str">"React"</span>, <span class="about-code-str">"Node.js"</span>, <span class="about-code-str">"Laravel"</span>];
                        </div>
                    </div>
                    <div class="about-code-demo">
                        <div class="about-code-header">
                            <span class="about-code-icon"><i class="fa-solid fa-terminal"></i></span>
                            <span class="about-code-label">experience.js</span>
                        </div>
                        <div class="about-code-block">
                            <span class="about-code-key">let</span> <span class="about-code-var">experience</span> = {<br>
                            &nbsp;&nbsp;<span class="about-code-var">years</span>: <span class="about-code-str">4</span>,<br>
                            &nbsp;&nbsp;<span class="about-code-var">role</span>: <span class="about-code-str">"Full Stack Dev"</span><br>
                            };
                        </div>
                    </div>
                    <div class="about-code-demo">
                        <div class="about-code-header">
                            <span class="about-code-icon"><i class="fa-solid fa-terminal"></i></span>
                            <span class="about-code-label">passion.js</span>
                        </div>
                        <div class="about-code-block">
                            <span class="about-code-key">if</span> (<span class="about-code-var">passion</span>) {<br>
                            &nbsp;&nbsp;<span class="about-code-var">code</span>();<br>
                            }
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="projects" style="background: var(--section-bg-alt2); position: relative; overflow: hidden;">
        <!-- Floating Tech Symbols -->
        <div class="projects-floating-symbols">
            <span class="projects-symbol" style="left: 12%; top: 18%; animation-delay: 0s;"><i class="fa-solid fa-code"></i></span>
            <span class="projects-symbol float-x" style="left: 80%; top: 10%; animation-delay: 1.1s;"><i class="fa-brands fa-github"></i></span>
            <span class="projects-symbol" style="left: 20%; top: 70%; animation-delay: 2.2s;"><i class="fa-solid fa-terminal"></i></span>
            <span class="projects-symbol float-x" style="left: 70%; top: 80%; animation-delay: 2.7s;"><i class="fa-solid fa-layer-group"></i></span>
            <span class="projects-symbol" style="left: 55%; top: 35%; animation-delay: 1.7s;"><i class="fa-solid fa-laptop-code"></i></span>
            <span class="projects-symbol float-x" style="left: 35%; top: 12%; animation-delay: 0.8s;"><i class="fa-brands fa-js"></i></span>
            <span class="projects-symbol" style="left: 65%; top: 60%; animation-delay: 2.3s;"><i class="fa-brands fa-react"></i></span>
            <span class="projects-symbol float-x" style="left: 25%; top: 50%; animation-delay: 1.5s;"><i class="fa-brands fa-laravel"></i></span>
        </div>
        <div class="container py-5">
            <h1 class="text-center accent" style="margin-bottom: 28px; color: var(--primary); font-size: 2.5rem; font-weight: 800; letter-spacing: 1px; text-shadow: 0 2px 8px #4fd1c755;">Major Projects <span style="font-size:1.5rem;vertical-align:middle;">&#128187;</span></h1>
            <!-- Code-like Header -->
            <div class="projects-code-header d-flex align-items-center mb-4 mx-auto" style="background: #2d3748; padding: 0.75rem 1.2rem; border-radius: 10px 10px 0 0; border-bottom: 1px solid rgba(255,255,255,0.1); max-width: 420px;">
                <span class="about-code-icon" style="color: #4fd1c7; margin-right: 0.5rem;"><i class="fa-solid fa-terminal"></i></span>
                <span class="about-code-label" style="color: #e2e8f0; font-weight: 500; font-size: 1rem;">projects.js</span>
            </div>
            <!-- Modern Projects Grid -->
            <div class="projects-slider-container">
                <button class="projects-slider-btn prev" id="projectsPrevBtn" aria-label="Previous Projects"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="projects-slider-track" id="projectsSliderTrack">
                    <div class="project-card-modern-glass text-center p-4">
                        <img src="images/seensajawat.png" alt="Seen Sajawat" class="project-img mb-3">
                        <h3 class="project-title mb-2">Seen Sajawat</h3>
                        <p class="project-desc">A fully responsive, online shop for selling wooden products. I made this project for a client who is a woodworker and he wanted to sell his products online. I used HTML, CSS, JS, PHP, MySQL.</p>
                        <div class="project-tags mt-3">
                            <span class="project-tag">HTML</span>
                            <span class="project-tag">CSS</span>
                            <span class="project-tag">JS</span>
                            <span class="project-tag">PHP</span>
                        </div>
                        <a href="www.seensajawat.com" target="_blank" class="project-link-btn mt-3">View Project <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                    <div class="project-card-modern-glass text-center p-4">
                        <img src="images/webshop.png" alt="E-commerce Dashboard" class="project-img mb-3">
                        <h3 class="project-title mb-2">Stamp Hub</h3>
                        <p class="project-desc">A leading stamps seller in USA, i made user side and admin Dashboard. Users can customize their stamps on canvas and order them and can pay with stripe and paypal, also used some APIs for the orders.</p>
                        <div class="project-tags mt-3">
                            <span class="project-tag">PHP</span>
                            <span class="project-tag">Laravel</span>
                            <span class="project-tag">MySQL</span>
                            <span class="project-tag">Stripe</span>
                        </div>
                        <a href="www.stamp-hub.com" target="_blank" class="project-link-btn mt-3">View Project <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                    <div class="project-card-modern-glass text-center p-4">
                        <img src="images/dfw.png" alt="Landing Page Animation" class="project-img mb-3">
                        <h3 class="project-title mb-2">Dubai fashion week</h3>
                        <p class="project-desc">A most famous and leading fashion week under the supervision of Arab fashion council. which includes advance ticketing and events management</p>
                        <div class="project-tags mt-3">
                            <span class="project-tag">HTML</span>
                            <span class="project-tag">CSS</span>
                            <span class="project-tag">JS</span>
                            <span class="project-tag">PHP</span>
                            <span class="project-tag">Stripe</span>
                            <span class="project-tag">Paypal</span>

                        </div>
                        <a href="https://dubaifashionweek.org/" target="_blank" class="project-link-btn mt-3">View Project <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                    <!-- New dummy project cards -->
                    <div class="project-card-modern-glass text-center p-4">
                        <img src="images/menyooze.png" alt="Blog Platform" class="project-img mb-3">
                        <h3 class="project-title mb-2">menyooze</h3>
                        <p class="project-desc">A modern Restaurans and Users system for Dubai market with advance payments feature and an advance Queue feature (user can add up himself to queve without hassle)</p>
                        <div class="project-tags mt-3">
                            <span class="project-tag">PHP</span>
                            <span class="project-tag">Laravel</span>
                            <span class="project-tag">MySQL</span>
                            <span class="project-tag">Stripe</span>
                            <span class="project-tag">Vue JS</span>
                            <span class="project-tag">API</span>
                          
                        </div>
                        <a href="#" target="_blank" class="project-link-btn mt-3">View Project <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                    <div class="project-card-modern-glass text-center p-4">
                        <img src="images/medical.png" alt="Portfolio CMS" class="project-img mb-3">
                        <h3 class="project-title mb-2">Medical Directory - Heal Private (Healthcare)</h3>
                        <p class="project-desc">An appointment booking system for a healthcare company. user can book an appointment with a doctor and can see the doctor's profile and availability </p>
                        <div class="project-tags mt-3">
                            <span class="project-tag">Node.js</span>
                            <span class="project-tag">Express</span>
                            <span class="project-tag">MongoDB</span>
                        </div>
                        <a href="https://heal-private.com/" target="_blank" class="project-link-btn mt-3">View Project <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                    
                </div>
                <button class="projects-slider-btn next" id="projectsNextBtn" aria-label="Next Projects"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </section>
    <!-- Testimonial Section -->
    <section id="testimonials" style="background: #20263a; position: relative; overflow: hidden;">
        <!-- Floating Tech Symbols -->
        <div class="testimonials-floating-symbols">
            <span class="testimonials-symbol" style="left: 10%; top: 18%; animation-delay: 0s;"><i class="fa-solid fa-quote-left"></i></span>
            <span class="testimonials-symbol float-x" style="left: 80%; top: 12%; animation-delay: 1.2s;"><i class="fa-solid fa-user"></i></span>
            <span class="testimonials-symbol" style="left: 20%; top: 70%; animation-delay: 2.1s;"><i class="fa-solid fa-star"></i></span>
            <span class="testimonials-symbol float-x" style="left: 70%; top: 80%; animation-delay: 2.7s;"><i class="fa-solid fa-comments"></i></span>
        </div>
        <div class="container py-5">
            <h1 class="text-center accent" style="margin-bottom: 28px; color: var(--primary); font-size: 2.5rem; font-weight: 800; letter-spacing: 1px; text-shadow: 0 2px 8px #4fd1c755;">Testimonials <span style="font-size:1.5rem;vertical-align:middle;">&#11088;</span></h1>
            <div class="testimonials-code-header d-flex align-items-center mb-4 mx-auto" style="background: #2d3748; padding: 0.75rem 1.2rem; border-radius: 10px 10px 0 0; border-bottom: 1px solid rgba(255,255,255,0.1); max-width: 420px;">
                <span class="about-code-icon" style="color: #4fd1c7; margin-right: 0.5rem;"><i class="fa-solid fa-terminal"></i></span>
                <span class="about-code-label" style="color: #e2e8f0; font-weight: 500; font-size: 1rem;">testimonials.js</span>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial-card-modern-glass text-center p-4">
                        <h4 class="testimonial-name mb-1">Luqman Mirza</h4>
                        <div class="testimonial-role mb-2">Founder of <a href="https://www.seensajawat.com" target="_blank" style="color: var(--primary); text-decoration: none; font-weight: 500;">Seen Sajawat</a></div>
                        <div class="testimonial-quote">"Hamza is a fantastic developer! He delivered our project on time with amazing quality and attention to detail."</div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial-card-modern-glass text-center p-4">
                        <h4 class="testimonial-name mb-1">Jane Smith</h4>
                        <div class="testimonial-role mb-2">CTO, Tech Solutions</div>
                        <div class="testimonial-quote">"Working with Hamza was a pleasure. He's creative, reliable, and always goes the extra mile."</div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial-card-modern-glass text-center p-4">
                        <h4 class="testimonial-name mb-1">Alex Lee</h4>
                        <div class="testimonial-role mb-2">Founder, StartupX</div>
                        <div class="testimonial-quote">"Highly recommend Hamza for any web project. His technical skills and communication are top-notch."</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services" style="background: var(--section-bg-alt); position: relative; overflow: hidden;">
        <!-- Full-width Floating Tech Symbols -->
        <div class="services-floating-symbols">
            <span class="services-symbol" style="left: 8%; top: 20%; animation-delay: 0s;"><i class="fa-solid fa-code"></i></span>
            <span class="services-symbol float-x" style="left: 85%; top: 15%; animation-delay: 1.1s;"><i class="fa-solid fa-database"></i></span>
            <span class="services-symbol" style="left: 18%; top: 75%; animation-delay: 2.2s;"><i class="fa-solid fa-cloud"></i></span>
            <span class="services-symbol float-x" style="left: 75%; top: 80%; animation-delay: 2.7s;"><i class="fa-solid fa-mobile-alt"></i></span>
            <span class="services-symbol" style="left: 55%; top: 35%; animation-delay: 1.7s;"><i class="fa-solid fa-shield-alt"></i></span>
            <span class="services-symbol float-x" style="left: 35%; top: 10%; animation-delay: 0.8s;"><i class="fa-solid fa-server"></i></span>
            <span class="services-symbol" style="left: 65%; top: 60%; animation-delay: 2.3s;"><i class="fa-solid fa-globe"></i></span>
            <span class="services-symbol float-x" style="left: 20%; top: 50%; animation-delay: 1.5s;"><i class="fa-solid fa-laptop-code"></i></span>
        </div>
        <div class="container py-5">
            <h1 class="text-center accent" style="margin-bottom: 28px; color: var(--primary); font-size: 2.5rem; font-weight: 800; letter-spacing: 1px; text-shadow: 0 2px 8px #4fd1c755;">My Services <span style="font-size:1.5rem;vertical-align:middle;">&#128187;</span></h1>
            <!-- Code-like Header -->
            <div class="services-code-header d-flex align-items-center mb-4 mx-auto" style="background: #2d3748; padding: 0.75rem 1.2rem; border-radius: 10px 10px 0 0; border-bottom: 1px solid rgba(255,255,255,0.1); max-width: 420px;">
                <span class="about-code-icon" style="color: #4fd1c7; margin-right: 0.5rem;"><i class="fa-solid fa-terminal"></i></span>
                <span class="about-code-label" style="color: #e2e8f0; font-weight: 500; font-size: 1rem;">services.js</span>
            </div>
            <!-- Modern Services Grid -->
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="service-card-modern-glass text-center p-4">
                        <div class="service-icon mb-3"><i class="fa-solid fa-laptop-code"></i></div>
                        <h3 class="service-title mb-2">Web Development</h3>
                        <p class="service-desc">Modern, responsive websites and web apps using the latest technologies and best practices.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-card-modern-glass text-center p-4">
                        <div class="service-icon mb-3"><i class="fa-solid fa-code"></i></div>
                        <h3 class="service-title mb-2">Front End Development</h3>
                        <p class="service-desc">Beautiful, interactive user interfaces with React, Vue, and modern JavaScript frameworks.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-card-modern-glass text-center p-4">
                        <div class="service-icon mb-3"><i class="fa-solid fa-server"></i></div>
                        <h3 class="service-title mb-2">Backend Development</h3>
                        <p class="service-desc">Robust server-side logic, RESTful APIs, and scalable backend solutions with Node.js, PHP, and Laravel.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-card-modern-glass text-center p-4">
                        <div class="service-icon mb-3"><i class="fa-solid fa-plug"></i></div>
                        <h3 class="service-title mb-2">API Integration</h3>
                        <p class="service-desc">Seamless integration with third-party APIs, payment gateways, and external services.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-card-modern-glass text-center p-4">
                        <div class="service-icon mb-3"><i class="fa-solid fa-database"></i></div>
                        <h3 class="service-title mb-2">Database Design</h3>
                        <p class="service-desc">Robust, scalable database solutions and data modeling for your business needs.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-card-modern-glass text-center p-4">
                        <div class="service-icon mb-3"><i class="fa-solid fa-shield-alt"></i></div>
                        <h3 class="service-title mb-2">Security & Auditing</h3>
                        <p class="service-desc">Comprehensive security audits and implementation of best security practices.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-card-modern-glass text-center p-4">
                        <div class="service-icon mb-3"><i class="fa-solid fa-cloud"></i></div>
                        <h3 class="service-title mb-2">Cloud Integration</h3>
                        <p class="service-desc">Seamless integration with cloud platforms for deployment, storage, and scalability.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-card-modern-glass text-center p-4">
                        <div class="service-icon mb-3"><i class="fa-solid fa-globe"></i></div>
                        <h3 class="service-title mb-2">SEO & Optimization</h3>
                        <p class="service-desc">Search engine optimization and performance tuning for better visibility and speed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" style="background: var(--section-bg-alt); position: relative; overflow: hidden;">
        <!-- Floating Contact Symbols -->
        <div class="contact-floating-symbols">
            <span class="contact-symbol" style="left: 10%; top: 18%; animation-delay: 0s;"><i class="fa-solid fa-envelope"></i></span>
            <span class="contact-symbol float-x" style="left: 80%; top: 12%; animation-delay: 1.2s;"><i class="fa-solid fa-phone"></i></span>
            <span class="contact-symbol" style="left: 20%; top: 70%; animation-delay: 2.1s;"><i class="fa-brands fa-whatsapp"></i></span>
            <span class="contact-symbol float-x" style="left: 70%; top: 80%; animation-delay: 2.7s;"><i class="fa-brands fa-linkedin"></i></span>
        </div>
        <div class="container py-5">
            <h1 class="text-center accent" style="margin-bottom: 28px; color: var(--primary); font-size: 2.5rem; font-weight: 800; letter-spacing: 1px; text-shadow: 0 2px 8px #4fd1c755;">Contact Me <span style="font-size:1.5rem;vertical-align:middle;">&#128231;</span></h1>
            <div class="contact-modern-card mx-auto p-4" style="max-width: 480px; background: linear-gradient(135deg, #1a1f2e 0%, #16213e 100%); border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.08);">
                <div class="text-center mb-4">
                    <h2 style="color: var(--primary); font-weight: 700; font-size: 2rem; margin-bottom: 0.5rem;">Let's Connect!</h2>
                    <p style="color: #b5c6d3; font-size: 1.13rem;">I'm always open to discussing new projects, creative ideas, or opportunities to be part of your vision.</p>
                </div>
                <div class="d-flex flex-column gap-3" style="font-size: 1.13rem; color: #e6edf3;">
                    <div class="d-flex align-items-center mb-2">
                        <span class="me-3" style="color: #4fd1c7; font-size: 1.5rem;"><i class="fa-solid fa-envelope"></i></span>
                        <a href="mailto:hamzantenious@gmail.com" class="ml-2" style="color: #e6edf3; text-decoration: none; font-weight: 500;">hamzantenious@gmail.com</a>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <span class="me-3" style="color: #4fd1c7; font-size: 1.5rem;"><i class="fa-solid fa-phone"></i></span>
                        <a href="tel:+966553849622" class="ml-2" style="color: #e6edf3; text-decoration: none; font-weight: 500;">+966 55 384 9622</a>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <span class="me-3" style="color: #25D366; font-size: 1.5rem;"><i class="fa-brands fa-whatsapp"></i></span>
                        <a href="https://wa.me/966553849622" class="ml-2" target="_blank" style="color: #e6edf3; text-decoration: none; font-weight: 500;">+92 301 2424249</a>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <span class="me-3" style="color: #0077b5; font-size: 1.5rem;"><i class="fa-brands fa-linkedin"></i></span>
                        <a href="https://linkedin.com/in/hamzaa-rashid" class="ml-2" target="_blank" style="color: #e6edf3; text-decoration: none; font-weight: 500;">LinkedIn</a>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <span class="me-3" style="color: #F13C20; font-size: 1.5rem;"><i class="fa-solid fa-location-dot"></i></span>
                        <span class="ml-2">Saudi Arabia</span>
                    </div>
                </div>
                <div class="text-center mt-4" style="color: #b5c6d3; font-size: 1.08rem;">
                    <i class="fa-solid fa-handshake-angle" style="color: #4fd1c7; margin-right: 0.5rem;"></i>
                    Let's build something amazing together!
                </div>
            </div>
        </div>
    </section>
    <!-- Lottie and GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
        // Animated typing effect
        const phrases = [
            "Web Developer.",
            "UI/UX Enthusiast.",
            "Building modern web experiences.",
        ];
        let i = 0, j = 0, currentPhrase = [], isDeleting = false, isEnd = false;
        const el = document.getElementById('animated-text');
        function loop() {
            isEnd = false;
            el.innerHTML = currentPhrase.join('');
            if (i < phrases.length) {
                if (!isDeleting && j <= phrases[i].length) {
                    currentPhrase.push(phrases[i][j]);
                    j++;
                    el.innerHTML = currentPhrase.join('');
                }
                if(isDeleting && j <= phrases[i].length) {
                    currentPhrase.pop();
                    j--;
                    el.innerHTML = currentPhrase.join('');
                }
                if (j == phrases[i].length) {
                    isEnd = true;
                    isDeleting = true;
                    setTimeout(loop, 1200);
                    return;
                }
                if (isDeleting && j === 0) {
                    currentPhrase = [];
                    isDeleting = false;
                    i++;
                    if (i === phrases.length) {
                        i = 0;
                    }
                }
            }
            const speed = isEnd ? 1200 : isDeleting ? 40 : 80;
            setTimeout(loop, speed);
        }
        loop();

        // Animated stars background in hero section
        const starsContainer = document.getElementById('stars');
        const numStars = 60;
        const stars = [];
        for (let i = 0; i < numStars; i++) {
            const star = document.createElement('div');
            star.className = 'star';
            // Random position
            star.style.left = Math.random() * 100 + '%';
            star.style.top = Math.random() * 100 + '%';
            // Random size
            const size = Math.random() * 2 + 1;
            star.style.width = size + 'px';
            star.style.height = size + 'px';
            // Random opacity
            star.style.opacity = 0.5 + Math.random() * 0.5;
            starsContainer.appendChild(star);
            stars.push({el: star, baseLeft: parseFloat(star.style.left), baseTop: parseFloat(star.style.top)});
        }
        // Parallax mouse follow effect for stars
        document.querySelector('.hero').addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;
            stars.forEach((star, i) => {
                const factor = 10 + (i % 10) * 2;
                star.el.style.transform = `translate(${x * factor}px, ${y * factor}px)`;
            });
        });
        document.querySelector('.hero').addEventListener('mouseleave', function() {
            stars.forEach(star => {
                star.el.style.transform = '';
            });
        });

        // Mouse-follow programming symbols effect
        const symbolChars = [';', ':', '{', '}', '(', ')', '<', '>', '[', ']'];
        const symbolCount = 6;
        const symbolTrail = [];
        const mouseSymbolsContainer = document.getElementById('mouse-symbols');
        for (let i = 0; i < symbolCount; i++) {
            const el = document.createElement('span');
            el.className = 'mouse-symbol';
            el.textContent = symbolChars[i % symbolChars.length];
            mouseSymbolsContainer.appendChild(el);
            symbolTrail.push({el, x: window.innerWidth/2, y: window.innerHeight/2});
        }
        let mouseX = window.innerWidth/2, mouseY = window.innerHeight/2;
        let mouseMoveTimeout = null;
        function hideSymbols() {
            symbolTrail.forEach(s => s.el.classList.add('hidden'));
        }
        function showSymbols() {
            symbolTrail.forEach(s => s.el.classList.remove('hidden'));
        }
        document.querySelector('.hero').addEventListener('mousemove', function(e) {
            mouseX = e.clientX;
            mouseY = e.clientY;
            showSymbols();
            if (mouseMoveTimeout) clearTimeout(mouseMoveTimeout);
            mouseMoveTimeout = setTimeout(hideSymbols, 1000);
        });
        function animateSymbols() {
            let prevX = mouseX, prevY = mouseY;
            for (let i = 0; i < symbolTrail.length; i++) {
                const s = symbolTrail[i];
                s.x += (prevX - s.x) * 0.22;
                s.y += (prevY - s.y) * 0.22;
                s.el.style.left = s.x + 12 * Math.sin(i) + 'px';
                s.el.style.top = s.y + 12 * Math.cos(i) + 'px';
                prevX = s.x;
                prevY = s.y;
            }
            requestAnimationFrame(animateSymbols);
        }
        animateSymbols();
        // Hide/show symbols only in hero
        document.querySelector('.hero').addEventListener('mouseenter', function() {
            mouseSymbolsContainer.style.display = 'block';
            showSymbols();
        });
        document.querySelector('.hero').addEventListener('mouseleave', function() {
            mouseSymbolsContainer.style.display = 'none';
            hideSymbols();
        });
        mouseSymbolsContainer.style.display = 'none';
        hideSymbols();

        // Remove navbar toggle for this design
        // Active link highlight on scroll
        const sections = ['home', 'about', 'projects', 'services', 'contact'];
        const navLinks = Array.from(document.getElementById('navbar-menu').querySelectorAll('a'));

        window.addEventListener('scroll', () => {
            let fromTop = window.scrollY + 80;
            let current = sections.find(id => {
                const section = document.getElementById(id);
                return section && section.offsetTop <= fromTop && section.offsetTop + section.offsetHeight > fromTop;
            });
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (current && link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });

        // GSAP Scroll Animations for sections
        gsap.registerPlugin(ScrollTrigger);
        // Animate section headings
        gsap.utils.toArray('.scroll-animate h2').forEach(heading => {
            gsap.to(heading, {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 1.1,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: heading,
                    start: 'top 85%',
                    toggleActions: 'play none none none',
                }
            });
        });
        // Animate section content with stagger
        gsap.utils.toArray('.scroll-animate').forEach(section => {
            const children = Array.from(section.children).filter(el => el.tagName !== 'H2');
            gsap.from(children, {
                opacity: 0,
                y: 60,
                skewY: 4,
                scale: 0.97,
                duration: 1.1,
                stagger: 0.15,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: section,
                    start: 'top 80%',
                    toggleActions: 'play none none none',
                }
            });
        });
        // GSAP animation for modern services grid
        gsap.utils.toArray('.services-grid .service-card-modern').forEach((card, i) => {
            gsap.from(card, {
                opacity: 0,
                y: 60,
                scale: 0.95,
                duration: 1.1,
                delay: 0.2 + i * 0.13,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: card,
                    start: 'top 85%',
                    toggleActions: 'play none none none',
                }
            });
        });
        // GSAP animation for about-cols
        gsap.from('.about-col', {
            opacity: 0,
            y: 60,
            scale: 0.97,
            duration: 1.1,
            stagger: 0.18,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: '.about-cols',
                start: 'top 80%',
                toggleActions: 'play none none none',
            }
        });
        // GSAP animation for about-simple card
        gsap.to('.about-animated', {
            opacity: 1,
            y: 0,
            scale: 1,
            duration: 1.1,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: '.about-animated',
                start: 'top 85%',
                toggleActions: 'play none none none',
            }
        });
        // GSAP animation for about-modern-card
        gsap.to('.about-modern-card', {
            opacity: 1,
            y: 0,
            scale: 1,
            rotateZ: 0,
            duration: 1.1,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: '.about-modern-card',
                start: 'top 85%',
                toggleActions: 'play none none none',
            }
        });

        // --- HERO PROGRAMMING BACKGROUND ---
        const codeSymbols = [';', ':', '{', '}', '(', ')', '<', '>', '[', ']', '=', '=>', 'const', 'let', 'function', 'return', 'if', 'else'];
        const heroBg = document.getElementById('hero-bg-coder');
        for (let i = 0; i < 18; i++) {
            const el = document.createElement('span');
            el.className = 'floating-code' + (i % 3 === 0 ? ' yellow' : '');
            el.textContent = codeSymbols[Math.floor(Math.random() * codeSymbols.length)];
            el.style.left = Math.random() * 98 + '%';
            el.style.animationDelay = (Math.random() * 6) + 's';
            el.style.fontSize = (1.5 + Math.random() * 1.7) + 'rem';
            heroBg.appendChild(el);
        }

        // --- HERO TERMINAL ANIMATED CODE ---
        const terminal = document.getElementById('hero-terminal');
        const codeLines = [
            'const name = "Hamza Rashid";',
            'const role = "Software Engineer";',
            'function buildWebsite() {',
            '  // ...modern code here',
            '  return "Success!";',
            '}',
            'if (needWebsite) {',
            '  buildWebsite();',
            '}',
        ];
        let line = 0, char = 0;
        function typeLine() {
            if (line < codeLines.length) {
                if (char <= codeLines[line].length) {
                    terminal.innerHTML =
                        codeLines.slice(0, line).map(l => `<span>${l}</span>`).join('<br>') +
                        (char < codeLines[line].length ? `<span>${codeLines[line].slice(0, char)}<span class='typed-cursor'>|</span></span>` : `<span>${codeLines[line]}</span>`);
                    char++;
                    setTimeout(typeLine, 28 + Math.random() * 30);
                } else {
                    char = 0;
                    line++;
                    setTimeout(typeLine, 350);
                }
            } else {
                terminal.innerHTML = codeLines.map(l => `<span>${l}</span>`).join('<br>');
            }
        }
        typeLine();

        // GSAP animation for .about-code-demo blocks
        gsap.utils.toArray('.about-code-demo').forEach((block, i) => {
            gsap.to(block, {
                opacity: 1,
                y: 0,
                scale: 1,
                rotateZ: 0,
                duration: 1.1,
                delay: 0.2 + i * 0.13,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: block,
                    start: 'top 85%',
                    toggleActions: 'play none none none',
                }
            });
        });

        // Improved About section code block animation with scroll-like effect
        (function() {
            const codeBlocks = Array.from(document.querySelectorAll('#about-code-demo-col .about-code-demo'));
            let group = 1;
            let animating = false;
            function showGroup(g) {
                animating = true;
                // Animate out current active blocks (slide up)
                codeBlocks.forEach(block => {
                    if (block.classList.contains('active')) {
                        block.classList.remove('active');
                        block.classList.add('leaving');
                    }
                });
                // Prepare incoming blocks (slide in from below)
                setTimeout(() => {
                    codeBlocks.forEach(block => {
                        block.classList.remove('leaving');
                        if (block.getAttribute('data-group') == g) {
                            block.classList.add('entering');
                        } else {
                            block.classList.remove('entering');
                        }
                    });
                }, 400);
                // After fade out, show new group with slide up
                setTimeout(() => {
                    codeBlocks.forEach(block => {
                        block.classList.remove('leaving', 'entering');
                        if (block.getAttribute('data-group') == g) {
                            block.classList.add('active');
                        } else {
                            block.classList.remove('active');
                        }
                    });
                    animating = false;
                }, 600); // match CSS transition
            }
            showGroup(group);
            setInterval(() => {
                if (animating) return;
                group = group === 1 ? 2 : 1;
                showGroup(group);
            }, 3200);
        })();

        // About section code block blink animation (one at a time)
        (function() {
            const codeBlocks = Array.from(document.querySelectorAll('.about-code-demo-col .about-code-demo'));
            let idx = 0;
            function showBlock(i) {
                codeBlocks.forEach((block, j) => {
                    block.classList.remove('active', 'blinking');
                    if (j === i) block.classList.add('active');
                });
            }
            function blinkToNext() {
                codeBlocks[idx].classList.add('blinking');
                setTimeout(() => {
                    codeBlocks[idx].classList.remove('active', 'blinking');
                    idx = (idx + 1) % codeBlocks.length;
                    codeBlocks[idx].classList.add('active', 'blinking');
                    setTimeout(() => {
                        codeBlocks[idx].classList.remove('blinking');
                    }, 350);
                }, 350);
            }
            showBlock(idx);
            setInterval(blinkToNext, 2500);
        })();

        // Projects slider logic
        (function() {
            const track = document.getElementById('projectsSliderTrack');
            const prevBtn = document.getElementById('projectsPrevBtn');
            const nextBtn = document.getElementById('projectsNextBtn');
            const cards = Array.from(track.children);
            let current = 0;
            function getVisibleCount() {
                if (window.innerWidth < 700) return 1;
                if (window.innerWidth < 1100) return 2;
                return 3;
            }
            function updateSlider() {
                const visible = getVisibleCount();
                const cardWidth = cards[0].offsetWidth + 32; // 32px gap
                track.style.transform = `translateX(-${current * cardWidth}px)`;
                prevBtn.disabled = current === 0;
                nextBtn.disabled = current >= cards.length - visible;
            }
            prevBtn.addEventListener('click', () => {
                if (current > 0) current--;
                updateSlider();
            });
            nextBtn.addEventListener('click', () => {
                if (current < cards.length - getVisibleCount()) current++;
                updateSlider();
            });
            window.addEventListener('resize', updateSlider);
            updateSlider();
        })();
    </script>
    <footer class="site-footer mt-5" style="background: #181c25; color: #e2e8f0; padding: 2.2rem 0 1.2rem 0; border-top: 1.5px solid #23293a;">
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <div class="footer-socials d-flex gap-3">
                <a href="https://github.com/hamza-bit-lab" target="_blank" class="footer-social-link" style="color: var(--primary); font-size: 1.7rem;"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/hamzaa-rashid/" target="_blank" class="footer-social-link" style="color: var(--primary); font-size: 1.7rem;"><i class="fa-brands fa-linkedin"></i></a>
                <a href="mailto:hamzantenious@gmail.com" class="footer-social-link" style="color: var(--primary); font-size: 1.7rem;"><i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </footer>
</body>
</html> 