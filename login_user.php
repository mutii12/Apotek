<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ApotikTitikKoma</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.5);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <!-- Main Login Form -->
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-blue-600">ApotikTitikKoma</h1>
            <p class="text-gray-600 mt-2">Silakan masuk ke akun Anda</p>
        </div>

        <form id="mainLoginForm" action="proses_login.php" method="POST" class="space-y-4">
            <div>
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <div class="relative">
                    <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required 
                        placeholder="Masukkan email Anda" 
                        class="w-full p-3 pl-10 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
            </div>
            
            <div>
                <label for="password" class="block text-gray-700 font-bold mb-2">Kata Sandi</label>
                <div class="relative">
                    <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        required 
                        placeholder="Masukkan kata sandi" 
                        class="w-full p-3 pl-10 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
            </div>
            
            <button 
                type="submit" 
                class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition"
            >
                Masuk
            </button>
        </form>
        
        <div class="mt-6 text-center">
            <p>Belum punya akun? 
                <a href="#" id="registerBtn" class="text-blue-600 hover:underline">Daftar Sekarang</a>
            </p>
        </div>
    </div>

    <!-- Registration Modal -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <div class="flex justify-between items-center border-b pb-3">
                <h2 class="text-2xl font-bold">Daftar Akun ApotikTitikKoma</h2>
                <span id="closeRegisterModal" class="text-gray-500 text-2xl cursor-pointer">&times;</span>
            </div>
            
            <form id="registrationForm" class="mt-6">
                <div class="mb-4">
                    <label for="fullName" class="block text-gray-700 font-bold mb-2">Nama Lengkap</label>
                    <input 
                        type="text" 
                        id="fullName" 
                        required 
                        placeholder="Masukkan nama lengkap" 
                        class="w-full p-2 border rounded-lg"
                    >
                </div>

                <div class="mb-4">
                    <label for="registerEmail" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input 
                        type="email" 
                        id="registerEmail" 
                        required 
                        placeholder="Masukkan email" 
                        class="w-full p-2 border rounded-lg"
                    >
                </div>
                
                <div class="mb-4">
                    <label for="registerPassword" class="block text-gray-700 font-bold mb-2">Kata Sandi</label>
                    <input 
                        type="password" 
                        id="registerPassword" 
                        required 
                        placeholder="Buat kata sandi" 
                        class="w-full p-2 border rounded-lg"
                    >
                </div>
                
                <button 
                    type="submit" 
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition"
                >
                    Daftar
                </button>
            </form>
        </div>
    </div>

    <script>
        const registerBtn = document.getElementById('registerBtn');
        const registerModal = document.getElementById('registerModal');
        const closeRegisterModal = document.getElementById('closeRegisterModal');

        // Open Register Modal
        registerBtn.addEventListener('click', (e) => {
            e.preventDefault();
            registerModal.style.display = 'block';
        });

        // Close Register Modal
        closeRegisterModal.addEventListener('click', () => {
            registerModal.style.display = 'none';
        });

        // Close modal on outside click
        window.addEventListener('click', (e) => {
            if (e.target === registerModal) {
                registerModal.style.display = 'none';
            }
        });
    </script>
</body>
</html>
