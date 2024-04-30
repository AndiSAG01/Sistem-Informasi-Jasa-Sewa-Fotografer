<!-- Button trigger modal -->
<button type="button" class="btn btn-primary font-weight-bold mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="icon-box" aria-hidden="true"></i> Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="alert bg-primary text-white" role="alert">
                    <span class="modal-title" id="exampleModalLabel">
                      <h5 class="fw-bold"><i class="fas fa-exclamation-triangle"> PERINGATAN!!!</i>
                      </h5>
                        <small>Pastikan Anda telah menentukan kategori. Kategori package basic mempengaruhi jenis dari
                            informasi jasa anda.</small>
                    </span>
                </div>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('basics.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="exampleInputUsername1">Nama Package Basic</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success text-right"><i class="icon-check"></i>
                            Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
