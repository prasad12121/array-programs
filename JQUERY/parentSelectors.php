<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parent Selectors</title>
</head>
<body>
<header id="header">
    <h1 class="header-primary">This is main header</h1>
    <span class="slogan">This is slogan</span>
</header>
<section id="main-section">
    <div class="post">
        <h2 class="post-title">This is post title 1</h2>
        <p class="post-content">
            <span>Me a span element</span>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, eos id voluptas possimus quaerat sunt eius provident error nihil, ipsam illum natus laboriosam saepe excepturi iusto quia ut? Dolor, aperiam.
        </p>
        <a class="post-cta" href="#">More...</a>
    </div>
    <div class="post">
        <h2 class="post-title">This is post title 1</h2>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, eos id voluptas possimus quaerat sunt eius provident error nihil, ipsam illum natus laboriosam saepe excepturi iusto quia ut? Dolor, aperiam.
        </p>
        <a class="post-cta" href="#">More...</a>
    </div>
    <div class="post">
        <h2 class="post-title">This is post title 1</h2>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, eos id voluptas possimus quaerat sunt eius provident error nihil, ipsam illum natus laboriosam saepe excepturi iusto quia ut? Dolor, aperiam.
        </p>
        <a class="post-cta" href="#">More...</a>
    </div>
</section>
<br><br>

<div class="parent">
    <div class="child">Child 1</div>
    <div class="child">Child 2</div>
    <div class="child">Child 3</div>
    <div class="child">Child 4</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="./js/script.js"></script>
</body>
</html>

