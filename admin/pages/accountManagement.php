<?php
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
?>
<!DOCTYPE html>
<html lang="en">
<?php include ROOT_PATH . "/psms/admin/includes/header.php"; ?>
<?php include ROOT_PATH . "/psms/admin/helper/dateHelper.php"; ?>
<style>
    table {
        max-width: 60%;
        text-align: center;
    }
</style>

<body>
    <div class="containerMod">
        <?php include ROOT_PATH . "/psms/admin/includes/navbarLinks.php"; ?>
        <?php include ROOT_PATH . "/psms/admin/includes/toasts/updateAccount.php"; ?>
        <section class="mainMod">
            <button id="toggle-button">
                <i class="fas fa-bars"></i>
            </button>
            <div class="">
                <h3>Manage Account</h3>
            </div>
            <div class="course-boxMod d-flex justify-content-center align-items-center ">
                <form>
                    <div class=" gap-2">
                        <div class="d-flex justify-content-evenly">
                            <div class="bg-secondary rounded-circle py-4 px-4">
                                <i class="fas fa-user fa-2x text-white"></i>
                            </div>
                        </div>
                        <br>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" id="fnameInput" name="fnameInput" placeholder="First Name">
                            <label for="fnameInput" class="form-label">First Name</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" id="lnameInput" name="lnameInput" placeholder="Last Name">
                            <label for="lnameInput" class="form-label">Last Name</label>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary" id="updateUserAccount">Add user</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>



    <script>
        document.getElementById('toggle-button').addEventListener('click', function() {
            document.querySelector('.sidebarMod').classList.toggle('collapsed');
        });
    </script>
    <script>
        saveChangesButton.addEventListener('click', function() {
            // Create an object with form data
            const userData = {
                dateHired: modalDateHired.value
            };
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        <?php include ROOT_PATH . "/psms/admin/js/updateAccountDetails.js"; ?>
    </script>

</body>

</html>