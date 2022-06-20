<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kalki Bank Service</title>
  <style>
    button {
      display: inline-block;
      border-radius: 70px;
      background-color: #2b67f8;
      text-decoration: none;
      border: none;
      color: #FFFFFF;
      text-align: center;
      font-size: 20px;
      padding: 15px;
      width: 150px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
    }

    button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }

    button span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
    }

    button:hover span {
      padding-right: 25px;
    }

    button:hover span:after {
      opacity: 1;
      right: 0;
    }











    .header {
      margin-left: -2px;
      color: #243e83;
      font-size: 61px;
      font-variant: small-caps;
      margin-top: -140px;
    }


    .topnav {
      overflow: hidden;

    }

    .btnstyle {
      padding-left: 7rem;
      padding-top: 34px;
    }


    .topnav {
      overflow: hidden;
      background-color: white;
    }

    .topnav a {
      float: left;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #2b67f8;
      color: white;
    }

    .topnav a.active {
      background-color: #2b67f8;
      color: white;
    }

    .topnav-right {
      float: right;
    }

    body {
      background-color: #FFFFFF;
      width: auto;
      height: auto;
      background-image: url("15.png");

      background-size: contain;
      background-repeat: no-repeat;
      margin-right: 0px;
      margin-left: 0px;
    }



    .tablediv {
      float: left;
      padding: 8px;
      margin: 5px;
      width: 70%;
      /*margin-left:15%; 
  margin-right:15%;*/
      border: 2px solid white;
      padding-left: -20rem;
    }

    /* .img {
      height: 29rem;
      /* padding-left: 1rem; 
      margin-top: -100px;
    } */

    table {

      font-family: 'Trebuchet MS', sans-serif;
      font-weight: bold;
      padding: 5px;
      margin: 2px;
      background: transparent;
      width: 80%;
      border: 0px solid black;
      margin-left: 0px;
    }

    th {
      padding: 10px 10px;
      text-align: center;
      font-weight: 500;
      font-size: 20px;
      color: navy;
      text-transform: uppercase;
    }

    td {
      padding: 0px;
      text-align: center;
      vertical-align: middle;
      font-weight: bold;
      font-size: 18px;
      color: black;
    }

    @media screen and (max-width: 800px) {
      div.tablediv {
        width: 100%;
        margin-left: 0%;
        margin-right: 0%;
        padding: 0px;
        margin: 0px;
      }

      table {
        padding: 0px;
        margin: 0px;
      }
    }

    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {
        display: none;
      }

      .topnav a.icon {
        float: right;
        display: block;
      }

    }

    @media screen and (max-width: 400px) {
      .topnav.responsive {
        position: relative;
      }

      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }

      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }

      .topnav.responsive .dropdown {
        float: none;
      }

      .topnav.responsive .dropdown-content {
        position: relative;
      }

      .topnav.responsive .dropdown .dropbtn {
        display: block;
        width: 100%;
        text-align: left;
      }
    }
  </style>
</head>

<body>

  <div class="topnav">
    <div class="topnav-right">
      <a href="home.php">Home</a>
      <a class="active" href="View.php">View Customers</a>
      <a href="transc.php">View Transactions</a>

    </div>
  </div>

  <div class="header">
    <h5 style="padding-right: 1rem">Kalki Bank Service</h5>
  </div>
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>

  <div style="float: center;">
    <div class="tablediv">
      <table>
        <tr>
          <th>Name</th>
          <th>Account Number</th>
          <th> Money</th>
        </tr>

        <?php
        //todo
        $conn = new mysqli("localhost", "sumit", "Qwerty123@", "sumit");

        // Check connection

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT name, acc_number FROM customer";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

          // output data of each row

          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<form method ='post' action = 'OneCustomer.php'>";
            echo "<td>" . $row["name"] . "</td><td>" . $row["acc_number"] . "</td>";
            echo "<td ><a href='OneCustomer.php'><button type='submit'' name='user'  id='users1' value= '{$row['name']}' ><span>Expand</span></button></a></td>";
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>

      </table>

    </div>
    <!-- <img src="12.png" class="img"></img> -->
  </div>

</body>

</html>