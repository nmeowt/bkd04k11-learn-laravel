$('#id-class').change(function (e) {
    // Lấy giá trị của select 
    $('#id-student').html('');
    var idClass = $(this).val();
    var currenUrl = window.location.href; // BOM
    // Đường dẫn muốn gọi tới
    var url = currenUrl + "/get-students/" + idClass;

    $.ajax({
        type: "get",
        url: url,
        success: function (response) {
            $.each(response, function (index, value) {
                var option = `
                    <option value="${value.id}">${value.name}</option>
                `;
                $('#id-student').append(option);
            });
        }
    });
});