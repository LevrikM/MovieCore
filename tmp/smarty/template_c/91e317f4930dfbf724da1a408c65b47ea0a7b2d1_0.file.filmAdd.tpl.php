<?php
/* Smarty version 4.3.0, created on 2023-04-21 21:40:13
  from 'D:\xampp\htdocs\MovieCore\views\default\filmAdd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6442e69dd39dd1_18497709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91e317f4930dfbf724da1a408c65b47ea0a7b2d1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\MovieCore\\views\\default\\filmAdd.tpl',
      1 => 1682090669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6442e69dd39dd1_18497709 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <h2 class="text-center mb-4">Додати фільм</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="movieTitle">Назва фільму</label>
                    <input type="text" class="form-control" id="movieTitle" name="name" placeholder="Введіть назву фільму" required>
                </div>
                <div class="form-group">
                    <label for="releaseYear">Рік випуску</label>
                    <input type="number" class="form-control" id="releaseYear" name="year" placeholder="Введіть рік випуску фільму" required>
                </div>
                <div class="form-group">
                    <label for="description">Короткий опис</label>
                    <textarea class="form-control" id="description" rows="2" name="description" placeholder="Введіть короткий опис фільму" required></textarea>
                </div>
                <div class="form-group">
                    <label for="description">Опис</label>
                    <textarea class="form-control" id="description" rows="3" name="descriptionLong" placeholder="Введіть опис фільму" required></textarea>
                </div>
                <div class="form-group">
                    <label for="director">Режисер</label>
                    <input type="text" class="form-control" id="director" name="director" placeholder="Введіть режисера фільму" required>
                </div>
                <div class="form-group">
                    <label for="image">Зображення фільму</label>
                    <input type="text" class="form-control" id="image" name="image" placeholder="Введіть назву зображення фільму" required>
                </div>
                <div class="form-group">
                    <label>Жанри</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="fantasy" name="genre[]" value="Фентезі" >
                            <label class="form-check-label" for="fantasy">Фентезі</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="prigodi" name="genre[]" value="Пригоди">
                            <label class="form-check-label" for="prigodi">Пригоди</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="simey" name="genre[]" value="Сімейний">
                            <label class="form-check-label" for="simey">Сімейний</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="fantastik" name="genre[]" value="Фантастика">
                            <label class="form-check-label" for="fantastik">Фантастика</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="drama" name="genre[]" value="Драми">
                            <label class="form-check-label" for="drama">Драми</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="sport" name="genre[]" value="Спортивні">
                            <label class="form-check-label" for="sport">Спортивні</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="komedia" name="genre[]" value="Комедія">
                            <label class="form-check-label" for="komedia">Комедія</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="boyovik" name="genre[]" value="Бойовик">
                            <label class="form-check-label" for="boyovik">Бойовик</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="jax" name="genre[]" value="Жахи">
                            <label class="form-check-label" for="jax">Жахи</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="kriminal" name="genre[]" value="Кримінал">
                            <label class="form-check-label" for="kriminal">Кримінал</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="detskiy" name="genre[]" value="Дитячі">
                            <label class="form-check-label" for="detskiy">Дитячі</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="anime" name="genre[]" value="Аніме">
                            <label class="form-check-label" for="anime">Аніме</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="another" name="genre[]" value="Інше">
                            <label class="form-check-label" for="another">Інше</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Додати фільм</button>
            </form>
        </div>
    </div>
</div><?php }
}
