<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Performance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <style>

        /* Center text horizontally and vertically in all cells */
        table td,
        table th {
            text-align: center;
            vertical-align: middle;
        }

        /* Exclude the first td in the thead from centering */
        thead td:first-child,
        thead th:first-child {
            text-align: left;
            /* or any other alignment */
            /* vertical-align: top; */
            /* or any other alignment */
        }

        tbody td:first-child,
        tbody th:first-child {
            text-align: left;
            /* or any other alignment */
            vertical-align: top;
            /* or any other alignment */
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="mb-5">
            <button type="button" class="btn btn-default mt-3" onclick="goBack()">Back</button>
        </div>

        <div class="card mb-5">
            <div class="card-body">
            <h2 class="text-center">Scorecard History</h2>
                 <form>
                <div class="container mb-5">
                    <h5>Period Covered</h5>
                    <div>
                        <p>October 7-13, 2024</p>
                    </div>
                </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="2">SUB-ACTIVITY<br>(Enabling Actions)</th>
                                <th rowspan="2">Measures</th>
                                <th rowspan="2">TARGETS</th>
                                <th colspan="7">ACCOMPISHMENTS</th>
                                <th rowspan="2">TOTAL</th>
                                <th rowspan="2" style="width: 150px;">COST</th>
                                <th rowspan="2">REMARKS</th>
                            </tr>
                            <tr>
                                <th class="text-center">Mon</th>
                                <th class="text-center">Tue</th>
                                <th class="text-center">Wed</th>
                                <th class="text-center">Thu</th>
                                <th class="text-center">Fri</th>
                                <th class="text-center">Sat</th>
                                <th class="text-center">Sun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td><strong>a.</strong> Monitor and comply submission of report to higher headquarters.</td>
                            <td>No. of submitted report</td>
                            <td>5</td>
                            <td>3</td>
                            <td>3</td>
                            <td>3</td>
                            <td>3</td>
                            <td>3</td>
                            <td>3</td>
                            <td>3</td>
                            <td>21</td> <!-- TOTAL -->
                            <td>MC Gasoline- PHP 400, Meal- PHP 400, Total= PHP 800</td>
                            <td class="text-center">Weekly</td>
                            </tr>
                            <tr>
                            <td><strong>b.</strong> Monitor and consolidation of initial incidents reports 
                            from all lower units/police station to Regional HQS and perform other operational duties as needed.</td>
                            <td>No. of prepared and submitted list</td>
                            <td>80</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>7</td>
                            <td>Meal- PHP 400, Miscellaneous expenses- 300 Total= PHP 800</td>
                            <td class="text-center">Weekly</td>
                            </tr>
                            <tr>
                            <td><strong>c.</strong> Monitored received calls, text message and instruction from Higher Headquarters and
                            disseminate to lower units concerned.</td>
                            <td>No. of received calls and text</td>
                            <td></td>
                            <td>2</td>
                            <td>2</td>
                            <td>2</td>
                            <td>2</td>
                            <td>2</td>
                            <td>2</td>
                            <td>2</td>
                            <td>14</td>
                            <td>Load- PHP 1500, Bondpapers- 180 Total= PHP 1680</td>
                            <td class="text-center">Weekly</td>
                            </tr>
                            <tr>
                            <td><strong>d.</strong> Perform other tasks as directed by the POMU Officer.</td>
                            <td>No. of consolidated reports</td>
                            <td>100</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>7</td>
                            <td>Load- PHP 1500, Bondpapers- 180 Total= PHP 1680</td>
                            <td class="text-center">Weekly</td>
                            </tr>
                            <tr>
                            <td><strong>e.</strong> Perform other duties as directed by POMU.</td>
                            <td>No. of performed duties</td>
                            <td>5</td>
                            <td>2</td>
                            <td>2</td>
                            <td>2</td>
                            <td>2</td>
                            <td>2</td>
                            <td>2</td>
                            <td>2</td>
                            <td>14</td>
                            <td>Load- PHP 1500, Bondpapers- 180 Total= PHP 1680</td>
                            <td class="text-center">Weekly</td>
                            </tr>
                        </tbody>
                    </table>
                 </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function goBack() {
            window.history.back(); // Navigate to the previous page
        }
    </script>

</body>

</html>