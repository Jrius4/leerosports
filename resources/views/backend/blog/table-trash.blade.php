
        <?php $request = request(); ?>

        @foreach($posts as $post)

            <tr>
                <td>
                    {!! Form::open(['style' => 'display:inline-block;', 'method' => 'PUT', 'route' => ['backend.blog.restore', $post->id]]) !!}
                        @if (check_user_permissions($request, "Blog@restore", $post->id))
                            <button title="Restore" class="btn btn-xs btn-default">
                                <i class="fa fa-recycle"></i>
                            </button>
                        @else
                            <button title="Restore" onclick="return false;" class="btn btn-xs btn-default disabled">
                                <i class="fa fa-recycle"></i>
                            </button>
                        @endif
                    {!! Form::close() !!}

                    {!! Form::open(['style' => 'display:inline-block;', 'method' => 'DELETE', 'route' => ['backend.blog.force-destroy', $post->id]]) !!}
                        @if (check_user_permissions($request, "Blog@forceDestroy", $post->id))
                            <button title="Delete Permanent" onclick="return confirm('You are about to delete a post permanently. Are you sure?')" type="submit" class="btn btn-xs btn-danger">
                                <i class="fa fa-times"></i>
                            </button>
                        @else
                            <button title="Delete Permanent" onclick="return false;" type="submit" class="btn btn-xs btn-danger disabled">
                                <i class="fa fa-times"></i>
                            </button>
                        @endif
                    {!! Form::close() !!}
                </td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->author->name }}</td>
                <td>{{ $post->category->title }}</td>
                <td>
                    <abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr>
                </td>
            </tr>

        @endforeach

