<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle "Edit Profile" button click
    document.getElementById('edit-profile').addEventListener('click', function(e) {
        // alert()
        e.preventDefault(); // Prevent default link behavior
        console.log("Edit Profile button clicked");
        // Hide the profile view and show the edit form
        document.getElementById('profile-view').style.display = 'none';
        document.getElementById('profile-edit').style.display = 'block';
    });

    // Handle "Cancel" button click
    document.getElementById('cancel-edit').addEventListener('click', function(e) {
    e.preventDefault(); // Prevent default link behavior
    console.log("Cancel button clicked"); // Add this line for debugging
    
    // Ask for confirmation before proceeding
    if (confirm('Are you sure you want to cancel editing?')) {
        // If the user confirms, hide the edit form and show the profile view
        document.getElementById('profile-edit').style.display = 'none';
        document.getElementById('profile-view').style.display = 'block';
    } else {
        // If the user cancels, do nothing
        console.log("Edit canceled by the user");
    }
});

});
</script>