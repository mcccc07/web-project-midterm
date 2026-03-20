<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Booking</h3>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('customer.update', $customer->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="booking_id" class="form-label">Booking ID</label>
                                <input type="text" class="form-control @error('booking_id') is-invalid @enderror"
                                    id="booking_id" name="booking_id" value="{{ old('booking_id', $customer->booking_id) }}" required>
                                @error('booking_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstname" class="form-label">First Name</label>
                                    <input type="text" class="form-control @error('firstname') is-invalid @enderror"
                                        id="firstname" name="firstname" value="{{ old('firstname', $customer->firstname) }}" required>
                                    @error('firstname')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="lastname" class="form-label">Last Name</label>
                                    <input type="text" class="form-control @error('lastname') is-invalid @enderror"
                                        id="lastname" name="lastname" value="{{ old('lastname', $customer->lastname) }}" required>
                                    @error('lastname')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="room_type" class="form-label">Room Type</label>
                                <select class="form-select @error('room_type') is-invalid @enderror"
                                    id="room_type" name="room_type" required>
                                    <option value="">Select Room Type</option>
                                    <option value="Standard" {{ old('room_type', $customer->room_type) == 'Standard' ? 'selected' : '' }}>Standard</option>
                                    <option value="Deluxe" {{ old('room_type', $customer->room_type) == 'Deluxe' ? 'selected' : '' }}>Deluxe</option>
                                    <option value="Grand Deluxe" {{ old('room_type', $customer->room_type) == 'Grand Deluxe' ? 'selected' : '' }}>Grand Deluxe</option>
                                </select>
                                @error('room_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="room_number" class="form-label">Room Number</label>
                                <input type="number" class="form-control @error('room_number') is-invalid @enderror"
                                    id="room_number" name="room_number" value="{{ old('room_number', $customer->room_number) }}" min="1" max="100" required>
                                @error('room_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="checkin_date" class="form-label">Check-in Date</label>
                                    <input type="date" class="form-control @error('checkin_date') is-invalid @enderror"
                                        id="checkin_date" name="checkin_date" value="{{ old('checkin_date', $customer->checkin_date->format('Y-m-d')) }}" required>
                                    @error('checkin_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="checkout_date" class="form-label">Check-out Date</label>
                                    <input type="date" class="form-control @error('checkout_date') is-invalid @enderror"
                                        id="checkout_date" name="checkout_date" value="{{ old('checkout_date', $customer->checkout_date->format('Y-m-d')) }}" required>
                                    @error('checkout_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('customer.index') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update Booking</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>