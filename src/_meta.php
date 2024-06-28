<?php

// ! Bootstrap
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
';

// ! Bootsrap icons
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">';

// ! Custom styles
echo '<link href="styles/index.css" rel="stylesheet" />';

$pages = [
    "home" => [
        "url" => "index.php"
    ],
    "posts" => [
        "url" => "posts.php"
    ],
    "users" => [
        "url" => "users.php"
    ],
    "register" => [
        "url" => "register.php"
    ],
    "login" => [
        "url" => "login.php"
    ]
];

$posts = [
    1=> [
        "id" => 1,
        "title" => "How to Choose the Right Programming Language for a New Project",
        "body" => "This is a question heard by many devs every single time they take on a new project. Clients typically want some sort of magic answer and to know which language is the ideal one that will help take their development projects from mere ideas into reality.<br>This is, of course, a valid and fair question, as choosing the best fit of technology stacks, programming languages, and libraries is essential to successful development. However, it isn’t as simple as merely making a choice and sticking to it.<br>There are many factors that must go into determining which programming language (or languages) to use in certain projects. Most seasoned developers already have a toolbelt of their own preferred languages and technologies for certain types of projects but they still go through a series of questions and considerations of the project at hand to make a final decision.<br>Every programming language comes with its own advantages and disadvantages, and it’s definitely critical for the success of the project and business to choose the right one. This decision is also dependent upon the business’s long-term goals and overall expectations.",
        "image_url" => "https://bairesdev.mo.cloudinary.net/blog/2023/08/How-to-Choose-the-Right-Programming-Language-for-a-New-Project.jpg?tx=w_1920,q_auto",
        "original_url" => "https://www.bairesdev.com/blog/choose-right-programming-language/"
    ],
    2=> [
        "id" => 2,
        "title" => "Linux",
        "body" => "Linux is both an open-source Unix-like kernel and a generic name for a family of open-source Unix-like operating systems based on the Linux kernel, an operating system kernel first released on September 17, 1991, by Linus Torvalds. Linux is typically packaged as a Linux distribution (distro), which includes the kernel and supporting system software and libraries, many of which are provided by the GNU Project. Many Linux distributions use the word \"Linux\" in their name, but the Free Software Foundation uses and recommends the name \"GNU/Linux\" to emphasize the use and importance of GNU software in many distributions, causing some controversy.",
        "image_url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Tux.svg/300px-Tux.svg.png",
        "original_url" => "https://en.wikipedia.org/wiki/Linux"
    ],
    3=>[
        "id" => 3,
        "title" => "Docker for Developers: Understanding the Core Concepts",
        "body" => "Docker and containers in general continue to receive a lot of attention, and it’s well-deserved. But, you may have found yourself wondering, “What exactly is Docker? Can it be useful for developers like me?” When I first encountered Docker at conferences and user group talks, I wondered whether it had a place in my overall work flow and how I’d use it in different environments such as development, staging, and production. But as I dug deeper, I discovered that Docker can significantly impact our development operations. In this post, I will start by explaining what Docker is and provide clarification on key terms and concepts essential for understanding Docker’s functionality and utilization. Then, I’ll dive into the benefits that Docker offers to developers, along with some of the tools available. Let’s begin by addressing the fundamental question, “What is Docker?”.",
        "image_url" => "https://blog.codewithdan.com/wp-content/uploads/2023/06/Docker-Logo.png",
        "original_url" => "https://blog.codewithdan.com/docker-for-developers-understanding-the-core-concepts/"
    ],
];



?>