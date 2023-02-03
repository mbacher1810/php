<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-3 bg-gray-50 dark:bg-gray-800">
<h1 class="text-xl md:text-4xl lg:text-8xl dark:text-gray-50">
    Hello world!
</h1>
<p class="text-amber-800 m-4 dark:text-gray-50">
    Lorem ipsum dolor sit ...
</p>
<p class="bg-emerald-300 p-4 mt-4">
    Lorem ipsum dolor sit ...
</p>
<p class="mt-6 font-medium">
    Das ist ein Test.
</p>

<div class="flex justify-between mb-6">
    <div class="bg-red-500 p-6 rounded-md">01</div>
    <div class="bg-slate-600 p-6 rounded-md">02</div>
    <div class="bg-emerald-400 p-6 rounded-md">03</div>
</div>

<div class="flex flex-col space-y-4 md:flex-row md:space-x-4 md:space-y-0">
    <div class="p-6 bg-red-100">01</div>
    <div class="p-6 bg-red-100">02</div>
    <div class="p-6 bg-red-100">03</div>
</div>

<div style="width: 50px;" class="bg-red-700 h-4 mt-4">

</div>

<h2 class="text-xl md:text-2xl lg:text-3xl mt-5 dark:text-gray-50">Provisionszahlungen</h2>

<div class="dark:text-gray-50 mt-3">
    Angestellter 1
</div>
<?php
$provproz1 = 10;
$gehalt1 = 999;
$provision1 = 999/100*$provproz1;
$provision1px = $provision1*200/$gehalt1;
?>
<div style="width: <?php echo $provision1px?>px;" class="bg-red-700 h-4 mt-4"></div>

<div class="dark:text-gray-50 mt-3">
    Angestellter 2
</div>
<?php
$provproz2 = 15;
$gehalt2 = 875.50;
$provision2 = $gehalt2/100*$provproz2;
$provision2px = $provision2*200/$gehalt2;
?>
<div style="width: <?php echo $provision2px?>px;" class="bg-red-700 h-4 mt-4"></div>
<div class="">


</body>
</html>