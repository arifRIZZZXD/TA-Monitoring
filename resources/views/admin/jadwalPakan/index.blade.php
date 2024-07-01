@extends('admin.main')

@section('container-admin')
<div class="container">
    <div class="page-inner">
            <div class="row">
                <div class="col-12 card">
                    <div class="card-title">
                        <div class="card-header">
                            Jadwal Pakan
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table mt-2">
                            <thead>
                                <tr>
                                    <th>Pakan Ke-1</th>
                                    <th>Pakan Ke-2</th>
                                    <th>Pakan Ke-3</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>09:00 AM</td>
                                    <td>01:00 PM</td>
                                    <td>04:00 PM</td>
                                    <td><button class="btn btn-sm btn-dark"><i class="fas fa-pen-square" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i></button></td>
                                    {{-- Modal JadwalPakan --}}
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="Pakan1">Pakan Ke-1</label>
                                                                <input class="form-control" type="time" value="00:00:00" id="html5-time-input" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="Pakan2">Pakan Ke-2</label>
                                                                <input class="form-control" type="time" value="00:00:00" id="html5-time-input" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="Pakan3">Pakan Ke-3</label>
                                                                <input class="form-control" type="time" value="00:00:00" id="html5-time-input" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    {{-- End Modal Jadwal Pakan --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 card">
                    <div class="card-title">
                        <div class="card-header">
                            Pengaturan Alat
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table mt-2">
                            <thead>
                                <tr>
                                    <th>Minimal Suhu</th>
                                    <th>Maksimal Suhu</th>
                                    <th>Minimal Kadar Ph</th>
                                    <th>Maksimal Kadar Ph</th>
                                    <th>Minimal Pakan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>20 °C</td>
                                    <td>35 °C</td>
                                    <td>6.5</td>
                                    <td>8.0</td>
                                    <td>20%</td>
                                    <td><button class="btn btn-sm btn-dark"><i class="fas fa-pen-square" data-bs-toggle="modal" data-bs-target="#staticBackdropSettings"></i></button></td>
                                    {{-- Modal JadwalPakan --}}
                                    <div class="modal fade" id="staticBackdropSettings" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Edit Pengaturan Alat</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Pakan1">Minimal Suhu</label>
                                                                <input class="form-control" type="text" placeholder="Masukan data..."/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Pakan2">Maksimal Suhu</label>
                                                                <input class="form-control" type="text" placeholder="Masukan data..."/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Pakan1">Minimal Kadar Ph</label>
                                                                <input class="form-control" type="text" placeholder="Masukan data..."/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Pakan2">Maksimal Kadar PH</label>
                                                                <input class="form-control" type="text" placeholder="Masukan data..."/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="Pakan3">Minimal Pakan</label>
                                                                <input class="form-control" type="text" placeholder="Masukan data..."/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    {{-- End Modal Jadwal Pakan --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection