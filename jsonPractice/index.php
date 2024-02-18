<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Format JSON</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $("select[name='country']").on("change", function() {
                $("select[name='city']").empty();

                $.get("/jsonPractice/countryCheck.php", {country: $("select[name='country']").val()}, function(data) {
                    // data = JSON.parse(data);
                    // console.log(data);
                    for (let id in data) {
                        // console.log(data[id]);
                        $("select[name='city']").append($(`<option value=${id}>${data[id]}</option>`))
                    }
                }, 'json')
            })
        });
    </script>
</head>
<body>
    <label>Укажите страну: </label>
    <select name="country">
        <option value="0" selected></option>
        <option value="1">Америка</option>
        <option value="2">Россия</option>
    </select>
    <br>
    <label>Города: </label>
    <select name="city">
        <option value="0" selected></option>
    </select>
</body>
</html>