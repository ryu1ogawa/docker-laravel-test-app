<form method="POST" action="{{ route('merchandise.store') }}">
    <div class="input-group mb-3">
        <label for="name" class="form-label">商品名</label>
        <input id="name" type="text" class="form-control" placeholder="" aria-label="name">
    </div>
    
    <div class="input-group mb-3">
        <label for="classification" class="form-label">分類</label>
        <input id="classification" type="text" class="form-control" placeholder="" aria-label="classification">
    </div>
    
    <div class="input-group mb-3">
        <label for="selling_price" class="form-label">販売価格(税抜き)</label>
        <input id="selling_price" type="text" class="form-control" placeholder="" aria-label="selling_price">
    </div>

    <div class="input-group mb-3">
        <label for="purchase_price" class="form-label">仕入れ価格</label>
        <input id="purchase_price" type="text" class="form-control" placeholder="" aria-label="purchase_price">
    </div>

    <button type="submit" class="btn btn-primary">追加</button>
</form>