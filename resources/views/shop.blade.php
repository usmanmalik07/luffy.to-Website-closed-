<!-- resources/views/shop.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h1 class="mt-4">Shop</h1>

        <!-- Display Items -->
        <div class="container">
            <div class="row row-cols-2">
                @foreach($items as $item)
                    <div class="col mb-4">
                        <div class="card bg-primary text-white">
                            @if($item->image_path)
                                <img src="{{ asset($item->image_path) }}" alt="Item Image" class="card-img-top image-style">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text">
                                    Price: ${{ $item->price }} <br>
                                    Quantity: {{ $item->quantity }}
                                </p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-center"> <!-- Centered buttons -->
                                <form action="{{ route('shop.removeItemShop', ['id' => $item->id]) }}" method="post" class="mt-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Add Item Form -->
        <form action="{{ route('shop.addItemShop') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Item Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" name="price" step="0.01" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="number" name="quantity" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image:</label>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>
            <button type="submit" class="btn btn-success btn-lg d-block mx-auto">Add Item</button> <!-- Centered button -->
        </form>
    </div>

    <style>
        .image-style {
            border: 10px solid #ddd;
            /* Add a border for better visibility */
            border-radius: 5px;
            /* Optional: Add a border radius for a rounded appearance */
            margin-top: 10px;
            /* Add spacing above the image */
            width: 100%;
            /* Make the image take up the full width of its container */
            height: auto;
            /* Maintain the aspect ratio of the image */
        }

        /* Style the form */
        form {
            margin-top: 20px;
            /* Add spacing above the form */
        }

        /* Style the buttons */
        button {
            cursor: pointer;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
            border: 1px solid #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border: 1px solid #c82333;
        }

        /* Updated style for the Add Item button */
        .btn-success {
            background-color: #28a745;
            color: #fff;
            border: 1px solid #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border: 1px solid #218838;
        }
    </style>

    <style>
        @media (max-width: 576px) {
            /* Small devices (landscape phones) */
            .row-cols-2 > div {
                flex: 0 0 100%;
                /* Make each column take 100% width */
            }
        }
    </style>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
