@extends('backend.layouts.master')
@section('title','Dashboard')
@section('content')
<link rel="stylesheet" href="{{ url(BACKEND_CSS_PATH.'/dashboardstyle.css') }}" />
<style>
    nav.flex.items-center.justify-between {
    margin-top: -35px;
    }
</style>
    <div class="page-wrapper">
        <div class="page-content">
                <?php 
                    $userid = Auth::id();
                    $user_id =app\Models\User::where('id', $userid)->first();
                    $uid = $user_id->status ;
                ?>
                <?php
                if($user_id->user_type=='super_admin'){ ?>
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                    <div class="col">
                        <a href="{{url('admin/post')}}">
                            <div class="card radius-10 bg-gradient-deepblue">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0 text-white"> </h5>
                                        <div class="ms-auto">
                                            <i class='bx bx-plus fs-3 text-white'></i>
                                        </div>
                                    </div>
                                    <div class="progress my-2 bg-white-transparent" style="height:4px;">
                                        <div class="progress-bar bg-white" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex align-items-center text-white">
                                        <p class="mb-0">Total Post</p>
                                        <p class="mb-0 ms-auto"><span><i class='bx bx-up-arrow-alt'></i></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{url('admin/blog')}}">
                        <div class="card radius-10 bg-gradient-ohhappiness">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 text-white"> </h5>
                                    <div class="ms-auto">
                                        <i class='bx bx-group fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-2 bg-white-transparent" style="height:4px;">
                                    <div class="progress-bar bg-white" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Total Blog</p>
                                    <p class="mb-0 ms-auto"><span><i class='bx bx-up-arrow-alt'></i></span></p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-gradient-ibiza">
                        <a href="{{url('admin/page')}}">	
                            <div class="card-body">
                                <div class="d-flex align-items-center" style="padding: 9px 0px;">
                                    <h5 class="mb-0 text-white"> </h5>
                                    <div class="ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather fs-3 text-white feather-truck"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                                    </div>
                                </div>
                                <div class="progress my-2 bg-white-transparent" style="height:4px;">
                                    <div class="progress-bar bg-white" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Total Page</p>
                                    <p class="mb-0 ms-auto"><span><i class='bx bx-up-arrow-alt'></i></span></p>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col">
                        <a href="{{url('admin/homebase')}}">
                            <div class="card radius-10 bg-gradient-moonlit">
                                <div class="card-body">
                                    <div class="d-flex align-items-center" style="padding: 6px 0px;">
                                        <h5 class="mb-0 text-white"> </h5>
                                        <div class="ms-auto">
                                            <i class='lni lni-graduation fs-3 text-white'></i>
                                        </div>
                                    </div>
                                    <div class="progress my-2 bg-white-transparent" style="height:4px;">
                                        <div class="progress-bar bg-white" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex align-items-center text-white">
                                        <p class="mb-0">Home Setting</p>
                                        <p class="mb-0 ms-auto"><span><i class='bx bx-up-arrow-alt'></i></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php } ?>
                
               
        </div>
    </div>
    
    
    {{-- //for laravel load data graph--}}
   
    {{-- // bar chart --}}
    <script>
            $(document).ready(function () {
            // Create DataTable
            var table = $('#loadfull').DataTable({
                dom: 'Pfrtip',
            });
            // Create the chart with initial data
            var container = $('<div/>').insertBefore(table.table().container());
            var chart = Highcharts.chart(container[0], {
                chart: {
                    type: 'column',
                    options3d: {
                        enabled: true,
                        alpha: 25,
                        beta: 0,
                        depth: 70,
                        viewDistance: 45
                    }
                },
                title: {
                    text: 'Loads Report By Full & Partial',
                },
                series: [
                    {
                        name:'Load',
                        data: chartData(table),
                        colorByPoint: true,
                    },
                ],
            });
            // On each draw, update the data in the chart
            table.on('draw', function () {
                chart.series[0].setData(chartData(table));
            });
            function chartData(table) {
            var counts = {};
            // Count the number of entries for each position
            table
                .column(0, { search: 'applied' })
                .data()
                .each(function (val) {
                    if (counts[val]) {
                        counts[val] += 1;
                    } else {
                        counts[val] = 1;
                    }
                });
            // And map it to the format highcharts uses
            return $.map(counts, function (val, key) {
                return {
                    name: key,
                    y: val,
                };
            });
        }
        
        
        //user type chart

        // Create DataTable

            var table = $('#alluser').DataTable({
                dom: 'Pfrtip',
            });
            // Create the chart with initial data

            var container = $('<div/>').insertBefore(table.table().container());
            var chart = Highcharts.chart(container[0], {
                chart: {
                    type: 'column',
                    options3d: {
                        enabled: true,
                        alpha: 25,
                        beta: 0,
                        depth: 70,
                        viewDistance: 45

                    }
                },
                title: {
                    text: 'User Report By User Type',
                },
                series: [
                    {
                        name:'User',
                        data: chartData(table),
                        colorByPoint: true,
                    },
                ],
            });
        
            // On each draw, update the data in the chart

            table.on('draw', function () {
                chart.series[0].setData(chartData(table));
            });
            function chartData(table) {
            var counts = {};
            // Count the number of entries for each position

            table

                .column(0, { search: 'applied' })
                .data()
                .each(function (val) {
                    if (counts[val]) {
                        counts[val] += 1;
                    } else {
                        counts[val] = 1;
                    }
                });
        
            // And map it to the format highcharts uses

            return $.map(counts, function (val, key) {
                return {
                    name: key,
                    y: val,
                };
            });
        }
        
        });
        
    </script>
    <!-- Start chart pie for shipper Start-->	
    <script>
        $(document).ready(function () {
            $("span.s_b_d").click(function(){
                $(".date-filter").slideToggle();
            })
                $.fn.dataTable.ext.search.push(
                    function (settings, data, dataIndex) {
                        var min = $('#min').datepicker('getDate');
                        var max = $('#max').datepicker('getDate');
                        var startDate = new Date(data[9]);
                        if (min == null && max == null) return true;
                        if (min == null && startDate <= max) return true;
                        if (max == null && startDate >= min) return true;
                        if (startDate <= max && startDate >= min) return true;
                        return false;
                    }
                );
            
                $('#min').datepicker();
                $('#max').datepicker();
                var table = $('#shipper_table').DataTable();
            
                // Event listener to the two range filtering inputs to redraw on input

                $('#min, #max').change(function () {
                    table.draw();
                });
                
                var container = $('<div/>').insertBefore(table.table().container());
                    var chart = Highcharts.chart(container[0], {
                        chart: {
                            type: 'pie',
                        },
                        title: {
                            text: 'Shipper Report By City',
                        },
                        series: [
                            {   
                                name:'Shipper',
                                data: chartData(table),
                            },
                        ],
                    });
                    // On each draw, update the data in the chart

                    table.on('draw', function () {
                        chart.series[0].setData(chartData(table));
                    });
                    

                    function chartData(table) {
            var counts = {};
            // Count the number of entries for each position

            table

                .column(0, { search: 'applied' })
                .data()
                .each(function (val) {
                    if (counts[val]) {
                        counts[val] += 1;
                    } else {
                        counts[val] = 1;
                    }
                });
            // And map it to the format highcharts uses

            return $.map(counts, function (val, key) {
                return {
                name: key,
                    y: val,
                };
            });
        }
            });
    </script>
    <!-- Start chart pie for shipper End -->
    
      @include('backend.common.footer')
@endsection