<div class="container" style="padding: 30px 0">
    <div class="alert alert-dark" role="alert">
        Update Slider
        <a href="{{route('admin.homeslider')}}" class="btn btn-success pull-right"> All Sliders </a>

      </div>
      @if (Session::has('message'))
      <div class="alert alert-success" role="alert">
    {{Session::get('message')}}
    </div>

      @endif
      <form wire:submit.prevent="updateSlider">
        <label for="formGroupExampleInput" class="form-label">Title</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Title" wire:model="title">
        <label for="formGroupExampleInput1" class="form-label">Subtitle</label>
        <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="Subtitle" wire:model="subtitle">
        <label for="formGroupExampleInput2" class="form-label">Price</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Price" wire:model="price">
        <label for="formGroupExampleInput3" class="form-label">Link</label>
        <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Link" wire:model="link">
        <label class="form-label">Image</label>
        <input type="file" class="input-file" wire:model="newimage">
        @if ($newimage)
        <img src="{{$newimage->temporaryUrl()}}" width="120" />
        <br>
        @else
        <img src="{{asset('assets/images/sliders')}}/{{$image}}" width="120" />

        @endif
        <label class="form-label">Status</label>
        <select class="form-control" wire:model="status" >
            <option value="0" > Inactive </option>
            <option value="1" > Active </option>
        </select>

        <button type="submit" href="" class="btn btn-primary" style="margin: 20px 0"> Update </button>
      </form>
    </div>
