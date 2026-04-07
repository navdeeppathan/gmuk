@extends('admin.layouts.admin')

@section('title','Visa Requests')

@section('content')
            <div class="page-header">
                <h1 class="page-title">Dashboard</h1>
                <p class="page-subtitle">Visa Applications Overview</p>
            </div>

            <div class="stats-grid">

                <div class="stat-card">
                    <div class="stat-value">{{ $total_donations }}</div>
                    <div class="stat-label">Total Donations</div>
                </div>
            </div>

            

            {{-- <div class="chart-card">
                <div class="chart-header">
                    <div class="chart-title">
                        <div class="chart-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <div class="chart-title-text">
                            <h3>Visa Applications</h3>
                            <p>Monthly visa statistics</p>
                        </div>
                    </div>
                    
                </div>
                <div class="charts-wrapper">
                    <div class="chart-box">
                        <h3>Monthly Applications</h3>
                        <canvas id="performanceChart"></canvas>
                    </div>

                    <div class="chart-box">
                        <h3>Visa Distribution</h3>
                        <canvas id="visaPie"></canvas>
                    </div>
                </div>

                
            </div>
            <style>
                .charts-wrapper {
                    display: grid;
                    grid-template-columns: 2fr 1fr; /* bar big, pie small */
                    gap: 24px;
                    margin-top: 20px;
                }

                .chart-box {
                    background: #fff;
                    padding: 20px;
                    border-radius: 16px;
                    box-shadow: 0 4px 20px rgba(0,0,0,0.05);
                    width: 100%;
                }

                .chart-box h3 {
                    font-size: 16px;
                    font-weight: 600;
                    margin-bottom: 15px;
                    color: #1f2937;
                }

                /* Canvas styling */
                .chart-box canvas {
                    width: 100% !important;
                    height: 300px !important;
                }

                /* Responsive */
                @media (max-width: 900px) {
                    .charts-wrapper {
                        grid-template-columns: 1fr;
                    }

                    .chart-box canvas {
                        height: 250px !important;
                    }
                }
            </style>
            

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
                const ctx = document.getElementById('performanceChart');

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: @json($months),
                        datasets: [
                            {
                                label: 'China',
                                data: @json($chinaData),
                                backgroundColor: '#3b82f6'
                            },
                            {
                                label: 'Dubai',
                                data: @json($dubaiData),
                                backgroundColor: '#10b981'
                            },
                            {
                                label: 'Europe',
                                data: @json($europeData),
                                backgroundColor: '#f59e0b'
                            },
                            {
                                label: 'Ireland',
                                data: @json($irelandData),
                                backgroundColor: '#ef4444'
                            },
                            {
                                label: 'Morocco',
                                data: @json($moroccoData),
                                backgroundColor: '#8b5cf6'
                            },
                            {
                                label: 'Turkey',
                                data: @json($turkeyData),
                                backgroundColor: '#06b6d4'
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                new Chart(document.getElementById('visaPie'), {
                    type: 'doughnut',
                    data: {
                        labels: ['China','Dubai','Europe','Ireland','Morocco','Turkey'],
                        datasets: [{
                            data: [
                                {{ $china }},
                                {{ $dubai }},
                                {{ $europe }},
                                {{ $ireland }},
                                {{ $morocco }},
                                {{ $turkey }}
                            ],
                            backgroundColor: [
                                '#3b82f6','#10b981','#f59e0b','#ef4444','#8b5cf6','#06b6d4'
                            ]
                        }]
                    }
                });
            </script> --}}
@endsection            