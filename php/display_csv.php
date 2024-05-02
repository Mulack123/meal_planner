<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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

    <?php include("../php/navBar.php"); ?>    

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