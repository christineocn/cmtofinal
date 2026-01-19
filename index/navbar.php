<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Centered Logo Gradient Nav</title>

<style>
/* RESET */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Inter", Arial, sans-serif;
}

/* ================================
   CMTO APPROVED NAV GRADIENT
================================ */

.nav-menu {
  background: linear-gradient(
    135deg,
    #7a003f 0%,
    #b1005d 45%,
    #f26631 100%
  );
  background-size: 600% 200%;
  animation: navGradientMove 18s ease infinite;
  color: #ffffff;
}

@keyframes navGradientMove {
  0%   { background-position: 0% 50%; }
  50%  { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

/* ================================
   NAVBAR LAYOUT
================================ */

.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 60px;
}

.nav-left,
.nav-right {
  display: flex;
  list-style: none;
  gap: 30px;
}

.navbar a {
  color: #ffffff;
  text-decoration: none;
  font-size: 13px;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  white-space: nowrap;
}

/* Center Logo */
.nav-logo img {
  height: 50px;
}

/* Login button */
.nav-right li:last-child a {
  padding: 8px 16px;
  border: 1px solid rgba(255,255,255,0.8);
  border-radius: 20px;
}

/* ================================
   DROPDOWNS
================================ */

.nav-item.dropdown {
  position: relative;
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #ffffff;
  border-radius: 6px;
  padding: 0.4rem 0;
  box-shadow: 0 12px 30px rgba(0,0,0,0.15);
  min-width: 180px;
  z-index: 1000;
}

.dropdown-menu a {
  color: #4b1f3f;
  font-size: 0.85rem;
  padding: 0.45rem 1.2rem;
  display: block;
}

.dropdown-menu a:hover {
  background-color: #fbe4f0;
  color: #b1005d;
}

/* Desktop hover */
@media (min-width: 992px) {
  .nav-item.dropdown:hover > .dropdown-menu {
    display: block;
  }
}

/* ================================
   ACCESSIBILITY
================================ */

.navbar a:focus-visible {
  outline: 2px dashed #ffd6e9;
  outline-offset: 4px;
}

/* ================================
   MOBILE RESPONSIVE
================================ */

@media (max-width: 991px) {
  .navbar {
    flex-direction: column;
    gap: 20px;
    padding: 20px;
  }

  .nav-left,
  .nav-right {
    flex-wrap: wrap;
    justify-content: center;
    gap: 18px;
  }

  .nav-logo {
    order: -1;
  }

  .dropdown-menu {
    position: static;
    box-shadow: none;
    margin-top: 0.5rem;
  }
}
</style>
</head>

<body>

<nav class="nav-menu">
  <div class="navbar">

    <ul class="nav-left">
      <li><a href="#">CBAA</a></li>
      <li><a href="#">CMAA</a></li>

      <li class="nav-item dropdown">
        <a href="#">About Us</a>
        <div class="dropdown-menu">
          <a href="#">Our Story</a>
          <a href="#">Leadership</a>
        </div>
      </li>

      <li><a href="#">Training</a></li>
    </ul>

    <div class="nav-logo">
      <img src="images/logo.png" alt="Logo">
    </div>

    <ul class="nav-right">
      <li><a href="#">Projects</a></li>
      <li><a href="#">News</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">FAQ</a></li>
      <li><a href="#">Login</a></li>
    </ul>

  </div>
</nav>

</body>
</html>
