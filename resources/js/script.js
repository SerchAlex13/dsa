$(document).ready(function() {
    $("#image").on('change', function() {				
        $(".announce").html('<div class="alert alert-info">Process...</div>');
        var formData = new FormData();
        var files = $('#image')[0].files[0];
        formData.append('file',files);
        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {
                if (response.slice(0, 7) != "[ERROR]") {
                    $(".announce").html('<div class="alert alert-success">Uploaded OK</div>');
                    $(".card-img-top").attr("src", response);
                } else {
                    var error_str = response.replace("[ERROR]", "");
                    $(".announce").html('<div class="alert alert-danger">An error has ocurred: <b>' + error_str + '</b></div>');
                }
            }
        });
        return false;
    });
});