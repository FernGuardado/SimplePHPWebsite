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
        #sect-title{
            text-align: center;
        }
        #wrapper {
            display: flex;
            justify-content: center;
        }

        /*Container styles*/
        #container{
            height: 230px;
            width: 450px;
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -100px;
            margin-left: -200px;
            border: solid 3px;
            border-radius: 20px;
            background-color: white;  
        }
    </style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body style="background-color: #00dcff">
    <div id="container">
        <br>
        <section>

        <h1 id="title">Name Genterator</h1>
            <p id="sect-title">Generate random names</p>
            <form id="nameForm" action="index.php" method="post" >
                <div id="wrapper">
                    <input class="btn btn-primary" type="submit" name="submit" value="Generate">
                </div>
            </form>
        </section>

        <?php
        function randomName() {
            $names = array(
                'Addison',
                'Adrian',
                'Aiden',
                'Ainsley',
                'Alex',
                'Amari',
                'Andy',
                'Ari',
                'Ash',
                'Aspen',
                'Aubrey',
                'August',
                'Avery',
                'Bay',
                'Blaine',
                'Blake',
                'Bobbie',
                'Brett',
                'Brook',
                'Brooklyn',
                'Caelan',
                'Cameron',
                'Campbell',
                'Carroll',
                'Carson',
                'Casey',
                'Charlie',
                'Chris',
                'Clay',
                'Corey',
                'Dana',
                'Dakota',
                'Dale',
                'Dallas',
                'Daryl',
                'Delta',
                'Devin',
                'Dorian',
                'Drew',
                'Dylan',
                'Easton',
                'Eddie',
                'Eli',
                'Elliott',
                'Emerson',
                'Emery',
                'Finley',
                'Frances',
                'Frankie',
                'Gabriel',
                'Glenn',
                'Gray',
                'Harley',
                'Harper',
                'Hayden',
                'Hudson',
                'Hunter',
                'James',
                'Jamie',
                'Jayden',
                'Jean',
                'Jesse',
                'Jordan',
                'Jules',
                'Julian',
                'Kaden',
                'Kai',
                'Karter',
                'Kelly',
                'Kelsey',
                'Kendall',
                'Kennedy',
                'Kyle',
                'Lake',
                'Landry',
                'Lincoln',
                'Logan',
                'London',
                'Lou',
                'Mackenzie',
                'Mason',
                'Max',
                'Maxwell',
                'Monroe',
                'Morgan',
                'Parker',
                'Pat',
                'Peyton',
                'Phoenix',
                'Quinn',
                'Ray',
                'Reagan',
                'Reed',
                'Reese',
                'Remy',
                'Riley',
                'River',
                'Roan',
                'Rory',
                'Rowan',
                'Rudy',
                'Ryan',
                'Sage',
                'Sam',
                'Sawyer',
                'Shawn',
                'Sean',
                'Skylar',
                'Spencer',
                'Stevie',
                'Sydney',
                'Tanner',
                'Tatum',
                'Taylor',
                'Toby',
                'Tyler',
                'Val',
                'West',
                'Winter'
            );
    return $names[rand ( 0 , count($names) -1)];
    }
    if(isset($_POST['submit']))
    {
        print "<h2><center>".randomName()."</center></h2>";
    } 
    ?>
        <br>
    </div>
</body>
</html>