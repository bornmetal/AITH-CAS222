<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=mobixclu_pdxhisttours', 'mobixclu_pdxhisttours', '30622962Rip!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include '../includes/error.html.php';
    exit();
}

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
//If a field in the form has a value and the Honeypot field is blank, then write the data to the database
if ((isset($_POST['myfname']))) {


    //Save the field values for success.html.php page
    $myrole = $_POST['myrole'];
    $myfname = $_POST['myfname'];
    $mylname = $_POST['mylname'];
    $myage = $_POST['myage'];
    $myemail = $_POST['myemail'];
    $myphone = $_POST['myphone'];
    $myecontactnam = $_POST['myecontactnam'];
    $myeconphone = $_POST['myeconphone'];
    $mygender = $_POST['mygender'];
    $mytshirtsz = $_POST['mytshirtsz'];
    $mysatevents= $_POST['mysatevents'];
    $mysunevents = $_POST['mysunevents'];
    $mycomments = $_POST['mycomments'];


    //Insert data to reservations table
    try {
        $sql = 'INSERT INTO aith SET
        myrole = :myrole,
        myfname = :myfname,
        mylname = :mylname,
         myage = :myage,
        myemail = :myemail,
    myphone = :myphone,
    myecontactnam = :myecontactnam,
    myeconphone = :myeconphone,
    mygender = :mygender,
    mytshirtsz = :mytshirtsz,
    mysatevents= :mysatevents,
   mysunevents = :mysunevents,
    mycomments = :mycomments';
        $s = $pdo->prepare($sql);
        $s->bindValue(':myrole', $myrole);
        $s->bindValue(':myfname', $myfname);
        $s->bindValue(':mylname', $mylname);
        $s->bindValue(':myage', $myage);
        $s->bindValue(':myemail', $myemail);
        $s->bindValue(':myphone', $myphone);
        $s->bindValue(':myecontactnam', $myecontactnam);
        $s->bindValue(':myeconphone', $myeconphone);
        $s->bindValue(':mygender', $mygender);
        $s->bindValue(':mytshirtsz', $mytshirtsz);
        $s->bindValue(':mysatevents', $mysatevents);
        $s->bindValue(':mysunevents', $mysunevents);
        $s->bindValue(':mycomments', $mycomments);
        $s->execute();



    } catch (PDOException $e) {



        $error = 'Error fetching submission: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }

    include 'success.html.php';
} else {
    include 'reservations.html.php';

}

?>