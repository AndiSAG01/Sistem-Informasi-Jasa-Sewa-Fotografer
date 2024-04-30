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
                        <small>Pastikan Anda telah menentukan Aqiqah. Manage package Aqiqah mempengaruhi jenis dari
                            informasi jasa anda.</small>
                    </span>
                </div>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('aqiqahs.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="exampleFormControlSelect2">Name Basic</label>
                        <select class="form-control" name="basics_id" id="exampleFormControlSelect2">
                            <option value="">==Selected Name Basic==</option>
                            @foreach ($basics as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('basics_id')
                            <small class="text-danger form-text">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="exampleInputUsername1">Description</label>
                        <textarea name="description" id="editor" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="exampleInputUsername1">Price</label>
                        <input type="number" name="price" class="form-control">
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
