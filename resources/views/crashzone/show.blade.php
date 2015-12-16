@extends('layouts.crashzone')

@section('job-bar')
<div class="row">
    <div class="move-bar col-md-9 col-sm-8">
        <a href="{{ URL::previous() }}" class="func-button btn btn-warning">Back</a>

        <select class="id-select" name="">
            @foreach($customerIdList as $id)
            <option
                @if($id == $customer->id)
                    selected
                @endif
            >{{ $id }}</option>
            @endforeach
        </select>
    </div>
    <div class="action-bar col-md-3 col-sm-4">
        <div class="action-bar-item active"><a href="{{ route('show', ['id' => $customer->id]) }}">Details</a></div>
        <div class="action-bar-item"><a href="{{ route('report', ['id' => $customer->id]) }}">View</a></div>
    </div>
</div>
@endsection
@section('content')


    <div class="row quote-wrapper">
        <div class="blank-box"></div>
        <div class="quote-list">
            <div class="detail-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Owner</div>
                        <div class="panel-body">
                           <table width="100%">
                                        <tr>
                                            <td>Owner:</td>
                                            <td><input type="text" name="owner" value="{{ $customer->owner }}"></td>
                                        </tr>

                                        <tr>
                                            <td>Address:</td>
                                            <td><input type="text" name="address" value="{{ $customer->address }}"></td>
                                        </tr>

                                        <tr>
                                            <td>Mobile:</td>
                                            <td><input type="text" name="mobile" value="{{ $customer->mobile }}"></td>
                                        </tr>

                                        <tr>
                                            <td>Phone:</td>
                                            <td><input type="text" name="phone" value="{{ $customer->phone }}"></td>
                                        </tr>

                                        <tr>
                                            <td>Fax:</td>
                                            <td><input type="text" name="fax" value="{{ $customer->fax }}"></td>
                                        </tr>

                                        <tr>
                                            <td>Email:</td>
                                            <td><input type="text" name="email" value="{{ $customer->email }}"></td>
                                        </tr>
                                   </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Shop</div>
                        <div class="panel-body">
                           <table width="100%">
                                <tr>
                                    <td>Quote:</td>
                                    <td><input type="text" name="quote" value="{{ $customer->quote }}"></td>
                                </tr>

                                <tr>
                                    <td>Date in:</td>
                                    <td><input type="text" name="date_in" value="{{ $customer->date_in }}"></td>
                                </tr>

                                <tr>
                                    <td>Date out:</td>
                                    <td><input type="text" name="date_out" value="{{ $customer->date_out }}"></td>
                                </tr>

                                <tr>
                                    <td>Estimator:</td>
                                    <td><input type="text" name="estimator" value="{{ $customer->estimator }}"></td>
                                </tr>

                                <tr>
                                    <td>Total:</td>
                                    <td>$9.08</td>
                                </tr>
                           </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                <div class="panel panel-default">
                <div class="panel-heading">Vehicle</div>
                    <div class="panel-body">
                       <table width="100%">
                                    <tr>
                                        <td>Rego:</td>
                                        <td><input type="text" name="rego" value="{{ $customer->rego }}"></td>
                                    </tr>

                                    <tr>
                                        <td>D.O.M:</td>
                                        <td><input type="text" name="dom" value="{{ $customer->dom }}"></td>
                                    </tr>

                                    <tr>
                                        <td>Make:</td>
                                        <td><input type="text" name="make" value="{{ $customer->make }}"></td>
                                    </tr>

                                    <tr>
                                        <td>Model:</td>
                                        <td><input type="text" name="model" value="{{ $customer->model }}"></td>
                                    </tr>

                                    <tr>
                                        <td>Series:</td>
                                        <td><input type="text" name="series" value="{{ $customer->series }}"></td>
                                    </tr>

                                    <tr>
                                        <td>Badge:</td>
                                        <td><input type="text" name="badge" value="{{ $customer->badge }}"></td>
                                    </tr>

                                    <tr>
                                        <td>Colour:</td>
                                        <td><input type="text" name="colour" value="{{ $customer->colour }}"></td>
                                    </tr>
                               </table>
                    </div>
                </div>
            </div>

                <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Rates</div>
                    <div class="panel-body">
                       <table width="100%">
                            <tr>
                                <td>RR:</td>
                                <td><input type="text" name="rr" value="{{ $customer->rr }}"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>


            </div>


            </div>
        </div><!-- End of Quote-list-->
    </div>
@endsection

@section('script')
<script type="text/javascript">
    function checkIfModifiCustomerInfo() {
        $('input').on('change', function () {
            window.isChanged = true;
            autoUpdateCustomerInfo();
            // alert(window.isChanged);
        });
    }
    function getValuesForSubmit() {

        var data = {
            owner : $('input[name="owner"]').val(),
            address : $('input[name="address"]').val(),
            mobile : $('input[name="mobile"]').val(),
            phone : $('input[name="phone"]').val(),
            fax : $('input[name="fax"]').val(),
            email : $('input[name="email"]').val(),
            quote : $('input[name="quote"]').val(),
            date_in : $('input[name="date_in"]').val(),
            date_out : $('input[name="date_out"]').val(),
            estimator : $('input[name="estimator"]').val(),
            rego : $('input[name="rego"]').val(),
            dom : $('input[name="dom"]').val(),
            make : $('input[name="make"]').val(),
            model : $('input[name="model"]').val(),
            series : $('input[name="series"]').val(),
            badge : $('input[name="badge"]').val(),
            colour : $('input[name="colour"]').val(),
            rr : $('input[name="rr"]').val(),
            _token: "{{ csrf_token() }}",
        };
        return data;
    }

    function autoUpdateCustomerInfo() {
        if(window.isChanged) {
            window.setTimeout(function () {
                if(window.isChanged) {
                    updateCustomerInfo();
                }
            }, 4500);
        }
    }
    function updateCustomerInfo() {
        if (window.isChanged) {
            data = getValuesForSubmit();
            $.ajax({
                url:'{{ route("update", ["id" => $customer->id]) }}',
                data:data,
                method :'post'
            });
            window.isChanged = false;
        }
    }

    function updateCustomerOnclick() {
        $('a').on('click', function () {
            updateCustomerInfo();
        });

    }

    function onChangeIdSelect() {
        $('.id-select').on('change', function () {
            var id = $(this).val();
            var link = "{{ route('show', ['id' => "CUSTOMER_ID"]) }}";
            window.location.href = link.replace(/CUSTOMER_ID/,id);
        });
    }
    $(document).ready(function (){
        var isChanged = false;
        checkIfModifiCustomerInfo();
        updateCustomerOnclick();
        onChangeIdSelect();
    });
</script>

@endsection
