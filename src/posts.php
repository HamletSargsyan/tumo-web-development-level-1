<?php
include("_meta.php");
include("_navbar.php");
?>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4" id="posts">
        <?php
        foreach ($posts as $post) { ?>
        <div class='col'>
            <div class='card h-100' style='width: 18rem;' onclick="redir(<?php echo $post['id']; ?>)">
                <img src="<?php echo $post['image_url']; ?>" class='card-img-top' alt='image'>
                <div class='card-body'>
                    <h5 class='card-title text-truncate'><?php echo $post['title'];?></h5>
                </div>
            </div>
        </div>
        <?php  } ?>
    </div>
</div>

<script>
function redir(id) {
    window.location.href = 'post.php?id=' + id
}
</script>
<?php
include("_footer.php");
?>