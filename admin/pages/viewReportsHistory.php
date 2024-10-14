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
<?php include ROOT_PATH . "/psms/admin/includes/header.php"; ?>
<?php include ROOT_PATH . "/psms/admin/helper/dateHelper.php"; ?>

<body>
    <div class="containerMod">
        <?php include ROOT_PATH . "/psms/admin/includes/navbarLinks.php"; ?>
        <!-- <?php include ROOT_PATH . "/psms/admin/includes/toasts/updateUserToast.html"; ?> -->
        <section class="mainMod">
            <button id="toggle-button">
                <i class="fas fa-bars"></i>
            </button>
            <div class="mb-3">
                <button type="button" class="btn btn-default" onclick="goBack()">Back</button>
            </div>
            <?php foreach ($users as $user): ?>
            <div class="mainMod-top">
                <h1><?php echo htmlspecialchars($user['fname']); ?> <?php echo htmlspecialchars($user['lname']); ?></h1>
            </div>
            <?php endforeach; ?>
            <div class="mainMod-skills">
                <table class="table w-50">
                    <thead>
                        <tr>
                            <th scope="col">Period Covered</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <!-- Put data here -->
                                <td scope="row">October 7-13, 2024</td>

                                <td>
                                        <button type="button" class="btn btn-primary manage-btn" onclick="window.location.href='historyScorecard.php'">
                                            View Scorecard
                                        </button>

                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>





    <script>
        document.getElementById('toggle-button').addEventListener('click', function() {
            document.querySelector('.sidebarMod').classList.toggle('collapsed');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        <?php include ROOT_PATH . "/psms/admin/js/updateUserToast.js"; ?>
    </script>
    <script>
        function goBack() {
            window.history.back(); // Navigate to the previous page
        }
        </script>

</body>

</html>