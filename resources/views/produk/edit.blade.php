<html>
    <title>Edit produk</title>
    <body>
        <h2>Edit produk</h2>
        <hr>
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>        
                    
                @endforeach

            </ul>>
            @endif
    <form action="{{ URL('produk') }}/{{ $produk->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <table>
                <tr>
                    <th>produk</th>
                    <td>
                        <input type="text" name="produk" value="{{ $produk->id }}" required>
                    </td>
                </tr>

                <tr>
                    <th>price</th>
                    <td>
                        <input type="number" name="price" value=" {{ $price->id}}" required>
                    </td>
                </tr>

                <tr>
                    <th>stock</th>
                    <td>
                        <input type="text" name="stock"  value="{{ $stock->id}}">
                    </td>
                </tr>
                 </table>
                 <button type="submit">save</button>
             </form>
        </body>
    </html>