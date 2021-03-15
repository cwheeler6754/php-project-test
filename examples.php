<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>PHP Examples</title>
            <link rel="stylesheet" href="css/styles.css">
        </head>
    <body id="examples">
        <?php
            include("includes/header-nav.php");
        ?>
        <main id="examples-main">
<!-------------------------     MOD 06 ARRAY EXAMPLES     ------------------------->
            <section class="mod06">
                <h2>PHP Examples Module 06</h2>
                <section>
                    <h2>Questions and Code Examples</h2>
                    <h3> 1. List the data types that PHP supports with an example (description) of each.</h3> 
                    <p>String, Interger, Boolean, Float.</p>
                    <h3> 2. What is the difference between a PHP integer, float and number string. Include an example (description) of each.</h3>
                        <ul>
                            <li class="example-list">String: Sequence of characters like "Hello Everyone".</li>
                            <li class="example-list">Interger: A non-decimal number like 7.</li>
                            <li class="example-list">Boolean: True or False. Used for conditional statements.</li>
                            <li class="example-list">Float: A decimal number  like 7.5.</li>
                        </ul>
                    <h3> 3. What is an array? Provide a description and use PHP to code an example of an index/numeric array and any associative array using keys and values.  Add a heading above each to identify the type of array with a brief paragraph to explain what it is doing.</h3>
                    <ul>
                            <li class="example-list">Array: An Array is a variable that can store multiple values.</li>
                            <li>
                                <h4>Index Array Example</h4>
                                <p>An index array uses a numeric index to echo the array. The array variable is stated using $ followed by the name. In the array, each item is put in quotes and separeted using a comma. To call a item it is written like: $drinks[0]. The number cooresponds to the item in the array starting at 0 as the first item.</p>
                                <?php
                                    $drinks = array("Pepsi", "Coke", "Dr. Pepper", "Water", "Iced Tea");
                                    echo "My Favorite drinks are: " . $drinks[0] . ", " . $drinks[1] . ", " . $drinks[2] . ", " . $drinks[3] . " and " . $drinks[4] . ".";
                                ?>
                            </li>
                            <li>
                                <h4>Associative Array Example</h4>
                                <p>An associative array uses named indexes to echo the array. You create the array name the same as an index array. The values are named like: "Banana"=>".25". When echoed, you use: $price['Apple'] to display the array item.</p>
                                <?php
                                    $price = array("Apple"=>".35", "Banana"=>".25", "Avocado"=>"1.50");
                                    echo "An Apple is " . $price['Apple'] . " cents each.<br>";
                                    echo "A Banana is " . $price['Banana'] . " cents each.<br>";
                                    echo "An Avocado is $" . $price['Avocado'] . " each.";
                                ?>
                            </li>
                        </ul>
                    <h3> 4. What is a function? Provide a description of examples.</h3>
                        <ul>
                            <li>
                                <h4>Simple Function Array</h4>
                                <p>A function is a block of code that does something when called. The function is called by staing the function name. For this function the name to call is hello();</p>
                                <?php
                                    function hello() {
                                        Echo "Hello World!";
                                    }

                                    hello();
                                ?>
                            </li>
                        </ul>
                    <h3> 5. Create a PHP code function example using any PHP math function.</h3>
                        <ul>
                            <li>
                                <h4>Built in Math function</h4>
                                <p>echo(pi()); is how to echo some numbers of pi.</p>
                                <?php
                                    echo(pi());
                                ?>
                            </li>
                            <li>
                                <h4>Created Math function</h4>
                                <p>This function is a function using a random number generator. This gets a random number associated with a player number. The highest number goes first. If its a tie, refresh the page to get new numbers.</p>
                                <?php
                                    function random() {
                                        echo "Player 1: " . rand(1, 10) . "<br><br>";
                                        echo "Player 2: " . rand(1, 10) . "<br><br>";
                                        echo "Player 3: " . rand(1, 10) . "<br><br>";
                                        echo "Player 4: " . rand(1, 10);
                                    }

                                    random();
                                ?>
                            </li>
                        </ul>
                    <h3> 6. Research some of the top PHP functions used in WordPress.  List at least 5 with a description of what they do.</h3>
                        <ul>
                            <li class="example-list">get_comments_number()</li>
                            <p>WordPress uses this function to get the number of comments on a post.</p><br>
                            <li class="example-list">get_the_title()</li>
                            <p>This function gets the title for a post.</p><br>
                            <li class="example-list">get_sidebar() and get_footer()</li>
                            <p>The first one loads the sdebar template and the other loads the footer template.</p><br>
                            <li class="example-list">get_the_date()</li>
                            <p>This gets the date for when the post was written.</p><br>
                            <li class="example-list">the_excerpt()</li>
                            <p>This loads an excerpt for a post.</p>
                        </ul>
                </section>
            </section>
            <hr class="example-hr">
<!-------------------------     MOD 07 LOOP EXAMPLES     ------------------------->
            <section class="mod07">
                <h2>PHP Examples Module 07</h2>
                <section>
                    <h2>Code Examples</h2>
                    <h3> 1. Loops</h3> 
                    <p class="mod07_p">while  |  do...while  |  for  |  foreach</p>
                    <section class="loops">
    <!-------------------------     MOD 07 WHILE LOOP EXAMPLE     ------------------------->
                        <h3>while loop</h3>
                        <div class="loops_div">
                            <p class="mod07_p">A while loop will run as long as the condition is true. Using an incrementor, it will increse until the condition turns false.</p>
                            <?php
                                $dollar = 4;

                                while($dollar <= 7) {
                                echo "You have $dollar dollars saved. <br>";
                                $dollar++;
                                }
                            ?>
                        </div>
    <!-------------------------     MOD 07 DO...WHILE LOOP EXAMPLE     ------------------------->
                        <h3>do...while loop</h3>
                        <div class="loops_div">
                            <p class="mod07_p">A do...while loop will run once no matter what, then it will compare the condition and if true, it will go again. When condition is false, it will stop.</p>
                            <?php
                                $number = 1;

                                do {
                                    echo "The number of loops so far is: " . $number . "<br>";
                                    $number++;
                                } 
                                    while ($number <= 5); {
                                } echo "End of the loop!";
                            ?>
                        </div>
    <!-------------------------     MOD 07 FOR LOOP EXAMPLE     ------------------------->
                        <h3>for loop</h3>
                        <div class="loops_div">
                            <p class="mod07_p">A for loop uses three parameters. The first one sets the value of the variable. The second is the condition that needs to be met. The third is the incrementor. If the condition is true, it will continue. When the condition is false, it stops. This loop incrementor is set to increase by 5 ($num+=5).</p>
                            <?php
                                for ($num = 20; $num <= 40; $num+=5){
                                    echo "The number is: $num <br>";
                                };
                            ?>
                        </div>
    <!-------------------------     MOD 07 FOREACH LOOP EXAMPLE     ------------------------->
                        <h3>foreach loop</h3>
                        <div class="loops_div">
                            <p class="mod07_p">A foreach loop uses an array to loop through the values until it has gone through the array. This array stores names of Idaho cities. the for each loop goes through the array and takes the $value and adds ID to each one and echos them.</p>
                            <?php
                                $towns = array("Boise", "Nampa", "Lewistion", "Pocatello");
                                foreach ($towns as $value) {
                                    echo "$value, ID <br>";
                                };
                            ?>
                        </div>
                    </section>
                    <h3> 2. Conditional Statements</h3> 
                    <p class="mod07_p">if  |  if...else  |  if...elseif...else  |  switch</p>
                    <section class="conState">
    <!-------------------------     MOD 07 IF STATEMENT EXAMPLE     ------------------------->
                        <h3>if statement</h3>
                        <div class="conState_div">
                            <p class="mod07_p">This statement checks if the condition is true. If it is the echo will run. If false, nothing will happen.</p>
                            <?php
                                $grade = 100;

                                if ($grade >= 90){
                                    echo "You are Passing with a $grade%. <br>";
                                }
                            ?>
                        </div>
    <!-------------------------     MOD 07 IF...ELSE STATEMENT EXAMPLE     ------------------------->
                        <h3>if...else statement</h3>
                        <div class="conState_div">
                            <p class="mod07_p">This statement will execute a block of code if true. If the first one is false, it will run the else statement.</p>
                            <?php
                                $grade = 56;

                                if ($grade <= 60){
                                    echo "You are failing with a $grade%. <br>";
                                } else {
                                    "You are passing with a $grade%. <br>";
                                };
                            ?>
                        </div>
    <!-------------------------     MOD 07 IF...ELSEIF...ELSE STATEMENT EXAMPLE     ------------------------->
                        <h3>if...elseif...else statement</h3>
                        <div class="conState_div">
                            <p class="mod07_p">This statement calls different blocks of code depending on the condition. If the first condition is true, it echos the cooresponding string. If it is false, it moves on and does the same thing. If the second is also false, it rund the else statement. </p>
                            <?php
                                $grade = 75;

                                if ($grade >= 80){
                                    echo "You are passing! Grade is $grade%. <br>";
                                } elseif ($grade <= 70) {
                                    echo "You are failing! Grade is $grade%. <br>";
                                } else {
                                    echo "You are on the right track! Grade is $grade%. <br>";
                                };
                            ?>
                        </div>
    <!-------------------------     MOD 07 SWITCH STATEMENT EXAMPLE     ------------------------->
                        <h3>switch statement</h3>
                        <div class="conState_div">
                            <p class="mod07_p">This is a switch statement. It compares a variable to multiple possible matches and stops when it finds one. It will echo the cooresponding string.</p>
                            <?php
                                $subject = "web design";

                                switch ($subject) {
                                case "history":
                                    echo "Your favorite subject is $subject!";
                                    break;
                                case "math":
                                    echo "Your favorite subject is $subject!";
                                    break;
                                case "web design":
                                    echo "Your favorite subject is $subject!";
                                    break;
                                default:
                                    echo "Your favorite subject is not provided.";
                                }
                            ?>
                        </div>
                    </section>
                    <h3> 3. Custom Function</h3> 
                    <p class="mod07_p">Create a function that accepts at least two parameters and outputs three variables.</p>
                    <section class="cusFun">
    <!-------------------------     MOD 07 CUSTOM FUNCTION EXAMPLE     ------------------------->
                        <h3>Custom Function</h3>
                        <div class="cusFun_div">
                            <p class="mod07_p">This is a custom function. It has a function for total price before the sale is calculated. It has a function for a sale. Each function is called using the preset paramenters. calc_before calls the price with sales tax. calc_sale calls the price after the sale price is calculated.</p>
                            <?php

                                function calc_before($unit_price, $sales_tax){
                                    $total = $unit_price * $sales_tax;
                                    return number_format($total, 2);
                                }

                                function calc_sale($unit_price, $sale_percent, $sales_tax){
                                    $total = ($unit_price / $sale_percent) * $sales_tax;
                                    return number_format($total, 2);
                                }

                                $unit_price = 23.99;
                                $sale_percent = 1.25;
                                $sales_tax = 1.06;

                                echo 'calc_before is used to call this function. <br><br>';
                                echo 'The total price before sale is ' . calc_before($unit_price, $sales_tax);
                                echo '<br><br>';
                                echo 'calc_sale is used to call this function. <br><br>';
                                echo 'The total price is ' . calc_sale($unit_price, $sale_percent, $sales_tax);
                                echo '<br>';
                            ?>
                        </div>
                    </section>
                    <h3> 4. Built-in PHP Array Function</h3> 
                    <p class="mod07_p">Explore any of the built-in PHP array functions and create a code example using at least one of them.</p>
                    <section class="builtArray">
    <!-------------------------     MOD 07 BUILT-IN PHP ARRAY FUNCTION EXAMPLE     ------------------------->
                        <h3>Built-in PHP Array Function</h3>
                        <div class="builtArray_div">
                            <p class="mod07_p">This gets a range of numbers (1 to 10) and sorts it in reverse.</p>
                            <?php
                                $numbers = range(1, 10);
                                rsort($numbers);
                                foreach ($numbers as $number) {
                                    echo "$number  |  ";
                                }
                                echo '<br>';
                            ?>
                            <p class="mod07_p">This gets a range of numbers (10 to 20) and shuffles them.</p>
                            <?php
                                $numbers = range(10, 20);
                                shuffle($numbers);
                                foreach ($numbers as $number) {
                                    echo "$number  |  ";
                                }
                                echo '<br>';
                            ?>
                        </div>
                    </section>
                </section>
            </section>
            <hr class="example-hr">
        </main>
        <footer>
            <?php
                include("includes/footer.php");
            ?>
        </footer>
    </body>
    </html>