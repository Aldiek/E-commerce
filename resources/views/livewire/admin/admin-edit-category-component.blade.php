<div class="container" style="padding: 30px 0">
    <div class="alert alert-dark" role="alert">
    Edit Category
        <a href="{{route('admin.categories')}}" class="btn btn-success pull-right"> All Category </a>

      </div>
      @if (Session::has('message'))
      <div class="alert alert-success" role="alert">
    {{Session::get('message')}}
    </div>

      @endif
      <form wire:submit.prevent="updateCategory">
        <label for="formGroupExampleInput" class="form-label">Category Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Category Name" wire:model="name" wire:keyup="generateslug">
        @error('name')<p class="text-danger">{{$message}}</p>
        @enderror
        <label for="formGroupExampleInput2" class="form-label">Category Slug</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Category Slug" wire:model="slug">
        @error('slug')<p class="text-danger">{{$message}}</p>
        @enderror
        <button type="submit" href="" class="btn btn-primary" style="margin: 20px 0"> Update Category </button>
      </form>
    </div>
