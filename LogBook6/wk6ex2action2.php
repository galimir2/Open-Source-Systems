<?php
    // Connect to server and select database
    $servername = 'localhost';
    $db_name = 'db1_gwalker';
    $username = 'root';
    $password = '';

    $connect = mysqli_connect($servername, $username, $password, $db_name);
    if(mysqli_connect_errno())
    {
        echo "Did not manage to connect to MYQSL: " . mysqli_connect_error();
    }

    if($_POST['btnsubmit'] == "save")
    {
        $sql = "UPDATE test set phone_number = '{$_POST["txttelno"]}', email = '{$_POST["txtemail"]}' where ID = '{$_COOKIE["id"]}'";
    }

    if($_POST['btnsubmit'] == "delete")
    {
        $sql = "DELETE from test where ID = '{$_COOKIE["id"]}'";
    }

    $result = mysqli_query($connect, $sql);
    if($result)
    {
        echo "<script>window.location = 'http://localhost/LogBook1/LogBook6/wk6ex2.php'</script>";
    }
    else
    {
        echo "Error occured when updating the record: " . mysqli_error($connect);
    }




?>