<?php
/* Smarty version 4.3.0, created on 2023-04-21 23:27:15
  from 'C:\OSPanel\domains\MovieCore\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6442f1a32821d6_21860665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4461dc6932f4228a67a91c738ccd02532900003d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\MovieCore\\views\\default\\index.tpl',
      1 => 1682107748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6442f1a32821d6_21860665 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="card my-4">
        <h5 class="card-header">Пошук за жанром</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="/find/genre/?name=Фентезі">Фентезі</a>
                        </li>
                        <li>
                            <a href="/find/genre/?name=Пригоди">Пригоди</a>
                        </li>
                        <li>
                            <a href="/find/genre/?name=Сімейний">Сімейний</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="/find/genre/?name=Комедія">Комедія</a>
                        </li>
                        <li>
                            <a href="/find/genre/?name=Бойовик">Бойовик</a>
                        </li>
                        <li>
                            <a href="/find/genre/?name=Жахи">Жахи</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="/find/genre/?name=Фантастика">Фантастика</a>
                        </li>
                        <li>
                            <a href="/find/genre/?name=Драми">Драми</a>
                        </li>
                        <li>
                            <a href="/find/genre/?name=Спортивні">Спортивні</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="/find/genre/?name=Кримінал">Кримінал</a>
                        </li>
                        <li>
                            <a href="/find/genre/?name=Дитячі">Дитячі</a>
                        </li>
                        <li>
                            <a href="/find/genre/?name=Аніме">Аніме</a>
                        </li>
                    </ul>
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
