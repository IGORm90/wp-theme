$(function() {
    $('.books-like-btn').one('click', function() {
        var $btn = $(this);
        var id = $btn.data('id');

        $.post('/wp-admin/admin-ajax.php', {
            action: 'booklike',
            id: id,
        }, function(data) {
            console.log(data);
        }, 'json');
    });

    $('.home-app').on('submit', function(e) {
        e.preventDefault();
        var $form = $(this);
        var data = $form.serialize();

        $.post('/wp-admin/admin-ajax.php?action=homeapp', data, function(data) {
            console.log(data);
        }, 'json');
    });
});