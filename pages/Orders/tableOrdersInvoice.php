<div class="card">
    <div class="card-body mx-4">
        <div class="container">
            <p class="my-2 mx-5" style="font-size: 30px;">Invoices #MD0098</p>
            <div class="row" style="text-align:left;">
                <ul class="list-unstyled mb-4">
                    <li class="text-black">Robert Junior</li>
                    <li class="text-black mt-1">Jumat, 30 Maret 2024</li>
                </ul>
                <hr>
                <div class="col-xl-10">
                    <p>1 Strawberry Sago</p>
                    </p>
                </div>
                <div class="col-xl-2">
                    <p class="float-end">Rp20.000
                    </p>
                </div>
                <hr>
            </div>

            <div class="row text-black">

                <div class="col-xl-12">
                    <p class="float-end fw-bold">Total: Rp20.000
                    </p>
                </div>
                <hr style="border: 2px solid black;">
            </div>
            <div class="text-center" style="margin-top: 90px;">
                <button type="button" class="btn bg-gradient-info h5" onclick="printInvoice()">
                    <span class="me-1">
                        <i class="fas fa-print"></i>
                    </span>
                    <span class="bold"><strong>Print</strong></span>
                </button>
                <p>Mirai Dessert</p>
            </div>

        </div>
    </div>
</div>

<script>
    function printInvoice() {
        window.print();
    }
</script>