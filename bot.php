<!-- php start for bot-->
<!-- step 1 => create database for response and user messages -->
<!-- step 2 => create a connection -->

<?php
// server = localhost
// username = root
// password = "" (blank)
// database Name = your database name

$conn = mysqli_connect("localhost","root","","onlinebot");

if($conn){
$user_messages = mysqli_real_escape_string($conn, $_POST['messageValue']);

$query = "SELECT * FROM chatbot WHERE messages LIKE '%$user_messages%'";
$runQuery = mysqli_query($conn, $query);

if(mysqli_num_rows($runQuery) > 0){
    // fetch result
    $result = mysqli_fetch_assoc($runQuery);
    // echo result
    echo $result['response'];
}else{
    echo "Sorry can't be able to understand you! if you have any emerhency please free to call us at <h3>+91 9999988888</h2>";
}
}else{
    echo "connection Failed " . mysqli_connect_errno();
}
?>