<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage | Online shopping portal</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link href = "http://onlineshoppingportal.com/Assets/Styles/homepage.css" rel = "stylesheet">
    </head>
    <body>
        <div class="header">
            <div class="header_section" id = "title">Online Shop</div>
            <div class="header_section" id = "search">
                <select name="category" id="category">
                    <option value="All Catergories">All Catergories</option>
                    <option value="Home">Home</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Ladies Wears">Ladies Wears</option>
                    <option value="Mens Wear">Mens Wear</option>
                    <option value="Kids Wear">Kids Wear</option>
                    <option value="Furnitures">Furnitures</option>
                    <option value="Home Appliances">Home Appliances</option>
                    <option value="Electronics Gadgets">Electronics Gadgets</option>
                </select>
                <input type="search" name="search" id="searchbar" placeholder = "Search here">
                <input type="button" value="Search" id="searchbutton">
            </div>
            <div class="header_section" id = "icon">
                <figure class="icons">
                    <span class="material-icons-outlined">favorite_border</span>
                    <figcaption>Your wishlist</figcaption>
                </figure>
                <figure class="icons">
                    <span class="material-icons-outlined">shopping_cart</span>
                    <figcaption>Your Cart</figcaption>
                </figure>
            </div>
        </div>
        <nav class="nav_bar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Electronics</a></li>
                <li><a href="#">Ladies Wears</a></li>
                <li><a href="#">Mens Wears</a></li>
                <li><a href="#">Kids  Wears</a></li>
                <li><a href="#">Furnitures</a></li>
                <li><a href="#">Home Appliances</a></li>
                <li><a href="#">Electronics Gadgets</a></li>
            </ul>
        </nav>
        <div class="container">
            <div class="slideshow">
                <span class="material-icons-outlined" id = "left">arrow_back_ios</span>
                <img src="http://onlineshoppingportal.com/Assets/Images/slide1.jpg" class="slides active" id = "slide1">
                <img src="http://onlineshoppingportal.com/Assets/Images/slide2.jpg" class="slides" id = "slide2">
                <img src="http://onlineshoppingportal.com/Assets/Images/slide3.jpg" class="slides" id = "slide3">
                <img src="http://onlineshoppingportal.com/Assets/Images/slide4.jpg" class="slides" id = "slide4">
                <img src="http://onlineshoppingportal.com/Assets/Images/slide5.jpg" class="slides" id = "slide5">
                <img src="http://onlineshoppingportal.com/Assets/Images/slide6.jpg" class="slides" id = "slide6">
                <span class="material-icons-outlined" id = "right">arrow_forward_ios</span>
            </div>
            <div class="collections">
                    <div class="box">
                        <div class="name">
                            Laptop collections
                        </div>
                        <a href="#" class="button">shop now</a>
                    </div>
                    <div class="box">
                        <div class="name">
                            Mobile collections
                        </div>
                        <a href="#" class="button">shop now</a>
                    </div>
                    <div class="box">
                        <div class="name">Accessories collection</div>
                        <a href="#" class="button">shop now</a>
                    </div>
            </div>
        </div>
        <script src = "http://onlineshoppingportal.com/Assets/Scripts/homepage.js"></script>
    </body>
</html>
