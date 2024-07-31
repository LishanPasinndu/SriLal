<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Lal Products</title>
    <link rel="icon" href="image/head.png"/>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="footer.css" />

</head>

<body class="bg">
    <br /><br /><br />
    <div class="boxx">

        <h1>Sign Up</h1>
        <input class="inp" type="text" placeholder="first name*" id="fn">
        <input class="inp" type="text" placeholder="last name*" id="ln">
        <input class="inp" type="password" placeholder="Password*" id="pa">
        <input class="inp" type="text" placeholder="Email*" id="em">
        <input class="inp" type="text" placeholder="Contact no*" id="co">
        <input class="inp" type="text" placeholder="Delivery Address*" id="add">
        <input class="inp" type="text" placeholder="State*" id="st">
        <input class="inp" type="text" placeholder="City*" id="ci">
        <select id="cu" class="inp">
            <option value="France">France</option>
            <option value="Germany">Germany</option>
            <option value="Italy">Italy</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United State">United State</option>
            <option value="Australia">Australia</option>
            <option value="New Zealand">New Zealand</option>
            <option value="Canada">Canada</option>
            <option value="Japan">Japan</option>
            <option value="South Korea">South Korea</option>
        </select>
        <input class="inp" type="text" placeholder="Postal Code*" id="pc"><br/><br/>
        <span class="war">* * Enter the correct email as tracking number etc. will be sent to the email * *</span>
        <br/><br/>
        <span class="war">* * Please note that it is only delivered to these countries * *</span>
        


        <hr style="border-color: rgba(0,0,0, 0)">
        <button class="btn" onclick="signup();">Register</button>
        <button class="btnn" onclick="gotoindex();">Home</button>

    </div>

    <script src="script.js"></script>
    <script src="alert.js"></script>


</body>

</html>