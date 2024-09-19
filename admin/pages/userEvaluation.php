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
            <div class="mainMod-top">
                <h1>User Evaluation Management</h1>
            </div>
            <div class="mainMod-skills">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Unit Assigned</th>
                            <th scope="col">Current Position</th>
                            <th scope="col">Position Duration</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <th scope="row"><?php echo htmlspecialchars($user['id']); ?></th>
                                <td>
                                    <?php echo htmlspecialchars($user['lname']); ?>, <?php echo htmlspecialchars($user['fname']); ?>
                                    <br>
                                    <span style="font-size: 12px;"><?php echo htmlspecialchars($user['username']); ?></span>
                                </td>

                                <td><?php echo htmlspecialchars($user['position']); ?></td>
                                <td><?php echo htmlspecialchars($user['unitAssigned']); ?></td>
                                <td><?php echo htmlspecialchars($user['rank']); ?></td>
                                <td><?php
                                    // Assuming $user['year_attended'] contains the date in 'mm/dd/yyyy' format
                                    $date = $user['year_attended'];

                                    if (isValidDate($date)) {
                                        echo htmlspecialchars(calculateDuration($date));
                                    } else {
                                        echo "Invalid date format";
                                    }
                                    ?>
                                </td>

                                <td>
                                    <div class="d-flex gap-2 align-items-start">
                                        <button type="button" class="btn btn-primary manage-btn"
                                            data-bs-toggle="modal" data-bs-target="#userListModal"
                                            data-id="<?php echo htmlspecialchars($user['id']); ?>"
                                            data-fname="<?php echo htmlspecialchars($user['fname']); ?>"
                                            data-lname="<?php echo htmlspecialchars($user['lname']); ?>"
                                            data-rank="<?php echo htmlspecialchars($user['rank']); ?>"
                                            data-position="<?php echo htmlspecialchars($user['position']); ?>"
                                            data-unit="<?php echo htmlspecialchars($user['unitAssigned']); ?>"
                                            data-date-hired="<?php echo htmlspecialchars($user['year_attended']); ?>"
                                            data-username="<?php echo htmlspecialchars($user['username']); ?>">
                                            Manage
                                        </button>
                                        <button type="button" class="btn btn-primary manage-btn" onclick="window.location.href='evaluateUser.php'">
                                            Evaluate
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

    <!-- Manage User Modal -->
    <?php include ROOT_PATH . "/psms/admin/components/modals/manageUserModal.php"; ?>





    <script>
        document.getElementById('toggle-button').addEventListener('click', function() {
            document.querySelector('.sidebarMod').classList.toggle('collapsed');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the modal and form fields
            const userListModal = document.getElementById('userListModal');
            const modalFnameInput = document.getElementById('modalFnameInput');
            const modalLnameInput = document.getElementById('modalLnameInput');
            const modalRankSelect = document.getElementById('modalRankSelect');
            const modalPositionSelect = document.getElementById('modalPositionSelect');
            const modalUnitSelect = document.getElementById('modalUnitSelect');
            const modalDateHired = document.getElementById('modalDateHired');
            const modalUsername = document.getElementById('modalUsername');
            const modalPassword = document.getElementById('modalPassword');

            // Event listener for showing the modal
            userListModal.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                const button = event.relatedTarget;

                // Extract data from data attributes
                const id = button.getAttribute('data-id');
                const fname = button.getAttribute('data-fname');
                const lname = button.getAttribute('data-lname');
                const rank = button.getAttribute('data-rank');
                const position = button.getAttribute('data-position');
                const unitAssigned = button.getAttribute('data-unit');
                const dateHired = button.getAttribute('data-date-hired');
                const username = button.getAttribute('data-username');
                const password = button.getAttribute('data-password'); // Typically not retrieved for security reasons

                // Update the modal's content
                modalFnameInput.value = fname;
                modalLnameInput.value = lname;
                modalRankSelect.value = rank;
                modalPositionSelect.value = position;
                modalUnitSelect.value = unitAssigned;
                modalDateHired.value = dateHired;
                modalUsername.value = username;
                modalPassword.value = ''; // Blank password field for security reasons
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            // Get the modal and form fields
            const modalDateHired = document.getElementById('modalDateHired');

            // Event listener for showing the modal
            userListModal.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                const button = event.relatedTarget;

                // Extract data from data attributes
                const dateHired = button.getAttribute('data-date-hired');

                // Update the modal's content
                modalDateHired.value = dateHired;
            });

            // Event listener for saving changes
            saveChangesButton.addEventListener('click', function() {
                // Create an object with form data
                const userData = {
                    dateHired: modalDateHired.value
                };

                // Log the user data to the console
                console.log('User Data:', userData);

                // Example: Send this data via an AJAX request or handle form submission
                // Here you would normally send this data to the server using fetch or similar
            });
        });

        function resetForm() {
            // Select the form element (assuming it has an id of 'myForm')
            const form = document.getElementById('addUser');

            // Reset the form fields
            form.reset();
        }
    </script>
    <script>
        <?php include ROOT_PATH . "/psms/admin/js/updateUserToast.js"; ?>
    </script>

</body>

</html>