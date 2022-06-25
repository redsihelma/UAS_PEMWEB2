<table class="table">

    <thead>
        <tr>

            <th scope="col">No.</th>
            <th scope="col">Nomor Plat Kendaraan</th>
            <th scope="col">Merk Kendaraan</th>
            <th scope="col">Tipe Kendaraan</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
     @foreach ($Kendaraans as $mobil)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $mobil->no_plat }}</td>
              <td>{{ $mobil->merk }}</td>
              <td>{{ $mobil->tipe }}</td>
              <td>
                  <button class="btn btn-info text-bg-warning" onClick="show({{ $mobil->id }})">Update</button>
                  <button class="btn btn-danger text-bg-danger" onClick="destroy({{ $mobil->id }})">Delete</button>
              </td>
            </tr>
              @endforeach
    </tbody>
</table>