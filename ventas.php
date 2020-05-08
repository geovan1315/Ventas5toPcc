<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Ventas</title>
    </head>
    <body style="background: #f2f3f4">
        <br />
        <div align="center">
            <h1>VENTAS</h1>
        </div>

        <div align="right">
            <a href="index.html">Salir</a>
        </div>
        <hr />
        <br />

        <?php
            if(isset($_GET['producto']))
            {
                include('Conexion.php');
                $con=new Conexion();
                //echo "se realizo una compra del producto: ".$_GET['producto']." a ".$_GET['precio'] ;
                $pro=$_GET['producto'];
                $precio=$_GET['precio'];

                $q="INSERT INTO `carrito`( `producto`, `precio`) VALUES ('$pro','$precio');";
                $con->query($q);
                $con->close();
                
                ?>

                     <div class="container">
                        <div class="row justify-content-center">
                            <div class="clo-10 ">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Precio</th>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $carrito=new Conexion();
                                            $q="SELECT * FROM `carrito` WHERE 1;";
                                            $compra=$carrito->query($q);
                                            $carrito->close();

                                            while($row=mysqli_fetch_assoc($compra))
                                            {
                                                echo "
                                                        <tr>
                                                            <td>
                                                                <p> ".$row['producto'] ." </p>
                                                            </td>
                                                            <td>
                                                                <p> ".$row['precio'] ." </p>
                                                            </td>
                                                        </tr>
                                                ";
                                            }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                     </div>

                <?php
            }
        ?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="clo-10 ">
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Agragar Carrito</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="img/J3Prime.jpg" />
                                </td>
                                <td>
                                    <p>
                                        El Samsung Galaxy J3 Prime sale al mercado como uno de los nuevos modelos de gama de entrada del fabricante, con un precio que se sitúa en la órbita de los 100 euros y con el aliciente de debutar con Android 7.0 Nougat de serie.
                                    </p>
                                </td>
                                <td>
                                    <p>$ 100.00</p>
                                </td>
                                <td>
                                    <a href="?producto=J3Prime&precio=100">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/A50.jpg" />
                                </td>
                                <td>
                                    <p>
                                        El Galaxy A50 es pura estética de primera calidad. Ya sea en sus colores modernos blanco o negro o en los colores brillantes coral o azul, su cuerpo delgado cabe cómodamente en la mano. Además, con la cubierta de plástico vidriado 3D y el escáner de huellas dactilares en la pantalla, sentirás curvas suaves y perfectas en los bordes.
                                    </p>
                                </td>
                                <td>
                                    <p>$ 150.00</p>
                                </td>
                                <td>
                                    <a href="?producto=A50&precio=150">Comprar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/S7.jpg" />
                                </td>
                                <td>
                                    <p>
                                        Hemos diseñado Galaxy S7 y S7 edge dando rienda suelta a nuestra imaginación. El resultado es una usabilidad incomparable, repleta de funciones avanzadas con un aspecto descaradamente moderno. Unos smartphones con un aspecto realmente atractivo y muy fáciles de usar.
                                    </p>
                                </td>
                                <td>
                                    <p>$ 250.00</p>
                                </td>
                                <td>
                                    <a href="?producto=S7&precio=250">Comprar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>