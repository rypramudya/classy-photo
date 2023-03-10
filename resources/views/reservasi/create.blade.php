<form action="/reservasi/store" method="POST">
    @csrf 
    <div class="modal-header">						
        <h4 class="modal-title">Reservasi Sekarang!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="modal-body">					
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat" required></textarea>
        </div>
        <div class="form-group">
            <label>No Telepon</label>
            <input type="text" name="notlp" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nominal</label>
            <input type="text" name="nominal_booking" class="form-control" required>
        </div>					
    </div>
    <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
        <input type="submit" class="btn btn-success" value="Save" name="submit">
    </div>
</form>

