<div class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Pagina toevoegen</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-href="{{ route('page.index') }}">Terug naar overzicht</button>
            <button type="button" class="btn btn-primary" data-href="{{ route('page.create') }}">Save changes</button>
        </div>
        </div>
    </div>
</div>
