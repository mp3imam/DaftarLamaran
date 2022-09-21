@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row  justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header text-center font-weight-bold" style="font-size: 1.3rem;">DATA PRIBADI PELAMAR</div>

                <div class="card-body">
                    <form>
                        <div class="mb-3 row font-weight-bold">
                            <label for="inputPassword" class="col-sm-3 text-uppercase">POSISI YANG AKAN DILAMAR</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword" value="Web Developer" placeholder="Web Developer">
                            </div>
                        </div>
                        <div class="mb-3 row font-weight-bold">
                            <label for="inputPassword" class="col-sm-3 col-form-label">NAMA / NAMA PANGGILAN</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword" value="IMAM TANTOWI / IMAM" placeholder="IMAM TANTOWI / IMAM">
                            </div>
                        </div>
                        <div class="mb-3 row font-weight-bold">
                            <label for="inputPassword" class="col-sm-3 col-form-label">NO.KTP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword" value="3174032807900----" placeholder="3174032807900----">
                            </div>
                        </div>
                        <div class="mb-3 row font-weight-bold">
                            <label for="inputPassword" class="col-sm-3 col-form-label">TEMPAT</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword" value="Kemang Timur 10 No 59 Rt 006 Rw 003 Kel. Bangka Kec. Mampang Prapatan Jakarta Selatan" placeholder="Kemang Timur 10 No 59 Rt 006 Rw 003 Kel. Bangka Kec. Mampang Prapatan Jakarta Selatan">
                            </div>
                        </div>
                        <div class="mb-3 row font-weight-bold">
                            <label for="inputPassword" class="col-sm-3 col-form-label">TANGGAL LAHIR</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="inputPassword" value="1990-07-28" placeholder="28/07/1990">
                            </div>
                        </div>
                        <div class="mb-3 row font-weight-bold">
                            <label for="inputPassword" class="col-sm-3 col-form-label">JENIS KELAMIN</label>
                            <div class="col-sm-9">
                                <select class="form-control form-select" aria-label="Default select example">
                                    <option value="1" selected>Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                                </div>
                        </div>
                        <div class="mb-3 row font-weight-bold">
                            <label for="inputPassword" class="col-sm-3 col-form-label">AGAMA</label>
                            <div class="col-sm-9">
                                <select class="form-control form-select" aria-label="Default select example">
                                    <option value="1" selected>Islam</option>
                                    <option value="2">Protestan</option>
                                    <option value="3">Katolik</option>
                                    <option value="4">Hindu</option>
                                    <option value="5">Buddha</option>
                                    <option value="6">Khonghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row font-weight-bold">
                            <label for="inputPassword" class="col-sm-3 col-form-label">GOLONGAN DARAH</label>
                            <div class="col-sm-9">
                                <select class="form-control form-select" aria-label="Default select example">
                                    <option value="1">A</option>
                                    <option value="2" Selected>B</option>
                                    <option value="3">AB</option>
                                    <option value="4">0</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row font-weight-bold">
                            <label for="inputPassword" class="col-sm-3 col-form-label">STATUS</label>
                            <div class="col-sm-9">
                                <select class="form-control form-select" aria-label="Default select example">
                                    <option value="1">BELUM MENIKAH</option>
                                    <option value="2" Selected>MENIKAH</option>
                                    <option value="3">CERAI</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row font-weight-bold">
                            <label for="inputPassword" class="col-sm-3 col-form-label">ALAMAT KTP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword" value="Kemang Timur 10 No 59 Rt 006 Rw 003 Kel. Bangka Kec. Mampang Prapatan Jakarta Selatan" placeholder="Kemang Timur 10 No 59 Rt 006 Rw 003 Kel. Bangka Kec. Mampang Prapatan Jakarta Selatan">
                            </div>
                        </div>
                        <div class="mb-3 row font-weight-bold">
                            <label for="inputPassword" class="col-sm-3 col-form-label">EMAIL</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword" value="mp4imam@gmail.com" placeholder="mp4imam@gmail.com">
                            </div>
                        </div>
                        <div class="mb-3 row font-weight-bold">
                            <label for="inputPassword" class="col-sm-3 col-form-label">NO.TELP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword" value="0812-8090-1038" placeholder="0812-8090-1038">
                            </div>
                        </div>
                        <div class="mb-3 row font-weight-bold">
                            <label for="inputPassword" class="col-sm-3 col-form-label">ORANG TERDEKAT YAG DAPAT DIHUBUNGI</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword" value="Widia Sari / ISTRI / 0813-8375-1781" placeholder="Widia Sari / ISTRI / 0813-8375-1781">
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="exampleInputEmail1" class="form-control font-weight-bold alert alert-primary">PENDIDIKAN TERAKHIR</label>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th>Jenjang Pendidikan Terakhir</th>
                                    <th>Nama Institusi Akademik</th>
                                    <th>Jurusan</th>
                                    <th>Tahun Lulusan</th>
                                    <th>IPK</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th>MI</th>
                                    <td>DAARUL ULUM</td>
                                    <td>-</td>
                                    <td>2002</td>
                                    <td>-</td>
                                  </tr>
                                  <tr>
                                    <th>SMP</th>
                                    <td>124</td>
                                    <td>-</td>
                                    <td>2005</td>
                                    <td>-</td>
                                  </tr>
                                  <tr>
                                    <th>SMK</th>
                                    <td>BINA PUTRA</td>
                                    <td>Administrasi Perkantoran</td>
                                    <td>2008</td>
                                    <td>-</td>
                                  </tr>
                                  <tr>
                                    <th>UNIVERSITAS</th>
                                    <td>INDRAPRASTA PGRI</td>
                                    <td>TEKNIK INFORMATIKA</td>
                                    <td>TINGGAL SKRIPSI (SABTU-MINGGU)</td>
                                    <td>2,79</td>
                                  </tr>
                                </tbody>
                              </table>
                          </div>
                          <div class="mb-5">
                            <label for="exampleInputEmail1" class="form-control font-weight-bold alert alert-primary">RIWAYAT PELATIHAN</label>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NAMA KHURSUS/SEMINAR</th>
                                    <th scope="col">SERTIFIKAT</th>
                                    <th scope="col">TAHUN</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                </tbody>
                              </table>
                          </div>
                        <div class="mb-5">
                            <label for="exampleInputEmail1" class="form-control font-weight-bold alert alert-primary">RIWAYAT PEKERJAAN</label>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">NAMA PERUSAHAAN</th>
                                    <th scope="col">JAKARTA, 21 SEPTEMBER 2022th>
                                    <th scope="col">PENDAPATAN TERAKHIR</th>
                                    <th scope="col">BULAN-TAHUN</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th>Indosat Ooredoo</th>
                                    <td>FULL STACK DEVELOPER</td>
                                    <td>9 JUTA</td>
                                    <td>Agutus-2022</td>
                                  </tr>
                                  <tr>
                                    <th>Morzell Digital</th>
                                    <td>FULL STACK DEVELOPER</td>
                                    <td>6 Juta</td>
                                    <td>Desember-2021</td>
                                  </tr>
                                </tbody>
                              </table>
                          </div>
                        <div class="mb-3 row font-weight-bold">
                            <label for="inputPassword" class="col-sm-3 col-form-label">SKILL</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="LARAVEL, CODEIGNITER, JQUERY, GIT, MYSQL, MSSQL SERVER" placeholder="LARAVEL, CODEIGNITER, JQUERY, GIT, MYSQL, MSSQL SERVER">
                            </div>
                        </div>
                        <div class="mb-3 row font-weight-bold">
                            <label for="inputPassword" class="col-sm-3 col-form-label">BERSEDIA DITEMPATKAN DI SELURUH KANTOR PERUSAHAAN</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="YA, PALEMBANG, BANDUNG, JOGJA" placeholder="YA, PALEMBANG, BANDUNG, JOGJA">
                            </div>
                        </div>
                        <div class="mb-3 row font-weight-bold">
                            <label for="inputPassword" class="col-sm-3 col-form-label">PENGHASILAN YANG DIHARAPKAN</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword" value="8.000.000 / BULAN" placeholder="8.000.000 / BULAN">
                            </div>
                        </div>
                        <div class="offset-md-9 p-3">
                            <label for="exampleInputEmail1" class="form-label">JAKARTA, 21 SEPTEMBER 2022</label>
                        </div>
                        <div class="offset-md-9 p-5">
                            <label for="exampleInputEmail1" class="form-label">IMAM TANTOWI</label>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection