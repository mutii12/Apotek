<?php

if (!isset($_SESSION['nama'])) {
    echo "<script>
        alert('Anda harus login terlebih dahulu!');
        window.location.href = '../views/login.php';
    </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Order - Apotek Titik Koma</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-5xl bg-white rounded-lg shadow-lg p-8">
        <div class="text-center mb-6">
            <!-- <a href="../controllers/LogoutController.php">Logout</a> -->
            <h1 class="text-3xl font-bold text-blue-600">Apotek Titik Koma</h1>
            <p class="text-gray-600 mt-2">Silakan lakukan proses order</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Form Order -->
            <div>
                <h2 class="text-2xl font-bold text-blue-500 mb-4">Tambah Order</h2>
                <form method="POST" class="space-y-4">
                    <input type="hidden" value="<?= htmlspecialchars($_SESSION['id']) ?>" name="id_costumer">
                    <div>
                        <label for="nama" class="block text-gray-700 font-bold mb-2">Nama Customer</label>
                        <input
                            type="text"
                            id="nama"
                            name="nama" value="<?= htmlspecialchars($_SESSION['nama']) ?>"
                            required readonly
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="id_obat" class="block text-gray-700 font-bold mb-2">Pilih Obat</label>
                        <select
                            id="id_obat"
                            name="id_obat"
                            required
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <?php foreach ($obatList as $obat): ?>
                                <option value="<?= htmlspecialchars($obat['id']) ?>">
                                    <?= htmlspecialchars($obat['nama_obat']) ?> (<?= htmlspecialchars($obat['harga']) ?>)
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div>
                        <label for="jumlah" class="block text-gray-700 font-bold mb-2">Jumlah</label>
                        <input
                            type="number"
                            id="jumlah"
                            name="jumlah"
                            required
                            placeholder="Masukkan jumlah"
                            class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <button
                        type="submit"
                        name="add_order"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">
                        Tambah ke Keranjang
                    </button>
                    <br><br><br>
                    <a
                        href="../index.php"
                        class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition">
                        Kembali ke Halaman Utama
                    </a>
                </form>
            </div>

            <!-- Tabel Orders -->
            <div>
                <h3 class="text-2xl font-bold text-blue-500 mb-4">Daftar Pesanan</h3>
                <div class="overflow-x-auto">
                    <table class="table-auto w-full border-collapse border border-gray-300">
                        <thead class="bg-blue-100">
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">Nama Obat</th>
                                <th class="border border-gray-300 px-4 py-2">Jumlah</th>
                                <th class="border border-gray-300 px-4 py-2">Total Harga</th>
                                <th class="border border-gray-300 px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order): ?>
                                <tr class="odd:bg-white even:bg-gray-50">
                                    <td class="border border-gray-300 px-4 py-2">
                                        <?= htmlspecialchars($order['nama_obat']) ?>
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <?= htmlspecialchars($order['jumlah']) ?>
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <?= htmlspecialchars($order['total_harga']) ?>
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <form method="POST" class="space-y-2">
                                            <input type="hidden" name="id" value="<?= htmlspecialchars($order['id']) ?>">
                                            <input type="hidden" name="id_obat" value="<?= isset($order['id_obat']) ? htmlspecialchars($order['id_obat']) : '' ?>">
                                            <input
                                                type="number"
                                                name="jumlah"
                                                value="<?= htmlspecialchars($order['jumlah']) ?>"
                                                class="w-16 border rounded-lg p-2">
                                            <button
                                                type="submit"
                                                name="update_order"
                                                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                                                Update
                                            </button>
                                            <button
                                                type="submit"
                                                name="delete_order"
                                                class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">
                                                Hapus
                                            </button>
                                        </form>
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