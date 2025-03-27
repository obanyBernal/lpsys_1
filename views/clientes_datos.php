<?php

?>

<link rel="stylesheet" href="/views/css/clientes-styles.css">

<div class="form-container">
  <div class="titulo-formulario">
    <h2>Datos Personales</h2>
    <p>--</p>
  </div>

  <div class="foto-upload">
    <p class="foto-text">FOTO CLIENTE</p>
    <input type="file" id="foto" name="foto">
  </div>

  <div class="form-group">
    <label for="cliente">Nombre del Cliente <span>*</span></label>
    <input type="text" id="cliente" name="cliente" placeholder=" ">
  </div>

  <div class="form-group">
    <label for="direccion">Dirección (Calle, número...)</label>
    <input type="text" id="direccion" name="direccion" placeholder=" ">
  </div>
</div>
