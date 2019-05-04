@extends('layouts.master')


@section('title', 'Home')


@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/morris.css') }}">
@endsection


@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="mini-stats">
                                <h4 style="text-align:left;">Welcome, {{ Auth::user()->name }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget">
                            <div class="mini-stats">
                                <a href="/participants"><span class="bg_blue"><i class="fas fa-file-alt"></i></span></a>
                                <p>Kab. Bantul</p>
                                <h3>{{$bantul}} <span>Destinasi</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget">
                            <div class="mini-stats">
                                <a href="/merchants"><span class="bg-warning"><i class="fas fa-file-alt"></i></span></a>
                                <p>Kab. Sleman</p>
                                <h3>{{$sleman}} <span>Destinasi</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget">
                            <div class="mini-stats">
                                <a href="/speakers"><span class="bg_green"><i class="fas fa-file-alt"></i></span></a>
                                <p>Kab. Gunungkidul</p>
                                <h3>{{$gunungkidul}} <span>Destinasi</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget">
                            <div class="mini-stats">
                                <a href="/vouchers"><span class="bg_pink"><i class="fas fa-file-alt"></i></span></a>
                                <p>Kab. Kulonprogo</p>
                                <h3>{{$kulonprogo}} <span>Destinasi</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget">
                            <div class="mini-stats">
                                <a href="/transactions"><span class="bg-success"><i class="fas fa-file-alt"></i></span></a>
                                <p>Kota Yogyakarta</p>
                                <h3>{{$yogyakarta}} <span>Destinasi</span></h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="stats">
                                <div class="widget-title">
                                    <h3 class="text-uppercase"><i class="fa fa-chart-bar"></i> &nbsp; Statistik Pengunjung</h3>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="{{ asset('js/raphael-min.js') }}"></script>
    <script src="{{ asset('js/morris.js') }}"></script>

    <script>
        var data = @php echo $hits @endphp;
        
		$(function() {
			Morris.Area({
				element: 'morris-area-chart',
				data: data,
				xkey: 'date',
				ykeys: ['counter'],
				labels: ['Pengunjung'],
                dateFormat:
                    function(date) {
                        d = new Date(date);
                        var bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    
                        return ("0" + (d.getDate())).slice(-2) + ' ' + bulan[d.getMonth()] + ' ' + d.getFullYear(); 
                    },
				hideHover: 'auto',
				lineColors: ['#18BC9C'],
				fillOpacity: 0.2,
				gridIntegers: true,
				ymin: 0,
				ymax: 600,
				axes: 'y'
			});

			$('#morris-area-chart').resize(function () { bar.redraw(); });
		});
    </script>
@endsection