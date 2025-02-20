<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "hello world<br>";
    // variable
    $characterName = "John Malanga";
    $characherAge = 35;
    echo "There was once a man named $characterName<br>";
    echo "He is $characherAge years old<br>";
    echo "He is now in Kenya and named $characterName <br> ";
    $characterName ="Christine Riyan";
    $characherAge = 20;
    echo "But his name is $characterName and $characherAge years old <br>";
    // data types
    $name = "John";
    $age = 30;
    $gpa = 3.0;
    $isStudent = true;
    echo "Name: $name <br>";
    echo "Age: $age <br>";
    echo "GPA: $gpa <br>";
    echo "Is Student: $isStudent <br>";
   // working with strings
   $phrase = "Stine";
    echo strtolower("Hello $phrase! <br>");
    echo strtoupper("Hello $phrase! <br>");
    echo strlen( $phrase);
    echo $phrase[0]; 
    echo $phrase[0] = "R";
    echo str_replace("Stine","Christine",$phrase);
    echo substr($phrase,3);
    //Working with numbers
    echo 50.09;
    echo 8+9;
    echo 10%6;
    $num = 100;
    echo $num+=40;
    echo abs(-100);
    echo pow(2,3);
    echo sqrt(16);
    echo max(10, 20, 30);
    echo min(10, 20, 30);
    echo rand(1, 100);
    echo pi();
 
    // arrays
    $colors = array("red", "blue", "green");
    echo "Favorite colors: $colors[0], $colors[1], $colors[2] <br>";
    // associative arrays
    $person = array("name" => "John", "age" => 30, "city" => "New York");
    echo "Name: $person[name] <br>";
    echo "Age: $person[age] <br>";
    echo "City: $person[city] <br>";
    // loops
    for ($i = 0; $i < count($colors); $i++) {
        echo "Color: $colors[$i] <br>";
    }
    // while loop
    $i = 0;
    while ($i < count($colors)) {
        echo "Color: $colors[$i] <br>";
        $i++;
    }
    // do-while loop
    do {
        echo "Color: $colors[$i] <br>";
        $i++;
    } while ($i < count($colors));
    // function
    function greet($name) {
        echo "Hello $name! <br>";
    }
    greet("John");
    // switch statement
    $color = "red";
    ?> 

    <!-- Getting User Input -->
    <form action="site.php" method="get">
     Name:<input type="text" name="name">
     <br>
     Age:<input type="text" name="age">
     <br>
        <input type="submit">
    </form>
    <br>
    <?php echo $_GET ["name"] ?>
    <br>
    <?php echo $_GET ["age"] ?>
    <!-- Building a simple calculator -->
    <form action="site.php" method="GET">
     Num1:<input type="Number" name="Num1">
     <br>
      Num2:<input type="Number" name="Num2">
        <input type="submit">
    </form>
    <?php
      Answer: echo $_GET["Num1"]+$_GET["Num2"]
    ?>
    <!-- Building maldib game -->
     <form action = "site.php" metod ="GET">
        Color: <input type="text" name="Color" name="Color">
        <br>
        Pural Noun:<input type="text" name="Pluralnoun">
        <br>
        Celebrity: <input type="text" name="celebrity" >
        <input type="submit">
    </form>
    <br>
    <?php
       $color = $_GET["Color"];
       $pluralNoun=$_GET["Pluralnoun"];
       $celebrity=$_GET["celebrity"];
       echo "Roses are $color <br>";
       echo "$pluralNoun are blue <br>";
       echo "I love $celebrity <br>";
    ?>  
 <!--URL parameters  -->
     <form action="site.php" method="GET">
        <input type="text" name ="name"> <br>
        <input type="submit">
    </form> 
    <br><br> 
    <?php 
       echo $_GET["name"];
     ?>
    <!-- POST vs GET -->
     <form action="site.php" method="POST">
        <input type="password" name ="password"> <br>
        <input type="submit">
    </form>
    <?php
      echo $_POST["password"];
    ?>
    <!--arrays  -->
    <?php
      $friends = array("Kelvin","RIyan", "Tom","Bob");
      $friends[1] ="Stine";
      $friends[4]="John";
      echo $friends[1];
      echo count($friends);
    ?>
    <!-- using checkboxes -->
     <form action="site.php" method="POST">
      Apples:  <input type="checkbox" name="fruits[]"value="apples"><br> 
      Oranges:  <input type="checkbox" name="fruits[]"value="oranges"><br>
      Pears:  <input type="checkbox" name="fruits[]"value="pears"><br>                 
        <input type="submit">
     </form>
     <?php
     $fruits= $_POST['fruits'];
         echo $fruits[2];
     ?>
    <!-- associative arrays -->
      <form action="site.php" method="POST">
        <input type="text" name="student">
        <input type="submit">
      </form>
      <?php
        $grades = array("Jim"=>"A", "Jane"=>"B", "John"=>"C");
        echo $grades[$_POST["student"]];
        $grades["Jim"]="C";
        echo $grades["Jim"];
      ?>
    <!-- function in php -->
     <?php
        function sayHi($name, $age){
            echo "hello $name, you are $age <br>";
        }
        sayHi("John", 40);
        sayHi("John",35);
        sayHi("John",23);
    ?>
    <!-- return statements  -->
     <?php
        function cube($num){
            return $num * $num * $num;
        }
        echo cube(4);
        
     ?>
     <!-- if statements -->
      <?php
           $isMale = false;
           $isTall = false;
           if($isMale && $isTall){   // || or and one condition has to be true to run the program
               echo "You are a tall male <br>";
           } elseif ( $isMale && !$isTall){
               echo "You are a short male <br>";
           }elseif(!$isMale && $isTall){
               echo "You are a tall female <br>";  
           }else{
               echo "You are not a tall male <br>";
           } 
      ?>
     <!--  if statements comparisons -->
      <?php
          $num1 = 10;
          $num2 = 20;
          if($num1 == $num2){
              echo "num1 is equal to num2 <br>";
          } elseif($num1 > $num2){
              echo "num1 is greater than num2 <br>";
          } else{
              echo "num1 is less than num2 <br>";
          }
       ?>
       <!--building a full functional calculator  -->

       <form action="site.php" method="POST">
        Number1:<input type="number" step="0.1" name="num1">
        <br>
        Number2:<input type="number" step="0.1" name="num2">
        <br>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        <input type="submit">
       </form>
       <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];
       
        if($operator =="+"){
           echo $num1+$num2;
        } elseif($operator == "-"){
            echo $num1-$num2;
        } elseif($operator =="*"){
            echo $num1*$num2;
        } elseif($operator =="/"){
            echo $num1/$num2;
        }else{    
            echo "Invalid operator";
        }
        ?>
    <!-- switch statements -->
     <form action="site.php" method="POST">
        What was your grade <br>
        <input type="text" name ="grade">
        <input type="submit">
        <?php
         $grade = $_POST["grade"];
         switch($grade){
             case "A":
                 echo "Excellent";
                 break;
             case "B":
                 echo "Good";
                 break;
             case "C":
                 echo "Average";
                 break;
             case "D":
                 echo "Below Average";
                 break;
             default:
                 echo "Invalid grade";
         }
       ?>
       <!-- while loop -->
         <?php
            $index=1;
            while($index <=5){
                echo "$index <br>";
                $index++;
            }
         ?>
</body>
</html>

