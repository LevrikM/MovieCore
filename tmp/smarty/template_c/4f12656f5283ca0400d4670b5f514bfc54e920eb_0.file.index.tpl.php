<?php
/* Smarty version 4.3.0, created on 2023-04-22 03:13:19
  from 'D:\xampp\htdocs\MovieCore\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644334afe3bac8_42312296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f12656f5283ca0400d4670b5f514bfc54e920eb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\MovieCore\\views\\default\\index.tpl',
      1 => 1682125998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644334afe3bac8_42312296 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mt-3">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsFilm']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value["status"] != 0) {?>
                    <div class="card mb-4">
                        <img class="card-img-top" src="/images/films/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $_smarty_tpl->tpl_vars['item']->value["name"];?>
</h2>
                            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['item']->value["description"];?>
</p>
                            <a href="/film/show/?film=<?php echo $_smarty_tpl->tpl_vars['item']->value["id"];?>
" class="btn btn-primary">Читати більше &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Жанр: <?php echo $_smarty_tpl->tpl_vars['item']->value["genre"];?>

                        </div>
                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="col-md-4">
            <div class="card my-4">
                <h5 class="card-header">Пошук по сайту</h5>
                <div class="card-body">
                    <form action="/find/name/" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" name="nameFind" placeholder="Введіть запит..." required>
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Пошук!</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .col-lg-6 a{
        color: black;
    }
</style><?php }
}
