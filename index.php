<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <style type="text/css">
        .auto-style1 {
            width: 111px;
            padding-left: 15px;
        }
    </style>
</head>
<body>

    <?php
    // Turn off error reporting
    error_reporting(0);

    //function definition to compute the interest
    function computeInterest($p,$r,$y)
    {
    return($p*$r*$y)/100;
    }

    //Check if POST method used in the form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Check if principal amount is entered
    if ($_POST['principalamount']!="")

    {
    //set the background color using style
    echo '
    <style>
        body {
            background-color: magenta
            
        }
    </style>';
    //get the principal amount from the input textbox
    $principal = $_POST['principalamount'];
    //get the rate percent from the input textbox
    $rate = $_POST['ratepercent'];
    //get the no of years from the input textbox
    $years = $_POST['noyears'];
    //show the simple interest by calling the computeinterest function
    printf("<br /> The simple interest= $ %s  <br />", computeInterest($principal,$rate,$years));

    }
    else
    //error if principal amount was not entered
    printf("Must Enter a principal amount");
    }
    ?>
    <h1>Simple Interest Calculation</h1>
    <form action="index.php" method="post" name="intersetform">


        Principal:
        <input name="principalamount" type="text" /><br />
        Rate of Interest:
        <input name="ratepercent" type="text" /><br />
        No of Years:<input name="noyears" type="text" /><br />
        <br />
        <input name="compute" type="submit" value="Compute Interest" />
        <input id="Reset1" class="auto-style1" type="reset" value="Clear Data" />
    </form>
</body>
</html>
