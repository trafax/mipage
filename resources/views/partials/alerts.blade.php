@if (Session::has('alert') && Session::get('alert')['type'] == 'success')
    <div class="modal " id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Gelukt!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>{{ Session::get('alert')['message'] }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
            </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function(){
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), []);
            myModal.show();

            setTimeout(function() {
                myModal.hide();
            }, 2500);
        })
    </script>
@endif
