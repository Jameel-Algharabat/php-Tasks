<html>
<head>
<title>Search</title>
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/orange-helvetica.min.css" rel="stylesheet" integrity="sha384-ARRzqgHDBP0PQzxQoJtvyNn7Q8QQYr0XT+RXUFEPkQqkTB6gi43ZiL035dKWdkZe" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-Di/KMIVcO9Z2MJO3EsrZebWTNrgJTrzEDwAplhM5XnCFQ1aDhRNWrp6CWvVcn00c" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
   <input id="search" type="text" name="searchedWord">
   <button type="submit">Search</button>
</form>
<?php
$name = ($_REQUEST['searchedWord']);
if ($_SERVER["REQUEST_METHOD"] == "POST" && $name!=null ) {
    header("Location: https://www.google.com/search?q=$name");
}if ($_SERVER["REQUEST_METHOD"] == "POST" && $name==null ) {
  echo "<br>Please type something";
}
?>
</body>
</html>
