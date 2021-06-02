<div class="container" style="padding: 30px 0">
    <div class="alert alert-dark" role="alert">
        Edit New Product
        <a href="{{route('admin.products')}}" class="btn btn-success pull-right"> All Products </a>

      </div>
      @if (Session::has('message'))
      <div class="alert alert-success" role="alert">
    {{Session::get('message')}}
    </div>

      @endif
      <form wire:submit.prevent="updateProduct" enctype="multipart/form-data">
        <label for="formGroupExampleInput" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Product Name" wire:model="name" wire:keyup="generateSlug">
        @error('name')<p class="text-danger">{{$message}}</p>
        @enderror
        <label for="formGroupExampleInput2" class="form-label">Product Slug</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Product Slug" wire:model="slug" >
        @error('slug')<p class="text-danger">{{$message}}</p>
        @enderror
        <label class="form-label">Short Description</label>
        <div wire:ignore>

        <textarea class="form-control" id="short_description" placeholder="Short Description"  wire:model="short_description"  >
        </textarea>
        @error('short_description')<p class="text-danger">{{$message}}</p>
        @enderror

</div>
        <label class="form-label">Description</label>
<div wire:ignore>
        <textarea class="form-control" id="description" placeholder="Description" wire:model="description"  >
        </textarea>
        @error('description')<p class="text-danger">{{$message}}</p>
        @enderror

</div>
        <label for="formGroupExampleInput7" class="form-label">Regular Price</label>
        <input type="text" class="form-control" id="formGroupExampleInput7" placeholder="Regular Price" wire:model="regular_price"  >
        @error('regular_price')<p class="text-danger">{{$message}}</p>
        @enderror
        <label for="formGroupExampleInput3" class="form-label">Sale Price</label>
        <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Sale Price" wire:model="sale_price"  >
        @error('sale_price')<p class="text-danger">{{$message}}</p>
        @enderror
        <label for="formGroupExampleInput4" class="form-label">SKU</label>
        <input type="text" class="form-control" id="formGroupExampleInput4" placeholder="SKU"  wire:model="SKU" >
        @error('SKU')<p class="text-danger">{{$message}}</p>
        @enderror
        <label class="form-label">Stock</label>
        <select class="form-control" wire:model="stock_status" >
            <option value="instock">Instock</option>
            <option value="outofstock">Out Of Stock</option>
        </select>
        @error('stock_status')<p class="text-danger">{{$message}}</p>
        @enderror
        <label class="form-label">Featured</label>
        <select class="form-control" wire:model="featured" >
            <option value="0">No</option>
            <option value="1">Yes</option>
        </select>
        <label for="formGroupExampleInput5" class="form-label">Quantity</label>
        <input type="text" class="form-control" id="formGroupExampleInput5" placeholder="Quantity" wire:model="quantity" >
        @error('quantity')<p class="text-danger">{{$message}}</p>
        @enderror
        <label for="formGroupExampleInput6" class="form-label">Product Image</label>
        <input type="file" class="input-file" id="formGroupExampleInput6" wire:model="newimage"  >
        @if ($newimage)
        <img src="{{$newimage->temporaryUrl()}}" width="120" />
        <br>
        @else
        <img src="{{asset('assets/images/products')}}/{{$image}}" width="120" />

        @endif
        @error('newimage')<p class="text-danger">{{$message}}</p>
        @enderror
        <label class="form-label">Category</label>
        <select class="form-control" wire:model="category_id" >
            <option value="">Select Category</option>
            @foreach ( $categories as $category )
            <option value="{{$category->id}}">{{$category->name}}</option>

            @endforeach
        </select>
        @error('category_id')<p class="text-danger">{{$message}}</p>
        @enderror
        <button type="submit" href="" class="btn btn-primary" style="margin: 20px 0"> Update Product </button>
      </form>
    </div>
    @push('scripts')
    <script>
    $(function(){
    tinymce.init({
        selector:'#short_description',
        setup:function(editor){
            editor.on('Change',function(e){
                tinyMCE.triggerSave();
                var sd_data = $('#short_description').val();
                @this.set('short_description',sd_data);
            });
        }
    });
    tinymce.init({
        selector:'#description',
        setup:function(editor){
            editor.on('Change',function(e){
                tinyMCE.triggerSave();
                var d_data = $('#description').val();
                @this.set('description',d_data);
            });
        }
    });

    });

    </script>

    @endpush
