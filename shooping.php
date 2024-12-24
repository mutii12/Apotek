<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">

<div class="flex items-center space-x-4">
    <!-- Icon Keranjang -->
    <div class="relative cursor-pointer" id="cart-icon">
        <i class="fas fa-shopping-cart text-xl"></i>
        <span class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full px-2 py-1 text-xs" id="cart-count">2</span>
    </div>
</div>

<!-- Modal Keranjang -->
<div id="cart-modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white w-full max-w-2xl rounded-lg shadow-lg p-4">
        <div class="flex justify-between items-center border-b pb-2 mb-4">
            <h2 class="text-xl font-bold">Keranjang</h2>
            <button id="close-cart" class="text-gray-600 hover:text-gray-800">&times;</button>
        </div>

        <!-- Daftar Produk -->
        <div id="cart-items" class="space-y-4">
            <!-- Contoh Produk -->
            <div class="flex items-center justify-between">
                <img src="https://via.placeholder.com/80" alt="Produk" class="w-16 h-16 rounded-lg">
                <div class="flex-grow px-4">
                    <h3 class="font-semibold text-lg">Paracetamol</h3>
                    <p class="text-sm text-gray-600">Rp 15.000</p>
                    <div class="flex items-center space-x-2 mt-2">
                        <button class="bg-gray-200 text-gray-600 px-2 py-1 rounded-lg">-</button>
                        <span>1</span>
                        <button class="bg-gray-200 text-gray-600 px-2 py-1 rounded-lg">+</button>
                    </div>
                </div>
                <p class="text-gray-800 font-semibold">Rp 15.000</p>
            </div>

            <!-- Produk 2 -->
            <div class="flex items-center justify-between">
                <img src="https://via.placeholder.com/80" alt="Produk" class="w-16 h-16 rounded-lg">
                <div class="flex-grow px-4">
                    <h3 class="font-semibold text-lg">Ibuprofen</h3>
                    <p class="text-sm text-gray-600">Rp 20.000</p>
                    <div class="flex items-center space-x-2 mt-2">
                        <button class="bg-gray-200 text-gray-600 px-2 py-1 rounded-lg">-</button>
                        <span>2</span>
                        <button class="bg-gray-200 text-gray-600 px-2 py-1 rounded-lg">+</button>
                    </div>
                </div>
                <p class="text-gray-800 font-semibold">Rp 40.000</p>
            </div>
        </div>

        <!-- Total dan Checkout -->
        <div class="mt-6 border-t pt-4">
            <div class="flex justify-between items-center mb-4">
                <p class="text-gray-600">Total Barang</p>
                <p class="font-semibold" id="total-items">3</p>
            </div>
            <div class="flex justify-between items-center mb-4">
                <p class="text-gray-600">Total Harga</p>
                <p class="font-bold text-lg text-blue-600" id="total-price">Rp 55.000</p>
            </div>
            <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                Checkout
            </button>
        </div>
    </div>
</div>

<script>
    const cartIcon = document.getElementById('cart-icon');
    const cartModal = document.getElementById('cart-modal');
    const closeCart = document.getElementById('close-cart');

    cartIcon.addEventListener('click', () => {
        cartModal.classList.remove('hidden');
    });

    closeCart.addEventListener('click', () => {
        cartModal.classList.add('hidden');
    });

    // Placeholder logic for updating totals and cart items dynamically
    // Real implementation would involve fetching/updating data from a server or local state
</script>

</body>
</html>
