<html>
    <title>produk</title>
    <body>
        <h2>list produk</h2>
        <hr>
        <a href="{{ URL('produk/create') }}">Create produk</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>produk</th>
                    <th>price</th>
                    <th>stock</th>
                </tr>
            </thead>
            <tbody>
                @forelse($produk as $data)
                <tr>
                    <td>{{ $data->id}}</td>
                    <td>{{ $data->produk}}</td>
                    <td>{{ $data->price}}</td>
                    <td>{{ $data->stock}}</td>
                    <td>
                        <a href="{{ URL('produk')}}/{{ $data->id }}/edit">Edit</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">List produk empty</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </body>
    </html>