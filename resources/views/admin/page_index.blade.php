<div class="modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Pagina's</h5>
            <button type="button" class="btn btn-primary" data-href="{{ route('page.create') }}">Pagina toevoegen</button>
        </div>
        <div class="modal-body">
            <ul class="list-group list-group-flush sortable" data-action="{{ route('page.sort') }}">
                @foreach(App\Models\Page::where('parent_id', 0)->orderBy('sort')->get() as $page)
                    <li class="list-group-item" id="{{ $page->id }}">
                        <a href="javascript:;" data-href="{{ route('page.edit', $page) }}">{{ $page->title }}</a>
                        <span class="text-muted small d-block">{{ $page->slug }}</span>
                        @if(App\Models\Page::where('parent_id', $page->id)->exists())
                            <ul class="list-group list-group-flush border-top mt-3 sortable" data-action="{{ route('page.sort') }}">
                                @foreach(App\Models\Page::where('parent_id', $page->id)->orderBy('sort')->get() as $child)
                                    <li class="list-group-item" id="{{ $child->id }}">
                                        <a href="javascript:;" data-href="{{ route('page.edit', $child) }}">{{ $child->title }}</a>
                                        <span class="text-muted small d-block">{{ $child->slug }}</span>
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
