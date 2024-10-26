@extends('layouts.dashboard.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="text-center">Welcome {{Auth::user()->name}}</div>
            
            <div class="card mt-4" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-header">Chart Penjualan Ticket</h4>
                    </div>
                    <div class="col-6">
                        <a href="{{route('admin.order')}}" class="btn btn-primary mt-3" style="float:right; margin-right:10px;">Lihat Detail</a>
                        
                    </div>
                </div>
                <div class="card-body">
                <div>
                <canvas id="myChart"></canvas>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  // Initialize an empty chart
  const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [], // Will be filled with 'tanggal' data
      datasets: [{
        label: 'Ticket Terjual',
        data: [], // Data to be updated
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  // Fetch data from your Laravel route
  fetch('/admin/chartorder')  // replace with the actual route for GetChartOrder
    .then(response => response.json())
    .then(data => {
      // Assuming `data` is an array of dates or numbers.
      myChart.data.labels = data; // Set labels
      myChart.data.datasets[0].data = data.map(() => Math.floor(Math.random() * 20)); // Sample data for each date
      myChart.update();
    })
    .catch(error => console.error('Error fetching chart data:', error));
</script>

@endsection

