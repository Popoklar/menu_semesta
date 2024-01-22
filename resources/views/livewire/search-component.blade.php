<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
<datalist id="datalistOptions">
    @foreach ($products as $p)
    <option value="{{ $p->slug }}" data-url="{{ route('product.detail',['slug'=>$p->slug]) }}"></option>
    @endforeach
</datalist>