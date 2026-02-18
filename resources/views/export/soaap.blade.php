
<?php  
libxml_use_internal_errors(true);
?>
<table>
    <thead>
    <tr>
        <th>Referenc</th>
        <th>Spot Report</th>
        <th>Spot companies</th>
        <th>Spot Mileage</th>
        <th>Spot highUsd</th>
        <th>Spot RateUsd</th>
        <th>Spot Timeframe</th>
        <th>Pickup</th>
        <th>Delivery</th>
        <th>Contract Report</th>
        <th>Contract Companies</th>
        <th>Contract Mileage</th>
        <th>Contract HighUsd</th>
        <th>Contract RateUsd</th>
        <th>Contract Timeframe</th>
        <th>Ref No</th>
        <th>Created Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($invoices as $item)
        <tr>
            <tr>
                <td class="copy-text">{{ $item->load_refid ?? "N/A"  }}</td>
                <td class="copy-text">{{ $item->spotreport ?? "N/A"  }}</td>
                <td class="copy-text">{{ $item->spotcompanies ?? "N/A"  }}</td>
                <td class="copy-text">{{ $item->spotmileage ?? "N/A"  }}</td>
                <td class="copy-text">{{ $item->spothighUsd ?? "N/A"  }}</td>
                <td class="copy-text">{{ $item->spotrateUsd ?? "N/A"  }}</td>
                <td class="copy-text">{{ $item->spottimeframe ?? "N/A"  }}</td>
                    @foreach ($item->loadorigin as $data)
                    <td class="copy-text">{{ $data->load_state_origin ?? "N/A" }}, {{$data->load_state_code ?? "N/A" }}</td>
                    <td class="copy-text">{{ $data->load_city_desti ?? "N/A" }} , {{ $data->drop_state_code ?? "N/A" }}</td>
                    @endforeach
                <td class="copy-text">{{ $item->contractreport ?? "N/A"  }}</td>
                <td class="copy-text">{{ $item->contractcompanies ?? "N/A"  }}</td>
                <td class="copy-text">{{ $item->contractmileage ?? "N/A"  }}</td>
                <td class="copy-text">{{ $item->contracthighUsd ?? "N/A"  }}</td>
                <td class="copy-text">{{ $item->contractrateUsd ?? "N/A"  }}</td>
                <td class="copy-text">{{ $item->contracttimeframe ?? "N/A"  }}</td>
                <td class="copy-text">{{ $item->ref_no ?? "N/A"  }}</td>
                <td>{{ date('d-m-Y', strtotime($item->created_at)) ?? "N/A"  }}</td>
            </tr>
        </tr>
    @endforeach
    </tbody>
</table>


