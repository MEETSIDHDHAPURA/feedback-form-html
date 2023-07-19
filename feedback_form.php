<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback form</title>

    <style>
    body {
        background-color: #d8dbe2;
        font-family: Verdana;
        text-align: center;
    }

    h1 {
        position: relative;
        top: 2rem;
        color: black;
    }

    form {
        background-color: #fff;
        max-width: 500px;
        margin: 50px auto;
        padding: 30px 20px;
        border-radius: 10px;
        filter: blur(0.6);
        background-color: #335c67;
    }

    .form-control {
        text-align: left;
        margin-bottom: 25px;
    }

    .form-control label {
        display: block;
        margin-bottom: 10px;
    }

    .form-control input,
    .form-control select,
    .form-control textarea {
        border: 1px solid #777;
        border-radius: 2px;
        font-family: inherit;
        padding: 10px;
        display: block;
        width: 95%;

    }

    .form-control input[type="radio"],
    .form-control input[type="checkbox"] {
        display: inline-block;
        width: auto;
    }

    /* Styling Button */
    button {
        background-color: white;
        border: 2px solid #ffffff;
        border-radius: 2px;
        font-family: inherit;
        font-size: 21px;
        display: block;
        width: 100%;
        margin-top: 50px;
        margin-bottom: 20px;
        border-radius: 20px;
        padding: 8px;
    }

    button:hover {
        background-color: #335c67;
        color: white;
    }

    .form-date {
        text-align: left;
        margin-bottom: 10px;
    }
    </style>
</head>

<body>
    <h1>Feedback form</h1>

    <form id="form" action="phpForm.php" method="post">

        <div class="form-control">
            <label for="name" id="label-name" style="color: white;">Buyer Name</label>
            <input type="text" name="Buyer_name" placeholder="Enter your product name" />
        </div>
        <div class="form-control">
            <label for="product id" id="label-id" style="color: white; position: absolute; bottom: 22.4rem;">
                product id
            </label>
            <br>
            <input type="text" name="product_id" placeholder="Enter product id">
        </div>

        <div class="form-control">
            <label for="email" id="label-email" style="color: white;">
                Email
            </label>

            <input type="email" name="email" placeholder="Enter your email" />
        </div>
        <div class="form-date">
            <label for="date" id="label-date" style="color: white;">
                Date of purchase:
            </label>
            <br>
            <input type="date" name="date" placeholder="Enter your purchase date" />
        </div>
        <div class="form-control">
            <label for="comment" style="color: white;">
                Any comments or suggestions
            </label>
            <textarea name="feedback" id="comment" placeholder="Enter your comment here">
			</textarea>
        </div>
        <button type="submit" value="submit">
            Submit
        </button>
    </form>
</body>

</html>