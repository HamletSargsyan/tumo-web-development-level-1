<?php
include("_meta.php");
include("_navbar.php");
?>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4" id="posts">
    </div>
</div>


<?php
include("_footer.php");
?>


<script>
fetch('https://jsonplaceholder.typicode.com/posts')
    .then(response => response.json())
    .then(posts => {
        fetch('https://jsonplaceholder.typicode.com/photos')
            .then(response => response.json())
            .then(photos => {
                const postsWithPhotos = posts.map((post, index) => {
                    return {
                        ...post,
                        photo: photos[index].url
                    };
                });

                for (const post of postsWithPhotos) {
                    document.getElementById('posts').innerHTML += `
                    <div class="col">
                        <div class="card h-100" style="width: 18rem;" onclick="window.location.href = 'post.php?id=${post.id}'">
                            <img src="${post.photo}" class="card-img-top" alt="image">
                            <div class="card-body">
                                <h5 class="card-title text-truncate">${post.title}</h5>
                                <p class="card-text text-truncate">${post.body}</p>
                            </div>
                        </div>
                    </div>
                    `;
                }
            });
    });

</script>
