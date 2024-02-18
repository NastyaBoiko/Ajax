<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full control</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function funcBefore() {
            $("#information").text("Ожидание данных...");
        }
        function funcSuccess(data) {
            $("#information").html(data);
        }
        $(document).ready(function () {
            $("#load").on("click", function () {
                let admin = "Admin";
                $.ajax ({
                    url: "/fullControl/content.php",
                    type: "POST",
                    data: ({
                        name: admin,
                        number: 5
                    }),
                    dataType: "html",
                    beforeSend: funcBefore,
                    success: funcSuccess
                });
            })
        })
    </script>
</head>
<body>
    <p id="load" style="cursor: pointer;">Загрузить данные</p>
    <div id="information"></div>
</body>
</html>