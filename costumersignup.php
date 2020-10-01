<html>
<head>
<title>www.newsportal.com</title>
    <link rel="stylesheet" href="./css/style2.css">
</head>
<body>
<?php
include 'navbar.php';
?>

<div class="box">
    <div class="signin">
        <form action="#">
          <h1 id="heading">Sign up</h1>
            <input type="text" placeholder="Name" required>
            <input type="text" placeholder="E-mail" required>
            <input type="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  required>
            <input type="Password" placeholder="Repeat your password" required>

            <input type="checkbox"><p  id="textline">I agree all statements in <a href="#" id="link"><u>Terms of service</u></a></p> 
            <input type="submit"value="Ragister" id="btn">
        </form>
    </div>
    <div class="imagelink">
      <img src="images/newspaper.png" id="img">
      <a href="costumersignin.php" id="link1"><u>I am already member<u></a>
    </div>
</div>

    <script>
      var myInput = document.getElementById("psw");
      var letter = document.getElementById("letter");
      var capital = document.getElementById("capital");
      var number = document.getElementById("number");
      var length = document.getElementById("length");

      // When the user clicks on the password field, show the message box
      myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
      }

      // When the user clicks outside of the password field, hide the message box
      myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
      }

      // When the user starts to type something inside the password field
      myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) {
          letter.classList.remove("invalid");
          letter.classList.add("valid");
        } else {
          letter.classList.remove("valid");
          letter.classList.add("invalid");
      }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)) {
          capital.classList.remove("invalid");
          capital.classList.add("valid");
        } else {
          capital.classList.remove("valid");
          capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) {
          number.classList.remove("invalid");
          number.classList.add("valid");
        } else {
          number.classList.remove("valid");
          number.classList.add("invalid");
        }

        // Validate length
        if(myInput.value.length >= 8) {
          length.classList.remove("invalid");
          length.classList.add("valid");
        } else {
          length.classList.remove("valid");
          length.classList.add("invalid");
        }
      }
</script>
<?php
include 'footer.php';
?>
</body>
</html>