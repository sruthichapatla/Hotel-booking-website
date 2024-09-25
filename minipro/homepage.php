<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="loghot.jpg" alt="logo" width="123px">
        </div>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="#sect" target="_self">Rooms</a></li>
            <li><a href="#servi" target="_self">Services</a></li>
            <li><a href="#conta" target="_self">Contact Us</a></li>
        </ul>
        <div class="login">
            <a href="login1.php"><button class="btn" id="btn">Login/SignUp</button></a>
        </div>
    </div>

    <div class="main">
        <br><br><br><br><br><h1 class="h-primary">Welcome to our hotels</h1>
        <div class="size">
        <p>Discover unparalleled comfort and luxury with our hotel booking platform. Seamlessly explore a curated selection of exquisite accommodations worldwide, 
            ensuring your next getaway is as extraordinary as you are.</p>
        </div>
        <div class="book">
          <a href="shop.php"><button class="bk" id="bk">Book Now</button></a>
        </div>
        </div>


<!--rooms-->


<div class="section">
    <div class="room">
        <br><h1>Rooms</h1>
    </div>
    <div class="cards" id="sect">
        <div class="image">
            <img src="supdelux.jpg">
        </div>
        <div class="title">
            <h2>super deluxe room</h2><br>
        </div>
        <div class="desc">
            <p>luxurious</p>
        </div>
    </div>

    <div class="cards">
        <div class="image">
            <img src="room1.jpg">
        </div>
        <div class="title">
            <h2>deluxe room</h2><br>
        </div>
        <div class="desc">
            <p>luxurious</p>
        </div>
    </div>

    <div class="cards">
        <div class="image">
            <img src="room2.jpg">
        </div>
        <div class="title">
            <h2>deluxe room</h2><br>
        </div>
        <div class="desc">
            <p>luxurious</p>
        </div>
    </div>
</div>

<div class="service">
    <br>
    <div class="ser" id="servi">
        <h1>Services</h1>
    </div>
    <div class="cards">
        <div class="image">
            <img src="food.jpg">
        </div>
        <div class="title">
            <h2>food</h2><br>
        </div>
        <div class="desc">
            <p>delicious</p>
        </div>
    </div>
    <div class="cards">
        <div class="image">
            <img src="pul.jpg">
        </div>
        <div class="title">
            <h2>Swimming pool</h2><br>
        </div>
        <div class="desc">
            <p>entertainment</p>
        </div>
    </div>
    <div class="cards">
        <div class="image">
            <img src="ser.jpg">
        </div>
        <div class="title">
            <h2> services</h2><br>
        </div>
        <div class="desc">
            <p>At your service</p>
        </div>
    </div>

</div>
<div class="contact" id="conta">
    <br><br><h1>Contact Us</h1>
    <div class="con">
    <form>
        <br><br>
        <input type="text" placeholder="Username"><br><br>
        <input type="email" placeholder="enter your email address"><br><br>
        <textarea  placeholder="write to us"></textarea><br><br>
        <button type="submit">Submit</button>
    </form>
</div>
</div><br><br><br>

<footer>
    <div class="center">
        Copyright &copy; www.dreamstay.com. All rights reserved!
    </div>
</footer>
</body>
</html>