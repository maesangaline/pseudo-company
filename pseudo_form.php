<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;0,700;1,400;1,700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Pseudo Company - Thanks for your feedback!</title>
    <meta name="description" content="Pseudo Company Page">
    <meta name="keywords" content="">
    <meta name="author" content="Mae Sangaline">
    <link rel="stylesheet" href="stylesheet.css">
</head>

<!-- Body -->
<body>
<h1>Thanks for your feedback, <?php echo $_POST["name"]?>!</h1>
    <h2>Here is the information you submitted:</h2>
    <ul>
        <li><em>Name:</em> <?php echo $_POST["name"]?></li>
        <li><em>Email:</em> <?php echo $_POST["email"]?></li>
        <li><em>Comment:</em> <?php echo $_POST["comment"]?></li>
        <li><em>Gender:</em> <?php echo $_POST["gender"]?></li>
        <li><em>Age:</em> <?php echo $_POST["age"]?></li>
        <li><em>Device Type:</em> <?php echo $_POST["device"]?></li>
        <li><em>Return Contact?:</em> <?php echo $_POST["reContact"]?></li>
    </ul>

    <button id="back" onclick="goBack()">Go Back</button>
        <script>
            function goBack() {
            window.history.back();
            }
</script>

</body>
</html>
