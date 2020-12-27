@if (Session::get('modal'))
    <script>
        $(function(){
            $('#modal').load('{{ Session::get('modal') }}',function(){
                $('.modal').modal('show');
            });
        });
    </script>
@endif
