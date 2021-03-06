<div class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ route('page.store') }}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Pagina toevoegen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Pagina titel</label>
                            <input type="text" name="title" placeholder="Paginatitel" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Subpagina</label>
                            <select name="parent_id" class="form-select">
                                <option value="0">geen</option>
                                @foreach(App\Models\Page::where('parent_id', 0)->get() as $parent)
                                    <option value="{{ $parent->id }}">{{ $parent->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-href="{{ route('page.index') }}">Terug naar overzicht</button>
                    <button type="submit" class="btn btn-primary">Opslaan</button>
                </div>
            </form>
        </div>
    </div>
</div>
