<html>

<head>
    <title>AJAX jQuery Example with PHP MySQL</title>
    <style type="text/css">
    body {
        font-family: Verdana, Geneva, sans-serif;
    }

    .container {
        width: 50%;
        margin: 0 auto;
        margin-top: 10%;
        text-align: center;
        background-color: lightgreen;
        padding: 5%;
        border-radius: 15px;
    }

    #userInput {
        width: 250px;
        height: 5%;
    }

    #getsynonyms {
        padding: 10px;
        border-radius: 5px;
        background-color: pink;
        color: green;
    }

    #records {
        font-size: 35px;
        color: red;
    }

    #selectedWords {
        text-align: center;
        margin-top: 2.5%;
        font-size: 40px;
    }
    </style>

</head>

<body>

    <div>
        <p id="selectedWords">{vehicle, food, smart, scare, rocket}</p>
    </div>
    <div class="container">
        <h3><strong>Write any of the words above and Click the Button to display it's Synonym: </strong></h3>
        <form id="vedformid" method="GET">
            <input type="text" class="usertext" id="userInput" name="getmydata" placeholder="Enter a word" /> <br><br>
            <div id="records"></div><br />
            <input type="submit" id="getsynonyms" value="Get Synonym" />
        </form>
    </div>


</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$("#vedformid").on('submit', (function(e) {
    e.preventDefault();
    var x = document.getElementById("userInput");
    $.ajax({
        url: "getrecords.php",
        method: "GET",
        data: {
            name: x.value
        }
    }).done(function(data) {
        var record = document.getElementById("records");
        record.innerHTML = data;
    });
}));
</script>