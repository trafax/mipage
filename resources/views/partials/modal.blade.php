@if (Session::get('modal'))
    <script>
        $(function(){
            window.loader('show');
            $('#modal').load('{{ Session::get('modal') }}',function(){
                $('.modal').modal('show');
                window.loader('hide');
            });
        });
    </script>
@endif
