
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Rupert Reyneke</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/rupert.css" type="text/css">

<style>
p.uppercase {
    text-transform: uppercase;
}
</style>

</head>

<body>

  <h1>Rupert Reyneke</h1>

  <img src="/images/rupert.jpeg" alt="Rupert Reyneke">

  <h2><p class="uppercase">About Me</p></h2>
  <p>
    Certified web trailblazer. Food Ninja. Friendly entrepreneur. Graphic Designer. Twitter nerd. Thinker.
  </p>

</body>
</html>

  <h3><p class="uppercase">Random Quote</p></h3>

<?
//Chooses a random number
$num = Rand (1,6);
//Based on the random number, gives a quote
switch ($num)
{
case 1:
echo "Good, better, best. Never let it rest. 'Til your good is better and your better is best. St. Jerome";
break;
case 2:
echo "Only I can change my life. No one can do it for me. Carol Burnett";
break;
case 3:
echo "Life is 10% what happens to you and 90% how you react to it. Charles R. Swindoll";
break;
case 4:
echo "If you fell down yesterday, stand up today. H. G. Wells";
break;
case 5:
echo "In order to succeed, we must first believe that we can. Nikos Kazantzakis";
break;
case 6:
echo "With the new day comes new strength and new thoughts. Eleanor Roosevelt";
}
?>
</div>
