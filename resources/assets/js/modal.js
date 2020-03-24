$('#profile').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var name = button.data('user-name');
    var avatar = button.data('user-avatar');
    var phone = button.data('user-phone');
    var email = button.data('user-email');

    var modal = $(this);
    modal.find('.modal-body #avatar').val(avatar);
    modal.find('.modal-body #name').val(name);
    modal.find('.modal-body #phone').val(phone);
    modal.find('.modal-body #email').val(email);
})
