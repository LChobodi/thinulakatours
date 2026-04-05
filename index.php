<?php
// guest_dashboard.php
// Premium Thinulaka Guest Dashboard - Royal Purple & Gold Edition
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Thinulaka Tours</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Premium Asia travel experiences with Thinulaka. Curated luxury trips across South, East, Southeast, Central & West Asia.">
  
  <!-- PWA Meta Tags -->
  <meta name="theme-color" content="#6d28d9"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="manifest" href="manifest.json">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              50: '#f5f3ff',
              100: '#ede9fe',
              200: '#ddd6fe',
              300: '#c4b5fd',
              400: '#a78bfa',
              500: '#8b5cf6',
              600: '#7c3aed',
              700: '#6d28d9',
              800: '#5b21b6',
              900: '#4c1d95'
            },
            secondary: {
              50: '#fefce8',
              100: '#fef9c3',
              200: '#fef08a',
              300: '#fde047',
              400: '#facc15',
              500: '#eab308',
              600: '#ca8a04',
              700: '#a16207',
              800: '#854d0e',
              900: '#713f12'
            },
            premium: {
              purple: '#8b5cf6',
              gold: '#facc15',
              dark: '#1e1b4b',
              light: '#f5f3ff',
              cream: '#fefce8'
            },
            gradient: {
              start: '#6d28d9',
              middle: '#8b5cf6',
              end: '#facc15'
            }
          },
          animation: {
            'fade-in-up': 'fadeInUp 0.6s ease-out',
            'fade-in-down': 'fadeInDown 0.6s ease-out',
            'slide-in-right': 'slideInRight 0.6s ease-out',
            'zoom-in': 'zoomIn 0.8s ease-out',
            'float': 'float 6s ease-in-out infinite',
            'gradient-shift': 'gradientShift 3s ease infinite',
            'parallax': 'parallax 20s linear infinite',
            'pulse-slow': 'pulse 3s ease-in-out infinite',
            'bounce-slow': 'bounce 2s ease-in-out infinite',
            'spin-slow': 'spin 3s linear infinite',
            'morph': 'morph 8s ease-in-out infinite',
            'glow': 'glow 2s ease-in-out infinite alternate',
            'text-shimmer': 'textShimmer 3s ease infinite',
            'tilt': 'tilt 10s infinite linear',
            'sparkle': 'sparkle 1.5s ease-in-out infinite'
          },
          keyframes: {
            fadeInUp: {
              '0%': { opacity: '0', transform: 'translateY(30px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' }
            },
            fadeInDown: {
              '0%': { opacity: '0', transform: 'translateY(-30px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' }
            },
            slideInRight: {
              '0%': { opacity: '0', transform: 'translateX(30px)' },
              '100%': { opacity: '1', transform: 'translateX(0)' }
            },
            zoomIn: {
              '0%': { opacity: '0', transform: 'scale(0.9)' },
              '100%': { opacity: '1', transform: 'scale(1)' }
            },
            float: {
              '0%, 100%': { transform: 'translateY(0)' },
              '50%': { transform: 'translateY(-10px)' }
            },
            gradientShift: {
              '0%, 100%': { backgroundPosition: '0% 50%' },
              '50%': { backgroundPosition: '100% 50%' }
            },
            parallax: {
              '0%': { transform: 'translateY(0)' },
              '100%': { transform: 'translateY(-50%)' }
            },
            morph: {
              '0%': { borderRadius: '60% 40% 30% 70%/60% 30% 70% 40%' },
              '50%': { borderRadius: '30% 60% 70% 40%/50% 60% 30% 60%' },
              '100%': { borderRadius: '60% 40% 30% 70%/60% 30% 70% 40%' }
            },
            glow: {
              '0%': { boxShadow: '0 0 20px rgba(109, 40, 217, 0.3)' },
              '100%': { boxShadow: '0 0 30px rgba(109, 40, 217, 0.6), 0 0 40px rgba(250, 204, 21, 0.3)' }
            },
            textShimmer: {
              '0%': { backgroundPosition: '-200% center' },
              '100%': { backgroundPosition: '200% center' }
            },
            tilt: {
              '0%, 50%, 100%': { transform: 'rotate(0deg)' },
              '25%': { transform: 'rotate(1deg)' },
              '75%': { transform: 'rotate(-1deg)' }
            },
            sparkle: {
              '0%, 100%': { opacity: '0.3', transform: 'scale(1)' },
              '50%': { opacity: '1', transform: 'scale(1.1)' }
            }
          },
          backgroundSize: {
            '200%': '200% 200%',
            '300%': '300% 300%'
          },
          screens: {
            'xs': '475px',
            '3xl': '1600px',
            '4xl': '1920px'
          },
          backdropBlur: {
            'xs': '2px',
          }
        }
      }
    };
  </script>

  <!-- Fonts & Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Cinzel:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    :root {
      --primary-purple: #8b5cf6;
      --primary-dark: #6d28d9;
      --secondary-gold: #facc15;
      --secondary-dark-gold: #ca8a04;
      --gradient-start: #6d28d9;
      --gradient-middle: #8b5cf6;
      --gradient-end: #facc15;
    }
    
    body { 
      font-family: "Inter", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      background: linear-gradient(135deg, #0f0a23 0%, #1e1b4b 50%, #2d1b69 100%);
      color: #f5f3ff;
      overflow-x: hidden;
    }
    .premium-font { font-family: "Cinzel", "Playfair Display", serif; }
    .elegant-font { font-family: "Playfair Display", serif; }
    
    .glass-effect {
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .glass-effect-dark {
      background: rgba(30, 27, 75, 0.8);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(139, 92, 246, 0.2);
    }
    
    .royal-gradient {
      background: linear-gradient(135deg, #6d28d9 0%, #8b5cf6 40%, #facc15 100%);
      background-size: 200% 200%;
      animation: gradientShift 3s ease infinite;
    }
    
    .royal-gradient-reverse {
      background: linear-gradient(135deg, #facc15 0%, #8b5cf6 60%, #6d28d9 100%);
    }
    
    .purple-gradient {
      background: linear-gradient(135deg, #6d28d9 0%, #8b5cf6 100%);
    }
    
    .gold-gradient {
      background: linear-gradient(135deg, #facc15 0%, #eab308 100%);
    }
    
    .hover-lift {
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .hover-lift:hover {
      transform: translateY(-8px);
      box-shadow: 0 25px 50px -12px rgba(109, 40, 217, 0.35);
    }
    
    .text-gradient {
      background: linear-gradient(135deg, #facc15 0%, #8b5cf6 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .text-gold {
      background: linear-gradient(135deg, #facc15 0%, #eab308 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .text-purple {
      background: linear-gradient(135deg, #8b5cf6 0%, #6d28d9 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .text-shimmer {
      background: linear-gradient(90deg, #6d28d9, #8b5cf6, #facc15, #6d28d9, #8b5cf6);
      background-size: 300% 100%;
      animation: textShimmer 3s ease infinite;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .parallax-bg {
      background-image: url('img/bodhgaya.png');
      background-attachment: fixed;
      background-size: cover;
      background-position: center;
      filter: brightness(0.9) saturate(3);
    }
    
    .shadow-royal {
      box-shadow: 0 10px 25px -5px rgba(109, 40, 217, 0.3),
                  0 0 20px rgba(250, 204, 21, 0.1);
    }
    
    .shadow-gold {
      box-shadow: 0 10px 25px -5px rgba(250, 204, 21, 0.3);
    }
    
    .mobile-menu {
      transform: translateX(-100%);
      transition: transform 0.3s ease-in-out;
    }
    .mobile-menu.open {
      transform: translateX(0);
    }
    
    /* Advanced 3D Card Effects */
    .card-3d {
      transform-style: preserve-3d;
      perspective: 1000px;
    }
    .card-3d-inner {
      transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
      transform-style: preserve-3d;
    }
    .card-3d:hover .card-3d-inner {
      transform: rotateY(10deg) rotateX(5deg) translateZ(20px);
    }
    
    /* Gradient Border Effect */
    .gradient-border {
      position: relative;
      background: linear-gradient(135deg, #6d28d9, #facc15);
      padding: 2px;
      border-radius: 24px;
    }
    .gradient-border::before {
      content: '';
      position: absolute;
      inset: 2px;
      background: #1e1b4b;
      border-radius: 22px;
      z-index: 1;
    }
    .gradient-border > * {
      position: relative;
      z-index: 2;
    }
    
    .gradient-border-light {
      position: relative;
      background: linear-gradient(135deg, #6d28d9, #facc15);
      padding: 2px;
      border-radius: 24px;
    }
    .gradient-border-light::before {
      content: '';
      position: absolute;
      inset: 2px;
      background: #f5f3ff;
      border-radius: 22px;
      z-index: 1;
    }
    .gradient-border-light > * {
      position: relative;
      z-index: 2;
    }
    
    /* Morphing Background */
    .morph-bg {
      animation: morph 8s ease-in-out infinite;
      background: linear-gradient(45deg, #6d28d9, #8b5cf6, #facc15);
      filter: blur(60px);
      opacity: 0.15;
    }
    
    /* Sparkle Effect */
    .sparkle {
      position: absolute;
      width: 3px;
      height: 3px;
      background: #facc15;
      border-radius: 50%;
      box-shadow: 0 0 10px 2px #facc15;
      animation: sparkle 1.5s ease-in-out infinite;
    }
    
    /* Advanced Loading Animation */
    .advanced-loader {
      width: 60px;
      aspect-ratio: 1;
      display: grid;
      border-radius: 50%;
      background: conic-gradient(#0000 10%, #facc15);
      -webkit-mask: radial-gradient(farthest-side, rgba(0,0,0,0) calc(100% - 8px), #000 0);
      mask: radial-gradient(farthest-side, rgba(0,0,0,0) calc(100% - 8px), #000 0);
      animation: l20 1s infinite linear;
    }
    @keyframes l20 {to{transform: rotate(1turn)}}
    
    /* Enhanced responsive design */
    @media (max-width: 768px) {
      .hero-headline {
        font-size: 2.5rem;
        line-height: 1.2;
      }
      .destination-card {
        min-height: 300px;
      }
      .experience-grid {
        grid-template-columns: 1fr;
      }
      .card-3d:hover .card-3d-inner {
        transform: none;
      }
    }
    
    @media (max-width: 640px) {
      .hero-headline {
        font-size: 2rem;
      }
      .cta-buttons {
        flex-direction: column;
        width: 100%;
      }
      .cta-buttons a {
        width: 100%;
        text-align: center;
      }
    }
    
    /* Loading animations */
    .loading-bar {
      width: 100%;
      height: 3px;
      background: linear-gradient(90deg, #6d28d9, #8b5cf6, #facc15, #6d28d9);
      background-size: 200% 100%;
      animation: loading 2s infinite;
    }
    
    @keyframes loading {
      0% { background-position: 200% 0; }
      100% { background-position: -200% 0; }
    }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #1e1b4b;
    }
    ::-webkit-scrollbar-thumb {
      background: linear-gradient(135deg, #6d28d9, #facc15);
      border-radius: 10px;
    }
    
    /* Advanced Typing Animation */
    .typing-animation {
      overflow: hidden;
      border-right: 2px solid #facc15;
      white-space: nowrap;
      animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
    }
    
    @keyframes typing {
      from { width: 0 }
      to { width: 100% }
    }
    
    @keyframes blink-caret {
      from, to { border-color: transparent }
      50% { border-color: #facc15 }
    }
    
    /* Particle System */
    .particles-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 1;
    }
    
    .particle {
      position: absolute;
      background: radial-gradient(circle, #8b5cf6, transparent);
      border-radius: 50%;
      pointer-events: none;
    }
    
    /* Advanced Hover Effects */
    .magnetic-element {
      transition: transform 0.3s cubic-bezier(0.23, 1, 0.32, 1);
    }
    
    .magnetic-element:hover {
      transform: scale(1.05);
    }
    
    /* Gradient Text Animation */
    .animated-gradient-text {
      background: linear-gradient(-45deg, #6d28d9, #8b5cf6, #facc15, #6d28d9);
      background-size: 300% 300%;
      animation: gradientShift 3s ease infinite;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    /* Royal theme specific */
    .royal-border {
      border-color: rgba(139, 92, 246, 0.2);
    }
    .royal-hover:hover {
      background-color: rgba(139, 92, 246, 0.1);
      color: #facc15;
    }
    .royal-bg-light {
      background-color: rgba(139, 92, 246, 0.08);
    }
    
    /* Elegant Button Styles */
    .btn-royal {
      background: linear-gradient(135deg, #6d28d9 0%, #8b5cf6 50%, #facc15 100%);
      background-size: 200% 200%;
      animation: gradientShift 3s ease infinite;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }
    
    .btn-royal:hover {
      background-size: 150% 150%;
      transform: translateY(-2px);
      box-shadow: 0 15px 30px rgba(109, 40, 217, 0.4);
    }
    
    .btn-royal::after {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: rgba(255, 255, 255, 0.1);
      transform: rotate(45deg);
      transition: all 0.5s ease;
      opacity: 0;
    }
    
    .btn-royal:hover::after {
      opacity: 1;
      transform: rotate(45deg) translate(10%, 10%);
    }
    
    /* Section Backgrounds */
    .section-bg-dark {
      background: linear-gradient(135deg, #0f0a23 0%, #1e1b4b 100%);
    }
    
    .section-bg-darker {
      background: linear-gradient(135deg, #0a0619 0%, #0f0a23 100%);
    }
    
    /* Elegant Underline */
    .elegant-underline {
      position: relative;
      display: inline-block;
    }
    
    .elegant-underline::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 100%;
      height: 2px;
      background: linear-gradient(90deg, transparent, #facc15, transparent);
      transform: scaleX(0);
      transition: transform 0.3s ease;
    }
    
    .elegant-underline:hover::after {
      transform: scaleX(1);
    }
  </style>
</head>
<body class="min-h-screen">

  <!-- Sparkle Elements -->
  <div class="sparkle" style="top: 10%; left: 5%; animation-delay: 0.2s;"></div>
  <div class="sparkle" style="top: 20%; right: 10%; animation-delay: 0.7s;"></div>
  <div class="sparkle" style="bottom: 30%; left: 15%; animation-delay: 1.2s;"></div>
  <div class="sparkle" style="bottom: 20%; right: 20%; animation-delay: 0.9s;"></div>

  <!-- Advanced Loading Screen -->
  <div id="advanced-loader" class="fixed inset-0 z-50 flex items-center justify-center bg-[#0a0619] transition-opacity duration-500">
    <div class="text-center">
      <div class="advanced-loader mx-auto mb-6"></div>
      <div class="premium-font text-2xl font-black text-gradient">Thinulaka Tours</div>
      <p class="text-gray-400 mt-2">Loading Your Journey...</p>
    </div>
  </div>

  <!-- Particle System -->
  <div class="particles-container" id="particles-container"></div>

  <!-- Enhanced Mobile Menu -->
  <div id="mobile-menu" class="mobile-menu fixed inset-0 z-40 lg:hidden">
    <div class="fixed inset-0 bg-black/70 backdrop-blur-sm" id="mobile-menu-backdrop"></div>
    <div class="fixed top-0 left-0 h-full w-80 max-w-full bg-[#1e1b4b]/95 backdrop-blur-xl shadow-2xl overflow-y-auto">
      <div class="p-6">
        <!-- Mobile Header -->
        <div class="flex items-center justify-between mb-8">
          <div class="flex items-center gap-3">
            <div class="h-12 w-12 rounded-2xl royal-gradient flex items-center justify-center">
              <div class="h-8 w-8 rounded-lg bg-[#0a0619] flex items-center justify-center font-black text-purple-500 text-xs">TT</div>
            </div>
            <span class="premium-font font-black text-xl text-white">Thinulaka Tours</span>
          </div>
          <button id="mobile-menu-close" class="p-2 rounded-xl text-gray-400 hover:bg-purple-900/50">
            <i class="fas fa-times text-xl"></i>
          </button>
        </div>

        <!-- Mobile Navigation -->
        <nav class="space-y-4">
          <a href="gallery.php" class="flex items-center gap-4 p-4 rounded-2xl bg-purple-900/30 text-purple-300 font-semibold magnetic-element border border-purple-700/50">
            <i class="fas fa-images text-yellow-400 w-6 text-center animate-sparkle"></i>
			Gallery
          </a>
          <a href="#destinations" class="flex items-center gap-4 p-4 rounded-2xl text-gray-300 hover:bg-purple-900/30 hover:text-purple-300 transition-all font-semibold magnetic-element border border-transparent hover:border-purple-700/30">
            <i class="fas fa-map-marked-alt w-6 text-center"></i>
            Destinations
          </a>
          <a href="#experiences" class="flex items-center gap-4 p-4 rounded-2xl text-gray-300 hover:bg-purple-900/30 hover:text-purple-300 transition-all font-semibold magnetic-element border border-transparent hover:border-purple-700/30">
            <i class="fas fa-gem w-6 text-center"></i>
            Contact Us
          </a>
          <a href="#aboutus" class="flex items-center gap-4 p-4 rounded-2xl text-gray-300 hover:bg-purple-900/30 hover:text-purple-300 transition-all font-semibold magnetic-element border border-transparent hover:border-purple-700/30">
            <i class="fas fa-comment-alt w-6 text-center"></i>
            About Us
          </a>
        </nav>

        <!-- Mobile CTA Buttons -->
        <div class="mt-8 space-y-4">
          <a href="https://forms.gle/sTHao7ESq4vC3P1P8" class="block w-full text-center px-6 py-3 rounded-2xl glass-effect-dark text-gray-300 hover:text-white hover:bg-purple-900/50 transition-all font-semibold border border-purple-700/30 magnetic-element">
            Sign Up
          </a>
          <a href="https://www.facebook.com/people/Thinulaka-Tours-%E0%B6%AD%E0%B7%92%E0%B6%B1%E0%B7%94%E0%B6%BD%E0%B6%9A-%E0%B6%AF%E0%B6%B9%E0%B6%AF%E0%B7%92%E0%B7%80-%E0%B7%80%E0%B6%B1%E0%B7%8A%E0%B6%AF%E0%B6%B1%E0%B7%8F-%E0%B7%83%E0%B6%82%E0%B7%80%E0%B7%92%E0%B6%B0%E0%B7%8F%E0%B6%B1%E0%B6%BA/100091792071250/?locale=en_GB#" class="block w-full text-center px-6 py-3 rounded-2xl btn-royal text-white hover:shadow-2xl hover:shadow-purple-500/25 transition-all font-bold shadow-royal magnetic-element">
            <i class="fa-brands fa-facebook text-yellow-400"></i>
			<span class="relative z-10">Facebook</span>
          </a>
        </div>

        <!-- Mobile Contact Info -->
        <div class="mt-8 pt-8 border-t border-purple-700/30">
          <div class="space-y-3 text-sm text-gray-400">
            <div class="flex items-center gap-3">
              <i class="fas fa-phone-alt text-purple-400"></i>
              <span>+94 76 207 8253</span>
		      <span>+94 70 368 5162</span>
			  <span>+94 76 030 8553</span>
			  <span>+94 77 424 9030</span>
			  <span>+91 95 20 38 4769</span>
            </div>
            <a href="mailto:thinulakatours@gmail.com" class="block">
			<div class="flex items-center gap-3">
              <i class="fas fa-envelope text-purple-400"></i>
              <span>thinulakatours@gmail.com</span>
            </div>
			</a>
            <a href="https://www.facebook.com/people/Thinulaka-Tours-%E0%B6%AD%E0%B7%92%E0%B6%B1%E0%B7%94%E0%B6%BD%E0%B6%9A-%E0%B6%AF%E0%B6%B9%E0%B6%AF%E0%B7%92%E0%B7%80-%E0%B7%80%E0%B6%B1%E0%B7%8A%E0%B6%AF%E0%B6%B1%E0%B7%8F-%E0%B7%83%E0%B6%82%E0%B7%80%E0%B7%92%E0%B6%B0%E0%B7%8F%E0%B6%B1%E0%B6%BA/100091792071250/?locale=en_GB#" target="_blank" rel="noopener noreferrer">
			<div class="flex items-center gap-3">
              <i class="fa-brands fa-facebook text-yellow-400"></i>
              <span>Thinulaka Tours - තිනුලක දඹදිව වන්දනා සංවිධානය</span>
            </div>
			</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Enhanced Premium Navigation -->
  <header class="fixed top-0 left-0 right-0 z-30 glass-effect-dark border-b border-purple-700/30 backdrop-blur-xl">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-20">
        <!-- Logo -->
        <div class="flex items-center gap-3">
          <a href="https://info.thinulakatour.com/" class="flex items-center gap-3 group magnetic-element">
            <div class="h-14 w-14 rounded-2xl overflow-hidden shadow-lg shadow-purple-900/50 group-hover:scale-105 transition-transform duration-300 card-3d">
              <div class="card-3d-inner">
                <img src="img/Logo.jpg" alt="Thinulaka Logo" class="w-full h-full object-cover">
              </div>
            </div>
            <div class="flex flex-col leading-tight">
              <span class="premium-font font-black text-xl tracking-tight text-white">
                Thinulaka Tours 
              </span>
              <span class="hidden sm:inline-block text-xs text-purple-300 font-medium">
                Exclusive Asia Traveler
              </span>
            </div>
          </a>
        </div>

        <!-- Center Navigation -->
        <div class="hidden lg:flex items-center gap-8 text-sm font-semibold">
          <a href="gallery.php" class="text-gray-300 hover:text-yellow-300 transition-all duration-300 relative group magnetic-element elegant-underline">
            <span class="flex items-center gap-2">
              <i class="fas fa-image text-xs text-yellow-400 animate-sparkle"></i>
              Gallery
            </span>
          </a>
          <a href="#destinations" class="text-gray-300 hover:text-yellow-300 transition-all duration-300 relative group magnetic-element elegant-underline">
            Destinations
          </a>
          <a href="#experiences" class="text-gray-300 hover:text-yellow-300 transition-all duration-300 relative group magnetic-element elegant-underline">
            Contact Us
          </a>
          <a href="#aboutus" class="text-gray-300 hover:text-yellow-300 transition-all duration-300 relative group magnetic-element elegant-underline">
            About Us
          </a>
        </div>

        <!-- CTA Buttons -->
        <div class="hidden lg:flex items-center gap-4">
          <a href="https://forms.gle/sTHao7ESq4vC3P1P8"
             class="px-6 py-2.5 rounded-xl glass-effect-dark text-sm font-semibold text-gray-300 hover:text-white hover:bg-purple-900/50 transition-all duration-300 border border-purple-700/30 magnetic-element">
            Sign Up
          </a>
          <a href="https://www.facebook.com/people/Thinulaka-Tours-%E0%B6%AD%E0%B7%92%E0%B6%B1%E0%B7%94%E0%B6%BD%E0%B6%9A-%E0%B6%AF%E0%B6%B9%E0%B6%AF%E0%B7%92%E0%B7%80-%E0%B7%80%E0%B6%B1%E0%B7%8A%E0%B6%AF%E0%B6%B1%E0%B7%8F-%E0%B7%83%E0%B6%82%E0%B7%80%E0%B7%92%E0%B6%B0%E0%B7%8F%E0%B6%B1%E0%B6%BA/100091792071250/?locale=en_GB#"
             class="px-6 py-2.5 rounded-xl btn-royal text-sm font-bold text-white hover:shadow-2xl hover:shadow-purple-500/25 transition-all duration-300 shadow-royal magnetic-element">
            <i class="fa-brands fa-facebook text-wight-400"></i>
			<span class="relative z-10">Facebook</span>
          </a>
        </div>

        <!-- Enhanced Mobile Menu Button -->
        <button id="mobile-menu-button" class="lg:hidden inline-flex items-center justify-center p-3 rounded-2xl text-gray-300 hover:bg-purple-900/50 transition-colors magnetic-element">
          <i class="fas fa-bars text-lg"></i>
        </button>
      </div>
    </nav>
  </header>

  <!-- Enhanced Premium Hero Section -->
  <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20 section-bg-dark">
    <!-- Advanced Animated Background -->
    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-[#0a0619]/70 z-10"></div>
      <div class="parallax-bg absolute inset-0 animate-parallax"></div>
      <div class="absolute inset-0 bg-gradient-to-br from-purple-900/20 via-transparent to-yellow-900/10 z-20"></div>
      
      <!-- Morphing Background Elements -->
      <div class="absolute top-1/4 left-1/4 w-96 h-96 morph-bg"></div>
      <div class="absolute bottom-1/4 right-1/4 w-80 h-80 morph-bg" style="animation-delay: -4s;"></div>
      
      <!-- Floating Elements -->
      <div class="absolute top-20 left-10 animate-float">
        <div class="w-8 h-8 rounded-full bg-purple-500/30 backdrop-blur-sm"></div>
      </div>
      <div class="absolute top-40 right-20 animate-float" style="animation-delay: 1s;">
        <div class="w-6 h-6 rounded-full bg-yellow-400/40 backdrop-blur-sm"></div>
      </div>
      <div class="absolute bottom-40 left-20 animate-float" style="animation-delay: 2s;">
        <div class="w-10 h-10 rounded-full bg-purple-400/50 backdrop-blur-sm"></div>
      </div>
    </div>

    <div class="relative z-30 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div class="animate-fade-in-up">
        <!-- Premium Badge with Advanced Animation -->
        <div class="inline-flex items-center gap-3 glass-effect-dark px-6 py-3 rounded-2xl mb-8 border border-purple-700/50 shadow-royal">
          <i class="fas fa-gem text-yellow-400 animate-pulse-slow"></i>
          <span class="text-sm font-semibold text-yellow-300">EXCLUSIVE ASIA TRAVELER</span>
        </div>

        <!-- Main Headline with Typing Effect -->
        <h1 class="premium-font hero-headline text-4xl xs:text-5xl sm:text-6xl lg:text-7xl font-black mb-6 leading-tight">
          <span class="text-white">Exclusive</span>
          <span class="text-shimmer block mt-2 typing-animation">Asian Elegance</span>
        </h1>

        <!-- Subheadline -->
        <p class="text-lg sm:text-xl lg:text-2xl text-gray-300 max-w-4xl mx-auto mb-8 leading-relaxed">
          <span>Travel with Comfort. Explore Safely. Discover Your Dream Destinations.</span><br>
		  <span>Join Asia’s Most Exclusive Travelers.</span>
        </p>

        <!-- Enhanced CTA Buttons with 3D Effect -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12 cta-buttons">
          <a href="pilgrimage.php"
             class="group px-8 sm:px-12 py-4 rounded-2xl btn-royal text-base sm:text-lg font-bold text-white hover:shadow-2xl hover:shadow-purple-500/50 transition-all duration-500 transform hover:scale-105 shadow-royal w-full sm:w-auto magnetic-element card-3d">
             <div class="card-3d-inner">
              <span class="flex items-center gap-3 justify-center relative z-10">
                Begin India Journey
                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
              </span>
             </div>
          </a>
          <a href="#destinations"
             class="group px-8 sm:px-12 py-4 rounded-2xl glass-effect-dark text-base sm:text-lg font-semibold text-gray-300 border border-purple-700/50 hover:bg-purple-900/30 hover:text-white transition-all duration-300 shadow-sm w-full sm:w-auto magnetic-element">
            <span class="flex items-center gap-3 justify-center">
              Explore Destinations
              <i class="fas fa-compass group-hover:rotate-90 transition-transform"></i>
            </span>
          </a>
        </div>

        <!-- Premium Stats with Counter Animation -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 max-w-2xl mx-auto">
          <div class="text-center">
            <div class="text-xl sm:text-2xl font-black text-purple-400 mb-1 counter" data-target="15000">15K+</div>
            <div class="text-xs sm:text-sm text-gray-400">Travelers</div>
          </div>
          <div class="text-center">
            <div class="text-xl sm:text-2xl font-black text-yellow-400 mb-1">4.9★</div>
            <div class="text-xs sm:text-sm text-gray-400">Premium Rating</div>
          </div>
          <div class="text-center">
            <div class="text-xl sm:text-2xl font-black text-purple-400 mb-1 counter" data-target="800">800+</div>
            <div class="text-xs sm:text-sm text-gray-400">Tours</div>
          </div>
          <div class="text-center">
            <div class="text-xl sm:text-2xl font-black text-yellow-400 mb-1">24/7</div>
            <div class="text-xs sm:text-sm text-gray-400">Service</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Enhanced Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-30 animate-bounce-slow">
      <a href="#destinations" class="text-yellow-400 hover:text-yellow-300 transition-colors magnetic-element">
        <i class="fas fa-chevron-down text-2xl"></i>
      </a>
    </div>
  </section>

  <!-- ====== DESTINATIONS ====== -->
  <section id="destinations" class="py-16 sm:py-20 relative section-bg-darker">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center mb-12 sm:mb-16 animate-fade-in-up">
        <h2 class="premium-font text-3xl sm:text-4xl lg:text-5xl font-black mb-6">
          <span class="text-white">Curated</span>
          <span class="text-gradient block">Luxury Destinations</span>
        </h2>
        <p class="text-lg sm:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
          Explore handpicked luxury journeys across Asia, designed for exceptional travel experiences. Each journey is carefully designed for travelers who seek the best.
        </p>
      </div>

      <!-- Premium Destination Cards -->
      <div class="grid gap-6 sm:gap-8 md:grid-cols-2 xl:grid-cols-4">
	  <!-- Dabadiwa Card -->
        <div class="group relative overflow-hidden rounded-3xl hover-lift glass-effect-dark border border-purple-700/30 shadow-royal destination-card">
          <div class="relative h-64 sm:h-80 overflow-hidden">
            <img 
              src="img/bodhgaya.png"
              alt="Dabadiwa"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-[#0a0619]/90 via-transparent to-transparent"></div>
            <div class="absolute top-4 right-4">
              <span class="px-3 py-1 rounded-full royal-gradient text-white text-xs font-bold">PREMIUM</span>
            </div>
            <div class="absolute bottom-4 left-4">
              <h3 class="text-xl sm:text-2xl font-black text-white mb-2">Dabadiwa</h3>
              <p class="text-yellow-400 text-sm font-semibold">From Rs.226,000</p>
            </div>
          </div>
          <div class="p-4 sm:p-6">
            <div class="flex items-center gap-2 mb-3">
              <i class="fas fa-star text-yellow-400 text-sm"></i>
              <span class="text-sm text-gray-400">Varanasi · Bodh Gaya · Kushinagar · Rajgir · Vaishali</span>
            </div>
            <p class="text-gray-300 text-sm leading-relaxed mb-4">
              A journey of reverence, harmony, and timeless devotion.
            </p>
            <div class="flex items-center justify-between">
              <span class="text-xs text-gray-500">12-16 days</span>
              <a href="pilgrimage.php" class="text-purple-300 hover:text-purple-200 transition-colors inline-flex items-center">
				<i class="fas fa-arrow-right mr-1"></i> Explore India
			  </a>
            </div>
          </div>
        </div>
       
        
        <!-- India Card -->
        <div class="group relative overflow-hidden rounded-3xl hover-lift glass-effect-dark border border-purple-700/30 shadow-royal destination-card">
          <div class="relative h-64 sm:h-80 overflow-hidden">
            <img 
              src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
              alt="India Luxury"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-[#0a0619]/90 via-transparent to-transparent"></div>
            <div class="absolute top-4 right-4">
              <span class="px-3 py-1 rounded-full royal-gradient text-white text-xs font-bold">PREMIUM</span>
            </div>
            <div class="absolute bottom-4 left-4">
              <h3 class="text-xl sm:text-2xl font-black text-white mb-2">Golden Triangle</h3>
              <p class="text-yellow-400 text-sm font-semibold">From Rs.200,000</p>
            </div>
          </div>
          <div class="p-4 sm:p-6">
            <div class="flex items-center gap-2 mb-3">
              <i class="fas fa-star text-yellow-400 text-sm"></i>
              <span class="text-sm text-gray-400">Delhi · Agra · Jaipur</span>
            </div>
            <p class="text-gray-300 text-sm leading-relaxed mb-4">
              India’s rich history, architecture, and culture, featuring iconic landmarks like the Taj Mahal.
            </p>
            <div class="flex items-center justify-between">
              <span class="text-xs text-gray-500">5-8 days</span>
              <button class="text-purple-300 hover:text-purple-200 transition-colors">
                <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
		<!-- Shimla Card -->
        <div class="group relative overflow-hidden rounded-3xl hover-lift glass-effect-dark border border-purple-700/30 shadow-royal destination-card">
          <div class="relative h-64 sm:h-80 overflow-hidden">
            <img 
              src="img/shimla.jpg"
              alt="Shimla"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-[#0a0619]/90 via-transparent to-transparent"></div>
            <div class="absolute top-4 right-4">
              <span class="px-3 py-1 rounded-full royal-gradient text-white text-xs font-bold">PREMIUM</span>
            </div>
            <div class="absolute bottom-4 left-4">
              <h3 class="text-xl sm:text-2xl font-black text-white mb-2">Shimla</h3>
              <p class="text-yellow-400 text-sm font-semibold">From Rs.250,000</p>
            </div>
          </div>
          <div class="p-4 sm:p-6">
            <div class="flex items-center gap-2 mb-3">
              <i class="fas fa-star text-yellow-400 text-sm"></i>
              <span class="text-sm text-gray-400">Shimla · Manali</span>
            </div>
            <p class="text-gray-300 text-sm leading-relaxed mb-4">
              Himalayan escapes where breathtaking landscapes meet adventure and serenity.
            </p>
            <div class="flex items-center justify-between">
              <span class="text-xs text-gray-500">5-7 days</span>
              <button class="text-purple-300 hover:text-purple-200 transition-colors">
                <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
        <!-- Thailand Card -->
        <div class="group relative overflow-hidden rounded-3xl hover-lift glass-effect-dark border border-purple-700/30 shadow-royal destination-card">
          <div class="relative h-64 sm:h-80 overflow-hidden">
            <img 
              src="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
              alt="Thailand Luxury"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-[#0a0619]/90 via-transparent to-transparent"></div>
            <div class="absolute top-4 right-4">
              <span class="px-3 py-1 rounded-full royal-gradient text-white text-xs font-bold">PREMIUM</span>
            </div>
            <div class="absolute bottom-4 left-4">
              <h3 class="text-xl sm:text-2xl font-black text-white mb-2">Thailand</h3>
              <p class="text-yellow-400 text-sm font-semibold">From Rs.275,000</p>
            </div>
          </div>
          <div class="p-4 sm:p-6">
            <div class="flex items-center gap-2 mb-3">
              <i class="fas fa-star text-yellow-400 text-sm"></i>
              <span class="text-sm text-gray-400">Bangkok · Phuket · Chiang Mai</span>
            </div>
            <p class="text-gray-300 text-sm leading-relaxed mb-4">
              Private island access, luxury resorts, and exclusive culinary journeys.
            </p>
            <div class="flex items-center justify-between">
              <span class="text-xs text-gray-500">8-10 days</span>
              <button class="text-purple-300 hover:text-purple-200 transition-colors">
                <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>

		
		</div>
		
    </div>
  </section>

  <!-- ====== ASIA'S NATURAL WONDERS ====== -->
  <section class="py-16 sm:py-20 relative bg-gradient-to-b from-[#1e1b4b] to-[#0a0619]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12 sm:mb-16 animate-fade-in-up">
        <h2 class="premium-font text-3xl sm:text-4xl lg:text-5xl font-black mb-6">
          <span class="text-white">India's Natural</span>
          <span class="text-gradient block">Wonders</span>
        </h2>
        <p class="text-lg sm:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
          India’s famous Buddhist pilgrimage sites—from Bodh Gaya, where Buddha attained enlightenment, to Sarnath, Kushinagar, Nalanda, and Sanchi—offer a profound spiritual journey through his life, teachings, and India’s rich Buddhist heritage.
        </p>
      </div>

      <div class="grid gap-6 sm:gap-8 md:grid-cols-2 lg:grid-cols-3">
        <!-- Bodh Gaya, India -->
        <div class="group relative overflow-hidden rounded-3xl hover-lift glass-effect-dark border border-purple-700/30 shadow-royal">
          <div class="relative h-56 sm:h-64 overflow-hidden">
            <img 
              src="img/bodhgaya.png"
              alt="Bodh Gaya, India"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-[#0a0619]/90 via-transparent to-transparent"></div>
            <div class="absolute bottom-4 left-4">
              <h3 class="text-lg sm:text-xl font-black text-white">Bodh Gaya</h3>
              <p class="text-yellow-400 text-sm font-semibold">India</p>
            </div>
          </div>
        </div>

        <!-- Kushinagar, India -->
        <div class="group relative overflow-hidden rounded-3xl hover-lift glass-effect-dark border border-purple-700/30 shadow-royal">
          <div class="relative h-56 sm:h-64 overflow-hidden">
            <img 
              src="img/kusinagar.jpeg"
              alt="Kusinagar, India"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-[#0a0619]/90 via-transparent to-transparent"></div>
            <div class="absolute bottom-4 left-4">
              <h3 class="text-lg sm:text-xl font-black text-white">Kushinagar</h3>
              <p class="text-yellow-400 text-sm font-semibold">India</p>
            </div>
          </div>
        </div>

        <!-- Lumbini, India -->
        <div class="group relative overflow-hidden rounded-3xl hover-lift glass-effect-dark border border-purple-700/30 shadow-royal">
          <div class="relative h-56 sm:h-64 overflow-hidden">
            <img 
              src="img/lumbini.jpeg"
              alt="Lumbini, Indias"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-[#0a0619]/90 via-transparent to-transparent"></div>
            <div class="absolute bottom-4 left-4">
              <h3 class="text-lg sm:text-xl font-black text-white">Lumbini</h3>
              <p class="text-yellow-400 text-sm font-semibold">India</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====== PREMIUM EXPERIENCES ====== -->
  <section id="experiences" class="py-16 sm:py-20 relative section-bg-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
        <!-- Left Content -->
        <div class="animate-fade-in-up">
          <h2 class="premium-font text-3xl sm:text-4xl lg:text-5xl font-black mb-6">
            <span class="text-white"></span>
            <span class="text-gradient block">Contact Us</span>
          </h2>
          <p class="text-lg sm:text-xl text-gray-300 mb-8 leading-relaxed">
            <img 
              src="img/cover.jpg"
              alt="cover"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
            >
          </p>

          <!-- Experience Features -->
          <a href="https://maps.app.goo.gl/xkWShgCJ2bcpodHt9" target="_blank" class="text-purple-600 hover:underline"> 
		  <div class="space-y-6">
            <div class="flex items-start gap-4">
              <div class="h-12 w-12 rounded-2xl royal-gradient flex items-center justify-center flex-shrink-0 shadow-gold">
                <i class="fas fa-location text-white"></i>
              </div>
              <div>
                <h4 class="text-lg font-semibold text-white mb-2">Location</h4>
                <p class="text-gray-300"> Homagama, Buththala, Polonnaruwa, Balangoda, Kurunegala</p>
			  </div>
            </div>
			</a>
            <div class="flex items-start gap-4">
              <div class="h-12 w-12 rounded-2xl royal-gradient flex items-center justify-center flex-shrink-0 shadow-gold">
                <i class="fas fa-phone text-white"></i>
              </div>
              <div>
                <h4 class="text-lg font-semibold text-white mb-2">Contact</h4>
                <p class="text-gray-300">+94 76 207 8253</p>
				<p class="text-gray-300">+94 70 368 5162</p>
				<p class="text-gray-300">+94 76 030 8553</p>
				<p class="text-gray-300">+94 77 424 9030</p>
				<p class="text-gray-300">+91 95 20 38 4769</p>
              </div>
            </div>
          
          </div>
        </div>

        <!-- Right: Experience Showcase -->
        <div class="relative animate-zoom-in">
          <div class="glass-effect-dark rounded-3xl p-6 sm:p-8 border border-purple-700/50 shadow-royal">
            <div class="grid gap-4 sm:gap-6 experience-grid">
              <!-- Contact 1 -->
              <a href="mailto:thinulakatours@gmail.com" class="block">
			  <div class="flex items-center gap-4 p-4 rounded-2xl bg-purple-900/30 hover:bg-purple-800/40 transition-all duration-300 border border-purple-700/30">
                <div class="h-14 w-14 sm:h-16 sm:w-16 rounded-2xl royal-gradient flex items-center justify-center shadow-gold">
                  <i class="fas fa-envelope text-white text-lg sm:text-xl"></i>
                </div>
                <div>
                  <h4 class="font-semibold text-white mb-1">Gmail</h4>
                  <p class="text-sm text-gray-300">thinulakatours@gmail.com</p>
                </div>
              </div>
			  </a>
              <!-- Contact 2 -->
			  <a href="https://www.facebook.com/people/Thinulaka-Tours-%E0%B6%AD%E0%B7%92%E0%B6%B1%E0%B7%94%E0%B6%BD%E0%B6%9A-%E0%B6%AF%E0%B6%B9%E0%B6%AF%E0%B7%92%E0%B7%80-%E0%B7%80%E0%B6%B1%E0%B7%8A%E0%B6%AF%E0%B6%B1%E0%B7%8F-%E0%B7%83%E0%B6%82%E0%B7%80%E0%B7%92%E0%B6%B0%E0%B7%8F%E0%B6%B1%E0%B6%BA/100091792071250/?locale=en_GB#" target="_blank" rel="noopener noreferrer">
              <div class="flex items-center gap-4 p-4 rounded-2xl bg-purple-900/30 hover:bg-purple-800/40 transition-all duration-300 border border-purple-700/30">
                <div class="h-14 w-14 sm:h-16 sm:w-16 rounded-2xl royal-gradient flex items-center justify-center shadow-gold">
                  <i class="fa-brands fa-facebook text-white text-lg sm:text-xl"></i>
                </div>
                <div>
                  <h4 class="font-semibold text-white mb-1">Facebook</h4>
                  <p class="text-sm text-gray-300">Thinulaka Tours - තිනුලක දඹදිව වන්දනා සංවිධානය</p>
                </div>
              </div>
			  </a>

              <!-- Contact 3 -->
              <div class="flex items-center gap-4 p-4 rounded-2xl bg-purple-900/30 hover:bg-purple-800/40 transition-all duration-300 border border-purple-700/30">
                <div class="h-14 w-14 sm:h-16 sm:w-16 rounded-2xl royal-gradient flex items-center justify-center shadow-gold">
                  <i class="fas fa-globe text-white text-lg sm:text-xl"></i>
                </div>
                <div>
                  <h4 class="font-semibold text-white mb-1">Web</h4>
                  <p class="text-sm text-gray-300">www.thinulakatour.com</p>
                </div>
              </div>

              <!-- Contact 4 -->
			  <a href="https://wa.me/919520384769" target="_blank" rel="noopener noreferrer">
              <div class="flex items-center gap-4 p-4 rounded-2xl bg-purple-900/30 hover:bg-purple-800/40 transition-all duration-300 border border-purple-700/30">
                <div class="h-14 w-14 sm:h-16 sm:w-16 rounded-2xl royal-gradient flex items-center justify-center shadow-gold">
                  <i class="fa-brands fa-whatsapp text-white text-lg sm:text-xl"></i>
                </div>
                <div>
                  <h4 class="font-semibold text-white mb-1">WhatsApp</h4>
                  <p class="text-sm text-gray-300">+91 95 203 84769</p>
                </div>
              </div>
			  </a>	
			</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====== ABOUT US ====== -->
  <section id="aboutus" class="py-16 sm:py-20 relative bg-gradient-to-b from-[#0a0619] to-[#1e1b4b]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12 sm:mb-16 animate-fade-in-up">
        <h2 class="premium-font text-3xl sm:text-4xl lg:text-5xl font-black mb-6">
          <span class="text-white">Thinulaka Tours</span>
          <span class="text-gradient block">About Us</span>
        </h2>
        <p class="text-lg sm:text-xl text-gray-300 max-w-3xl mx-auto">
          We believe travel is more than just visiting places—it's about creating lasting memories and deep connections. At Thinulaka Tours, we carefully plan every detail, from comfortable accommodations to guided excursions, so you can travel with complete peace of mind. Whether you're seeking spiritual enlightenment, adventure, or relaxation, our personalized tour packages are designed to suit your needs. Let us take you on a journey that inspires and transforms.
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        <!-- Chairman -->
		<a href="https://wa.me/919520384769" target="_blank" rel="noopener noreferrer">
        <div class="group glass-effect-dark rounded-3xl p-6 sm:p-8 border border-purple-700/30 hover-lift shadow-royal">
          <div class="flex items-center gap-4 mb-6">
            <div class="h-20 w-20 sm:h-24 sm:w-24 rounded-2xl overflow-hidden shadow-gold">
				<img src="img/chairman.jpg" alt="Chairman" class="h-full w-full object-cover">
			</div> 
            <div>
              <h4 class="font-semibold text-white">Athula Sampath Dissanayake</h4>
              <p class="text-sm text-yellow-400">Co-Founder/Chairman</p>
            </div>
          </div>
          <p class="text-gray-300 leading-relaxed mb-6">
            "Travel is more than just visiting new places—it’s about discovering experiences that stay with you forever. At our company, we are dedicated to creating journeys that are comfortable, safe, and truly unforgettable. 
			 Each destination we offer is carefully selected to give you the perfect blend of luxury, culture, and adventure. Whether you seek relaxation or exploration, we ensure every detail is thoughtfully planned for your satisfaction.
			 Join us and explore the beauty of Asia with confidence, comfort, and elegance. Your dream journey begins here."
          </p>
          <div class="flex items-center justify-between">
            <div class="flex text-yellow-400">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>

          </div>
        </div>
		</a>
        <!-- Director -->
        <div class="group glass-effect-dark rounded-3xl p-6 sm:p-8 border border-purple-700/30 hover-lift shadow-royal">
          <div class="flex items-center gap-4 mb-6">
            <div class="h-20 w-20 sm:h-24 sm:w-24 rounded-2xl overflow-hidden shadow-gold">
				<img src="img/director.jpg" alt="Director" class="h-full w-full object-cover">
			</div> 
            <div>
              <h4 class="font-semibold text-white">Chandima Ruwan Ariyarathna</h4>
              <p class="text-sm text-yellow-400">Director</p>
            </div>
          </div>
          <p class="text-gray-300 leading-relaxed mb-6">
            "At the heart of our journey is a simple goal—to create travel experiences that inspire, delight, and leave lasting memories. We believe that every traveler deserves more than just a trip; they deserve a story worth telling.
			 Our team is committed to delivering carefully planned journeys that combine comfort, safety, and exceptional service. From breathtaking destinations to personalized experiences, every detail is designed with you in mind.
			 We invite you to travel with us and discover the true essence of Asia in style and confidence."
          </p>
          <div class="flex items-center justify-between">
            <div class="flex text-yellow-400">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            
          </div>
        </div>

        <!-- Managing Director -->
		<a href="https://wa.me/message/UB6TCUEZOD7MC1" target="_blank" rel="noopener noreferrer">
        <div class="group glass-effect-dark rounded-3xl p-6 sm:p-8 border border-purple-700/30 hover-lift shadow-royal">
          <div class="flex items-center gap-4 mb-6">
            <div class="h-20 w-20 sm:h-24 sm:w-24 rounded-2xl overflow-hidden shadow-gold">
				<img src="img/sanuja.jpg" alt="Managing Director" class="h-full w-full object-cover">
			</div> 
            <div>
              <h4 class="font-semibold text-white">Sanuja Dissanayake</h4>
              <p class="text-sm text-yellow-400">Managing Director</p>
            </div>
          </div>
          <p class="text-gray-300 leading-relaxed mb-6">
            "It’s about the experiences, memories, and connections you create along the way. As Managing Director, I am proud to lead a team that is passionate about delivering exceptional journeys tailored to your needs.
			 We focus on providing carefully curated travel experiences that combine comfort, safety, and a touch of luxury. Every journey we design reflects our commitment to quality, attention to detail, and customer satisfaction.
			 We look forward to being a part of your next adventure and helping you explore Asia with confidence and ease."
          </p>
          <div class="flex items-center justify-between">
            <div class="flex text-yellow-400">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            
          </div>
        </div>
		</a>
		<!-- Managing Director -->
		<div class="group glass-effect-dark rounded-3xl p-6 sm:p-8 border border-purple-700/30 hover-lift shadow-royal">
          <div class="flex items-center gap-4 mb-6">
            <div class="h-20 w-20 sm:h-24 sm:w-24 rounded-2xl overflow-hidden shadow-gold">
				<img src="img/nisansala.jpg" alt="Managing Director" class="h-full w-full object-cover">
			</div> 
            <div>
              <h4 class="font-semibold text-white">Nisansala Dissanayake</h4>
              <p class="text-sm text-yellow-400">Managing Director</p>
            </div>
          </div>
          <p class="text-gray-300 leading-relaxed mb-6">
            "As Managing Director, I’m proud to lead a team that creates memorable and enjoyable journeys. We focus on comfort, safety, and a touch of luxury in every trip.
			 We look forward to helping you explore Asia with ease and confidence."
          </p>
		  <p class="text-gray-300 leading-relaxed mb-6">
            Contact Number - +94 77 580 5196
          </p>
          <div class="flex items-center justify-between">
            <div class="flex text-yellow-400">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            
          </div>
        </div>
		<!-- Managing Director -->
		<div class="group glass-effect-dark rounded-3xl p-6 sm:p-8 border border-purple-700/30 hover-lift shadow-royal">
          <div class="flex items-center gap-4 mb-6">
            <div class="h-20 w-20 sm:h-24 sm:w-24 rounded-2xl overflow-hidden shadow-gold">
				<img src="img/nadeeka.jpg" alt="Managing Director" class="h-full w-full object-cover">
			</div> 
            <div>
              <h4 class="font-semibold text-white">Nadeeka Korathota</h4>
              <p class="text-sm text-yellow-400">Managing Director(Operation)</p>
            </div>
          </div>
          <p class="text-gray-300 leading-relaxed mb-6">
            "Travel is more than destinations—it’s about the experiences you carry with you. Our team is committed to making every journey across Asia safe, comfortable, and truly special."
          </p>
		  <p class="text-gray-300 leading-relaxed mb-6">
            Contact Number - +94 70 248 6976
          </p>
          <div class="flex items-center justify-between">
            <div class="flex text-yellow-400">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            
          </div>
        </div>
	  </div>
    </div>
  </section>

  <!-- ====== FINAL PREMIUM CTA ====== -->
  <section class="py-16 sm:py-20 relative section-bg-dark">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div class="glass-effect-dark rounded-3xl p-8 sm:p-12 border border-purple-700/50 relative overflow-hidden shadow-royal">
        <!-- Background Elements -->
        <div class="absolute -top-40 -right-40 h-80 w-80 rounded-full bg-purple-900/50 blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 h-80 w-80 rounded-full bg-yellow-900/30 blur-3xl"></div>
        
        <div class="relative z-10">
          <h2 class="premium-font text-3xl sm:text-4xl lg:text-5xl font-black mb-6">
            Ready for Your
            <span class="text-gradient block">Luxury Journey?</span>
          </h2>
          <p class="text-lg sm:text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            Join our community of Thinulaka Tours and experience Asia like never before. 
            Your Travel Companion.
          </p>
          
          <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="pilgrimage.php"
               class="group px-8 sm:px-12 py-4 rounded-2xl btn-royal text-base sm:text-lg font-bold text-white hover:shadow-2xl hover:shadow-purple-500/50 transition-all duration-500 transform hover:scale-105 shadow-royal w-full sm:w-auto">
              <span class="flex items-center gap-3 justify-center relative z-10">
                Begin Your Journey
                <i class="fas fa-gem group-hover:rotate-180 transition-transform"></i>
              </span>
            </a>
            <a href="https://forms.gle/sTHao7ESq4vC3P1P8"
               class="group px-8 sm:px-12 py-4 rounded-2xl glass-effect-dark text-base sm:text-lg font-semibold text-gray-300 border border-purple-700/50 hover:bg-purple-900/30 hover:text-white transition-all duration-300 shadow-sm w-full sm:w-auto">
              <span class="flex items-center gap-3 justify-center">
                Sign In to Account
                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
              </span>
            </a>
          </div>

          <p class="text-sm text-gray-400 mt-8">
            <i class="fas fa-shield-alt text-yellow-400 mr-2"></i>
            Secure booking · Best price guarantee · 24/7 Service
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ====== FOOTER ====== -->
  <footer class="border-t border-purple-700/30 bg-[#0a0619]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <div class="grid gap-8 md:grid-cols-4 mb-8">
        <div>
          <div class="flex items-center gap-3 mb-4">
            <div class="h-10 w-10 rounded-xl royal-gradient flex items-center justify-center">
              <div class="h-6 w-6 rounded-lg bg-[#0a0619] flex items-center justify-center font-black text-purple-400 text-xs">TT</div>
            </div>
            <span class="premium-font font-black text-lg text-white">Thinulaka Tours</span>
          </div>
          <p class="text-sm text-gray-400 mb-4">
            Curating Asia's finest luxury travel experiences for discerning travelers.
          </p>
          <div class="flex gap-3">
            <a href="#" class="h-10 w-10 rounded-xl glass-effect-dark flex items-center justify-center text-gray-400 hover:text-yellow-400 hover:bg-purple-900/50 transition-all border border-purple-700/30">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/people/Thinulaka-Tours-%E0%B6%AD%E0%B7%92%E0%B6%B1%E0%B7%94%E0%B6%BD%E0%B6%9A-%E0%B6%AF%E0%B6%B9%E0%B6%AF%E0%B7%92%E0%B7%80-%E0%B7%80%E0%B6%B1%E0%B7%8A%E0%B6%AF%E0%B6%B1%E0%B7%8F-%E0%B7%83%E0%B6%82%E0%B7%80%E0%B7%92%E0%B6%B0%E0%B7%8F%E0%B6%B1%E0%B6%BA/100091792071250/?locale=en_GB#" class="h-10 w-10 rounded-xl glass-effect-dark flex items-center justify-center text-gray-400 hover:text-yellow-400 hover:bg-purple-900/50 transition-all border border-purple-700/30">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.tiktok.com/@thinulaka.tours563?_r=1&_t=ZS-95GACtBFtG0" class="h-10 w-10 rounded-xl glass-effect-dark flex items-center justify-center text-gray-400 hover:text-yellow-400 hover:bg-purple-900/50 transition-all border border-purple-700/30">
              <i class="fab fa-tiktok"></i>
            </a>
			<a href="https://youtube.com/@thinulakatours?si=NI7TMQE-JZ1YkCQX" class="h-10 w-10 rounded-xl glass-effect-dark flex items-center justify-center text-gray-400 hover:text-yellow-400 hover:bg-purple-900/50 transition-all border border-purple-700/30">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>

        <div>
          <h3 class="font-semibold text-white mb-4">Destinations</h3>
          <ul class="space-y-2 text-sm text-gray-400">
            <li><a href="#" class="hover:text-yellow-400 transition-colors">India Pilgrimage</a></li>
            <li><a href="#" class="hover:text-yellow-400 transition-colors">Golden Triangle</a></li>
            <li><a href="#" class="hover:text-yellow-400 transition-colors">Shimla-Manali Tour</a></li>
            <li><a href="#" class="hover:text-yellow-400 transition-colors">Thailand Islands</a></li>
            <li><a href="#" class="hover:text-yellow-400 transition-colors">Sri Lanka Nature</a></li>
          </ul>
        </div>

        <div>
          <h3 class="font-semibold text-white mb-4">Experiences</h3>
          <ul class="space-y-2 text-sm text-gray-400">
            <li><a href="#" class="hover:text-yellow-400 transition-colors">Luxury Hotels</a></li>
            <li><a href="#" class="hover:text-yellow-400 transition-colors">Premium Vehicles</a></li>
            <li><a href="#" class="hover:text-yellow-400 transition-colors">Culinary Excellence</a></li>
            <li><a href="#" class="hover:text-yellow-400 transition-colors">Wellness Retreats</a></li>
            <li><a href="#" class="hover:text-yellow-400 transition-colors">Pilgrimage Travels</a></li>
          </ul>
        </div>

        <div>
          <h3 class="font-semibold text-white mb-4">Support</h3>
          <ul class="space-y-2 text-sm text-gray-400">
            <li><a href="#" class="hover:text-yellow-400 transition-colors">Contact Concierge</a></li>
            <li><a href="#" class="hover:text-yellow-400 transition-colors">Booking Assistance</a></li>
            <li><a href="#" class="hover:text-yellow-400 transition-colors">Travel Insurance</a></li>
            <li><a href="#" class="hover:text-yellow-400 transition-colors">Privacy Policy</a></li>
            <li><a href="#" class="hover:text-yellow-400 transition-colors">Terms of Service</a></li>
          </ul>
        </div>
      </div>

      <div class="pt-8 border-t border-purple-700/30 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-gray-500">
        <p>© <?php echo date('Y'); ?> Thinulaka Luxury Travel. All rights reserved.</p>
        <div class="flex items-center gap-4">
          <span>Exclusive Asia Traveler</span>
        </div>
      </div>
    </div>
  </footer>

  <!-- ====== COMBINED JAVASCRIPT ====== -->
  <script>
    // Advanced loading screen
    window.addEventListener('load', function() {
      const advancedLoader = document.getElementById('advanced-loader');
      if (advancedLoader) {
        setTimeout(() => {
          advancedLoader.style.opacity = '0';
          setTimeout(() => {
            advancedLoader.style.display = 'none';
          }, 500);
        }, 1000);
      }

      // Loading bar fade-out (if present)
      const loadingBar = document.querySelector('.loading-bar');
      if (loadingBar) {
        loadingBar.style.opacity = '0';
        setTimeout(() => {
          loadingBar.remove();
        }, 500);
      }
    });

    // Particle System
    function createParticles() {
      const container = document.getElementById('particles-container');
      if (!container) return;
      
      const particleCount = 30;
      
      for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        
        const size = Math.random() * 4 + 2;
        const posX = Math.random() * 100;
        const posY = Math.random() * 100;
        const delay = Math.random() * 5;
        const duration = Math.random() * 10 + 10;
        
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.left = `${posX}%`;
        particle.style.top = `${posY}%`;
        particle.style.opacity = Math.random() * 0.3 + 0.1;
        particle.style.animation = `float ${duration}s ease-in-out ${delay}s infinite`;
        
        container.appendChild(particle);
      }
    }

    // Magnetic effect for elements
    function initMagneticEffect() {
      const magneticElements = document.querySelectorAll('.magnetic-element');
      
      magneticElements.forEach(element => {
        element.addEventListener('mousemove', function(e) {
          const rect = this.getBoundingClientRect();
          const x = e.clientX - rect.left;
          const y = e.clientY - rect.top;
          
          const centerX = rect.width / 2;
          const centerY = rect.height / 2;
          
          const angleX = (y - centerY) / centerY * 10;
          const angleY = (centerX - x) / centerX * 10;
          
          this.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg) scale3d(1.05, 1.05, 1.05)`;
        });
        
        element.addEventListener('mouseleave', function() {
          this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
        });
      });
    }

    // Counter animation
    function initCounters() {
      const counters = document.querySelectorAll('.counter');
      
      counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const increment = target / 100;
        let current = 0;
        
        const updateCounter = () => {
          if (current < target) {
            current += increment;
            counter.innerText = Math.ceil(current).toLocaleString() + '+';
            setTimeout(updateCounter, 20);
          } else {
            counter.innerText = target.toLocaleString() + '+';
          }
        };
        
        // Start counter when element is in viewport
        const counterObserver = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              updateCounter();
              counterObserver.unobserve(entry.target);
            }
          });
        });
        
        counterObserver.observe(counter);
      });
    }

    // Advanced intersection observer for "advanced-animate" (optional hook)
    const advancedObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = 1;
          entry.target.style.transform = 'translateY(0) scale(1)';
          
          // Stagger animation for children
          const children = entry.target.querySelectorAll('.stagger-animate');
          children.forEach((child, index) => {
            child.style.animationDelay = `${index * 0.1}s`;
            child.classList.add('animate-fade-in-up');
          });
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    });

    // Original scroll animations for .animate-fade-in-* etc. (renamed observer to avoid conflicts)
    const scrollObserverOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const scrollObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = 1;
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, scrollObserverOptions);

    // Parallax effect for hero background
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      const parallax = document.querySelector('.parallax-bg');
      if (parallax) {
        parallax.style.transform = `translateY(${scrolled * 0.5}px)`;
      }
    });

    // Add floating animation delay to premium elements
    function initGradientDelays() {
      document.querySelectorAll('.royal-gradient').forEach((el, index) => {
        el.style.animationDelay = `${index * 0.2}s`;
      });
    }

    // Touch interactions (placeholder)
    let touchStartY = 0;
    let touchEndY = 0;

    document.addEventListener('touchstart', e => {
      touchStartY = e.changedTouches[0].screenY;
    });

    document.addEventListener('touchend', e => {
      touchEndY = e.changedTouches[0].screenY;
      handleSwipe();
    });

    function handleSwipe() {
      const swipeDistance = touchStartY - touchEndY;
      if (Math.abs(swipeDistance) > 50) {
        // Swipe detected – extend if needed
      }
    }

    // Lazy loading for images with data-src (optional; safe if unused)
    if ('IntersectionObserver' in window) {
      const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const img = entry.target;
            img.src = img.dataset.src;
            img.classList.remove('lazy');
            observer.unobserve(img);
          }
        });
      });

      document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
      });
    }

    // Initialize all advanced features
    document.addEventListener('DOMContentLoaded', function() {
      createParticles();
      initMagneticEffect();
      initCounters();
      initGradientDelays();
      
      // Observe elements for advanced animations (if you use .advanced-animate anywhere)
      document.querySelectorAll('.advanced-animate').forEach(el => {
        el.style.opacity = 0;
        el.style.transform = 'translateY(30px) scale(0.95)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        advancedObserver.observe(el);
      });

      // Scroll animations for animate-fade-in-*, etc.
      document.querySelectorAll('.animate-fade-in-up, .animate-fade-in-down, .animate-slide-in-right, .animate-zoom-in').forEach(el => {
        el.style.opacity = 0;
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        scrollObserver.observe(el);
      });

      // Enhanced mobile menu functionality
      const menuButton = document.getElementById('mobile-menu-button');
      const mobileMenu = document.getElementById('mobile-menu');
      const mobileMenuClose = document.getElementById('mobile-menu-close');
      const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');

      function toggleMobileMenu() {
        mobileMenu.classList.toggle('open');
        document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
      }

      if (menuButton) menuButton.addEventListener('click', toggleMobileMenu);
      if (mobileMenuClose) mobileMenuClose.addEventListener('click', toggleMobileMenu);
      if (mobileMenuBackdrop) mobileMenuBackdrop.addEventListener('click', toggleMobileMenu);

      // Smooth scrolling for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          const href = this.getAttribute('href');
          if (!href || href === '#') return;
          const target = document.querySelector(href);
          if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }
        });
      });
    });

    // Service Worker Registration for PWA
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', function() {
        navigator.serviceWorker.register('/sw.js')
          .then(function(registration) {
            console.log('ServiceWorker registration successful');
          })
          .catch(function(err) {
            console.log('ServiceWorker registration failed: ', err);
          });
      });
    }

    // Advanced performance monitoring
    const perfObserver = new PerformanceObserver((list) => {
      list.getEntries().forEach((entry) => {
        console.log(`${entry.name}: ${entry.startTime}`);
      });
    });

    perfObserver.observe({entryTypes: ['navigation', 'paint', 'largest-contentful-paint']});
  </script>
  <!-- TravelEase AI Chatbot (Guest/User) -->
  <div id="teChatLauncher" class="fixed bottom-5 right-5 z-[9999]">
    <button id="teChatOpenBtn" class="group flex items-center gap-3 rounded-full px-4 py-3 shadow-xl border border-white/20 bg-white/10 backdrop-blur-lg hover:bg-white/15 transition">
      <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-br from-purple-600 to-yellow-400 text-white shadow">
        <i class="fa-solid fa-robot"></i>
      </span>
      <span class="hidden sm:block text-sm font-semibold text-white">Ask Thinulaka</span>
    </button>
  </div>

  <div id="teChatPanel" class="fixed bottom-5 right-5 z-[9999] w-[92vw] max-w-sm hidden">
    <div class="rounded-2xl overflow-hidden shadow-2xl border border-white/15 bg-white/10 backdrop-blur-xl">
      <div class="px-4 py-3 flex items-center justify-between bg-gradient-to-r from-purple-700/80 via-purple-600/60 to-yellow-400/50">
        <div class="flex items-center gap-2">
          <span class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/15 text-white">
            <i class="fa-solid fa-comment-dots"></i>
          </span>
          <div class="leading-tight">
            <div class="text-sm font-bold text-white">Thinulaka Assistant</div>
            <div class="text-[11px] text-white/90">Ask questions • Book • Cancel • Email • PDF</div>
          </div>
        </div>
        <button id="teChatCloseBtn" class="h-9 w-9 rounded-full bg-white/10 hover:bg-white/20 text-white transition" aria-label="Close chat">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      <div id="teChatBody" class="h-80 p-3 space-y-2 overflow-y-auto bg-black/10">
        <div class="mr-auto max-w-[90%] rounded-2xl rounded-bl-md border border-white/10 bg-white/10 p-2 text-sm text-white">
          Hi! I’m your Thinulaka assistant. Tell me what you want to do (book/cancel/email/PDF) or ask anything about the system.
        </div>
      </div>

      <div class="p-3 border-t border-white/10 bg-white/5">
        <div class="flex gap-2">
          <input id="teChatInput" class="flex-1 rounded-xl px-3 py-2 text-sm bg-white/10 border border-white/10 text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-purple-400/60" placeholder="Type a message..." />
          <button id="teChatSendBtn" class="rounded-xl px-4 py-2 text-sm font-semibold text-white bg-purple-600 hover:bg-purple-700 transition">
            Send
          </button>
        </div>
        <div id="teChatHint" class="mt-2 text-[11px] text-white/60">
          Tip: For bookings, include destination + dates (YYYY-MM-DD).
        </div>
      </div>
    </div>
  </div>

  <script>
    (function () {
      const openBtn = document.getElementById('teChatOpenBtn');
      const closeBtn = document.getElementById('teChatCloseBtn');
      const panel = document.getElementById('teChatPanel');
      const launcher = document.getElementById('teChatLauncher');
      const body = document.getElementById('teChatBody');
      const input = document.getElementById('teChatInput');
      const sendBtn = document.getElementById('teChatSendBtn');

      function showPanel() {
        panel.classList.remove('hidden');
        launcher.classList.add('hidden');
        setTimeout(() => input && input.focus(), 50);
      }
      function hidePanel() {
        panel.classList.add('hidden');
        launcher.classList.remove('hidden');
      }

      function addMsg(text, who) {
        const div = document.createElement('div');
        div.className = (who === 'user')
          ? 'ml-auto max-w-[90%] rounded-2xl rounded-br-md bg-purple-700/60 border border-white/10 p-2 text-sm text-white'
          : 'mr-auto max-w-[90%] rounded-2xl rounded-bl-md border border-white/10 bg-white/10 p-2 text-sm text-white';
        div.textContent = text;
        body.appendChild(div);
        body.scrollTop = body.scrollHeight;
        return div;
      }

      async function sendMsg() {
        const msg = (input.value || '').trim();
        if (!msg) return;

        addMsg(msg, 'user');
        input.value = '';

        const typing = addMsg('Typing…', 'bot');

        try {
          const res = await fetch('chat_api.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ message: msg })
          });

          const data = await res.json().catch(() => ({}));
          typing.remove();

          const botText = (typeof data.reply === 'string' && data.reply.trim() !== '')
            ? data.reply
            : (typeof data.error === 'string' && data.error.trim() !== '')
              ? data.error
              : 'Sorry, something went wrong.';

          if (!res.ok) {
            addMsg(botText, 'bot');
            return;
          }

          addMsg(botText, 'bot');
        } catch (e) {
          typing.remove();
          addMsg('Network error connecting to chatbot.', 'bot');
        }
      }

      openBtn && openBtn.addEventListener('click', showPanel);
      closeBtn && closeBtn.addEventListener('click', hidePanel);
      sendBtn && sendBtn.addEventListener('click', sendMsg);
      input && input.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') sendMsg();
      });
    })();
  </script>
</body>
</html>