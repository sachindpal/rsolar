<?PHP
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  date_default_timezone_set('Asia/Calcutta'); 

    $dbhost = '127.0.0.1:3306';
    $dbuser = 'u723196156_rsolar';
    $dbpass = 'Rsolar@123';
    $dbname = 'u723196156_rsolar';
    $current_date=date('F j, Y, g:i a');
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      else{

    //   $que=htmlspecialchars($_POST['que']);
      $first=htmlspecialchars($_POST['first']);
    //   $last=htmlspecialchars($_POST['last']);
    //   $user=htmlspecialchars($_POST['user']);
      $email=htmlspecialchars($_POST['email']);
      $phone=htmlspecialchars($_POST['phone']);
      $company=htmlspecialchars($_POST['company']);
    //   $schedule=htmlspecialchars($_POST['schedule']);
      $infromation=htmlspecialchars($_POST['infromation']);
      $utm_source=htmlspecialchars($_POST['utm_source']);
      $utm_campaign=htmlspecialchars($_POST['utm_campaign']);
      $utm_medium=htmlspecialchars($_POST['utm_medium']);
    
    //   $sql="INSERT INTO `enquiry` (`que`, `first`, `last`, `user`,`email`,`phone`,`company`,`schedule`,`infromation`,`utm_source`,`utm_campaign`,`utm_medium`,`create_date`) VALUES ('$que','$first','$last','$user','$email','$phone','$company','$schedule','$infromation','$utm_source','$utm_campaign','$utm_medium','$current_date')";
    
     $sql="INSERT INTO `enquirynew` (`first`,`email`,`phone`,`company`,`infromation`,`utm_source`,`utm_campaign`,`utm_medium`,`create_date`) VALUES ('$first','$email','$phone','$company','$infromation','$utm_source','$utm_campaign','$utm_medium','$current_date')";
      if (mysqli_query($conn,$sql))
      {
         
        $res=array("status"=>"1");
              echo json_encode($res);
          
      }
      else
      {

        $res=array("status"=>$sql);
        echo json_encode($res);
      }
    }
?>
