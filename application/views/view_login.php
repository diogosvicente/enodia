<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url('assets/uploads/files/logo.png'); ?>" type="image/ico" />

    <title>Loja - Login</title>

    <!-- Bootstrap -->
    <link href="<?=base_url('assets/bootstrap/css/bootstrap.min.css"');?> rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url('assets/login/css/custom.min.css"');?> rel="stylesheet">
  </head>

  <body class="login">

    <a href="<?= base_url('page'); ?>"><i class="fa fa-back" aria-hidden="true" style="margin: 15px">← Voltar</i></a>

    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">

        <?php
        if($this->session->flashdata("success")):
           echo "<p class=\"alert alert-success\">" . $this->session->flashdata("success") . "</p>";
        elseif($this->session->flashdata("danger")):
          echo "<p class=\"alert alert-danger\">" . $this->session->flashdata("danger") . "</p>";
        endif;

        if($this->session->userdata("usuario_logado")) :
          echo anchor("login/logout", "Sair", array("class" => "btn btn-primary btn-lg btn-block"));
          
        else : ?>

          <section class="login_content">
            <?php
              echo form_open("login/autenticar");
              echo "<h1>Login</h1>";
              echo "<div>";
              echo form_input(array(
                    "name" => "login",
                    "id" => "login",
                    "class" => "form-control",
                    "maxlength" => "255",
                    "placeholder" => "Usuário",
                    "required" => ""
              ));
              echo "</div>";
              
              echo "<div>";
              echo form_password(array(
                    "name" => "senha",
                    "id" => "senha",
                    "class" => "form-control",
                    "maxlength" => "255",
                    "placeholder" => "Senha",
                    "required" => ""
              ));
              echo "</div>";

              echo "<div>";
              echo form_button(array(
                    "class" => "btn btn-default submit",
                    "type" => "submit",
                    "content" => "Entrar",
              ));
              echo "</div>                  
                  <div class=\"separator\">                  
                    <br />
                    <div><img src=". base_url('assets/uploads/files/logo.png') . " width='90' heigth='90'>
                      <h1><i class=\"fa fa-cloud-upload\"></i> Enodia</h1>
                      <p>©2021 Enódia - Gerenciador de produtos da loja</p>
                    </div>
                  </div>";
              echo form_close();
            endif
            ?>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
