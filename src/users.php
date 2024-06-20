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
            var avatar_url = `https://api.dicebear.com/9.x/identicon/svg?seed=${user.username}`;

            document.getElementById("users").innerHTML += `
            <div class="col">
                <div class="card h-100" style="width: 18rem;" onclick="openProfile(${user.id})">
                    <img src="${avatar_url}" class="card-img-top" alt="avatar">
                    <div class="card-body">
                        <h5 class="card-title">${user.name}</h5>
                        <p class="text-secondary">@${user.username}</p>
                    </div>
                </div>
            </div>
            `;
        });
    });

function openProfile(userId) {
    window.location.href = `profile.php?id=${userId}`;
}
</script>
