<?php 

session_start();
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
<style type="text/css">
</style>
    </head>

<body>
    <div class="container2">
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 m-auto d-block">
        <br><br>
        <h1 class="text-center"> The Technical Quiz </h1>
        <br><br><br>
        <table class="table text-center table-bordered table-hover">
            <tr>
                <th colspan="2" class="bg-dark"><h1 class="text-white"> Results </h1></th>
            </tr>
            <tr>
                <td>
                    Questions Attempted
                </td>

                <?php 
                 
                $result=0;
                if(isset($_POST['submit'])){
                 if(!empty($_POST['quizcheck'])){
                    $count = count($_POST['quizcheck']);
                ?>
                <td>
                    <?php
                    echo "Out of 5, You have answered ".$count." Options."; ?>
                </td>

                <?php
                $selected = $_POST['quizcheck'];
                $q = "select * from questions";
                $query = mysqli_query($con , $q);
                    $i=1;
                    while($rows = mysqli_fetch_array($query)){
                        $checked= $rows['ans_id']== $selected[$i];
                        if($checked)
                        {
                            $result++;
                        }
                        $i++;
                    }
                    ?>

                    </tr>

                    <tr>
                        <td>
                            Your Total Score
                        </td>
                        <td colspan="2">
                            <?php
                            echo "Your Score is ".$result.".";
                }
                else{
                    echo "<b>Please Select Atleast One Option.</b>";
                }
            }
            ?>
                        </td>
                    </tr>

                    <?php
                     $name = $_SESSION['username'];
                     $finalresult = "insert into user(username , totalques, answerscorrect) values ('$name','5','$result')";
                     $queryresult= mysqli_query($con , $finalresult);
                     ?>



        </table>
            <br> <br> <br>
        <a href="logout.php" class="btn">LOGOUT </a>
    </div>
    </div>
</body>
</html>