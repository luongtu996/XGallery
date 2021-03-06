<div class="row mb-2">
    <div class="col-12">
        <nav class="navbar navbar-dark bg-dark">
            <form class="form-inline" method="post" action="{{route('truyenchon.search.view')}}">
                @csrf
                <input class="form-control input-sm mr-sm-2" type="Enter your search keyword" name="keyword" placeholder="Search" aria-label="Search" value="{{request()->get('keyword')}}">

                <select class="custom-select form-control input-sm mr-sm-2" id="sort-by" name="sort-by">
                    <option @if(request()->get('sort-by') == 'title') selected @endif value="id">Title</option>
                </select>
                <select class="custom-select form-control input-sm mr-sm-2" id="perPage" name="per-page">
                    <option @if(request()->get('per-page') == 15) selected @endif value="15">15</option>
                    <option @if(request()->get('per-page') == 30) selected @endif value="30">30</option>
                    <option @if(request()->get('per-page') == 60) selected @endif value="60">60</option>
                    <option @if(request()->get('per-page') == 120) selected @endif value="120">120</option>
                </select>
                <button class="btn btn-primary btn-sm my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
    </div>
</div>
