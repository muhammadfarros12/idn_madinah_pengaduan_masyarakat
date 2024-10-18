@extends('layouts.base-app')

@section('title', 'Users Dashboard')

@section('content')
<div class="container mt-5">
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="card-title">Form Tambah Users</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama Lengkap</label>
                                            <input type="text" id="" class="form-control" placeholder="Nama Lengkap"
                                                name="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="country-floating">Email</label>
                                            <input type="email" id="" class="form-control" name="" placeholder="Email"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="last-name-column">Nomor Telepon</label>
                                            <input type="text" id="" class="form-control" placeholder="Nomor Telepon"
                                                name="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="city-column">Password</label>
                                            <input type="password" id="" class="form-control" placeholder="Masukkan Password"
                                                name="" required>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="card-title">List Users</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-strip" id="myTable">
                                    <thead>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Pilihan</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>john doe</td>
                                            <td>johndoe@mail.com</td>
                                            <td>
                                                <form action="">
                                                    <a href="#" class="btn btn-success">Detail</a>
                                                    <a href="#" class="btn btn-warning">Edit</a>
                                                    <a href="#" class="btn btn-danger">Delete</a>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>john doe</td>
                                            <td>johndoe@mail.com</td>
                                            <td>
                                                <form action="">
                                                    <a href="#" class="btn btn-success">Detail</a>
                                                    <a href="#" class="btn btn-warning">Edit</a>
                                                    <a href="#" class="btn btn-danger">Delete</a>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>john doe</td>
                                            <td>johndoe@mail.com</td>
                                            <td>
                                                <form action="">
                                                    <a href="#" class="btn btn-success">Detail</a>
                                                    <a href="#" class="btn btn-warning">Edit</a>
                                                    <a href="#" class="btn btn-danger">Delete</a>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection