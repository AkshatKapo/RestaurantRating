
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ak Restaurant</title>
    <link rel="stylesheet" href="stylesheet.css">


</head>
<body>
<div id="identi">
    <h1 id="H1">Ak Restaurant</h1>
</div>
<div  class="border"><!--div to place the border around the text-->
    <div id="main"><!--to set the style of the heading 1 and 2-->
        <h1>Thank you for dining with us</h1>
        <h2>We want to improve our Dining experience</h2>
        <h3>Please Fill out our survey, get 50% of your next visit</h3>
    </div>
    <form method="post" action="dashboard1.php"><!--use of form to take input-->
        <fieldset>
            <p>
            <p class="legend1"><b>1. How was your food</b></p><!--ASK FOR THE FOOD-->
            <!--tAKE THE INPUT IN FROM OF RADIO BUTTON-->
            <input type="radio" id="foodverygood" name="food_rate" value="Very Good">
            <label for="foodverygood">very good</label>&nbsp;
            <input type="radio" id="foodgood" name="food_rate" value="Good">
            <label for="foodgood">good</label>&nbsp;
            <input type="radio" id="foodok" name="food_rate" value="okay">
            <label for="foodok">okay</label>&nbsp;
            <input type="radio" id="foodbad" name="food_rate" value="Bad">
            <label for="foodbad">bad</label>&nbsp;
            <input type="radio" id="verybad" name="food_rate" value="Very Bad">
            <label for="verybad">Very Bad</label>&nbsp;
            </p>
            </p>
            <p>
                <!--Ask for the menu variety-->
            <p class="legend1"><b>2. How was the menu variety</b> </p>
            <input type="radio" id="menuvergood" name="menu_rate" value="Very Good">
            <label for="menuvergood">very good</label>&nbsp;
            <input type="radio" id="menugood"  name="menu_rate" value="Good">
            <label for="menugood">Good</label>&nbsp;
            <input type="radio" id="menuok" name="menu_rate" value="okay">
            <label for="menuok">ok</label>&nbsp;
            <input type="radio" id= "menubad" name="menu_rate" value="Bad">
            <label for="menubad">bad</label>&nbsp;
            <input type="radio" id="menuverybad" name="menu_rate" value="Very Bad">
            <label for="menuverybad">very bad</label>&nbsp;
            </p>
            </p>
            <p>
                <!--ASK FOR THE SERVICE-->
            <p class="legend1" ><b>3. How was the service</b></p>
            <input type="radio" id="serviceverygood" name="service_rate" value="Very Good">
            <label for="serviceverygood">very good</label>&nbsp;
            <input type="radio" id="servicegood" name="service_rate" value="Good">
            <label for="servicegood">good</label>&nbsp;
            <input type="radio" id="serviceok" name="service_rate" value="okay">
            <label for="serviceok">okay</label>&nbsp;
            <input type="radio" id="servicebad" name="service_rate" value="Bad">
            <label for="servicebad">bad</label>&nbsp;
            <input type="radio" id="serviceverybad" name="service_rate" value="Very Bad">
            <label for="serviceverybad">very bad</label>&nbsp;
            </p>
            </p>
            <p>
                <!--ASK FOR THE SERVICE-->
            <p class="legend1"><b>4. How was the atmosphere</b></p>
            <input type="radio" id="atmospherevgood" name="atmosphere_rate" value="Very Good">
            <label for="atmospherevgood">very good</label>&nbsp;
            <input type="radio" id="atmospheregood" name="atmosphere_rate" value="Good">
            <label for="atmospheregood">good</label>&nbsp;
            <input type="radio" id="atmosphereok" name="atmosphere_rate" value="okay">
            <label for="atmosphereok">okay</label>&nbsp;
            <input type="radio" id="atmospherebad" name="atmosphere_rate" value="Bad">
            <label for="atmospherebad">Bad</label>&nbsp;
            <input type="radio" id="atmospherevbad" name="atmosphere_rate" value="Very Bad">
            <label for="atmospherevbad"> Very Bad</label>&nbsp;
            <br>
            <label for="txt"><b>Any comments:(Optional)</b></label><!--Ask for the user to put any comments-->
            <br>
            <br>
            <textarea id="txt" name="remarks" rows="10" cols="60">
                                </textarea>
            <hr>
            </p>
            </p>
            </p>
            <p>
            <h1 id="H2">Personal Information: </h1> <!--ASK FOR PERSONAL INFORMATION-->
            <hr>
            <label for="fname">First name:</label><br><!--ASK FOR NAME-->
            <input type="text" id="fname" name="first_name" placeholder="First Name" required/><br><!--TAKES THE NAME-->
            <label for="lname">Last name:</label><br><!--ASK FOR THE lAST NAME-->
            <input type="text" id="lname" name="last_name" placeholder="Last Name" required/><br><!--TAKES THE LAST NAME-->
            <label for="dat">date:</label><br><!--ASK FOR THE DATE-->
            <input type="date" id="dat" name="transcation_date" value="Date" required/><br><!--TAKES THE DATE-->
            <label for="e-mail">Email:</label><br><!--ASK FOR THE E-MAIL-->
            <input type="email"  id="e-mail" name="email"placeholder="Enter your email"/><br><!--TAKES THE E-MAIL-->
            <label for="phone">Enter a phone number:</label><br><!--ASK FOR THE phone number-->
            <input type="tel" id="phone" name="phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required/><br><br><!--TAKES THE E-MAIL-->
            <!--                         Status: <input type="text" name="status"><br><br> -->
            <input class="tr" id="sub" type="submit" name="Submit button" />
            <script>
                if(document.getElementById("Sub").clicked==true){
                    var status=1;
                }
            </script>
            </p>
        </fieldset>
    </form>
</div>
</body>
</html>






