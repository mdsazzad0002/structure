<!-- Button trigger modal -->
<button type="button" hidden class="btn btn-primary" data-toggle="modal" data-target="#ajax_modal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="ajax_modal" tabindex="-1" role="dialog" aria-labelledby="ajax_modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eajax_modalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>

        </div>
    </div>
</div>


<script>
    function button_ajax(thi) {




var placeholder_body = `
        <div class="w-100 p-2 glow_text"></div>
        <div class="w-100 p-2 glow_text"></div>
        <div class="w-100 p-2 glow_text"></div>
        <div class="w-100 p-2 glow_text"></div>
        <div class="w-100 p-2 glow_text"></div>
        <div class="w-100 p-2 glow_text"></div>
        <div class="w-100 p-2 glow_text"></div>
`;

    $('#ajax_modal .modal-body').html(placeholder_body);

        var modalDialog = document.querySelector('#ajax_modal .modal-dialog');

        {{--  Modal dialog class add remove  --}}
        if($(thi).data('dialog')){
            if($('#ajax_modal .modal-dialog').data('dialog')){
                var data_array = modalDialog.getAttribute('data-dialog').split(" ");
                data_array.forEach(function(element) {
                    $('#ajax_modal .modal-dialog').removeClass(element); // Remove each class from modal-dialog
                });
            }


            var dialogValue = thi.getAttribute('data-dialog');
            $('#ajax_modal .modal-dialog').addClass($(thi).data('dialog'));
            // Add the data-dialog attribute value from thi to the .modal-dialog element
            modalDialog.setAttribute('data-dialog', dialogValue);


        }else{
            if($('#ajax_modal .modal-dialog').data('dialog')){
                var data_array = modalDialog.getAttribute('data-dialog').split(" ");
                data_array.forEach(function(element) {
                    $('#ajax_modal .modal-dialog').removeClass(element); // Remove each class from modal-dialog
                });
            }
            modalDialog.setAttribute('data-dialog', '');
        }
    {{-- end Modal dialog class add remove  --}}

    {{--  Modal Title  --}}
    if($(thi).data('title')){
        $('#ajax_modal #eajax_modalLabel').html($(thi).data('title'));
    }else{
        if($(thi).title){
            $('#ajax_modal #eajax_modalLabel').html($(thi).title);
        }else{
            $('#ajax_modal #eajax_modalLabel').html('data-title or title');
        }
    }
    {{--  end modal Title  --}}

    {{--  data set  --}}
        if($(thi).data('href')){
            $.ajax({
                'type':'get',
                'url': $(thi).data('href'),
                success: function (data){
                    $('#ajax_modal .modal-body').html(data);
                }
            })
        }else{
            $('#ajax_modal .modal-body').html('data-href');
        }
    {{--  end data set  --}}



        $('#ajax_modal').modal('show');
    };

</script>
