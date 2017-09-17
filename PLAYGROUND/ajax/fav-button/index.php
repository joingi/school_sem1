<?php
session_start();
// $_SESSION['favorites'] = [];
if(!isset($_SESSION['favorites'])) {
    $_SESSION['favorites'] = [];
}
function isFavorite($id) {
    return in_array($id, $_SESSION['favorites']);
}

?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Asynchronous Button</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div id="blog-posts">

            <div id="blog-post-101" class="blog-post <?php if(isFavorite(101)) { echo 'fav'; } ?>">
                <span class="fav-heart">&hearts;</span>
                <h3>Blog Post 101</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque nunc malesuada mauris fermentum
                    commodo. Integer non pellentesque augue, vitae pellentesque tortor. Ut gravida ullamcorper dolor, ac
                    fringilla mauris interdum id. Nulla porta egestas nisi, et eleifend nisl tincidunt suscipit. Suspendisse
                    massa ex, fringilla quis orci a, rhoncus porta nulla. Aliquam diam velit, bibendum sit amet suscipit
                    eget, mollis in purus. Sed mattis ultricies scelerisque. Integer ligula magna, feugiat non purus eget,
                    pharetra volutpat orci. Duis gravida neque erat, nec venenatis dui dictum vel. Maecenas molestie tortor
                    nec justo porttitor, in sagittis libero consequat. Maecenas finibus porttitor nisl vitae tincidunt.</p>
                <button class="favorite-button">Favorite</button>
                <button class="unfavorite-button">unFavorite</button>
            </div>
            <div id="blog-post-102" class="blog-post <?php if(isFavorite(102)) { echo 'fav'; } ?>">
                <span class="fav-heart">&hearts;</span>
                <h3>Blog Post 102</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque nunc malesuada mauris fermentum
                    commodo. Integer non pellentesque augue, vitae pellentesque tortor. Ut gravida ullamcorper dolor, ac
                    fringilla mauris interdum id. Nulla porta egestas nisi, et eleifend nisl tincidunt suscipit. Suspendisse
                    massa ex, fringilla quis orci a, rhoncus porta nulla. Aliquam diam velit, bibendum sit amet suscipit
                    eget, mollis in purus. Sed mattis ultricies scelerisque. Integer ligula magna, feugiat non purus eget,
                    pharetra volutpat orci. Duis gravida neque erat, nec venenatis dui dictum vel. Maecenas molestie tortor
                    nec justo porttitor, in sagittis libero consequat. Maecenas finibus porttitor nisl vitae tincidunt.</p>
                <button class="favorite-button">Favorite</button>
                <button class="unfavorite-button">unFavorite</button>
            </div>
            <div id="blog-post-103" class="blog-post <?php if(isFavorite(103)) { echo 'fav'; } ?>">
                <span class="fav-heart">&hearts;</span>
                <h3>Blog Post 103</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque nunc malesuada mauris fermentum
                    commodo. Integer non pellentesque augue, vitae pellentesque tortor. Ut gravida ullamcorper dolor, ac
                    fringilla mauris interdum id. Nulla porta egestas nisi, et eleifend nisl tincidunt suscipit. Suspendisse
                    massa ex, fringilla quis orci a, rhoncus porta nulla. Aliquam diam velit, bibendum sit amet suscipit
                    eget, mollis in purus. Sed mattis ultricies scelerisque. Integer ligula magna, feugiat non purus eget,
                    pharetra volutpat orci. Duis gravida neque erat, nec venenatis dui dictum vel. Maecenas molestie tortor
                    nec justo porttitor, in sagittis libero consequat. Maecenas finibus porttitor nisl vitae tincidunt.</p>
                <button class="favorite-button">Favorite</button>
                <button class="unfavorite-button">unFavorite</button>
            </div>
        </div>
        <script>
        function favorite() {
            // id=blog-post is parent of favorite button
            var favButton = this.parentElement;

            var ajax = new XMLHttpRequest();
            ajax.open('POST', 'fav.php', true);
            ajax.setRequestHeader('X-Requested-with', 'XMLHttpRequest');
            ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            ajax.onreadystatechange = function () {

                if (ajax.readyState == 4 && ajax.status == 200) {
                    var result = ajax.responseText;
                    console.log('Results: ' + result);
                    if (result == 'true') {
                        // console.log(favButton.id);
                        favButton.classList.add("fav");
                    }
                }
            };
            ajax.send("id=" + favButton.id);
        }

        function unFavorite() {
            // id=blog-post is parent of favorite button
            var favButton = this.parentElement;

            var ajax = new XMLHttpRequest();
            ajax.open('POST', 'unfav.php', true);
            ajax.setRequestHeader('X-Requested-with', 'XMLHttpRequest');
            ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            ajax.onreadystatechange = function () {

                if (ajax.readyState == 4 && ajax.status == 200) {
                    var result = ajax.responseText;
                    console.log('Results: ' + result);
                    if (result == 'false') {
                        console.log('false');
                        favButton.classList.remove("fav");
                    }
                }
            };
            ajax.send("id=" + favButton.id);
        }

        var btnUnFavButton = document.getElementsByClassName('unfavorite-button');
        for (i = 0; i < btnUnFavButton.length; i++) {
            btnUnFavButton.item(i).addEventListener('click', unFavorite);
        }

        var btnFavButton = document.getElementsByClassName('favorite-button');
        for (i = 0; i < btnFavButton.length; i++) {
            btnFavButton.item(i).addEventListener('click', favorite);
        }
        </script>

    </body>

    </html>