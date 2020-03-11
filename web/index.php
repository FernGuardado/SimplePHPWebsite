<?php

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimplePHPWebsite</title>

    <script>
    </script>

    <style>
        #title{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 id="title">Hello <?php echo getenv("username"); ?> </h1>
</body>
</html>