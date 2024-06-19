<?php
include("_meta.php");
include("_navbar.php");

// Получаем ID поста из URL
$postId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>

<div class="container">
    <div id="post" class="mt-4">
        <!-- Данные поста будут загружены сюда -->
    </div>
</div>

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
                            <img src="${photo.url}" class="rounded mx-auto d-block" alt="...">
                            <p>${(post.body + " ").repeat(50)}</p>
                        </div>
                    </div>
                `;
            });
    });
</script>
