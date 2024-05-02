<div class="container-fluid col-10">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">ID</label>
            <input class="form-control" type="text" value="MD0099" id="example-text-input">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Produk</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Total Harga</label>
            <input class="form-control" type="text" value="Rp200.000" id="example-text-input">
        </div>
        <div class="form-group">
            <label for="example-datetime-local-input" class="form-control-label">Tanggal Pembelian</label>
            <input class="form-control" type="datetime-local" value="2018-11-23T10:30:00"
                id="example-datetime-local-input">
        </div>
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Metode Pembayaran</label>
            <input class="form-control" type="text" value="Tunai" id="example-text-input">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>DONE</option>
                <option>PENDING</option>
                <option>CANCEL</option>
            </select>
        </div>

        <div class="card-footer mt-6">

            <button type="submit" name="btn" value="Simpan" class="btn btn-info">
                <i class="fas fa-save"></i> Save
            </button>
            <a href="dashboard.php?section=ordersPage" class="btn btn-warning">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>

    </form>
</div>