<?php
include("_meta.php");
include("_navbar.php");
?>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4" id="users">
    </div>
</div>

<script>
fetch("https://jsonplaceholder.typicode.com/users")
    .then(response => response.json())
    .then(users => {
        users.forEach(user => {
            var avatar_url = `https://api.dicebear.com/9.x/identicon/svg?seed=${user.username}`

            document.getElementById("users").innerHTML += `
            <div class="col">
                <div class="card h-100" style="width: 18rem;" onclick="window.location.href = "user.php?username=${user.username}">
                    <img src="${avatar_url}" class="card-img-top" hight=100 width=100 alt="avatar">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-envelope"></i> ${user.email}</li>
                        <li class="list-group-item"><a class="card-link" href="user.php?username=${user.username}">@${user.username}</a></li>
                    </ul>
                </div>                
            </div>
            `
        });
    })


</script>