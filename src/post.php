<?php
require("_meta.php");
include("_navbar.php");

$postId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$post = $posts[$postId];

?>

<div class="container">
    <div id="post" class="mt-4">
        <div>
            <h2 class='text-center'><?php echo $post['title']; ?></h2>
            <div>
                <img src="<?php echo $post['image_url']; ?>" class='img-fluid rounded mx-auto d-block mb-5'>
                <p><?php echo $post['body'];?></p>
                <a href="<?php echo $post['original_url']; ?>">Full article</a>
            </div>
        </div>
           
    </div>

    <hr>
    <h3>Comments</h3>

    <div id="comments">
    </div>
</div>

<?php
include("_footer.php");
?>

<script>
const postId = <?php echo $postId; ?>;


fetch(`https://jsonplaceholder.typicode.com/comments?postId=${postId}`)
    .then(response => response.json())
    .then(comments => {
        const commentsContainer = document.getElementById('comments');
        commentsContainer.innerHTML = '';

        comments.forEach(comment => {
            var avatar_url = `https://api.dicebear.com/9.x/identicon/svg?seed=${comment.email}`;
            commentsContainer.innerHTML += `
                <div class="card mt-3" style="cursor: default !important;">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="${avatar_url}" class="rounded-circle" style="margin-right: 10px;" width="50" height="50" alt="avatar">
                            <div>
                                <h5 class="card-title">${comment.name}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">${comment.email}</h6>
                            </div>
                        </div>
                        <p class="card-text">${comment.body}</p>
                    </div>
                </div>
            `;
        });
    });
</script>