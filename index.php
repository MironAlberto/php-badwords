<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>
            BAD WORDS
        </h1>

        <form action="./server.php" method="GET" class="my-form">
            <div>
                <strong>
                    Write something
                </strong>
            </div>

            <textarea name="text" cols="30" rows="1"></textarea>

            <div>
                <strong>
                    Write your bad word
                </strong>
            </div>

            <input type="text" name="badword">

            <button>
                SUBMIT
            </button>
        </form>
    </div>
    
</body>
</html>