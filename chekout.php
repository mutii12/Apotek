<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - ApotikTitikKoma</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        .input-transition {
            transition: all 0.3s ease;
        }
        .input-transition:focus {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-blue-50 min-h-screen">
    <!-- Header -->
    <header class="glass-effect fixed w-full top-0 z-50 border-b border-gray-100">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <a href="index.php" class="text-blue-600 hover:text-blue-700">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-blue-800 text-transparent bg-clip-text">
                    Checkout
                </h1>
            </div>
            <div class="text-gray-600">
                <i class="fas fa-shield-alt"></i>
                <span class="ml-2">Secure Checkout</span>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-24">
        <div class="max-w-6xl mx-auto">
            <!-- Progress Bar -->
            <div class="mb-8 px-4">
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center">
                        <span class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center">1</span>
                        <span class="ml-2 font-medium">Informasi</span>
                    </div>
                    <div class="flex-1 mx-4 h-1 bg-gray-200">
                        <div class="w-1/3 h-full bg-blue-600"></div>
                    </div>
                    <div class="flex items-center">
                        <span class="w-8 h-8 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center">2</span>
                        <span class="ml-2 font-medium text-gray-600">Pembayaran</span>
                    </div>
                    <div class="flex-1 mx-4 h-1 bg-gray-200"></div>
                    <div class="flex items-center">
                        <span class="w-8 h-8 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center">3</span>
                        <span class="ml-2 font-medium text-gray-600">Konfirmasi</span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Left Column - Form -->
                <div class="space-y-6">
                    <!-- Shipping Information -->
                    <div class="bg-white rounded-2xl shadow-lg p-8 fade-in">
                        <h2 class="text-2xl font-bold mb-6 flex items-center">
                            <i class="fas fa-shipping-fast text-blue-600 mr-3"></i>
                            Informasi Pengiriman
                        </h2>
                        <form class="space-y-6">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="col-span-2">
                                    <label class="block text-gray-700 mb-2 font-medium">Nama Lengkap</label>
                                    <input type="text" class="w-full p-3 border border-gray-200 rounded-xl input-transition focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" required>
                                </div>
                                
                                <div>
                                    <label class="block text-gray-700 mb-2 font-medium">Email</label>
                                    <input type="email" class="w-full p-3 border border-gray-200 rounded-xl input-transition focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" required>
                                </div>
                                
                                <div>
                                    <label class="block text-gray-700 mb-2 font-medium">Nomor Telepon</label>
                                    <input type="tel" class="w-full p-3 border border-gray-200 rounded-xl input-transition focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" required>
                                </div>
                                
                                <div class="col-span-2">
                                    <label class="block text-gray-700 mb-2 font-medium">Alamat Lengkap</label>
                                    <textarea class="w-full p-3 border border-gray-200 rounded-xl input-transition focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" rows="3" required></textarea>
                                </div>

                                <div>
                                    <label class="block text-gray-700 mb-2 font-medium">Kota</label>
                                    <select class="w-full p-3 border border-gray-200 rounded-xl input-transition focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" required>
                                        <option value="">Pilih Kota</option>
                                        <option value="jakarta">Jakarta</option>
                                        <option value="surabaya">Surabaya</option>
                                        <option value="bandung">Bandung</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-gray-700 mb-2 font-medium">Kode Pos</label>
                                    <input type="text" class="w-full p-3 border border-gray-200 rounded-xl input-transition focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" required>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right Column - Order Summary -->
                <div class="space-y-6">
                    <!-- Order Summary Card -->
                    <div class="bg-white rounded-2xl shadow-lg p-8 fade-in">
                        <h2 class="text-2xl font-bold mb-6 flex items-center">
                            <i class="fas fa-shopping-bag text-blue-600 mr-3"></i>
                            Ringkasan Pesanan
                        </h2>
                        <div class="space-y-4" id="cart-items">
                            <!-- Cart Item Example -->
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl">
                                <div class="flex items-center space-x-4">
                                    <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-pills text-gray-400 text-2xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold">Paracetamol</h3>
                                        <p class="text-gray-600">2x @ Rp 15.000</p>
                                    </div>
                                </div>
                                <p class="font-semibold">Rp 30.000</p>
                            </div>
                        </div>

                        <div class="mt-6 space-y-3">
                            <div class="flex justify-between text-gray-600">
                                <p>Subtotal</p>
                                <p class="font-semibold">Rp 30.000</p>
                            </div>
                            <div class="flex justify-between text-gray-600">
                                <p>Ongkos Kirim</p>
                                <p class="font-semibold">Rp 10.000</p>
                            </div>
                            <div class="flex justify-between pt-4 border-t">
                                <p class="text-lg font-bold">Total</p>
                                <p class="text-lg font-bold text-blue-600">Rp 40.000</p>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Method Card -->
                    <div class="bg-white rounded-2xl shadow-lg p-8 fade-in">
                        <h2 class="text-2xl font-bold mb-6 flex items-center">
                            <i class="fas fa-credit-card text-blue-600 mr-3"></i>
                            Metode Pembayaran
                        </h2>
                        <div class="space-y-3">
                            <label class="block p-4 border border-gray-200 rounded-xl cursor-pointer hover:border-blue-500 transition-colors">
                                <div class="flex items-center">
                                    <input type="radio" name="payment" value="transfer" class="text-blue-600" checked>
                                    <span class="ml-3">
                                        <span class="font-semibold block">Transfer Bank</span>
                                        <span class="text-sm text-gray-500">Transfer melalui bank pilihan Anda</span>
                                    </span>
                                </div>
                            </label>
                            <label class="block p-4 border border-gray-200 rounded-xl cursor-pointer hover:border-blue-500 transition-colors">
                                <div class="flex items-center">
                                    <input type="radio" name="payment" value="ewallet" class="text-blue-600">
                                    <span class="ml-3">
                                        <span class="font-semibold block">E-Wallet</span>
                                        <span class="text-sm text-gray-500">GoPay, OVO, DANA, LinkAja</span>
                                    </span>
                                </div>
                            </label>
                            <label class="block p-4 border border-gray-200 rounded-xl cursor-pointer hover:border-blue-500 transition-colors">
                                <div class="flex items-center">
                                    <input type="radio" name="payment" value="cod" class="text-blue-600">
                                    <span class="ml-3">
                                        <span class="font-semibold block">Cash on Delivery (COD)</span>
                                        <span class="text-sm text-gray-500">Bayar saat barang sampai</span>
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Checkout Button -->
                    <button onclick="window.location.href='order_confirmation.php'" 
                            class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-4 rounded-xl font-bold text-lg hover:from-blue-700 hover:to-blue-800 transition-all transform hover:scale-[1.02] active:scale-[0.98] shadow-lg">
                        <i class="fas fa-lock mr-2"></i>
                        Buat Pesanan
                    </button>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-white border-t mt-12">
        <div class="container mx-auto px-4 py-6 text-center text-gray-600">
            <p class="flex items-center justify-center">
                <i class="fas fa-shield-alt text-blue-600 mr-2"></i>
                Pembayaran Aman & Terenkripsi
            </p>
            <p class="mt-2">© 2024 ApotikTitikKoma. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>