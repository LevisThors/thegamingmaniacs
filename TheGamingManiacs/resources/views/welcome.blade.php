<x-header name="The Gaming Maniacs">
    <main>
        <!-- Feature Post-->
        <x-feature_card title="{{ $featured->posts[0]->title }}" image="{{ $featured->posts[0]->image }}" url="{{ $featured->posts[0]->slug }}">
        </x-feature_card>
        <!-- End of Feature Post -->


       
        <div class="main-container">
            <div class="responsive-body">
                <!-- Trending Feed -->
                <h2 class="mt-5 trending-title mb-0">Trending</h2>
                <hr class="hr hr-blurry mt-0 mb-4" />
                <div class="d-flex justify-content-center">
                    <div class="row row-cols-1 row-cols-md-3 g-4 text-white w-100">
                        @foreach ($trending->posts->take(4) as $post)
                            <x-trending_card title="{{ $post->title }}" image="{{ $post->image }}"
                                slug="{{ $post->slug }}" short_desc="{{ $post->meta_description }}">
                            </x-trending_card>
                        @endforeach
                    </div>
                </div>

                <!-- NEWS -->

                <h2 class="mt-5 trending-title mb-0">Gaming News</h2>
                <hr />
                <div class="row">
                    <div class="col-md-4 col-12 order-2">
                        <div class="w-100"></h3>HOTTEST GAMES<h3></div>
                        <ol class="list-group list-group-numbered">
                            @foreach ($hotGames->posts->take(4) as $hot)
                                <x-hot-games-item name="{{ $hot->title }}"></x-hot-games-item>
                            @endforeach
                        </ol>
                    </div>


                    <div class="col-md-8 col-12 order-1">
                        @foreach ($review->posts()->orderBy('created_at', 'desc')->take(6)->get() as $post)
                            <x-review_card title="{{ $post->title }}" short_desc="{{ $post->meta_description }}"
                                image="{{ $post->image }}" created_at="{{ $post->created_at }}" url="{{ $post->slug }}">
                            </x-review_card>
                        @endforeach
                    </div>
                </div>



                <h2 class="mt-5 trending-title mb-0">Tech Review</h2>
                <hr/>
                <div class="col-md-8 col-12 order-1">
                    @foreach ($review->posts()->orderBy('created_at', 'desc')->take(6)->get() as $post)
                        <x-review_card title="{{ $post->title }}" short_desc="{{ $post->meta_description }}"
                            image="{{ $post->image }}" created_at="{{ $post->created_at }}" url="/{{ $post->category }}/{{ $post->slug }}">
                        </x-review_card>
                    @endforeach
                </div>


            </div>
        </div>
    </main>
    <x-footer></x-footer>
</x-header>
