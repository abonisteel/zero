<!-- Register form processing -->

<?php

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=zerowebh_aith', 'zerowebh_aith_user', 'Regist3r!@#');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'includes/error.html.php';
  exit();
}
// The try only runs if the First Name field has been submitted AND the honeypot field is empty
if (isset($_POST['myname']) and (empty($_POST['honeypot'])))
  {
    // If statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
		$fullname = $_POST['myname'];
		$age = $_POST['myage'];
        $role = $_POST['myrole'];
        $email = $_POST['myemail'];
        $ecname = $_POST['myecname'];
        $ecphone = $_POST['myecphone'];
        $genderid = $_POST['mygender'];
		$tsize = $_POST['mysize'];
		$sat = $_POST['satday'];
        $sun = $_POST['sunday'];
		$comments = $_POST['myaccom'];
    // Run try/catch to insert data into DB.
    try {
      $sql = 'INSERT INTO register SET
					name = :name,
					age = :age,
					role = :role,
                    email = :email,
                    emname = :emname,
					emphone = :emphone,
                    gender = :gender,
                    size = :size,
					satdate = :satdate,
					sundate = :sundate,
					accommodations = :accommodations';
      $s = $pdo->prepare($sql);
			$s->bindValue(':name', $fullname);
			$s->bindValue(':age', $age);
			$s->bindValue(':role', $role);
            $s->bindValue(':email', $email);
			$s->bindValue(':emname', $ecname);
            $s->bindValue(':emphone', $ecphone);
            $s->bindValue(':gender', $genderid);
            $s->bindValue(':size', $tsize);
			$s->bindValue(':satdate', $sat);
			$s->bindValue(':sundate', $sun);
			$s->bindValue(':accommodations', $comments);
		
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted registration: ' . $e->getMessage();
      include 'includes/error.html.php';
      exit();
    }
    // Load thank you page after INSERT runs
		include 'includes/submitted.php';
    // Load initial page if the if statement is false
	}
else {
	include '';
}

// End register form processing
