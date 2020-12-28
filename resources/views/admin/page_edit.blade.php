<div class="modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" action="{{ route('page.update', $page) }}">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Pagina bewerken</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3 pe-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" data-bs-toggle="pill" href="#basic" role="tab" aria-controls="v-pills-home" aria-selected="true">Basis</a>
                            <a class="nav-link" data-bs-toggle="pill" href="#settings" role="tab" aria-controls="v-pills-profile" aria-selected="false">Eigenschappen</a>
                            <a class="nav-link" data-bs-toggle="pill" href="#seo" role="tab" aria-controls="v-pills-messages" aria-selected="false">Zoekmachine</a>
                        </div>
                        <div class="tab-content flex-grow-1" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="basic" role="tabpanel">
                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label">Pagina titel</label>
                                        <input type="text" name="title" value="{{ $page->title }}" placeholder="Paginatitel" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="settings" role="tabpanel">
                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label">Subpagina van</label>
                                        <select name="parent_id" class="form-select">
                                            <option value="0">Geen</option>
                                            @foreach(App\Models\Page::where('parent_id', 0)->where('id', '!=', $page->id)->get() as $parent)
                                                <option value="{{ $parent->id }}" {{ $page->parent_id == $parent->id ? 'selected' : '' }}>{{ $parent->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="seo" role="tabpanel">
                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label">Titel</label>
                                        <input type="text" name="seo[title]" value="{{ $page->seo['title'] }}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label">Zoekwoorden</label>
                                        <input type="text" name="seo[keywords]" value="{{ $page->seo['keywords'] }}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label">Pagina omschrijving</label>
                                        <textarea name="seo[description]" class="form-control">{{ $page->seo['description'] }}</textarea>
                                    </div>
                                </div>
                            </div>
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
