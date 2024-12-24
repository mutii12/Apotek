<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApotikTitikKoma</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        .product-card:hover {
            transform: translateY(-5px);
        }
        .gradient-bg {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header with Glass Effect -->
    <header class="fixed w-full z-50 gradient-bg text-white shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-4 py-3">
            <div class="flex items-center space-x-8">
                <h1 class="text-2xl font-bold tracking-tight">ApotikTitikKoma</h1>
                <nav class="hidden lg:flex space-x-6">
                    <a href="#" class="hover:text-blue-200 transition duration-300 font-medium">Beranda</a>
                    <a href="#" class="hover:text-blue-200 transition duration-300 font-medium">Produk</a>
                    <a href="https://wa.me/089506006132" class="hover:text-blue-200 transition duration-300 font-medium">Konsultasi</a>
                    <a href="#" class="hover:text-blue-200 transition duration-300 font-medium">Tentang Kami</a>
                </nav>
            </div>
            <div class="flex items-center space-x-6">
                <div class="relative cursor-pointer group" id="cart-icon">
                    <i class="fas fa-shopping-cart text-xl group-hover:text-blue-200 transition duration-300"></i>
                    <span class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full px-2 py-1 text-xs font-bold">0</span>
                </div>
                <a href="login_user.php" class="px-6 py-2 bg-white text-blue-600 rounded-full hover:bg-blue-50 transition duration-300 font-medium flex items-center space-x-2">
                    <i class="fas fa-user"></i>
                    <span>Masuk</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content with Padding for Fixed Header -->
    <main class="pt-20">
        <!-- Hero Section with Search -->
        <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold mb-6 text-center">Temukan Obat yang Anda Butuhkan</h2>
                <div class="max-w-2xl mx-auto relative">
                    <input 
                        type="text" 
                        placeholder="Cari obat, kategori, atau penyakit..." 
                        class="w-full p-4 pl-12 rounded-full text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-400 shadow-lg"
                    >
                    <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300">
                        <i class="fas fa-search mr-2"></i>Cari
                    </button>
                </div>
            </div>
        </section>

        <!-- Quick Services -->
        <section class="container mx-auto my-12 px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="glass-effect p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 text-center group">
                    <a href="upload_resep.php" class="block">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-200 transition duration-300">
                            <i class="fas fa-capsules text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800">Resep Obat</h3>
                    </a>
                </div>
                
                <!-- Similar structure for other service cards -->
            </div>
        </section>

        

        
     <!-- foto slide -->
     <section class="container mx-auto my-6 px-4">
        <div id="image-slider" class="relative w-full h-64 md:h-96 overflow-hidden rounded-lg shadow-md">
            <div class="slider-image absolute inset-0 opacity-0 transition-opacity duration-500 ease-in-out" style="background-image: url('https://via.placeholder.com/1600x600?text=Promo+Obat+1');" data-index="0"><img src="300x300"></div>
            <div class="slider-image absolute inset-0 opacity-0 transition-opacity duration-500 ease-in-out" style="background-image: url('https://via.placeholder.com/1600x600?text=Promo+Obat+1');" data-index="0"><img src="300x300"></div>
            <div class="slider-image absolute inset-0 opacity-0 transition-opacity duration-500 ease-in-out" style="background-image: url('https://via.placeholder.com/1600x600?text=Promo+Obat+1');" data-index="0"><img src="300x300"></div>
            
            <!-- Navvigasi batton-->
            <button id="prev-slide" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-gray-800 bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button id="next-slide" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-gray-800 bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75">
                <i class="fas fa-chevron-right"></i>
            </button>

            <!-- Slide Indikator -->
            <div id="slide-indicators" class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 slide-indicator active" data-index="0"></button>
                <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 slide-indicator" data-index="1"></button>
                <button class="w-3 h-3 rounded-full bg-white bg-opacity-50 slide-indicator" data-index="2"></button>
            </div>
        </div>
    </section>


        <!-- Products Section -->
        <section class="container mx-auto my-12 px-4">
            <h2 class="text-3xl font-bold mb-8 text-gray-800">Produk Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Product Card -->
                <div class="glass-effect rounded-xl shadow-lg hover:shadow-xl transition duration-300 product-card">
                    <div class="relative">
                        <img src="https://via.placeholder.com/300x300" alt="Product" class="w-full h-48 object-cover rounded-t-xl">
                        <button class="absolute top-4 right-4 p-2 bg-white rounded-full shadow-md hover:bg-gray-100 transition duration-300">
                            <i class="fas fa-heart text-gray-400 hover:text-red-500"></i>
                        </button>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2">Paracetamol</h3>
                        <p class="text-blue-600 font-semibold text-xl mb-2">Rp 15.000</p>
                        <p class="text-sm text-gray-500 mb-4">Stok: 10</p>
                        <div class="flex space-x-2">
                            <button class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                                + Keranjang
                            </button>
                            <button class="flex-1 bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition duration-300">
                                Beli
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Repeat product cards -->
            </div>
        </section>
    </main>

    <!-- Modern Footer -->
    <footer class="gradient-bg text-white py-12">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 px-4">
            <div>
                <h4 class="font-bold text-xl mb-6">ApotikTitikKoma</h4>
                <p class="text-blue-100">Platform pemesanan obat online terpercaya dan aman.</p>
            </div>
            <!-- Add other footer sections -->
        </div>
        <div class="container mx-auto mt-8 pt-8 border-t border-blue-400/30 text-center text-blue-100">
            © 2024 ApotikTitikKoma. All rights reserved.
        </div>
    </footer>

    <!-- Include your existing JavaScript -->
</body>
</html>