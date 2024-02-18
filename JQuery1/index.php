<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        // Вместо document.ready
        $(function(){
            $("form").on("submit", function(event) {
                event.preventDefault();
                $.post("/JQuery1/form.php", $( this ).serialize(), function (data) {
                    $('#result').html(data.name);
                }, 'json');
            })
        });
    </script>
</head>
<body>
    <form method="POST">
        <label for="fname">First name:</label><br>
        <input type="text" id="name" name="name" value="John"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="surname" name="surname" value="Doe"><br><br>
        <input type="submit" value="Submit">
    </form> 
    <div id="result"></div>
</body>
</html>