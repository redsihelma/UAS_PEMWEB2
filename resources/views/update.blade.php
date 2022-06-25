<div class="p2">
    <div class="form-group mb-3">
        <input type="text" name="no_plat" id="no_plat" class="form-control "placeholder="Nomor Plat Kendaraan" required value="{{ $kendaraan->no_plat }}" autocomplete="off">
    </div>
    <div class="form-group mb-3">
        <input type="text" name="merk" id="merk" class="form-control " placeholder="Merk Kendaraan" required value="{{ $kendaraan->merk }}" autocomplete="off" >
    </div>
    <div class="form-group mb-3">
        <input type="text" name="tipe" id="tipe" class="form-control " placeholder="Tipe Kendaraan" required value="{{ $kendaraan->tipe }}" autocomplete="off" >
    </div>
  
    <div class="form-group mt-5">
    <button class="btn btn-dark" onClick="update({{ $kendaraan->id }})">Update Data</button>
    </div>
</div>