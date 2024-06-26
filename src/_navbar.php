<nav class="navbar navbar-expand-lg bg-body-tertiary mb-5 sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                    include("_meta.php");


                    foreach ($pages as $title => $info) {
                        echo "<li class='nav-item'>";
                        echo "<a class='nav-link active' aria-current='page' href='${info['url']}'>".ucfirst($title)."</a>";
                        echo "</li>";
                    }

                    ?>
            </ul>
            <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
        </div>
    </div>
</nav>
