<?php
  include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Minuman Kekinian</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>


    <header>
        <button id="toggle-mode">Dark Mode</button>
        <h1>Bevanda Contemporanea</h1>
        <nav>
            <ul>
                <li><a href="#home"><b>Home</b></a></li>
                <li><a href="form.php"><b>Form</b></a></li>
                <li><a href="#about"><b>About Me</b></a></li>
            </ul>
        </nav>
    </header>

    <h2>Resep Minuman Kekinian</h2>

    <section class="drink-card">
        <img src="image/es mangga jeli.webp" alt="Minuman 1">
        <h2>Es Mangga Jeli</h2>
        <p>Es Mangga Jeli adalah minuman segar yang terbuat dari potongan mangga matang yang dicampur dengan jeli atau agar-agar. Mangga yang digunakan memberikan rasa manis alami dan aroma segar, sementara jeli memberikan tekstur kenyal yang menyenangkan. Biasanya disajikan dalam bentuk es, membuatnya menjadi pilihan yang menyegarkan terutama di musim panas. Es Mangga Jeli juga sering diberi tambahan bahan seperti susu kental manis atau sirup untuk meningkatkan cita rasa..</p>
        <button>Resep</button>
    </section>

    <section class="drink-card">
        <img src="image/es kopi cincau.webp" alt="Minuman 2">
        <h2>Es Kopi Cincau</h2>
        <p>Es Kopi Cincau adalah minuman dingin yang menggabungkan dua bahan utama, yaitu kopi dan cincau. Kopi memberikan rasa kafein yang memberi energi, sementara cincau (gelatin hitam) memberikan tekstur kenyal yang unik. Biasanya disajikan dengan tambahan susu dan sirup gula untuk menyesuaikan tingkat manis dan kentalitasnya. Es Kopi Cincau menyajikan kombinasi unik antara kekuatan rasa kopi dan sensasi kenyal dari cincau.</p>
        <button>Resep</button>
    </section>

    <section class="drink-card">
        <img src="image/es semangka susu.webp" alt="Minuman 3">
        <h2>Es Semangka Susu</h2>
        <p>Es Semangka Susu adalah minuman menyegarkan yang terbuat dari jus semangka segar yang dicampur dengan susu. Rasa manis dan segar dari semangka berpadu dengan kelembutan dan kreami dari susu, menciptakan kombinasi yang menyegarkan. Biasanya disajikan dalam bentuk es untuk memberikan sensasi dingin yang menyenangkan. Es Semangka Susu seringkali menjadi pilihan yang populer di musim panas karena kesegarannya.</p>
        <button>Resep</button>
    </section>

    <section class="about-me" id="about">
        <div class="info">
            <img src="image/me.jpg" alt="Foto Anda">
            <div class="text">
                <p>Nama : Christian Roberto Apui</p>
                <p>NIM : 2109106140</p>
                <p>Tempat, Tanggal Lahir : Samarinda, 05-05-2003</p>
                <p>Email : Christogan46@gmail.com</p>
            </div>
        </div>
    </section>
    

    <footer>
        <p>&copy; 2023 Resep Minuman Kekinian</p>
    </footer>
    <script>
        const toggleButton = document.getElementById('toggle-mode');
        const body = document.body;
    
        toggleButton.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
        });

        document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('nav a');

    navItems.forEach(item => {
        item.addEventListener('mouseover', function() {
            this.style.color = '#F9FF5B';
        });

        item.addEventListener('mouseout', function() {
            this.style.color = '#6f60ff';
        });
    });
});
 
    document.addEventListener('DOMContentLoaded', function() {
        const aboutLink = document.querySelector('a[href="#about"]');

        aboutLink.addEventListener('click', function(event) {
            event.preventDefault();
            alert('Menuju Informasi data diri developer');
            window.location.href = '#about';
    });
});
    </script>
    
</body>
</html>
