<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Shopping Cart</h1>
@php
    $totalMoney = 0;
@endphp
<table border="1px solid black">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Action</th>
    </tr>
    @foreach($shoppingCart as $key => $cartItem)
    <tr>
        <td>
            {{$cartItem['productId']}}
        </td>
        <td>
            {{$cartItem['productName']}}
        </td>
        <td>
            {{$cartItem['productPrice']}}
        </td>
        <td>
            {{$cartItem['quantity']}}
        </td>
        <td>
            <a href="/shopping-cart/add?productId={{$cartItem['productId']}}&quantity=1">Add</a>&nbsp;
            <a href="/shopping-cart/add?productId={{$cartItem['productId']}}&quantity=-1">Sub</a>&nbsp;
            <a href="/shopping-cart/remove?productId={{$cartItem['productId']}}">Remove</a>&nbsp;
        </td>
        @php
            $totalMoney += $cartItem['quantity'] * $cartItem['productPrice'];
        @endphp
    </tr>
    @endforeach

</table>
<strong>Total money {{$totalMoney}}</strong>
<a href="/products-customer">Back to shop</a>
</body>
</html>