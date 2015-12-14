@extends('layouts.crashzone')

@section('job-bar')
<div class="row">
    <div class="move-bar col-md-9 col-sm-8">
        <a onclick="window.history.back();" class="func-button btn btn-warning">Back</a>

    </div>
    <div class="action-bar col-md-3 col-sm-4">
        <div class="action-bar-item"><a href="{{ route('show', ['id' => $customer->id]) }}">Details</a></div>
        <div class="action-bar-item active"><a href="{{ route('report', ['id' => $customer->id]) }}">View</a></div>
    </div>
</div>
@endsection

@section('content')
<div class="row quote-wrapper">
    <div class="blank-box">
        <div class="container-fluid">
            <div class="row pull-right">
                {!! Former::open(route('email', ['id' => $customer->id]))
                    ->method('post')
                    ->style('display:inline') !!}
                    <input type="email" name="email" id="input" value="">
                    <button type="submit" class="btn btn-primary func-button">Send</button>
                {!! Former::close() !!}
            </div>
        </div>

    </div>
    <div class="quote-list">
        <div class="detail-content">
            <div class="head-info">
                <h5>PageWorth</h5>
                <p>Email: PageWorth@autointegrity.com.au</p>
                <p>ABN</p>
                </div>

                <h3>Estimate No: <span class="estimate-no">{{ $customer->id }}</span></h3>

                <div class="owner-info">
                <table>
                    <tr>
                        <th>Quote Date:</th>
                        <td>{{ $customer->created_at }}</td>
                    </tr>

                    <tr>
                        <th>Owner:</th>
                        <td>{{ $customer->owner }}</td>
                    </tr>

                    <tr>
                        <th>Owner Address:</th>
                        <td>{{ $customer->address }}</td>
                    </tr>

                    <tr>
                        <th>Owner Email:</th>
                        <td>{{ $customer->email }}</td>
                    </tr>

                    <tr>
                        <th>Vehicle:</th>
                        <td>{{ $customer->dom }}</td>
                    </tr>

                    <tr>
                        <th>Rego</th>
                        <td>{{ $customer->rego }}</td>
                    </tr>

                    <tr>
                        <th>Model:</th>
                        <td>{{ $customer->model }}</td>
                    </tr>

                    <tr>
                        <th>colour</th>
                        <td>{{ $customer->colour }}</td>
                    </tr>



                </table>
            </div>

        </div>
    </div><!-- End of Quote-list-->
</div>
@endsection
