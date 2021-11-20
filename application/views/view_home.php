<!DOCTYPE html>
<html lang="ptbr">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Diego Bike Motos</title>
    <meta name="description" content="A clean, responsive storefront boilerplate with no database or backend">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="<?= base_url('assets/shop/css/google_fonts.css?family=Raleway:400,300,600'); ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/shop/css/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="<?= base_url('assets/shop/css/imports.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/shop/css/simpleStore.min.css'); ?>">

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/shop/images/favicon.png'); ?>">

</head>
<body>

    <!-- Primary Page Layout
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="container simpleStore">
        

        <?php

            if ($this->session->userdata("usuario_logado")){ ?>

                <p>Olá, <?= $dados_usuario->nome; ?>! ✍(◔◡◔)</p>

                <a href="<?= base_url('login/logout'); ?>"><i class="fa fa-sign-out" aria-hidden="true" style="padding: 10px; margin-bottom: 10px; border-style: groove;"> Sair </i></a>

                <a href="<?= base_url('page/cadastro_produtos'); ?>"><i class="fa fa-wpforms" aria-hidden="true" style="padding: 10px; margin-bottom: 10px; border-style: groove;"> Adicionar/Remover Produtos</i></a>

                <a href="<?= base_url('page/cadastro_usuarios'); ?>"><i class="fa fa-user" aria-hidden="true" style="padding: 10px; margin-bottom: 10px; border-style: groove;"> Adicionar/Remover Administradores</i></a>

                <hr>
                
            <?php }else{ ?>
                
                <a href="<?= base_url('page/cadastro_produtos'); ?>"><i class="fa fa-wpforms" aria-hidden="true" style="padding: 10px; margin-bottom: 10px; border-style: groove;"> Acessar como administrador</i></a>

            <?php }

        ?>
        

        <div class="row">
            <a class="brand" href="#"></a>
            <a class="button button-primary u-pull-right simpleStore_viewCart">
                <i class="fa fa-shopping-cart"></i> Carrinho <span class="simpleCart_total"></span>
            </a>
        </div>
        <div class="simpleStore_container"></div>
        <div class="simpleStore_cart_container"></div>
    </div>

    <!-- Templates
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Products View -->
    <script id="products-template" type="x-template">
        <div class="column">
            <div class="simpleCart_shelfItem">
                <img src="" class="item_thumb"/>
                <div class="row">
                    <h5 class="item_name"></h5>
                    <div class="simpleStore_getDetail_container">
                        <span class="item_price"></span>
                    </div>
                    <div class="simpleStore_getDetail_container">
                        <a class="button u-pull-right simpleStore_getDetail">Descrição</a>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <!-- Product Detail View -->
    <script id="product-detail-template" type="x-template">
        <div class="simpleCart_shelfItem simpleStore_detailView">
            <a href="#" class="close view_close">&times;</a>

            <div class="row">
                <div class="four columns">
                    <img src="" class="item_thumb"/>
                </div>
                <div class="eight columns">
                    <h5 class="item_name"></h5>

                    <p class="item_description"></p>
                    <span class="item_price"></span>

                    <div class="qty">
                        <label>Quantidade</label>
                        <input type="number" value="1" min="1" step="1" class="item_Quantity">
                    </div>
                    <div class="simpleStore_options"></div>
                    <a class="item_add button u-pull-right" href="javascript:;">Adicionar ao carrinho</a>
                </div>
            </div>
        </div>
    </script>

    <!-- Cart View -->
    <script id="cart-template" type="x-template">
        <div class="simpleStore_cart">
            <h2>Carrinho</h2>
            <a href="#" class="close">&times;</a>

            <div class="row">
                <div class="eight columns">
                    <div class="simpleCart_items"></div>
                    <a href="javascript:;" class="simpleCart_empty u-pull-left">Esvaziar carrinho <i class="fa fa-trash-o"></i></a>
                </div>
                <div class="four columns">
                    <div class="cart_info">
                        <div class="cart_info_item cart_itemcount">Produtos:
                            <div class="simpleCart_quantity"></div>
                        </div>
                        <div class="cart_info_item cart_taxrate">Taxa de imposto:
                            <div class="simpleCart_taxRate"></div>
                        </div>
                        <div class="cart_info_item cart_tax">Taxa:
                            <div class="simpleCart_tax"></div>
                        </div>
                        <div class="cart_info_item cart_shipping">Envio:
                            <div class="simpleCart_shipping"></div>
                        </div>
                        <div class="cart_info_item cart_total"><b>Total:
                            <div class="simpleCart_grandTotal"></div>
                        </b></div>
                        <a href="javascript:;" class="button button-primary simpleStore_checkout u-pull-right">Finalizar <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <!-- Error View -->
    <script id="error-template" type="x-template">
        <div class="error">
            <b>Sorry, something went wrong :(</b>
			<p class="error_text"></p>
			<a href="#" class="close alert_close">&times;</a>
        </div>
    </script>

<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>

<!-- Scripts
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script src="<?= base_url('assets/shop/js/jquery-2.1.4.min.js'); ?>"></script>
<script src="<?= base_url('assets/shop/js/simpleCart.min.js'); ?>"></script>
<script src="<?= base_url('assets/shop/js/simpleStore.min.js'); ?>"></script>

<script src="<?= base_url('assets/shop/js/config.js'); ?>"></script>

</html>