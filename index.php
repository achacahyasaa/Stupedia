<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <link href="img/Stuped.png" rel="icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StuPedia - Stunting Prevention Education</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        .logo-placeholder {
    width: 60px; /* Sesuaikan */
    height: 60px; /* Sesuaikan */
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f0f0f0; /* opsional */
    border-radius: 8px;
    overflow: hidden;
}

.logo-img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}


        .custom-footer {
            background: 2e7d32;
            color: white;
            padding: 60px 0 30px 0;
            position: relative;
            overflow: hidden;
        }

        .custom-footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M1200 120L0 16.48V0h1200v120z" fill="rgba(255,255,255,0.1)"/></svg>') no-repeat;
            background-size: cover;
            opacity: 0.1;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }

        .footer-content {
            margin-bottom: 40px;
        }

        .footer-section {
            text-align: left;
        }

        .footer-section.center {
            text-align: center;
        }

        .footer-logo-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .logo-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
        }

        .logo-placeholder {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
        }

        .logo-placeholder:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }

        .logo-text {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 500;
        }

        .footer-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 15px;
            background: linear-gradient(45deg, #fff, #e3f2fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .footer-tagline {
            font-size: 1.1rem;
            color: #e3f2fd;
            margin-bottom: 10px;
            font-style: italic;
        }

        .footer-section h6 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #e3f2fd;
            font-weight: 600;
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 8px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 12px;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-section ul li:hover {
            color: #e3f2fd;
            transform: translateX(5px);
            transition: all 0.3s ease;
        }

        .footer-section ul li i {
            width: 20px;
            color: #64b5f6;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
            color: rgba(255, 255, 255, 0.9);
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64b5f6;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 20px 0;
        }

        .social-link {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .social-link:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 30px;
            text-align: center;
        }

        .footer-credits {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
            margin-top: 10px;
        }

        .footer-credits strong {
            color: #e3f2fd;
        }

        .copyright {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 10px;
        }

        /* Mobile-First Navbar Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            padding: 0.75rem 0;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .navbar-toggler {
            border: none;
            padding: 0.25rem 0.5rem;
            font-size: 1.1rem;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2876, 175, 80, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='m4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .nav-link {
            font-weight: 500;
            color: #333 !important;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.75rem 1rem !important;
            border-radius: 8px;
            margin: 0.25rem 0;
        }

        .nav-link:hover {
            color: #4CAF50 !important;
            background: rgba(76, 175, 80, 0.1);
            transform: translateX(5px);
        }

        .btn-outline-success {
            border: 2px solid #4CAF50;
            color: #4CAF50;
            font-weight: 500;
            padding: 8px 20px;
            border-radius: 25px;
            transition: all 0.3s ease;
            margin-top: 0.5rem;
        }

        .btn-outline-success:hover {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            border-color: transparent;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(76, 175, 80, 0.3);
        }

        /* Mobile-Optimized Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(76, 175, 80, 0.3), rgba(69, 160, 73, 0.3)), url('img/kid-playing-home.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: scroll;
            min-height: 60vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            padding: 2rem 0;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(76, 175, 80, 0.8), rgba(69, 160, 73, 0.6));
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            padding: 1rem;
        }

        .hero-section h1 {
            font-size: clamp(2rem, 8vw, 4rem);
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-out;
            line-height: 1.2;
        }

        .hero-section .lead {
            font-size: clamp(1rem, 4vw, 1.4rem);
            font-weight: 400;
            margin-bottom: 1.5rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-out 0.3s both;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-hero {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid white;
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 50px;
            font-size: clamp(0.9rem, 3vw, 1.1rem);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease-out 0.6s both;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-hero:hover {
            background: white;
            color: #4CAF50;
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        /* Mobile-Optimized Statistics Section */
        .stats-section {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: 3rem 0;
        }

        .stat-card {
            background: white;
            border-radius: 20px;
            padding: 2rem 1rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-bottom: 1.5rem;
            height: 100%;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #4CAF50, #45a049);
        }

        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .stat-number {
            font-size: clamp(2rem, 6vw, 3rem);
            font-weight: 700;
            margin-bottom: 10px;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-text {
            color: #666;
            font-weight: 500;
            font-size: clamp(0.9rem, 3vw, 1.1rem);
            line-height: 1.4;
        }

        /* Mobile-Optimized Section Headers */
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
            padding: 0 1rem;
        }

        .section-header h2 {
            font-size: clamp(2rem, 6vw, 3rem);
            font-weight: 700;
            color: #333;
            margin-bottom: 1rem;
            position: relative;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            border-radius: 2px;
        }

        .section-header p {
            font-size: clamp(0.9rem, 3vw, 1rem);
            color: #666;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Mobile-Optimized Filter Containers */
        .recipe-filter-container,
        .article-filter-container {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(76, 175, 80, 0.1);
        }

        .filter-title {
            font-size: clamp(1rem, 4vw, 1.3rem);
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 1rem;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .filter-buttons {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 0.75rem;
            justify-content: center;
            align-items: center;
        }

        .filter-btn {
            background: white;
            border: 2px solid #e2e8f0;
            color: #4a5568;
            padding: 12px 16px;
            border-radius: 25px;
            font-weight: 500;
            font-size: clamp(0.8rem, 3vw, 0.95rem);
            transition: all 0.3s ease;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            min-height: 48px;
            text-align: center;
        }

        .filter-btn:hover {
            border-color: #4CAF50;
            color: #4CAF50;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(76, 175, 80, 0.2);
        }

        .filter-btn.active {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            border-color: #4CAF50;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(76, 175, 80, 0.3);
        }

        .filter-btn.active:hover {
            background: linear-gradient(135deg, #45a049, #388e3c);
        }

        .recipe-count, .article-count {
            text-align: center;
            margin: 1rem 0;
            font-size: clamp(0.9rem, 3vw, 1rem);
            color: #718096;
            font-weight: 500;
        }

        .recipe-count .count-number, .article-count .count-number {
            color: #4CAF50;
            font-weight: 700;
        }

        /* Mobile-Optimized Cards */
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
            position: relative;
            margin-bottom: 1.5rem;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .card-img-top {
            transition: all 0.3s ease;
            height: 200px;
            object-fit: cover;
        }

        .card:hover .card-img-top {
            transform: scale(1.05);
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            font-weight: 600;
            color: #333;
            margin-bottom: 1rem;
            font-size: clamp(1rem, 4vw, 1.25rem);
            line-height: 1.3;
        }

        .badge {
            border-radius: 15px;
            padding: 6px 12px;
            font-weight: 500;
            font-size: 0.8rem;
        }

        .bg-success {
            background: linear-gradient(135deg, #4CAF50, #45a049) !important;
        }

        /* Mobile-Optimized Recipe Cards */
        .recipe-card {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            border: 1px solid rgba(76, 175, 80, 0.1);
            height: 100%;
            margin-bottom: 1.5rem;
        }

        .recipe-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 48px rgba(0, 0, 0, 0.15);
            border-color: rgba(76, 175, 80, 0.2);
        }

        .recipe-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #4CAF50, #45a049, #66BB6A);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .recipe-card:hover::before {
            opacity: 1;
        }

        .recipe-image-container {
            position: relative;
            height: 200px;
            overflow: hidden;
            background: linear-gradient(135deg, #f5f5f5, #e8e8e8);
        }

        .recipe-card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
            filter: brightness(0.95) saturate(1.1);
        }

        .recipe-card:hover .recipe-card-img {
            transform: scale(1.08);
            filter: brightness(1) saturate(1.2);
        }

        .recipe-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                135deg, 
                rgba(76, 175, 80, 0.1) 0%, 
                rgba(69, 160, 73, 0.05) 100%
            );
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .recipe-card:hover .recipe-overlay {
            opacity: 1;
        }

        .recipe-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            color: #4CAF50;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(76, 175, 80, 0.2);
        }

        .recipe-card-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .recipe-title {
            font-size: clamp(1.1rem, 4vw, 1.4rem);
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 1rem;
            line-height: 1.3;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .recipe-meta {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
            flex-wrap: wrap;
        }

        .recipe-meta-item {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #718096;
            font-size: clamp(0.8rem, 3vw, 0.95rem);
            font-weight: 500;
        }

        .recipe-meta-item i {
            color: #4CAF50;
            font-size: 0.9rem;
        }

        .recipe-description {
            color: #4a5568;
            font-size: clamp(0.85rem, 3vw, 0.95rem);
            line-height: 1.6;
            margin-bottom: 1.5rem;
            flex-grow: 1;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .recipe-btn {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 16px;
            font-weight: 600;
            font-size: clamp(0.85rem, 3vw, 0.95rem);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
            box-shadow: 0 4px 16px rgba(76, 175, 80, 0.3);
            position: relative;
            overflow: hidden;
            min-height: 48px;
        }

        .recipe-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .recipe-btn:hover {
            background: linear-gradient(135deg, #45a049, #388e3c);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(76, 175, 80, 0.4);
            color: white;
        }

        .recipe-btn:hover::before {
            left: 100%;
        }

        /* Mobile-Optimized Carousel Navigation */
        .article-carousel-navigation,
        .recipe-carousel-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.5rem;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .article-carousel-btn,
        .recipe-carousel-btn {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: clamp(0.8rem, 3vw, 0.9rem);
            font-weight: 500;
            min-height: 48px;
            flex: 1;
            justify-content: center;
            max-width: 150px;
        }

        .article-carousel-btn:hover,
        .recipe-carousel-btn:hover {
            background: #45a049;
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(76, 175, 80, 0.3);
        }

        .article-carousel-btn:disabled,
        .recipe-carousel-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .article-carousel-indicator,
        .recipe-carousel-indicator {
            background: #f8f9fa;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 500;
            color: #666;
            font-size: clamp(0.8rem, 3vw, 0.9rem);
            text-align: center;
            flex: 1;
            max-width: 200px;
        }

        /* Mobile-Optimized Calculator Section */
        .calculator-section {
            background-image: url('img/kids.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }

        .calculator-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, 
                rgba(69, 160, 73, 0.85), 
                rgba(69, 160, 73, 0.75),
                rgba(69, 160, 73, 0.65)
            );
            z-index: 1;
        }

        .calculator-content {
            position: relative;
            z-index: 3;
        }

        .section-header-calc {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
            padding: 0 1rem;
        }

        .section-header-calc h2 {
            font-size: clamp(2rem, 6vw, 3.2rem);
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            letter-spacing: -0.5px;
        }

        .section-header-calc .subtitle {
            font-size: clamp(1rem, 4vw, 1.2rem);
            font-weight: 400;
            color: rgba(255, 255, 255, 0.9);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .info-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 24px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
            border-color: rgba(255, 255, 255, 0.25);
        }

        .info-card h3 {
            font-size: clamp(1.3rem, 5vw, 1.8rem);
            font-weight: 600;
            color: white;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .info-card .icon-wrapper {
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .info-card p {
            font-size: clamp(0.9rem, 3vw, 1.05rem);
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.9);
            margin: 0;
            text-align: justify;
        }

        .calculator-form-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 28px;
            padding: 2rem;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            position: relative;
            overflow: hidden;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-header h3 {
            font-size: clamp(1.2rem, 4vw, 1.6rem);
            font-weight: 600;
            color: white;
            margin-bottom: 0.5rem;
        }

        .form-header p {
            color: rgba(255, 255, 255, 0.8);
            font-size: clamp(0.85rem, 3vw, 0.95rem);
            margin: 0;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-label {
            color: white;
            font-weight: 500;
            margin-bottom: 0.5rem;
            font-size: clamp(0.85rem, 3vw, 0.95rem);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-control, .form-select {
            border-radius: 16px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.08);
            color: white;
            padding: 16px 20px;
            font-size: clamp(0.9rem, 3vw, 1rem);
            font-weight: 400;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
            min-height: 48px;
        }

        .form-control:focus, .form-select:focus {
            border-color: rgba(255, 255, 255, 0.5);
            background: rgba(255, 255, 255, 0.12);
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.15),
                        inset 0 2px 4px rgba(0, 0, 0, 0.1);
            color: white;
            outline: none;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
            font-weight: 400;
        }

        .btn-calculate {
            background: linear-gradient(135deg, #ffffff, #f8fafc);
            color: #45a049;
            border: none;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 600;
            font-size: clamp(1rem, 3vw, 1.1rem);
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
            min-width: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin: 2rem auto 0;
            min-height: 48px;
        }

        .btn-calculate:hover {
            background: linear-gradient(135deg, #f8fafc, #e2e8f0);
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(255, 255, 255, 0.3);
            color: #45a049;
        }

        /* Mobile-Optimized Footer */
        .custom-footer {
            background-color: #2e7d32;
            color: #fff;
            padding: 2rem 1rem;
            margin-top: 3rem;
            font-family: 'Segoe UI', sans-serif;
            text-align: center;
        }

        .custom-footer .footer-title {
            font-size: clamp(1.3rem, 4vw, 1.6rem);
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .custom-footer p {
            margin: 0.5rem 0;
            font-size: clamp(0.85rem, 3vw, 0.95rem);
            line-height: 1.5;
        }

        .custom-footer .footer-tagline {
            font-style: italic;
            color: #c8e6c9;
        }

        .custom-footer .footer-credits {
            font-size: clamp(0.75rem, 3vw, 0.85rem);
            color: #a5d6a7;
        }

        /* Mobile-Specific Responsive Breakpoints */
        @media (max-width: 576px) {
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .hero-section {
                min-height: 50vh;
                padding: 1.5rem 0;
            }

            .stats-section {
                padding: 2rem 0;
            }

            .section-header {
                margin-bottom: 2rem;
            }

            .filter-buttons {
                grid-template-columns: 1fr;
                gap: 0.5rem;
            }

            .filter-btn {
                padding: 14px 20px;
                font-size: 0.9rem;
            }

            .recipe-card-body,
            .card-body {
                padding: 1.25rem;
            }

            .recipe-image-container {
                height: 180px;
            }

            .article-carousel-navigation,
            .recipe-carousel-navigation {
                flex-direction: column;
                gap: 0.75rem;
            }

            .article-carousel-btn,
            .recipe-carousel-btn {
                max-width: none;
                width: 100%;
            }

            .article-carousel-indicator,
            .recipe-carousel-indicator {
                max-width: none;
                width: 100%;
                order: -1;
            }

            .calculator-form-card {
                padding: 1.5rem;
            }

            .form-group {
                margin-bottom: 1.25rem;
            }

            .btn-calculate {
                width: 100%;
                margin-top: 1.5rem;
            }

            .navbar-collapse {
                margin-top: 1rem;
                padding: 1rem;
                background: rgba(255, 255, 255, 0.95);
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }
        }


        /* Navbar Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-link {
            font-weight: 500;
            color: #333 !important;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            color: #4CAF50 !important;
            transform: translateY(-2px);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .btn-outline-success {
            border: 2px solid #4CAF50;
            color: #4CAF50;
            font-weight: 300;
            padding: 6px 16px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .btn-outline-success:hover {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            border-color: transparent;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(76, 175, 80, 0.3);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(76, 175, 80, 0.3), rgba(69, 160, 73, 0.3)), url('img/kid-playing-home.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: scroll;
            height: 400px;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(76, 175, 80, 0.8), rgba(69, 160, 73, 0.6));
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
        }

        .hero-section h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-out;
        }

        .hero-section .lead {
            font-size: 1.4rem;
            font-weight: 400;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .btn-hero {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid white;
            color: white;
            font-weight: 600;
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 1.1rem;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .btn-hero:hover {
            background: white;
            color: #4CAF50;
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        /* Statistics Section */
        .stats-section {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: 80px 0;
        }

        .stat-card {
            background: white;
            border-radius: 20px;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #4CAF50, #45a049);
        }

        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-text {
            color: #666;
            font-weight: 500;
            font-size: 1.1rem;
        }

        /* IMPROVED RECIPE SECTION STYLES */
        .recipe-section {
            background: linear-gradient(135deg, #f8fffe 0%, #f0f9f7 100%);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .recipe-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                radial-gradient(circle at 20% 80%, rgba(76, 175, 80, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(69, 160, 73, 0.03) 0%, transparent 50%);
            pointer-events: none;
        }

        /* Recipe Filter Styles */
        .recipe-filter-container {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 50px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(76, 175, 80, 0.1);
        }

        /* Article Filter Styles - Similar to Recipe Filter */
        .article-filter-container {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 50px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(76, 175, 80, 0.1);
        }

        .filter-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 20px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .filter-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
            align-items: center;
        }

        .filter-btn {
            background: white;
            border: 2px solid #e2e8f0;
            color: #4a5568;
            padding: 12px 24px;
            border-radius: 25px;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            min-width: 120px;
            justify-content: center;
        }

        .filter-btn:hover {
            border-color: #4CAF50;
            color: #4CAF50;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(76, 175, 80, 0.2);
        }

        .filter-btn.active {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            border-color: #4CAF50;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(76, 175, 80, 0.3);
        }

        .filter-btn.active:hover {
            background: linear-gradient(135deg, #45a049, #388e3c);
        }

        .recipe-count, .article-count {
            text-align: center;
            margin: 20px 0;
            font-size: 1rem;
            color: #718096;
            font-weight: 500;
        }

        .recipe-count .count-number, .article-count .count-number {
            color: #4CAF50;
            font-weight: 700;
        }

        .recipe-card {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            border: 1px solid rgba(76, 175, 80, 0.1);
            height: 100%;
        }

        .recipe-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 48px rgba(0, 0, 0, 0.15);
            border-color: rgba(76, 175, 80, 0.2);
        }

        .recipe-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #4CAF50, #45a049, #66BB6A);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .recipe-card:hover::before {
            opacity: 1;
        }

        .recipe-image-container {
            position: relative;
            height: 220px;
            overflow: hidden;
            background: linear-gradient(135deg, #f5f5f5, #e8e8e8);
        }

        .recipe-card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
            filter: brightness(0.95) saturate(1.1);
        }

        .recipe-card:hover .recipe-card-img {
            transform: scale(1.08);
            filter: brightness(1) saturate(1.2);
        }

        .recipe-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                135deg, 
                rgba(76, 175, 80, 0.1) 0%, 
                rgba(69, 160, 73, 0.05) 100%
            );
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .recipe-card:hover .recipe-overlay {
            opacity: 1;
        }

        .recipe-badge {
            position: absolute;
            top: 16px;
            right: 16px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            color: #4CAF50;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(76, 175, 80, 0.2);
        }

        .recipe-card-body {
            padding: 32px 28px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .recipe-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 16px;
            line-height: 1.3;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .recipe-meta {
            display: flex;
            gap: 24px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .recipe-meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #718096;
            font-size: 0.95rem;
            font-weight: 500;
        }

        .recipe-meta-item i {
            color: #4CAF50;
            font-size: 1rem;
        }

        .recipe-description {
            color: #4a5568;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 24px;
            flex-grow: 1;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .recipe-btn {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            border: none;
            padding: 14px 28px;
            border-radius: 16px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
            box-shadow: 0 4px 16px rgba(76, 175, 80, 0.3);
            position: relative;
            overflow: hidden;
        }

        .recipe-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .recipe-btn:hover {
            background: linear-gradient(135deg, #45a049, #388e3c);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(76, 175, 80, 0.4);
            color: white;
        }

        .recipe-btn:hover::before {
            left: 100%;
        }

        /* IMPROVED RECIPE MODAL STYLES */
        .recipe-modal .modal-dialog {
            max-width: 900px;
            margin: 2rem auto;
        }

        .recipe-modal .modal-content {
            border-radius: 24px;
            border: none;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .recipe-modal-header {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            padding: 0;
            border: none;
            position: relative;
            overflow: hidden;
        }

        .recipe-modal-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.1) 0%, transparent 100%);
        }

        .recipe-header-content {
            padding: 40px 40px 32px;
            position: relative;
            z-index: 2;
        }

        .recipe-modal-title {
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
            line-height: 1.2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .recipe-modal-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-top: 8px;
            font-weight: 400;
        }

        .recipe-modal .btn-close {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 10;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            width: auto;
            height: auto;
            padding: 8px;
            transition: all 0.3s ease;
            filter: brightness(0) invert(1);
            opacity: 0.8;
        }

        .recipe-modal .btn-close:hover {
            opacity: 1;
            transform: scale(1.1);
            background: none;
        }

        .recipe-modal-body {
            padding: 0;
            max-height: 70vh;
            overflow-y: auto;
        }

        .recipe-info-section {
            background: #f8fffe;
            padding: 32px 40px;
            border-bottom: 1px solid #e2e8f0;
        }

        .recipe-meta-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
            margin-bottom: 24px;
        }

        .recipe-meta-card {
            background: white;
            padding: 20px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(76, 175, 80, 0.1);
            transition: all 0.3s ease;
        }

        .recipe-meta-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .recipe-meta-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
            color: white;
            font-size: 1.2rem;
        }

        .recipe-meta-label {
            font-size: 0.9rem;
            color: #718096;
            font-weight: 500;
            margin-bottom: 4px;
        }

        .recipe-meta-value {
            font-size: 1.1rem;
            font-weight: 700;
            color: #2d3748;
        }

        .recipe-content-section {
            padding: 40px;
        }

        .recipe-section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
            position: relative;
        }

        .recipe-section-title::after {
            content: '';
            flex-grow: 1;
            height: 2px;
            background: linear-gradient(135deg, #4CAF50, transparent);
            border-radius: 1px;
        }

        .recipe-section-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.1rem;
        }

        .recipe-ingredients, .recipe-instructions {
            background: #f8fffe;
            padding: 28px;
            border-radius: 20px;
            margin-bottom: 32px;
            border: 1px solid rgba(76, 175, 80, 0.1);
            position: relative;
        }

        .recipe-ingredients::before, .recipe-instructions::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            border-radius: 0 2px 2px 0;
        }

        .recipe-text {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #4a5568;
            white-space: pre-line;
            margin: 0;
        }

        .recipe-nutrition-info {
            background: linear-gradient(135deg, #e8f5e8, #f0f9f0);
            border: 1px solid rgba(76, 175, 80, 0.2);
            border-radius: 16px;
            padding: 24px;
            margin-top: 24px;
            position: relative;
        }

        .recipe-nutrition-info::before {
            content: '🥗';
            position: absolute;
            top: -12px;
            left: 24px;
            background: white;
            padding: 0 8px;
            font-size: 1.2rem;
        }

        .nutrition-info-title {
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 16px;
            font-size: 1.1rem;
        }

        .nutrition-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 16px;
        }

        .nutrition-item {
            text-align: center;
            background: white;
            padding: 16px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .nutrition-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: #4CAF50;
            margin-bottom: 4px;
        }

        .nutrition-label {
            font-size: 0.85rem;
            color: #718096;
            font-weight: 500;
        }

        /* Card Styles */
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
            position: relative;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .card-img-top {
            transition: all 0.3s ease;
        }

        .card:hover .card-img-top {
            transform: scale(1.05);
        }

        .card-body {
            padding: 30px;
        }

        .card-title {
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }

        .badge {
            border-radius: 15px;
            padding: 8px 15px;
            font-weight: 500;
        }

        .bg-success {
            background: linear-gradient(135deg, #4CAF50, #45a049) !important;
        }

        /* Section Headers */
        .section-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .section-header h2 {
            font-size: 3rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
            position: relative;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            border-radius: 2px;
        }

        /* Article Navigation */
        .article-navigation {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
            gap: 20px;
        }

        .nav-btn {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-btn:hover {
            background: #45a049;
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(76, 175, 80, 0.3);
        }

        .nav-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .page-indicator {
            background: #f8f9fa;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 500;
            color: #666;
        }

        /* Trusted Source Box */
        .trusted-source {
            background: #ffffff;
            border: 1px solid #e3f2fd;
            border-left: 4px solid #45a049;
            padding: 15px;
            margin: 0;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(25, 118, 210, 0.1);
        }

        .trusted-source .source-label {
            font-size: 0.75rem;
            color: #45a049;
            font-weight: 600;
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .trusted-source .source-name {
            font-weight: 600;
            color: #45a049;
            margin-bottom: 6px;
            font-size: 0.9rem;
        }

        .trusted-source .source-link {
            color: 45a049;
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 4px 8px;
            background: #e3f2fd;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .trusted-source .source-link:hover {
            background: #bbdefb;
            text-decoration: none;
            color: #45a049;
        }

        /* Calculator Section - Elegant Design */
        .calculator-section {
            background-image: url('img/kids.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }

        .calculator-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, 
                rgba(69, 160, 73, 0.85), 
                rgba(69, 160, 73, 0.75),
                rgba(69, 160, 73, 0.65)
            );
            z-index: 1;
        }

        .calculator-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 70%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 70% 30%, rgba(255, 255, 255, 0.08) 0%, transparent 50%);
            z-index: 2;
        }

        .calculator-content {
            position: relative;
            z-index: 3;
        }

        /* Section Header - More Professional */
        .section-header-calc {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-header-calc h2 {
            font-size: 3.2rem;
            font-weight: 700;
            color: white;
            margin-bottom: 16px;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            letter-spacing: -0.5px;
        }

        .section-header-calc .subtitle {
            font-size: 1.2rem;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.9);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Information Card - Elegant Design */
        .info-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 24px;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
            border-color: rgba(255, 255, 255, 0.25);
        }

        .info-card h3 {
            font-size: 1.8rem;
            font-weight: 600;
            color: white;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .info-card .icon-wrapper {
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .info-card p {
            font-size: 1.05rem;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.9);
            margin: 0;
            text-align: justify;
        }

        /* Calculator Form - Premium Design */
        .calculator-form-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 28px;
            padding: 50px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            position: relative;
            overflow: hidden;
        }

        .calculator-form-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        }

        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .form-header h3 {
            font-size: 1.6rem;
            font-weight: 600;
            color: white;
            margin-bottom: 8px;
        }

        .form-header p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.95rem;
            margin: 0;
        }

        /* Form Controls - Refined */
        .form-group {
            margin-bottom: 24px;
            position: relative;
        }

        .form-label {
            color: white;
            font-weight: 500;
            margin-bottom: 8px;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-label i {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .form-control, .form-select {
            border-radius: 16px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.08);
            color: white;
            padding: 16px 20px;
            font-size: 1rem;
            font-weight: 400;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus, .form-select:focus {
            border-color: rgba(255, 255, 255, 0.5);
            background: rgba(255, 255, 255, 0.12);
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.15),
                        inset 0 2px 4px rgba(0, 0, 0, 0.1);
            color: white;
            outline: none;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
            font-weight: 400;
        }

        .form-select option {
            background: #45a049;
            color: white;
            padding: 10px;
        }

        /* Submit Button - Sophisticated */
        .btn-calculate {
            background: linear-gradient(135deg, #ffffff, #f8fafc);
            color: #45a049;
            border: none;
            padding: 18px 40px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
            min-width: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin: 0 auto;
            margin-top: 30px;
        }

        .btn-calculate::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.5s ease;
        }

        .btn-calculate:hover {
            background: linear-gradient(135deg, #f8fafc, #e2e8f0);
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(255, 255, 255, 0.3);
            color: #45a049;
        }

        .btn-calculate:hover::before {
            left: 100%;
        }

        .btn-calculate:active {
            transform: translateY(-1px);
        }

        /* Floating Elements */
        .floating-element {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            width: 60px;
            height: 60px;
            top: 15%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: 40px;
            height: 40px;
            top: 25%;
            right: 15%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            width: 80px;
            height: 80px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }
        /* Modal Styles */
        .modal-xl {
            max-width: 1000px;
        }

        .modal-content {
            border-radius: 20px;
            border: none;
            overflow: hidden;
        }

        .modal-header {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            border: none;
            padding: 0;
            position: relative;
        }

        .modal-title {
            font-weight: 600;
        }

        .btn-close {
            filter: brightness(0) invert(1);
        }

        .modal-body {
            padding: 0;
            max-height: 80vh;
            overflow-y: auto;
        }

        /* Article Header with Image */
        .article-header {
            position: relative;
            height: 250px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .article-header-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.4);
            transition: all 0.3s ease;
        }

        .article-header-overlay {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            padding: 30px;
            max-width: 700px;
        }

        .article-header-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
            line-height: 1.2;
        }

        .article-meta {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .article-meta .badge {
            font-size: 0.8rem;
            padding: 6px 12px;
            border-radius: 15px;
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.3);
        }

        .article-date {
            background: rgba(255,255,255,0.1);
            padding: 6px 12px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            font-size: 0.8rem;
        }

        /* Header tanpa gambar */
        .article-header-no-image {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            padding: 40px 30px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .article-header-no-image::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: float 6s ease-in-out infinite;
        }

        /* Trusted Source dalam Modal */
        .trusted-source-modal {
            background: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            padding: 20px 30px;
        }

        .trusted-source-modal .trusted-source {
            margin: 0;
            padding: 12px;
        }

        /* Article Content */
        .article-content {
            padding: 30px;
            text-align: justify;
            line-height: 1.8;
            font-size: 1.05rem;
            color: #444;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        /* Debug Styles */
        .debug-info {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            font-family: monospace;
            font-size: 12px;
        }

        .custom-footer {
    background-color: #2e7d32; /* Hijau gelap yang elegan */
    color: #fff;
    padding: 40px 20px;
    margin-top: 60px;
    font-family: 'Segoe UI', sans-serif;
}

.custom-footer .footer-title {
    font-size: 1.6rem;
    margin-bottom: 15px;
    font-weight: bold;
}

.custom-footer p {
    margin: 6px 0;
    font-size: 0.95rem;
}

.custom-footer .footer-tagline {
    font-style: italic;
    color: #c8e6c9;
}

.custom-footer .footer-credits {
    font-size: 0.85rem;
    color: #a5d6a7;
}

.custom-footer i {
    margin-right: 8px;
    color: #a5d6a7;
}


        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Recipe Grid Styles */
        .recipe-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .no-recipes-message {
            text-align: center;
            padding: 60px 20px;
            color: #718096;
        }

        .no-recipes-message i {
            font-size: 3rem;
            color: #e2e8f0;
            margin-bottom: 20px;
        }

        .no-recipes-message h4 {
            color: #4a5568;
            margin-bottom: 10px;
        }

        /* Article Carousel Styles */
        .article-carousel-container {
            position: relative;
            overflow: hidden;
        }

        .article-carousel-wrapper {
            overflow: hidden;
        }

        .article-carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .article-carousel-slide {
            flex: 0 0 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .article-carousel-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .article-carousel-btn {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .article-carousel-btn:hover {
            background: #45a049;
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(76, 175, 80, 0.3);
        }

        .article-carousel-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .article-carousel-indicator {
            background: #f8f9fa;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 500;
            color: #666;
        }

        .no-articles-message {
            text-align: center;
            padding: 60px 20px;
            color: #718096;
        }

        .no-articles-message i {
            font-size: 3rem;
            color: #e2e8f0;
            margin-bottom: 20px;
        }

        .no-articles-message h4 {
            color: #4a5568;
            margin-bottom: 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .hero-section .lead {
                font-size: 1.1rem;
            }
            
            .section-header h2 {
                font-size: 2rem;
            }
            
            .calculator-card {
                padding: 30px 20px;
            }
            
            .stat-number {
                font-size: 2rem;
            }

            .article-navigation {
                flex-direction: column;
                gap: 10px;
            }

            .article-header {
                height: 200px;
            }
            
            .article-header-title {
                font-size: 1.4rem;
            }
            
            .article-header-overlay {
                padding: 20px;
            }
            
            .article-content {
                padding: 20px;
            }
            
            .article-meta {
                flex-direction: column;
                gap: 8px;
            }

            .trusted-source-modal {
                padding: 15px 20px;
            }

            /* Recipe responsive styles */
            .recipe-section {
                padding: 60px 0;
            }

            .recipe-card-body {
                padding: 24px 20px;
            }

            .recipe-title {
                font-size: 1.2rem;
            }

            .recipe-meta {
                gap: 16px;
            }

            .recipe-meta-item {
                font-size: 0.9rem;
            }

            .recipe-modal .modal-dialog {
                margin: 1rem;
            }

            .recipe-header-content {
                padding: 24px 20px;
            }

            .recipe-modal-title {
                font-size: 1.5rem;
            }

            .recipe-content-section {
                padding: 24px 20px;
            }

            .recipe-meta-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .recipe-ingredients, .recipe-instructions {
                padding: 20px;
            }

            .filter-buttons {
                gap: 8px;
            }

            .filter-btn {
                padding: 10px 16px;
                font-size: 0.9rem;
                min-width: 100px;
            }

            .recipe-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }

        @media (max-width: 576px) {
            .article-header-title {
                font-size: 1.2rem;
            }
            
            .article-header {
                height: 180px;
            }

            .recipe-image-container {
                height: 180px;
            }

            .recipe-modal-title {
                font-size: 1.3rem;
            }

            .recipe-section-title {
                font-size: 1.3rem;
            }

            .filter-buttons {
                flex-direction: column;
                align-items: stretch;
            }

            .filter-btn {
                width: 100%;
            }
        }

        /* Recipe Modal Header dengan Gambar */
        .recipe-modal-header-image {
            position: relative;
            height: 280px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .recipe-header-bg-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.4);
            transition: all 0.3s ease;
        }

        .recipe-header-overlay {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            padding: 40px;
            max-width: 800px;
        }

        .recipe-header-title {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 16px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
            line-height: 1.2;
        }

        .recipe-header-meta {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
            margin-top: 12px;
        }

        .recipe-header-badge {
            font-size: 0.9rem;
            padding: 8px 16px;
            border-radius: 20px;
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.3);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Header tanpa gambar untuk resep */
        .recipe-header-no-image {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            padding: 50px 40px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .recipe-header-no-image::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: float 6s ease-in-out infinite;
        }

        /* Recipe Carousel Styles */
        .recipe-carousel-container {
            position: relative;
            overflow: hidden;
        }

        .recipe-carousel-wrapper {
            overflow: hidden;
        }

        .recipe-carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .recipe-carousel-slide {
            flex: 0 0 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .recipe-carousel-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .recipe-carousel-btn {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .recipe-carousel-btn:hover {
            background: #45a049;
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(76, 175, 80, 0.3);
        }

        .recipe-carousel-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .recipe-carousel-indicator {
            background: #f8f9fa;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 500;
            color: #666;
        }

        /* Recipe Card Styles (Consistent with Existing Styles) */
        .recipe-card {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            border: 1px solid rgba(76, 175, 80, 0.1);
            height: 100%;
        }

        .recipe-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 48px rgba(0, 0, 0, 0.15);
            border-color: rgba(76, 175, 80, 0.2);
        }

        .recipe-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #4CAF50, #45a049, #66BB6A);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .recipe-card:hover::before {
            opacity: 1;
        }

        .recipe-image-container {
            position: relative;
            height: 220px;
            overflow: hidden;
            background: linear-gradient(135deg, #f5f5f5, #e8e8e8);
        }

        .recipe-card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
            filter: brightness(0.95) saturate(1.1);
        }

        .recipe-card:hover .recipe-card-img {
            transform: scale(1.08);
            filter: brightness(1) saturate(1.2);
        }

        .recipe-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                135deg, 
                rgba(76, 175, 80, 0.1) 0%, 
                rgba(69, 160, 73, 0.05) 100%
            );
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .recipe-card:hover .recipe-overlay {
            opacity: 1;
        }

        .recipe-badge {
            position: absolute;
            top: 16px;
            right: 16px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            color: #4CAF50;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(76, 175, 80, 0.2);
        }

        .recipe-card-body {
            padding: 32px 28px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .recipe-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 16px;
            line-height: 1.3;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .recipe-meta {
            display: flex;
            gap: 24px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .recipe-meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #718096;
            font-size: 0.95rem;
            font-weight: 500;
        }

        .recipe-meta-item i {
            color: #4CAF50;
            font-size: 1rem;
        }

        .recipe-description {
            color: #4a5568;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 24px;
            flex-grow: 1;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .recipe-btn {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            border: none;
            padding: 14px 28px;
            border-radius: 16px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
            box-shadow: 0 4px 16px rgba(76, 175, 80, 0.3);
            position: relative;
            overflow: hidden;
        }

        .recipe-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .recipe-btn:hover {
            background: linear-gradient(135deg, #45a049, #388e3c);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(76, 175, 80, 0.4);
            color: white;
        }

        .recipe-btn:hover::before {
            left: 100%;
        }

        /* IMPROVED RECIPE MODAL STYLES */
        .recipe-modal .modal-dialog {
            max-width: 900px;
            margin: 2rem auto;
        }

        .recipe-modal .modal-content {
            border-radius: 24px;
            border: none;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .recipe-modal-header {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            padding: 0;
            border: none;
            position: relative;
            overflow: hidden;
        }

        .recipe-modal-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.1) 0%, transparent 100%);
        }

        .recipe-header-content {
            padding: 40px 40px 32px;
            position: relative;
            z-index: 2;
        }

        .recipe-modal-title {
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
            line-height: 1.2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .recipe-modal-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-top: 8px;
            font-weight: 400;
        }

        .recipe-modal .btn-close {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 10;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            width: auto;
            height: auto;
            padding: 8px;
            transition: all 0.3s ease;
            filter: brightness(0) invert(1);
            opacity: 0.8;
        }

        .recipe-modal .btn-close:hover {
            opacity: 1;
            transform: scale(1.1);
            background: none;
        }

        .recipe-modal-body {
            padding: 0;
            max-height: 70vh;
            overflow-y: auto;
        }

        .recipe-info-section {
            background: #f8fffe;
            padding: 32px 40px;
            border-bottom: 1px solid #e2e8f0;
        }

        .recipe-meta-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
            margin-bottom: 24px;
        }

        .recipe-meta-card {
            background: white;
            padding: 20px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(76, 175, 80, 0.1);
            transition: all 0.3s ease;
        }

        .recipe-meta-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .recipe-meta-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
            color: white;
            font-size: 1.2rem;
        }

        .recipe-meta-label {
            font-size: 0.9rem;
            color: #718096;
            font-weight: 500;
            margin-bottom: 4px;
        }

        .recipe-meta-value {
            font-size: 1.1rem;
            font-weight: 700;
            color: #2d3748;
        }

        .recipe-content-section {
            padding: 40px;
        }

        .recipe-section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
            position: relative;
        }

        .recipe-section-title::after {
            content: '';
            flex-grow: 1;
            height: 2px;
            background: linear-gradient(135deg, #4CAF50, transparent);
            border-radius: 1px;
        }

        .recipe-section-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.1rem;
        }

        .recipe-ingredients, .recipe-instructions {
            background: #f8fffe;
            padding: 28px;
            border-radius: 20px;
            margin-bottom: 32px;
            border: 1px solid rgba(76, 175, 80, 0.1);
            position: relative;
        }

        .recipe-ingredients::before, .recipe-instructions::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            border-radius: 0 2px 2px 0;
        }

        .recipe-text {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #4a5568;
            white-space: pre-line;
            margin: 0;
        }

        .recipe-nutrition-info {
            background: linear-gradient(135deg, #e8f5e8, #f0f9f0);
            border: 1px solid rgba(76, 175, 80, 0.2);
            border-radius: 16px;
            padding: 24px;
            margin-top: 24px;
            position: relative;
        }

        .recipe-nutrition-info::before {
            content: '🥗';
            position: absolute;
            top: -12px;
            left: 24px;
            background: white;
            padding: 0 8px;
            font-size: 1.2rem;
        }

        .nutrition-info-title {
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 16px;
            font-size: 1.1rem;
        }

        .nutrition-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 16px;
        }

        .nutrition-item {
            text-align: center;
            background: white;
            padding: 16px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .nutrition-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: #4CAF50;
            margin-bottom: 4px;
        }

        .nutrition-label {
            font-size: 0.85rem;
            color: #718096;
            font-weight: 500;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <i></i>StuPedia
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#beranda">
                        <i></i>Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#artikel">
                        <i></i>Edukasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#resep">
                        <i></i>Resep MPASI
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kalkulator">
                        <i></i>Kalkulator
                    </a>
                </li>
            </ul>
            <a href="admin/login.php" class="btn btn-outline-success">
                <i class="fas fa-user-shield me-1"></i>Admin Login
            </a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="beranda" class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="display-4 mb-4">WELCOME TO STUPEDIA</h1>
            <p class="lead mb-4">Temukan Ilmu, Sajikan Gizi, Cegah Stunting Sejak Dini!</p>
            <a href="#kalkulator" class="btn btn-hero">
                <i class="fas fa-chart-line me-2"></i>Cek Status Stunting
            </a>
        </div>
    </div>
</section>

<!-- Statistik -->
<section class="stats-section">
    <div class="container">
        <div class="section-header">
            <h2>Statistik Stunting Indonesia</h2>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="stat-card">
                    <div class="stat-number text-danger">21.6%</div>
                    <div class="stat-text">Stunting balita, SSGI 2023</div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-card">
                    <div class="stat-number text-warning">7.7%</div>
                    <div class="stat-text">Wasting balita, SSGI 2023</div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-card">
                    <div class="stat-number text-info">17.0%</div>
                    <div class="stat-text">Underweight balita, SSGI 2021</div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-card">
                    <div class="stat-number text-success">6.0%</div>
                    <div class="stat-text">Bayi dengan BBLR, SSGI 2022</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Artikel Section -->
<section id="artikel" class="py-5">
    <div class="container">
        <div class="section-header">
            <h2>Edukasi</h2>
            <p><h4>Selamat Datang di Fitur Edukasi!</h4>
            Temukan berbagai artikel informatif dan terpercaya seputar pencegahan stunting. 
            Mulai dari gizi anak, MPASI sehat, sanitasi, hingga perkembangan balita, semua dikemas ringan dan mudah dipahami.
        </p>
        </div>
        
        <!-- Debug Info -->
        <div class="debug-info" id="debugInfo" style="display: none;">
            <strong>Debug Info:</strong><br>
            <span id="debugText">Loading...</span>
        </div>
        
        <!-- Article Filter -->
        <div class="article-filter-container">
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">
                    <i class="fas fa-th-large"></i>
                    Semua Artikel
                </button>
                <button class="filter-btn" data-filter="gizi">
                    <i class="fas fa-apple-alt"></i>
                    Gizi
                </button>
                <button class="filter-btn" data-filter="kesehatan">
                    <i class="fas fa-heartbeat"></i>
                    Kesehatan
                </button>
                <button class="filter-btn" data-filter="mpasi">
                    <i class="fas fa-baby-carriage"></i>
                    MPASI
                </button>
                <button class="filter-btn" data-filter="perkembangan">
                    <i class="fas fa-child"></i>
                    Perkembangan
                </button>
            </div>
            <div class="article-count" id="articleCount">
                Menampilkan <span class="count-number">0</span> artikel
            </div>
        </div>

        <!-- Article Carousel Container -->
        <div class="article-carousel-container">
            <div class="article-carousel-wrapper">
                <div class="article-carousel-track" id="articleCarouselTrack">
                    <!-- Loading state -->
                    <div class="article-carousel-slide">
                        <div class="text-center py-5">
                            <i class="fas fa-spinner fa-spin fa-2x text-muted mb-3"></i>
                            <h5 class="text-muted">Memuat artikel...</h5>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Carousel Navigation -->
            <div class="article-carousel-navigation">
                <button class="article-carousel-btn" id="articlePrevBtn" onclick="changeArticlePage(-1)">
                    <i class="fas fa-chevron-left"></i>
                    Sebelumnya
                </button>
                <div class="article-carousel-indicator" id="articlePageIndicator">
                    Memuat...
                </div>
                <button class="article-carousel-btn" id="articleNextBtn" onclick="changeArticlePage(1)">
                    Selanjutnya
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
        
    </div>
</section>

<!-- IMPROVED RESEP SECTION WITH FILTER + CAROUSEL -->
<section id="resep" class="recipe-section">
    <div class="container">
        <div class="section-header">
            <h2>Resep MPASI</h2>
            <p><h4>Selamat Datang di Fitur Resep MPASI dan Balita!</h4>
            Temukan berbagai inspirasi resep MPASI sehat dan lezat langsung dari Buku Resep MP-ASI Kementerian Kesehatan RI! Setiap menu dirancang secara khusus oleh ahli gizi untuk mendukung tumbuh kembang optimal si kecil. Disesuaikan dengan usia dan kebutuhan gizinya, Bunda kini bisa menyajikan makanan bergizi seimbang setiap hari dengan lebih mudah dan terpercaya. 
            Yuk, mulai perjalanan makan si kecil dengan resep yang sehat dan terjamin kualitasnya! 
            <br><strong>(Semua resep dibawah adalah untuk 3 porsi)</strong></br></p>
        </div>

        <!-- Recipe Filter -->
        <div class="recipe-filter-container">
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">
                    <i class="fas fa-th-large"></i>
                    Semua Resep
                </button>
                <button class="filter-btn" data-filter="6-8 bulan">
                    <i class="fas fa-baby"></i>
                    6-8 Bulan
                </button>
                <button class="filter-btn" data-filter="8-10 bulan">
                    <i class="fas fa-child"></i>
                    8-10 Bulan
                </button>
                <button class="filter-btn" data-filter="10-12 bulan">
                    <i class="fas fa-walking"></i>
                    10-12 Bulan
                </button>
                <button class="filter-btn" data-filter="12+ bulan">
                    <i class="fas fa-running"></i>
                    12+ Bulan
                </button>
            </div>
            <div class="recipe-count" id="recipeCount">
                Menampilkan <span class="count-number">0</span> resep
            </div>
        </div>

        <!-- Recipe Carousel Container -->
        <div class="recipe-carousel-container">
            <div class="recipe-carousel-wrapper">
                <div class="recipe-carousel-track" id="recipeCarouselTrack">
                    <!-- Loading state -->
                    <div class="recipe-carousel-slide">
                        <div class="text-center py-5">
                            <i class="fas fa-spinner fa-spin fa-2x text-muted mb-3"></i>
                            <h5 class="text-muted">Memuat resep...</h5>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Carousel Navigation -->
            <div class="recipe-carousel-navigation">
                <button class="recipe-carousel-btn" id="recipePrevBtn" onclick="changeRecipePage(-1)">
                    <i class="fas fa-chevron-left"></i>
                    Sebelumnya
                </button>
                <div class="recipe-carousel-indicator" id="recipePageIndicator">
                    Memuat...
                </div>
                <button class="recipe-carousel-btn" id="recipeNextBtn" onclick="changeRecipePage(1)">
                    Selanjutnya
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>

    </div>
</section>

<!-- Kalkulator Section -->
<section id="kalkulator" class="calculator-section">
    <!-- Floating decorative elements -->
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    
    <div class="container calculator-content">
        <div class="section-header-calc">
            <h2>Kalkulator Stunting</h2>
            <p class="subtitle">Analisis pertumbuhan anak dengan standar WHO untuk deteksi dini stunting</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Information Card -->
                <div class="info-card">
                    <h3>
                        <div class="icon-wrapper">
                            <i class="fas fa-info-circle"></i>
                        </div>
                        Tentang Deteksi Stunting
                    </h3>
                    <p>
                        Stunting adalah kondisi gagal tumbuh pada anak akibat kekurangan gizi kronis. Anak dianggap stunting jika tinggi badannya berada di bawah -2 SD berdasarkan kurva pertumbuhan WHO.
                        Dengan mengisi data tinggi badan, usia, dan jenis kelamin anak, Anda dapat langsung mengetahui apakah anak termasuk dalam kategori pendek, sangat pendek, atau masih dalam rentang normal menurut standar WHO. 
                        Hasil dari kalkulator ini bersifat informatif dan bukan diagnosis medis. Untuk penilaian dan tindak lanjut lebih lanjut, silakan konsultasikan dengan tenaga kesehatan di fasilitas pelayanan terdekat.
                    </p>
                </div>

                <!-- Calculator Form -->
                <div class="calculator-form-card">
                    <div class="form-header">
                        <h3><i></i>Form Analisis Pertumbuhan</h3>
                        <p>Masukkan data anak untuk mendapatkan analisis pertumbuhan yang akurat</p>
                    </div>
                    
                    <form id="formKalkulator" method="POST" action="proses_kalkulator.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i></i>
                                        Nama Anak
                                    </label>
                                    <input type="text" class="form-control" name="nama_anak" placeholder="Masukkan nama anak" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i></i>
                                        Jenis Kelamin
                                    </label>
                                    <select class="form-select" name="jenis_kelamin" required>
                                        <option value="">Pilih jenis kelamin</option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i></i>
                                        Usia (bulan)
                                    </label>
                                    <input type="number" class="form-control" name="usia_bulan" min="6" max="60" placeholder="6-60 bulan" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i></i>
                                        Tinggi Badan (cm)
                                    </label>
                                    <input type="number" class="form-control" name="tinggi_badan" step="0.1" placeholder="Contoh: 85.5" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">
                                        <i></i>
                                        Berat Badan (kg)
                                    </label>
                                    <input type="number" class="form-control" name="berat_badan" step="0.1" placeholder="Contoh: 12.5" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-calculate">
                                <i></i>
                                Analisis Pertumbuhan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<!-- Footer -->
    <footer class="custom-footer">
        <div class="container">
            <!-- Logo dan Branding Section -->

            <div class="footer-logo-section center">
                <div class="logo-container">

                <div class="logo-item">
                    <div class="logo-placeholder">
                        <img src="img/LogoLS.png" alt="Logo KKN" class="logo-img">
                    </div>
                </div>

                <div class="logo-item">
                    <div class="logo-placeholder">
                        <img src="img/logo-kkn-ugm.png" alt="KKN UGM" class="logo-img">
                    </div>
                </div>
                </div>
                <h5 class="footer-title">Stupedia-Stunting Pedia</h5>
                <p class="footer-tagline">Temukan Ilmu, Sajikan Gizi, Cegah Stunting Sejak Dini!</p>
            </div>



            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p class="copyright">&copy; 2025 StuPedia. Semua hak dilindungi.</p>
                <p class="footer-credits">
                    Dikembangkan oleh <strong>Acha Cahyasa</strong> - Program KKN PPM UGM Periode II Tahun 2025<br>
                    <small>Dalam rangka pengabdian masyarakat dan pencegahan stunting</small>
                </p>
            </div>
        </div>
    </footer> 

<!-- IMPROVED RECIPE MODAL -->
<div class="modal fade recipe-modal" id="modalResep" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="recipe-modal-header" style="padding: 0; position: relative;">
                <!-- Header dengan gambar akan diisi di sini -->
            </div>
            <div class="recipe-modal-body" id="isiResep">
                <div class="text-center py-4">
                    <i class="fas fa-spinner fa-spin fa-2x"></i>
                    <p class="mt-2">Memuat resep...</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk detail artikel -->
<div class="modal fade" id="modalArtikel" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="padding: 0;">
                <div id="articleHeaderContainer" style="width: 100%; position: relative;">
                    <!-- Header dengan gambar akan diisi di sini -->
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" style="position: absolute; top: 15px; right: 15px; z-index: 10;"></button>
            </div>
            <div class="modal-body" id="isiArtikel">
                <div class="text-center py-4">
                    <i class="fas fa-spinner fa-spin fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Global variables
    let currentPage = 0;
    let articlesPerPage = 3;
    let totalArticles = 0;
    let allArticles = [];
    let debugMode = false;

    // Article filter + carousel variables
    let allArticlesData = [];
    let filteredArticles = [];
    let currentArticleFilter = 'all';
    let currentArticlePage = 0;
    let articlesPerCarouselPage = 3; // Menampilkan 3 artikel per halaman
    let totalFilteredArticles = 0;

    // Recipe filter + carousel variables
    let allRecipesData = [];
    let filteredRecipes = [];
    let currentFilter = 'all';
    let currentRecipePage = 0;
    let recipesPerPage = 3; // Menampilkan 3 resep per halaman
    let totalFilteredRecipes = 0;

    // Debug function
    function toggleDebug() {
        debugMode = !debugMode;
        const debugInfo = document.getElementById('debugInfo');
        debugInfo.style.display = debugMode ? 'block' : 'none';
    }

    function updateDebug(message) {
        if (debugMode) {
            document.getElementById('debugText').innerHTML += '<br>' + new Date().toLocaleTimeString() + ': ' + message;
        }
        console.log('DEBUG:', message);
    }

    // Recipe modal function
    function lihatResep(id) {
        // Show loading state
        document.getElementById('isiResep').innerHTML = `
            <div class="text-center py-4">
                <i class="fas fa-spinner fa-spin fa-2x text-success"></i>
                <p class="mt-2">Memuat resep...</p>
            </div>
        `;

        fetch('get_resep.php?id=' + id)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                console.log('Recipe data received:', data);
                
                if (data.error) {
                    throw new Error(data.message || 'Gagal memuat resep');
                }
                
                // Pastikan data tidak undefined
                const namaResep = data.nama_resep || 'Nama Resep Tidak Tersedia';
                const usiaAnak = data.usia_anak || 'Tidak Ditentukan';
                const energiKkal = data.energi_kkal || data.waktu_masak || 0;
                const proteinGr = data.protein_gr || 0;
                const lemakGr = data.lemak_gr || 0;
                const bahan = data.bahan || 'Bahan tidak tersedia';
                const caraMembuat = data.cara_membuat || 'Cara membuat tidak tersedia';
                const gambar = data.gambar || '';
                
                // Create header dengan gambar
                const headerHtml = gambar ? `
                    <div class="recipe-modal-header-image">
                        <img src="admin/uploads/${gambar}" 
                             alt="${namaResep}" 
                             class="recipe-header-bg-image"
                             onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\\'recipe-header-no-image\\'>Gambar tidak tersedia</div>';">
                        <div class="recipe-header-overlay">
                            <h1 class="recipe-header-title">
                                ${namaResep}
                            </h1>
                            <p class="recipe-modal-subtitle">Resep bergizi untuk tumbuh kembang optimal si kecil</p>
                            <div class="recipe-header-meta">
                                <span class="recipe-header-badge">
                                    <i class="fas fa-baby"></i>
                                    ${usiaAnak}
                                </span>
                                <span class="recipe-header-badge">
                                    <i class="fas fa-fire"></i>
                                    ${energiKkal} kkal
                                </span>
                            </div>
                        </div>
                    </div>
                ` : `
                    <div class="recipe-header-no-image">
                        <h1 class="recipe-header-title">
                            <i class="fas fa-utensils me-3"></i>${namaResep}
                        </h1>
                        <p class="recipe-modal-subtitle">Resep bergizi untuk tumbuh kembang optimal si kecil</p>
                        <div class="recipe-header-meta">
                            <span class="recipe-header-badge">
                                <i class="fas fa-baby"></i>
                                ${usiaAnak}
                            </span>
                            <span class="recipe-header-badge">
                                <i class="fas fa-fire"></i>
                                ${energiKkal} kkal
                            </span>
                        </div>
                    </div>
                `;

                // Update modal header dengan button close
                document.querySelector('.recipe-modal-header').innerHTML = headerHtml + `
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                `;
                
                // Update modal body dengan informasi nilai gizi
                document.getElementById('isiResep').innerHTML = `
                    <div class="recipe-content-section">
                        <div class="recipe-nutrition-info">
                            <div class="nutrition-info-title">
                                <i class="fas fa-chart-pie me-2"></i>
                                Informasi Nilai Gizi per Porsi
                            </div>
                            <div class="nutrition-grid">
                                <div class="nutrition-item">
                                    <div class="nutrition-value">${energiKkal}</div>
                                    <div class="nutrition-label">Energi (kkal)</div>
                                </div>
                                <div class="nutrition-item">
                                    <div class="nutrition-value">${proteinGr}</div>
                                    <div class="nutrition-label">Protein (gr)</div>
                                </div>
                                <div class="nutrition-item">
                                    <div class="nutrition-value">${lemakGr}</div>
                                    <div class="nutrition-label">Lemak (gr)</div>
                                </div>
                            </div>
                        </div>

                        <div class="recipe-section-title">
                            <div class="recipe-section-icon">
                                <i class="fas fa-list-ul"></i>
                            </div>
                            Bahan-bahan
                        </div>
                        <div class="recipe-ingredients">
                            <div class="recipe-text">${bahan.replace(/\n/g, '<br>')}</div>
                        </div>

                        <div class="recipe-section-title">
                            <div class="recipe-section-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            Cara Membuat
                        </div>
                        <div class="recipe-instructions">
                            <div class="recipe-text">${caraMembuat.replace(/\n/g, '<br>')}</div>
                        </div>
                    </div>
                `;
                
                new bootstrap.Modal(document.getElementById('modalResep')).show();
            })
            .catch(error => {
                console.error('Error loading recipe:', error);
                
                // Show error message in modal
                document.getElementById('isiResep').innerHTML = `
                    <div class="text-center py-5">
                        <i class="fas fa-exclamation-triangle fa-2x text-warning mb-3"></i>
                        <h5 class="text-warning">Gagal Memuat Resep</h5>
                        <p class="text-muted">${error.message}</p>
                        <button class="btn btn-outline-primary" onclick="lihatResep(${id})">
                            <i class="fas fa-refresh me-1"></i>Coba Lagi
                        </button>
                    </div>
                `;
            });
    }

    // Load recipes with filter functionality
    function loadRecipes() {
        // Show loading state
        const track = document.getElementById('recipeCarouselTrack');
        track.innerHTML = `
            <div class="recipe-carousel-slide">
                <div style="text-align: center; padding: 60px 0;">
                    <i class="fas fa-spinner fa-spin fa-2x text-muted mb-3"></i>
                    <h5 class="text-muted">Memuat resep...</h5>
                </div>
            </div>
        `;
        
        // Try to load from PHP first, then fallback to static data
        fetch('get_all_resep.php')
            .then(response => response.json())
            .then(data => {
                if (!data.error && data.length > 0) {
                    allRecipesData = data;
                    applyRecipeFilter(currentFilter);
                } else {
                    // Fallback to loading from existing PHP query
                    loadRecipesFromPHP();
                }
            })
            .catch(error => {
                console.error('Error loading recipes from API:', error);
                // Fallback to loading from existing PHP query
                loadRecipesFromPHP();
            });
    }

    // Fallback function to load recipes from existing PHP
    function loadRecipesFromPHP() {
        // Create static data from PHP output
        const staticRecipes = [];
        
        // Try to get recipes from existing PHP section
        <?php
        try {
            $stmt = $pdo->query("SELECT * FROM resep ORDER BY tanggal_dibuat DESC");
            $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo "const phpRecipes = " . json_encode($recipes) . ";";
            echo "staticRecipes.push(...phpRecipes);";
        } catch(Exception $e) {
            echo "console.error('PHP Error: " . addslashes($e->getMessage()) . "');";
        }
        ?>
        
        if (staticRecipes.length > 0) {
            allRecipesData = staticRecipes;
            applyRecipeFilter(currentFilter);
        } else {
            showNoRecipes();
        }
    }

    // Apply filter to recipes
    function applyRecipeFilter(filter) {
        currentFilter = filter;
        currentRecipePage = 0; // Reset to first page when filter changes
        
        if (filter === 'all') {
            filteredRecipes = allRecipesData;
        } else {
            filteredRecipes = allRecipesData.filter(recipe => recipe.usia_anak === filter);
        }
        
        totalFilteredRecipes = filteredRecipes.length;
        displayRecipeCarousel();
        updateRecipeCount();
        updateRecipeFilterButtons();
        updateRecipeNavigation();
    }

    // Display recipes in carousel format
    function displayRecipeCarousel() {
        const track = document.getElementById('recipeCarouselTrack');
        
        if (filteredRecipes.length === 0) {
            showNoRecipes();
            return;
        }
        
        // Calculate total pages
        const totalPages = Math.ceil(filteredRecipes.length / recipesPerPage);
        
        // Clear track
        track.innerHTML = '';
        
        // Create slides
        for (let page = 0; page < totalPages; page++) {
            const slide = document.createElement('div');
            slide.className = 'recipe-carousel-slide';
            
            const startIndex = page * recipesPerPage;
            const endIndex = Math.min(startIndex + recipesPerPage, filteredRecipes.length);
            
            // Create grid for this slide
            const slideContent = document.createElement('div');
            slideContent.className = 'recipe-grid';
            slideContent.style.display = 'grid';
            slideContent.style.gridTemplateColumns = 'repeat(auto-fit, minmax(350px, 1fr))';
            slideContent.style.gap = '30px';
            
            // Add recipes to this slide
            for (let i = startIndex; i < endIndex; i++) {
                const resep = filteredRecipes[i];
                const recipeCard = document.createElement('div');
                recipeCard.className = 'recipe-card';
                
                recipeCard.innerHTML = `
                    <div class="recipe-image-container">
                        ${resep.gambar ? `
                            <img src="admin/uploads/${resep.gambar}" class="recipe-card-img" alt="${resep.nama_resep}">
                        ` : `
                            <div class="recipe-card-img" style="background: linear-gradient(135deg, #f0f9f7, #e8f5e8); display: flex; align-items: center; justify-content: center; color: #4CAF50; font-size: 3rem;">
                                <i class="fas fa-utensils"></i>
                            </div>
                        `}
                        <div class="recipe-overlay"></div>
                        <div class="recipe-badge">
                            <i class="fas fa-baby me-1"></i>${resep.usia_anak}
                        </div>
                    </div>
                    <div class="recipe-card-body">
                        <h5 class="recipe-title">${resep.nama_resep}</h5>
                        <div class="recipe-meta">
                            <div class="recipe-meta-item">
                                <i class="fas fa-fire"></i>
                                <span>${resep.energi_kkal || '0'} kkal</span>
                            </div>
                            <div class="recipe-meta-item">
                                <i class="fas fa-dumbbell"></i>
                                <span>${resep.protein_gr || '0'}g protein</span>
                            </div>
                        </div>
                        <p class="recipe-description">
                            Resep bergizi tinggi yang diformulasikan khusus untuk mendukung tumbuh kembang optimal si kecil dengan bahan-bahan alami dan sehat.
                        </p>
                        <button class="recipe-btn" onclick="lihatResep(${resep.id})">
                            <i class="fas fa-book-open"></i>
                            Lihat Resep Lengkap
                        </button>
                    </div>
                `;
                
                slideContent.appendChild(recipeCard);
            }
            
            slide.appendChild(slideContent);
            track.appendChild(slide);
        }
        
        // Update carousel position
        updateRecipeCarouselPosition();
    }

    // Update recipe carousel position
    function updateRecipeCarouselPosition() {
        const track = document.getElementById('recipeCarouselTrack');
        const translateX = -currentRecipePage * 100;
        track.style.transform = `translateX(${translateX}%)`;
    }

    // Change recipe page (carousel navigation)
    function changeRecipePage(direction) {
        const totalPages = Math.ceil(filteredRecipes.length / recipesPerPage);
        const newPage = currentRecipePage + direction;
        
        if (newPage >= 0 && newPage < totalPages) {
            currentRecipePage = newPage;
            updateRecipeCarouselPosition();
            updateRecipeNavigation();
        }
    }

    // Update recipe navigation
    function updateRecipeNavigation() {
        const prevBtn = document.getElementById('recipePrevBtn');
        const nextBtn = document.getElementById('recipeNextBtn');
        const pageIndicator = document.getElementById('recipePageIndicator');
        
        const totalPages = Math.ceil(filteredRecipes.length / recipesPerPage);
        const startIndex = currentRecipePage * recipesPerPage + 1;
        const endIndex = Math.min((currentRecipePage + 1) * recipesPerPage, filteredRecipes.length);
        
        prevBtn.disabled = currentRecipePage === 0;
        nextBtn.disabled = currentRecipePage === totalPages - 1 || totalPages === 0;
        
        if (filteredRecipes.length > 0) {
            pageIndicator.textContent = `${startIndex}-${endIndex} dari ${filteredRecipes.length}`;
        } else {
            pageIndicator.textContent = 'Tidak ada resep';
        }
    }

    // Show no recipes message
    function showNoRecipes() {
        const track = document.getElementById('recipeCarouselTrack');
        track.innerHTML = `
            <div class="recipe-carousel-slide">
                <div class="no-recipes-message">
                    <i class="fas fa-search"></i>
                    <h4>Tidak ada resep ditemukan</h4>
                    <p>Coba pilih filter usia yang berbeda atau lihat semua resep</p>
                </div>
            </div>
        `;
    }

    // Update recipe count
    function updateRecipeCount() {
        const countElement = document.getElementById('recipeCount');
        const countNumber = countElement.querySelector('.count-number');
        countNumber.textContent = filteredRecipes.length;
    }

    // Update recipe filter buttons
    function updateRecipeFilterButtons() {
        const filterButtons = document.querySelectorAll('#resep .filter-btn');
        filterButtons.forEach(btn => {
            btn.classList.remove('active');
            if (btn.dataset.filter === currentFilter) {
                btn.classList.add('active');
            }
        });
    }

    // Load articles with filter functionality
    function loadArticles() {
        console.log('Fetching articles from get_artikel.php...');
        updateDebug('Starting to load articles...');
        
        // Show loading state
        const track = document.getElementById('articleCarouselTrack');
        track.innerHTML = `
            <div class="article-carousel-slide">
                <div style="text-align: center; padding: 60px 0;">
                    <i class="fas fa-spinner fa-spin fa-2x text-muted mb-3"></i>
                    <h5 class="text-muted">Memuat artikel...</h5>
                </div>
            </div>
        `;
        
        fetch('get_artikel.php')
            .then(response => {
                console.log('Response status:', response.status);
                updateDebug('Response status: ' + response.status);
                
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.text(); // Get as text first to see raw response
            })
            .then(text => {
                console.log('Raw response:', text);
                updateDebug('Raw response length: ' + text.length);
                
                // Try to parse as JSON
                let data;
                try {
                    data = JSON.parse(text);
                } catch (e) {
                    throw new Error('Invalid JSON response: ' + text.substring(0, 200));
                }
                
                console.log('Parsed data:', data);
                updateDebug('Parsed data type: ' + typeof data);
                
                if (data.error) {
                    throw new Error(data.error);
                }
                
                if (!Array.isArray(data)) {
                    throw new Error('Data is not an array: ' + typeof data);
                }
                
                allArticlesData = data;
                totalArticles = data.length;
                console.log('Total articles loaded:', totalArticles);
                updateDebug('Total articles loaded: ' + totalArticles);
                
                if (totalArticles > 0) {
                    applyArticleFilter(currentArticleFilter);
                } else {
                    showNoArticles();
                }
            })
            .catch(error => {
                console.error('Error loading articles:', error);
                updateDebug('Error: ' + error.message);
                showArticleError(error.message);
            });
    }

    // Apply filter to articles
    function applyArticleFilter(filter) {
        currentArticleFilter = filter;
        currentArticlePage = 0; // Reset to first page when filter changes
        
        if (filter === 'all') {
            filteredArticles = allArticlesData;
        } else {
            filteredArticles = allArticlesData.filter(article => article.kategori === filter);
        }
        
        totalFilteredArticles = filteredArticles.length;
        displayArticleCarousel();
        updateArticleCount();
        updateArticleFilterButtons();
        updateArticleNavigation();
    }

    // Display articles in carousel format
    function displayArticleCarousel() {
        const track = document.getElementById('articleCarouselTrack');
        
        if (filteredArticles.length === 0) {
            showNoArticles();
            return;
        }
        
        // Calculate total pages
        const totalPages = Math.ceil(filteredArticles.length / articlesPerCarouselPage);
        
        // Clear track
        track.innerHTML = '';
        
        // Create slides
        for (let page = 0; page < totalPages; page++) {
            const slide = document.createElement('div');
            slide.className = 'article-carousel-slide';
            
            const startIndex = page * articlesPerCarouselPage;
            const endIndex = Math.min(startIndex + articlesPerCarouselPage, filteredArticles.length);
            
            // Create grid for this slide
            const slideContent = document.createElement('div');
            slideContent.className = 'row';
            
            // Add articles to this slide
            for (let i = startIndex; i < endIndex; i++) {
                const artikel = filteredArticles[i];
                const articleCard = document.createElement('div');
                articleCard.className = 'col-md-4 mb-4';
                
                // Format tanggal
                const formattedDate = new Date(artikel.tanggal_dibuat).toLocaleDateString('id-ID', {
                    day: 'numeric',
                    month: 'short',
                    year: 'numeric'
                });
                
                // Pastikan konten tidak undefined
                const konten = artikel.konten || 'Tidak ada konten';
                const sumber = artikel.sumber || '';
                const sumberUrl = artikel.sumber_url || '#';
                
                articleCard.innerHTML = `
                    <div class="card h-100">
                        ${artikel.gambar ? `<img src="admin/uploads/${artikel.gambar}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="${artikel.judul}">` : ''}
                        <div class="card-body">
                            <h5 class="card-title">${artikel.judul}</h5>
                            <p class="card-text">${konten.substring(0, 100)}...</p>
                            
                            ${sumber ? `
                            <div class="trusted-source">
                                <div class="source-label">
                                    <i class="fas fa-shield-alt me-1"></i>Sumber Terpercaya:
                                </div>
                                <div class="source-name">${sumber}</div>
                                <a href="${sumberUrl}" target="_blank" class="source-link">
                                    <i class="fas fa-external-link-alt"></i>Kunjungi Sumber
                                </a>
                            </div>
                            ` : ''}

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <button class="btn btn-outline-success" onclick="lihatArtikel(${artikel.id})">
                                    <i class="fas fa-eye me-1"></i>Lihat Artikel
                                </button>
                                <span class="badge bg-success">
                                    <i class="fas fa-tag me-1"></i>${artikel.kategori.charAt(0).toUpperCase() + artikel.kategori.slice(1)}
                                </span>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <small class="text-muted">
                                <i class="fas fa-calendar-alt me-1"></i>
                                ${formattedDate}
                            </small>
                        </div>
                    </div>
                `;
                
                slideContent.appendChild(articleCard);
            }
            
            slide.appendChild(slideContent);
            track.appendChild(slide);
        }
        
        // Update carousel position
        updateArticleCarouselPosition();
    }

    // Update article carousel position
    function updateArticleCarouselPosition() {
        const track = document.getElementById('articleCarouselTrack');
        const translateX = -currentArticlePage * 100;
        track.style.transform = `translateX(${translateX}%)`;
    }

    // Change article page (carousel navigation)
    function changeArticlePage(direction) {
        const totalPages = Math.ceil(filteredArticles.length / articlesPerCarouselPage);
        const newPage = currentArticlePage + direction;
        
        if (newPage >= 0 && newPage < totalPages) {
            currentArticlePage = newPage;
            updateArticleCarouselPosition();
            updateArticleNavigation();
        }
    }

    // Update article navigation
    function updateArticleNavigation() {
        const prevBtn = document.getElementById('articlePrevBtn');
        const nextBtn = document.getElementById('articleNextBtn');
        const pageIndicator = document.getElementById('articlePageIndicator');
        
        const totalPages = Math.ceil(filteredArticles.length / articlesPerCarouselPage);
        const startIndex = currentArticlePage * articlesPerCarouselPage + 1;
        const endIndex = Math.min((currentArticlePage + 1) * articlesPerCarouselPage, filteredArticles.length);
        
        prevBtn.disabled = currentArticlePage === 0;
        nextBtn.disabled = currentArticlePage === totalPages - 1 || totalPages === 0;
        
        if (filteredArticles.length > 0) {
            pageIndicator.textContent = `${startIndex}-${endIndex} dari ${filteredArticles.length}`;
        } else {
            pageIndicator.textContent = 'Tidak ada artikel';
        }
    }

    // Show no articles message
    function showNoArticles() {
        const track = document.getElementById('articleCarouselTrack');
        track.innerHTML = `
            <div class="article-carousel-slide">
                <div class="no-articles-message">
                    <i class="fas fa-search"></i>
                    <h4>Tidak ada artikel ditemukan</h4>
                    <p>Coba pilih filter kategori yang berbeda atau lihat semua artikel</p>
                </div>
            </div>
        `;
    }

    // Show article error message
    function showArticleError(errorMessage) {
        const track = document.getElementById('articleCarouselTrack');
        track.innerHTML = `
            <div class="article-carousel-slide">
                <div class="text-center py-5">
                    <i class="fas fa-exclamation-triangle fa-2x text-warning mb-3"></i>
                    <h5 class="text-warning">Gagal memuat artikel</h5>
                    <p class="text-muted">Error: ${errorMessage}</p>
                    <div class="mt-3">
                        <button class="btn btn-outline-primary me-2" onclick="loadArticles()">
                            <i class="fas fa-refresh me-1"></i>Coba Lagi
                        </button>
                        <a href="admin/artikel.php" class="btn btn-outline-success">
                            <i class="fas fa-plus me-1"></i>Tambah Artikel
                        </a>
                    </div>
                </div>
            </div>
        `;
    }

    // Update article count
    function updateArticleCount() {
        const countElement = document.getElementById('articleCount');
        const countNumber = countElement.querySelector('.count-number');
        countNumber.textContent = filteredArticles.length;
    }

    // Update article filter buttons
    function updateArticleFilterButtons() {
        const filterButtons = document.querySelectorAll('#artikel .filter-btn');
        filterButtons.forEach(btn => {
            btn.classList.remove('active');
            if (btn.dataset.filter === currentArticleFilter) {
                btn.classList.add('active');
            }
        });
    }

    // Filter button event listeners
    document.addEventListener('DOMContentLoaded', function() {
        // Add event listeners to article filter buttons
        const articleFilterButtons = document.querySelectorAll('#artikel .filter-btn');
        articleFilterButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const filter = this.dataset.filter;
                applyArticleFilter(filter);
            });
        });

        // Add event listeners to recipe filter buttons
        const recipeFilterButtons = document.querySelectorAll('#resep .filter-btn');
        recipeFilterButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const filter = this.dataset.filter;
                applyRecipeFilter(filter);
            });
        });
        
        // Load initial data
        loadArticles();
        loadRecipes();
    });

    // View article details
    function lihatArtikel(id) {
        fetch('get_artikel.php?id=' + id)
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    throw new Error(data.error);
                }
                
                // Format tanggal
                const formattedDate = new Date(data.tanggal_dibuat).toLocaleDateString('id-ID', {
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric'
                });
                
                // Buat header dengan gambar dan judul
                const headerContainer = document.getElementById('articleHeaderContainer');
                
                if (data.gambar) {
                    headerContainer.innerHTML = `
                        <div class="article-header">
                            <img src="admin/uploads/${data.gambar}" 
                                 alt="${data.judul}" 
                                 class="article-header-image">
                            <div class="article-header-overlay">
                                <h1 class="article-header-title">
                                    ${data.judul}
                                </h1>
                                <div class="article-meta">
                                    <span class="badge">
                                        <i class="fas fa-tag me-2"></i>${data.kategori.charAt(0).toUpperCase() + data.kategori.slice(1)}
                                    </span>
                                    <span class="article-date">
                                        <i class="fas fa-calendar-alt me-2"></i>${formattedDate}
                                    </span>
                                </div>
                            </div>
                        </div>
                    `;
                } else {
                    headerContainer.innerHTML = `
                        <div class="article-header-no-image">
                            <h1 class="article-header-title">
                                <i class="fas fa-newspaper me-3"></i>${data.judul}
                            </h1>
                            <div class="article-meta">
                                <span class="badge">
                                    <i class="fas fa-tag me-2"></i>${data.kategori.charAt(0).toUpperCase() + data.kategori.slice(1)}
                                </span>
                                <span class="article-date">
                                    <i class="fas fa-calendar-alt me-2"></i>${formattedDate}
                                </span>
                            </div>
                        </div>
                    `;
                }
                
                // Isi konten artikel
                document.getElementById('isiArtikel').innerHTML = `
                    ${data.sumber ? `
                    <div class="trusted-source-modal">
                        <div class="trusted-source">
                            <div class="source-label">
                                <i class="fas fa-certificate me-1"></i>Sumber Referensi Resmi
                            </div>
                            <div class="source-name">${data.sumber}</div>
                            <a href="${data.sumber_url}" target="_blank" class="source-link">
                                <i class="fas fa-external-link-alt"></i>
                                Akses Sumber Resmi
                            </a>
                        </div>
                    </div>
                    ` : ''}
                    
                    <div class="article-content">
                        ${data.konten.replace(/\n/g, '<br>')}
                    </div>
                `;
                
                new bootstrap.Modal(document.getElementById('modalArtikel')).show();
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Gagal memuat detail artikel: ' + error.message);
            });
    }

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>
</body>
</html>
