<div>
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Discount (%)</th>
                <th>Amount</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderItems as $index => $orderItem)
                <tr>
                    <td>
                        {{-- <select name="product_id[]" class="form-control" wire:model="orderItems.{{ $index }}.product_id">
                            <option value="" selected disabled>Select Product</option>
                            @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select> --}}
                        <select name="product_id[]" class="form-control productname" >
                            <option>Select Product</option>
                        @foreach($products as $product)
                                <option name="product_id[]" value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td><input type="number" name="qty[]" class="form-control" wire:model="orderItems.{{ $index }}.qty"></td>
                    <td><input type="text" name="price[]" class="form-control" wire:model="orderItems.{{ $index }}.price" readonly></td>
                    <td><input type="text" name="dis[]" class="form-control" wire:model="orderItems.{{ $index }}.dis"></td>
                    <td><input type="text" name="amount[]" class="form-control" wire:model="orderItems.{{ $index }}.amount" readonly></td>
                    <td><button type="button" class="btn btn-danger" wire:click="removeRow({{ $index }})">Remove</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <button type="button" class="btn btn-primary" wire:click="addRow">Add Row</button>

    <div class="mt-3">
        <strong>Total: </strong><span>{{ $total ?? 0 }}</span>
    </div>
</div>
