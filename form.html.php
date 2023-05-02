<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add a movie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<a href="index.php" class="add">Back</a>
<form action="?">

<div class="container">

<div class="row">
    <div class="label"><label for="title">Enter a title</label></div>
    <div class="input"><input type="text" id="title" name="title" class="title"></div>
</div>
<div class="row">
    <div class="label"><label for="firstname">Enter a first name of a director</label></div>
    <div class="input"><input type="text" id="firstname" name="firstname" class="title"></div>
</div>
<div class="row">
    <div class="label"><label for="lastname">Enter a last name of a director</label></div>
    <div class="input"><input type="text" id="lastname" name="lastname" class="title"></div>
</div>
<div class="row">
    <div class="label"><label for="year">Enter a year of production</label></div>
    <div class="input"><input type="number" id="year" name="year" class="title"></div>
</div>
<div class="row">
    <div class="label"><label for="category">Enter a category</label></div>
    <div class="input"><input type="text" id="category" name="category" class="title"></div>
</div>
<div class="row">
    <div class="label"><label for="country">Enter a country</label></div>
    <div class="input"><input type="text" id="country" name="category" class="title"></div>
</div>
<div ><input type="submit" class="submit" value="Add a movie"></div>

</div>

</form>

</body>
</html>