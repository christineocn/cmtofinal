<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Centered Logo Nav</title>

<style>
/* Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Inter", Arial, sans-serif;
}

/* NAVBAR */
.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 60px;
  background: #fff;
}

/* Left & Right Menus */
.nav-left,
.nav-right {
  display: flex;
  gap: 30px;
  list-style: none;
}

.nav-left a,
.nav-right a {
  text-decoration: none;
  color: #111;
  font-size: 13px;
  letter-spacing: 0.06em;
  text-transform: uppercase;
}

/* Center Logo */
.nav-logo img {
  height: 42px;
}

/* Login button styling */
.nav-right li:last-child a {
  padding: 8px 16px;
  border: 1px solid #111;
  border-radius: 20px;
}

/* ---------- MOBILE ---------- */
@media (max-width: 900px) {
  .navbar {
    flex-direction: column;
    gap: 20px;
    padding: 20px;
  }

  .nav-left,
  .nav-right {
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
  }

  .nav-logo {
    order: -1; /* logo stays on top */
  }
}
</style>
</head>

<body>

<nav class="navbar">

  <ul class="nav-left">
    <li><a href="#">CBAA</a></li>
    <li><a href="#">CMAA</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Training</a></li>
  </ul>

  <div class="nav-logo">
    <img src="logo.png" alt="Logo">
  </div>

  <ul class="nav-right">
    <li><a href="#">Projects</a></li>
    <li><a href="#">News</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="#">FAQ</a></li>
    <li><a href="#">Login</a></li>
  </ul>

</nav>

</body>
</html>
