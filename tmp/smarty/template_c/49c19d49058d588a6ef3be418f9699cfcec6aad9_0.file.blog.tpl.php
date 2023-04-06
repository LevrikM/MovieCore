<?php
/* Smarty version 4.3.0, created on 2023-04-06 18:44:18
  from 'W:\domains\movie\views\default\filmShow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642ee8d26dbd09_91231109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49c19d49058d588a6ef3be418f9699cfcec6aad9' => 
    array (
      0 => 'W:\\domains\\movie\\views\\default\\filmShow.tpl',
      1 => 1678997979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642ee8d26dbd09_91231109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'W:\\domains\\movie\\library\\Smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsBlogInfo']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <div class="container" style="margin-bottom: 150px;">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="mt-4"><?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
</h1>
                <p class="lead">
                    Автор:
                    <a href="#"><a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value["author_url"];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value["author"];?>
</a>
                </p>
                <hr>
                <p>Дата: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value["time"],$_smarty_tpl->tpl_vars['config']->value['date']);?>
 Час: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value["time"],$_smarty_tpl->tpl_vars['config']->value['time']);?>
 </p>
                <hr>
                <img class="img-fluid rounded" src="/images/blogs/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="">
                <hr>
                <p class="lead"><?php echo $_smarty_tpl->tpl_vars['item']->value["text"];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['item']->value["full_text"];?>
</p>
            </div>
        </div>
    </div>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
