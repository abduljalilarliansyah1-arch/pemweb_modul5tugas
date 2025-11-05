<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-left">
            <h2>Dashboard</h2>
        </div>
        <div class="header-right">
            <p>Hi, <?php echo $_SESSION['username']; ?></p>
        </div>
    </header>

    <div class="container">
        <aside class="sidebar">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="../Modul4/tabel-makanan.html">Makanan Khas</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </aside>

        <section class="main">
            <h3>Anda telah berhasil login</h3>
            <p>Selamat datang di halaman dashboard, <b><?php echo $_SESSION['username']; ?></b>.</p>
        </section>
    </div>

    <footer>
        <p>FOOTER</p>
    </footer>
</body>
</html>
