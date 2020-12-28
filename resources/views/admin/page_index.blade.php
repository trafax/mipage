<div class="modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Pagina's</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="d-flex border-bottom pb-3">
                <button type="button" class="btn btn-primary ms-auto" data-href="{{ route('page.create') }}">Pagina toevoegen</button>
            </div>
            <ul class="list-group list-group-flush sortable" data-action="{{ route('page.sort') }}">
                @foreach(App\Models\Page::where('parent_id', 0)->orderBy('sort')->get() as $page)
                    <li class="list-group-item" id="{{ $page->id }}">
                        <div class="d-flex">
                            <a href="javascript:;" data-href="{{ route('page.edit', $page) }}">{{ $page->title }}</a>
                        </div>
                        <span class="text-muted small d-block">Link: {{ $page->slug }} | <a href="" class="text-danger">verwijder</a></span>
                        @if(App\Models\Page::where('parent_id', $page->id)->exists())
                            <ul class="list-group list-group-flush border-top mt-3 sortable" data-action="{{ route('page.sort') }}">
                                @foreach(App\Models\Page::where('parent_id', $page->id)->orderBy('sort')->get() as $child)
                                    <li class="list-group-item" id="{{ $child->id }}">
                                        <div class="d-flex">
                                            <a href="javascript:;" data-href="{{ route('page.edit', $child) }}">{{ $child->title }}</a>
                                        </div>
                                        <span class="text-muted small d-block">Link: {{ $child->slug }} | <a href="{{ route('page.destroy', $child->id) }}" data-delete="Pagina verwijderen?" class="text-danger">verwijder</a></span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
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
