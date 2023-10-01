@extends('layouts.app')

@section('content')
    <h1>Edit Product details</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mt-2">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ $product->name }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group mt-2">
            <label for="name">Name 1:</label>
            <input type="text" name="name1" id="name" class="form-control @error('name1') is-invalid @enderror"
                value="{{ $product->name1 }}">
            @error('name1')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group mt-2">
            <label for="name">Name 2:</label>
            <input type="text" name="name2" id="name" class="form-control @error('name2') is-invalid @enderror"
                value="{{ $product->name2 }}">
            @error('name2')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group mt-2">
            <label for="name">Name 3:</label>
            <input type="text" name="name3" id="name" class="form-control @error('name3') is-invalid @enderror"
                value="{{ $product->name3 }}">
            @error('name3')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group mt-2">
            <label for="surname">Code:</label>
            <input type="text" name="code" id="code" class="form-control @error('code') is-invalid @enderror"
                value="{{ $product->code }}">
            @error('code')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- <div class="form-group mt-2">
            <label for="type_id">type_id:</label>
            <input type="text" name="type_id" id="type_id" class="form-control @error('type_id') is-invalid @enderror"
                value="{{ $product->type_id }}">
            @error('type_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div> --}}
        <div class="form-group">
            <label for="type_id">Select Type</label>
            <select name="type_id" id="type_id" class="form-control @error('type_id') is-invalid @enderror">
                <option value="">Select a Group</option>
                @foreach($types as $type)
                    <option value="{{ $type->type_name }}" @if($type->type_name == $product->type_id) selected @endif>{{ $type->type_name }}</option>
                @endforeach
            </select>
            @error('type_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group mt-2">
            <label for="special_code1">special_code1:</label>
            <input type="text" name="special_code1" id="special_code1"
                class="form-control @error('special_code1') is-invalid @enderror" value="{{ $product->special_code1 }}">
            @error('special_code1')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group mt-2">
            <label for="special_code1">special_code2:</label>
            <input type="text" name="special_code2" id="special_code1"
                class="form-control @error('special_code2') is-invalid @enderror" value="{{ $product->special_code2 }}">
            @error('special_code2')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="special_code1">special_code3:</label>
            <input type="text" name="special_code3" id="special_code1"
                class="form-control @error('special_code3') is-invalid @enderror" value="{{ $product->special_code3 }}">
            @error('special_code3')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        
        <div class="form-group">
            <label for="category_id">Select Category</label>
            <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                <option value="">Select a Group</option>
                @foreach($categories as $category)
                    <option value="{{ $category->category_name }}" @if($category->category_name == $product->category_id) selected @endif>{{ $category->category_name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="product_group_id">Select Group</label>
            <select name="product_group_id" id="product_group_id" class="form-control @error('product_group_id') is-invalid @enderror">
                <option value="">Select a Group</option>
                @foreach($groups as $group)
                    <option data-info="{{ $group->id }}" value="{{ $group->group_name }}" @if($group->group_name == $product->product_group_id) selected @endif>{{ $group->group_name }}</option>
                @endforeach
            </select>
            @error('product_group_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="product_subgroup_id">Select Subgroup</label>
            <select name="product_subgroup_id" id="product_subgroup_id"
                class="form-control @error('product_subgroup_id') is-invalid @enderror">
                <option value="">Select a Subgroup</option>
            </select>
            @error('product_subgroup_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="form-group mt-2">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    <script>
        // JavaScript to handle the dynamic filtering of subgroups based on selected group
        document.getElementById('product_group_id').addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const groupId = selectedOption.dataset.info;  /// group is is store in data-info attribute
            const subgroups = @json($subgroups); // Convert PHP array to JavaScript array

            const subgroupSelect = document.getElementById('product_subgroup_id');
            subgroupSelect.innerHTML = '<option value="">Select a Subgroup</option>';

            subgroups.forEach(function(subgroup) {
                if (subgroup.product_group_id == groupId) {
                    const option = document.createElement('option');
                    option.value = subgroup.sub_group_name;
                    option.textContent = subgroup.sub_group_name;
                    subgroupSelect.appendChild(option);
                }
            });
        });
    </script>
@endsection
