<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
    <html>
        <head>

        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="style.css">

   <head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<h1>Welcome, <?php echo $_SESSION['user_name']; ?></h1>
        <a href="logout.php">Logout</a>
		
<h2>Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="height:40px;">Menu
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"></span>
    </div>
</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="insert.php" method="post">
    

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <button type="submit">Register </button>
    </div>
  
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

<?php
}
else {
    header("Location: index.php");
    exit();
}
?>