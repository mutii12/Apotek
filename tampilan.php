
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApotikTitikKoma</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-blue-600 text-white py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center space-x-4">
                <h1 class="text-2xl font-bold">ApotikTitikKoma</h1>
                <nav class="hidden md:flex space-x-4">
                    <a href="#" class="hover:text-blue-200">Beranda</a>
                    <a href="#" class="hover:text-blue-200">Produk</a>
                    <a href="https://wa.me/089506006132" class="hover:text-blue-200">Konsultasi</a>
                    <a href="#" class="hover:text-blue-200">Tentang Kami</a>
                </nav>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full px-2 py-1 text-xs">0</span>
                </div>
                <div class="flex items-center space-x-4">
             <a  href="login_user.php" class="px-4 py-2 bg-blue-800 rounded-lg hover:bg-blue-700 text-white flex items-center" >    
          <i class="fas fa-user mr-2"></i> Masuk </a></div>
             </div>
    </header>

    <!-- Pencarian -->
    <div class="container mx-auto my-6 px-4 flex space-x-4">
        <div class="relative flex-grow">
            <input 
                type="text" 
                placeholder="Cari obat, kategori, atau penyakit..." 
                class="w-full p-2 pl-10 border rounded-lg"
            >
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg">Cari</button>
    </div>

    <!-- Layanan Cepat -->
    <section class="container mx-auto my-6 px-4">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
            <a href="upload_resep.php" class="block">
                <i class="fas fa-capsules text-blue-600 text-4xl mb-2"></i>
                <h3>Resep Obat</h3>
            </a>
        </div>
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
            <a href="https://wa.me/6289506006132" target="_blank" class="block">
                <i class="fas fa-stethoscope text-blue-600 text-4xl mb-2"></i>
                <h3>Konsultasi</h3>
            </a>
        </div>
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
            <i class="fas fa-heartbeat text-blue-600 text-4xl mb-2"></i>
            <h3>Kesehatan</h3>
        </div>
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
            <i class="fas fa-map-marker-alt text-blue-600 text-4xl mb-2"></i>
            <h3>Lokasi Apotek</h3>
        </div>
    </div>
</section>


    <!-- New Image Slider Section -->
    <section class="container mx-auto my-6 px-4">
        <div id="image-slider" class="relative w-full h-64 md:h-96 overflow-hidden rounded-lg shadow-md">
            <div class="slider-image absolute inset-0 opacity-0 transition-opacity duration-500 ease-in-out" style="background-image: url('https://via.placeholder.com/1600x600?text=Promo+Obat+1');" data-index="0"><img src="asset/promo.jpg"></div>
            <div class="slider-image absolute inset-0 opacity-0 transition-opacity duration-500 ease-in-out" style="background-image: url('https://via.placeholder.com/1600x600?text=Promo+Obat+1');" data-index="0"><img src="asset/promo1.png"></div>
            <div class="slider-image absolute inset-0 opacity-0 transition-opacity duration-500 ease-in-out" style="background-image: url('https://via.placeholder.com/1600x600?text=Promo+Obat+1');" data-index="0"><img src="asset/promo2.png"></div>
            
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slider-image');
            const prevButton = document.getElementById('prev-slide');
            const nextButton = document.getElementById('next-slide');
            const indicators = document.querySelectorAll('.slide-indicator');
            let currentSlide = 0;
            let slideInterval;

            function showSlide(index) {
                // Hide all slides
                slides.forEach(slide => {
                    slide.style.opacity = '0';
                });

                // Show current slide
                slides[index].style.opacity = '1';

                // Update indicators
                indicators.forEach(indicator => {
                    indicator.classList.remove('bg-white');
                    indicator.classList.add('bg-opacity-50');
                });
                indicators[index].classList.add('bg-white');
                indicators[index].classList.remove('bg-opacity-50');
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(currentSlide);
            }

            // Auto slide functionality
            function startAutoSlide() {
                slideInterval = setInterval(nextSlide, 5000);
            }

            function stopAutoSlide() {
                clearInterval(slideInterval);
            }

            // Event listeners
            nextButton.addEventListener('click', () => {
                stopAutoSlide();
                nextSlide();
                startAutoSlide();
            });

            prevButton.addEventListener('click', () => {
                stopAutoSlide();
                prevSlide();
                startAutoSlide();
            });

            indicators.forEach(indicator => {
                indicator.addEventListener('click', () => {
                    const index = parseInt(indicator.getAttribute('data-index'));
                    stopAutoSlide();
                    currentSlide = index;
                    showSlide(currentSlide);
                    startAutoSlide();
                });
            });

            // Show initial slide and start auto-sliding
            showSlide(0);
            startAutoSlide();
        });
    </script>




<section class="container mx-auto my-6 px-4">
    <h2 class="text-2xl font-bold mb-4">Produk Terbaru</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
           
           <!-- Produk 1-->
<div class="bg-white rounded-lg shadow hover:shadow-lg transition">
    <img src="https://via.placeholder.com/300x300" alt="Paracetamol" class="w-full h-48 object-cover rounded-t-lg">
    <div class="p-4">
        <h3 class="font-bold product-name">Paracetamol</h3>
        <p class="text-blue-600 font-semibold product-price">Rp 15.000</p>
        <p class="text-sm text-gray-500">Stok: <span class="product-stock">10</span></p>
        <div class="flex space-x-2">
            <button class="mt-2 w-full bg-blue-600 text-white py-2 rounded-lg add-to-cart">
                Tambah ke Keranjang
            </button>
            <button class="mt-2 w-full bg-green-600 text-white py-2 rounded-lg buy-now">
                Beli Sekarang
            </button>
        </div>
    </div>
</div>

<div class="bg-white rounded-lg shadow hover:shadow-lg transition">
    <img src="https://via.placeholder.com/300x300" alt="Paracetamol" class="w-full h-48 object-cover rounded-t-lg">
    <div class="p-4">
        <h3 class="font-bold product-name">Paracetamol</h3>
        <p class="text-blue-600 font-semibold product-price">Rp 15.000</p>
        <p class="text-sm text-gray-500">Stok: <span class="product-stock">10</span></p>
        <div class="flex space-x-2">
            <button class="mt-2 w-full bg-blue-600 text-white py-2 rounded-lg add-to-cart">
                Tambah ke Keranjang
            </button>
            <button class="mt-2 w-full bg-green-600 text-white py-2 rounded-lg buy-now">
                Beli Sekarang
            </button>
        </div>
    </div>
</div>

<div class="bg-white rounded-lg shadow hover:shadow-lg transition">
    <img src="https://via.placeholder.com/300x300" alt="Paracetamol" class="w-full h-48 object-cover rounded-t-lg">
    <div class="p-4">
        <h3 class="font-bold product-name">Paracetamol</h3>
        <p class="text-blue-600 font-semibold product-price">Rp 15.000</p>
        <p class="text-sm text-gray-500">Stok: <span class="product-stock">10</span></p>
        <div class="flex space-x-2">
            <button class="mt-2 w-full bg-blue-600 text-white py-2 rounded-lg add-to-cart">
                Tambah ke Keranjang
            </button>
            <button class="mt-2 w-full bg-green-600 text-white py-2 rounded-lg buy-now">
                Beli Sekarang
            </button>
        </div>
    </div>
</div>

<div class="bg-white rounded-lg shadow hover:shadow-lg transition">
    <img src="https://via.placeholder.com/300x300" alt="Paracetamol" class="w-full h-48 object-cover rounded-t-lg">
    <div class="p-4">
        <h3 class="font-bold product-name">Paracetamol</h3>
        <p class="text-blue-600 font-semibold product-price">Rp 15.000</p>
        <p class="text-sm text-gray-500">Stok: <span class="product-stock">10</span></p>
        <div class="flex space-x-2">
            <button class="mt-2 w-full bg-blue-600 text-white py-2 rounded-lg add-to-cart">
                Tambah ke Keranjang
            </button>
            <button class="mt-2 w-full bg-green-600 text-white py-2 rounded-lg buy-now">
                Beli Sekarang
            </button>
        </div>
    </div>
</div>

<div class="bg-white rounded-lg shadow hover:shadow-lg transition">
    <img src="https://via.placeholder.com/300x300" alt="Paracetamol" class="w-full h-48 object-cover rounded-t-lg">
    <div class="p-4">
        <h3 class="font-bold product-name">Paracetamol</h3>
        <p class="text-blue-600 font-semibold product-price">Rp 15.000</p>
        <p class="text-sm text-gray-500">Stok: <span class="product-stock">10</span></p>
        <div class="flex space-x-2">
            <button class="mt-2 w-full bg-blue-600 text-white py-2 rounded-lg add-to-cart">
                Tambah ke Keranjang
            </button>
            <button class="mt-2 w-full bg-green-600 text-white py-2 rounded-lg buy-now">
                Beli Sekarang
            </button>
        </div>
    </div>
</div>

<div class="bg-white rounded-lg shadow hover:shadow-lg transition">
    <img src="https://via.placeholder.com/300x300" alt="Paracetamol" class="w-full h-48 object-cover rounded-t-lg">
    <div class="p-4">
        <h3 class="font-bold product-name">Paracetamol</h3>
        <p class="text-blue-600 font-semibold product-price">Rp 15.000</p>
        <p class="text-sm text-gray-500">Stok: <span class="product-stock">10</span></p>
        <div class="flex space-x-2">
            <button class="mt-2 w-full bg-blue-600 text-white py-2 rounded-lg add-to-cart">
                Tambah ke Keranjang
            </button>
            <button class="mt-2 w-full bg-green-600 text-white py-2 rounded-lg buy-now">
                Beli Sekarang
            </button>
        </div>
    </div>
</div>

<div class="bg-white rounded-lg shadow hover:shadow-lg transition">
    <img src="https://via.placeholder.com/300x300" alt="Paracetamol" class="w-full h-48 object-cover rounded-t-lg">
    <div class="p-4">
        <h3 class="font-bold product-name">Paracetamol</h3>
        <p class="text-blue-600 font-semibold product-price">Rp 15.000</p>
        <p class="text-sm text-gray-500">Stok: <span class="product-stock">10</span></p>
        <div class="flex space-x-2">
            <button class="mt-2 w-full bg-blue-600 text-white py-2 rounded-lg add-to-cart">
                Tambah ke Keranjang
            </button>
            <button class="mt-2 w-full bg-green-600 text-white py-2 rounded-lg buy-now">
                Beli Sekarang
            </button>
        </div>
    </div>
</div>

<div class="bg-white rounded-lg shadow hover:shadow-lg transition">
    <img src="https://via.placeholder.com/300x300" alt="Paracetamol" class="w-full h-48 object-cover rounded-t-lg">
    <div class="p-4">
        <h3 class="font-bold product-name">Paracetamol</h3>
        <p class="text-blue-600 font-semibold product-price">Rp 15.000</p>
        <p class="text-sm text-gray-500">Stok: <span class="product-stock">10</span></p>
        <div class="flex space-x-2">
            <button class="mt-2 w-full bg-blue-600 text-white py-2 rounded-lg add-to-cart">
                Tambah ke Keranjang
            </button>
            <button class="mt-2 w-full bg-green-600 text-white py-2 rounded-lg buy-now">
                Beli Sekarang
            </button>
        </div>
    </div>
</div>

    </section>

    <!-- Modal Keranjang -->
    <div id="cart-modal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-96 p-4">
            <h3 class="text-lg font-bold mb-4">Keranjang</h3>
            <ul id="cart-items" class="space-y-2">
                <!-- Item keranjang akan ditambahkan secara dinamis -->
            </ul>
            <div class="mt-4">
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg w-full" id="close-cart">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <script>
        const cartButton = document.querySelector('.fa-shopping-cart');
        const cartCountDisplay = document.getElementById('cart-count');
        const cartModal = document.getElementById('cart-modal');
        const cartItems = document.getElementById('cart-items');
        const closeCartButton = document.getElementById('close-cart');
        let cart = [];

        // Fungsi untuk memperbarui jumlah produk yang ada di keranjang
        function updateCartCount() {
            const totalCount = cart.reduce((total, item) => total + item.quantity, 0);
            cartCountDisplay.textContent = totalCount;
        }
        document.addEventListener('DOMContentLoaded', function() {
    const cartButton = document.querySelector('.fa-shopping-cart');
    const cartCountDisplay = document.getElementById('cart-count');
    const cartModal = document.getElementById('cart-modal');
    const cartItems = document.getElementById('cart-items');
    const closeCartButton = document.getElementById('close-cart');
    const buyNowButtons = document.querySelectorAll('.buy-now');
    let cart = [];

    // Fungsi untuk memperbarui jumlah produk yang ada di keranjang
    function updateCartCount() {
        const totalCount = cart.reduce((total, item) => total + item.quantity, 0);
        cartCountDisplay.textContent = totalCount;
    }

    // Fungsi untuk menambahkan produk ke keranjang
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', (e) => {
            const productCard = button.closest('div');
            const productName = productCard.querySelector('.product-name').textContent;
            const productPrice = productCard.querySelector('.product-price').textContent;
            const productStock = parseInt(productCard.querySelector('.product-stock').textContent);

            // Cek apakah stok mencukupi
            if (productStock > 0) {
                // Kurangi stok produk
                const newStock = productStock - 1;
                productCard.querySelector('.product-stock').textContent = newStock;

                // Cek apakah produk sudah ada di keranjang
                const existingItem = cart.find(item => item.name === productName);
                if (existingItem) {
                    existingItem.quantity += 1;
                } else {
                    cart.push({ name: productName, price: productPrice, quantity: 1 });
                }

                // Update jumlah produk di keranjang
                updateCartCount();
                alert(`${productName} berhasil ditambahkan ke keranjang!`);
            } else {
                alert(`Stok ${productName} habis!`);
            }
        });
    });

    // Fungsi untuk menangani aksi "Beli Sekarang"
    buyNowButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const productCard = button.closest('div');
            const productName = productCard.querySelector('.product-name').textContent;
            const productPrice = productCard.querySelector('.product-price').textContent;
            const productStock = parseInt(productCard.querySelector('.product-stock').textContent);

            // Cek apakah stok mencukupi untuk membeli sekarang
            if (productStock > 0) {
                // Simulasikan pembelian langsung atau arahkan ke halaman checkout
                alert(`${productName} berhasil dibeli!`);
                // Redirect ke halaman checkout jika ada
                window.location.href = 'checkout.php'; // Ganti dengan halaman checkout Anda
            } else {
                alert(`Stok ${productName} habis!`);
            }
        });
    });

    // Tampilkan modal keranjang saat ikon keranjang diklik
    cartButton.addEventListener('click', () => {
        cartItems.innerHTML = ''; // Hapus isi keranjang sebelumnya
        cart.forEach(item => {
            const li = document.createElement('li');
            li.textContent = `${item.name} - ${item.quantity} x ${item.price}`;
            cartItems.appendChild(li);
        });
        cartModal.classList.remove('hidden');
    });

    // Tutup modal keranjang
    closeCartButton.addEventListener('click', () => {
        cartModal.classList.add('hidden');
    });
});

        // Tutup modal keranjang
        closeCartButton.addEventListener('click', () => {
            cartModal.classList.add('hidden');
        });
    </script>

    <!-- Footer -->
    <footer class="bg-blue-700 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
            <div>
                <h4 class="font-bold mb-4">ApotikTitikKoma</h4>
                <p>Platform pemesanan obat online terpercaya dan aman.</p>
            </div>
            <div>
                <h4 class="font-bold mb-4">Hubungi Kami</h4>
                <div class="space-y-2">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-phone"></i>
                        <span>0812-3456-7890</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-envelope"></i>
                        <span>layanan@apotiktitikoma</span>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="font-bold mb-4">Informasi</h4>
                <nav class="space-y-2">
                    <a href="#" class="block hover:text-blue-200">Syarat & Ketentuan</a>
                    <a href="#" class="block hover:text-blue-200">Kebijakan Privasi</a>
                    <a href="#" class="block hover:text-blue-200">FAQ</a>
                </nav>
            </div>
        </div>
        <div class="container mx-auto mt-6 text-center border-t border-blue-600 pt-4 px-4">
            © 2024 Apotiktitikkoma. All rights reserved.
        </div>
    </footer>

    <script>
        // Simple cart functionality
        const addToCartButtons = document.querySelectorAll('button');
        const cartCounter = document.querySelector('.fa-shopping-cart + span');
        let cartItemCount = 0;

        addToCartButtons.forEach(button => {
            button.addEventListener('click', () => {
                cartItemCount++;
                cartCounter.textContent = cartItemCount;
            });
        });
    </script>
</body>
</html>