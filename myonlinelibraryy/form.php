form.php
<!DOCTYPE html>
<html>
<head>
<title> Sign Up!</title>
<link href="style-main.css" rel="stylesheet">
</head>
    
<body>
<div id="header">
    
<img src="img/ph-header2.png" width="739"height="135">
</div>
    
<div id="topLine"></div>
    
<div id="mainContent">
    
<h1>Hello The Inside! </h1>
    
<form action="form-action.php" method="post" name="signup" id="signup">
<h2>Contact Info</h2>
    
<p><label for="name"> Name: </label>
<input name="name" type="text" id="email" size="60">
<label for="email"> Email: </label>
<input name="email" type="text" id="email" size="60"></p>

<h2>Your Interests</h2>
<p>Experience Level:<br><label><input name="level" type="radio" id="expert" value="expert"> Expert</label><label><input name="level" type="radio" id="decent" value="decent"> Decent</label></p>

<p>What do you read?<br><label><input name="publications[]" type="checkbox" id="publications_drf" value="BuzzFeed"> BuzzFeed</label><br>
<label><input name="publications[]" type="checkbox" id="publications_elle" value="Reddit"> Reddit</label></p>

<p>Fun Stuff:<br><select name="funstuff" id="funstuff">
<option value="daily">Weekly Hightlights</option>
<option value="yearly">GIFs</option>
</select></p>

<p>Tell us about yourself!<br>

<textarea name="comments" id="comments" cols="52" rows="5"></textarea></p>

<input class="button lgButton" type="submit" name="submit"id="submit" value="Sign Me Up!"></form>
</div>

<div id="footer"><a href="#">FAQ</a>
<a href="#">Forgot Password?</a>
<a href="#">Change Your Email</a>
<a href="#">Contact The Insider</a>
</div>
</body>
</html>