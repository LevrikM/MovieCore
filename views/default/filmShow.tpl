{foreach $rsFilmInfo as $item}
    <div class="container" style="margin-bottom: 150px;">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="mt-4">{$item["name"]}</h1>
                <p class="lead">
                    Режисер: {$item["director"]}<br>
                </p>
                <hr>
                <p>Жанр: {$item["genre"]} </p>
                <hr>
                <img class="img-fluid rounded" src="/images/films/{$item['image']}" alt="">
                <hr>
                <p class="lead">{$item["description"]}</p>
                <p>{$item["descriptionLong"]}</p>
                <hr>
                <h4 class="mb-3">Трейлер</h4>
                <iframe width="730" height="411" src="https://youtube.com/embed/{$item["youtube_video_id"]}"
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

{/foreach}