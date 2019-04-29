
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

                      <div id="chartdiv"></div>

                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    <script src="//www.amcharts.com/lib/4/core.js"></script>
    <script src="//www.amcharts.com/lib/4/charts.js"></script>
    <script>
        let chart = am4core.create(document.getElementById("chartdiv"), am4charts.XYChart);

    // Add Data
    chart.data = [{
    "week": "week1",
    "income": 221
    }, {
    "week": "week2",
    "income": 300
    }, {
    "week": "week3",
    "income": 490
    }, {
    "week": "week4",
    "income": 559
    }];

    // Add category axis
    let categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "week";

    // Add value axis
    let valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

    // Add series
    let series = chart.series.push(new am4charts.ColumnSeries());
    series.name = "Library Income";
    series.dataFields.categoryX = "week";
    series.dataFields.valueY = "income";



    </script>

@endsection
