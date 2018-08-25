function getFormData($form){
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}
const API_URL = 'https://reqres.in/api/'
const token = ''
const modules = {}
jQuery(document).ready(function($) {
    if (!token) {
        $('.require-auth').hide()
    } else {
        $('#login-block').hide()
    }
    // loading
    var $loading = $('#block-loading').hide()
    var $views = $('.views')
    $(document)
        .ajaxStart(function () {
            $loading.show()
            // $views.hide()
        })
        .ajaxStop(function () {
            $loading.hide()
            // $views.show()
        });

    modules.user = new userClass()
    // login page
    $('#login-form').submit(function(event) {
        event.preventDefault()
        $.post(API_URL + 'login', getFormData($(this)), function(data, textStatus, xhr) {
            if (textStatus == 'success') {
                alert('Đăng nhập thành công')
                $('#login-block').hide()
                $('#user-block').show()
                modules.user.fetchData()
            }
        });
    });

    // pagination
    $(document).on('click', '.page-link', function(event) {
        event.preventDefault();
        modules[$(this).data('module')].fetchData($(this).data('page'))
    });
});

var userClass = function () {
    this.fetchData = function(page) {
        page = page || 1
        $.get(API_URL + 'users?page=' + page, function(response) {
            $('#user-page').html('')
            $('#users').html('')
            response.data.forEach(function (user) {
                $('#users').append('\
                        <div class="col-md-4">\
                            <div class="thumbnail">\
                              <img src="' + user.avatar + '" alt="' + user.first_name + ' ' + user.last_name + '" class="img-fluid">\
                              <div class="caption">\
                                <h3>' + user.first_name + ' ' + user.last_name + '</h3>\
                                <p>\
                                    <a href="#" class="btn btn-primary user-detail" data-detail=\'' + JSON.stringify(user) + '\' role="button">show</a>\
                                </p>\
                              </div>\
                            </div>\
                        </div>\
                    ');
            })
            for (var i = 1; i <= response.total_pages; i++) {
                $('#user-page').append('<li class="page-item ' + (i == page ? 'active' : '') + '"><a class="page-link" data-page="' + i + '" data-module="user" href="#">' + i + '</a></li>')
            }
        });
    }
    $(document).on('click', '.user-detail', function(event) {
        event.preventDefault();
        console.log($(this).data('detail'))
    });
}
