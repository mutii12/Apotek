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

    // Event listeners for navigation buttons
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

    // Event listeners for slide indicators
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

    // Cart functionality
    const cartButton = document.querySelector('.fa-shopping-cart');
    const cartCountDisplay = document.getElementById('cart-count');
    const cartModal = document.getElementById('cart-modal');
    const cartItems = document.getElementById('cart-items');
    const closeCartButton = document.getElementById('close-cart');
    const buyNowButtons = document.querySelectorAll('.buy-now');
    let cart = [];

    // Function to update the cart count
    function updateCartCount() {
        const totalCount = cart.reduce((total, item) => total + item.quantity, 0);
        cartCountDisplay.textContent = totalCount;
    }

    // Function to add products to the cart
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', (e) => {
            const productCard = button.closest('div');
            const productName = productCard.querySelector('.product-name').textContent;
            const productPrice = productCard.querySelector('.product-price').textContent;
            const productStock = parseInt(productCard.querySelector('.product-stock').textContent);

            // Check if stock is sufficient
            if (productStock > 0) {
                // Decrease product stock
                const newStock = productStock - 1;
                productCard.querySelector('.product-stock').textContent = newStock;

                // Check if the product is already in the cart
                const existingItem = cart.find(item => item.name === productName);
                if (existingItem) {
                    existingItem.quantity += 1;
                } else {
                    cart.push({ name: productName, price: productPrice, quantity: 1 });
                }

                // Update the cart count
                updateCartCount();
                alert(`${productName} berhasil ditambahkan ke keranjang!`);
            } else {
                alert(`Stok ${productName} habis!`);
            }
        });
    });

    // Function to handle "Buy Now" action
    buyNowButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const productCard = button.closest('div');
            const productName = productCard.querySelector('.product-name').textContent;
            const productPrice = productCard.querySelector('.product-price').textContent;
            const productStock = parseInt(productCard.querySelector('.product-stock').textContent);

            // Check if stock is sufficient for immediate purchase
            if (productStock > 0) {
                // Simulate direct purchase or redirect to checkout page
                alert(`${productName} berhasil dibeli!`);
                // Redirect to checkout page if applicable
                window.location.href = 'checkout.php'; // Ganti dengan halaman checkout Anda
            } else {
                alert(`Stok ${productName} habis!`);
            }
        });
    });

    // Show cart modal when cart icon is clicked
    cartButton.addEventListener('click', () => {
        cartItems.innerHTML = ''; // Clear previous cart items
        cart.forEach(item => {
            const li = document.createElement('li');
            li.textContent = `${item.name} - ${item.quantity} x ${item.price}`;
            cartItems.appendChild(li);
        });
        cartModal.classList.remove('hidden');
    });

    // Close cart modal
    closeCartButton.addEventListener('click', () => {
        cartModal.classList.add('hidden');
    });
});