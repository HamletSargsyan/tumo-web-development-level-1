<?php
include("_meta.php");
include("_navbar.php");
?>

<div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner" id="carousel-items">
            <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</div>

<style>
.carousel-inner img {
    width: 100%;
    height: 300px; /* Установите желаемую высоту */
    object-fit: cover; /* Изображение будет обрезано, чтобы заполнить контейнер, сохраняя при этом соотношение сторон */
}
.carousel-caption {
    color: black;
    background-color: rgba(255, 255, 255, 0.5);
    padding: 10px;
    border-radius: 5px;
}
</style>

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

                postsWithPhotos.forEach((post, index) => {
                    document.getElementById('carousel-items').innerHTML += `
                    <div class="carousel-item ${index === 0 ? 'active' : ''}" style="cursor: pointer !important;" onclick="openPost(${post.id})">
                        <img src="${post.photo}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>${post.title}</h5>
                            <p class="text-truncate">${post.body}</p>
                        </div>
                    </div>
                    `;
                });
            });
    });

function openPost(postId) {
    window.location.href = `post.php?id=${postId}`;
}
</script>
