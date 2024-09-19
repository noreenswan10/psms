const addUserButton = document.getElementById('updateUserAccount');
const toastElement = document.getElementById('userUpdatedToast');
const toast = new bootstrap.Toast(toastElement, {
    autohide: true, // Automatically hide the toast
    delay: 3000 // Time in milliseconds before it hides
});

addUserButton.addEventListener('click', function () {
    // Prepare form data
    const fname = document.getElementById('fnameInput').value;
    const lname = document.getElementById('lnameInput').value;

    // Basic validation
    if (!fname || !lname) {
        alert('Please fill in all fields.');
        return;
    }

    addUserButton.innerHTML = 'Saving...';
    addUserButton.disabled = true;

    // Simulate an asynchronous save operation
    setTimeout(function () {
        // Show toast notification
        toast.show();

        // Reset button text and state
        addUserButton.innerHTML = 'Add user';
        addUserButton.disabled = false;

        // Reset the form
        resetForm();
    }, 1500);
});
