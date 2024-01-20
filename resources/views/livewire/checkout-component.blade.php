@section('styles')
<link rel="stylesheet" href="{{ asset('/template/theme/assets') }}/pages/css/style.css">
@endsection

<div class="paper">
    <div class="receipt">
        <h2>Struk Pembelian</h2>
        <p><strong>Tanggal:</strong> 20 Januari 2024</p>
        <hr>
        <table class="table table-borderless ">
            <tr>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
            </tr>
            <tr>
                <td>Canda</td>
                <td>1</td>
                <td>Rp 20.000</td>
            </tr>
            <tr>
                <td>Tawa</td>
                <td>1</td>
                <td>Rp 21.000</td>
            </tr>
            <tr>
                <td><strong></strong></td>
                <td></td>
                <td><strong></strong></td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td></td>
                <td><strong>Rp 41.000</strong></td>
            </tr>
        </table>
    </div>
</div>