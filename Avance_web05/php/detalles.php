<?php 

require 'php/config.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';
if ($id ==''|| $token ==''){
    echo 'Error al procesar la petición';
    exit;
} else {
    $token_tmp = hosh_hmac('sha1', $id, KEY_TOKEN);
    if($token==$token_tmp){
    }else{
        echo 'Error al procesar la petición';
        exit;
    }
}
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

<body>
    <header>
        <a href="#" class="logo">
            <h2>StraightUp Tec </h2>
                    
        </a>
        <nav >
            <a href="carrito.php" class="btn btn-primary">Carrito<span id="num_cart" class="badge bg-secondary"><?php echo $num_cart; ?></span></a>
            <a href="./index.html" class="nav-link">Inicio</a>
            <a href="./Productos.php" class="nav-link">Productos</a>
            <a href="./Nosotros.html" target="_blank" class="nav-link">Nosotros</a>
            <a href="./login.html" target="_blank" class="nav-link">MiCuenta</a>
           

        </nav>
    </header>

    <Article class="Productos">
    <div class="btn-group">
        <a href="detalles.php?id=<?php echo $row['id'];?>&token=<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>" class="btn btn-primary">Detalles</a>
        <a href="" class="btn btn-success">Agregar</a>
    </div>
            

        

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