<h2><?php echo $post['title']; ?></h2>
<?php echo $post['created_at']; ?>

<div class="col-md-3">
  <img class="post-thumbnail" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image'] ?>" alt="">
</div>
<div class="post-body">
  <?php echo $post['body']; ?>
</div>
<hr>
<h3>Comments</h3>

<?php
if($comments){

  foreach ($comments as $comment) {
    ?>
    <p>By: <?php echo $comment['name']; ?> on <?php echo $comment['created_at']; ?></p>
    <p><?php echo $comment['body']; ?></p>
    <hr>

    <?php
  }

}else{?>

<p>No Comments</p>

<?php } ?>


<hr>
<h3>Add Comment</h3>

<?php echo validation_errors(); ?>

<?php echo form_open('comments/create/'. $post['id']); ?>

<div class="form-group">
 <label for="nameLabel">Name</label>
 <input type="text" class="form-control" id="nameInput" aria-describedby="nameInput" name="name" >
</div>

<div class="form-group">
 <label for="emailLabel">Email</label>
 <input type="email" class="form-control" id="emailInput" aria-describedby="emailInput" name="email" >
</div>

<div class="form-group">
  <label for="commentLabel">Comment Body</label>
  <textarea name="body" class="form-control" id="editor1" rows="3"></textarea>
</div>

<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">

<button type="submit" class="btn btn-primary">Submit</button>

</form>

<hr>
<a href="http://localhost:8080/codeigniterBlog/posts/edit/<?php echo $post['slug']; ?>" class="btn btn-info float-right">Edit</a>
<?php echo form_open('posts/delete/'. $post['id']); ?>
<input type="submit" class="btn btn-danger float-left" name="" value="Delete">
</form>

<script>

ClassicEditor
    .create( document.querySelector( '#editor1' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );

</script>
