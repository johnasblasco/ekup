<html>
<head>
    <style>
        
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
body{
	display: grid;
	grid-template-columns: 50% 50%;
	margin: 0;
	padding: 0;
	background: url(assets/peakpx.jpg);
	
	background-repeat: no-repeat;
	background-size: 100% 100%;
	font-family: 'Poppins','Helvitica Neue', Helvetica, sans-serif;
}
body::before {
	content: "";
	position: fixed;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0, 0, 0, 0.8); 
	z-index: -1;
  }


ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}


.left {	
	margin-left: 5%;
	padding-left: 10%;
	padding-right: 10%;
	background-color: white;
	height: auto;
}

.left .head{
	display: grid;
	grid-template-columns: 1fr auto auto;
}
.left .head .logo img{
	width: 200px;
	height: 80px;
}
.left .head .logo img:hover{
	width: 210px;
}
.head h1:hover{
	border: 1px solid black;
	box-shadow: 1px 2px 1px red;
}

.left .body{
	line-height: 2.0;

}
.body h1{
	color: orangered;
	font-size: 70px;
}

.left .footer{
	display: flex;
  	flex-direction: column;
  	justify-content: flex-end;
  	
}

.left .footer #em{
    border-top: none;
    border-right: none;
    border-left: none;
    border-bottom: 2px solid #000; 

}
.left .footer #signup{
	padding: 8px 12px 8px 12px;
	color: #111010;
	border: 1px solid gray;
	background-color: white;
	margin: 1px;
}
.left .footer #ordernow{
	padding: 8px 12px 8px 12px;
	color: white;
	border: 1px solid black;
	background-color: #e86826;
	margin: 1px;
}

.left .footer #signup:hover{
	border: 1px solid black;
	box-shadow: 2px 2px 2px red;
}
.left .footer #ordernow:hover{
	border: 1px solid black;
	box-shadow: 2px 2px 2px red;
}

li a {
	display: block;
	width: 60px;
	color: rgb(41, 40, 40);
	
}
li a:hover{
	border:.5px solid black;
	box-shadow: 1px 2px 1px red;
}

li a, .dropbtn {
	/* display: inline-block; */
	text-align: center;
	padding: 13px 28px;
	text-decoration: none;
}

li.dropdown .dropdown-content {
	display: none;
	position: absolute;
	box-shadow: 2px 9px 18px 4px rgba(0,0,0,0.2);
	z-index: 1;
}

.dropdown-content a {
	color:black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: left;
}

.dropdown-content a:hover {
	background-color: red;
	color: black;
}

.dropdown:hover .dropdown-content {
	display: block;
}


/* righty sheesh */
.right .parent_dishes{
	display: grid;
	grid-template-columns: 33% 33% 33%;
	grid-template-rows: auto;
	height: 70%;
	margin: 5%;

}

.right .dish{
	margin: 5%;
	padding: 4%;
	width: 150px;
	height: 150px;
	border: 1px solid black;
}

.right .dish h2{
	text-align: center;
	position: relative;
	top: -18;
	font-size: 16px;
	color: black;
	background-color: #f57600;
	width: auto;
	border-radius: 5%;
}
.right .dish h2:hover{
	color: white;
	background-color: #c44601;
}


.checkout{
	display: grid;
	padding: 2%;
	grid-template-columns: 50% 50%; 
	height: 30%;
	background-color: #e86826;
}
.checkout h2{
	text-align: center;
	font-size: xx-large;
}
.checkout #foods{
	font-weight: bold;
	width: 300px;
	height: 30px;
	margin: 1%;
}

.checkout #btn{
	font-weight: bold;
	width: 300px;
	height: 50px;
	margin: 1%;
}
.checkout .etets{
	background-color: #0A6EBD;
	color: white;
}
.checkout .etets:hover{
	border: 1px solid black;
	box-shadow: 2px 2px 2px #0A6EBD;
}

/* magic */
.circle {
	height: 24px;
	width: 24px;
	border-radius: 24px;
	background-color: black;
	position: fixed; 
	top: 0;
	left: 0;
	pointer-events: none;
	z-index: 99999999; /* so that it stays on top of all other elements */
  }


  /* nxtpage menu button */
  .scroll-button input{

	width: 400px;
	height: 200px;
  }
    </style>

</head>
<body>
<audio src = "assets/FEEL.mp3" type ="audio/mpeg" controls autoplay loop style="display:none"></audio>
    <!-- grid -->

    <!-- left -->
    <main class="left">
        <div class="head">
            <div class="logo"><img src="assets/CLICK-unscreen.gif" alt="">
            </div>

                <ul>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">Home</a>
                        <div class="dropdown-content">
                            <a href="second.html" target="_blank">Menu</a>
                        </div>
                    </li>
                </ul>
        
                <ul>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">More</a>
                        <div class="dropdown-content">
                            <a href="#">History</a>
                            <a href="#">Contact Us</a>
                        </div>
                    </li>
                </ul>
        </div>
        <div class="body">
            <h1>Now Serving!</h1>
            <p>Mission

                To provide our guests with an exceptional dining experience by offering high-quality, delicious food, impeccable service, and a warm and inviting atmosphere.
                
                Vision
                
                To be the premier destination for our community, known for our commitment to excellence and our passion for creating memorable dining experiences.
            </p>
       
        </div>
        
        <div class="scroll-button" id="scroll-button"><input type="image" src="assets/Your-paragraph-text-unscreen.gif"></div>
    
        <div class="footer">
            <p>Sign up now to be the first to know when we launch and receive an exclusive offer.</p>
            <form action="">
                <label for="em" style="font-size:small;">Email Address</label><br>
                <input type="email" name="" id="em" style="width: 300px;">
                <input type="submit" value="Sign Up" id="signup">
                <input type="submit" value="Submit" id="ordernow">
            </form>
        </div>
    </main>

    <!-- all right -->
    <main class="right">
        <div class="parent_dishes">
            <div class="dish" style="background: url(assets/dish1.jpg); background-size:contain"><h2>Sweetcorn</h2></div>
            <div class="dish" style="background: url(assets/dish2.jpg); background-size:contain"><h2>Gulay</h2></div>
            <div class="dish" style="background: url(assets/dish3.jpg); background-size:contain"><h2>Omelette</h2></div>
            <div class="dish" style="background: url(assets/dish4.jpg); background-size:contain"><h2>Patty</h2></div>
            <div class="dish" style="background: url(assets/dish5.jpg); background-size:contain"><h2>Four season</h2></div>
            <div class="dish" style="background: url(assets/dish6.jpg); background-size:contain"><h2>Salad</h2></div>
            <div class="dish" style="background: url(assets/dish7.jpg); background-size:contain"><h2>Breakfast</h2></div>
            <div class="dish" style="background: url(assets/dish8.jpg); background-size:contain"><h2>Blueberry Dish</h2></div>
            <div class="dish" style="background: url(assets/dish9.jpg); background-size:contain"><h2>Ceaser Salad</div>
        </div>    
        <div class="checkout">
            <h2>Checkout</h2>
              <form action="#" method="get">
                <input list="browsers" name="foods" id="foods" placeholder="List - Foods">
                <datalist id="browsers">
                    <option value="SweetCorn">
                    <option value="Gulay">
                    <option value="Omelette">
                    <option value="Four Season">
                    <option value="Salad">
                    <option value="Breakfast">
                    <option value="patty">
                    <option value="Blueberry Dish">
                    <option value="Ceaser Salad">               
                </datalist>
                <input type="submit" value="ADD TO CART" id="btn">
                <input type="submit" value="Buy with Shop PAY" id="btn" class="etets">  
              </form>
        </div>
    </main>

<!-- magic --> 
 <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
<!-- magic -->
<script>
    const coords = { x: 0, y: 0 };
const circles = document.querySelectorAll(".circle");

const colors = [
  "#ffb56b",
  "#fdaf69",
  "#f89d63",
  "#f59761",
  "#ef865e",
  "#ec805d",
  "#e36e5c",
  "#df685c",
  "#d5585c",
  "#d1525c",
  "#c5415d",
  "#c03b5d",
  "#b22c5e",
  "#ac265e",
  "#9c155f",
  "#950f5f",
  "#830060",
  "#7c0060",
  "#680060",
  "#60005f",
  "#48005f",
  "#3d005e"
];

circles.forEach(function (circle, index) {
  circle.x = 0;
  circle.y = 0;
  circle.style.backgroundColor = colors[index % colors.length];
});

window.addEventListener("mousemove", function(e){
  coords.x = e.clientX;
  coords.y = e.clientY;
  
});

function animateCircles() {
  
  let x = coords.x;
  let y = coords.y;
  
  circles.forEach(function (circle, index) {
    circle.style.left = x - 12 + "px";
    circle.style.top = y - 12 + "px";
    
    circle.style.scale = (circles.length - index) / circles.length;
    
    circle.x = x;
    circle.y = y;

    const nextCircle = circles[index + 1] || circles[0];
    x += (nextCircle.x - x) * 0.3;
    y += (nextCircle.y - y) * 0.3;
  });
 
  requestAnimationFrame(animateCircles);
}

animateCircles();

</script>
</body>
</html>