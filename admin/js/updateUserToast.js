document.addEventListener('DOMContentLoaded', function () {
    const addUserButton = document.getElementById('updateUserAccount');
    const userUpdatedToast = document.getElementById('userUpdatedToast');
    const userErrorToast = document.getElementById('userErrorToast');
    
    // Make sure the resetForm function has access to the correct form
    const form = document.getElementById('addUser'); // Ensure this ID matches your form's ID

    function showToast(toastElement) {
        if (toastElement) {
            const bootstrapToast = new bootstrap.Toast(toastElement);
            bootstrapToast.show();
        } else {
            console.error('Toast element not found:', toastElement);
        }
    }

    function resetForm() {
        if (form) {
            form.reset();
        } else {
            console.error('Form element not found');
        }
    }

    addUserButton.addEventListener('click', async function () {
        addUserButton.innerHTML = 'Saving...';
        addUserButton.disabled = true;

        try {
            // Simulate an asynchronous save operation (replace this with actual fetch call)
            await new Promise((resolve, reject) => {
                setTimeout(() => {
                    // Simulating success; replace with resolve() or reject() based on actual operation
                    resolve(); // or reject();
                }, 1500);
            });

            // Show success toast notification
            showToast(userUpdatedToast);
            resetForm();
        } catch (error) {
            console.error('Error saving user account:', error);
            // Show error toast
            showToast(userErrorToast);
        } finally {
            addUserButton.innerHTML = 'Save changes';
            addUserButton.disabled = false;
        }
    });
});
