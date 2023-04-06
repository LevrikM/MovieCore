<?php
/* Smarty version 4.3.0, created on 2023-04-06 18:49:00
  from 'W:\domains\movie\views\default\filmShow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642ee9ec59ec64_78178983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd21ff394ea8110959ea5410e3e14a155067cd43' => 
    array (
      0 => 'W:\\domains\\movie\\views\\default\\filmShow.tpl',
      1 => 1680796140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642ee9ec59ec64_78178983 (Smarty_Internal_Template $_smarty_tpl) {
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
