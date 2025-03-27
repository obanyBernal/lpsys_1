<?php
    $_SESSION["current_user_id"] = 10;

    ?>

<div class="full-reset full-cover-background form-container-general" style="background-color: black;">
      <div class="form-container">
        <p class="text-center" style="margin-top: 17px;">
          <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
        </p>
        <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión con tu cuenta</h4>
        <form method="POST" action="index" autocomplete="off" enctype="multipart/form-data">
          <div class="group-material-login">
            <input type="text" class="material-login-control" name="loginUserName" value="Administrador" pattern="[a-zA-Z0-9]{3,15}" required="" maxlength="15">
            <span class="highlight-login"></span>
            <span class="bar-login"></span>
            <label><i class="zmdi zmdi-account"></i> &nbsp; Nombre de usuario</label>
          </div><br>
          <div class="group-material-login">
            <input type="password" class="material-login-control" name="loginUserPass" value="Administrador" pattern="[a-zA-Z0-9$@.-]{4,70}" maxlength="70" required="">
            <span class="highlight-login"></span>
            <span class="bar-login"></span>
            <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
          </div>
          <button class="btn-login text-center" type="submit">Ingresar al sistema</button>
          <div class="form-process"></div>
        </form>
      </div>
    </div>