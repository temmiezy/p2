<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">List Filter Application</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">

        </div>
    </nav>
    <main role="main">
        <div class="jumbotron">
            <h1>Filter List</h1>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputEmail4">Name</label>
                        <input type="text" class="form-control" placeholder="name">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputEmail4">State</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group col-md-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                            <label class="form-check-label" for="autoSizingCheck2">
                                Remember me tooo
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </main>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>