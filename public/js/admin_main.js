$(document).ready(function(){

    // обработка событий удаления элементов
    $(document).on('click', '.delete', function(event) {
        event.preventDefault();
        var url = $(this).find('.form-delete').attr('action');
        var data = $(this).find('.form-delete').serialize();

        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            success: function (result) {
                alert("Выбранный элемент удалён!");
                var elements = $(result).find('#main-table').html();
                $('#main-table').html(elements);
                var paginator = $(result).find('#paginator-block').html();
                $('#paginator-block').html(paginator);
            }
        });
    });

    // смена видимости комментариев к новостям
    $(document).on('click', '.checked', function(event) {
        event.preventDefault();
        var url = $(this).siblings('form.form-check').attr('action');
        var data = $(this).siblings('form.form-check').serialize();

        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            success: function (result) {
                alert("Видимость комментария изменена!");
                var elements = $(result).find('#main-table').html();
                $('#main-table').html(elements);
            }
        });
    });


});