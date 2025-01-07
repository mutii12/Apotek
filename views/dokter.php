<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <?php include 'header.php'; ?>

    <main class="container mx-auto py-12">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold text-center text-blue-500 mb-6">Daftar Dokter</h2>
            <div class="overflow-x-auto">
                <table class="table-auto w-full border-collapse border border-gray-300 rounded-lg">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="py-3 px-4 text-left">Nama</th>
                            <th class="py-3 px-4 text-left">Spesialisasi</th>
                            <th class="py-3 px-4 text-left">Kontak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($dokters)): ?>
                            <?php foreach ($dokters as $dokter): ?>
                                <tr class="bg-gray-100 border-b border-gray-300">
                                    <td class="py-3 px-4 text-gray-700">
                                        <?= htmlspecialchars($dokter['nama']) ?>
                                    </td>
                                    <td class="py-3 px-4 text-gray-700">
                                        <?= htmlspecialchars($dokter['spesialisasi']) ?>
                                    </td>
                                    <td class="py-3 px-4 text-gray-700">
                                        <?= htmlspecialchars($dokter['kontak']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr class="bg-gray-100">
                                <td colspan="3" class="py-3 px-4 text-center text-gray-500">Tidak ada data dokter yang tersedia.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
