<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div class="head-info">
            <h5>PageWorth</h5>
            <p>Email: PageWorth@autointegrity.com.au </p>
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
    </body>
</html>
