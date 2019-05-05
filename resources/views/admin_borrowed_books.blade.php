
@extends('layouts.app')

@section('content')

<div class="row mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Description</th>
                            <th scope="col">Categories</th>
                            <th scope="col">Image</th>
                            <th scope="col">Borrowing days</th>
                            <th scope="col">Fees per day</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($booksInfo as $bookInfo)
                            <tr>
                                <td><a href="/book/{{ $bookInfo->book->id }}">{{ $bookInfo->book->title }}</a></td>
                                <td>{{ $bookInfo->book->author }}</td>
                                <td>{{ $bookInfo->book->description }}</td>
                                <td>
                                @foreach ($bookInfo->book->categories as $category)
                                    <a href="/category/{{ $category->id }}">{{ $category->name }}</a><br>
                                @endforeach
                                {{ count($bookInfo->book->categories) ? '' : '#' }}
                                </td>
                                <td><img width="80" src="data:image/jpeg;base64,{{  base64_encode( $bookInfo->book->image )}}"/></td>
                                <td>{{ $bookInfo->number_of_days }}</td>
                                <td>{{ $bookInfo->fees_per_day }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <div>

                      </div>
                      {{ strtotime('-1 year') }}
                      <canvas id="myChart"  height="280" width="500"></canvas>
                      {{-- <div id="chartdiv"></div> --}}
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>


    <script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
        datasets: [{
            label: 'Library Profits',
            data: [{{ $week1 }}, {{ $week2 }}, {{ $week3 }}, {{ $week4 }}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


    </script>

@endsection
