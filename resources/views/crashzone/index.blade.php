@extends('layouts.crashzone')
@section('css')
    <style>
        .pager {
            display:inline;
            float:left;
            margin-top: 0px;
            margin-right: 10px;
        }
    </style>
@endsection
@section('content')
<div class="row">
            <div class="move-bar col-md-9 col-sm-8">
                <div class="paginate-customer">
                    {!! $customerList->render() !!}
                </div>

                {!! Former::open(route('new'))->method('get')->style('display: inline')
                !!}

                {!! Former::submit('New')->class('func-button btn btn-primary') !!}

                {!! Former::close() !!}
                <!-- <a href="{{ route('new') }}" class="func-button btn btn-primary">New</a> -->
            </div>
            <div class="action-bar col-md-3 col-sm-4">

            </div>
        </div>

        <div class="row quote-wrapper">
            <div class="blank-box"></div>
            <div class="quote-list">
            <div>
                <table class="table table-striped quote-table table-responsive">
                    <thead>
                        <tr>
                            <th>Ref</th>
                            <th>Date</th>
                            <th>Owner</th>
                            <th>Rego</th>
                            <th>Make</th>
                            <th>Model</th>
                            <th>Colour</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customerList as $customer)
                            <tr data-id="{{ $customer->id }}">
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->quote_date }}</td>
                                <td>{{ $customer->owner }}</td>
                                <td>{{ $customer->rego }}</td>
                                <td>{{ $customer->make }}</td>
                                <td>{{ $customer->model }}</td>
                                <td>{{ $customer->colour }}</td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
    </div>
        </div>
@endsection

@section('script')
<script>
    var isFinished = false;
    function onSearch() {
        $('.search-bar input[name=search]').on('keypress', function (){
            window.isFinished = false;
            var _this = $(this);
            window.setTimeout(function (){
                // alert(isFinished)
                if (window.isFinished) {
                    var keywords = _this.val();
                        if (keywords != "") {
                            var url = "{{ route('search') }}";
                            $.ajax({
                                url: url,
                                method: 'post',
                                data: {
                                    keywords: keywords,
                                    _token: "{{ csrf_token() }}"
                                },
                                success: function(response) {
                                    $('.quote-list table tbody').html("");
                                    $('.quote-list table tbody').append(response);
                                }

                            });
                        } else {
                             location.reload();
                        }
                    window.isFinished = false;
                }
            }, 1000);
            window.isFinished = true;
            // alert($(this).val());

        });
    }
    function onClickCustomerTable() {
        $(document).on('click', '.quote-table tbody tr', function() {
            var id = $(this).attr('data-id');
            var link = "{{ route('show')}}"; //%7Bid%7D
            window.location.href = link.replace(/\%7Bid\%7D/,id);
        });
    }
    // onClickCustomerTable();
    $(document).ready(function () {
        onSearch();
        onClickCustomerTable();
    });
</script>
@endsection
