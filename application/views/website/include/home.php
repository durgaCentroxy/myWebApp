<?php include 'header.php'; ?>
<div class="container">
  <?php echo form_open('posts/action'); ?>
  <div class="form-group">
    <label for="">Post Title</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="enter the title..." aria-describedby="helpId">
    <!-- <small id="helpId" class="text-muted">Help text</small> -->
    <label for="">Post Body</label>
    <textarea name="title_body" id="title_body" class="form-control" cols="30" type="text" rows="10" placeholder="enter the title_body..."></textarea>
    <label for="">Post Author</label>
    <input type="text" name="title_author" id="title_author" class="form-control" placeholder="enter the title_author..." aria-describedby="helpId">
    <input type="submit" value="submit" name="submit" class="btn btn-success mt-2">
  </div>
</div>
<?php include 'footer.php'; ?>