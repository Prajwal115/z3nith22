<html>
<style>
body{
  background-image: linear-gradient(to right,rgba(234,98,20,255),white );

}
h1{
  text-align: center;
  font-size:50px;
  color:black;
  margin-top: 50px;
  font-family: "Montserrat",sans-serif;
  font-weight: 800;
}
h3{
  font-family: "Montserrat",sans-serif;
    font-size: 25px;
text-align: center;
}
h2{
  color:black;
  text-align: center;
    font-family: "Montserrat",sans-serif;
      font-size: 30px;
      transform: translateY(25%);
}
td{
width:480px;
border-right: 3px solid black;
}
body{
  margin: 0;
}
#quan{
transform: translateY(50%);
}
#he{
  background-color: #ccc;
}
h3{
  transform: translateY(50%);
}
</style>
<h1>Leaderboard</h1>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
<table>
  <tr id = "he">
    <td> <h2>Rank</h2>   </td>
    <td> <h2>Name/Team</h2>   </td>
    <td> <h2>Points</h2>   </td>
  </tr>
  <tr id = "quan">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "z3nith'22";
    $connect = mysqli_connect("$servername","$username","$password","$db_name");
    if(!$connect){
      die("Error" . mysqli_error());

    }
    if($connect){

    }
    $query = "SELECT * FROM leaderboard";

    $result = $connect->query($query);
    while($row = $result->fetch_assoc()) {

      if ($row["id"] ==1) {
        echo "<tr>";
            echo "<td>";
            echo "<h3>";
            echo $row["id"];
            echo "</h3>";
            echo "</td>";
            echo "<td>";
            echo "<h3>";
            echo $row["name"];
            echo "</h3>";
            echo "</td>";
            echo "<td>";
            echo "<h3>";
            echo $row["points"];
            echo "</h3>";
            echo "</td>";
        echo "</tr>";
        }
        if ($row["id"] ==2) {
              echo "<tr>";
              echo "<td>";
              echo "<h3>";
              echo $row["id"];
              echo "</h3>";
              echo "</td>";
              echo "<td>";
              echo "<h3>";
              echo $row["name"];
              echo "</h3>";
              echo "</td>";
              echo "<td>";
              echo "<h3>";
              echo $row["points"];
              echo "</h3>";
              echo "</td>";
        echo "</tr>";
          }
          if ($row["id"] ==3) {
                echo "<tr>";
                echo "<td>";
                echo "<h3>";
                echo $row["id"];
                echo "</h3>";
                echo "</td>";
                echo "<td>";
                echo "<h3>";
                echo $row["name"];
                echo "</h3>";
                echo "</td>";
                echo "<td>";
                echo "<h3>";
                echo $row["points"];
                echo "</h3>";
                echo "</td>";
          echo "</tr>";
            }

            if ($row["id"] ==4) {
                  echo "<tr>";
                  echo "<td>";
                  echo "<h3>";
                  echo $row["id"];
                  echo "</h3>";
                  echo "</td>";
                  echo "<td>";
                  echo "<h3>";
                  echo $row["name"];
                  echo "</h3>";
                  echo "</td>";
                  echo "<td>";
                  echo "<h3>";
                  echo $row["points"];
                  echo "</h3>";
                  echo "</td>";
            echo "</tr>";
              }

              if ($row["id"] ==5) {
                    echo "<tr>";
                    echo "<td>";
                    echo "<h3>";
                    echo $row["id"];
                    echo "</h3>";
                    echo "</td>";
                    echo "<td>";
                    echo "<h3>";
                    echo $row["name"];
                    echo "</h3>";
                    echo "</td>";
                    echo "<td>";
                    echo "<h3>";
                    echo $row["points"];
                    echo "</h3>";
                    echo "</td>";
              echo "</tr>";
                }

                if ($row["id"] ==6) {
                      echo "<tr>";
                      echo "<td>";
                      echo "<h3>";
                      echo $row["id"];
                      echo "</h3>";
                      echo "</td>";
                      echo "<td>";
                      echo "<h3>";
                      echo $row["name"];
                      echo "</h3>";
                      echo "</td>";
                      echo "<td>";
                      echo "<h3>";
                      echo $row["points"];
                      echo "</h3>";
                      echo "</td>";
                echo "</tr>";
                  }

                  if ($row["id"] ==7) {
                        echo "<tr>";
                        echo "<td>";
                        echo "<h3>";
                        echo $row["id"];
                        echo "</h3>";
                        echo "</td>";
                        echo "<td>";
                        echo "<h3>";
                        echo $row["name"];
                        echo "</h3>";
                        echo "</td>";
                        echo "<td>";
                        echo "<h3>";
                        echo $row["points"];
                        echo "</h3>";
                        echo "</td>";
                  echo "</tr>";
                    }

                    if ($row["id"] ==8) {
                          echo "<tr>";
                          echo "<td>";
                          echo "<h3>";
                          echo $row["id"];
                          echo "</h3>";
                          echo "</td>";
                          echo "<td>";
                          echo "<h3>";
                          echo $row["name"];
                          echo "</h3>";
                          echo "</td>";
                          echo "<td>";
                          echo "<h3>";
                          echo $row["points"];
                          echo "</h3>";
                          echo "</td>";
                    echo "</tr>";
                      }

                      if ($row["id"] ==9) {
                            echo "<tr>";
                            echo "<td>";
                            echo "<h3>";
                            echo $row["id"];
                            echo "</h3>";
                            echo "</td>";
                            echo "<td>";
                            echo "<h3>";
                            echo $row["name"];
                            echo "</h3>";
                            echo "</td>";
                            echo "<td>";
                            echo "<h3>";
                            echo $row["points"];
                            echo "</h3>";
                            echo "</td>";
                      echo "</tr>";
                        }

                        if ($row["id"] ==10) {
                              echo "<tr>";
                              echo "<td>";
                              echo "<h3>";
                              echo $row["id"];
                              echo "</h3>";
                              echo "</td>";
                              echo "<td>";
                              echo "<h3>";
                              echo $row["name"];
                              echo "</h3>";
                              echo "</td>";
                              echo "<td>";
                              echo "<h3>";
                              echo $row["points"];
                              echo "</h3>";
                              echo "</td>";
                        echo "</tr>";
                          }



    }
?>

</table>

</html>
