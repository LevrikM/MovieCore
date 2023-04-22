{*    {foreach $rsBlog as $item}*}
{*        {if $item["status"]!= 0}*}
{*            <a class="col=sm-3 mb-4 text-center overflow-hidden" href="/?controller=Product&action=index&id={$item['id_product']}"/>*}
{*            <div class="card overflow-hidden">*}
{*                <img src="/images/products/{$item['image']}" alt="">*}
{*                <div class="card-body">*}
{*                    <h3 class="card-title">*}
{*                        {$item['name_product']}*}
{*                    </h3>*}
{*                    <p class="card-text"><strong class="text-muted">{$item['price']}₴</strong></p>*}
{*                </div>*}
{*            </div>*}
{*        {/if}*}
{*    {/foreach}*}

//Цей код має дві частини. Перша частина (з foreach) відповідає за відображення блоку з інформацією про кінофільми,
зображеннями, описами, жанрами та кнопкою "Читати більше". Друга частина (з коментарями в * {...} *)
не розкоментована і не використовується на сторінці. Ця частина коду містить список категорій та форму пошуку,
а також пагінацію, але її не використовують для цього блоку з кінофільмами.

<div class="container">
    <div class="row">
        <div class="col-md-8 mt-3">
            {foreach $rsFilm as $item}
                {if $item["status"] != 0}
                    <div class="card mb-4">
                        <img class="card-img-top" src="/images/films/{$item['image']}" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{$item["name"]}</h2>
                            <p class="card-text">{$item["description"]}</p>
                            <a href="/film/show/?film={$item["id"]}" class="btn btn-primary">Читати більше &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Жанр: {$item["genre"]}
                        </div>
                    </div>
                {/if}
            {/foreach}
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
</style>