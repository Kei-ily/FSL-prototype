<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Filipino Sign Language Learning</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
    }


   /* Hero Banner */
.hero-banner {
  position: relative;
  height: 450px;
  background-color: #212121;
  overflow: hidden;
}

.hero-banner::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url("homepageHI.png");
  background-size: cover;
  background-position: center;
  filter: brightness(0.7);
}

.hero-banner::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    to right,
    rgba(76, 29, 149, 0.7),
    rgba(219, 39, 119, 0.5)
  );
}

.hero-content {
  position: relative;
  z-index: 10;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: white;
  padding: 0 20px;
}

.subtitle {
  font-size: 20px;
  font-weight: 500;
  color: #fef08a;
  margin-bottom: 8px;
  animation: fadeIn 1s ease-out;
}

.title {
  font-size: 36px;
  font-weight: 700;
  margin-bottom: 16px;
  background: linear-gradient(to right, #fef9c3, #ffffff, #fecdd3);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

@media (min-width: 768px) {
  .title {
    font-size: 48px;
  }
}

.description {
  font-size: 16px;
  max-width: 600px;
  margin-bottom: 24px;
  color: #fef3c7;
  line-height: 1.7;
}

.hero-buttons {
  display: flex;
  flex-direction: column;
  gap: 12px;
  max-width: 400px;
  text-align: center;
  text-decoration: none;
}

@media (min-width: 640px) {
  .hero-buttons {
    flex-direction: row;
  }
}

.secondary-button {
  background-color: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(4px);
  border: 1px solid rgba(255, 255, 255, 0.3);
  color: white;
  font-weight: 500;
  padding: 8px 16px;
  border-radius: 9999px;
  transition: all 0.3s;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
}

.secondary-button:hover {
  background-color: rgba(255, 255, 255, 0.2);
  transform: translateY(-2px);
  box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

.primary-button {
  display: block;
  width: 200px;
  margin: 0;
  background: linear-gradient(to right, #8b5cf6, #ec4899);
  color: white;
  font-weight: 700;
  padding: 12px 0;
  border-radius: 9999px;
  transition: all 0.3s;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  font-size: 16px;
  text-decoration: none;
  text-align: center;
}

.primary-button:hover {
  transform: translateY(-3px) scale(1.05);
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
  background: linear-gradient(to right, #7c3aed, #db2777);
}

/* Categories Section */
.categories-section {
  padding: 64px 0;
background-color: #0f0f0fff;
}

.section-header {
  text-align: center;
  margin-bottom: 48px;
}

.section-title {
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 12px;
  background: linear-gradient(to right, #8b5cf6, #ec4899);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.section-description {
  font-size: 18px;
  color: #64748b;
  max-width: 600px;
  margin: 0 auto 16px;
}

.section-divider {
  width: 96px;
  height: 4px;
  background: linear-gradient(to right, #8b5cf6, #ec4899);
  border-radius: 2px;
  margin: 0 auto;
}

.categories-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
  gap: 24px;       /* space between items */
  padding: 0 90px; /* space on container sides */
  justify-items: center;
}

.category-card {
  width: 100%;
  max-width: 320px;
  height: 280px;
  background-color: #232023;
  border-radius: 16px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  transition: all 0.3s;
  display: flex;
  flex-direction: column;
}

.category-card:hover {
  transform: translateY(-5px) scale(1.02);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.card-header {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  margin-bottom: 16px;
}

.icon-container {
  width: 48px;
  height: 48px;
  border-radius: 12px;
  background: linear-gradient(to bottom right, #e9d5ff, #fbcfe8);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.icon-container i {
  font-size: 24px;
  color: #8b5cf6;
}

.lesson-count {
  display: flex;
  align-items: center;
  gap: 4px;
  background-color: #fef3c7;
  padding: 4px 8px;
  border-radius: 9999px;
  font-size: 12px;
  font-weight: 500;
  color: #b45309;
}

.lesson-count i {
  color: #f59e0b;
}

.card-title {
  font-size: 20px;
  font-weight: 700;
  color: white;
  margin-bottom: 8px;
}

.card-description {
  font-size: 14px;
  color: white;
  margin-bottom: 16px;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.time-estimate {
  display: flex;
  align-items: center;
  gap: 4px;
  font-size: 14px;
  color: #8b5cf6;
  margin-bottom: 16px;
}

.card-button {
  margin-top: auto;
  background: linear-gradient(to right, #8b5cf6, #ec4899);
  color: white;
  font-weight: 500;
  padding: 8px 0;
  border-radius: 9999px;
  transition: all 0.3s;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.card-button:hover {
  background: linear-gradient(to right, #7c3aed, #db2777);
  box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}


/* CTA Section */
.cta-section {
  padding: 80px 0;
  background-color: #0f0f0fff;
  position: relative;
  overflow: hidden;
}

.cta-section::before {
  content: "";
  position: absolute;
  top: 40px;
  right: 40px;
  width: 128px;
  height: 128px;
  border-radius: 50%;
  background-color: rgba(139, 92, 246, 0.2);
  animation: pulse 3s infinite;
}

.cta-section::after {
  content: "";
  position: absolute;
  bottom: 40px;
  left: 40px;
  width: 96px;
  height: 96px;
  border-radius: 50%;
  background-color: rgba(236, 72, 153, 0.2);
  animation: pulse 3s infinite 1.5s;
}

@keyframes pulse {
  0% {
    transform: scale(1);
    opacity: 0.2;
  }
  50% {
    transform: scale(1.1);
    opacity: 0.3;
  }
  100% {
    transform: scale(1);
    opacity: 0.2;
  }
}

.cta-title {
  font-size: 30px;
  font-weight: 700;
  text-align: center;
  margin-bottom: 16px;
  background: linear-gradient(to right, #8b5cf6, #ec4899);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.cta-description {
  font-size: 18px;
  color: #64748b;
  text-align: center;
  max-width: 600px;
  margin: 0 auto 32px;
}

.cta-button {
  display: block;
  width: 200px;
  margin: 0 auto;
  background: linear-gradient(to right, #8b5cf6, #ec4899);
  color: white;
  text-decoration: none;
  text-align: center;
  font-weight: 700;
  padding: 12px 0;
  border-radius: 9999px;
  transition: all 0.3s;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  font-size: 16px;
}

.cta-button:hover {
  transform: translateY(-3px) scale(1.05);
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
  background: linear-gradient(to right, #7c3aed, #db2777);
}

    
    /* Signup specific */
    .row {
      display: flex;
      gap: 10px;
      /* spacing between inputs */
      width: 100%;
      /* make row full width */
    }

    .row input {
      flex: 1;
      /* equal width */
      min-width: 0;
      /* prevent overflowing */
    }


    .gender {
      display: flex;
      gap: 15px;
      font-size: 14px;
    }

    /* Animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: scale(0.9);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }


    /* Footer */
    .footer {
      background: #0d0d0d;
      /* dark footer */
      color: #f5f5f5;
      padding: 30px 0;
      text-align: center;
    }

    .footer-container {
      width: 90%;
      max-width: 1200px;
      margin: auto;
    }

    .footer-logo {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .footer-logo .highlight {
      color: #4f46e5;
      /* same highlight as navbar */
      font-weight: bold;
    }

    .footer-logo .text {
      font-weight: bold;
      margin-left: 5px;
    }

    .footer-links {
      list-style: none;
      padding: 0;
      margin: 10px 0 15px 0;
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    .footer-links a {
      color: #f5f5f5;
      text-decoration: none;
      transition: 0.3s;
    }

    .footer-links a:hover {
      color: #2d9cdb;
      /* hover color */
    }

    .footer-copy {
      font-size: 14px;
      color: #aaa;
    }
  </style>
</head>

<body>
  <?php include "includes/header.php" ?>
    <!-- Hero Banner -->
    <section class="hero-banner">
      <div class="hero-content container">
        <h2 class="subtitle">Kumusta! (Hello!)</h2>
        <h1 class="title">Learn Filipino Sign Language</h1>
        <p class="description">
          Discover the beauty of Filipino Sign Language (FSL) through our
          interactive lessons, visual demonstrations, and practice exercises.
          Start your journey to communicate effectively with the Filipino Deaf
          community.
        </p>
        <div class="hero-buttons">
          <a  href="#categories-sec" class="primary-button">
            Start Learning
  </a>
          
        </div>
      </div>
    </section>

    <!-- Categories Section -->
    <section class="categories-section" id="categories-sec">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Explore Categories</h2>
          <p class="section-description">
            Discover different aspects of Filipino Sign Language through our
            categorized lessons and achievements
          </p>
          <div class="section-divider"></div>
        </div>

        <div class="categories-grid">
          <!-- Category Cards -->
          <div class="category-card">
            <div class="card-header">
              <div class="icon-container">
                <i class="fas fa-book-open"></i>
              </div>
              <div class="lesson-count">
                <i class="fas fa-hashtag"></i>
                <span>26 lessons</span>
              </div>
            </div>
            <h3 class="card-title">Sign Language Alphabet</h3>
            <p class="card-description">
              Learn the basic hand signs for each letter in the Filipino
              alphabet.
            </p>
            <div class="time-estimate">
              <i class="fas fa-clock"></i>
              <span>2 hours</span>
            </div>
            <button class="card-button">Explore Lessons</button>
          </div>

          <div class="category-card">
            <div class="card-header">
              <div class="icon-container">
                <i class="fas fa-comments"></i>
              </div>
              <div class="lesson-count">
                <i class="fas fa-hashtag"></i>
                <span>Ongoing</span>
              </div>
            </div>
            <h3 class="card-title">Common Phrases</h3>
            <p class="card-description">
              Master everyday expressions and phrases used in conversations.
            </p>
            <div class="time-estimate">
              <i class="fas fa-clock"></i>
              <span>Ongoing</span>
            </div>
            <button class="card-button">Explore Lessons</button>
          </div>

          <div class="category-card">
            <div class="card-header">
              <div class="icon-container">
                <i class="fas fa-hashtag"></i>
              </div>
              <div class="lesson-count">
                <i class="fas fa-hashtag"></i>
                <span>Ongoing</span>
              </div>
            </div>
            <h3 class="card-title">Numbers & Counting</h3>
            <p class="card-description">
              Learn how to sign numbers and count in Filipino Sign Language.
            </p>
            <div class="time-estimate">
              <i class="fas fa-clock"></i>
              <span>Ongoing</span>
            </div>
            <button class="card-button">Explore Lessons</button>
          </div>

          <div class="category-card">
            <div class="card-header">
              <div class="icon-container">
                <i class="fas fa-brain"></i>
              </div>
              <div class="lesson-count">
                <i class="fas fa-hashtag"></i>
                <span>Ongoing</span>
              </div>
            </div>
            <h3 class="card-title">Quizzes</h3>
            <p class="card-description">
              Test your knowledge with interactive quizzes on different FSL
              topics.
            </p>
            <div class="time-estimate">
              <i class="fas fa-clock"></i>
              <span>Ongoing</span>
            </div>
            <button class="card-button">Start Quiz</button>
          </div>

          <div class="category-card">
            <div class="card-header">
              <div class="icon-container">
                <i class="fas fa-gamepad"></i>
              </div>
              <div class="lesson-count">
                <i class="fas fa-hashtag"></i>
                <span>Ongoing</span>
              </div>
            </div>
            <h3 class="card-title">Games</h3>
            <p class="card-description">
              Have fun while learning with memory matching, speed challenges and
              more.
            </p>
            <div class="time-estimate">
              <i class="fas fa-clock"></i>
              <span>Ongoing</span>
            </div>
            <button class="card-button">Play Games</button>
          </div>

          <div class="category-card">
            <div class="card-header">
              <div class="icon-container">
                <i class="fas fa-trophy"></i>
              </div>
              <div class="lesson-count">
                <i class="fas fa-hashtag"></i>
                <span>Ongoing</span>
              </div>
            </div>
            <h3 class="card-title">Achievements</h3>
            <p class="card-description">
              Track your progress and earn badges as you master Filipino Sign
              Language skills.
            </p>
            <div class="time-estimate">
              <i class="fas fa-clock"></i>
              <span>Ongoing</span>
            </div>
            <button class="card-button">View Achievements</button>
          </div>
        </div>
      </div>
    </section>


    <!-- CTA Section -->
    <section class="cta-section">
      <div class="container">
        <h2 class="cta-title">Ready to Start Learning?</h2>
        <p class="cta-description">
          Join thousands of learners mastering Filipino Sign Language through
          our interactive platform. Start your journey today!
        </p>
        <a href="signup.php" class="cta-button">Create Free Account</a>
      </div>
    </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-container">
      <ul class="footer-links">
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Privacy Policy</a></li>
      </ul>
      <p class="footer-copy">
        © 2025 Filipino Sign Language. All rights reserved.
      </p>
    </div>
  </footer>

  <!-- External JavaScript -->
  <script>
    const loginModal = document.getElementById("loginModal");
    const signupModal = document.getElementById("signupModal");
    const openLogin = document.getElementById("openLogin");
    const openSignup = document.getElementById("openSignup");
    const closeBtns = document.querySelectorAll(".close");
    const switchToSignup = document.getElementById("switchToSignup");
    const switchToLogin = document.getElementById("switchToLogin");

    // Open modals
    openLogin.onclick = () => loginModal.style.display = "flex";
    openSignup.onclick = () => signupModal.style.display = "flex";

    // Close modals
    closeBtns.forEach(btn => {
      btn.onclick = () => {
        loginModal.style.display = "none";
        signupModal.style.display = "none";
      };
    });

    // Close when clicking outside
    window.onclick = (e) => {
      if (e.target === loginModal) loginModal.style.display = "none";
      if (e.target === signupModal) signupModal.style.display = "none";
    };

    // Switch between Login and Signup
    if (switchToSignup) {
      switchToSignup.onclick = () => {
        loginModal.style.display = "none";
        signupModal.style.display = "flex";
      };
    }

    if (switchToLogin) {
      switchToLogin.onclick = () => {
        signupModal.style.display = "none";
        loginModal.style.display = "flex";
      };
    }
  </script>
</body>


</html>