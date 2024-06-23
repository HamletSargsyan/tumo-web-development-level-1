<?php
include("_meta.php");
include("_navbar.php");
?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner" id="carousel-items">
        <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
        </div>
    </div>
</div>


<div class="container" style="margin-top: 5%;">
    <h1 class="text-center">Blog</h1>

    <p class="text-secondary">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed magnam molestiae, error consequatur sunt suscipit ullam animi sapiente. Voluptate est commodi repellendus explicabo, ad eum sit et ratione? Dolores, obcaecati?
    </p>
</div>

<?php
include("_footer.php");
?>

<style>
.carousel-inner img {
    width: 100%;
    height: 300px;
    object-fit: cover;
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
                    <div class="carousel-item ${index === 0 ? 'active' : ''}" style="cursor: pointer !important;" onclick="window.location.href = 'post.php?id=${post.id}'">
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

</script>
