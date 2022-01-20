<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
// Trying to connect by using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	//the case when we have a error and we display it
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
//isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	//the case if the date cannot be send
	exit('Please fill both the username and password fields!');
}


//prepare the SQL statement to prevent SQL injection. and check if the username exist


if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
    
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	//we store the result to prevent same account exist in our database
	$stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // if the Account exists, now we verify the password.
        //case when the user can log in
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE; //determine if users are logged in or not.
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['id'] = $id;
        //header('Location: Istya/homeadmin.php');
        
        } else {
            //redirection of our failogin.html
            header('location: failogin.html');
        }
    } else {
        //redirection of our failogin.html
        header('location: failogin.html');
    }
    //close
	$stmt->close();

if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
    
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        //we store the result to prevent same account exist in our database
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password);
            $stmt->fetch();
            // if the Account exists, now we verify the password.
            //case when the user can log in
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE; //determine if users are logged in or not.
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: home.php');
            
            } 
        } 
        //close
        $stmt->close();
    
?>