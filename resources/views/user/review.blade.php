<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Review</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ecf0f1;
            margin: 0;
            padding: 20px;
        }

        .review-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 15px;
            border-bottom: 2px solid #eaeaea;
        }

        .review-header h2 {
            margin: 0;
            font-size: 26px;
            font-weight: 600;
            color: #34495e;
        }

        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
        }

        input[type="text"] {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #3498db;
        }

        .review-footer button {
            padding: 12px 25px;
            background-color: #2ecc71;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .review-footer button:hover {
            background-color: #27ae60;
        }

        .review-footer button:focus {
            outline: none;
        }

        .reviews-section {
            margin-top: 40px;
        }

        .reviews-section h3 {
            font-size: 22px;
            margin-bottom: 20px;
            color: #34495e;
        }

        .review-item {
            padding: 15px;
            background-color: #f7f7f7;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .review-item h4 {
            margin: 0;
            font-size: 18px;
            color: #2c3e50;
        }

        .review-item p {
            margin: 10px 0 0 0;
            color: #555;
            font-size: 16px;
        }

        .review-item small {
            display: block;
            margin-top: 10px;
            color: #888;
        }

        @media (max-width: 600px) {
            .review-container {
                padding: 20px;
            }

            input[type="text"], 
            .review-footer button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="review-container">
        <div class="review-header">
            <h2>{{ $produk->nama }}</h2>
        </div>

        <form action="/review/submit" method="POST">
            @csrf
            <input type="hidden" name="produk_id" value="{{ $produk->id }}">
            <input type="text" name="review" placeholder="Write your review here...">

            <div class="review-footer">
                <button type="submit">Submit Review</button>
            </div>
        </form>

        <!-- Section for displaying previous reviews -->
        <div class="reviews-section">
            <h3>Previous Reviews</h3>

            <!-- Loop through previous reviews -->
            @foreach($reviews as $review)
                <div class="review-item">
                    <p>{{ $review->review }}</p>
                    <small>Reviewed on {{ $review->created_at->format('F j, Y') }}</small>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
