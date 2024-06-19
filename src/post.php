<?php
include("_meta.php");
include("_navbar.php");

// Получаем ID поста из URL
$postId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>




<div class="container">
    <div id="post" class="mt-4">

    </div>

    <hr>
    <h3>Comments</h3>

    <div id="comments">

    </div>
</div>

<script src="user.js"></script>
<script>
const postId = <?php echo $postId; ?>;

fetch(`https://jsonplaceholder.typicode.com/posts/${postId}`)
    .then(response => response.json())
    .then(post => {
        // Загружаем картинку для этого поста
        fetch(`https://jsonplaceholder.typicode.com/photos/${postId}`)
            .then(response => response.json())
            .then(photo => {
                document.getElementById('post').innerHTML = `
                    <div>
                        <h2 class="text-center">${post.title.toUpperCase()}</h2>
                        <div>
                            <img src="${photo.url}" class="rounded mx-auto d-block mb-5" alt="...">
                            <p>${(post.body + " ").repeat(50)}</p>
                        </div>
                    </div>
                `;
            });
    });




fetch(`https://jsonplaceholder.typicode.com/comments?postId=${postId}`)
    .then(response => response.json())
    .then(comments => {
        const commentsContainer = document.getElementById('comments');
        commentsContainer.innerHTML = '';

        comments.forEach(comment => {
            getUser(comment.id).then(user => {
                commentsContainer.innerHTML += `
                  <div class="comment card mt-3">
                      <div class="card-body">
                          <div class="d-flex align-items-center">
                              <img src="${user.picture.thumbnail}" class="rounded-circle" style="margin-right: 10px;" width="50" height="50" alt="Avatar">
                              <div>
                                  <h5 class="card-title">${user.name.title} ${user.name.first} ${user.name.last}</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">@${user.login.username}</h6>
                              </div>
                          </div>
                          <p class="card-text">${comment.body}</p>
                      </div>
                  </div>
              `;
            });
        });
    });
</script>