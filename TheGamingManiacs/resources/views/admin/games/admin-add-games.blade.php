<x-admin.admin-layout>
    <form method="POST" action="/admin/store-game" enctype="multipart/form-data" class="w-100 needs-validation">
        @csrf
        <div class="mx-auto mt-5 w-50">
            <div class="d-flex flex-row row mr-4">
                <div class="col">
                    <label class="form-label">Name</label>
                    <input class="form-control" type="text" name='name'
                        value="{{old('name')}}" required>
                    @error('name')
                        <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="col">
                    <label class="form-label">Slug</label>
                    <input class="form-control" type="text" name='slug'
                        value="{{old('slug')}}" required>
                    @error('slug')
                        <p>{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row row mr-4 mt-3">
                <div class="col">
                    <label class="form-label">Description</label>
                    <input class="form-control" type="text" name='description' placeholder="Default input"
                    value="{{old('description')}}" required>
                    @error('description')
                        <p>{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row row mr-4 mt-3 mb-5">
                <div class="input-group col d-flex flex-column">
                    <label for="formFile" class="form-label">Upload Image</label>
                    <input type="file" name='image' class="form-control w-100" id="formFile"  value="{{old('image')}}" required>
                    @error('image')
                        <p>{{$message}}</p>
                    @enderror
                </div>


            </div>
        </div>
        <button type="submit">Submit</button>
    </form>
</x-admin.admin-layout>