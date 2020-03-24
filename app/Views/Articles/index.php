<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-info">Articles about cats</h2>
            <ul class="list-group">
                <?php
                foreach ($articles as $article) {
                    echo '<li class="list-group-item" style="font-size:25px; background: whitesmoke";><a href="?page=article&id=' . $article->id . '" class="text-info">'
                        . $article->title . '<img src=" ' . $article->image_1 . '" width= "100" class="float-right">' . '</a>' . '<span style="font-size:10px";> ' . date("d.m.Y", strtotime($article->created_at)) . ' </span></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>