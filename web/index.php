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
        #txtName{

        }
    </style>
</head>
<body>
    <h1 id="title">Name Genterator</h1>
    <div id="container">
        <br>
        <section>
            <p id="sect-title">Generate random names</p>
            <form action="index.php" method="post">
                <input type="submit" name="submit">
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
    print randomName();
} 
?>


        <br>
    </div>
</body>
</html>