<div class="border-bottom py-2">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Mipage</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        @foreach (App\Models\Page::where('parent_id', 0)->orderBy('sort')->get() as $parent)
                            <li class="nav-item {{ $parent->childs()->exists() ? 'dropdown' : '' }}">
                                @if($parent->childs()->exists())
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="{{ $parent->title }}">
                                        {{ $parent->title }}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach ($parent->childs as $child)
                                            <li><a class="dropdown-item" href="{{ route('page', $child->slug) }}" title="{{ $child->title }}">{{ $child->title }}</a></li>
                                        @endforeach
                                    </ul>
                                @else
                                    @php $link = $loop->first ? route('home') : route('page', $parent->slug) ; @endphp
                                    <a class="nav-link" aria-current="page" href="{{ $link }}" title="{{ $parent->title }}">{{ $parent->title }}</a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
