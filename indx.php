<html>
<head>
    <style>
        form {
            background: -webkit-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
            background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
            background: linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
            margin: auto;
            position: relative;
            width: 550px;
            height: 450px;
            font-family:Arial;
            font-size: 14px;
            font-style: italic;
            line-height: 24px;
            font-weight: bold;
            color: #09C;
            text-decoration: none;
            border-radius: 10px;
            padding: 10px;
            border: 1px solid #999;
            border: inset 1px ;
            -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
        }
        #exercise {
            width :800px;

            background-color : #eee;
            font-weight:bold;
            font-size:14px;

        }
    </style>
    <link rel="stylesheet" href="css.css">
</head>
<body >

<!--
<?php



if(isset($_POST ['name'] ) ){

    $formInfo = array(
        "name" => $_POST ['name'],
        "address" => $_POST ['address'],
        "email"   => $_POST ['email'],
        "howMany"=> $_POST ['howMany'],
        "brochure"=> $_POST ['brochure'],

    );
}





?>
-->


<?php



$nameErr = $emailErr = $genderErr = $addressErr = $brochureErr = $favFruitErr = "";
$name = $email = "";
$v1=1;$v2=1;$v3=1;$v4=1;$v5=1;$v6=1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";$v1=0;
    } else {
        $name = $_POST["name"];
   }

if (empty($_POST["address"])) {
    $addressErr = "Address is required";$v2=0;
} else {
    $address = $_POST["address"];
}


if (empty($_POST["email"])) {
    $emailErr = "Email is required";$v3=0;
} else {
    $email = $_POST["email"]; }



    if (empty($_POST["howMany"])) {
        $genderErr = "Required";$v4=0;
    } else {
        $howMany = $_POST["howMany"];
    }



    if (empty($_POST["brochure"])) {
        $brochureErr = "Required";$v5=0;
    } else {
        $brochure = $_POST["brochure"];
    }

    if (empty($_POST["favFruit"])) {
        $favFruitErr = "Required";$v6=0;
    } else {
        $favFruit = $_POST["favFruit"];
    }





}
#

if($v1==1 && $v2==1 && $v3==1 && $v4==1 && $v5==1 && $v6==1 && isset($_POST ['name'])) {






        echo "<form> <center> ";
        echo " The Name Is :  ";

        echo $formInfo['name'];
        echo "<br><br> The Address Is :  ";
        echo $formInfo['address'];
        echo "<br><br> The Email Is : ";
        echo $formInfo['email'];
        echo "<br><br> The HwMany Is : ";
        echo $formInfo['howMany'];
        echo "<br><br> The FavFruit Is : <br>";
        # print_r($_POST['favFruit']) ;  طريقة مختصرة لطباعة السلكت
        if (empty($_POST['favFruit']) != 1) {
            $sites = $_POST['favFruit'];
            $all = count($sites);
            for ($x = 0; $x < $all; $x++) {
                echo $x . ")  " . $sites[$x] . "<br>";
            }
        }

        echo "<br> Would You Like a brochure ? :  ";
        echo $formInfo['brochure'];


        echo "</form> </center>";


}
#





$ErrArray = array(
    "name" => "Name is required ",
    "address" => "Address is required",
    "email" => "Email is required",
    "howMany" => "Required",
    "favFruit" => "Required",
    "brochure" => "Required",
);
?>


<br><br><br><br><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name <input type="text" name="name" value=""><span id="error" style="color: red"><?php echo "*" . $nameErr ;?></span><br>
    Address <input type="text" name="address" value=""><span id="error" style="color: red"><?php echo "*".$addressErr  ?></span><br>
    Email <input type="email" name="email" value=""><span id="error" style="color: red"><?php echo "*".$emailErr  ?></span><br>
    How many pieces of fruit do you eat per day ? <span id="error" style="color: red"><?php echo "*".$genderErr  ?></span> <br>
    <input type="radio" name="howMany" value="zero"> 0<br>
    <input type="radio" name="howMany" value="one"> 1<br>
    <input type="radio" name="howMany" value="two"> 2<br>
    <input type="radio" name="howMany" value="twoplus2"> More than 2<br>


    My Favaourite fruit : <span id="error" style="color: red"><?php echo "*".$favFruitErr  ?></span><br>
    <select name="favFruit[]" size="4" multiple>
        <option value="apple">Apple</option>
        <option value="banana">Banana</option>
        <option value="plum">Plum</option>
        <option value="pomegranate">Pomegranate</option>
        <option value="strawberry">Strawberry</option>
        <option value="watermelon">Watermelon</option>
    </select><br>



    Would You Like a brochure ? <span id="error" style="color: red"><?php echo "*".$brochureErr  ?></span> <br>
    <input type="checkbox" name="brochure" value="Yes">Yes<br>
    <input type="submit" name="submit" value="Submit">
</form>










<br><br>


<span>By : Amr jamal</span>
</body>

</html>