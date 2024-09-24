<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica sebas</title>
    <link rel="stylesheet" href="./styles/index.css">
</head>
    <body>
        <script src="./javascripts/funciones.js"></script>
        <div class="body-margin">
            <br>
        </div>
        
        <div class="body-content">
            <header class="header">
                
                <div class="header-item-img">
                    <img src="./srcs/homero bailando.gif" alt="" width="150px" height="150px">
                </div>

                <div class="header-item-title">
                    <h1>Hola mundo</h1>
                    <?php echo '<p>hola mundo con php</p>' ?>
                </div>

            </header>

            <div>
                <button onclick="btnSaludar()">pulsame</button>
                <p>Este botón ha sido <span id="txtContador">0</span>veces</p>
            </div>




        </div>
        <div class="body-margin">
            <br>
        </div>
    </body>
</html>