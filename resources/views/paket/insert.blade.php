 <!-- Modal -->
 <button type="button"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#insert">
    CREATE
  </button>
<div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">CREATE</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <div class="card-body">
            <p class="login-box-msg">Menambahkan Data Paket</p>
            <form action="" method="post">
                @csrf
              <div class="input-group mb-3">
                <select name="id_outlet" class="form-control">
                    @foreach  ($outlet as $key=>$v )
                    <option value="{{$v->id}}">{{$v->id}}.{{$v->nama}}</option>
                    @endforeach
                </select>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user" name="nama" type="text"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control"value="" name="jenis">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope" name="alamat" type="text">
                    </span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" value="" name="nama_paket">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock" name="tlp" type="text">
                    </span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" value="" name="harga">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock" name="tlp" type="text">
                    </span>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Insert</button>
              </div>
              </div>
            </form>
          </div>
    </div>
  </div>
</div>
</div>
