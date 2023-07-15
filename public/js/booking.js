$(document).ready(function() {
    $('#search-bar').on('keyup', function() {
        var query = $(this).val();
        $.ajax({
            url:"search",
            type:"GET",
            data:{'name':query},
            success:function(data) {
                $('#search-list').html(data)
            }
        })

    })
})
