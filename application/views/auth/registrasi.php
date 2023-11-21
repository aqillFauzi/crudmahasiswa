
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('auth/registrasi'); ?>" method="POST">
                                        <div class="form-group">
                                            <label for="nama"></label>
                                            <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Name">
                                            <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="email"></label>
                                            <input type="email" name="email" value="<?= set_value('email'); ?>" class="form-control" id="email" placeholder="Email Address">
                                            <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="password"></label>
                                            <input type="password" name="password" value="<?= set_value('password'); ?>" class="form-control" id="password" placeholder="Password">
                                            <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                                        </div>
                                        <br>
                                        <div class="mt-4 mb-0">
                                        <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Create Account</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="<?= base_url('Auth'); ?>">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Aqil 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>