<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <h2 class="mb-2 mt-5 text-info"><?php echo $article->title; ?></h2>
      <p class="lead text-info float-right">
        Author: <?php
                $res = strval($article->author_id);
                echo $user = UsersRepository::getUserById($res);
                ?> </p>
      <p class="text-info lead float-left">Posted on: <?php echo date("d-m-Y", strtotime($article->created_at)); ?></p>

      <?php echo '<img src="' . $article->image_1 . '" alt="" style="width: 100%; height: auto;">' ?></p>

      <div class="text-justify">
        <?php echo $article->text; ?>
      </div>
    </div>
    <div class="col-lg-4 float-right">
      <div class="bg-light border-right">
        <div class="list-group list-group-flush mt-5">
          <a href="#" class="list-group-item list-group-item-action bg-light text-info">See our events</a>
          <a href="#" class="list-group-item list-group-item-action bg-light text-info">Contact our partners</a>
          <a href="#" class="list-group-item list-group-item-action bg-light text-info">Overview</a>
          <a href="#" class="list-group-item list-group-item-action bg-light text-info">Support us</a>
          <a href="#" class="list-group-item list-group-item-action bg-light text-info">Our people</a>
          <a href="#" class="list-group-item list-group-item-action bg-light text-info">Useful links</a>
        </div>
      </div>
    </div>
  </div>
</div>