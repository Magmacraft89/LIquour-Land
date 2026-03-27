<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="../../Assets/Css/pos.css">

<div class="register">
  <div class="left">
    <div class="order-window">
      <table>
        <tbody>
          <tr>
            <td>#</td>
            <td>Producto</td>
            <td>Total</td>
            <td>Subtotal</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Spaghetti</td>
            <td>$9.50</td>
            <td>EN</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Side Salad</td>
            <td>$4.00</td>
            <td>SS</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Hamburger</td>
            <td>$7.00</td>
            <td>EN</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Chicken Alfredo</td>
            <td>$12.00</td>
            <td>EN</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Soda</td>
            <td>$2.00</td>
            <td>BV</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Iced tea</td>
            <td>$1.50</td>
            <td>BV</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="order-total">
      <span>$38.00</span>
    </div>
    <div class="buttons">
      <button class="btn-special op-plus"><i class="fas fa-plus"></i></button>
      <button class="btn-special op-minus"><i class="fas fa-minus"></i></button>
      <button class="btn-special op-reset"><i class="fas fa-times"></i> Reiniciar</button>
      <button class="btn-special op-void"><i class="fas fa-ban"></i> Anular</button>

      <button class="btn-num n1">1</button>
      <button class="btn-num n2">2</button>
      <button class="btn-num n3">3</button>
      <button class="btn-num n4">4</button>
      <button class="btn-num n5">5</button>
      <button class="btn-num n6">6</button>
      <button class="btn-num n7">7</button>
      <button class="btn-num n8">8</button>
      <button class="btn-num n9">9</button>
      <button class="btn-num n0">0</button>
      <button class="btn-num ndot">.00</button>
      
      <button class="btn-special op-equal"><i class="fas fa-equals"></i></button>
    </div>
  </div>
  <div class="right">
    <div class="categories">
      <ul>
        <li><a href="#">Todos</a></li>
        <li><a href="#">Vinos</a></li>
        <li><a href="#">Tequila</a></li>
        <li><a href="#">Cocteles</a></li>
        <li><a href="#">Cervesas</a></li>
        <li><a href="#">Licores</a></li>
      </ul>
    </div>
    <div class="menu-items">
      <ul>
          <li class="product-card">
              <div class="product-stock">
                  <span class="stock-label">STOCK</span>
                  <span class="stock-value">25</span> </div>

              <div class="product-image-container">
                  <img src="https://images.pexels.com/photos/2912108/pexels-photo-2912108.jpeg" alt="Spaghetti" class="product-img">
              </div>
              
              <div class="product-info">
                  <span class="item">Spaghetti Alfredo</span>
                  <span class="category">Entree</span>
              </div>

              <div class="product-price">
                  $9.50
              </div>

              <div class="product-controls">
                  <button class="btn-qty btn-minus"><i class="fas fa-minus"></i></button>
                  <span class="qty-counter"></span>
                  <button class="btn-qty btn-plus"><i class="fas fa-plus"></i></button>
              </div>
          </li>

          <li class="product-card">
              <div class="product-stock">
                  <span class="stock-label">STOCK</span>
                  <span class="stock-value">120</span> </div>

              <div class="product-image-container">
                  <img src="https://i.pinimg.com/736x/ea/ff/a2/eaffa23a48caa3aab3487219f25de1fe.jpg" alt="Soda" class="product-img">
              </div>
              
              <div class="product-info">
                  <span class="item">Soda (Coca-Cola)</span>
                  <span class="category">Beverages</span>
              </div>

              <div class="product-price">
                  $2.00
              </div>

              <div class="product-controls">
                  <button class="btn-qty btn-minus"><i class="fas fa-minus"></i></button>
                  <span class="qty-counter"></span>
                  <button class="btn-qty btn-plus"><i class="fas fa-plus"></i></button>
              </div>
          </li>

      </ul>
    </div>
    
    <div class="payment-keys">
      <ul>
          <li id="toggle-keyboard" style="cursor: pointer;">
            <i class="fas fa-keyboard fa-2x fa-fw" data-fa-transform="up-2"></i> Teclado
          </li>

          <li>
              <a href="ventas_efectivo.php" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; align-items: center;">
                  <i class="fas fa-money-bill-alt fa-2x fa-fw" data-fa-transform="up-2"></i> Efectivo
              </a>
          </li>

          <li>
              <a href="ventas_tarjeta.php" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; align-items: center;">
                  <i class="fas fa-credit-card fa-2x fa-fw" data-fa-transform="up-2"></i> Tarjeta
              </a>
          </li>

          <li>
              <a href="promociones.php" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; align-items: center;">
                  <i class="fas fa-tags fa-2x fa-fw" data-fa-transform="up-2"></i> Descuento
              </a>
          </li>

          <li>
              <a href="perfil_empleado.php" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; align-items: center;">
                  <i class="fas fa-user fa-2x fa-fw" data-fa-transform="up-2"></i> Empleado
              </a>
          </li>

          <li>
              <a href="../Admin/Dasboard.php" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; align-items: center;">
                  <i class="fas fa-sign-out-alt fa-2x fa-fw" data-fa-transform="up-2"></i> Salir
              </a>
          </li>
      </ul>
    </div>
  </div>
</div>

<script src="../../Assets/Js/pos.js"></script>