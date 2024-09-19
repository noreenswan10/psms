<div class="modal fade" id="userListModal" tabindex="-1" aria-labelledby="userListModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="userListModalLabel">Edit Police Personnel</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="userForm">
            <div class="d-flex gap-2 align-items-start">
              <div class="mb-3 form-floating ">
                <input type="text" class="form-control" id="modalFnameInput" placeholder="First Name">
                <label for="modalFnameInput" class="form-label">First Name</label>
              </div>
              <div class="mb-3 form-floating">
                <input type="text" class="form-control" id="modalLnameInput" placeholder="Last Name">
                <label for="modalLnameInput" class="form-label">Last Name</label>
              </div>
            </div>
            <div class="mb-3 form-floating">
              <select class="form-select" id="modalRankSelect" aria-label="Rank Select" required>
                <?php foreach ($userRanks as $ranks): ?>
                  <option value="<?php echo htmlspecialchars($ranks['rank']); ?>"><?php echo htmlspecialchars($ranks['rank']); ?></option>
                <?php endforeach; ?>
              </select>
              <label for="modalRankSelect" class="form-label">Enter Current Rank</label>
            </div>
            <div class="mb-3 form-floating">
              <select class="form-select" id="modalPositionSelect" aria-label="Position Select" required>
                <?php foreach ($userPositions as $positions): ?>
                  <option value="<?php echo htmlspecialchars($positions['position']); ?>"><?php echo htmlspecialchars($positions['position']); ?></option>
                <?php endforeach; ?>
              </select>
              <label for="modalPositionSelect" class="form-label">Enter Position</label>
            </div>
            <div class="mb-3 form-floating">
              <select class="form-select" id="modalUnitSelect" aria-label="Unit Select">
                <?php foreach ($unitsAssigned as $unitAssigned): ?>
                  <option value="<?php echo htmlspecialchars($unitAssigned['unit']); ?>"><?php echo htmlspecialchars($unitAssigned['unit']); ?></option>
                <?php endforeach; ?>
              </select>
              <label for="modalUnitSelect" class="form-label">Unit Assigned</label>
            </div>
            <div class="mb-3 form-floating">
              <input type="date" class="form-control" id="modalDateHired" placeholder="Date Hired">
              <label for="modalDateHired" class="form-label">Date Hired</label>
            </div>
            <div class="d-flex gap-2 align-items-start">
            <div class="mb-3 form-floating">
              <input type="text" class="form-control" id="modalUsername" placeholder="Username">
              <label for="modalUsername" class="form-label">Username</label>
            </div>
            <div class="mb-3 form-floating">
              <input type="password" class="form-control" id="modalPassword" placeholder="Password">
              <label for="modalPassword" class="form-label">Password</label>
            </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="updateUserAccount">Save changes</button>
        </div>
      </div>
    </div>
  </div>