<?php
session_start();
require_once '../controllers/LoginController.php';

$controller = new LoginController();
$customers = $controller->getLoggedInCustomers();
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Registrasi - Apotek Titik Koma</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-3xl bg-white rounded-lg shadow-lg p-8">
        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-blue-600">Apotek Titik Koma</h1>
            <p class="text-gray-600 mt-2">Silakan login atau registrasi</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Form Registrasi -->
            <div>
                <h2 class="text-2xl font-bold text-blue-500 mb-4">Registrasi</h2>
                <form method="POST" action="../controllers/AuthController.php" class="space-y-4">
                    <div>
                        <label for="nama" class="block text-gray-700 font-bold mb-2">Nama</label>
                        <input
                            type="text"
                            id="nama"
                            name="nama"
                            required
                            placeholder="Masukkan nama Anda"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            required
                            placeholder="Masukkan email Anda"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            placeholder="Masukkan password"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="flex space-x-4">
                        <button
                            type="submit"
                            name="register"
                            class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">
                            Register
                        </button>

                        <a
                            href="../index.php"
                            class="w-full text-center bg-gray-600 text-white py-3 rounded-lg hover:bg-gray-700 transition">
                            Kembali ke Halaman Utama
                        </a>
                    </div>
                </form>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-blue-500 mb-4">Login</h2>
                <form method="POST" action="../controllers/AuthController.php" class="space-y-4">
                    <div>
                        <label for="login_email" class="block text-gray-700 font-bold mb-2">Email</label>
                        <input
                            type="email"
                            id="login_email"
                            name="email"
                            required
                            placeholder="Masukkan email Anda"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="login_password" class="block text-gray-700 font-bold mb-2">Password</label>
                        <input
                            type="password"
                            id="login_password"
                            name="password"
                            required
                            placeholder="Masukkan password Anda"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <button
                        type="submit"
                        name="login"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">
                        Login
                    </button>
                </form>
            </div>


            <!-- Tabel Customer Terdaftar -->
            <div>
                <h3 class="text-2xl font-bold text-blue-500 mb-4">Daftar Customer Terdaftar</h3>
                <div class="overflow-x-auto">
                    <table class="table-auto w-full border-collapse border border-gray-300">
                        <thead class="bg-blue-100">
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">ID</th>
                                <th class="border border-gray-300 px-4 py-2">Nama</th>
                                <th class="border border-gray-300 px-4 py-2">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($customers as $customer): ?>
                                <tr class="odd:bg-white even:bg-gray-50">
                                    <td class="border border-gray-300 px-4 py-2 text-center">
                                        <?= htmlspecialchars($customer['id']) ?>
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <?= htmlspecialchars($customer['nama']) ?>
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <?= htmlspecialchars($customer['email']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>