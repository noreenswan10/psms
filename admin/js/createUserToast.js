document.addEventListener("DOMContentLoaded", function () {
    const addUserForm = document.getElementById('addUser');
    const addUserButton = document.getElementById('createUserBtn');
    const toastElement = document.getElementById('userCreatedToast');
    const toast = new bootstrap.Toast(toastElement);
    const createUserModal = new bootstrap.Modal(document.getElementById('createUserModal'));

    addUserButton.addEventListener('click', function () {
      // Simulate saving effect
      addUserButton.innerHTML = 'Saving...';
      addUserButton.disabled = true;

      // Simulate an asynchronous save operation
      setTimeout(function () {
        // Normally here you'd submit the form via AJAX or process the form data
        const formData = new FormData(addUserForm);
        const userData = {
          firstName: formData.get('fnameInput'),
          lastName: formData.get('lnameInput'),
          rank: formData.get('rank'),
          position: formData.get('position'),
          unitAssigned: formData.get('unit'),
          dateHired: formData.get('dateHired'),
          username: formData.get('usernameInput'),
          password: formData.get('passwordInput')
        };

        // Log the user data to the console
        console.log('User Data:', userData);

        // Show toast notification
        toast.show();

        // Reset button text and state
        addUserButton.innerHTML = 'Add user';
        addUserButton.disabled = false;

        // Reset the form
        resetForm();

        // Close the modal
        createUserModal.hide();
      }, 1500); // Simulating a 1.5-second delay for the saving effect
    });
  });

  // Function to reset the form
  function resetForm() {
    const addUserForm = document.getElementById('addUser');
    addUserForm.reset();
  }