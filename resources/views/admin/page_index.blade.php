<div class="modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Pagina's</h5>
            <button type="button" class="btn btn-primary" data-href="{{ route('page.create') }}">Pagina toevoegen</button>
        </div>
        <div class="modal-body">
            <ul class="list-group list-group-flush">
                @foreach(App\Models\Page::get() as $page)
                    <li class="list-group-item">
                        <a href="">{{ $page->title }}</a>
                        <span class="text-muted small d-block">{{ $page->slug }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sluit</button>
        </div>
        </div>
    </div>
</div>
