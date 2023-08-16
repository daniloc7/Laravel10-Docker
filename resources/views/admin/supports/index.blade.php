<h1> Listagem dos suportes </h1>

<a href="{{ route('supports.create') }}">Criar dúvida</a>
<table>
    <thead>
        <th>assunto</th>
        <th>status</th>
        <th>description</th>
    </thead>
    <tbody>
        @foreach ($supports as $support) {{--pega os valores de $supports e coloca dentro de $support (item = items[i])  --}}
            <tr>
                <td> {{ $support->subject}}</td>
                <td> {{ $support->status}}</td>
                <td> {{ $support->body}}</td>
                <td>
                    >
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    