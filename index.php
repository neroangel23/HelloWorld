<html>
    <head>
        <title></title>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="nav">
            <nav>
                <ul>
                    <li class="current"><a href='index.php'>Home</a></li>
                    <li><a href='#'>My Profile</a></li>
                    <li><a href='#'>Careers</a></li>
                    <li><a href='#'>Contact Us</a></li>
                    <li><a href='#'>Logout</a></li>
                </ul>
            </nav>    
        </div>
        <div id="panel1">
            <?php
             $num1 = 123;
             $var1 = 'Hello';
             $var2 = 'World';
             echo $var1 . " " . $var2 ." ". $num1;
             ?>
        </div>
        <div id="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et lacus non nisi rutrum mattis. Aliquam ac velit molestie, tempus purus in, sodales massa. Pellentesque a sapien orci. Phasellus a sem volutpat, consectetur lorem quis, suscipit nisi. Cras vel mauris a arcu facilisis gravida vitae sed mauris. Nullam venenatis ligula sit amet nisl gravida tempor. Phasellus commodo nibh justo. Phasellus ut aliquam elit. Nulla facilisi.</p>

            <p>Nam dignissim quam lectus, eu faucibus est volutpat vel. Suspendisse ac erat sed odio elementum imperdiet sed quis magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Nulla vel nisi nec lorem vehicula aliquet et a ante. Curabitur in arcu vulputate, sollicitudin dui quis, sodales dui. Etiam nec egestas odio. Aenean suscipit aliquet ipsum, et pretium dui sollicitudin nec. Suspendisse risus orci, ornare vel fringilla et, accumsan ac mi. Ut egestas a sem ut vestibulum. Proin blandit tempor enim eu blandit. Proin vitae iaculis lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor diam at neque condimentum, sit amet euismod eros varius.</p>

            <p>Duis suscipit et magna sit amet auctor. Pellentesque placerat nunc erat, ac ullamcorper magna aliquet non. Nunc efficitur ullamcorper elit, et tempus nulla rhoncus et. Suspendisse vitae sem metus. Donec sed convallis sapien. Aliquam vehicula magna in metus imperdiet, sed finibus sapien tincidunt. Duis lobortis vehicula commodo. Duis fringilla consectetur sapien, ut rutrum mauris ultrices et. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut eget ligula quam.</p>

            <p>Etiam in sem sed mauris placerat interdum. Nullam et viverra ex. Suspendisse potenti. Vestibulum pulvinar ut urna vel ullamcorper. Praesent sit amet nulla eget urna maximus commodo. Fusce a nisi arcu. In feugiat semper metus, feugiat pretium nibh tincidunt id. Phasellus lacinia augue urna, congue auctor mauris facilisis et. Sed posuere ullamcorper consectetur. Suspendisse potenti. Vivamus vel dui libero. Vestibulum eget vulputate elit.</p>

            <p>Fusce vel odio ac libero iaculis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor pulvinar nunc ut consectetur. Aliquam sagittis ornare tortor, at sodales turpis facilisis eu. Nam semper justo ut semper fermentum. Nunc metus enim, mollis ac accumsan vitae, accumsan sit amet elit. Praesent id purus et ex placerat cursus id ac urna. Nam sollicitudin pretium nunc nec molestie. Nunc maximus, eros quis gravida dignissim, erat sem pharetra erat, nec varius mi justo et nibh. Sed id condimentum erat.</p>
        </div>
        <script>
            $(document).ready(function () {
               $('#nav').hide(0).slideDown(1000);;
            });
        </script>    
    </body>
</html>
