<?php
require 'php/config.php';

session_destroy()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StraightUp Tec</title>
    <link rel="stylesheet" href="./Estilos/productos.css">
    <script src="https://kit.fontawesome.com/6c8cfd9e61.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/scrip.js"></script>
    
</head>

<nav>
    <body >
    <header>
        <a href="#" class="logo">
            <h2>StraightUp Tec </h2>                   
        </a>
        <nav>
        <a href="carrito.php" class="btn btn-primary">Carrito<span id="num_cart" class="badge bg-secondary"><?php echo $num_cart; ?></span></a>
            <a href="./index.html" class="nav-link">Inicio</a>
            <a href="./Productos.php" class="nav-link">Productos</a>
            <a href="./Nosotros.html" target="_blank" class="nav-link">Nosotros</a>
            <a href="./login.html" target="_blank" class="nav-link">MiCuenta</a>
           

        </nav>
    </header>
    <div class="titulo">
        CATALOGO DE PRODUCTOS
    </div>
    <div class="category_list">
        <a href="#" class="category_item" category="all">Todo</a>
        <a href="#" class="category_item" category="ordenadores">Ordenadores</a>
        <a href="#" class="category_item" category="laptops">Laptops</a>
        <a href="#" class="category_item" category="smartphones">Smartphones</a>
        <a href="#" class="category_item" category="monitores">Monitores</a>
        <a href="#" class="category_item" category="audifonos">Audifonos</a>
    </div>

    <Article class="Productos">
        <div class="caja " category="smartphones"><div class="contenedor-modal"><img src="./imagenes/imag6.webp"> <div class="overlay"><p> XIAOMI 11T PRO US 8GB+256GB </p> <p>Precio: S/ 2699 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>
        <div class="caja " category="smartphones"><div class="contenedor-modal"><img src="./imagenes/imag7.webp"> <div class="overlay"><p> Xiaomi Redmi Note 10 Pro 128gb 6gb RAM</p> <p>Precio: S/ 1799 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>
        <div class="caja " category="smartphones"><div class="contenedor-modal"><img src="./imagenes/imag8.webp"> <div class="overlay"><p> POCO F3 128GB 6RAM</p> <p>Precio: S/ 1199 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>
        <div class="caja " category="smartphones"><div class="contenedor-modal"><img src="./imagenes/imag9.webp"> <div class="overlay"><p> Xiaomi 11 LITE 5G</p> <p>Precio: S/ 1449 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>
        <div class="caja " category="smartphones"><div class="contenedor-modal"><img src="./imagenes/imag10.webp"> <div class="overlay"><p> Xiaomi POCO X4 PRO 5G 256GB</p> <p>Precio: S/ 2099 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>
        <div class="caja " category="laptops"><div class="contenedor-modal"><img src="./imagenes/laptop1.webp"> <div class="overlay"><p> Laptop HP Intel Core i5 256GB 8GB RAM</p> <p>Precio: S/ 2999 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div> </div></div></div>
        <div class="caja " category="laptops"><div class="contenedor-modal"><img src="./imagenes/laptop2.webp"> <div class="overlay"><p> Laptop Gamer MSI GF63 Intel i5 512GB 8GB RAM</p> <p>Precio: S/ 3299 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>
        <div class="caja " category="laptops"><div class="contenedor-modal"><img src="./imagenes/laptop4.webp"> <div class="overlay"><p> Laptop Lenovo IdeaPad Gaming Intel i5 512GB 16GB RAM</p> <p>Precio: S/ 4799 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>
        <div class="caja " category="laptops"><div class="contenedor-modal"><img src="./imagenes/laptop5.webp"> <div class="overlay"><p> Laptop Gamer Acer 17.3" Intel i7 512GB 16GB RAM</p> <p>Precio: S/ 2899 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>
        <div class="caja " category="laptops"><div class="contenedor-modal"><img src="./imagenes/laptop7.webp"> <div class="overlay"><p> Laptop Lenovo IdeaPad AMD Ryzen 7 512GB 16GB RAM</p> <p>Precio: S/ 4199 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>
        <div class="caja " category="laptops"><div class="contenedor-modal"><img src="./imagenes/laptop8.webp"> <div class="overlay"><p> Laptop ASUS 15.6'Intel i5 10ma generaci??n 8GB 512GB</p> <p>Precio: S/ 3099 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>
        <div class="caja " category="laptops"><div class="contenedor-modal"><img src="./imagenes/laptop10.webp"> <div class="overlay"><p> Laptop Asus Vivobook 15 4H 8GB 512SSD W11</p> <p>Precio: S/ 2.229 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>
        <div class="caja " category="ordenadores"><div class="contenedor-modal"><img src="./imagenes/ordenador1.webp"> <div class="overlay"><p> Gaming desktop Legion Tower 5i 6ta Gen (Intel)</p> <p>Precio: S/ S/4,498.00 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>
        <div class="caja " category="ordenadores"><div class="contenedor-modal"><img src="./imagenes/ordenador2.webp"> <div class="overlay"><p> Cpu Gamer I7-10700, Ram 16gb, 1tb + Ssd 500gb, Nvidia 4gb</p> <p>Precio: S/3,321.00 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>
        <div class="caja " category="monitores"><div class="contenedor-modal"><img src="./imagenes/moni1.webp"> <div class="overlay"><p> Monitor Gamer Teros 3199 27' Ips Curvo 75hz 4ms Fhd Freesync</p> <p>Precio: S/663 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>
        <div class="caja " category="monitores"><div class="contenedor-modal"><img src="./imagenes/moni2.webp"> <div class="overlay"><p> Monitor Gamer LG 27mp60g 27 , Full Hd Ips, 75hz Amd Freesync</p> <p>Precio: S/787 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>
        <div class="caja " category="audifonos"><div class="contenedor-modal"><img src="./imagenes/audi1.webp"> <div class="overlay"><p> Aud??fonos gamer inal??mbricos Logitech G Series G733 negro con luz rgb LED</p> <p>Precio: S/591 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>
        <div class="caja " category="audifonos"><div class="contenedor-modal"><img src="./imagenes/audi2.webp"> <div class="overlay"><p> Aud??fonos gamer HyperX Cloud Alpha black y red</p> <p>Precio: S/327 </p><div class="btn-group"><a href="" class="btn btn-primary">Detalles</a><a href="" class="btn btn-success">Agregar</a></div></div></div></div>


    </Article>

    <script>
        function addProducto(id, token){
            let url = 'clases/carrito.php'
            let formData =new FormData()
            formData.append('id',id)
            formData.append('token',token)

            fetch(url, {
                method: 'POST',
                boby: formData,
                mode:'cors'
            }).then(response => response.json())
            .then(data =>{
                if(data.ok){
                    let elemento = document.getElementById("num_cart")
                    elemento.innerHTML = data.numero

                }
            })

        }
    </script>


        


 
    

    
</body>
<footer>
    <section class="left">
        <ul>
            <li><a href="#"> <i class="fa-brands fa-facebook"></i> Facebook </a></li>

            <li><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
            <li><a href="#">Trabaja con Nosotros</a></li>
            <li><a href="#">Contactanos</a></li>
        </ul>
    </section>
    
    

</footer>
</html>