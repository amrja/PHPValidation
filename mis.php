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
</head>
<body>
<div id="exercise" >


<?php

$name = $email = "";

$ErrArray = array(
    "name" => "Name is required ",
    "address" => "Address is required",
    "email" => "Email is required",
    "howMany" => "Required",
    "favFruit" => "Required",
    "brochure" => "Required",
);

?>

</div>
<br><br><br><br><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name <input type="text" name="name" value=""><span id="errr"><? echo "hi" ;  ?></span><br>
    Address <input type="text" name="address" value=""><br>
    Email <input type="text" name="email" value=""><br>
    How many pieces of fruit do you eat per day ?<br>
    <input type="radio" name="howMany" value="zero"> 0<br>
    <input type="radio" name="howMany" value="one"> 1<br>
    <input type="radio" name="howMany" value="two"> 2<br>
    <input type="radio" name="howMany" value="twoplus"> More than 2<br>
    My Favaourite fruit :<br>
    <select name="favFruit[]" size="4" multiple>
        <option value="apple">Apple</option>
        <option value="banana">Banana</option>
        <option value="plum">Plum</option>
        <option value="pomegranate">Pomegranate</option>
        <option value="strawberry">Strawberry</option>
        <option value="watermelon">Watermelon</option>
    </select><br>
    Would You Like a brochure ?<br>
    <input type="checkbox" name="brochure" value="Yes">Yes<br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>

</html>
<?php

$ErrArray = array(
    "name" => "Name is required ",
    "address" => "Address is required",
    "email" => "Email is required",
    "howMany" => "Required",
    "favFruit" => "Required",
    "brochure" => "Required",
);
$y=array('name','address','email','howMany','favFruit');

$formInfo = array();
$ErrArray = array();

for($i=0;$i<count($y);$i++){
    if(isset($_POST[$y[$i]])){
        $formInfo[$y[$i]]= $_POST[$y[$i]];echo $formInfo['name'][0];

    }
    else{
        if($y[$i]=='name' or $y[$i]=='address'){
            $ErrArray[$y[$i]]= "the.$y[$i].is empty" ;}
        else {
            if($y[$i]=='howMany'){
                $ErrArray[$y[$i]] ="not selected";}
            else{
                $ErrArray[$y[$i]] ="";
            }
        }


    }
}

/*Amr jamal*/