<x-admin.admin-layout>
    <form method="POST" action="/admin/store-post" enctype="multipart/form-data" class="w-100 needs-validation">
        @csrf
        <div class="mx-auto mt-5 w-50">
            <div class="d-flex flex-row row mr-4">
                <div class="col">
                    <label class="form-label">Title</label>
                    <input class="form-control" type="text" name='title'
                        value="{{old('title')}}" required>
                    @error('title')
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
                    <label class="form-label">Meta Description</label>
                    <input class="form-control" type="text" name='meta_description' placeholder="Default input"
                    value="{{old('meta_description')}}" required>
                    @error('meta_description')
                        <p>{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="d-flex flex-row row mr-4 mt-3 mb-5">
                <div class="col">
                    <label class="form-label">Category</label>
                        <select class="w-50 px-4" name="categories[]" id="multi-select" multiple size="5" required>

                            @foreach ($categories as $category)
                            <option class="form-check dropdown-item" name='{{$category->slug}}' value='{{$category->id}}'>
                                    {{$category->name}}
                                </label>
                            </option>
                            @endforeach
                        </select>
                    @error('categories')
                        <p>{{$message}}</p>
                    @enderror
                </div>


                <div class="input-group col d-flex flex-column">
                    <label for="formFile" class="form-label">Upload Banner</label>
                    <input type="file" name='image' class="form-control w-100" id="formFile"  value="{{old('image')}}" required>
                    @error('image')
                        <p>{{$message}}</p>
                    @enderror
                </div>


            </div>

        <textarea name="body" id="body"  value="{{old('body')}}" required   >
            
            
        </textarea>
        @error('body')
            <p>{{$message}}</p>
        @enderror


        </div>
        <button type="submit">Submit</button>
    </form>


    <script src="https://cdn.tiny.cloud/1/9zqrddzdgm35kitzjay64fm5egva49fvk9nwey73nv6hdr14/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="{{asset('js/tinymce.js')}}"></script>
</x-admin.admin-layout>
