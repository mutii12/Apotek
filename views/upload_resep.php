<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unggah Resep Obat</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .bg-gradient {
      background: linear-gradient(135deg, #3b82f6, #60a5fa);
    }
  </style>
</head>
<body class="bg-gray-100">
    <?php include 'header.php'; ?>

  <main class="container mx-auto py-12">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-lg mx-auto">
      <h2 class="text-3xl font-bold text-center text-blue-500 mb-6">Unggah Resep Anda</h2>
      <p class="text-gray-600 text-center mb-4">Pastikan foto resep jelas, terang, dan terbaca.</p>
      <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_costumer" value="1">
        <div class="mb-6">
          <label for="file_resep" class="block text-gray-700 font-bold mb-2">Pilih File Resep</label>
          <input type="file" id="file_resep" name="file_resep" class="w-full bg-gray-100 border border-gray-300 rounded py-3 px-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" required>
        </div>
        <button type="submit" class="w-full bg-gradient text-white py-3 px-6 rounded-lg hover:shadow-lg transition-shadow duration-300 font-bold text-lg">Upload</button>
      </form>
    </div>
  </main>

  <?php include 'footer.php'; ?>
</body>
</html>
