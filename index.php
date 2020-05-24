<html>
<head>
    <title>E-stations CRUD</title>
    <script src="ddtf.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="table.css">
</head>
<body>

<?php require_once 'process.php'; ?>

<?php
if (isset($_SESSION['session'])): ?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    ?>
</div>
<?php endif ?>

<div class="container">
<?php //connection to DB for get table data
$mysqli = new mysqli('localhost', 'root', 'root', 'e_stations')
or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM stations") or die($mysqli->error);
?>

    <!-- Head of the page with link on Info page -->
    <nav class="navbar navbar-expand-sm bg-info navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <h5>E-station <small class="text-muted">Ukraine</small></h5>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="info.php">Info</a>
            </li>
        </ul>
    </nav>

    <!-- Table with list of stations -->
    <div class="row justify-content-center">
    <table id="table" class="table table-striped">
        <thead>
        <tr>
            <th class="option-item">Station</th>
            <th class="option-type"> City</th>
            <th class="option-item">Adress</th>
            <th class="option-item">Work from</th>
            <th class="option-item">Work to</th>
            <th class="option-type">Status</th>
            <th class="option-item" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php //create list with while cycle
        while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['adress']; ?></td>
                <td><?php echo $row['work_from']; ?></td>
                <td><?php echo $row['work_to']; ?></td>
                    <?php $date = date("H:i");
                    //open-close marking by time comparison
                    if ($row['work_from'] <= $date and $row['work_to'] > $date):
                        $worktime = true;?>
                        <td class="text-success">Open</td>
                    <?php else:
                        $worktime = false;?>
                        <td class="text-danger">Closed</td>
                    <?php endif; ?>
                <td>
                    <a href="index.php?edit=<?php echo $row['id']; ?>"
                       class="btn btn-info">Edit</a>
                    <a href="process.php?delete=<?php echo $row['id']; ?>"
                       class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>

    <?php
    pre_r($result->fetch_assoc());

    function pre_r($array)
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    ?>
    <!-- form for create new record to the list -->
    <div class="container p-3 my-3 bg-dark text-white">
        <form action="process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label>Input name of station</label>
                <input type="text" name="name" class="form-control"
                       value="<?php echo $name; ?>" placeholder="E-Station">
            </div>
            <div class="form-group">
                <label for="sel1">Select city from list:</label>
                <select name="city" class="form-control" id="sel1">
                    <?php
                    $result_c = $mysqli->query("SELECT * FROM cities") or die($mysqli->error);
                    while ($row = $result_c->fetch_assoc()): ?>
                         <option><?php echo $row['add_city']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Input adress of station</label>
                <input type="text" name="adress" class="form-control"
                       value="<?php echo $adress;?>" placeholder="Enter station adress">
            </div>
            <div class="form-group">
                <label>Choose time work from</label>
                <input type="time"  name="work_from"  value="<?php echo $work_from;?>"class="form-control"/>
            </div>
            <div class="form-group">
                <label>Choose time work to</label>
                <input type="time" name="work_to" value="<?php echo $work_to;?>" class="form-control"/>
            </div>
            <div class="form-group">
                <?php
                if ($update == true):
                ?>
                    <button type="submit" class="btn btn-info" name="update">Update</button>
                <?php else: ?>
                <button class="btn btn-primary" type="submit" name="save">Save</button>
                <?php endif; ?>
            </div>
        </form>
    </div>
        <!-- form for adding new city in DB table "cities" -->
        <div class="container p-3 my-3 bg-primary text-white">
            <form action="process.php" method="POST">
                <div class="form-group">
                    <label>Add new city</label>
                    <input type="text" name="add_city" class="form-control"
                           value="<?php echo $add_city; ?>" placeholder="City">
                </div>
                <div class="form-group">
                        <button class="btn btn-light" type="submit" name="add">Save</button>
                </div>
        </div>
</div>

    <script>
        //activation ddtf.js file to enable sorting in table
        $('table').ddTableFilter();

    </script>
</body>