<!DOCTYPE html>
<html>
<head>
    <title>Order Created</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        h1 {
            color: #007BFF;
        }
        p {
            margin: 10px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        td:first-child {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Order Confirmation</h1>
    <p>Dear {{ $order->user->name }},</p>
    <p>Thank You For Placing an Order At {{ $order->source }}</p>
    <p>Thank you for your order. Your order number is {{ $order->order_no }}.</p>
    <!-- Include additional order details as needed -->
    <p>The order you placed has the following details:</p>
    <table>
        <tr>
            <td>Order ID</td>
            <td>{{ $order->order_no }}</td>
        </tr>
        <tr>
            <td>Education Level</td>
            <td>{{ $order->academic_level }}</td>
        </tr>
        <tr>
            <td>Paper Type</td>
            <td>{{ $order->type_of_paper }}</td>
        </tr>
        <tr>
            <td>Number of Pages</td>
            <td>{{ $order->number_of_pages }}</td>
        </tr>
        <tr>
            <td>Number of Words</td>
            <td>{{ $order->number_of_words }}</td>
        </tr>
        <tr>
            <td>Submission Deadline</td>
            <td>{{ $order->delivery_time }}</td>
        </tr>
        <tr>
            <td>Number of References</td>
            <td>{{ $order->number_of_sources }}</td>
        </tr>
        <tr>
            <td>Paper Format</td>
            <td>{{ $order->citation_style }}</td>
        </tr>
        <tr>
            <td>Topic</td>
            <td>{{ $order->topic }}</td>
        </tr>
        <tr>
            <td>Subject Area</td>
            <td>{{ $order->subject }}</td>
        </tr>
        {{-- 
        <tr>
            <td>Preferred Writer</td>
            <td>{{ $order->writer }}</td>
        </tr> 
        --}}
        <tr>
            <td>Paper Description</td>
            <td>{{ $order->paper_description }}</td>
        </tr>
        <tr>
            <td>Contact Name</td>
            <td>{{ $order->user->name }}</td>
        </tr>
        <tr>
            <td>Contact Email ID</td>
            <td>{{ $order->user->email }}</td>
        </tr>
        <tr>
            <td>Contact Phone Number</td>
            <td>{{ $order->profile->phone }}</td>
        </tr>
        <tr>
            <td>Actual Price</td>
            <td>£ {{ $order->actual_price }}</td>
        </tr>
        <tr>
            <td>Discounted Price</td>
            <td>£ {{ $order->discounted_price }}</td>
        </tr>
        <tr>
            <td>Final Price</td>
            <td>£ {{ $order->final_price }}</td>
        </tr>
    </table>
</body>
</html>
