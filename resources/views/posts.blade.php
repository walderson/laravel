<h1>Listagem de posts</h1>
<table>
    <tr>
        <th style="border: 1px solid #ccc;">id</th>
        <th style="border: 1px solid #ccc;">title</th>
        <th style="border: 1px solid #ccc;">body</th>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td style="border: 1px solid #ccc; text-align: right;">{{ $post['id'] }}</td>
        <td style="border: 1px solid #ccc;">{{ $post['title'] }}</td>
        <td style="border: 1px solid #ccc;">{{ $post['body'] }}</td>
    </tr>
    @endforeach
</table>