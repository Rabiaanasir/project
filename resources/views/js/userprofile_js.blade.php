<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('edit-profile').addEventListener('click', function(e) {
        e.preventDefault();
        console.log("Edit Profile button clicked");
        document.getElementById('profile-view').style.display = 'none';
        document.getElementById('profile-edit').style.display = 'block';
    });

    document.getElementById('cancel-edit').addEventListener('click', function(e) {
    e.preventDefault();
    console.log("Cancel button clicked");

    if (confirm('Are you sure you want to cancel editing?')) {
        document.getElementById('profile-edit').style.display = 'none';
        document.getElementById('profile-view').style.display = 'block';
    } else {
        console.log("Edit canceled by the user");
    }
});

});
</script>
