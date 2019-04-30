<h2><?= $title ?></h2>
<?php foreach ($posts as $post): ?>
  <div class="jumbotron">
    <h1 class="display-3"> <a href="<?php echo site_url('/posts/' .  $post['slug'] ); ?>"> <?php echo $post['title']; ?></a></h1>

    <div class="row">
      <div class="col-md-3">
        <img class="post-thumbnail"  src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image'] ?>" alt="">
      </div>

      <div class="col-md-9">
        <p><?php echo $post['created_at']; ?> in <?php echo $post['name']; ?></p>
        <p class="lead"><?php echo word_limiter($post['body'], 25); ?></p>
        <a class="btn btn-primary btn-lg" href="<?php echo site_url('/posts/' .  $post['slug'] ); ?>" role="button">Read More</a>
      </div>

    </div>

  </div>

<?php endforeach; ?>
