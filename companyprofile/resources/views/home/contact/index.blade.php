<div class="container">
    
    <div class="text-center my-5">
        <h4>Contact</h4>
        <p>Jika ingin booking silahkan mengontak nomor yang tertera, atau jika ada kritik dan saran bisa juga mengajukan.</p>
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="/contact/send" method="POST">
                        @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" placeholder="Masukan nama anda">
                        @error('name')
                      <div class="invalid-feedback">
                           {{ $message }}
                      </div>
                @enderror
                    </div>

                    <div class="form-group mt-4">
                        <label for="">Isi pesan</label>
                        <textarea name="desc" id="" cols="30" rows="10" class="form-control @error('desc')is-invalid @enderror" placeholder="Masukan pesan anda"></textarea>
                        @error('desc')
                      <div class="invalid-feedback">
                           {{ $message }}
                      </div>
                @enderror
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Kirim</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex">
                <i class="fas fa-phone fa-2x px-3"></i> <h3>08566529938</h3>
            </div>

            <div class="d-flex mt-3">
                <i class="fas fa-envelope fa-2x px-3"></i> <h3>SuryaPool88@gmail.com</h3>
            </div>

            <div class="d-flex mt-3">
                <i class="fas fa-map-marker fa-2x px-3"></i> <h3>Jl. Hangtuah </h3>
            </div>
        </div>

    </div>
</div>