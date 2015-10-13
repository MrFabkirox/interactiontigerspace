
              <h3>{{ $post->title }}</h3>

              <p>
                {{ $post->content }}
              </p>

              <p>
                {{ $post->created_at->diffForHumans() }}
              </p>