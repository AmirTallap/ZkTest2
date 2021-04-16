<script>
    $(window).on('load', function(){
        $('.conn_response_msg_success').hide();
        $('.conn_response_msg_fail').hide();
    });
    $('.testConnBtn').on('click', function(){
        $.ajax({
            type: 'post',
            url: '{{route("Zk.TestDevice")}}',
            data:{'dataObj':{
                'device_ip':$('#device_ip').val(),
                'comm_protocol':$('#comm_protocol').val(),
                'port':$('#port').val(),
                'device_id':$('#device_id').val(),
                'password':$('#password').val(),
            }},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                if(data.success){
                    
                    $('.conn_response_msg_fail').hide();
                    $('.conn_response_msg_success').fadeIn();

                }else{
                    $('.conn_response_msg_fail').fadeIn();
                    $('.conn_response_msg_success').hide();
                }

            },
            error: function (jqXHR, exception) {
                return false;
            },
        });
    });
</script>