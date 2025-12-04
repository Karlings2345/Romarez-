<!DOCTYPE html>
<html lang="en">
<head>
<title>Romarez Explorer</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: "Segoe UI", Arial, sans-serif;
  background-color: #eef2f3;
  color: #333;
  line-height: 1.6;
}

/* Header */
header {
  background: linear-gradient(90deg, #4caf50, #66bb6a);
  padding: 30px;
  text-align: center;
  color: white;
  border-bottom: 5px solid #2e7d32;
  box-shadow: 0 2px 8px rgba(0,0,0,0.15);
}

header h1 {
  font-size: 2rem;
  letter-spacing: 1px;
}

/* Section layout */
section {
  display: flex;
  flex-wrap: wrap;
  margin: 25px;
  gap: 25px;
}

/* Navigation */
nav {
  flex: 1 1 230px;
  background: white;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 3px 8px rgba(0,0,0,0.1);
}

nav ul {
  list-style: none;
}

nav ul li {
  margin-bottom: 12px;
}

nav ul li a {
  display: block;
  padding: 12px;
  text-decoration: none;
  color: #333;
  font-size: 16px;
  border-radius: 8px;
  transition: 0.25s ease;
  font-weight: 500;
}

nav ul li a:hover,
nav ul li a.active {
  background: #4caf50;
  color: white;
  transform: translateX(5px);
}

/* Article */
article {
  flex: 3 1 480px;
  background: white;
  padding: 25px;
  border-radius: 12px;
  box-shadow: 0 3px 8px rgba(0,0,0,0.1);
  min-height: 350px;
  animation: fade 0.4s ease;
}

@keyframes fade {
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Footer */
footer {
  background: #4caf50;
  text-align: center;
  padding: 20px;
  color: white;
  margin-top: 30px;
  border-top: 5px solid #2e7d32;
  font-size: 16px;
}

/* Responsive */
@media (max-width: 700px) {
  section {
    flex-direction: column;
  }
  
  nav {
    max-width: 100%;
  }
}
</style>
</head>
<body>

<header>
  <h1>Romarez Explorer</h1>
</header>

<section>
  <nav>
    <ul>
      <li><a href="home.php?page=london" class="<?= isset($_GET['page']) && $_GET['page']=='london' ? 'active':'' ?>">London</a></li>
      <li><a href="home.php?page=paris" class="<?= isset($_GET['page']) && $_GET['page']=='paris' ? 'active':'' ?>">Paris</a></li>
      <li><a href="home.php?page=tokyo" class="<?= isset($_GET['page']) && $_GET['page']=='tokyo' ? 'active':'' ?>">Tokyo</a></li>
      <li><a href="home.php?page=form" class="<?= isset($_GET['page']) && $_GET['page']=='form' ? 'active':'' ?>">Form</a></li>
    </ul>
  </nav>
  
  <article>
    <?php
      if(isset($_GET['page'])){
        $allowed = ['london','paris','tokyo','form'];
        $page = $_GET['page'];
        
        if(in_array($page, $allowed)){
          include "mods/$page.php";
        } else {
          echo "<h2>Page not found.</h2>";
        }
      } else {
        echo "<h2>Welcome to Romarez Explorer!</h2><p>Select a page from the left menu.</p>";
      }
    ?>
  </article>
</section>

<footer>
  <p>&copy; 2025 Romarez Explorer. All Rights Reserved.</p>
</footer>

</body>
</html>
