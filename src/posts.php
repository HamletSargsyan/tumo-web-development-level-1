<?php
include("_meta.php");
include("_navbar.php");

?>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4" id="posts">

    </div>
</div>

<script>

fetch('https://jsonplaceholder.typicode.com/posts')
    .then(response => response.json())
    .then(json => {
        for (const post of json) {
            document.getElementById('posts').innerHTML += `
            <div class="col">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body" style="position:relative;">
                        <h5 class="card-title">${post.title}</h5>
                        <p class="card-text">${post.body}</p>
                        <a href="#" class="btn btn-primary fixed-bottom" style="position: absolute;">Read</a>
                    </div>
                </div>
            </div>
            `
        }
    })
</script>