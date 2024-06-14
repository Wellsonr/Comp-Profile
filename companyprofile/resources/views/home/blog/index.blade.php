<div class="container my-5">
    <div class="text-center">
        <h4>blog</h4>
        <p>Mengenai kami co hahay</p>
    </div>

    <div class="row">

        @foreach($blog as $item)
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="wrapper-card-blog">
                    <div class="img-card-blog">
                        <img src="{{ $item->cover }}" class="img-card-blog" alt="">
                    </div>
                </div>
                <div class="p-2">
                    <a href="/blog/show/{{ $item->id }}" class="text-decoration-none"><h5>{{ $item->title }}</h5></a>
                    
                    {{ Illuminate\Support\Str::limit($item->body, 100) }}

                   </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
