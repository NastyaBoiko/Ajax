<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full control</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function funcBefore() {
            $("#information").html('<iframe src="https://giphy.com/embed/l0HlBO7eyXzSZkJri" width="480" height="330" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>');
        }
        function funcSuccess(data) {
            $("#information").html(`<div>Имя: ${data.name}</div><div>Номер: ${data.number}</div>`);
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
                    dataType: "json",
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