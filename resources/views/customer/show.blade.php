<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Booking Details</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th width="200">Booking ID</th>
                                <td>{{ $customer->booking_id }}</td>
                            </tr>
                            <tr>
                                <th>First Name</th>
                                <td>{{ $customer->firstname }}</td>
                            </tr>
                            <tr>
                                <th>Last Name</th>
                                <td>{{ $customer->lastname }}</td>
                            </tr>
                            <tr>
                                <th>Room Type</th>
                                <td>{{ $customer->room_type }}</td>
                            </tr>
                            <tr>
                                <th>Room Number</th>
                                <td>{{ $customer->room_number }}</td>
                            </tr>
                            <tr>
                                <th>Check-in Date</th>
                                <td>{{ $customer->checkin_date->format('M d, Y') }}</td>
                            </tr>
                            <tr>
                                <th>Check-out Date</th>
                                <td>{{ $customer->checkout_date->format('M d, Y') }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $customer->created_at->format('M d, Y h:i A') }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $customer->updated_at->format('M d, Y h:i A') }}</td>
                            </tr>
                        </table>

                        <div class="d-flex justify-content-between mt-3">
                            <a href="{{ route('customer.index') }}" class="btn btn-secondary">Back to List</a>
                            <div>
                                <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('customer.destroy', $customer->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>