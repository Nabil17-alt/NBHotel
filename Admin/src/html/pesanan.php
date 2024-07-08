<div class="container-fluid">
    <div class="col-lg-15 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4 d-flex justify-content-between align-items-center">
                <h5 class="card-title fw-semibold mb-0">Pesanan</h5>
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-outline-warning">Edit</button>
                    <button type="button" class="btn btn-outline-success">Update</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Nama</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Email</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Tipe Kamar</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Check-in</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Check-Out</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include 'pesanantampil.php'; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="py-6 px-6 text-center">
    <p class="mb-0 fs-4">Copyright © 2024<a href="https://nabil17-alt.github.io/Portofolio/" target="_blank"
            class="pe-1 text-primary text-decoration-underline"> Muhammad Nabil</a></p>
</div>