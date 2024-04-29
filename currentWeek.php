<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="mystyle.css">

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>

</head>

<body style="background-color:rgb(255, 255, 255);">

    <div class="navbar">
        <a href="index.html">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Weekly meal planner 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <a href="currentWeek.php">Current week</a>
            <a href="createWeek.html">Add a week</a>
            <a href="#">Past weeks</a>
            <a href="mealList.html">Recipes</a>
            </div>
        </div> 
    </div>

    <h1>Display the current week using a CSV file to store the data</h1>

    <h2>Select Date to Display</h2>

    <form action="display_csv.php" method="get">
        <label for="date">Select Date:</label>
        <input type="date" id="date" name="date" required>
        <input type="submit" value="Display">
    </form>

</body>

</html>