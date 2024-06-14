<div class="container">

    <div class="text-center mt-5">    
        <h4 class="text-center">Services</h4>
    <p>Kami Memberikan pilihan paket biling</p>
    <div>

    <div class="row mt-5">
        
        @foreach ($service as $item)

         <div class="col-md-3">
            <div class="text-center">
                <i class="{{ $item->icon }} fa-3x text-success"></i>
                <h5><b>{{ $item->title }}</b></h5>
                <p> {{ Illuminate\Support\Str::limit($item->desc, 100) }}</p>
             </div>
         </div>

         @endforeach
    </div>
</div>