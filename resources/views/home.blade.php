@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-6 ">
                <div class="">
                    <h1>
                        Dashboard
                    </h1>
                </div>
                </hr>
            </div>
        </div>
        <hr />
        <style>
            a,
            a:hover {
                font-size: 1.1rem;
                text-decoration: none;
            }

            .list-group-item:hover {
                background: gainsboro;
            }
            .list-group-item{
              border-radius: 7px!important;
            }

        </style>
        <div class="row mt-2">
            <div class="col-4">
                <h3>Admission Forms</h3>
                <ul class="list-group">
                    <a
                            href="{{ route('get.form', ['type' => 'colRegistration']) }}"><li class="list-group-item mb-2 border">FOR BE</li></a>
                    
                    <a href="{{ route('get.form', ['type' => 'addmba']) }}"><li class="list-group-item mb-2 border">FOR
                            MBA</li></a>
                    <a href="{{ route('get.form', ['type' => 'mtech']) }}"><li class="list-group-item mb-2 border">FOR
                            M.Tech</li></a>
                </ul>
            </div>
            <div class="col-4 offset-1">
                <h3>Examination Forms</h3>
                <ul class="list-group">
                    <a href="{{ route('get.form', ['type' => 'examForm']) }}"><li class="list-group-item mb-2 border">Exam
                            Registration
                            for
                            BE</li></a>
                    <a href="{{ route('get.form', ['type' => 'exammba']) }}"><li class="list-group-item mb-2 border">Exam
                            Registration
                            for
                            MBA</li></a>
                    <a href="{{ route('get.form', ['type' => 'exammtech']) }}"><li class="list-group-item mb-2 border">Exam
                            Registration
                            M.Tech</li></a>
                </ul>
            </div>
        </div>
    </div>
    <div id="chart-container"></div>
    <script>
        var datas = {{}}
    
        Highcharts.chart('chart-container',{
            title:{
                text:'Growth,2020'
            },
            subtitle:{
                text:"Source: NA"
            },
            xAxis:{
                categories:['Jan','Feb','Mar','Apr','May','Jun','July','Aug','Sep','Oct','Nov','Dec']
            },
            yaxis:{
                title:{
                    text:'No of Submissions'
                }
                 
            },
            legend:{
                layout:'vertical',
                align:'right',
                verticalAlign:'middle'
            },
            plotOptions:{
                series:{
                    allowPoinrSelect:true
                }
            },
            series:[{
                name:'New User',
                data:datas
            }],
            responsive:{
                rules:[
                    {
                        condition:{
                            maxwidth:500
                        },
                        chartOptions:{
                            legend:{
                                layout:'horizontal',
                                align:'center',
                                verticalAlign:'bottom'
    
                            }
                        }
                    }
                ]
            }
    
    
        })
    </script> 
    
@endsection
