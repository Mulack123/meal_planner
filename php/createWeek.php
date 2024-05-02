<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body style="background-color:rgb(255, 255, 255);">

    <?php include("../php/navBar.php"); ?>

    <form action="process_form.php" method="post">
        <table style="width: 100%;">
        <tr>
            <th>Date</th>
            <th>Day</th>
            <th>Meal</th>
            <th>Comments</th>
        </tr>

        <tr>
            <td>
                <input type="date" id="dateMon" name="dateMon" value="2024-01-01" min="2024-01-01" max="2030-12-31" />
            </td>
            <td>Monday</td>
            <td>
                <select name="mealMon" id="mealMon" required>
                    <option value="Chili con carne">Chili con carne</option>
                    <option value="Steak">Steak</option>
                    <option value="Cowboy chicken and bean">Cowboy chicken and bean</option>
                    <option value="Test">Test</option>
                </select>
            </td>
            <td>
                <textarea id="commentsMon" name="commentsMon"></textarea>
            </td>
        </tr>

        <tr>
            <td>
                <input type="date" id="dateTues" name="dateTues" value="2024-01-01" min="2024-01-01" max="2030-12-31" />
            </td>

            <td>Tuesday</td>
            <td>
                <select name="mealTues" id="mealTues" required>
                    <option value="Chili con carne">Chili con carne</option>
                    <option value="Steak">Steak</option>
                    <option value="Cowboy chicken and bean">Cowboy chicken and bean</option>
                    <option value="Test">Test</option>
                </select>
            </td>
            <td>
                <textarea id="commentsTues" name="commentsTues"></textarea>
            </td>
        </tr>

        <tr>
            <td>
                <input type="date" id="dateWed" name="dateWed" value="2024-01-01" min="2024-01-01" max="2030-12-31" />
            </td>

            <td>Wednesday</td>
            <td>
                <select name="mealWed" id="mealWed" required>
                    <option value="Chili con carne">Chili con carne</option>
                    <option value="Steak">Steak</option>
                    <option value="Cowboy chicken and bean">Cowboy chicken and bean</option>
                    <option value="Test">Test</option>
                </select>
            </td>
            <td>
                <textarea id="commentsWed" name="commentsWed"></textarea>
            </td>
        </tr>

        <tr>
            <td>
                <input type="date" id="dateThur" name="dateThur" value="2024-01-01" min="2024-01-01" max="2030-12-31" />
            </td>

            <td>Thursday</td>
            <td>
                <select name="mealThur" id="mealThur" required>
                    <option value="Chili con carne">Chili con carne</option>
                    <option value="Steak">Steak</option>
                    <option value="Cowboy chicken and bean">Cowboy chicken and bean</option>
                    <option value="Test">Test</option>
                </select>
            </td>
            <td>
                <textarea id="commentsThur" name="commentsThur"></textarea>
            </td>
        </tr>

        <tr>
            <td>
                <input type="date" id="dateFri" name="dateFri" value="2024-01-01" min="2024-01-01" max="2030-12-31" />
            </td>

            <td>Friday</td>
            <td>
                <select name="mealFri" id="mealFri" required>
                    <option value="Chili con carne">Chili con carne</option>
                    <option value="Steak">Steak</option>
                    <option value="Cowboy chicken and bean">Cowboy chicken and bean</option>
                    <option value="Test">Test</option>
                </select>
            </td>
            <td>
                <textarea id="commentsFri" name="commentsFri"></textarea>
            </td>
        </tr>

        <tr>
            <td>
                <input type="date" id="dateSat" name="dateSat" value="2024-01-01" min="2024-01-01" max="2030-12-31" />
            </td>

            <td>Saturday</td>
            <td>
                <select name="mealSat" id="mealSat" required>
                    <option value="Chili con carne">Chili con carne</option>
                    <option value="Steak">Steak</option>
                    <option value="Cowboy chicken and bean">Cowboy chicken and bean</option>
                    <option value="Test">Test</option>
                </select>
            </td>
            <td>
                <textarea id="commentsSat" name="commentsSat"></textarea>
            </td>
        </tr>

        <tr>
            <td>
                <input type="date" id="dateSun" name="dateSun" value="2024-01-01" min="2024-01-01" max="2030-12-31" />
            </td>

            <td>Sunday</td>
            <td>
                <select name="mealSun" id="mealSun" required>
                    <option value="Chili con carne">Chili con carne</option>
                    <option value="Steak">Steak</option>
                    <option value="Cowboy chicken and bean">Cowboy chicken and bean</option>
                    <option value="Test">Test</option>
                </select>
            </td>
            <td>
                <textarea id="commentsSun" name="commentsSun"></textarea>
            </td>
        </tr>

        </table>

        <input type="submit" value="Submit">
    </form>
</body>

</html>