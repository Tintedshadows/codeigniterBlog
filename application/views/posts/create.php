<h2><?= $title ?></h2>

<script>
        ClassicEditor
            .create( document.querySelector( '#bodyInput' ) )
            .catch( error => {
                console.error( error );
            } );
</script>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>

<fieldset class="form-group">
    <div class="form-group">
     <label for="titleLabel">Post Title</label>
     <input type="text" class="form-control" id="titleInput" aria-describedby="titleInput" name="title" placeholder="Enter Title">
   </div>

   <div class="form-group">
      <label for="categoryLabel">Post Category</label>
      <select class="form-control" name="category_id" id="categorySelect">
        <?php foreach ($categories as $category) {?>
          <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
          <?php
        } ?>
      </select>
    </div>

   <div class="form-group">
     <label for="bodyLabel">Post Body</label>
     <textarea name="body" class="form-control" id="editor1" placeholder="Post Body" rows="3"></textarea>
   </div>

   <div class="form-group">
      <label for="featuredImage">Featured input</label>
      <input type="file" class="form-control-file" name="userfile" id="featuredImage" size="20" aria-describedby="fileHelp">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
 </fieldset >
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
