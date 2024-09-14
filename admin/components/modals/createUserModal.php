<?php
$toastMessage = "User has been successfully created!";
include ROOT_PATH . "/bppo/admin/includes/toasts/toastSuccess.php";
?>

<div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="createUserModalLabel">Create User</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="#" id='addUser'>
            <div class="d-flex gap-2 align-items-start">
              <div class="mb-3 form-floating">
                <input type="text" class="form-control" id="fnameInput" name = "fnameInput" placeholder="First Name">
                <label for="fnameInput" class="form-label">First Name</label>
              </div>
              <div class="mb-3 form-floating">
                <input type="text" class="form-control" id="lnameInput" name = "lnameInput" placeholder="Last Name">
                <label for="lnameInput" class="form-label">Last Name</label>
              </div>
            </div>
            <div class="mb-3 form-floating">
              <select class="form-select" aria-label="Default select example" name = "rank" required>
                <?php foreach ($userRanks as $ranks): ?>
                  <option value="<?php echo htmlspecialchars($ranks['rank']) ?>"><?php echo htmlspecialchars($ranks['rank']) ?></option>
                <?php endforeach; ?>
              </select>
              <label for="formGroupExampleInput" class="form-label">Enter Current Rank</label>
            </div>
            <div class="mb-3 form-floating">
              <select class="form-select" aria-label="Default select example" name = "position" required>
                <?php foreach ($userPositions as $positions): ?>
                  <option value="<?php echo htmlspecialchars($positions['position']) ?>"><?php echo htmlspecialchars($positions['position']) ?></option>
                <?php endforeach; ?>
              </select>
              <label for="formGroupExampleInput" class="form-label">Enter Position *</label>
            </div>
            <div class="mb-3 form-floating">
              <select class="form-select" aria-label="Default select example" name = "unit">
                <?php foreach ($unitsAssigned as $unitAssigned): ?>
                  <option value="<?php echo htmlspecialchars($unitAssigned['unit']) ?>"><?php echo htmlspecialchars($unitAssigned['unit']) ?></option>
                <?php endforeach; ?>
              </select>
              <label for="formGroupExampleInput" class="form-label">Unit Assigned</label>
            </div>
            <div class="mb-3 form-floating">
              <input type="date" class="form-control" id="dateHired" name = "dateHired" required />
              <label for="dateHired" class="form-label">Date Hired *</label>
            </div>
            <div class="d-flex gap-2 align-items-start">
              <div class="mb-3 form-floating">
                <input type="text" class="form-control" id="usernameInput" placeholder="Enter Username" name = "usernameInput" required>
                <label for="usernameInput" class="form-label">Enter Username *</label>
              </div>
              <div class="mb-3 form-floating">
                <input type="password" class="form-control" id="passwordInput" placeholder="Enter Password" name = "passwordInput" required>
                <label for="passwordInput" class="form-label">Enter Password *</label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetForm()">Close</button>
          <button type="button" class="btn btn-primary" id = "createUserBtn">Add user</button>
        </div>
      </div>
    </div>
  </div>
