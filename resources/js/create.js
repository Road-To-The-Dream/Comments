$(document).ready(function () {

    $(".tag").click(function () {
        let value = $(this).text();
        value = value.replace(/ /g, '').replace('[', '').replace(']', '');

        let content = $("#message").val();

        if (value === 'a') {
            content += '<' + value + ' href="" title="">' + '</' + value + '>'
        } else {
            content += '<' + value + '>' + '</' + value + '>'
        }

        $("#message").val(content);
    });

    $('#info').click(function () {
        $("#info").notify(
            "File size: < 100 KB" + "\n"
            + "Image format: PNG, JPG, GIF" + "\n"
            + "Image size: < 320x240 px", {
                className: 'info',
                position: "right"
            }
        );
    });

    $("#comment_form:first").submit(function (event) {
        event.preventDefault();
        let data = new FormData(this);
        $.ajax({
            type: 'POST',
            url: this.action,
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function () {
                $.notify(
                    "Комментарий успешно добавлен !", {
                        className: 'success',
                        globalPosition: 'bottom left'
                    }
                );
            },
            error: function (errorResponse) {
                $.notify(
                    "Ошибка при отправке данных !", {
                        className: 'error',
                        globalPosition: 'bottom left'
                    }
                );

                $(".request").empty();

                $.each(errorResponse['responseJSON']['errors'], function (key, value) {
                    $(".request").append("<div class=\"mb-3 alert alert-danger\">" + value + "</div>");
                });
            }
        });
    })
});