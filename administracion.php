<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="img/logo/logo.ico">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LACHONA | FEL</title>
  <?php include('./components/header.php') ?>
</head>

<body id="body-pd">
  <div id="menu">
    <header class="header" id="header">
      <div class="header_toggle">
        <i class="bx bx-menu" id="header-toggle"></i>
      </div>
      <b>
        <p id="busuario"></p>
      </b>
    </header>
    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
          <a href="#" class="nav_logo">
            <img src="img/logo/logo50x50.png" class="logo-icon" alt="">
            <span class="nav_logo-name">LACHONA</span>
          </a>
          <div class="nav_list">
            <a href="administracion.php" class="nav_link active">
              <i class="bx bx-folder nav_icon"></i>
              <span class="nav_name">Facturación</span>
            </a>
            <a href="#" class="nav_link">
              <i class="bx bx-grid-alt nav_icon"></i>
              <span class="nav_name">Inventario</span>
            </a>
            <a href="#" class="nav_link">
              <i class="bx bx-user nav_icon"></i>
              <span class="nav_name">Pedidos</span>
            </a>
            <a href="#" class="nav_link">
              <i class="bx bx-message-square-detail nav_icon"></i>
              <span class="nav_name">Configuración</span>
            </a>
            <a href="#" class="nav_link">
              <i class="bx bx-bookmark nav_icon"></i>
              <span class="nav_name">Ayuda</span>
            </a>
          </div>
        </div>
        <a href="index.php" class="nav_link">
          <i class="bx bx-log-out nav_icon"></i>
          <span class="nav_name">Cerrar Sesión</span>
        </a>
      </nav>
    </div>
  </div>
  <!--Container Main start-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Añadir productos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Cantidad</label>
                <select class="form-control">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Producto</label>
                <select class="form-control">
                  <option value="1">Sofá cama, 166x75x66cm, cuerina, negro</option>
                  <option value="2">Inodoro ronco una pieza blanco, elongado, descarga doble, aqua nouva</option>
                  <option value="3">Cama matrimonial, vitalia, 75 doble pillow, 59 x 140 x 190cm (base y colchón)</option>
                  <option value="4">Cama queen vitalia 75 doble pillow 59 x 150 x 190, (colchón y cama)</option>
                  <option value="5">Combo puerta colonial, 1.00 x 207cm, + pomo con llave + bisagras</option>
                  <option value="6">Cama queen, sky doble pillow 59 x 150 x 190, (base y colchón)</option>
                  <option value="7">Bolsa de dormir discovery expedition</option>
                  <option value="8">Interruptor sencillo visor blanco</option>
                  <option value="9">Chasis arandano sin placa</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Precio</label>
                <input type="text" class="form-control" value="Q.999.99">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h2>Facturación</h2>
    <hr>
    <div class="row top-factura">
      <div class="col-3">
        <div class="form-group">
          <label>NIT</label>
          <input type="text" id="nit" value="CF" class="form-control" placeholder="CF">
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          <label>Nombre</label>
          <input type="text" class="form-control" value="Consumidor Final" placeholder="Consumidor Final">
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" placeholder="Email">
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          <label>Dirección</label>
          <input type="text" class="form-control" value="Ciudad de Guatemala" placeholder="Ciudad de Guatemala">
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-9"></div>
      <div class="col">
        <button class="btn btn-primary" id="add">Agregar artículo</button>
        <button class="btn btn-danger" id="clean">Limpiar Factura</button>
      </div>
    </div>
    <br><br>
    <div class="row">
      <div class="col">
        <table class="table table-striped table-active">
          <thead>
            <tr>
              <th>No</th>
              <th>Cantidad</th>
              <th>Descripción</th>
              <th>P. Unidad (sin IVA)</th>
              <th>Descuento</th>
              <th>Total</th>
              <th>Impuesto</th>
              <th>Opcion</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>1</td>
              <td>1</td>
              <td>Sofá cama, 166x75x66cm, cuerina, negro</td>
              <td>Q.999.99</td>
              <td>Q.99.99</td>
              <td>Q.900.00</td>
              <td>Q.108.00</td>
              <td>
                <button class="btn btn-danger"><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th>2</td>
              <td>4</td>
              <td>Inodoro ronco una pieza blanco, elongado, descarga doble, aqua nouva</td>
              <td>Q.1250.00</td>
              <td>Q.300</td>
              <td>Q.4,700.00</td>
              <td>Q.564.00</td>
              <td>
                <button class="btn btn-danger"><i class="bx bx-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th colspan="6">
                <h2>Total</h2>
              </th>
              <th colspan="2">
                <h2>Q.5,600.00</h2>
              </th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-10"></div>
      <div class="col">
        <button class="btn btn-success" id="facturar">
          <h2>Facturar</h2>
        </button>
      </div>
    </div>
  </div>
  <br><br>
  <?php include('./components/footer.php') ?>
  <script type="text/javascript" src="./src/script.js"></script>
</body>

</html>