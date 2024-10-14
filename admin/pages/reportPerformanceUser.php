<?php
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);

// Path to the JSON file
$dataUserList = ROOT_PATH . "/psms/admin/data/userList.json";
$dataUserRanks = ROOT_PATH . "/psms/admin/data/userRanks.json";
$dataUserPositions = ROOT_PATH . "/psms/admin/data/userPosition.json";
$dataUnitAssigned = ROOT_PATH . "/psms/admin/data/unitAssigned.json";

// Read JSON file
$jsonUserData = file_get_contents($dataUserList);
$jsonUserRanks = file_get_contents($dataUserRanks);
$jsonUserPositions = file_get_contents($dataUserPositions);
$jsonUnitAssigned = file_get_contents($dataUnitAssigned);

// Decode JSON data into an associative array
$users = json_decode($jsonUserData, true);
$userRanks = json_decode($jsonUserRanks, true);
$userPositions = json_decode($jsonUserPositions, true);
$unitsAssigned = json_decode($jsonUnitAssigned, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Performance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
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
            <h2 class="text-center">Performance Report</h2>
                 <form>
                 <?php foreach ($users as $user): ?>
                    <div class="container mb-5">
                        <h6><strong>Rank:</strong> <?php echo htmlspecialchars($user['rank']); ?></h6>
                        <h6><strong>Name:</strong> <?php echo htmlspecialchars($user['fname']); ?> <?php echo htmlspecialchars($user['lname']); ?></h6>
                        <h6><strong>Position:</strong> <?php echo htmlspecialchars($user['position']); ?></h6>
                    </div>
                    <?php endforeach; ?>
                <div class="container mb-5">
                    <h5>Select Period Covered</h5>
                    <div class="form-group">
                        <label for="start">Start Date:</label>
                        <input type="text" class="form-control" id="start" name="start">
                    </div>
                    <div class="form-group">
                        <label for="end">End Date:</label>
                        <input type="text" class="form-control" id="end" name="end">
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
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td id="total1"></td>
                            <td><textarea class="form-control" id="cost" rows="1"></textarea></td>
                            <td class="text-center">Weekly</td>
                            </tr>
                            <tr>
                            <td><strong>b.</strong> Monitor and consolidation of initial incidents reports 
                            from all lower units/police station to Regional HQS and perform other operational duties as needed.</td>
                            <td>No. of prepared and submitted list</td>
                            <td>80</td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td id="total2"></td>
                            <td><textarea class="form-control" id="cost" rows="1"></textarea></td>
                            <td class="text-center">Weekly</td>
                            </tr>
                            <tr>
                            <td><strong>c.</strong> Monitored received calls, text message and instruction from Higher Headquarters and
                            disseminate to lower units concerned.</td>
                            <td>No. of received calls and text</td>
                            <td></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td id="total3"></td>
                            <td><textarea class="form-control" id="cost" rows="1"></textarea></td>
                            <td class="text-center">Weekly</td>
                            </tr>
                            <tr>
                            <td><strong>d.</strong> Perform other tasks as directed by the POMU Officer.</td>
                            <td>No. of consolidated reports</td>
                            <td>100</td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td id="total4"></td>
                            <td><textarea class="form-control" id="cost" rows="1"></textarea></td>
                            <td class="text-center">Weekly</td>
                            </tr>
                            <tr>
                            <td><strong>e.</strong> Perform other duties as directed by POMU.</td>
                            <td>No. of performed duties</td>
                            <td>5</td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td><input type="number" class="form-control text-center" min="0"></td>
                            <td id="total5"></td>
                            <td><textarea class="form-control" id="cost" rows="1"></textarea></td>
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

        document.getElementById('stepForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Form submitted successfully!');
        });
    </script>

    <script>
        const inputs1 = document.querySelectorAll('tr:nth-child(1) input[type="number"]');
        const totalDisplay1 = document.getElementById('total1');

        const inputs2 = document.querySelectorAll('tr:nth-child(2) input[type="number"]');
        const totalDisplay2 = document.getElementById('total2');

        const inputs3 = document.querySelectorAll('tr:nth-child(3) input[type="number"]');
        const totalDisplay3 = document.getElementById('total3');

        const inputs4 = document.querySelectorAll('tr:nth-child(4) input[type="number"]');
        const totalDisplay4 = document.getElementById('total4');

        const inputs5 = document.querySelectorAll('tr:nth-child(5) input[type="number"]');
        const totalDisplay5 = document.getElementById('total5');

        inputs1.forEach(input => {
            input.addEventListener('input', () => calculateTotal(inputs1, totalDisplay1));
        });

        inputs2.forEach(input => {
            input.addEventListener('input', () => calculateTotal(inputs2, totalDisplay2));
        });

        inputs3.forEach(input => {
            input.addEventListener('input', () => calculateTotal(inputs3, totalDisplay3));
        });

        inputs4.forEach(input => {
            input.addEventListener('input', () => calculateTotal(inputs4, totalDisplay4));
        });

        inputs5.forEach(input => {
            input.addEventListener('input', () => calculateTotal(inputs5, totalDisplay5));
        });

        function calculateTotal(inputs, totalDisplay) {
            let total = 0;
            inputs.forEach(input => {
                total += parseFloat(input.value) || 0; // Default to 0 if empty
            });
            totalDisplay.textContent = total;
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#start').datepicker({
                format: 'mm/dd/yyyy',
                autoclose: true
            }).on('changeDate', function(e) {
                $('#end').datepicker('setStartDate', e.date);
            });

            $('#end').datepicker({
                format: 'mm/dd/yyyy',
                autoclose: true
            }).on('changeDate', function(e) {
                $('#start').datepicker('setEndDate', e.date);
            });
        });
    </script>

</body>

</html>