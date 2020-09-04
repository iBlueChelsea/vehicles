<div class="container rounded bg-dark">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand">
        <img src="soulware-logo-normal-feher.png" width="354" height="50">
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <li class="nav-item <?php echo ($page === 'homepage') ? 'active' : ''; ?> ">
        <a class="nav-link" href="index.php?page=homepage">Home</a>
        </li>
        <li class="nav-item <?php echo ($page === 'cars') ? 'active' : ''; ?> ">
        <a class="nav-link" href="index.php?page=cars">Cars</a>
        </li>
        <li class="nav-item <?php echo ($page === 'motorbikes') ? 'active' : ''; ?> ">
        <a class="nav-link" href="index.php?page=motorbikes">Motorbikes</a>
        </li>
        <li class="nav-item <?php echo ($page === 'contact_us') ? 'active' : ''; ?> ">
        <a class="nav-link" href="index.php?page=contact_us">Contact us</a>
        </li>
    </ul>
    </div>
</nav>
</div>
<div class="container"><hr></hr></div>