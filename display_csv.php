<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>CSV File Display</title>
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

<body>

    <!--Navigation bar-->
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

    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Day</th>
                <th>Meal</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Check if date is submitted
                if (isset($_GET['date'])) {
                    $selected_date = $_GET['date'];
                    // Read the CSV file and display its contents in a table
                    $file = fopen("data.csv", "r");
                    while (($data = fgetcsv($file)) !== FALSE) {
                        // Check if the date in the CSV matches the selected date
                        if ($data[0] == $selected_date) {
                            echo "<tr>";
                            foreach ($data as $value) {
                                echo "<td>$value</td>";
                            }
                            echo "</tr>";
                        }
                    }
                    fclose($file);
                }
            ?>
        </tbody>
    </table>

</body>
</html>