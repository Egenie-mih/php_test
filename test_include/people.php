<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Test</title>
</head>
<body>
    <?php 
        $base=array(

            
            array(
                'first_name' => "Jane",
                'surName' =>" qwer",
                'city' => "Sochi",
                'email' => "qwer@mail.ru",
                'vk' => "vk.com/qwe",

            ),
            array(
                'first_name' => "Janin",
                'surName' =>"tyui",
                'city' => "spb",
                'email' => "tyur@mail.ru",
                'vk' => "vk.com/qwty",

            ),
            array(
                'first_name' => "Jin",
                'surName' =>"tyui",
                'city' => "spb",
                'email' => "tyur@mail.ru",
                'vk' => "vk.com/qwty",

            ),
            array(
                'first_name' => "Anin",
                'surName' =>"tyui",
                'city' => "spb",
                'email' => "tyur@mail.ru",
                'vk' => "vk.com/qwty",

            ),
        );
        // echo  $base[1]["city"];
        foreach($base as $key => $copy_base){
            $copyName=$base['first_name'];
            $base['first_name']=$base['surName'];
            $copyName=$base['surName'];

            // echo "<pre>";
            // var_dump($copy_base);
            // echo "</pre>";
            // echo $copy_base["first_name"];

        }
        ?>
</body>
</html>
