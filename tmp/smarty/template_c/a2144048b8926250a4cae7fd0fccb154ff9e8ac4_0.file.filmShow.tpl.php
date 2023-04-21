<?php
/* Smarty version 4.3.0, created on 2023-04-21 21:25:53
  from 'D:\xampp\htdocs\MovieCore\views\default\filmShow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6442e3413d7bd6_35637691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2144048b8926250a4cae7fd0fccb154ff9e8ac4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\MovieCore\\views\\default\\filmShow.tpl',
      1 => 1682090669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6442e3413d7bd6_35637691 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsFilmInfo']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <div class="container" style="margin-bottom: 150px;">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="mt-4"><?php echo $_smarty_tpl->tpl_vars['item']->value["name"];?>
</h1>
                <p class="lead">
                    Режисер: <?php echo $_smarty_tpl->tpl_vars['item']->value["director"];?>
<br>
                </p>
                <hr>
                <p>Жанр: <?php echo $_smarty_tpl->tpl_vars['item']->value["genre"];?>
 </p>
                <hr>
                <img class="img-fluid rounded" src="/images/films/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="">
                <hr>
                <p class="lead"><?php echo $_smarty_tpl->tpl_vars['item']->value["description"];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['item']->value["descriptionLong"];?>
</p>
            </div>
        </div>
    </div>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
