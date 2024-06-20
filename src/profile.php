<?php
include("_meta.php");
include("_navbar.php");

$userId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>

<div class="container">
    <div class="text-center" id="profile">

    </div>
</div>

<?php
include("_footer.php");
?>

<script>
const userId = <?php echo $userId; ?>;

fetch(`https://jsonplaceholder.typicode.com/users/${userId}`)
    .then(response => response.json())
    .then(user => {
        const profileElement = document.getElementById('profile');
        const avatarUrl = `https://api.dicebear.com/9.x/identicon/svg?seed=${encodeURIComponent(user.username)}`;
        profileElement.innerHTML = `
            <img src="${avatarUrl}" class="mx-auto d-block" height=200px width=200px alt="avatar">
            <br>
            <h2>${user.name}</h2>
            <p>@${user.username}</p>
            <p><i class="bi bi-envelope"></i> ${user.email}</p>
            <p><i class="bi bi-telephone"></i> ${user.phone}</p>
            <p><i class="bi bi-globe"></i> <a href="www.${user.website}" target=”_blank”>${user.website}</a></p>
        `
    });

</script>
