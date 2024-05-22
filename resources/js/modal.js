$(document).ready(function () {
    $('.deleteBtn').click(function (e) {
        e.preventDefault();
        var delete_id = $(this).val();
        $('#delete_id').val(delete_id);
        $('#deleteModal').modal('show');
    });
});
