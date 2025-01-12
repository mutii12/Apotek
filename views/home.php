<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApotikTitikKoma</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-50">
    <?php include 'header.php'; ?>

    <!-- Layanan Cepat -->
    <section class="container mx-auto my-6 px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
            <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                <a href="controllers/ResepController.php" class="block">
                    <i class="fas fa-capsules text-blue-600 text-4xl mb-2"></i>
                    <h3>Upload Resep</h3>
                </a>
            </div>
            <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                <a href="https://wa.me/6289506006132" target="_blank" class="block">
                    <i class="fas fa-stethoscope text-blue-600 text-4xl mb-2"></i>
                    <h3>Konsultasi</h3>
                </a>
            </div>
            <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                <a href="controllers/DokterController.php" class="block">
                    <i class="fas fa-heartbeat text-blue-600 text-4xl mb-2"></i>
                    <h3>Cek Dokter</h3>
                </a>
            </div>
            <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                <?php if (isset($_SESSION['nama'])): ?>
                    <a href="controllers/LogoutController.php" class="block">
                        <i class="fas fa-sign-out-alt text-blue-600 text-4xl mb-2"></i>
                        <h3>Logout</h3>
                    </a>
                <?php else: ?>
                    <a href="views/login.php" class="block">
                        <i class="fas fa-sign-in-alt text-blue-600 text-4xl mb-2"></i>
                        <h3>Login</h3>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- New Image Slider Section -->
    <section class="container mx-auto my-6 px-4">
        <div id="image-slider" class="relative w-full h-64 md:h-96 overflow-hidden rounded-lg shadow-md">
            <div class="slider-image absolute inset-0 opacity-0 transition-opacity duration-500 ease-in-out" style="background-image: url('assets/images/promo.jpg');" data-index="0"></div>
            <div class="slider-image absolute inset-0 opacity-0 transition-opacity duration-500 ease-in-out" style="background-image: url('assets/images/promo1.png');" data-index="1"></div>
            <div class="slider-image absolute inset-0 opacity-0 transition-opacity duration-500 ease-in-out" style="background-image: url('assets/images/promo2.png');" data-index="2"></div>

            <!-- Navigation Buttons -->
            <button id="prev-slide" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-gray-800 bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button id="next-slide" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-gray-800 bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75">
                <i class="fas fa-chevron-right"></i>
            </button>

            <!-- Slide Indicators -->
            <div id="slide-indicators" class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 slide-indicator active" data-index="0"></button>
                <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 slide-indicator" data-index="1"></button>
                <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 slide-indicator" data-index="2"></button>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <script src="script.js"></script>
</body>

</html>