<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niño/a - Manitos Shoe Store</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <img src="Logo_T.png" alt="Logo">
        <h1>Manitos Shoe Store</h1>
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="Nuevo.php">Lo Nuevo</a></li>
            <li><a href="Hombre.php">Hombre</a></li>
            <li><a href="Mujer.php">Mujer</a></li>
            <li><a href="Ofertas.php">Ofertas y Servicios</a></li>
        </ul>

        <form class="search-form" id="searchForm">
                    <input type="text" name="search" placeholder="Buscar..." class="search-input" id="searchInput">
                    <button type="submit" class="search-button">
                    <span class="material-icons">search</span>
                    </button>
                </form>
        <ul class="menu-right">
            <li class="dropdown">
                <span class="material-icons">menu</span>
                <ul class="dropdown-menu">
                    <li><a href="#"><span class="material-icons">shopping_cart</span> </a></li>
                    <li><a href="#"><span class="material-icons">person</span></a></li>
                    <li><a href="#" id="switchMode"><span class="material-icons">dark_mode</span></a></li>
                </ul>
            </li>
        </ul>
    </nav>




    <div class="container">
        <h1>Calzado y Ropa para Niños y Niñas</h1>
        <div class="products">
            <div class="product">
                <img src="./Images/panda.avif" alt="Shoe 1">
                <h3>Tenis Converse All Star</h3>
                <p>$2000</p>
            </div>
            <div class="product">
                <img src="./Images/asics_negros.avif" alt="Shoe 2">
                <h3>Tenis Asics Kids</h3>
                <p>$2500</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Manitos Shoe Store. Todos los derechos reservados.</p>
    </footer>

     <script>
    const switchModeButton = document.getElementById("switchMode");
    const body = document.body;
    const modeIcon = document.querySelector("#switchMode .material-icons");

    // Check for saved mode in localStorage
    const savedMode = localStorage.getItem("mode");
    if (savedMode === "light") {
        body.classList.add("light-mode");
        modeIcon.textContent = "light_mode";
    }

    switchModeButton.addEventListener("click", () => {
        body.classList.toggle("light-mode");
        const isLightMode = body.classList.contains("light-mode");
        modeIcon.textContent = isLightMode ? "light_mode" : "dark_mode";
        
        // Save the current mode to localStorage
        localStorage.setItem("mode", isLightMode ? "light" : "dark");
    });
</script>

    <script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault(); 
        const searchTerm = document.getElementById('searchInput').value.toLowerCase(); 
        console.log('Buscando:', searchTerm); 

        
        const products = document.querySelectorAll('.product');
        products.forEach(function(product) {
            const productName = product.textContent.toLowerCase();
            if (productName.includes(searchTerm)) {
                product.style.display = 'block'; 
            } else {
                product.style.display = 'none'; 
            }
        });
    });
</script>
</body>
</html>
