@if (isset($contract_winner))
    <tr class="select-{{ $contract_winner->id }} select-delete">
        <td>{{ $contract_winner->id }}</td>
        <td>{{ $contract_winner->contract_id }}</td>
        <td>{{ $contract_winner->tvgt }}</td>
        <td>{{ $contract_winner->tvkt }}</td>
        <td>{{ $contract_winner->code }}</td>
    </tr>
@endif