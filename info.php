<html>
<head>
    <title>E-stations Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-sm bg-info navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <h5>E-station <small class="text-muted">Ukraine</small></h5>
                </a>
            </li>
        </ul>
    </nav>
</div>

<div class="container p-3 my-3 border">
    <h1>Hello! See some information about project here!</h1>
    <p>Here we can track charging stations (E-stations) from the general list. It is possible to add, update, delete stations.
        It is also possible to observe which station is <a class="text-success">open</a> or <a class="text-danger">closed</a>.
        There is the possibility of filtering by city and the label is open / closed.</p>
</div>

<div class="container p-3 my-3 bg-dark text-white">
    <h1>What are the features here?</h1>
    <p>Let's look at the possibilities of the project in pictures.</p>
    <p>1) At the top of the page is a table showing all the stations from the list. You can click on the "E-station Ukraine"
        to reload the page. "Info" - its a page where you are now:) </p>
    <img src="src/first.jpg" class="img-thumbnail"  width="800" height="650">
    <br>
    <p>2) Scroll down the page and you will see a form to add a new station to the list. Fill in all the fields - enter
        the name of the station, select a city from the list, enter the adress, set the working time and finally click
        the button "Add".</p>
    <img src="src/sec.JPG" class="img-thumbnail" width="800" height="650">
    <br>
    <p>3) If you did not find the one you need in the list of cities, simply add it in the form below by entering
        the name of new city.</p>
    <img src="src/third.JPG" class="img-thumbnail" width="800" height="650">
    <p>4) About the list - you can filter the stations by city and the label is open-closed - just select the option
        you need from the drop-down list. To remove a station from the list, use the red "Delete" button. To change the
        recording parameters, click on the "Edit" button and go down to the black form below the table.</p>
    <img src="src/fourth.JPG" class="img-thumbnail" width="800" height="650">
    <p>5) After clicking the "Edit" button opposite the record you are interested in, you can change it in the form
        below. Here in the graphs there will be current parameters that you can change as you wish.</p>
    <img src="src/fifth.JPG" class="img-thumbnail" width="800" height="650">
</div>
<div class="row justify-content-center">
<div class="container p-3 my-3 border">
    <h1>What was used to create this project?</h1>
    <p>Below is a list of technologies used and a short description.</p>
    <table class="table">
        <thead>
        <tr>
            <th>Tech</th>
            <th>Using</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>PHP</td>
            <td>To create logic and connect the application with the data base </td>
        </tr>
        <tr>
            <td>HTML + Bootstrap 4</td>
            <td>To create "face" of the project</td>
        </tr>
        <tr>
            <td>JQuery</td>
            <td>To create filter for the table</td>
        </tr>
        <tr>
            <td>MySQL</td>
            <td>To create DB "e-stations" with tables - "stations" and "cities"</td>
        </tr>
        <tr>
            <td>Lots of food and coffee</td>
            <td>For effective work of the head of the developer</td>
        </tr>
        </tbody>
    </table>
</div>
    <br>
    <h1 class="text-primary">Thank you for watching!</h1>
    <br>
</div>