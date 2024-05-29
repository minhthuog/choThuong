<style>
    .navbar-nav > li {
        margin-right: 10px;
    }
</style>

<header>
    <section class="section_header bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="row w-100">
                    <div class="col-sm-2 d-flex justify-content-center">
                        <img src="{{asset('images/logo1.jpg')}}" class="logo img-fluid" alt="logo" style="width: 150%;height: 200%;"/>
                    </div>
                    <div class="col-sm-8 py-4 d-flex align-items-center justify-content-between">
                        <nav class="navbar navbar-expand-lg bg-light">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 flex-grow-1">
                                    @foreach($list->filter(function($item) { return $item->type == 'custom'; })->take(5) as $item)
                                        <li style="margin-right: 10px;"><a class="dropdown-item" href="{{ url('/' . $item->link) }}">{{ $item->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </nav>
                        <form class="search-form me-4">
                            <div style="display: flex;">
                                <input type="search" placeholder="Search" class="search-input rounded me-2" aria-label="Search" style="flex: 1;" />
                                <button type="submit" class="buta search-button rounded">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-2 d-flex justify-content-center">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-home me-3"></i>
                            <i class="fas fa-bell me-3"></i>
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>
</header>
