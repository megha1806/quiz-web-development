<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

$con = mysqli_connect('localhost','root');
mysqli_select_db($con , 'quizdbase');


?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="style.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
   
    <body>
        <div class="container1">

        <br> <h1 class="text-center"> THE TECHNICAL QUIZ </h1> <br>
            <h2 class="text-center"> Welcome <?php echo $_SESSION['username']; ?> </h2> <br>

            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 m-auto d-block">
            <div class="card">
                <h3 class="text-center card-header">You have to select only 1 out of 4 options. Best of Luck!  </h3>

            </div> <br>

            <form action="check.php" method="POST">

            <?php 
                for($i=1; $i<6 ; $i++){
                $q= "select * from questions where qid=$i";
                $query = mysqli_query($con, $q);
                while($rows = mysqli_fetch_array($query)){
            ?>

            <div class="card">
                <h4 class="card-header"> <?php echo $rows['question'] ?></h4>
                    
                    <?php
                         $q= "select * from answers where ans_id=$i";
                         $query = mysqli_query($con, $q);
                         while($rows = mysqli_fetch_array($query)){
                     ?>

                        <div class="card-body">
                            <input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']; ?>">
                            <?php echo $rows['answer'];?>

                        </div>




            <?php
                         }
                }

            }
                ?>

    
    <input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">


</form>
</div>
</div> 
            <div class="m-auto d-block">
            <br><a href="logout.php" class="btn btn-primary"> LOGOUT </a>
            </div> <br> <br>
        </div>
            
        </div>
    </body>
</html>