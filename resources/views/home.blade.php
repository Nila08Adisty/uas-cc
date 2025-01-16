@extends('layout.app')
@section('content')
    @auth
        <p>Selamat Datang <b>{{ Auth::user()->nama_user }}</b></p>
    @endauth
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-header">
                    <i class="fa fa-users"></i> user
                </div>
                <div class="card-body">
                    <h3> {{ $jumlah_user }} User</h3>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('user.index') }}" class="text-white text-decoration-none">Selengkapnya &raquo;</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-header">
                    <i class="fa fa-users"></i> Total Buku
                </div>
                <div class="card-body">
                    <h3> {{ $jumlah_buku }} Buku</h3>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('buku.index') }}" class="text-white text-decoration-none">Selengkapnya &raquo;</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white">
                <div class="card-header">
                    <i class="fa fa-users"></i> Total Pinjam
                </div>
                <div class="card-body">
                    <h3> {{ $total_pinjam }} Buku</h3>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('peminjaman.index') }}" class="text-white text-decoration-none">Selengkapnya
                        &raquo;</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-danger text-white">
                <div class="card-header">
                    <i class="fa fa-users"></i> Jumlah Pinjam
                </div>
                <div class="card-body">
                    <h3> {{ $jumlah_pinjam }} User</h3>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('peminjaman.index') }}" class="text-white text-decoration-none">Selengkapnya
                        &raquo;</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules.exporting.js"></script>
    <script src="https://code.highcharts.com/modules.export-data.js"></script>
    <script src="https://code.highcharts.com/modules.accessibility.js"></script>
    <div id="container" class="my-5"></div>
    <script>
        Highcharts.chart('container', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Grafik Peminjaman 30 Hari Terakhir'
            },
            xAxis: {
                categories: <?= json_encode($categories) ?>
            },
            yAxis: {
                title: {
                    text: 'jumlah'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Peminjaman',
                data: <?= json_encode($data) ?>
            }]
        });
    </script>
@endsection
