<?php
require 'helpers.php';
require 'logic.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Simple Filter</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Use Multiple Inputs to filter a data(One input per time)</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">

    </div>
</nav>
<main role="main">
    <div class="jumbotron">
        <h1>List Filter Application</h1>
        <?php if (isset($username) && $username != ""): ?>
            <div class="alert alert-primary" role="alert">
                You searched for <?= $username; ?>
            </div>
        <?php elseif (isset($filterItem)  && $filterItem != ""): ?>
            <div class="alert alert-primary" role="alert">
                You searched for <?= $filterItem; ?>
            </div>
        <?php endif; ?>
        <?php if (isset($otherErrors) && $otherErrors != ""): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $otherErrors; ?>
            </div>
        <?php endif; ?>
        <?php if (isset($usersCount) && $usersCount == 0 && !isset($otherErrors)): ?>
            <div class="alert alert-danger" role="alert">
                No Users found.
            </div>
        <?php endif; ?>
        <form method="post" action="filter.php">
            <h3>Filter Form</h3>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Name</label>
                    <input type="text" name="username" class="form-control" placeholder="name"
                           value="<?php if (isset($username)) echo $username ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">State</label>
                    <select class="form-control" name="state">
                        <option value=""></option>
                        <option value="AL">AL</option>
                        <option value="AK">AK</option>
                        <option value="AZ">AZ</option>
                        <option value="AR">AR</option>
                        <option value="CA">CA</option>
                        <option value="CO">CO</option>
                        <option value="CT">CT</option>
                        <option value="DE">CT</option>
                        <option value="DC">DC</option>
                        <option value="FL">FL</option>
                        <option value="GA">GA</option>
                        <option value="HI">HI</option>
                        <option value="ID">ID</option>
                        <option value="IL">IL</option>
                        <option value="IN">IN</option>
                        <option value="IA">IA</option>
                        <option value="KS">KS</option>
                        <option value="KY">KY</option>
                        <option value="LA">LA</option>
                        <option value="ME">ME</option>
                        <option value="MD">MD</option>
                        <option value="MA">MA</option>
                        <option value="MI">MI</option>
                        <option value="MN">MN</option>
                        <option value="MS">MS</option>
                        <option value="MO">MO</option>
                        <option value="MT">MI</option>
                        <option value="NE">NE</option>
                        <option value="NV">NV</option>
                        <option value="NH">NH</option>
                        <option value="NJ">NJ</option>
                        <option value="NM">NM</option>
                        <option value="NY">NY</option>
                        <option value="NC">NC</option>
                        <option value="ND">ND</option>
                        <option value="OH">OH</option>
                        <option value="OK">OK</option>
                        <option value="OR">OR</option>
                        <option value="PA">PA</option>
                        <option value="RI">RI</option>
                        <option value="SC">SC</option>
                        <option value="SD">SD</option>
                        <option value="TN">TN</option>
                        <option value="TX">TX</option>
                        <option value="UT">UT</option>
                        <option value="VT">VI</option>
                        <option value="VA">VA</option>
                        <option value="WA">WA</option>
                        <option value="WV">WV</option>
                        <option value="WI">WI</option>
                        <option value="WY">WY</option>
                    </select>
                </div>
                <div class="form-group col-md-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="checkActive" id="autoSizingCheck2">
                        <label class="form-check-label" for="autoSizingCheck2">
                            Status(Active or Inactive)
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
                <?php if($hasErrors): ?>
                    <div class="alert alert-error">
                    <?php foreach ($errors as $error): ?>
                        <?= $error ?>
                    <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </form>
        <h3>Results Table</h3>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">State</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $name => $user): ?>
                <tr>
                    <th scope="row"><?= $user['id'] ?></th>
                    <td><?= $name ?></td>
                    <td><?= $user['state'] ?></td>
                    <td><?= $user['active'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>